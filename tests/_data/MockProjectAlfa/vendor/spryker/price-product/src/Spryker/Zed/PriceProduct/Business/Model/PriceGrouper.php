<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\PriceProduct\Business\Model;

use Generated\Shared\Transfer\PriceProductDimensionTransfer;
use Generated\Shared\Transfer\PriceProductTransfer;
use Spryker\Shared\PriceProduct\PriceProductConfig as SharedPriceProductConfig;
use Spryker\Zed\PriceProduct\Business\Model\Product\PriceProductMapperInterface;
use Spryker\Zed\PriceProduct\PriceProductConfig;

class PriceGrouper implements PriceGrouperInterface
{
    /**
     * @var \Spryker\Zed\PriceProduct\Business\Model\ReaderInterface
     */
    protected $priceReader;

    /**
     * @var \Spryker\Zed\PriceProduct\Business\Model\Product\PriceProductMapperInterface
     */
    protected $priceProductMapper;

    /**
     * @var \Spryker\Zed\PriceProduct\PriceProductConfig
     */
    protected $config;

    /**
     * @param \Spryker\Zed\PriceProduct\Business\Model\ReaderInterface $priceReader
     * @param \Spryker\Zed\PriceProduct\Business\Model\Product\PriceProductMapperInterface $priceProductMapper
     * @param \Spryker\Zed\PriceProduct\PriceProductConfig $config
     */
    public function __construct(
        ReaderInterface $priceReader,
        PriceProductMapperInterface $priceProductMapper,
        PriceProductConfig $config
    ) {
        $this->priceReader = $priceReader;
        $this->priceProductMapper = $priceProductMapper;
        $this->config = $config;
    }

    /**
     * @param string $sku
     * @param \Generated\Shared\Transfer\PriceProductDimensionTransfer|null $priceProductDimensionTransfer
     *
     * @return array<mixed>
     */
    public function findPricesBySkuGroupedForCurrentStore(
        string $sku,
        ?PriceProductDimensionTransfer $priceProductDimensionTransfer = null
    ): array {
        if (!$priceProductDimensionTransfer) {
            $priceProductDimensionTransfer = (new PriceProductDimensionTransfer())
                ->setType($this->config->getPriceDimensionDefault());
        }

        $priceProductTransfers = $this->priceReader->findPricesBySkuForCurrentStore($sku, $priceProductDimensionTransfer);

        return $this->groupPriceProduct($priceProductTransfers);
    }

    /**
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     *
     * @return array<string, array>
     */
    public function groupPriceProduct(array $priceProductTransfers)
    {
        $prices = [];
        foreach ($priceProductTransfers as $priceProductTransfer) {
            $prices = $this->groupPriceByCurrencyAndStore($priceProductTransfer, $prices);
        }

        return $prices;
    }

    /**
     * @param \Generated\Shared\Transfer\PriceProductTransfer $priceProductTransfer
     * @param array<string, array> $prices
     *
     * @return array<string, array>
     */
    protected function groupPriceByCurrencyAndStore(PriceProductTransfer $priceProductTransfer, array $prices): array
    {
        /** @var \Generated\Shared\Transfer\MoneyValueTransfer $priceMoneyValueTransfer */
        $priceMoneyValueTransfer = $priceProductTransfer->requireMoneyValue()->getMoneyValue();

        /** @var \Generated\Shared\Transfer\PriceTypeTransfer $priceTypeTransfer */
        $priceTypeTransfer = $priceProductTransfer->requirePriceType()->getPriceType();
        $priceType = $priceTypeTransfer->getName();

        /** @var \Generated\Shared\Transfer\CurrencyTransfer $currencyTransfer */
        $currencyTransfer = $priceMoneyValueTransfer->requireCurrency()->getCurrency();
        $currencyIsoCode = $currencyTransfer->getCode();

        if (
            !isset($prices[$currencyIsoCode][SharedPriceProductConfig::PRICE_DATA])
            || $priceMoneyValueTransfer->getPriceData() !== null
        ) {
            $prices = $this->setPriceData($prices, $priceProductTransfer);
        }

        if ($priceMoneyValueTransfer->getGrossAmount() !== null) {
            $prices[$currencyIsoCode][$this->priceProductMapper->getGrossPriceModeIdentifier()][$priceType] = $priceMoneyValueTransfer->getGrossAmount();
        }

        if ($priceMoneyValueTransfer->getNetAmount() !== null) {
            $prices[$currencyIsoCode][$this->priceProductMapper->getNetPriceModeIdentifier()][$priceType] = $priceMoneyValueTransfer->getNetAmount();
        }

        return $prices;
    }

    /**
     * @param array $prices
     * @param \Generated\Shared\Transfer\PriceProductTransfer $priceProductTransfer
     *
     * @return array
     */
    protected function setPriceData(array $prices, PriceProductTransfer $priceProductTransfer): array
    {
        /** @var \Generated\Shared\Transfer\MoneyValueTransfer $priceMoneyValueTransfer */
        $priceMoneyValueTransfer = $priceProductTransfer->requireMoneyValue()->getMoneyValue();

        /** @var \Generated\Shared\Transfer\PriceTypeTransfer $priceTypeTransfer */
        $priceTypeTransfer = $priceProductTransfer->requirePriceType()->getPriceType();
        $priceType = $priceTypeTransfer->getName();

        /** @var \Generated\Shared\Transfer\CurrencyTransfer $currencyTransfer */
        $currencyTransfer = $priceMoneyValueTransfer->requireCurrency()->getCurrency();
        $currencyIsoCode = $currencyTransfer->getCode();

        if ($priceType === $this->config->getPriceTypeDefaultName()) {
            $prices[$currencyIsoCode][SharedPriceProductConfig::PRICE_DATA] = $priceMoneyValueTransfer->getPriceData();
        }
        $prices[$currencyIsoCode][SharedPriceProductConfig::PRICE_DATA_BY_PRICE_TYPE][$priceType] = $priceMoneyValueTransfer->getPriceData();

        return $prices;
    }
}
