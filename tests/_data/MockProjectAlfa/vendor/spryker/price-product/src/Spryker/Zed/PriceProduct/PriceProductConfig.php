<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\PriceProduct;

use Spryker\Zed\Kernel\AbstractBundleConfig;

/**
 * @method \Spryker\Shared\PriceProduct\PriceProductConfig getSharedConfig()
 */
class PriceProductConfig extends AbstractBundleConfig
{
    /**
     * Decides if orphan store prices need to be cleared after every product price update.
     *
     * @var bool
     */
    protected const IS_DELETE_ORPHAN_STORE_PRICES_ON_SAVE_ENABLED = false;

    /**
     * @api
     *
     * @return string
     */
    public function getPriceTypeDefaultName()
    {
        return $this->getSharedConfig()->getPriceTypeDefaultName();
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPriceDimensionDefault()
    {
        return $this->getSharedConfig()->getPriceDimensionDefault();
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPriceModeIdentifierForBothType()
    {
        return $this->getSharedConfig()->getPriceModeIdentifierForBothType();
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPriceDimensionDefaultName(): string
    {
        return $this->getSharedConfig()->getPriceDimensionDefaultName();
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPriceModeIdentifierForNetType(): string
    {
        return $this->getSharedConfig()->getPriceModeIdentifierForNetType();
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPriceModeIdentifierForGrossType(): string
    {
        return $this->getSharedConfig()->getPriceModeIdentifierForGrossType();
    }

    /**
     * @api
     *
     * @return bool
     */
    public function getIsDeleteOrphanStorePricesOnSaveEnabled(): bool
    {
        return static::IS_DELETE_ORPHAN_STORE_PRICES_ON_SAVE_ENABLED;
    }
}
