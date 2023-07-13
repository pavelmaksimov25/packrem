<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\PackageRemover;

use SprykerSdk\SprykerFeatureRemover\Dto\PackageRemoveResult;
use SprykerSdk\SprykerFeatureRemover\Event\PackageRemovedEvent;
use SprykerSdk\SprykerFeatureRemover\Runner\RunnerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class PackageRemover
{
    public function __construct(private RunnerInterface $runner, private EventDispatcherInterface $dispatcher)
    {
    }

    /**
     * @todo use dto
     *
     * @param $packages list<string>
     *
     * @return mixed ResponseDto
     */
    public function removePackages(array $packages): PackageRemoveResult
    {
        $resultDto = new PackageRemoveResult();
        foreach ($packages as $package) {
            // package pre-remove hook
            // What can be done here?

            // package remove
            $result = $this->runner->run('composer remove ' . $package);
            if ($result === false) {
                $resultDto->setIsOk(false);
                $resultDto->addMessage("Unable to remove $package. Error: "); // todo :: pass original error

                return $resultDto;
            }

            /* package post-remove hook
             * Removes:
             *  - related plugins.
             *  - related configs.
             *      - cron jobs
             *      - oms
             *      - state machine
             *      - data?
             *  - related tests.
             *  - related folders on the project level.
             *  - related generated data.
             *  - related ORM data. Remove from src/Orm/*
             */

            $this->dispatcher->dispatch(new PackageRemovedEvent($package));
        }

        return $resultDto;
    }
}
