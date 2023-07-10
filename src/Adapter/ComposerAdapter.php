<?php

namespace SprykerSdk\SprykerFeatureRemover\Adapter;

use Composer\InstalledVersions;

class ComposerAdapter
{
    public function __construct(private string $composerLockPath = 'composer.lock')
    {
    }

    public function isInstalled(string $packageName): bool
    {
        return InstalledVersions::isInstalled($packageName);
    }

    public function getListOfPackageDependencies(string $packageName): array
    {
        // Read the composer.lock file
        $composerLockData = file_get_contents($this->composerLockPath);
        $composerLock = json_decode($composerLockData, true);

        $dependencies = [];

        // Find the specified package in the composer.lock file
        foreach ($composerLock['packages'] as $package) {
            if ($package['name'] !== $packageName) {
                continue;
            }

            // Get the dependencies of the package
            if (isset($package['require'])) {
                $dependencies[] = array_keys($package['require']);
            }

            if (isset($package['require-dev'])) {
                $dependencies[] = array_keys($package['require-dev']);
            }

            break;
        }

        return array_unique(array_merge(...$dependencies));
    }

    public function sprykerPackagesOnly(array $packages): array
    {
        return array_filter(
            $packages,
            fn($packageName) => str_contains($packageName, 'spryker'),
        );
    }
}