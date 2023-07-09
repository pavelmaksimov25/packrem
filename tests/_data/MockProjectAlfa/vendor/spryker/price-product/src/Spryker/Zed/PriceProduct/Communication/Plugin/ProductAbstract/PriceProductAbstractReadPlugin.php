<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\PriceProduct\Communication\Plugin\ProductAbstract;

use ArrayObject;
use Generated\Shared\Transfer\PriceProductCriteriaTransfer;
use Generated\Shared\Transfer\PriceProductDimensionTransfer;
use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Shared\PriceProduct\PriceProductConfig;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Product\Dependency\Plugin\ProductAbstractPluginReadInterface;

/**
 * @deprecated Use {@link \Spryker\Zed\PriceProduct\Communication\Plugin\Product\PriceProductProductAbstractExpanderPlugin} instead.
 *
 * @method \Spryker\Zed\PriceProduct\Business\PriceProductFacadeInterface getFacade()
 * @method \Spryker\Zed\PriceProduct\Communication\PriceProductCommunicationFactory getFactory()
 * @method \Spryker\Zed\PriceProduct\PriceProductConfig getConfig()
 * @method \Spryker\Zed\PriceProduct\Persistence\PriceProductQueryContainerInterface getQueryContainer()
 */
class PriceProductAbstractReadPlugin extends AbstractPlugin implements ProductAbstractPluginReadInterface
{
    /**
     * {@inheritDoc}
     *
     * @api
     *
     * @param \Generated\Shared\Transfer\ProductAbstractTransfer $productAbstractTransfer
     *
     * @return \Generated\Shared\Transfer\ProductAbstractTransfer
     */
    public function read(ProductAbstractTransfer $productAbstractTransfer)
    {
        $productAbstractTransfer->requireIdProductAbstract();
        $priceProductCriteria = (new PriceProductCriteriaTransfer())->setPriceDimension(
            (new PriceProductDimensionTransfer())
                ->setType(PriceProductConfig::PRICE_DIMENSION_DEFAULT),
        );

        /** @var int $idProductAbstract */
        $idProductAbstract = $productAbstractTransfer->requireIdProductAbstract()->getIdProductAbstract();
        $priceProductTransfers = $this->getFacade()->findProductAbstractPrices(
            $idProductAbstract,
            $priceProductCriteria,
        );

        if ($priceProductTransfers) {
            $productAbstractTransfer->setPrices(new ArrayObject($priceProductTransfers));
        }

        return $productAbstractTransfer;
    }
}
