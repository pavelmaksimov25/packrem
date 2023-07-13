<?php

namespace SprykerSdk\SprykerFeatureRemover\Actions;

use SprykerSdk\SprykerFeatureRemover\Dto\ActionDto;

interface ActionInterface
{
    public function act(ActionDto $actionDto): void;
}