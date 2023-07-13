<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdkTests\Validator;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use SprykerSdk\SprykerFeatureRemover\Adapter\ComposerAdapter;
use SprykerSdk\SprykerFeatureRemover\Dto\PackageInputValidationResult;
use SprykerSdk\SprykerFeatureRemover\Validator\PackageValidator;

class PackageValidatorTest extends TestCase
{
    /**
     * @return void
     */
    public function testIsValidListOfPackagesWhenAllPackagesAreSprykerShouldReturnValidResult(): void
    {
        // Arrange
        $composerAdapterMock = $this->createMock(ComposerAdapter::class);
        $composerAdapterMock->expects($this->exactly(2))
            ->method('isInstalled')
            ->willReturn(true);
        $validator = new PackageValidator($composerAdapterMock);
        $packageList = ['spryker/package1', 'spryker/package2'];

        // Act
        $result = $validator->isValidListOfPackages($packageList);

        // Assert
        $this->assertInstanceOf(PackageInputValidationResult::class, $result);
        $this->assertTrue($result->isOk());
        $this->assertEmpty($result->getMessage());
    }

    /**
     * @return void
     */
    public function testIsValidListOfPackagesWhenNonSprykerPackageExistsShouldReturnInvalidResult(): void
    {
        // Arrange
        $composerAdapterMock = $this->createMock(ComposerAdapter::class);
        $composerAdapterMock->expects($this->once())
            ->method('isInstalled')
            ->willReturn(true);

        $validator = new PackageValidator($composerAdapterMock);
        $packageList = ['spryker/package1', 'non-spryker/package'];

        // Act
        $result = $validator->isValidListOfPackages($packageList);

        // Assert
        $this->assertInstanceOf(PackageInputValidationResult::class, $result);
        $this->assertFalse($result->isOk());
        $this->assertSame('non-spryker/package is not spryker package.', $result->getMessage());
    }

    /**
     * @return void
     */
    public function testIsValidListOfPackagesWhenPackageNotInstalledShouldReturnInvalidResult(): void
    {
        // Arrange
        $composerAdapterMock = $this->createMock(ComposerAdapter::class);
        $composerAdapterMock
            ->method('isInstalled')
            ->will($this->returnCallback(function (string $packageName) {
                if ($packageName === 'spryker/package1') {
                    return true;
                }
                if ($packageName === 'spryker/non-existent') {
                    return false;
                }

                throw new InvalidArgumentException('Invalid input');
            }));
        $validator = new PackageValidator($composerAdapterMock);
        $packageList = ['spryker/package1', 'spryker/non-existent'];

        // Act
        $result = $validator->isValidListOfPackages($packageList);

        // Assert
        $this->assertInstanceOf(PackageInputValidationResult::class, $result);
        $this->assertFalse($result->isOk());
        $this->assertSame('spryker/non-existent is not installed.', $result->getMessage());
    }
}
