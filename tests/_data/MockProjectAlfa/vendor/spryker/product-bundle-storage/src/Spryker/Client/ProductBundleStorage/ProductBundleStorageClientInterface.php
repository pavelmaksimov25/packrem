<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\ProductBundleStorage;

use Generated\Shared\Transfer\ProductBundleStorageCriteriaTransfer;
use Generated\Shared\Transfer\ProductViewTransfer;

interface ProductBundleStorageClientInterface
{
    /**
     * Specification:
     * - Retrieves bundled products from storage by provided criteria.
     * - Returns `ProductBundleStorageTransfer` collection indexed by bundle product concrete id.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductBundleStorageCriteriaTransfer $productBundleStorageCriteriaTransfer
     *
     * @return array<\Generated\Shared\Transfer\ProductBundleStorageTransfer>
     */
    public function getProductBundles(ProductBundleStorageCriteriaTransfer $productBundleStorageCriteriaTransfer): array;

    /**
     * Specification:
     * - Expects `ProductViewTransfer.idProductConcrete` to be set.
     * - Checks if `ProductViewTransfer.idProductConcrete` is specified, otherwise skips the extension.
     * - Reads bundled products from the storage.
     * - Reads store specific ProductConcrete resources from Storage.
     * - Expands `ProductViewTransfer.bundledProducts` with `ProductForProductBundleStorageTransfer` objects.
     * - Returns an expanded `ProductViewTransfer`.
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductViewTransfer $productViewTransfer
     * @param array $productData
     * @param string $localeName
     *
     * @return \Generated\Shared\Transfer\ProductViewTransfer
     */
    public function expandProductViewTransferWithBundledProducts(
        ProductViewTransfer $productViewTransfer,
        array $productData,
        string $localeName
    ): ProductViewTransfer;
}
