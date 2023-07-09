<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductValidity\Business;

use Generated\Shared\Transfer\ProductConcreteTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Spryker\Zed\ProductValidity\Business\ProductValidityBusinessFactory getFactory()
 * @method \Spryker\Zed\ProductValidity\Persistence\ProductValidityRepositoryInterface getRepository()
 */
class ProductValidityFacade extends AbstractFacade implements ProductValidityFacadeInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @return void
     */
    public function checkProductValidityDateRangeAndTouch(): void
    {
        $this->getFactory()
            ->createProductConcreteSwitcher()
            ->updateProductsValidity();
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @deprecated Use {@link \Spryker\Zed\ProductValidity\Business\ProductValidityFacade::expandProductConcreteTransfersWithValidity()} instead.
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcreteTransfer
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function hydrateProductConcrete(ProductConcreteTransfer $productConcreteTransfer): ProductConcreteTransfer
    {
        return $this->expandProductConcreteTransfersWithValidity([$productConcreteTransfer])[0];
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\ProductConcreteTransfer> $productConcreteTransfers
     *
     * @return array<\Generated\Shared\Transfer\ProductConcreteTransfer>
     */
    public function expandProductConcreteTransfersWithValidity(array $productConcreteTransfers): array
    {
        return $this->getFactory()
            ->createProductValidityReader()
            ->expandProductConcreteTransfersWithValidity($productConcreteTransfers);
    }

    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductConcreteTransfer $productConcreteTransfer
     *
     * @return \Generated\Shared\Transfer\ProductConcreteTransfer
     */
    public function saveProductValidity(ProductConcreteTransfer $productConcreteTransfer): ProductConcreteTransfer
    {
        return $this->getFactory()
            ->createProductValidityUpdater()
            ->update($productConcreteTransfer);
    }
}
