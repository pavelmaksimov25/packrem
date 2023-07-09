<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductPageSearch\Business\DataMapper;

use Generated\Shared\Transfer\LocaleTransfer;
use Generated\Shared\Transfer\PageMapTransfer;
use Spryker\Zed\ProductPageSearch\Dependency\Facade\ProductPageSearchToProductSearchInterface;
use Spryker\Zed\ProductPageSearch\Dependency\Facade\ProductPageSearchToSearchInterface;
use Spryker\Zed\ProductPageSearch\ProductPageSearchConfig;
use Spryker\Zed\ProductPageSearchExtension\Dependency\PageMapBuilderInterface;

class ProductAbstractSearchDataMapper extends AbstractProductSearchDataMapper
{
    /**
     * @var string
     */
    protected const FACET_NAME = 'facet-name';

    /**
     * @var string
     */
    protected const FACET_VALUE = 'facet-value';

    /**
     * @var string
     */
    protected const ALL_PARENTS = 'all-parents';

    /**
     * @var string
     */
    protected const DIRECT_PARENTS = 'direct-parents';

    /**
     * @var string
     */
    protected const KEY_ADD_TO_CART_SKU = 'add_to_cart_sku';

    /**
     * @var \Spryker\Zed\ProductPageSearchExtension\Dependency\PageMapBuilderInterface
     */
    protected $pageMapBuilder;

    /**
     * @var \Spryker\Zed\ProductPageSearch\Dependency\Facade\ProductPageSearchToSearchInterface
     */
    protected $searchFacade;

    /**
     * @var \Spryker\Zed\ProductPageSearch\Dependency\Facade\ProductPageSearchToProductSearchInterface
     */
    protected $productSearchFacade;

    /**
     * @var array<\Spryker\Zed\ProductPageSearchExtension\Dependency\Plugin\ProductAbstractMapExpanderPluginInterface>
     */
    protected $productAbstractMapExpanderPlugins;

    /**
     * @param \Spryker\Zed\ProductPageSearchExtension\Dependency\PageMapBuilderInterface $pageMapBuilder
     * @param \Spryker\Zed\ProductPageSearch\Dependency\Facade\ProductPageSearchToSearchInterface $searchFacade
     * @param \Spryker\Zed\ProductPageSearch\Dependency\Facade\ProductPageSearchToProductSearchInterface $productSearchFacade
     * @param array<\Spryker\Zed\ProductPageSearchExtension\Dependency\Plugin\ProductAbstractMapExpanderPluginInterface> $productAbstractMapExpanderPlugins
     */
    public function __construct(
        PageMapBuilderInterface $pageMapBuilder,
        ProductPageSearchToSearchInterface $searchFacade,
        ProductPageSearchToProductSearchInterface $productSearchFacade,
        array $productAbstractMapExpanderPlugins
    ) {
        parent::__construct();

        $this->pageMapBuilder = $pageMapBuilder;
        $this->searchFacade = $searchFacade;
        $this->productSearchFacade = $productSearchFacade;
        $this->productAbstractMapExpanderPlugins = $productAbstractMapExpanderPlugins;
    }

    /**
     * @param array<string, mixed> $data
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return array
     */
    public function mapProductDataToSearchData(array $data, LocaleTransfer $localeTransfer): array
    {
        if (!count($this->productAbstractMapExpanderPlugins)) {
            return $this->searchFacade->transformPageMapToDocumentByMapperName(
                $data,
                $localeTransfer,
                ProductPageSearchConfig::PRODUCT_ABSTRACT_RESOURCE_NAME,
            );
        }

        return $this->buildProductPageSearchData($data, $localeTransfer);
    }

    /**
     * @param array<string, mixed> $data
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return \Generated\Shared\Transfer\PageMapTransfer
     */
    protected function buildPageMap(array $data, LocaleTransfer $localeTransfer): PageMapTransfer
    {
        $pageMapTransfer = (new PageMapTransfer())
            ->setStore($data['store'])
            ->setLocale($data['locale'])
            ->setType($data['type'])
            ->setIsActive($data['is_active']);

        $this->pageMapBuilder->addSearchResultData($pageMapTransfer, 'id_product_abstract', $data['id_product_abstract'])
            ->addSearchResultData($pageMapTransfer, 'abstract_sku', $data['sku'])
            ->addSearchResultData($pageMapTransfer, 'abstract_name', $data['name'])
            ->addSearchResultData($pageMapTransfer, 'url', $data['url'])
            ->addSearchResultData($pageMapTransfer, 'type', 'product_abstract')
            ->addFullTextBoosted($pageMapTransfer, $data['name'])
            ->addFullTextBoosted($pageMapTransfer, $data['sku'])
            ->addFullText($pageMapTransfer, $data['concrete_names'])
            ->addFullText($pageMapTransfer, $data['concrete_skus'])
            ->addFullText($pageMapTransfer, $data['abstract_description'])
            ->addFullText($pageMapTransfer, $data['concrete_description'])
            ->addSuggestionTerms($pageMapTransfer, $data['name'])
            ->addCompletionTerms($pageMapTransfer, $data['name'])
            ->addStringSort($pageMapTransfer, 'name', $data['name']);

        $addToCartSku = $data[static::KEY_ADD_TO_CART_SKU] ?? null;

        if ($addToCartSku) {
            $this->pageMapBuilder->addSearchResultData($pageMapTransfer, static::KEY_ADD_TO_CART_SKU, $addToCartSku);
        }

        $this->expandProductPageMap($pageMapTransfer, $data, $localeTransfer);

        $pageMapTransfer = $this->productSearchFacade->mapDynamicProductAttributesToSearchData($this->pageMapBuilder, $pageMapTransfer, $data['attributes']);

        return $pageMapTransfer;
    }

    /**
     * @param \Generated\Shared\Transfer\PageMapTransfer $pageMapTransfer
     * @param array<string, mixed> $productData
     * @param \Generated\Shared\Transfer\LocaleTransfer $localeTransfer
     *
     * @return \Generated\Shared\Transfer\PageMapTransfer
     */
    protected function expandProductPageMap(PageMapTransfer $pageMapTransfer, array $productData, LocaleTransfer $localeTransfer): PageMapTransfer
    {
        foreach ($this->productAbstractMapExpanderPlugins as $productAbstractMapExpander) {
            $pageMapTransfer = $productAbstractMapExpander->expandProductMap($pageMapTransfer, $this->pageMapBuilder, $productData, $localeTransfer);
        }

        return $pageMapTransfer;
    }
}
