<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdkTests\Adapter;

use PHPUnit\Framework\TestCase;
use SprykerSdk\SprykerFeatureRemover\Adapter\ComposerAdapter;

class ComposerAdapterTest extends TestCase
{
    /**
     * @var string
     */
    private const COMPOSER_LOCK_PATH = 'tests/_data/MockProjectBeta/composer.lock';

    /**
     * @return void
     */
    public function testGetListOfPackageDependencies(): void
    {
        $composerAdapter = new ComposerAdapter(static::COMPOSER_LOCK_PATH);

        $packageName = 'spryker/package-with-spryker-deps';

        $expectedDependencies = [
            'spryker/dependency-package1',
            'spryker/dependency-package2',
        ];

        $dependencies = $composerAdapter->getListOfPackageDependencies($packageName);

        $this->assertCount(2, $dependencies);
        $this->assertContains($expectedDependencies[0], $dependencies);
        $this->assertContains($expectedDependencies[1], $dependencies);
    }

    /**
     * @return void
     */
    public function testSprykerPackagesOnly(): void
    {
        $composerAdapter = new ComposerAdapter();

        $packages = [
            'package1',
            'spryker-package1',
            'package2',
            'spryker-package2',
        ];

        $expectedSprykerPackages = [
            'spryker-package1',
            'spryker-package2',
        ];

        $sprykerPackages = $composerAdapter->sprykerPackagesOnly($packages);

        $this->assertCount(2, $sprykerPackages);
        $this->assertContains($expectedSprykerPackages[0], $sprykerPackages);
        $this->assertContains($expectedSprykerPackages[1], $sprykerPackages);
    }
}
