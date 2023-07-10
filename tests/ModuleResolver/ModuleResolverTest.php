<?php

namespace SprykerSdkTests\ModuleResolver;

use PHPUnit\Framework\TestCase;
use SprykerSdk\SprykerFeatureRemover\Adapter\ComposerAdapter;
use SprykerSdk\SprykerFeatureRemover\Resolver\ModuleResolver;

class ModuleResolverTest extends TestCase
{
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

    public function testResolveFeatureModuleNameByPackageNameThrowsException(): void
    {
        // Arrange & Assert
        $composerAdapterMock = $this->createMock(ComposerAdapter::class);
        $composerAdapterMock->expects($this->once())->method('getListOfPackageDependencies');
        $composerAdapterMock->expects($this->once())->method('sprykerPackagesOnly')
            ->willReturn(['spryker-feature/package1']);
        $moduleResolver = new ModuleResolver($composerAdapterMock);
        $featurePackageName = 'spryker-feature-foo';

        $this->expectException(\Exception::class);
        $this->expectExceptionMessage("$featurePackageName feature package contains another feature package. Can not be removed, please remove manually.");

        // Act
        $moduleResolver->resolveFeatureModuleNameByPackageName($featurePackageName);
    }

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
