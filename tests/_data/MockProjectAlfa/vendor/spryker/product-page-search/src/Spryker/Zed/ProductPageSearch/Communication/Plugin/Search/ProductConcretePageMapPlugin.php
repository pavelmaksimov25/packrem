<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductPageSearch\Communication\Plugin\Search;

use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\PageMapTransfer;
use Generated\Shared\Transfer\ProductConcretePageSearchTransfer;
use Spryker\Shared\ProductPageSearch\ProductPageSearchConstants;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface;
use Spryker\Zed\Search\Dependency\Plugin\NamedPageMapInterface;

/**
 * @deprecated Will be removed without replacement. Search data mapping is now done inside of this module.
 *
 * @method \Spryker\Zed\ProductPageSearch\Persistence\ProductPageSearchQueryContainerInterface getQueryContainer()
 * @method \Spryker\Zed\ProductPageSearch\Communication\ProductPageSearchCommunicationFactory getFactory()
 * @method \Spryker\Zed\ProductPageSearch\Business\ProductPageSearchFacadeInterface getFacade()
 * @method \Spryker\Zed\ProductPageSearch\ProductPageSearchConfig getConfig()
 */
class ProductConcretePageMapPlugin extends AbstractPlugin implements NamedPageMapInterface
{
    /**
     * @var string
     */
    public const KEY_ID_PRODUCT = 'id_product';

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface $pageMapBuilder
     * @param array<string, mixed> $data
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return \Generated\Shared\Transfer\PageMapTransfer
     */
    public function buildPageMap(PageMapBuilderInterface $pageMapBuilder, array $data, LocaleTransfer $localeTransfer): PageMapTransfer
    {
        $pageMapTransfer = (new PageMapTransfer())
            ->setStore($data[ProductConcretePageSearchTransfer::STORE])
            ->setLocale($data[ProductConcretePageSearchTransfer::LOCALE])
            ->setType($data[ProductConcretePageSearchTransfer::TYPE])
            ->setIsActive($data[ProductConcretePageSearchTransfer::IS_ACTIVE]);

        $pageMapBuilder
            ->addSearchResultData($pageMapTransfer, static::KEY_ID_PRODUCT, $data[ProductConcretePageSearchTransfer::FK_PRODUCT])
            ->addSearchResultData($pageMapTransfer, ProductConcretePageSearchTransfer::FK_PRODUCT_ABSTRACT, $data[ProductConcretePageSearchTransfer::FK_PRODUCT_ABSTRACT])
            ->addSearchResultData($pageMapTransfer, ProductConcretePageSearchTransfer::ABSTRACT_SKU, $data[ProductConcretePageSearchTransfer::ABSTRACT_SKU])
            ->addSearchResultData($pageMapTransfer, ProductConcretePageSearchTransfer::SKU, $data[ProductConcretePageSearchTransfer::SKU])
            ->addSearchResultData($pageMapTransfer, ProductConcretePageSearchTransfer::TYPE, $data[ProductConcretePageSearchTransfer::TYPE])
            ->addSearchResultData($pageMapTransfer, ProductConcretePageSearchTransfer::NAME, $data[ProductConcretePageSearchTransfer::NAME])
            ->addFullTextBoosted($pageMapTransfer, $data[ProductConcretePageSearchTransfer::NAME])
            ->addFullTextBoosted($pageMapTransfer, $data[ProductConcretePageSearchTransfer::SKU])
            ->addSuggestionTerms($pageMapTransfer, $data[ProductConcretePageSearchTransfer::NAME])
            ->addSuggestionTerms($pageMapTransfer, $data[ProductConcretePageSearchTransfer::SKU])
            ->addCompletionTerms($pageMapTransfer, $data[ProductConcretePageSearchTransfer::NAME])
            ->addCompletionTerms($pageMapTransfer, $data[ProductConcretePageSearchTransfer::SKU])
            ->addStringSort($pageMapTransfer, ProductConcretePageSearchTransfer::NAME, $data[ProductConcretePageSearchTransfer::NAME]);

        $pageMapTransfer = $this->expandProductPageMap($pageMapTransfer, $pageMapBuilder, $data, $localeTransfer);

        return $pageMapTransfer;
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return string
     */
    public function getName(): string
    {
        return ProductPageSearchConstants::PRODUCT_CONCRETE_RESOURCE_NAME;
    }

    /**
     * @param \Generated\Shared\Transfer\PageMapTransfer $pageMapTransfer
     * @param \Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface $pageMapBuilder
     * @param array<string, mixed> $productData
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return \Generated\Shared\Transfer\PageMapTransfer
     */
    protected function expandProductPageMap(
        PageMapTransfer $pageMapTransfer,
        PageMapBuilderInterface $pageMapBuilder,
        array $productData,
        LocaleTransfer $localeTransfer
    ): PageMapTransfer {
        $pageMapTransfer = $this->applyProductPageMapExpanders($pageMapTransfer, $pageMapBuilder, $productData, $localeTransfer);

        foreach ($this->getFactory()->getConcreteProductPageMapExpanderPlugins() as $productConcretePageMapExpanderPlugin) {
            $pageMapTransfer = $productConcretePageMapExpanderPlugin->expand($pageMapTransfer, $pageMapBuilder, $productData, $localeTransfer);
        }

        return $pageMapTransfer;
    }

    /**
     * @deprecated Will be removed without replacement.
     *
     * @param \Generated\Shared\Transfer\PageMapTransfer $pageMapTransfer
     * @param \Spryker\Zed\Search\Business\Model\Elasticsearch\DataMapper\PageMapBuilderInterface $pageMapBuilder
     * @param array<string, mixed> $productData
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return \Generated\Shared\Transfer\PageMapTransfer
     */
    protected function applyProductPageMapExpanders($pageMapTransfer, $pageMapBuilder, $productData, $localeTransfer): PageMapTransfer
    {
        foreach ($this->getFactory()->getProductConcretePageMapExpanderPlugins() as $productConcretePageMapExpanderPlugin) {
            $pageMapTransfer = $productConcretePageMapExpanderPlugin->expandProductPageMap($pageMapTransfer, $pageMapBuilder, $productData, $localeTransfer);
        }

        return $pageMapTransfer;
    }
}
