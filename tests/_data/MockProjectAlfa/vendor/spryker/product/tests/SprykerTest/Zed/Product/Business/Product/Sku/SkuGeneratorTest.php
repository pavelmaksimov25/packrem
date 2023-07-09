<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\Product\Business\Product\Sku;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Generated\Shared\Transfer\ProductConcreteTransfer;
use Spryker\Zed\Product\Business\Product\Sku\SkuGenerator;
use Spryker\Zed\Product\Business\Product\Sku\SkuGeneratorInterface;
use Spryker\Zed\Product\Business\Product\Sku\SkuIncrementGenerator;
use Spryker\Zed\Product\Dependency\Service\ProductToUtilTextInterface;
use SprykerTest\Zed\Product\Business\FacadeTestAbstract;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Zed
 * @group Product
 * @group Business
 * @group Product
 * @group Sku
 * @group SkuGeneratorTest
 * Add your own group annotations below this line
 *
 * @property \SprykerTest\Zed\Product\ProductBusinessTester $tester
 */
class SkuGeneratorTest extends FacadeTestAbstract
{
    /**
     * @return void
     */
    public function testGenerateProductAbstractSkuShouldSanitizeSku(): void
    {
        $skuGenerator = $this->createSkuGenerator();

        $productAbstractTransfer = new ProductAbstractTransfer();
        $productAbstractTransfer->setSku('one-ONE    ONE----Lietuviškai');

        $sanitizedSku = $skuGenerator->generateProductAbstractSku($productAbstractTransfer);

        if ($this->tester->isPhp8() && !function_exists('iconv')) {
            $this->assertSame('one-ONEONE-Lietuvikai', $sanitizedSku);

            return;
        }

        $this->assertSame('one-ONEONE-Lietuviskai', $sanitizedSku);
    }

    /**
     * @return void
     */
    public function testGenerateProductConcreteSkuShouldSanitizeAndConcatSku(): void
    {
        $skuGenerator = $this->createSkuGenerator();

        $productAbstractTransfer = new ProductAbstractTransfer();
        $productAbstractTransfer->setSku('one-ONE    ONE----Lietuviškai');

        $productConcreteTransfer = new ProductConcreteTransfer();
        $productConcreteTransfer->setAttributes([
            'key' => 'value',
            'key2' => 'value2',
        ]);

        $sanitizedSku = $skuGenerator->generateProductConcreteSku($productAbstractTransfer, $productConcreteTransfer);

        if ($this->tester->isPhp8() && !function_exists('iconv')) {
            $this->assertSame('one-ONEONE-Lietuvikai-key-value_key2-value2', $sanitizedSku);

            return;
        }

        $this->assertSame('one-ONEONE-Lietuviskai-key-value_key2-value2', $sanitizedSku);
    }

    /**
     * @return void
     */
    public function testGenerateProductConcreteSkuWithManyAttributesShouldTruncatesToMaxSkuLength(): void
    {
        $skuGenerator = $this->createSkuGenerator();

        $productAbstractTransfer = new ProductAbstractTransfer();
        $productAbstractTransfer->setSku('Long Sku');

        $productConcreteTransfer = new ProductConcreteTransfer();
        $productConcreteTransfer->setAttributes([
            'color' => 'blue',
            'flash_memory' => '4GB',
            'form_factor' => 'Bar',
            'internal_memory' => '32GB',
            'internal_storage_capacity' => '1526MB',
            'os_installed' => 'Android',
            'processor_cache' => '4MB',
            'processor_frequency' => '1.6GHz',
            'series' => 'Ace2',
            'storage_capacity' => '128GB',
            'storage_media' => 'SSD',
            'total-megapixels' => '16.1MP',
            'total_storage_capacity' => '128GB',
        ]);

        $formattedSku = $skuGenerator->generateProductConcreteSku($productAbstractTransfer, $productConcreteTransfer);

        $this->assertTrue(strlen($formattedSku) <= SkuGenerator::SKU_MAX_LENGTH);
    }

    /**
     * @return \Spryker\Zed\Product\Business\Product\Sku\SkuGeneratorInterface
     */
    protected function createSkuGenerator(): SkuGeneratorInterface
    {
        return new SkuGenerator($this->createUtilTextServiceMock(), $this->createSkuIncrementGeneratorMock());
    }

    /**
     * @return \PHPUnit\Framework\MockObject\MockObject|\Spryker\Zed\Product\Dependency\Service\ProductToUtilTextInterface
     */
    protected function createUtilTextServiceMock(): ProductToUtilTextInterface
    {
        return $this->getMockBuilder(ProductToUtilTextInterface::class)->getMock();
    }

    /**
     * @return \Spryker\Zed\Product\Business\Product\Sku\SkuIncrementGenerator
     */
    protected function createSkuIncrementGeneratorMock(): SkuIncrementGenerator
    {
        return new SkuIncrementGenerator($this->productConcreteManager);
    }
}
