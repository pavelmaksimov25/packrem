<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Product\Business\Product;

use Generated\Shared\Transfer\LocalizedAttributesTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;
use Generated\Shared\Transfer\StoreRelationTransfer;
use Spryker\Zed\Kernel\Persistence\EntityManager\TransactionTrait;
use Spryker\Zed\Product\Business\Attribute\AttributeEncoderInterface;
use Spryker\Zed\Product\Business\Exception\MissingProductException;
use Spryker\Zed\Product\Business\Product\Assertion\ProductAbstractAssertionInterface;
use Spryker\Zed\Product\Business\Product\Mapper\ProductAttributeMapperInterface;
use Spryker\Zed\Product\Business\Product\Observer\AbstractProductAbstractManagerSubject;
use Spryker\Zed\Product\Business\Product\Sku\SkuGeneratorInterface;
use Spryker\Zed\Product\Business\Product\StoreRelation\ProductAbstractStoreRelationReaderInterface;
use Spryker\Zed\Product\Business\Product\StoreRelation\ProductAbstractStoreRelationWriterInterface;
use Spryker\Zed\Product\Business\Product\Trigger\ProductEventTriggerInterface;
use Spryker\Zed\Product\Business\Transfer\ProductTransferMapperInterface;
use Spryker\Zed\Product\Dependency\Facade\ProductToLocaleInterface;
use Spryker\Zed\Product\Dependency\Facade\ProductToTouchInterface;
use Spryker\Zed\Product\Persistence\ProductQueryContainerInterface;
use Spryker\Zed\Product\Persistence\ProductRepositoryInterface;

class ProductAbstractManager extends AbstractProductAbstractManagerSubject implements ProductAbstractManagerInterface
{
    use TransactionTrait;

    /**
     * @var \Spryker\Zed\Product\Persistence\ProductQueryContainerInterface
     */
    protected $productQueryContainer;

    /**
     * @var \Spryker\Zed\Product\Dependency\Facade\ProductToTouchInterface
     */
    protected $touchFacade;

    /**
     * @var \Spryker\Zed\Product\Dependency\Facade\ProductToLocaleInterface
     */
    protected $localeFacade;

    /**
     * @var \Spryker\Zed\Product\Business\Product\Assertion\ProductAbstractAssertionInterface
     */
    protected $productAbstractAssertion;

    /**
     * @var \Spryker\Zed\Product\Business\Product\Sku\SkuGeneratorInterface
     */
    protected $skuGenerator;

    /**
     * @var \Spryker\Zed\Product\Business\Attribute\AttributeEncoderInterface
     */
    protected $attributeEncoder;

    /**
     * @var \Spryker\Zed\Product\Business\Transfer\ProductTransferMapperInterface
     */
    protected $productTransferMapper;

    /**
     * @var \Spryker\Zed\Product\Business\Product\StoreRelation\ProductAbstractStoreRelationReaderInterface
     */
    protected $productAbstractStoreRelationReader;

    /**
     * @var \Spryker\Zed\Product\Business\Product\StoreRelation\ProductAbstractStoreRelationWriterInterface
     */
    protected $productAbstractStoreRelationWriter;

    /**
     * @var array<\Spryker\Zed\ProductExtension\Dependency\Plugin\ProductAbstractPreCreatePluginInterface>
     */
    protected $productAbstractPreCreatePlugins;

    /**
     * @var \Spryker\Zed\Product\Business\Product\Trigger\ProductEventTriggerInterface
     */
    protected $productEventTrigger;

    /**
     * @var \Spryker\Zed\Product\Persistence\ProductRepositoryInterface
     */
    protected ProductRepositoryInterface $productRepository;

    /**
     * @var \Spryker\Zed\Product\Business\Product\Mapper\ProductAttributeMapperInterface
     */
    protected ProductAttributeMapperInterface $productAttributeMapper;

    /**
     * @param \Spryker\Zed\Product\Persistence\ProductQueryContainerInterface $productQueryContainer
     * @param \Spryker\Zed\Product\Dependency\Facade\ProductToTouchInterface $touchFacade
     * @param \Spryker\Zed\Product\Dependency\Facade\ProductToLocaleInterface $localeFacade
     * @param \Spryker\Zed\Product\Business\Product\Assertion\ProductAbstractAssertionInterface $productAbstractAssertion
     * @param \Spryker\Zed\Product\Business\Product\Sku\SkuGeneratorInterface $skuGenerator
     * @param \Spryker\Zed\Product\Business\Attribute\AttributeEncoderInterface $attributeEncoder
     * @param \Spryker\Zed\Product\Business\Transfer\ProductTransferMapperInterface $productTransferMapper
     * @param \Spryker\Zed\Product\Business\Product\StoreRelation\ProductAbstractStoreRelationReaderInterface $productAbstractStoreRelationReader
     * @param \Spryker\Zed\Product\Business\Product\StoreRelation\ProductAbstractStoreRelationWriterInterface $productAbstractStoreRelationWriter
     * @param array<\Spryker\Zed\ProductExtension\Dependency\Plugin\ProductAbstractPreCreatePluginInterface> $productAbstractPreCreatePlugins
     * @param \Spryker\Zed\Product\Business\Product\Trigger\ProductEventTriggerInterface $productEventTrigger
     * @param \Spryker\Zed\Product\Persistence\ProductRepositoryInterface $productRepository
     * @param \Spryker\Zed\Product\Business\Product\Mapper\ProductAttributeMapperInterface $productAttributeMapper
     */
    public function __construct(
        ProductQueryContainerInterface $productQueryContainer,
        ProductToTouchInterface $touchFacade,
        ProductToLocaleInterface $localeFacade,
        ProductAbstractAssertionInterface $productAbstractAssertion,
        SkuGeneratorInterface $skuGenerator,
        AttributeEncoderInterface $attributeEncoder,
        ProductTransferMapperInterface $productTransferMapper,
        ProductAbstractStoreRelationReaderInterface $productAbstractStoreRelationReader,
        ProductAbstractStoreRelationWriterInterface $productAbstractStoreRelationWriter,
        array $productAbstractPreCreatePlugins,
        ProductEventTriggerInterface $productEventTrigger,
        ProductRepositoryInterface $productRepository,
        ProductAttributeMapperInterface $productAttributeMapper
    ) {
        $this->productQueryContainer = $productQueryContainer;
        $this->touchFacade = $touchFacade;
        $this->localeFacade = $localeFacade;
        $this->productAbstractAssertion = $productAbstractAssertion;
        $this->skuGenerator = $skuGenerator;
        $this->attributeEncoder = $attributeEncoder;
        $this->productTransferMapper = $productTransferMapper;
        $this->productAbstractStoreRelationReader = $productAbstractStoreRelationReader;
        $this->productAbstractStoreRelationWriter = $productAbstractStoreRelationWriter;
        $this->productAbstractPreCreatePlugins = $productAbstractPreCreatePlugins;
        $this->productEventTrigger = $productEventTrigger;
        $this->productRepository = $productRepository;
        $this->productAttributeMapper = $productAttributeMapper;
    }

    /**
     * @param string $sku
     *
     * @return bool
     */
    public function hasProductAbstract($sku)
    {
        return $this->productQueryContainer
            ->queryProductAbstractBySku($sku)
            ->count() > 0;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return int
     */
    public function createProductAbstract(ProductAbstractTransfer $productAbstractTransfer)
    {
        return $this->getTransactionHandler()->handleTransaction(function () use ($productAbstractTransfer): int {
            return $this->executeCreateProductAbstractTransaction($productAbstractTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return int
     */
    public function saveProductAbstract(ProductAbstractTransfer $productAbstractTransfer)
    {
        return $this->getTransactionHandler()->handleTransaction(function () use ($productAbstractTransfer) {
            return $this->executeUpdateProductAbstractTransaction($productAbstractTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     * @param int $idProductAbstract
     *
     * @return void
     */
    protected function persistProductAbstractStoreRelation(ProductAbstractTransfer $productAbstractTransfer, $idProductAbstract)
    {
        if ($productAbstractTransfer->getStoreRelation() === null) {
            $productAbstractTransfer->setStoreRelation(new StoreRelationTransfer());
        }

        $productAbstractTransfer->getStoreRelation()->setIdEntity($idProductAbstract);
        $this->productAbstractStoreRelationWriter->save($productAbstractTransfer->getStoreRelation());
    }

    /**
     * @param string $sku
     *
     * @return int|null
     */
    public function findProductAbstractIdBySku($sku)
    {
        $productAbstract = $this->productQueryContainer
            ->queryProductAbstractBySku($sku)
            ->findOne();

        if (!$productAbstract) {
            return null;
        }

        return $productAbstract->getIdProductAbstract();
    }

    /**
     * @param int $idProductAbstract
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer|null
     */
    public function findProductAbstractById($idProductAbstract)
    {
        $productAbstractEntity = $this->productQueryContainer
            ->queryProductAbstract()
            ->filterByIdProductAbstract($idProductAbstract)
            ->findOne();

        if (!$productAbstractEntity) {
            return null;
        }

        $productAbstractTransfer = $this->productTransferMapper->convertProductAbstract($productAbstractEntity);
        $productAbstractTransfer = $this->loadLocalizedAttributes($productAbstractTransfer);
        $productAbstractTransfer->setStoreRelation(
            $this->getStoreRelation($idProductAbstract),
        );

        $productAbstractTransfer = $this->notifyReadObservers($productAbstractTransfer);

        return $productAbstractTransfer;
    }

    /**
     * @param array<int> $productAbstractIds
     *
     * @return array<\Generated\Shared\Transfer\ProductAbstractTransfer>
     */
    public function findProductAbstractByIdsIndexedByProductAbstractIds(array $productAbstractIds): array
    {
        $productAbstractEntities = $this->productQueryContainer
            ->queryProductAbstract()
            ->filterByIdProductAbstract_In($productAbstractIds)
            ->find();

        $productAbstractTransfersIndexedByAbstractProductId = [];

        foreach ($productAbstractEntities as $productAbstractEntity) {
            $productAbstractTransfersIndexedByAbstractProductId[$productAbstractEntity->getIdProductAbstract()]
                = $this->productTransferMapper->convertProductAbstract($productAbstractEntity);
        }

        $productAbstractTransfersIndexedByAbstractProductId = $this->expandProductAbstractTransfersWithLocalizedAttributes($productAbstractTransfersIndexedByAbstractProductId);
        $productAbstractTransfersIndexedByAbstractProductId = $this->expandProductAbstractTransfersWithStoreRelationBatch($productAbstractTransfersIndexedByAbstractProductId);

        foreach ($productAbstractTransfersIndexedByAbstractProductId as $idProductAbstract => $productAbstractTransfer) {
            $productAbstractTransfersIndexedByAbstractProductId[$idProductAbstract] = $this->notifyReadObservers($productAbstractTransfer);
        }

        return $productAbstractTransfersIndexedByAbstractProductId;
    }

    /**
     * @param array<int, \Generated\Shared\Transfer\ProductAbstractTransfer> $productAbstractTransfersIndexedByAbstractProductId
     *
     * @return array<int, \Generated\Shared\Transfer\ProductAbstractTransfer>
     */
    protected function expandProductAbstractTransfersWithStoreRelationBatch(array $productAbstractTransfersIndexedByAbstractProductId): array
    {
        foreach ($productAbstractTransfersIndexedByAbstractProductId as $idProductAbstract => $productAbstractTransfer) {
            $productAbstractTransfer->setStoreRelation(
                $this->getStoreRelation($idProductAbstract),
            );

            $productAbstractTransfersIndexedByAbstractProductId[$idProductAbstract] = $productAbstractTransfer;
        }

        return $productAbstractTransfersIndexedByAbstractProductId;
    }

    /**
     * @param int $idProductAbstract
     *
     * @return \Generated\Shared\Transfer\StoreRelationTransfer
     */
    protected function getStoreRelation($idProductAbstract)
    {
        return $this->productAbstractStoreRelationReader->getStoreRelation(
            (new StoreRelationTransfer())
                ->setIdEntity($idProductAbstract),
        );
    }

    /**
     * @param string $sku
     *
     * @throws \Spryker\Zed\Product\Business\Exception\MissingProductException
     *
     * @return string
     */
    public function getAbstractSkuFromProductConcrete($sku)
    {
        $productConcrete = $this->productQueryContainer
            ->queryProductConcreteBySku($sku)
            ->findOne();

        if (!$productConcrete) {
            throw new MissingProductException(
                sprintf(
                    'Tried to retrieve a product concrete with sku %s, but it does not exist.',
                    $sku,
                ),
            );
        }

        return $productConcrete->getSpyProductAbstract()->getSku();
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return int
     */
    protected function executeCreateProductAbstractTransaction(ProductAbstractTransfer $productAbstractTransfer): int
    {
        $productAbstractTransfer->setSku(
            $this->skuGenerator->generateProductAbstractSku($productAbstractTransfer),
        );

        $this->productAbstractAssertion->assertSkuIsUnique($productAbstractTransfer->getSku());

        $productAbstractTransfer = $this->notifyBeforeCreateObservers($productAbstractTransfer);

        $productAbstractTransfer = $this->executeProductAbstractPreCreatePlugins($productAbstractTransfer);

        $productAbstractEntity = $this->persistEntity($productAbstractTransfer);

        $idProductAbstract = $productAbstractEntity->getPrimaryKey();
        $productAbstractTransfer->setIdProductAbstract($idProductAbstract);

        $this->persistProductAbstractLocalizedAttributes($productAbstractTransfer);
        $this->persistProductAbstractStoreRelation($productAbstractTransfer, $idProductAbstract);

        $this->notifyAfterCreateObservers($productAbstractTransfer);

        return $idProductAbstract;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return int
     */
    protected function executeUpdateProductAbstractTransaction(ProductAbstractTransfer $productAbstractTransfer): int
    {
        $idProductAbstract = $productAbstractTransfer->getIdProductAbstractOrFail();

        $this->productAbstractAssertion->assertProductExists($idProductAbstract);
        $this->productAbstractAssertion->assertSkuIsUniqueWhenUpdatingProduct($idProductAbstract, $productAbstractTransfer->getSku());

        $productAbstractTransfer = $this->notifyBeforeUpdateObservers($productAbstractTransfer);

        $this->persistEntity($productAbstractTransfer);
        $this->persistProductAbstractLocalizedAttributes($productAbstractTransfer);
        $this->persistProductAbstractStoreRelation($productAbstractTransfer, $idProductAbstract);

        $this->notifyAfterUpdateObservers($productAbstractTransfer);

        $this->productEventTrigger->triggerProductUpdateEvents([$idProductAbstract]);

        return $idProductAbstract;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstract
     */
    protected function persistEntity(ProductAbstractTransfer $productAbstractTransfer)
    {
        $jsonAttributes = $this->attributeEncoder->encodeAttributes(
            $productAbstractTransfer->getAttributes(),
        );

        $productAbstractEntity = $this->productQueryContainer
            ->queryProductAbstract()
            ->filterByIdProductAbstract($productAbstractTransfer->getIdProductAbstract())
            ->findOneOrCreate();

        $productAbstractData = $productAbstractTransfer->modifiedToArray();
        if (isset($productAbstractData[ProductAbstractTransfer::ATTRIBUTES])) {
            unset($productAbstractData[ProductAbstractTransfer::ATTRIBUTES]);
        }

        $productAbstractEntity->fromArray($productAbstractData);
        $productAbstractEntity->setAttributes($jsonAttributes);

        $productAbstractEntity->save();

        return $productAbstractEntity;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    protected function loadLocalizedAttributes(ProductAbstractTransfer $productAbstractTransfer)
    {
        $productAttributeCollection = $this->productQueryContainer
            ->queryProductAbstractLocalizedAttributes($productAbstractTransfer->getIdProductAbstract())
            ->find();

        foreach ($productAttributeCollection as $attributeEntity) {
            $localizedAttributesTransfer = $this->productAttributeMapper->mapProductAttributeEntityToProductAbstractTransfer(
                $attributeEntity,
                new LocalizedAttributesTransfer(),
            );

            $localizedAttributesTransfer->setLocale($this->localeFacade->getLocaleById($attributeEntity->getFkLocale()));

            $productAbstractTransfer->addLocalizedAttributes($localizedAttributesTransfer);
        }

        return $productAbstractTransfer;
    }

    /**
     * @param array<\Generated\Shared\Transfer\ProductAbstractTransfer> $productAbstractTransfersIndexedByAbstractProductId
     *
     * @return array<\Generated\Shared\Transfer\ProductAbstractTransfer>
     */
    protected function expandProductAbstractTransfersWithLocalizedAttributes(array $productAbstractTransfersIndexedByAbstractProductId): array
    {
        $productAbstractIds = array_keys($productAbstractTransfersIndexedByAbstractProductId);

        $productAttributeCollection = $this->productQueryContainer
            ->queryProductAbstractLocalizedAttributesBatch($productAbstractIds)
            ->find();

        $localeTransfersIndexedByIdLocaleId = $this->indexLocalesByIdLocale($this->localeFacade->getLocaleCollection());

        foreach ($productAttributeCollection as $attributeEntity) {
            $localizedAttributesTransfer = $this->productAttributeMapper->mapProductAttributeEntityToProductAbstractTransfer(
                $attributeEntity,
                new LocalizedAttributesTransfer(),
            );

            $localizedAttributesTransfer->setLocale($localeTransfersIndexedByIdLocaleId[$attributeEntity->getFkLocale()] ?? null);

            $productAbstractTransfersIndexedByAbstractProductId[$attributeEntity->getFkProductAbstract()]->addLocalizedAttributes($localizedAttributesTransfer);
        }

        return $productAbstractTransfersIndexedByAbstractProductId;
    }

    /**
     * @param array<\Generated\Shared\Transfer\LocaleTransfer> $localeTransfers
     *
     * @return array<int, \Generated\Shared\Transfer\LocaleTransfer>
     */
    protected function indexLocalesByIdLocale(array $localeTransfers): array
    {
        $localeTransfersIndexedByIdLocaleId = [];

        foreach ($localeTransfers as $localeTransfer) {
            $localeTransfersIndexedByIdLocaleId[(int)$localeTransfer->getIdLocale()] = $localeTransfer;
        }

        return $localeTransfersIndexedByIdLocaleId;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return void
     */
    protected function persistProductAbstractLocalizedAttributes(ProductAbstractTransfer $productAbstractTransfer)
    {
        $productAbstractTransfer->requireIdProductAbstract();

        $this->getTransactionHandler()->handleTransaction(function () use ($productAbstractTransfer): void {
            $this->executePersistProductAbstractLocalizedAttributesTransaction($productAbstractTransfer);
        });
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return void
     */
    protected function executePersistProductAbstractLocalizedAttributesTransaction(ProductAbstractTransfer $productAbstractTransfer): void
    {
        $idProductAbstract = $productAbstractTransfer->getIdProductAbstract();

        foreach ($productAbstractTransfer->getLocalizedAttributes() as $localizedAttributes) {
            $locale = $localizedAttributes->getLocale();
            $jsonAttributes = $this->attributeEncoder->encodeAttributes($localizedAttributes->getAttributes());

            $localizedProductAttributesEntity = $this->productQueryContainer
                ->queryProductAbstractAttributeCollection($idProductAbstract, $locale->getIdLocale())
                ->findOneOrCreate();

            $localizedProductAttributesEntity
                ->setFkProductAbstract($idProductAbstract)
                ->setFkLocale($locale->getIdLocale())
                ->setName($localizedAttributes->getName())
                ->setAttributes($jsonAttributes)
                ->setDescription($localizedAttributes->getDescription())
                ->setMetaTitle($localizedAttributes->getMetaTitle())
                ->setMetaKeywords($localizedAttributes->getMetaKeywords())
                ->setMetaDescription($localizedAttributes->getMetaDescription());

            $localizedProductAttributesEntity->save();
        }
    }

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    protected function executeProductAbstractPreCreatePlugins(ProductAbstractTransfer $productAbstractTransfer): ProductAbstractTransfer
    {
        foreach ($this->productAbstractPreCreatePlugins as $productAbstractPreCreatePlugin) {
            $productAbstractTransfer = $productAbstractPreCreatePlugin->preCreate($productAbstractTransfer);
        }

        return $productAbstractTransfer;
    }
}
