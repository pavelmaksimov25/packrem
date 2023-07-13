<?php

namespace SprykerSdk\SprykerFeatureRemover\EventSubscriber;

use SprykerSdk\SprykerFeatureRemover\Actions\ActionInterface;
use SprykerSdk\SprykerFeatureRemover\Dto\ActionDto;
use SprykerSdk\SprykerFeatureRemover\Event\PackageRemovedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AfterPackageRemovedEventSubscriber implements EventSubscriberInterface
{
    /**
     * @param array<ActionInterface> $actions
     */
    public function __construct(private array $actions)
    {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PackageRemovedEvent::NAME => [
                ['processAfterModuleRemoved', 0]
            ],
        ];
    }

    public function processAfterModuleRemoved(PackageRemovedEvent $event): void
    {
        $actionDto = new ActionDto();
        $actionDto->setModuleName($event->getModuleName());
        foreach ($this->actions as $action) {
            $action->act($actionDto);
        }
    }
}