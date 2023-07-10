<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\Command;

use SprykerSdk\SprykerFeatureRemover\Adapter\ComposerAdapter;
use SprykerSdk\SprykerFeatureRemover\PackageRemover\PackageRemover;
use SprykerSdk\SprykerFeatureRemover\Validator\PackageValidator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RemovePackagesCommand extends Command
{
    /**
     * @var string
     */
    private const NAME = 'package-remover:run';

    public function __construct(private PackageRemover $packageRemover, private PackageValidator $packageValidator)
    {
        parent::__construct(static::NAME);
    }

    /**
     * @return void
     */
    protected function configure(): void
    {
        $this
            ->setDescription('Removes Spryker packages with the related code on the project level.')
            ->addArgument('packages', InputArgument::IS_ARRAY, 'List of spryker packages');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $packages = $input->getArgument('packages');
        if (count($packages) === 0) {
            $output->writeln('<warning>No packages provided.</warning>');

            return Command::SUCCESS;
        }

        $packageValidationResult = $this->packageValidator->isValidListOfPackages($packages);
        if (!$packageValidationResult->isOk()) {
            $output->writeln($packageValidationResult->getMessage());

            return Command::FAILURE;
        }

        $result = $this->packageRemover->removePackages($packages);
        if (!$result->isOk()) {
            $output->writeln($result->getMessages());
        }

        $output->writeln('Done. Removed packages:');
        $output->writeln($packages);

        return Command::SUCCESS;
    }
}
