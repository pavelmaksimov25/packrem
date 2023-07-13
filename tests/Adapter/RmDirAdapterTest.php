<?php

namespace SprykerSdkTests\Adapter;

use PHPUnit\Framework\TestCase;
use SprykerSdk\SprykerFeatureRemover\Adapter\RmDirAdapter;

class RmDirAdapterTest extends TestCase
{
    private const PROJECT_NAMESPACE = 'Pyz';
    private const MODULE_NAME = 'PatricSwayze';


    protected function setUp(): void
    {
        if (file_exists('src/' . self::PROJECT_NAMESPACE)) {
            exec('rm -rf '. 'src/' . self::PROJECT_NAMESPACE);
        }

        if (file_exists('src/Orm')) {
            exec('rm -rf '. 'src/Orm');
        }

    }

    protected function tearDown(): void
    {
        exec('rm -rf '. 'src/' . self::PROJECT_NAMESPACE);
        exec('rm -rf '. 'src/Orm');
    }

    /**
     * @return void
     */
    public function testRemoveModuleDirectoryFromProjectRemovesModuleFromAllLayers(): void
    {
        // Assert
        foreach (RmDirAdapter::APP_LAYERS as $appLayer) {
            mkdir($this->makeModulePathInProject($appLayer), 0755, true);
        }

        $adapter = new RmDirAdapter(self::PROJECT_NAMESPACE);

        // Act
        $isOk = $adapter->removeModuleDirectoryFromProjectSrc(self::MODULE_NAME);

        // Arrange
        $this->assertTrue($isOk);
        foreach (RmDirAdapter::APP_LAYERS as $appLayer) {
            $this->assertFalse(
                file_exists($this->makeModulePathInProject($appLayer)),
                'Folder ' . $this->makeModulePathInProject($appLayer) . ' must be removed.'
            );

            $modulePath = $this->makeModulePathInProject($appLayer);
            $path = str_replace('/' . self::MODULE_NAME, '', $modulePath);
            $this->assertTrue(
                file_exists($path),
                'Layer ' . $appLayer . ' must not be removed.'
            );
        }
    }

    /**
     * @return void
     */
    public function testRemoveModuleDirectoryFromProjectOrmRemovesModule(): void
    {
        // Assert
        mkdir('src/Orm/Zed/' . self::MODULE_NAME, 0755, true);
        $adapter = new RmDirAdapter(self::PROJECT_NAMESPACE);

        // Act
        $isOk = $adapter->removeModuleDirectoryFromProjectOrm(self::MODULE_NAME);

        // Arrange
        $this->assertTrue($isOk);
        $this->assertFalse(
            file_exists('src/Orm/Zed/' . self::MODULE_NAME),
            'Module ' . self::MODULE_NAME . ' must be removed from src/Orm/Zed/ directory.'
        );
    }

    private function makeModulePathInProject(string $appLayer): string
    {
        return sprintf('src/%s/%s/%s',
            self::PROJECT_NAMESPACE,
            $appLayer,
            self::MODULE_NAME
        );
    }
}
