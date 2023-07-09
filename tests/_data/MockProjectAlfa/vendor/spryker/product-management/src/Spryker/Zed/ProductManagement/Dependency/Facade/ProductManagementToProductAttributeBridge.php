<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductManagement\Dependency\Facade;

use Generated\Shared\Transfer\ProductManagementAttributeCollectionTransfer;
use Generated\Shared\Transfer\ProductManagementAttributeFilterTransfer;
use Generated\Shared\Transfer\ProductManagementAttributeTransfer;

class ProductManagementToProductAttributeBridge implements ProductManagementToProductAttributeInterface
{
    /**
     * @var \Spryker\Zed\ProductAttribute\Business\ProductAttributeFacadeInterface
     */
    protected $productAttributeFacade;

    /**
     * @param \Spryker\Zed\ProductAttribute\Business\ProductAttributeFacadeInterface $productAttributeFacade
     */
    public function __construct($productAttributeFacade)
    {
        $this->productAttributeFacade = $productAttributeFacade;
    }

    /**
     * @param \Generated\Shared\Transfer\ProductManagementAttributeTransfer $productManagementAttributeTransfer
     *
     * @return \Generated\Shared\Transfer\ProductManagementAttributeTransfer
     */
    public function createProductManagementAttribute(
        ProductManagementAttributeTransfer $productManagementAttributeTransfer
    ): ProductManagementAttributeTransfer {
        return $this->productAttributeFacade->createProductManagementAttribute($productManagementAttributeTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\ProductManagementAttributeTransfer $productManagementAttributeTransfer
     *
     * @return \Generated\Shared\Transfer\ProductManagementAttributeTransfer
     */
    public function updateProductManagementAttribute(
        ProductManagementAttributeTransfer $productManagementAttributeTransfer
    ): ProductManagementAttributeTransfer {
        return $this->productAttributeFacade->updateProductManagementAttribute($productManagementAttributeTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\ProductManagementAttributeTransfer $productManagementAttributeTransfer
     *
     * @return void
     */
    public function translateProductManagementAttribute(ProductManagementAttributeTransfer $productManagementAttributeTransfer): void
    {
        $this->productAttributeFacade->translateProductManagementAttribute($productManagementAttributeTransfer);
    }

    /**
     * @return array<\Generated\Shared\Transfer\ProductManagementAttributeTransfer>
     */
    public function getProductAttributeCollection(): array
    {
        return $this->productAttributeFacade->getProductAttributeCollection();
    }

    /**
     * @param array<\Generated\Shared\Transfer\ProductConcreteTransfer> $productConcreteTransfers
     *
     * @return array<\Generated\Shared\Transfer\ProductManagementAttributeTransfer>
     */
    public function getUniqueSuperAttributesFromConcreteProducts(array $productConcreteTransfers): array
    {
        return $this->productAttributeFacade->getUniqueSuperAttributesFromConcreteProducts($productConcreteTransfers);
    }

    /**
     * @param \Generated\Shared\Transfer\ProductManagementAttributeFilterTransfer $productManagementAttributeFilterTransfer
     *
     * @return \Generated\Shared\Transfer\ProductManagementAttributeCollectionTransfer
     */
    public function getProductManagementAttributes(
        ProductManagementAttributeFilterTransfer $productManagementAttributeFilterTransfer
    ): ProductManagementAttributeCollectionTransfer {
        return $this->productAttributeFacade->getProductManagementAttributes($productManagementAttributeFilterTransfer);
    }
}
