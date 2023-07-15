<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\PackageRemover;

use SprykerSdk\SprykerFeatureRemover\Dto\PackageRemoveResult;
use SprykerSdk\SprykerFeatureRemover\Event\PackageRemovedEvent;
use SprykerSdk\SprykerFeatureRemover\Runner\RunnerFactory;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class PackageRemover
{
    public function __construct(private RunnerFactory $runnerFactory, private EventDispatcherInterface $dispatcher)
    {
    }

    /**
     * @param $packages list<string>
     *
     * @return mixed ResponseDto
     * @todo use dto
     *
     */
    public function removePackages(array $packages, bool $isDryRun = false): PackageRemoveResult
    {
        $resultDto = new PackageRemoveResult();
        $packagesStr = implode(' ', $packages);

        // package pre-remove hook
        // What can be done here?

        // package remove
        $result = $this->runnerFactory->createRunner($isDryRun)->run('composer remove ' . $packagesStr);
        if ($result === false) {
            $resultDto->setIsOk(false);
            $resultDto->addMessage('Unable to remove packages. Error: '); // todo :: pass original error

            return $resultDto;
        }

        // todo :: refactor to action per packages
        foreach ($packages as $package) {
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

            $this->dispatcher->dispatch(new PackageRemovedEvent($package, $isDryRun));
        }

        return $resultDto;
    }
}
