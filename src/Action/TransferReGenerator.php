<?php

namespace SprykerSdk\SprykerFeatureRemover\Actions;

use SprykerSdk\SprykerFeatureRemover\Dto\ActionDto;

class TransferReGenerator implements ActionInterface
{
    private const GENERATED_TRANSFER_DIR = 'src/Generated/Shared/Transfer';

    public function act(ActionDto $actionDto): void
    {
        $this->removeGeneratedTransfers();
        $this->generateTransfers();
    }

    private function removeGeneratedTransfers(): void
    {
        $result = shell_exec('rm -rf ' . self::GENERATED_TRANSFER_DIR);
        if (!$result) {
            echo $result . PHP_EOL;
        }
    }

    private function generateTransfers(): void
    {
        $result = shell_exec('vendor/bin/console transfer:generate');
        if (!$result) {
            echo 'Transfer re-generation failed. Please run manually: ' . PHP_EOL;
            echo 'vendor/bin/console transfer:generate' . PHP_EOL;
        }
    }
}
