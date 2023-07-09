<?php

namespace SprykerSdk\SprykerFeatureRemover\Adapter;

use Composer\InstalledVersions;

class ComposerAdapter
{
    public function isInstalled(string $packageName): bool
    {
        return InstalledVersions::isInstalled($packageName);
    }
}