<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdkTests\ModuleResolver;

use Exception;
use PHPUnit\Framework\TestCase;
use SprykerSdk\SprykerFeatureRemover\Adapter\ComposerAdapter;
use SprykerSdk\SprykerFeatureRemover\Resolver\ModuleResolver;

class ModuleResolverTest extends TestCase
{
    /**
     * @return void
     */
    public function testResolveRegularModuleNameByPackageName(): void
    {
        // Arrange
        $moduleResolver = new ModuleResolver($this->createMock(ComposerAdapter::class));

        $packageName = 'spryker/foo-bar';
        $expectedModuleName = 'FooBar';

        // Act
        $resolvedModuleName = $moduleResolver->resolveRegularModuleNameByPackageName($packageName);

        // Assert
        $this->assertSame($expectedModuleName, $resolvedModuleName);
    }

    /**
     * @return void
     */
    public function testIsFeaturePackage(): void
    {
        // Arrange
        $moduleResolver = new ModuleResolver($this->createMock(ComposerAdapter::class));

        $packageName = 'spryker-feature/foo';
        $nonFeaturePackageName = 'spryker-foo';

        // Act
        $isFeaturePackage = $moduleResolver->isFeaturePackage($packageName);
        $isNonFeaturePackage = $moduleResolver->isFeaturePackage($nonFeaturePackageName);

        // Assert
        $this->assertTrue($isFeaturePackage);
        $this->assertFalse($isNonFeaturePackage);
    }

    /**
     * @return void
     */
    public function testResolveFeatureModuleNameByPackageNameThrowsException(): void
    {
        // Arrange & Assert
        $composerAdapterMock = $this->createMock(ComposerAdapter::class);
        $composerAdapterMock->expects($this->once())->method('getListOfPackageDependencies');
        $composerAdapterMock->expects($this->once())->method('sprykerPackagesOnly')
            ->willReturn(['spryker-feature/package1']);
        $moduleResolver = new ModuleResolver($composerAdapterMock);
        $featurePackageName = 'spryker-feature-foo';

        $this->expectException(Exception::class);

        // @codingStandardsIgnoreStart
        $this->expectExceptionMessage("$featurePackageName feature package contains another feature package. Can not be removed, please remove manually.");
        // @codingStandardsIgnoreEnd

        // Act
        $moduleResolver->resolveFeatureModuleNameByPackageName($featurePackageName);
    }

    /**
     * @return void
     */
    public function testResolveFeatureModuleNameByPackageName(): void
    {
        // Arrange
        $featurePackageName = 'spryker-feature-foo';
        // Simulating a list of dependent packages
        $expectedDependencies = [
            'package1',
            'package2',
            'package3',
        ];

        $composerAdapterMock = $this->createMock(ComposerAdapter::class);
        $composerAdapterMock->expects($this->once())
            ->method('getListOfPackageDependencies');
        $composerAdapterMock->expects($this->once())
            ->method('sprykerPackagesOnly')
            ->willReturn($expectedDependencies);

        $moduleResolver = new ModuleResolver($composerAdapterMock);

        // Act
        $dependencies = $moduleResolver->resolveFeatureModuleNameByPackageName($featurePackageName);

        // Assert
        foreach ($expectedDependencies as $key => $dependency) {
            $expectedDependencies[$key] = ucfirst($dependency);
        }
        $this->assertSame($expectedDependencies, $dependencies);
    }
}
