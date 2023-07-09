<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\Product\Business;

use Codeception\Test\Unit;
use Orm\Zed\Product\Persistence\SpyProductAbstractQuery;
use Propel\Runtime\ActiveQuery\Criteria;
use Spryker\Zed\Product\Business\Exception\MissingProductException;
use Spryker\Zed\Product\Business\Exception\ProductAbstractExistsException;
use Spryker\Zed\Product\Business\Product\Assertion\ProductAbstractAssertion;
use Spryker\Zed\Product\Persistence\ProductQueryContainerInterface;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Zed
 * @group Product
 * @group Business
 * @group ProductAbstractAssertionTest
 * Add your own group annotations below this line
 */
class ProductAbstractAssertionTest extends Unit
{
    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var int
     */
    public const ID_PRODUCT_ABSTRACT = 1;

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
        $query = $this->getMockBuilder(SpyProductAbstractQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(0);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProductAbstractBySku')
            ->with(static::SKU)
            ->willReturn($query);

        $productAbstractAssertion = new ProductAbstractAssertion($this->productQueryContainer);

        $productAbstractAssertion->assertSkuIsUnique(static::SKU);
    }

    /**
     * @return void
     */
    public function testAssertSkuIsUniqueShouldThrowException(): void
    {
        $this->expectException(ProductAbstractExistsException::class);
        $this->expectExceptionMessage(sprintf(
            'Product abstract with sku %s already exists',
            static::SKU,
        ));

        $query = $this->getMockBuilder(SpyProductAbstractQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(1);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProductAbstractBySku')
            ->with(static::SKU)
            ->willReturn($query);

        $productAbstractAssertion = new ProductAbstractAssertion($this->productQueryContainer);

        $productAbstractAssertion->assertSkuIsUnique(static::SKU);
    }

    /**
     * @return void
     */
    public function testAssertSkuIsUniqueWhenUpdatingProduct(): void
    {
        $query = $this->getMockBuilder(SpyProductAbstractQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(0);

        $query
            ->expects($this->once())
            ->method('filterByIdProductAbstract')
            ->with(static::ID_PRODUCT_ABSTRACT, Criteria::NOT_EQUAL)
            ->willReturn($query);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProductAbstractBySku')
            ->with(static::SKU)
            ->willReturn($query);

        $productAbstractAssertion = new ProductAbstractAssertion($this->productQueryContainer);

        $productAbstractAssertion->assertSkuIsUniqueWhenUpdatingProduct(static::ID_PRODUCT_ABSTRACT, static::SKU);
    }

    /**
     * @return void
     */
    public function testAssertSkuIsUniqueWhenUpdatingProductShouldThrowException(): void
    {
        $this->expectException(ProductAbstractExistsException::class);
        $this->expectExceptionMessage(sprintf(
            'Product abstract with sku %s already exists',
            static::SKU,
        ));

        $query = $this->getMockBuilder(SpyProductAbstractQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(1);

        $query
            ->expects($this->once())
            ->method('filterByIdProductAbstract')
            ->with(static::ID_PRODUCT_ABSTRACT, Criteria::NOT_EQUAL)
            ->willReturn($query);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProductAbstractBySku')
            ->with(static::SKU)
            ->willReturn($query);

        $productAbstractAssertion = new ProductAbstractAssertion($this->productQueryContainer);

        $productAbstractAssertion->assertSkuIsUniqueWhenUpdatingProduct(static::ID_PRODUCT_ABSTRACT, static::SKU);
    }

    /**
     * @return void
     */
    public function testAssertProductExists(): void
    {
        $query = $this->getMockBuilder(SpyProductAbstractQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(1);

        $query
            ->expects($this->once())
            ->method('filterByIdProductAbstract')
            ->with(static::ID_PRODUCT_ABSTRACT)
            ->willReturn($query);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProductAbstract')
            ->willReturn($query);

        $productAbstractAssertion = new ProductAbstractAssertion($this->productQueryContainer);

        $productAbstractAssertion->assertProductExists(static::ID_PRODUCT_ABSTRACT);
    }

    /**
     * @return void
     */
    public function testAssertProductExistsShouldThrowException(): void
    {
        $this->expectException(MissingProductException::class);
        $this->expectExceptionMessage(sprintf(
            'Product abstract with id "%s" does not exist.',
            static::ID_PRODUCT_ABSTRACT,
        ));

        $query = $this->getMockBuilder(SpyProductAbstractQuery::class)
            ->disableOriginalConstructor()->getMock();

        $query
            ->expects($this->once())
            ->method('count')
            ->willReturn(0);

        $query
            ->expects($this->once())
            ->method('filterByIdProductAbstract')
            ->with(static::ID_PRODUCT_ABSTRACT)
            ->willReturn($query);

        $this->productQueryContainer
            ->expects($this->once())
            ->method('queryProductAbstract')
            ->willReturn($query);

        $productAbstractAssertion = new ProductAbstractAssertion($this->productQueryContainer);

        $productAbstractAssertion->assertProductExists(static::ID_PRODUCT_ABSTRACT);
    }
}
