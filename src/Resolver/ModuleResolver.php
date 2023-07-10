<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\Resolver;

use SprykerSdk\SprykerFeatureRemover\Adapter\ComposerAdapter;

class ModuleResolver
{
    public function __construct(private ComposerAdapter $composerAdapter)
    {
    }

    public function resolveRegularModuleNameByPackageName(string $packageName): string
    {
        $packageName = basename($packageName);
        $packageName = ucwords($packageName, '-');

        return str_replace('-', '', $packageName);
    }

    public function resolveFeatureModuleNameByPackageName(string $featurePackageName): array
    {
        $dependencies = [];
        $packages = $this->composerAdapter->getListOfPackageDependencies($featurePackageName);
        $packages = $this->composerAdapter->sprykerPackagesOnly($packages);
        foreach ($packages as $package) {
            if ($this->isFeaturePackage($package)) {
                throw new \Exception("$featurePackageName feature package contains another feature package. Can not be removed, please remove manually.");
            }

            $dependencies[] = $this->resolveRegularModuleNameByPackageName($package);
        }

        return $dependencies;
    }

    public function isFeaturePackage(string $packageName): bool
    {
        return (bool)preg_match('/^spryker-feature/', strtolower($packageName));
    }
}
