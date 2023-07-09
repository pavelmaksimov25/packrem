<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Shared\PriceProduct;

use Spryker\Shared\Kernel\AbstractSharedConfig;

class PriceProductConfig extends AbstractSharedConfig
{
    /**
     * Price mode for price type when its applicable to gross and net price modes.
     *
     * @var string
     */
    protected const PRICE_MODE_BOTH = 'BOTH';

    /**
     * @uses \Spryker\Shared\Price\PriceConfig::PRICE_MODE_NET
     *
     * @var string
     */
    protected const PRICE_NET_MODE = 'NET_MODE';

    /**
     * @uses \Spryker\Shared\Price\PriceConfig::PRICE_MODE_GROSS
     *
     * @var string
     */
    public const PRICE_GROSS_MODE = 'GROSS_MODE';

    /**
     * Price Dimension Default
     *
     * @var string
     */
    public const PRICE_DIMENSION_DEFAULT = 'PRICE_DIMENSION_DEFAULT';

    /**
     * Price type default
     *
     * @var string
     */
    protected const PRICE_TYPE_DEFAULT = 'DEFAULT';

    /**
     * Price data
     *
     * @var string
     */
    public const PRICE_DATA = 'priceData';

    /**
     * Specification:
     * - Price data by price type.
     *
     * @api
     *
     * @var string
     */
    public const PRICE_DATA_BY_PRICE_TYPE = 'priceDataByPriceType';

    /**
     * List of price modes
     *
     * @var array<string>
     */
    public const PRICE_MODES = [
        'NET_MODE',
        'GROSS_MODE',
    ];

    /**
     * Price dimension name default
     *
     * @var string
     */
    protected const PRICE_DIMENSION_DEFAULT_NAME = 'Default';

    /**
     * @api
     *
     * @return string
     */
    public function getPriceTypeDefaultName(): string
    {
        return static::PRICE_TYPE_DEFAULT;
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPriceDimensionDefault(): string
    {
        return static::PRICE_DIMENSION_DEFAULT;
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPriceModeIdentifierForBothType(): string
    {
        return static::PRICE_MODE_BOTH;
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPriceModeIdentifierForNetType(): string
    {
        return static::PRICE_NET_MODE;
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPriceModeIdentifierForGrossType(): string
    {
        return static::PRICE_GROSS_MODE;
    }

    /**
     * @api
     *
     * @return string
     */
    public function getPriceDimensionDefaultName(): string
    {
        return static::PRICE_DIMENSION_DEFAULT_NAME;
    }
}
