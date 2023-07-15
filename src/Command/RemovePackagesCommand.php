<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\Command;

use SprykerSdk\SprykerFeatureRemover\PackageRemover\PackageRemover;
use SprykerSdk\SprykerFeatureRemover\Validator\PackageValidator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class RemovePackagesCommand extends Command
{
    /**
     * @var string
     */
    private const NAME = 'package-remover:run';

    public function __construct(private PackageRemover $packageRemover, private PackageValidator $packageValidator)
    {
        parent::__construct(self::NAME);
    }

    /**
     * @return void
     */
    protected function configure(): void
    {
        $this
            ->setDescription('Removes Spryker packages with the related code on the project level.')
            ->addArgument('packages', InputArgument::IS_ARRAY, 'List of spryker packages')
            ->addOption('dry-run', '', InputOption::VALUE_NONE, 'Dry-run mode,');
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $packages = $input->getArgument('packages');
        if (count($packages) === 0) {
            $output->writeln('<comment>No packages provided.</comment>');

            return Command::SUCCESS;
        }

        $packageValidationResult = $this->packageValidator->isValidListOfPackages($packages);
        if (!$packageValidationResult->isOk()) {
            $output->writeln($packageValidationResult->getMessage());

            return Command::FAILURE;
        }

        $result = $this->packageRemover->removePackages($packages, (bool)$input->getOption('dry-run'));
        if (!$result->isOk()) {
            $output->writeln($result->getMessages());
        }

        $output->writeln('Removed packages:');
        $output->writeln($packages);
        $output->writeln('<info>Done!</info>');

        return Command::SUCCESS;
    }
}
