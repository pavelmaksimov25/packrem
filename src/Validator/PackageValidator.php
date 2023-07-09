<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\Validator;

use Composer\InstalledVersions;
use SprykerSdk\SprykerFeatureRemover\Adapter\ComposerAdapter;
use SprykerSdk\SprykerFeatureRemover\Dto\PackageInputValidationResult;

class PackageValidator
{
    public function __construct(private ComposerAdapter $composerAdapter)
    {
    }

    public function isValidListOfPackages(array $packageList): PackageInputValidationResult
    {
        $result = new PackageInputValidationResult();

        foreach ($packageList as $package) {
            if (!$this->isSprykerPackage($package)) {
                $result->setIsOk(false);
                $result->setMessage("$package is not spryker package.");

                return $result;
            }

            if (!$this->isPackageInstalled($package)) {
                $result->setIsOk(false);
                $result->setMessage("$package is not installed.");

                return $result;
            }
        }

        return $result;
    }

    public function isSprykerPackage(string $packageName): bool
    {
        return (bool)preg_match('/^spryker/', strtolower($packageName));
    }

    public function isPackageInstalled(string $packageName): bool
    {
        return $this->composerAdapter->isInstalled($packageName);
    }
}
