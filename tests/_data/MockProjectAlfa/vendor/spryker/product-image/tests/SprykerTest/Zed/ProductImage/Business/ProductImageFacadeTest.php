<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\ProductImage\Business\Model;

use ArrayObject;
use Codeception\Test\Unit;
use Generated\Shared\DataBuilder\ProductImageBuilder;
use Generated\Shared\Transfer\PaginationTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;
use Generated\Shared\Transfer\ProductConcreteTransfer;
use Generated\Shared\Transfer\ProductImageFilterTransfer;
use Generated\Shared\Transfer\ProductImageSetConditionsTransfer;
use Generated\Shared\Transfer\ProductImageSetCriteriaTransfer;
use Generated\Shared\Transfer\ProductImageSetTransfer;
use Generated\Shared\Transfer\ProductImageTransfer;
use Generated\Shared\Transfer\SortTransfer;
use Orm\Zed\Product\Persistence\SpyProduct;
use Orm\Zed\Product\Persistence\SpyProductAbstract;
use Orm\Zed\ProductImage\Persistence\SpyProductImage;
use Orm\Zed\ProductImage\Persistence\SpyProductImageQuery;
use Orm\Zed\ProductImage\Persistence\SpyProductImageSet;
use Orm\Zed\ProductImage\Persistence\SpyProductImageSetQuery;
use Orm\Zed\ProductImage\Persistence\SpyProductImageSetToProductImage;
use Spryker\Shared\Kernel\Store;
use Spryker\Zed\ProductImage\Business\ProductImageFacade;
use Spryker\Zed\ProductImage\Persistence\ProductImageQueryContainer;

/**
 * Auto-generated group annotations
 *
 * @group SprykerTest
 * @group Zed
 * @group ProductImage
 * @group Business
 * @group Model
 * @group Facade
 * @group ProductImageFacadeTest
 * Add your own group annotations below this line
 */
class ProductImageFacadeTest extends Unit
{
    /**
     * @var \SprykerTest\Zed\ProductImage\ProductImageBusinessTester
     */
    protected $tester;

    /**
     * @var \Spryker\Zed\ProductImage\Persistence\ProductImageQueryContainerInterface
     */
    protected $queryContainer;

    /**
     * @var \Spryker\Zed\ProductImage\Business\ProductImageFacadeInterface
     */
    protected $productImageFacade;

    /**
     * @var \Orm\Zed\Product\Persistence\SpyProductAbstract
     */
    protected $productAbstractEntity;

    /**
     * @var \Orm\Zed\Product\Persistence\SpyProduct
     */
    protected $productConcreteEntity;

    /**
     * @var \Orm\Zed\Product\Persistence\SpyProductAbstract
     */
    protected $productAbstractSortedEntity;

    /**
     * @var \Orm\Zed\Product\Persistence\SpyProduct
     */
    protected $productConcreteSortedEntity;

    /**
     * @var \Orm\Zed\ProductImage\Persistence\SpyProductImageSet
     */
    protected $imageSetAbstract;

    /**
     * @var \Orm\Zed\ProductImage\Persistence\SpyProductImageSet
     */
    protected $imageSetConcrete;

    /**
     * @var \Orm\Zed\ProductImage\Persistence\SpyProductImageSet
     */
    protected $imageSetDE;

    /**
     * @var \Orm\Zed\ProductImage\Persistence\SpyProductImageSet
     */
    protected $imageSetEN;

    /**
     * @var \Orm\Zed\ProductImage\Persistence\SpyProductImageSet
     */
    protected $imageSetSortedAbstract;

    /**
     * @var \Orm\Zed\ProductImage\Persistence\SpyProductImageSet
     */
    protected $imageSetSortedConcrete;

    /**
     * @var \Orm\Zed\ProductImage\Persistence\SpyProductImageSetToProductImage
     */
    protected $imageSetToImage;

    /**
     * @var \Orm\Zed\ProductImage\Persistence\SpyProductImage
     */
    protected $image;

    /**
     * @var string
     */
    public const URL_SMALL = 'small';

    /**
     * @var string
     */
    public const URL_LARGE = 'large';

    /**
     * @var string
     */
    public const SET_NAME = 'Default';

    /**
     * @var string
     */
    public const SET_NAME_DE = 'Default DE';

    /**
     * @var string
     */
    public const SET_NAME_EN = 'Default EN';

    /**
     * @var string
     */
    public const ABSTRACT_SKU = 'abstract-sku';

    /**
     * @var string
     */
    public const CONCRETE_SKU = 'concrete-sku';

    /**
     * @var string
     */
    public const ABSTRACT_SKU_2 = 'abstract-sku-2';

    /**
     * @var string
     */
    public const CONCRETE_SKU_2 = 'concrete-sku-2';

    /**
     * @var int
     */
    public const ID_LOCALE_DE = 46;

    /**
     * @var int
     */
    public const ID_LOCALE_EN = 66;

    /**
     * @var string
     */
    public const LOCALE_DE_DE = 'de_DE';

    /**
     * @var string
     */
    protected const SERVICE_LOCALE = 'locale';

    /**
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->queryContainer = new ProductImageQueryContainer();
        $this->productImageFacade = new ProductImageFacade();

        $this->setupProducts();
        $this->setupImages();

        $this->tester->getContainer()->set(static::SERVICE_LOCALE, static::LOCALE_DE_DE);
    }

    /**
     * @return void
     */
    protected function setupProducts(): void
    {
        $this->productAbstractEntity = new SpyProductAbstract();
        $this->productAbstractEntity
            ->setSku(static::ABSTRACT_SKU)
            ->setAttributes('{}')
            ->save();

        $this->productConcreteEntity = new SpyProduct();
        $this->productConcreteEntity
            ->setSku(static::CONCRETE_SKU)
            ->setAttributes('{}')
            ->setFkProductAbstract($this->productAbstractEntity->getIdProductAbstract())
            ->save();

        $this->productAbstractSortedEntity = new SpyProductAbstract();
        $this->productAbstractSortedEntity
            ->setSku(static::ABSTRACT_SKU_2)
            ->setAttributes('{}')
            ->save();

        $this->productConcreteSortedEntity = new SpyProduct();
        $this->productConcreteSortedEntity
            ->setSku(static::CONCRETE_SKU_2)
            ->setAttributes('{}')
            ->setFkProductAbstract($this->productAbstractSortedEntity->getIdProductAbstract())
            ->save();
    }

    /**
     * @return void
     */
    protected function setupImages(): void
    {
        $this->image = new SpyProductImage();
        $this->image
            ->setExternalUrlLarge(static::URL_LARGE)
            ->setExternalUrlSmall(static::URL_SMALL)
            ->save();

        $this->imageSetAbstract = new SpyProductImageSet();
        $this->imageSetAbstract
            ->setName(static::SET_NAME)
            ->setFkProductAbstract($this->productAbstractEntity->getIdProductAbstract())
            ->setFkProduct(null)
            ->setFkLocale(null)
            ->save();
        $this->imageSetDE = new SpyProductImageSet();
        $this->imageSetDE
            ->setName(static::SET_NAME_DE)
            ->setFkProductAbstract($this->productAbstractEntity->getIdProductAbstract())
            ->setFkProduct(null)
            ->setFkLocale(static::ID_LOCALE_DE)
            ->save();
        $this->imageSetEN = new SpyProductImageSet();
        $this->imageSetEN
            ->setName(static::SET_NAME_EN)
            ->setFkProductAbstract($this->productAbstractEntity->getIdProductAbstract())
            ->setFkProduct(null)
            ->setFkLocale(static::ID_LOCALE_EN)
            ->save();
        $this->imageSetSortedAbstract = new SpyProductImageSet();
        $this->imageSetSortedAbstract
            ->setName(static::SET_NAME_EN)
            ->setFkProductAbstract($this->productAbstractSortedEntity->getIdProductAbstract())
            ->setFkProduct(null)
            ->setFkLocale(static::ID_LOCALE_EN)
            ->save();
        $this->imageSetSortedConcrete = new SpyProductImageSet();
        $this->imageSetSortedConcrete
            ->setName(static::SET_NAME_EN)
            ->setFkProductAbstract(null)
            ->setFkProduct($this->productConcreteSortedEntity->getIdProduct())
            ->setFkLocale(static::ID_LOCALE_EN)
            ->save();

        $imageSetToImage = new SpyProductImageSetToProductImage();
        $imageSetToImage
            ->setFkProductImage($this->image->getIdProductImage())
            ->setFkProductImageSet($this->imageSetAbstract->getIdProductImageSet())
            ->setSortOrder(0)
            ->save();
        $imageSetToImage = new SpyProductImageSetToProductImage();
        $imageSetToImage
            ->setFkProductImage($this->image->getIdProductImage())
            ->setFkProductImageSet($this->imageSetDE->getIdProductImageSet())
            ->setSortOrder(0)
            ->save();
        $imageSetToImage = new SpyProductImageSetToProductImage();
        $imageSetToImage
            ->setFkProductImage($this->image->getIdProductImage())
            ->setFkProductImageSet($this->imageSetEN->getIdProductImageSet())
            ->setSortOrder(0)
            ->save();

        $this->imageSetConcrete = new SpyProductImageSet();
        $this->imageSetConcrete
            ->setName(static::SET_NAME)
            ->setFkProductAbstract(null)
            ->setFkProduct($this->productConcreteEntity->getIdProduct())
            ->setFkLocale(null)
            ->save();

        $imageSetToImage = new SpyProductImageSetToProductImage();
        $imageSetToImage
            ->setFkProductImage($this->image->getIdProductImage())
            ->setFkProductImageSet($this->imageSetConcrete->getIdProductImageSet())
            ->setSortOrder(0)
            ->save();
    }

    /**
     * @return void
     */
    public function testPersistProductImageShouldCreateImage(): void
    {
        $productImageTransfer = (new ProductImageTransfer())
            ->setExternalUrlSmall(static::URL_SMALL)
            ->setExternalUrlLarge(static::URL_LARGE);

        $productImageTransfer = $this->productImageFacade->saveProductImage($productImageTransfer);

        $this->assertCreateImage($productImageTransfer);
    }

    /**
     * @return void
     */
    public function testPersistProductImageSetShouldCreateImageSet(): void
    {
        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setName(static::SET_NAME)
            ->setIdProductAbstract($this->productAbstractEntity->getIdProductAbstract());

        $productImageSetTransfer = $this->productImageFacade->saveProductImageSet($productImageSetTransfer);

        $this->assertCreateImageSet($productImageSetTransfer);
    }

    /**
     * @return void
     */
    public function testPersistProductImageSetShouldPersistImageSetAndProductImages(): void
    {
        $productImageTransfer = (new ProductImageTransfer())
            ->setExternalUrlSmall(static::URL_SMALL)
            ->setExternalUrlLarge(static::URL_LARGE);

        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setName(static::SET_NAME)
            ->setIdProductAbstract($this->productAbstractEntity->getIdProductAbstract())
            ->addProductImage($productImageTransfer);

        $productImageSetTransfer = $this->productImageFacade->saveProductImageSet($productImageSetTransfer);

        $this->assertCreateImageSet($productImageSetTransfer);
        $this->assertAbstractCreateImageForImageSet();
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetCollectionByProductAbstractId(): void
    {
        $productImageSetCollection = $this->productImageFacade->getProductImagesSetCollectionByProductAbstractId(
            $this->productAbstractEntity->getIdProductAbstract(),
        );

        $this->assertNotEmpty($productImageSetCollection);
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetCollectionByProductAbstractIdSortsImagesBySortOrderAsc(): void
    {
        // Arrange
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 3);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 1);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 0);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 2);

        // Act
        $productImageCollection = $this->productImageFacade->getProductImagesSetCollectionByProductAbstractId(
            $this->productAbstractSortedEntity->getIdProductAbstract(),
        )[0]->getProductImages();

        // Assign
        $sortOrder = 0;
        foreach ($productImageCollection as $productImageTransfer) {
            $this->assertTrue($productImageTransfer->getSortOrder() >= $sortOrder);
            $sortOrder = $productImageTransfer->getSortOrder();
        }
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetCollectionByProductAbstractIdSortsImagesByIdProductImageSetToProductImageAsc(): void
    {
        // Arrange
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 0);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 0);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 0);

        // Act
        $productImageCollection = $this->productImageFacade->getProductImagesSetCollectionByProductAbstractId(
            $this->productAbstractSortedEntity->getIdProductAbstract(),
        )[0]->getProductImages();

        // Assign
        $idProductImageSetToProductImage = 0;
        foreach ($productImageCollection as $productImageTransfer) {
            $this->assertTrue(
                $productImageTransfer->getIdProductImageSetToProductImage() > $idProductImageSetToProductImage,
            );
            $idProductImageSetToProductImage = $productImageTransfer->getIdProductImageSetToProductImage();
        }
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetCollectionByProductId(): void
    {
        $productImageSetCollection = $this->productImageFacade->getProductImagesSetCollectionByProductId(
            $this->productConcreteEntity->getIdProduct(),
        );

        $this->assertNotEmpty($productImageSetCollection);
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetCollectionByProductIdSortsImagesBySortOrderAsc(): void
    {
        // Arrange
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedConcrete->getIdProductImageSet(), 3);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedConcrete->getIdProductImageSet(), 1);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedConcrete->getIdProductImageSet(), 0);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedConcrete->getIdProductImageSet(), 2);

        // Act
        $productImageCollection = $this->productImageFacade->getProductImagesSetCollectionByProductId(
            $this->productConcreteSortedEntity->getIdProduct(),
        )[0]->getProductImages();

        // Assign
        $sortOrder = 0;
        foreach ($productImageCollection as $productImageTransfer) {
            $this->assertTrue($productImageTransfer->getSortOrder() >= $sortOrder);
            $sortOrder = $productImageTransfer->getSortOrder();
        }
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetCollectionByProductIdSortsImagesByIdProductImageSetToProductImageAsc(): void
    {
        // Arrange
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedConcrete->getIdProductImageSet(), 0);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedConcrete->getIdProductImageSet(), 0);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedConcrete->getIdProductImageSet(), 0);

        // Act
        $productImageCollection = $this->productImageFacade->getProductImagesSetCollectionByProductId(
            $this->productConcreteSortedEntity->getIdProduct(),
        )[0]->getProductImages();

        // Assign
        $idProductImageSetToProductImage = 0;
        foreach ($productImageCollection as $productImageTransfer) {
            $this->assertTrue($productImageTransfer->getIdProductImageSetToProductImage() > $idProductImageSetToProductImage);
            $idProductImageSetToProductImage = $productImageTransfer->getIdProductImageSetToProductImage();
        }
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetCollectionByProductIdForCurrentLocale(): void
    {
        $productImageSetCollection = $this->productImageFacade->getProductImagesSetCollectionByProductIdForCurrentLocale(
            $this->productConcreteEntity->getIdProduct(),
        );

        $this->assertNotEmpty($productImageSetCollection);
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetCollectionByProductIdForCurrentLocaleReturnsProductImagesSetWithProperLocale(): void
    {
        // Arrange
        $this->tester->createProductImageSet(
            static::SET_NAME_DE,
            null,
            $this->productConcreteEntity->getIdProduct(),
            static::ID_LOCALE_DE,
        );

        if ($this->tester->isDynamicStoreEnabled() === false) {
            Store::getInstance()->setCurrentLocale(static::LOCALE_DE_DE);
        }

        // Act
        $productImageSetCollection = $this->productImageFacade->getProductImagesSetCollectionByProductIdForCurrentLocale(
            $this->productConcreteEntity->getIdProduct(),
        );

        // Assign
        foreach ($productImageSetCollection as $productImageSetTransfer) {
            $this->assertTrue($productImageSetTransfer->getLocale()->getLocaleName() === static::LOCALE_DE_DE);
        }
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetCollectionByProductIdForCurrentLocaleReturnsDefaultProductImagesSets(): void
    {
        // Arrange
        $this->tester->createProductImageSet(
            static::SET_NAME_EN,
            null,
            $this->productConcreteEntity->getIdProduct(),
            static::ID_LOCALE_EN,
        );

        if ($this->tester->isDynamicStoreEnabled() === false) {
            Store::getInstance()->setCurrentLocale(static::LOCALE_DE_DE);
        }

        // Act
        $productImageSetCollection = $this->productImageFacade->getProductImagesSetCollectionByProductIdForCurrentLocale(
            $this->productConcreteEntity->getIdProduct(),
        );

        // Assign
        foreach ($productImageSetCollection as $productImageSetTransfer) {
            $this->assertNull($productImageSetTransfer->getLocale());
        }
    }

    /**
     * @return void
     */
    public function testCreateProductAbstractImageSetCollection(): void
    {
        $productAbstractTransfer = $this->createProductAbstractTransfer();

        $productImageTransfer = (new ProductImageTransfer())
            ->setExternalUrlSmall(static::URL_SMALL)
            ->setExternalUrlLarge(static::URL_LARGE);

        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setName(static::SET_NAME)
            ->setIdProductAbstract($this->productAbstractEntity->getIdProductAbstract())
            ->addProductImage($productImageTransfer);

        $productAbstractTransfer->addImageSet($productImageSetTransfer);

        $this->productImageFacade->createProductAbstractImageSetCollection(
            $productAbstractTransfer,
        );

        $this->assertAbstractCreateImageForImageSet();
    }

    /**
     * @return void
     */
    public function testUpdateProductAbstractImageSetCollection(): void
    {
        $productAbstractTransfer = $this->createProductAbstractTransfer();

        $productImageTransfer = (new ProductImageTransfer())
            ->setIdProductImage($this->image->getIdProductImage())
            ->setExternalUrlSmall(static::URL_SMALL . 'foo')
            ->setExternalUrlLarge(static::URL_LARGE . 'foo');

        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setIdProductImageSet($this->imageSetAbstract->getIdProductImageSet())
            ->setName(static::SET_NAME)
            ->setIdProductAbstract($this->productAbstractEntity->getIdProductAbstract())
            ->addProductImage($productImageTransfer);

        $productAbstractTransfer->addImageSet($productImageSetTransfer);

        $this->productImageFacade->updateProductAbstractImageSetCollection(
            $productAbstractTransfer,
        );

        $this->assertAbstractCreateImageForImageSet();
    }

    /**
     * @return void
     */
    public function testExpandProductAbstractWithImageSets(): void
    {
        $productAbstractTransfer = $this->createProductAbstractTransfer();

        $productAbstractTransfer = $this->productImageFacade->expandProductAbstractWithImageSets(
            $productAbstractTransfer,
        );

        $this->assertNotEmpty($productAbstractTransfer->getImageSets());
        foreach ($productAbstractTransfer->getImageSets() as $imageSet) {
            $this->assertNotEmpty($imageSet->getProductImages());

            foreach ($imageSet->getProductImages() as $image) {
                $this->assertInstanceOf(ProductImageTransfer::class, $image);
            }
        }
    }

    /**
     * @return void
     */
    public function testCreateProductConcreteImageSetCollection(): void
    {
        $productConcreteTransfer = $this->createProductConcreteTransfer();

        $productImageTransfer = (new ProductImageTransfer())
            ->setExternalUrlSmall(static::URL_SMALL)
            ->setExternalUrlLarge(static::URL_LARGE);

        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setName(static::SET_NAME)
            ->setIdProduct($this->productConcreteEntity->getIdProduct())
            ->addProductImage($productImageTransfer);

        $productConcreteTransfer->addImageSet($productImageSetTransfer);

        $this->productImageFacade->createProductConcreteImageSetCollection(
            $productConcreteTransfer,
        );

        $this->assertConcreteCreateImageForImageSet();
    }

    /**
     * @return void
     */
    public function testUpdateProductConcreteImageSetCollection(): void
    {
        $productConcreteTransfer = $this->createProductConcreteTransfer();

        $productImageTransfer = (new ProductImageTransfer())
            ->setIdProductImage($this->image->getIdProductImage())
            ->setExternalUrlSmall(static::URL_SMALL)
            ->setExternalUrlLarge(static::URL_LARGE);

        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setIdProductImageSet($this->imageSetConcrete->getIdProductImageSet())
            ->setName(static::SET_NAME)
            ->setIdProduct($this->productConcreteEntity->getIdProduct())
            ->addProductImage($productImageTransfer);

        $productConcreteTransfer->addImageSet($productImageSetTransfer);

        $this->productImageFacade->updateProductConcreteImageSetCollection(
            $productConcreteTransfer,
        );

        $this->assertConcreteCreateImageForImageSet();
    }

    /**
     * @return void
     */
    public function testExpandProductConcreteWithImageSets(): void
    {
        $productConcreteTransfer = $this->createProductConcreteTransfer();

        $productConcreteTransfer = $this->productImageFacade->expandProductConcreteWithImageSets(
            $productConcreteTransfer,
        );

        $this->assertNotEmpty($productConcreteTransfer->getImageSets());
        foreach ($productConcreteTransfer->getImageSets() as $imageSet) {
            $this->assertNotEmpty($imageSet->getProductImages());

            foreach ($imageSet->getProductImages() as $image) {
                $this->assertInstanceOf(ProductImageTransfer::class, $image);
            }
        }
    }

    /**
     * @return void
     */
    public function testExpandProductConcreteTransfersWithImageSetsSuccessful(): void
    {
        // Arrange
        $productConcreteTransfer1 = $this->createProductConcreteTransfer();
        $productConcreteTransfer2 = $this->createProductConcreteTransfer();

        // Act
        $productConcreteTransfers = $this->productImageFacade->expandProductConcreteTransfersWithImageSets(
            [$productConcreteTransfer1, $productConcreteTransfer2],
        );

        // Assert
        foreach ($productConcreteTransfers as $productConcreteTransfer) {
            $this->assertNotEmpty($productConcreteTransfer->getImageSets());
            foreach ($productConcreteTransfer->getImageSets() as $imageSet) {
                $this->assertNotEmpty($imageSet->getProductImages());

                foreach ($imageSet->getProductImages() as $image) {
                    $this->assertInstanceOf(ProductImageTransfer::class, $image);
                }
            }
        }
    }

    /**
     * @return void
     */
    public function testRemovalProductImageSetFromProductConcrete(): void
    {
        $productConcreteTransfer = $this->createProductConcreteTransfer();
        $productImageSetTransfers = new ArrayObject($this->productImageFacade->getProductImagesSetCollectionByProductId(
            $productConcreteTransfer->getIdProductConcrete(),
        ));

        $productImageTransfer = (new ProductImageTransfer())
            ->setExternalUrlSmall(static::URL_SMALL)
            ->setExternalUrlLarge(static::URL_LARGE);

        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setName(static::SET_NAME)
            ->setIdProduct($this->productConcreteEntity->getIdProduct())
            ->addProductImage($productImageTransfer);

        $this->assertConcreteHasNumberOfProductImageSet($productImageSetTransfers->count());

        $productImageSetTransfers->append($productImageSetTransfer);
        $productConcreteTransfer->setImageSets($productImageSetTransfers);
        $this->productImageFacade->createProductConcreteImageSetCollection($productConcreteTransfer);

        $this->assertConcreteHasNumberOfProductImageSet($productImageSetTransfers->count());

        $productImageSetTransfers->offsetUnset($productImageSetTransfers->count() - 1);
        $productConcreteTransfer->setImageSets($productImageSetTransfers);
        $this->productImageFacade->updateProductConcreteImageSetCollection($productConcreteTransfer);

        $this->assertConcreteHasNumberOfProductImageSet($productImageSetTransfers->count());
    }

    /**
     * @return void
     */
    public function testRemovalProductImageSetFromProductAbstract(): void
    {
        $productAbstractTransfer = $this->createProductAbstractTransfer();
        $productImageSetTransfers = new ArrayObject($this->productImageFacade->getProductImagesSetCollectionByProductAbstractId(
            $productAbstractTransfer->getIdProductAbstract(),
        ));

        $productImageTransfer = (new ProductImageTransfer())
            ->setExternalUrlSmall(static::URL_SMALL)
            ->setExternalUrlLarge(static::URL_LARGE);

        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setName(static::SET_NAME)
            ->setIdProductAbstract($this->productAbstractEntity->getIdProductAbstract())
            ->addProductImage($productImageTransfer);

        $this->assertAbstractHasNumberOfProductImageSet($productImageSetTransfers->count());

        $productImageSetTransfers->append($productImageSetTransfer);
        $productAbstractTransfer->setImageSets($productImageSetTransfers);
        $this->productImageFacade->updateProductAbstractImageSetCollection($productAbstractTransfer);

        $this->assertAbstractHasNumberOfProductImageSet($productImageSetTransfers->count());

        $productImageSetTransfers->offsetUnset($productImageSetTransfers->count() - 1);
        $productAbstractTransfer->setImageSets($productImageSetTransfers);
        $this->productImageFacade->updateProductAbstractImageSetCollection($productAbstractTransfer);

        $this->assertAbstractHasNumberOfProductImageSet($productImageSetTransfers->count());
    }

    /**
     * @return void
     */
    public function testRemovalProductImageFromProductConcrete(): void
    {
        $productConcreteTransfer = $this->createProductConcreteTransfer();
        $productImageSetTransfers = new ArrayObject();

        $productImageTransfer = (new ProductImageTransfer())
            ->setExternalUrlSmall(static::URL_SMALL)
            ->setExternalUrlLarge(static::URL_LARGE);

        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setName(static::SET_NAME)
            ->setIdProduct($this->productConcreteEntity->getIdProduct())
            ->addProductImage($productImageTransfer);

        $productImageSetTransfers->append($productImageSetTransfer);
        $productConcreteTransfer->setImageSets($productImageSetTransfers);
        $this->productImageFacade->updateProductConcreteImageSetCollection($productConcreteTransfer);

        $this->assertConcreteHasNumberOfProductImage($productImageSetTransfers->count());

        $productImageSetTransfers->offsetUnset($productImageSetTransfers->count() - 1);
        $productConcreteTransfer->setImageSets($productImageSetTransfers);
        $this->productImageFacade->updateProductConcreteImageSetCollection($productConcreteTransfer);

        $this->assertConcreteHasNumberOfProductImage($productImageSetTransfers->count());
    }

    /**
     * @return void
     */
    public function testRemovalProductImageFromProductAbstract(): void
    {
        $productAbstractTransfer = $this->createProductAbstractTransfer();
        $productImageSetTransfers = new ArrayObject();

        $productImageTransfer = (new ProductImageTransfer())
            ->setExternalUrlSmall(static::URL_SMALL)
            ->setExternalUrlLarge(static::URL_LARGE);

        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setName(static::SET_NAME)
            ->setIdProductAbstract($this->productAbstractEntity->getIdProductAbstract())
            ->addProductImage($productImageTransfer);

        $productImageSetTransfers->append($productImageSetTransfer);
        $productAbstractTransfer->setImageSets($productImageSetTransfers);
        $this->productImageFacade->updateProductAbstractImageSetCollection($productAbstractTransfer);

        $this->assertAbstractHasNumberOfProductImage($productImageSetTransfers->count());

        $productImageSetTransfers->offsetUnset($productImageSetTransfers->count() - 1);
        $productAbstractTransfer->setImageSets($productImageSetTransfers);
        $this->productImageFacade->updateProductAbstractImageSetCollection($productAbstractTransfer);

        $this->assertAbstractHasNumberOfProductImage($productImageSetTransfers->count());
    }

    /**
     * @return void
     */
    public function testDeleteProductImageSet(): void
    {
        $productAbstractTransfer = $this->createProductAbstractTransfer();

        $imageSet = new SpyProductImageSet();
        $imageSet
            ->setName(static::SET_NAME)
            ->setFkProductAbstract($productAbstractTransfer->getIdProductAbstract())
            ->setFkProduct(null)
            ->setFkLocale(null)
            ->save();

        $this->assertProductImageSetExists($imageSet->getIdProductImageSet());

        $productImageSetTransfer = (new ProductImageSetTransfer())
            ->setIdProductImageSet($imageSet->getIdProductImageSet());

        $this->productImageFacade->deleteProductImageSet($productImageSetTransfer);

        $this->assertProductImageSetNotExists($imageSet->getIdProductImageSet());
    }

    /**
     * @return void
     */
    public function testGetCombinedConcreteImageSets(): void
    {
        $imageSetTransfers = $this->productImageFacade->getCombinedConcreteImageSets(
            $this->productConcreteEntity->getIdProduct(),
            $this->productConcreteEntity->getFkProductAbstract(),
            static::ID_LOCALE_DE,
        );

        $this->assertNotEmpty($imageSetTransfers[static::SET_NAME]);
        $this->assertNotEmpty($imageSetTransfers[static::SET_NAME_DE]);

        /** @var \Generated\Shared\Transfer\ProductImageSetTransfer $defaultImageSetTransfer */
        $defaultImageSetTransfer = $imageSetTransfers[static::SET_NAME];

        /** @var \Generated\Shared\Transfer\ProductImageSetTransfer $localizedImageSetTransfer */
        $localizedImageSetTransfer = $imageSetTransfers[static::SET_NAME_DE];

        $defaultProductImages = $defaultImageSetTransfer->getProductImages();
        $localizedProductImages = $localizedImageSetTransfer->getProductImages();

        $this->assertSame(1, count($defaultProductImages));
        $this->assertSame(1, count($localizedProductImages));
    }

    /**
     * @return void
     */
    public function testGetCombinedAbstractImageSets(): void
    {
        $imageSetTransfers = $this->productImageFacade->getCombinedAbstractImageSets(
            $this->productConcreteEntity->getFkProductAbstract(),
            static::ID_LOCALE_DE,
        );

        $this->assertNotEmpty($imageSetTransfers[static::SET_NAME]);
        $this->assertNotEmpty($imageSetTransfers[static::SET_NAME_DE]);

        /** @var \Generated\Shared\Transfer\ProductImageSetTransfer $defaultImageSetTransfer */
        $defaultImageSetTransfer = $imageSetTransfers[static::SET_NAME];

        /** @var \Generated\Shared\Transfer\ProductImageSetTransfer $localizedImageSetTransfer */
        $localizedImageSetTransfer = $imageSetTransfers[static::SET_NAME_DE];

        $defaultProductImages = $defaultImageSetTransfer->getProductImages();
        $localizedProductImages = $localizedImageSetTransfer->getProductImages();

        $this->assertSame(1, count($defaultProductImages));
        $this->assertSame(1, count($localizedProductImages));
    }

    /**
     * @param \Generated\Shared\Transfer\ProductImageTransfer $productImageTransfer
     *
     * @return void
     */
    protected function assertCreateImage(ProductImageTransfer $productImageTransfer): void
    {
        $productImage = (new SpyProductImageQuery())
            ->filterByIdProductImage($productImageTransfer->getIdProductImage())
            ->findOne();

        $this->assertNotNull($productImage);
        $this->assertSame($productImageTransfer->getExternalUrlSmall(), $productImage->getExternalUrlSmall());
        $this->assertSame($productImageTransfer->getExternalUrlLarge(), $productImage->getExternalUrlLarge());
    }

    /**
     * @param \Generated\Shared\Transfer\ProductImageSetTransfer $productImageSetTransfer
     *
     * @return void
     */
    protected function assertCreateImageSet(ProductImageSetTransfer $productImageSetTransfer): void
    {
        $productImage = (new SpyProductImageSetQuery())
            ->filterByIdProductImageSet($productImageSetTransfer->getIdProductImageSet())
            ->findOne();

        $this->assertNotNull($productImage);
        $this->assertSame(static::SET_NAME, $productImageSetTransfer->getName());
        $this->assertSame($this->productAbstractEntity->getIdProductAbstract(), $productImageSetTransfer->getIdProductAbstract());
    }

    /**
     * @return void
     */
    protected function assertAbstractCreateImageForImageSet(): void
    {
        $imageCollection = $this->queryContainer->queryImageCollectionByProductAbstractId(
            $this->productAbstractEntity->getIdProductAbstract(),
        );

        $this->assertNotEmpty($imageCollection);
    }

    /**
     * @return void
     */
    protected function assertConcreteCreateImageForImageSet(): void
    {
        $imageCollection = $this->queryContainer->queryImageCollectionByProductId(
            $this->productConcreteEntity->getIdProduct(),
        );

        $this->assertNotEmpty($imageCollection);
    }

    /**
     * @param int $expectedCount
     *
     * @return void
     */
    protected function assertConcreteHasNumberOfProductImageSet(int $expectedCount): void
    {
        $imageSetCollection = $this->queryContainer->queryImageSetByProductId(
            $this->productConcreteEntity->getIdProduct(),
        );

        $this->assertCount($expectedCount, $imageSetCollection);
    }

    /**
     * @param int $expectedCount
     *
     * @return void
     */
    protected function assertAbstractHasNumberOfProductImageSet(int $expectedCount): void
    {
        $imageSetCollection = $this->queryContainer->queryImageSetByProductAbstractId(
            $this->productAbstractEntity->getIdProductAbstract(),
        );

        $this->assertCount($expectedCount, $imageSetCollection);
    }

    /**
     * @param int $idProductImageSet
     *
     * @return void
     */
    protected function assertProductImageSetExists(int $idProductImageSet): void
    {
        $exists = (new SpyProductImageSetQuery())
            ->filterByIdProductImageSet($idProductImageSet)
            ->exists();

        $this->assertTrue($exists);
    }

    /**
     * @param int $idProductImageSet
     *
     * @return void
     */
    protected function assertProductImageSetNotExists(int $idProductImageSet): void
    {
        $exists = (new SpyProductImageSetQuery())
            ->filterByIdProductImageSet($idProductImageSet)
            ->exists();

        $this->assertFalse($exists);
    }

    /**
     * @param int $expectedCount
     *
     * @return void
     */
    protected function assertAbstractHasNumberOfProductImage(int $expectedCount): void
    {
        $imageCollection = $this->queryContainer->queryImageCollectionByProductAbstractId(
            $this->productAbstractEntity->getIdProductAbstract(),
        );

        $this->assertCount($expectedCount, $imageCollection);
    }

    /**
     * @param int $expectedCount
     *
     * @return void
     */
    protected function assertConcreteHasNumberOfProductImage(int $expectedCount): void
    {
        $imageCollection = $this->queryContainer->queryImageCollectionByProductId(
            $this->productConcreteEntity->getIdProduct(),
        );

        $this->assertCount($expectedCount, $imageCollection);
    }

    /**
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    protected function createProductAbstractTransfer(): ProductAbstractTransfer
    {
        $productData = $this->productAbstractEntity->toArray();
        unset($productData[ProductAbstractTransfer::ATTRIBUTES]);

        $productAbstractTransfer = (new ProductAbstractTransfer())
            ->fromArray($productData, true);

        return $productAbstractTransfer;
    }

    /**
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    protected function createProductConcreteTransfer(): ProductConcreteTransfer
    {
        $productData = $this->productConcreteEntity->toArray();
        unset($productData[ProductAbstractTransfer::ATTRIBUTES]);

        $productConcreteTransfer = (new ProductConcreteTransfer())
            ->setIdProductConcrete($this->productConcreteEntity->getIdProduct())
            ->fromArray($productData, true);

        return $productConcreteTransfer;
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetById(): void
    {
        $productImageSetTransfer = $this->productImageFacade->findProductImageSetById(
            $this->imageSetAbstract->getIdProductImageSet(),
        );

        $this->assertNotEmpty($productImageSetTransfer);
        $this->assertCount(1, $productImageSetTransfer->getProductImages());
    }

    /**
     * @return void
     */
    public function testGetProductImagesSetByIdWithoutImages(): void
    {
        $imageSetEntity = new SpyProductImageSet();
        $imageSetEntity
            ->setName(static::SET_NAME)
            ->setFkProductAbstract($this->productAbstractEntity->getIdProductAbstract())
            ->setFkProduct(null)
            ->setFkLocale(null)
            ->save();

        $productImageSetTransfer = $this->productImageFacade->findProductImageSetById(
            $imageSetEntity->getIdProductImageSet(),
        );

        $this->assertNotEmpty($productImageSetTransfer);
        $this->assertCount(0, $productImageSetTransfer->getProductImages());
    }

    /**
     * @return void
     */
    public function testFindProductImageSetByIdSortsImagesBySortOrderAsc(): void
    {
        // Arrange
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 3);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 1);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 0);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 2);

        // Act
        $productImageCollection = $this->productImageFacade->findProductImageSetById(
            $this->imageSetSortedAbstract->getIdProductImageSet(),
        )->getProductImages();

        // Assign
        $sortOrder = 0;
        foreach ($productImageCollection as $productImageTransfer) {
            $this->assertTrue($productImageTransfer->getSortOrder() >= $sortOrder);
            $sortOrder = $productImageTransfer->getSortOrder();
        }
    }

    /**
     * @return void
     */
    public function testFindProductImageSetByIdSortsImagesByidProductImageSetToProductImageAsc(): void
    {
        // Arrange
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 0);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 0);
        $this->tester->createProductImageSetToProductImage($this->imageSetSortedAbstract->getIdProductImageSet(), 0);

        // Act
        $productImageCollection = $this->productImageFacade->findProductImageSetById(
            $this->imageSetSortedAbstract->getIdProductImageSet(),
        )->getProductImages();

        // Assign
        $idProductImageSetToProductImage = 0;
        foreach ($productImageCollection as $productImageTransfer) {
            $this->assertTrue($productImageTransfer->getIdProductImageSetToProductImage() > $idProductImageSetToProductImage);
            $idProductImageSetToProductImage = $productImageTransfer->getIdProductImageSetToProductImage();
        }
    }

    /**
     * @return void
     */
    public function testGetDefaultProductImagesByProductIdsReturnsImages(): void
    {
        //Arrange
        $productIds = [$this->productConcreteEntity->getIdProduct()];

        //Act
        $productImagesCollection = $this->productImageFacade->getProductImagesByProductIdsAndProductImageSetName($productIds, static::SET_NAME);

        //Assert
        $this->assertCount(count($productIds), $productImagesCollection);
        $this->assertEquals($productIds, array_keys($productImagesCollection));
        $this->assertNotEmpty($productImagesCollection[$this->productConcreteEntity->getIdProduct()]);
    }

    /**
     * @return void
     */
    public function testGetProductConcreteIdsFilteredByProductImageIds(): void
    {
        //Arrange
        $productImageSetTransfer = $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $this->productConcreteEntity->getIdProduct(),
        ]);

        $productImageFilterTransfer = (new ProductImageFilterTransfer())
            ->addProductImageId($productImageSetTransfer->getProductImages()->offsetGet(0)->getIdProductImage());

        //Act
        $productConcreteIds = array_map(
            'intval',
            $this->productImageFacade->getProductConcreteIds($productImageFilterTransfer),
        );

        //Assert
        $this->assertCount(1, $productConcreteIds);
        $this->assertContains($productImageSetTransfer->getIdProduct(), $productConcreteIds);
    }

    /**
     * @return void
     */
    public function testGetProductConcreteIdsFilteredByProductImageIdsWithEmptyResult(): void
    {
        //Arrange
        $productImageSetTransfer = $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT_ABSTRACT => $this->productAbstractEntity->getIdProductAbstract(),
        ]);

        $productImageFilterTransfer = (new ProductImageFilterTransfer())
            ->addProductImageId($productImageSetTransfer->getProductImages()->offsetGet(0)->getIdProductImage());

        //Act
        $productConcreteIds = $this->productImageFacade->getProductConcreteIds($productImageFilterTransfer);

        //Assert
        $this->assertEmpty($productConcreteIds);
    }

    /**
     * @return void
     */
    public function testGetProductConcreteIdsFilteredByProductImageSetIds(): void
    {
        //Arrange
        $productImageSetTransfer = $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $this->productConcreteEntity->getIdProduct(),
        ]);

        $productImageFilterTransfer = (new ProductImageFilterTransfer())
            ->addProductImageSetId($productImageSetTransfer->getIdProductImageSet());

        //Act
        $productConcreteIds = array_map(
            'intval',
            $this->productImageFacade->getProductConcreteIds($productImageFilterTransfer),
        );

        //Assert
        $this->assertCount(1, $productConcreteIds);
        $this->assertContains($productImageSetTransfer->getIdProduct(), $productConcreteIds);
    }

    /**
     * @return void
     */
    public function testGetProductConcreteIdsFilteredByProductImageSetIdsWithEmptyResult(): void
    {
        //Arrange
        $productImageSetTransfer = $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT_ABSTRACT => $this->productAbstractEntity->getIdProductAbstract(),
        ]);

        $productImageFilterTransfer = (new ProductImageFilterTransfer())
            ->addProductImageSetId($productImageSetTransfer->getIdProductImageSet());

        //Act
        $productConcreteIds = $this->productImageFacade->getProductConcreteIds($productImageFilterTransfer);

        //Assert
        $this->assertEmpty($productConcreteIds);
    }

    /**
     * @return void
     */
    public function testMergeProductAbstractImageSetsIntoProductConcreteTakenFromProductAbstractIfEmpty(): void
    {
        // Arrange
        $productAbstractImageSet = (new ProductImageSetTransfer())->setIdProduct(2)->toArray();

        $productConcrete = new ProductConcreteTransfer();
        $productAbstract = (new ProductAbstractTransfer())->fromArray(['imageSets' => [$productAbstractImageSet]]);

        // Act
        $productConcreteResult = $this->productImageFacade->mergeProductAbstractImageSetsIntoProductConcrete(
            $productConcrete,
            $productAbstract,
        );

        // Assert
        $this->assertEquals($productAbstractImageSet, $productConcreteResult->getImageSets()[0]->toArray());
    }

    /**
     * @return void
     */
    public function testMergeProductAbstractImageSetsIntoProductConcreteNotTakenFromProductAbstractIfExist(): void
    {
        // Arrange
        $productConcreteImageSet = (new ProductImageSetTransfer())->setIdProduct(1)->toArray();
        $productAbstractImageSet = (new ProductImageSetTransfer())->setIdProduct(2)->toArray();

        $productConcrete = (new ProductConcreteTransfer())->fromArray(['imageSets' => [$productConcreteImageSet]]);
        $productAbstract = (new ProductAbstractTransfer())->fromArray(['imageSets' => [$productAbstractImageSet]]);

        // Act
        $productConcreteResult = $this->productImageFacade->mergeProductAbstractImageSetsIntoProductConcrete(
            $productConcrete,
            $productAbstract,
        );

        // Assert
        $this->assertEquals($productConcreteImageSet, $productConcreteResult->getImageSets()[0]->toArray());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionRetrievesProductImageSets(): void
    {
        // Arrange
        $productConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
        ]);

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection(new ProductImageSetCriteriaTransfer());

        // Assert
        $this->assertNotEmpty($productImageSetCollectionTransfer->getProductImageSets());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionShouldNotReturnAbstractProductImageSets(): void
    {
        // Arrange
        $productAbstractTransfer = $this->tester->haveProductAbstract();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT_ABSTRACT => $productAbstractTransfer->getIdProductAbstract(),
        ]);

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())->setProductImageSetConditions(
            (new ProductImageSetConditionsTransfer())->addSku($productAbstractTransfer->getSku()),
        );

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        $this->assertEmpty($productImageSetCollectionTransfer->getProductImageSets());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionRetrievesProductImageSetsFilteredBySku(): void
    {
        // Arrange
        $productConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
        ]);

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())->setProductImageSetConditions(
            (new ProductImageSetConditionsTransfer())->addSku($productConcreteTransfer->getSku()),
        );

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        $this->assertCount(1, $productImageSetCollectionTransfer->getProductImageSets());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionRetrievesProductImageSetsFilteredByLocaleName(): void
    {
        // Arrange
        $localeTransfer = $this->tester->haveLocale();
        $firstProductConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $firstProductConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::LOCALE => $localeTransfer,
        ]);
        $secondProductConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $secondProductConcreteTransfer->getIdProductConcrete(),
        ]);

        $productImageSetConditionsTransfer = (new ProductImageSetConditionsTransfer())
            ->addSku($firstProductConcreteTransfer->getSku())
            ->addSku($secondProductConcreteTransfer->getSku())
            ->addLocaleName($localeTransfer->getLocaleName());

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())
            ->setProductImageSetConditions($productImageSetConditionsTransfer);

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        $this->assertCount(1, $productImageSetCollectionTransfer->getProductImageSets());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionRetrievesProductImageSetsFilteredBySkuWithTwoProductImageSets(): void
    {
        // Arrange
        $productConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::NAME => 'default',
        ]);
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::NAME => 'default',
        ]);

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())->setProductImageSetConditions(
            (new ProductImageSetConditionsTransfer())->addSku($productConcreteTransfer->getSku()),
        );

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        $this->assertCount(2, $productImageSetCollectionTransfer->getProductImageSets());
        $this->assertSame('default', $productImageSetCollectionTransfer->getProductImageSets()->offsetGet(0)->getName());
        $this->assertSame('default', $productImageSetCollectionTransfer->getProductImageSets()->offsetGet(1)->getName());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionRetrievesProductImageSetsFilteredBySkuWithTwoImagesInside(): void
    {
        // Arrange
        $productConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::PRODUCT_IMAGES => [
                (new ProductImageBuilder())->build(),
                (new ProductImageBuilder())->build(),
            ],
        ]);

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())->setProductImageSetConditions(
            (new ProductImageSetConditionsTransfer())->addSku($productConcreteTransfer->getSku()),
        );

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        $this->assertCount(1, $productImageSetCollectionTransfer->getProductImageSets());
        $this->assertCount(2, $productImageSetCollectionTransfer->getProductImageSets()->getIterator()->current()->getProductImages());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionShouldReturnProductImageSetWithIdProductAndSku(): void
    {
        // Arrange
        $productConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::PRODUCT_IMAGES => [
                (new ProductImageBuilder())->build(),
                (new ProductImageBuilder())->build(),
            ],
        ]);

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())->setProductImageSetConditions(
            (new ProductImageSetConditionsTransfer())->addSku($productConcreteTransfer->getSku()),
        );

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        /** @var \Generated\Shared\Transfer\ProductImageSetTransfer $productImageSetTransfer */
        $productImageSetTransfer = $productImageSetCollectionTransfer->getProductImageSets()->getIterator()->current();

        $this->assertSame($productConcreteTransfer->getIdProductConcrete(), $productImageSetTransfer->getIdProduct());
        $this->assertSame($productConcreteTransfer->getSku(), $productImageSetTransfer->getSku());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionShouldReturnProductImageSetWithProductImages(): void
    {
        // Arrange
        $productConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::PRODUCT_IMAGES => [
                (new ProductImageBuilder())->seed([
                    ProductImageTransfer::EXTERNAL_URL_LARGE => 'fake-large-url',
                    ProductImageTransfer::EXTERNAL_URL_SMALL => 'fake-small-url',
                ])->build(),
            ],
        ]);

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())->setProductImageSetConditions(
            (new ProductImageSetConditionsTransfer())->addSku($productConcreteTransfer->getSku()),
        );

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        /** @var \Generated\Shared\Transfer\ProductImageSetTransfer $productImageSetTransfer */
        $productImageSetTransfer = $productImageSetCollectionTransfer->getProductImageSets()->getIterator()->current();
        /** @var \Generated\Shared\Transfer\ProductImageTransfer $productImageTransfer */
        $productImageTransfer = $productImageSetTransfer->getProductImages()->getIterator()->current();

        $this->assertSame('fake-large-url', $productImageTransfer->getExternalUrlLarge());
        $this->assertSame('fake-small-url', $productImageTransfer->getExternalUrlSmall());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionShouldReturnProductImageSetWithLocaleName(): void
    {
        // Arrange
        $productConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::PRODUCT_IMAGES => [
                (new ProductImageBuilder())->seed([
                    ProductImageTransfer::EXTERNAL_URL_LARGE => 'fake-large-url',
                    ProductImageTransfer::EXTERNAL_URL_SMALL => 'fake-small-url',
                ])->build(),
            ],
        ]);

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())->setProductImageSetConditions(
            (new ProductImageSetConditionsTransfer())->addSku($productConcreteTransfer->getSku()),
        );

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        /** @var \Generated\Shared\Transfer\ProductImageSetTransfer $productImageSetTransfer */
        $productImageSetTransfer = $productImageSetCollectionTransfer->getProductImageSets()->getIterator()->current();
        $this->assertNotEmpty($productImageSetTransfer->getLocaleOrFail()->getLocaleName());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionShouldReturnSortedCollection(): void
    {
        // Arrange
        $productConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::NAME => 'bar',
        ]);
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::NAME => 'foo',
        ]);

        $sortTransfer = (new SortTransfer())
            ->setField(ProductImageSetTransfer::NAME)
            ->setIsAscending(false);

        $productImageSetConditionsTransfer = (new ProductImageSetConditionsTransfer())
            ->addSku($productConcreteTransfer->getSku());

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())
            ->addSort($sortTransfer)
            ->setProductImageSetConditions($productImageSetConditionsTransfer);

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        $this->assertCount(2, $productImageSetCollectionTransfer->getProductImageSets());
        $this->assertSame('foo', $productImageSetCollectionTransfer->getProductImageSets()->offsetGet(0)->getName());
        $this->assertSame('bar', $productImageSetCollectionTransfer->getProductImageSets()->offsetGet(1)->getName());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionShouldReturnPaginatedCollectionByLimitAndOffset(): void
    {
        // Arrange
        $productConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::NAME => 'bar',
        ]);
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::NAME => 'foo',
        ]);

        $productImageSetConditionsTransfer = (new ProductImageSetConditionsTransfer())
            ->addSku($productConcreteTransfer->getSku());

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())
            ->setPagination((new PaginationTransfer())->setLimit(1)->setOffset(1))
            ->setProductImageSetConditions($productImageSetConditionsTransfer);

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        $this->assertCount(1, $productImageSetCollectionTransfer->getProductImageSets());
    }

    /**
     * @return void
     */
    public function testGetConcreteProductImageSetCollectionShouldReturnPaginatedCollectionByPageAndMaxPerPage(): void
    {
        // Arrange
        $productConcreteTransfer = $this->tester->haveProduct();
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::NAME => 'bar',
        ]);
        $this->tester->haveProductImageSet([
            ProductImageSetTransfer::ID_PRODUCT => $productConcreteTransfer->getIdProductConcrete(),
            ProductImageSetTransfer::NAME => 'foo',
        ]);

        $productImageSetConditionsTransfer = (new ProductImageSetConditionsTransfer())
            ->addSku($productConcreteTransfer->getSku());

        $productImageSetCriteriaTransfer = (new ProductImageSetCriteriaTransfer())
            ->setPagination((new PaginationTransfer())->setPage(2)->setMaxPerPage(1))
            ->setProductImageSetConditions($productImageSetConditionsTransfer);

        // Act
        $productImageSetCollectionTransfer = $this->productImageFacade
            ->getConcreteProductImageSetCollection($productImageSetCriteriaTransfer);

        // Assert
        $this->assertCount(1, $productImageSetCollectionTransfer->getProductImageSets());
    }
}
