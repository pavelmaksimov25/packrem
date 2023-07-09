<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductImage\Business\Model;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Generated\Shared\Transfer\ProductConcreteTransfer;

interface ReaderInterface
{
    /**
     * @param int $idProductAbstract
     *
     * @return array<\Generated\Shared\Transfer\ProductImageSetTransfer>
     */
    public function getProductImagesSetCollectionByProductAbstractId($idProductAbstract);

    /**
     * @param int $idProduct
     *
     * @return array<\Generated\Shared\Transfer\ProductImageSetTransfer>
     */
    public function getProductImagesSetCollectionByProductId($idProduct);

    /**
     * @param int $idProduct
     *
     * @return array<\Generated\Shared\Transfer\ProductImageSetTransfer>
     */
    public function getProductImagesSetCollectionByProductIdForCurrentLocale(int $idProduct): array;

    /**
     * @param int $idProductImageSet
     *
     * @return \Generated\Shared\Transfer\ProductImageSetTransfer|null
     */
    public function findProductImagesSetCollectionById($idProductImageSet);

    /**
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function expandProductAbstractWithImageSets(ProductAbstractTransfer $productAbstractTransfer);

    /**
     * @deprecated Use {@link \Spryker\Zed\ProductImage\Business\Model\ReaderInterface::expandProductConcreteTransfersWithImageSets()} instead.
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcreteTransfer
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function expandProductConcreteWithImageSets(ProductConcreteTransfer $productConcreteTransfer);

    /**
     * @param array<\Generated\Shared\Transfer\ProductConcreteTransfer> $productConcreteTransfers
     *
     * @return array<\Generated\Shared\Transfer\ProductConcreteTransfer>
     */
    public function expandProductConcreteTransfersWithImageSets(array $productConcreteTransfers): array;
}
