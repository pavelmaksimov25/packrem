<?php

namespace SprykerSdk\SprykerFeatureRemover\Actions;

use SprykerSdk\SprykerFeatureRemover\Adapter\RmDirAdapter;
use SprykerSdk\SprykerFeatureRemover\Dto\ActionDto;

class ModuleFolderRemover implements ActionInterface
{
    public function __construct(private RmDirAdapter $rmDirAdapter)
    {
    }

    public function act(ActionDto $actionDto): void
    {
        $result = $this->rmDirAdapter->removeModuleDirectoryFromProjectSrc($actionDto->getModuleName());
        if (!$result) {
            $actionDto->addErrorMessage('Could not delete folders for the module ' . $actionDto->getModuleName());
        }

        $result = $this->rmDirAdapter->removeModuleDirectoryFromProjectOrm($actionDto->getModuleName());
        if (!$result) {
            $actionDto->addErrorMessage('Could not delete folders for the module ' . $actionDto->getModuleName());
        }
    }
}