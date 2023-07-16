<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\EventSubscriber;

use SprykerSdk\SprykerFeatureRemover\Action\ActionInterface;
use SprykerSdk\SprykerFeatureRemover\Dto\ActionDto;
use SprykerSdk\SprykerFeatureRemover\Event\PackageRemovedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AfterPackageRemovedEventSubscriber implements EventSubscriberInterface
{
    /**
     * @param iterable<ActionInterface> $actions
     */
    public function __construct(private iterable $actions)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PackageRemovedEvent::NAME => 'processAfterModuleRemoved',
        ];
    }

    /**
     * @return void
     */
    public function processAfterModuleRemoved(PackageRemovedEvent $event): void
    {
        if ($event->isDryRun()) {
            echo 'dry-run enabled. Nothing to execute.' . PHP_EOL;

            return;
        }

        $actionDto = new ActionDto();
        $actionDto->setModuleName($event->getModuleName());
        foreach ($this->actions as $action) {
            $action->act($actionDto);
        }
    }
}
