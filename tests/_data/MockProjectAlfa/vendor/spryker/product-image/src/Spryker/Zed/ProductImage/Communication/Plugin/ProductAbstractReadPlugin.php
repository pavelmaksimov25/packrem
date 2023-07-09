<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductImage\Communication\Plugin;

use Generated\Shared\Transfer\ProductAbstractTransfer;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\Product\Dependency\Plugin\ProductAbstractPluginReadInterface;

/**
 * @deprecated Use {@link \Spryker\Zed\ProductImage\Communication\Plugin\Product\ProductImageProductAbstractExpanderPlugin} instead.
 *
 * @method \Spryker\Zed\ProductImage\Business\ProductImageFacadeInterface getFacade()
 * @method \Spryker\Zed\ProductImage\Communication\ProductImageCommunicationFactory getFactory()
 * @method \Spryker\Zed\ProductImage\ProductImageConfig getConfig()
 * @method \Spryker\Zed\ProductImage\Persistence\ProductImageQueryContainerInterface getQueryContainer()
 */
class ProductAbstractReadPlugin extends AbstractPlugin implements ProductAbstractPluginReadInterface
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
        return $this->getFacade()->expandProductAbstractWithImageSets($productAbstractTransfer);
    }
}
