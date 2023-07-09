<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\Product\Business;

use Codeception\Test\Unit;
use Orm\Zed\Product\Persistence\SpyProductQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use Spryker\Zed\Product\Business\Exception\MissingProductException;
use Spryker\Zed\Product\Business\Exception\ProductConcreteExistsException;
use Spryker\Zed\Product\Business\Product\Assertion\ProductConcreteAssertion;
use Spryker\Zed\Product\Persistence\ProductQueryContainerInterface;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Zed
 * @group Product
 * @group Business
 * @group ProductConcreteAssertionTest
 * Add your own group annotations below this line
 */
class ProductConcreteAssertionTest extends Unit
{
    /**
     * @var string
     */
    public const SKU = 'sku-concrete';

    /**
     * @var int
     */
    public const ID_PRODUCT_CONCRETE = 1;

    /**
     * @var \Spryker\Zed\Product\Persistence\ProductQueryContainerInterface|\PHPUnit\Framework\MockObject\MockObject
     */
    protected $productQueryContainer;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->productQueryContainer = $this->getMockBuilder(ProductQueryContainerInterface::class)
            ->disableOriginalConstructor()->getMock();
    }

    /**
     * @return void
     */
    public function testAssertSkuIsUnique(): void
    {
        $query = $this->getMockBuilder(SpyProductQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(0);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProductConcreteBySku')
            ->with(static::SKU)
            ->willReturn($query);

        $productConcreteAssertion = new ProductConcreteAssertion($this->productQueryContainer);

        $productConcreteAssertion->assertSkuIsUnique(static::SKU);
    }

    /**
     * @return void
     */
    public function testAssertSkuIsUniqueShouldThrowException(): void
    {
        $this->expectException(ProductConcreteExistsException::class);
        $this->expectExceptionMessage(sprintf(
            'Product concrete with sku %s already exists',
            static::SKU,
        ));

        $query = $this->getMockBuilder(SpyProductQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(1);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProductConcreteBySku')
            ->with(static::SKU)
            ->willReturn($query);

        $productConcreteAssertion = new ProductConcreteAssertion($this->productQueryContainer);

        $productConcreteAssertion->assertSkuIsUnique(static::SKU);
    }

    /**
     * @return void
     */
    public function testAssertSkuIsUniqueWhenUpdatingProduct(): void
    {
        $query = $this->getMockBuilder(SpyProductQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(0);

        $query
            ->expects($this->once())
            ->method('filterByIdProduct')
            ->with(static::ID_PRODUCT_CONCRETE, Criteria::NOT_EQUAL)
            ->willReturn($query);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProductConcreteBySku')
            ->with(static::SKU)
            ->willReturn($query);

        $productConcreteAssertion = new ProductConcreteAssertion($this->productQueryContainer);

        $productConcreteAssertion->assertSkuIsUniqueWhenUpdatingProduct(static::ID_PRODUCT_CONCRETE, static::SKU);
    }

    /**
     * @return void
     */
    public function testAssertSkuIsUniqueWhenUpdatingProductShouldThrowException(): void
    {
        $this->expectException(ProductConcreteExistsException::class);
        $this->expectExceptionMessage(sprintf(
            'Product concrete with sku %s already exists',
            static::SKU,
        ));

        $query = $this->getMockBuilder(SpyProductQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(1);

        $query
            ->expects($this->once())
            ->method('filterByIdProduct')
            ->with(static::ID_PRODUCT_CONCRETE, Criteria::NOT_EQUAL)
            ->willReturn($query);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProductConcreteBySku')
            ->with(static::SKU)
            ->willReturn($query);

        $productConcreteAssertion = new ProductConcreteAssertion($this->productQueryContainer);

        $productConcreteAssertion->assertSkuIsUniqueWhenUpdatingProduct(static::ID_PRODUCT_CONCRETE, static::SKU);
    }

    /**
     * @return void
     */
    public function testAssertProductExists(): void
    {
        $query = $this->getMockBuilder(SpyProductQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(1);

        $query
            ->expects($this->once())
            ->method('filterByIdProduct')
            ->with(static::ID_PRODUCT_CONCRETE)
            ->willReturn($query);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProduct')
            ->willReturn($query);

        $productConcreteAssertion = new ProductConcreteAssertion($this->productQueryContainer);

        $productConcreteAssertion->assertProductExists(static::ID_PRODUCT_CONCRETE);
    }

    /**
     * @return void
     */
    public function testAssertProductExistsShouldThrowException(): void
    {
        $this->expectException(MissingProductException::class);
        $this->expectExceptionMessage(sprintf(
            'Product concrete with id "%s" does not exist.',
            static::ID_PRODUCT_CONCRETE,
        ));

        $query = $this->getMockBuilder(SpyProductQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(0);

        $query
            ->expects($this->once())
            ->method('filterByIdProduct')
            ->with(static::ID_PRODUCT_CONCRETE)
            ->willReturn($query);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProduct')
            ->willReturn($query);

        $productConcreteAssertion = new ProductConcreteAssertion($this->productQueryContainer);

        $productConcreteAssertion->assertProductExists(static::ID_PRODUCT_CONCRETE);
    }
}
