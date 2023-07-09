<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\Resolver;

class ModuleResolver
{
    public function resolveModuleNameByPackageName(string $packageName): array
    {
        if ($this->isFeaturePackage($packageName)) {
            return $this->resolveMany($packageName);
        }

        return $this->resolveOne($packageName);
    }

    private function isFeaturePackage(string $packageName): bool
    {
        return false; // TODO :: stub
    }

    private function resolveMany(string $packageName): array
    {
        return []; // TODO :: stub
    }

    private function resolveOne(string $packageName): array
    {
        return []; // TODO :: stub
    }
}
