<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\ProductImage\Business\Model;

use Codeception\Test\Unit;
use Generated\Shared\Transfer\ProductImageSetTransfer;
use Spryker\Zed\Locale\Business\LocaleFacade;
use Spryker\Zed\ProductImage\Business\Model\Reader;
use Spryker\Zed\ProductImage\Business\Transfer\ProductImageTransferMapper;
use Spryker\Zed\ProductImage\Dependency\Facade\ProductImageToLocaleBridge;
use Spryker\Zed\ProductImage\Persistence\ProductImageQueryContainer;
use Spryker\Zed\ProductImage\Persistence\ProductImageRepository;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Zed
 * @group ProductImage
 * @group Business
 * @group Model
 * @group ProductImageTransferMapperTest
 * Add your own group annotations below this line
 */
class ProductImageTransferMapperTest extends Unit
{
    /**
     * @var \Spryker\Zed\ProductImage\Persistence\ProductImageQueryContainerInterface
     */
    protected $queryContainer;

    /**
     * @var \Spryker\Zed\ProductImage\Business\Model\ReaderInterface
     */
    protected $reader;

    /**
     * @var \Spryker\Zed\Locale\Business\LocaleFacadeInterface
     */
    protected $localeFacade;

    /**
     * @var \Spryker\Zed\ProductImage\Business\Transfer\ProductImageTransferMapperInterface
     */
    protected $transferGenerator;

    /**
     * @var \SprykerTest\Zed\ProductImage\ProductImageBusinessTester
     */
    protected $tester;

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->queryContainer = new ProductImageQueryContainer();
        $this->localeFacade = new LocaleFacade();
        $this->transferGenerator = new ProductImageTransferMapper(
            new ProductImageToLocaleBridge($this->localeFacade),
        );

        $this->reader = new Reader(
            $this->queryContainer,
            $this->transferGenerator,
            new ProductImageToLocaleBridge($this->localeFacade),
            new ProductImageRepository(),
        );
    }

    /**
     * @return void
     */
    public function testConvertProductImageSetEntitiesIntoTransfer(): void
    {
        // Arrange
        $productAbstractTransfer = $this->tester->haveProductAbstract();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT_ABSTRACT => $productAbstractTransfer->getIdProductAbstract(),
        ]);

        // Act
        $transferCollection = $this->reader
            ->getProductImagesSetCollectionByProductAbstractId($productAbstractTransfer->getIdProductAbstract());

        // Assert
        foreach ($transferCollection as $transfer) {
            $this->assertInstanceOf(ProductImageSetTransfer::class, $transfer);

            $this->assertNotEmpty(
                $transfer->getProductImages(),
            );
        }
    }
}
