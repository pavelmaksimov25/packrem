<?php

namespace SprykerSdk\SprykerFeatureRemover\Actions;

use SprykerSdk\SprykerFeatureRemover\Dto\ActionDto;

class DataBuilderReGenerator implements ActionInterface
{
    private const GENERATED_DATA_BUILDER_DIR = 'src/Generated/Shared/DataBuilder';

    public function act(ActionDto $actionDto): void
    {
        $this->removeGeneratedFiles();
        $this->generateFiles();
    }

    private function removeGeneratedFiles(): void
    {
        $result = shell_exec('rm -rf ' . self::GENERATED_DATA_BUILDER_DIR);
        if (!$result) {
            echo $result . PHP_EOL;
        }
    }

    private function generateFiles(): void
    {
        $result = shell_exec('vendor/bin/console transfer:databuilder:generate');
        if (!$result) {
            echo 'DataBuilder re-generation failed. Please run manually: ' . PHP_EOL;
            echo 'vendor/bin/console transfer:databuilder:generate' . PHP_EOL;
        }
    }
}
