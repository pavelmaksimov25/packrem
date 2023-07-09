<?php

/**
 * MIT License
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace SprykerSdk\PHPStanSpryker\Test\Rules\Spryker;

use PHPStan\Cache\Cache;
use PHPStan\Reflection\Annotations\AnnotationsMethodsClassReflectionExtension;
use SprykerSdk\PHPStanSpryker\Type\Spryker\DynamicMethodMissingTypeExtension;
use PHPUnit\Framework\TestCase;

class DynamicMethodMissingTypeExtensionTest extends TestCase
{
    /**
     * @return void
     */
    public function testInstance(): void
    {
        $extension = $this->getMockBuilder(AnnotationsMethodsClassReflectionExtension::class)->disableOriginalConstructor()->getMock();
        $cache = $this->getMockBuilder(Cache::class)->disableOriginalConstructor()->getMock();
        $instance = new DynamicMethodMissingTypeExtension($extension, $cache, 'test', []);
        $this->assertInstanceOf(DynamicMethodMissingTypeExtension::class, $instance);
    }
}
