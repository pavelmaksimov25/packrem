<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdkTests\PackageRemover;

use PHPUnit\Framework\TestCase;
use SprykerSdk\SprykerFeatureRemover\Dto\PackageRemoveResult;
use SprykerSdk\SprykerFeatureRemover\Event\PackageRemovedEvent;
use SprykerSdk\SprykerFeatureRemover\PackageRemover\PackageRemover;
use SprykerSdk\SprykerFeatureRemover\Runner\RunnerFactory;
use SprykerSdk\SprykerFeatureRemover\Runner\RunnerInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;

class PackageRemoverTest extends TestCase
{
    /**
     * @return void
     */
    public function testRemovePackagesRemovesModulesByTheirNames(): void
    {
        // Arrange
        $directoryNames = [
            'spryker/dummy1',
        ];

        $runnerMock = $this->createMock(RunnerInterface::class);
        $runnerMock->expects($this->once())
            ->method('run')
            ->willReturn(true);

        $runnerFactoryMock = $this->createMock(RunnerFactory::class);
        $runnerFactoryMock->expects($this->once())
            ->method('createRunner')
            ->willReturn($runnerMock);

        $eventDispatcherMock = $this->createMock(EventDispatcher::class);
        foreach ($directoryNames as $name) {
            $postPackageRemoveEvent = new PackageRemovedEvent($name);
            $eventDispatcherMock->expects($this->once())
                ->method('dispatch')
                ->with($postPackageRemoveEvent)
                ->willReturn($postPackageRemoveEvent);
        }

        $packagesRemover = new PackageRemover($runnerFactoryMock, $eventDispatcherMock);

        // Act
        $result = $packagesRemover->removePackages($directoryNames);

        $this->assertInstanceOf(PackageRemoveResult::class, $result);

        $this->assertTrue(
            $result->isOk(),
            'Package remover must return positive response.',
        );

        $this->assertSame(
            [],
            $result->getMessages(),
            'The result must not contain any messages.',
        );
    }

    /**
     * @return void
     */
    public function testRemovePackagesReturnsErrorIfPackageRemovalIsNotPossible(): void
    {
        // Arrange
        $directoryNames = [
            'spryker/dummy1',
        ];

        $runnerMock = $this->createMock(RunnerInterface::class);
        $runnerMock->expects($this->once())
            ->method('run')
            ->willReturn(false);

        $runnerFactoryMock = $this->createMock(RunnerFactory::class);
        $runnerFactoryMock->expects($this->once())
            ->method('createRunner')
            ->willReturn($runnerMock);

        $eventDispatcherMock = $this->createMock(EventDispatcher::class);
        $eventDispatcherMock->expects($this->never())->method('dispatch');

        $packagesRemover = new PackageRemover($runnerFactoryMock, $eventDispatcherMock);

        // Act
        $result = $packagesRemover->removePackages($directoryNames);

        // Assert
        $this->assertFalse($result->isOk());
        $this->assertSame('Unable to remove packages. Error: ', $result->getMessages()[0]);
    }
}
