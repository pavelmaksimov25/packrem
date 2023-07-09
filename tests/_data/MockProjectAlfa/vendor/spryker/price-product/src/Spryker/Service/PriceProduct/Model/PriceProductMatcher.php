<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\PriceProduct\Model;

use Generated\Shared\Transfer\PriceProductCriteriaTransfer;
use Generated\Shared\Transfer\PriceProductFilterTransfer;
use Generated\Shared\Transfer\PriceProductTransfer;
use Spryker\Service\PriceProduct\FilterStrategy\SinglePriceProductFilterStrategyInterface;
use Spryker\Shared\PriceProduct\PriceProductConfig;

class PriceProductMatcher implements PriceProductMatcherInterface
{
    /**
     * @var array<\Spryker\Service\PriceProductExtension\Dependency\Plugin\PriceProductFilterPluginInterface>
     */
    protected $priceProductFilterPlugins = [];

    /**
     * @var \Spryker\Service\PriceProduct\FilterStrategy\SinglePriceProductFilterStrategyInterface
     */
    protected $singlePriceProductFilterStrategy;

    /**
     * @param array<\Spryker\Service\PriceProductExtension\Dependency\Plugin\PriceProductFilterPluginInterface> $priceProductDecisionPlugins
     * @param \Spryker\Service\PriceProduct\FilterStrategy\SinglePriceProductFilterStrategyInterface $singlePriceProductFilterStrategy
     */
    public function __construct(
        array $priceProductDecisionPlugins,
        SinglePriceProductFilterStrategyInterface $singlePriceProductFilterStrategy
    ) {
        $this->priceProductFilterPlugins = $priceProductDecisionPlugins;
        $this->singlePriceProductFilterStrategy = $singlePriceProductFilterStrategy;
    }

    /**
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     * @param \Generated\Shared\Transfer\PriceProductCriteriaTransfer $priceProductCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\PriceProductTransfer|null
     */
    public function matchPriceValueByPriceProductCriteria(
        array $priceProductTransfers,
        PriceProductCriteriaTransfer $priceProductCriteriaTransfer
    ): ?PriceProductTransfer {
        $priceProductCriteriaTransfer
            ->requirePriceMode()
            ->requirePriceType()
            ->requireIdCurrency();

        if (!$priceProductTransfers) {
            return null;
        }

        $priceProductTransfers = $this->findPricesByPriceProductCriteria($priceProductTransfers, $priceProductCriteriaTransfer);

        $priceProductFilterTransfer = (new PriceProductFilterTransfer())
            ->fromArray($priceProductCriteriaTransfer->toArray(false), true);
        $priceProductFilterTransfer->setPriceTypeName($priceProductCriteriaTransfer->getPriceType());

        $priceProductTransfers = $this->filterProductPrices($priceProductTransfers, $priceProductFilterTransfer);

        return $this->singlePriceProductFilterStrategy->findOne($priceProductTransfers, $priceProductFilterTransfer);
    }

    /**
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     * @param \Generated\Shared\Transfer\PriceProductFilterTransfer $priceProductFilterTransfer
     *
     * @return array<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    protected function filterProductPrices(array $priceProductTransfers, PriceProductFilterTransfer $priceProductFilterTransfer): array
    {
        $priceProductTransfers = $this->filterProductPricesByPriceMode(
            $priceProductTransfers,
            $priceProductFilterTransfer->getPriceModeOrFail(),
        );

        return $this->applyPriceProductFilterPlugins(
            $priceProductTransfers,
            $priceProductFilterTransfer,
        );
    }

    /**
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     * @param string $priceMode
     *
     * @return array<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    protected function filterProductPricesByPriceMode(array $priceProductTransfers, string $priceMode): array
    {
        $filteredPriceProductTransfers = [];

        foreach ($priceProductTransfers as $priceProductTransfer) {
            $moneyValueTransfer = $priceProductTransfer->getMoneyValueOrFail();

            if ($priceMode === PriceProductConfig::PRICE_GROSS_MODE && $moneyValueTransfer->getGrossAmount() === null) {
                continue;
            }

            if ($priceMode !== PriceProductConfig::PRICE_GROSS_MODE && $moneyValueTransfer->getNetAmount() === null) {
                continue;
            }

            $filteredPriceProductTransfers[] = $priceProductTransfer;
        }

        return $filteredPriceProductTransfers;
    }

    /**
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     * @param \Generated\Shared\Transfer\PriceProductFilterTransfer $priceProductFilterTransfer
     *
     * @return array<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    protected function applyPriceProductFilterPlugins(array $priceProductTransfers, PriceProductFilterTransfer $priceProductFilterTransfer)
    {
        foreach ($this->priceProductFilterPlugins as $priceProductFilterPlugin) {
            $priceProductTransfers = $priceProductFilterPlugin->filter($priceProductTransfers, $priceProductFilterTransfer);
        }

        return $priceProductTransfers;
    }

    /**
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     * @param \Generated\Shared\Transfer\PriceProductCriteriaTransfer $priceProductCriteriaTransfer
     *
     * @return array<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    protected function findPricesByPriceProductCriteria(array $priceProductTransfers, PriceProductCriteriaTransfer $priceProductCriteriaTransfer): array
    {
        $matchedPriceProductTransfers = [];

        foreach ($priceProductTransfers as $priceProductTransfer) {
            if ($this->checkPriceProductByCriteria($priceProductTransfer, $priceProductCriteriaTransfer)) {
                $matchedPriceProductTransfers[] = $priceProductTransfer;
            }
        }

        return $matchedPriceProductTransfers;
    }

    /**
     * @param \Generated\Shared\Transfer\PriceProductTransfer $priceProductTransfer
     * @param \Generated\Shared\Transfer\PriceProductCriteriaTransfer $priceProductCriteriaTransfer
     *
     * @return bool
     */
    protected function checkPriceProductByCriteria(PriceProductTransfer $priceProductTransfer, PriceProductCriteriaTransfer $priceProductCriteriaTransfer): bool
    {
        $priceProductTransfer
            ->requirePriceDimension()
            ->requirePriceTypeName()
            ->requireMoneyValue();

        /** @var \Generated\Shared\Transfer\PriceProductDimensionTransfer $priceDimensionTransfer */
        $priceDimensionTransfer = $priceProductTransfer->getPriceDimension();

        if (!$priceDimensionTransfer->getType()) {
            return false;
        }

        /** @var \Generated\Shared\Transfer\MoneyValueTransfer $moneyValueTransfer */
        $moneyValueTransfer = $priceProductTransfer->getMoneyValue();

        if ($priceProductCriteriaTransfer->getIdStore() !== $moneyValueTransfer->getFkStore()) {
            return false;
        }

        if ($priceProductCriteriaTransfer->getPriceDimension() !== null) {
            /** @var \Generated\Shared\Transfer\PriceProductDimensionTransfer $priceCriteriaDimensionTransfer */
            $priceCriteriaDimensionTransfer = $priceProductCriteriaTransfer->getPriceDimension();

            if ($priceCriteriaDimensionTransfer->getType() !== $priceDimensionTransfer->getType()) {
                return false;
            }
        }

        if ($priceProductCriteriaTransfer->getIdCurrency() !== null) {
            $moneyValueTransfer->requireCurrency();
            /** @var \Generated\Shared\Transfer\CurrencyTransfer $currencyTransfer */
            $currencyTransfer = $moneyValueTransfer->requireCurrency()->getCurrency();

            if ($priceProductCriteriaTransfer->getIdCurrency() !== $currencyTransfer->getIdCurrency()) {
                return false;
            }
        }
        $priceTypeName = $priceProductCriteriaTransfer->getPriceType();

        if ($priceTypeName && $priceTypeName !== $priceProductTransfer->getPriceTypeName()) {
            return false;
        }

        return true;
    }

    /**
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     * @param \Generated\Shared\Transfer\PriceProductFilterTransfer $priceProductFilterTransfer
     *
     * @return \Generated\Shared\Transfer\PriceProductTransfer|null
     */
    public function matchPriceByFilter(array $priceProductTransfers, PriceProductFilterTransfer $priceProductFilterTransfer): ?PriceProductTransfer
    {
        if (count($priceProductTransfers) === 0) {
            return null;
        }

        $priceProductFilterTransfer
            ->requirePriceTypeName()
            ->requireCurrencyIsoCode()
            ->requirePriceMode();

        $priceProductTransfers = $this->findPricesByPriceProductFilter($priceProductTransfers, $priceProductFilterTransfer);
        $priceProductTransfers = $this->filterProductPrices($priceProductTransfers, $priceProductFilterTransfer);

        return $this->singlePriceProductFilterStrategy->findOne($priceProductTransfers, $priceProductFilterTransfer);
    }

    /**
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     * @param \Generated\Shared\Transfer\PriceProductFilterTransfer $priceProductFilterTransfer
     *
     * @return array<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    public function matchPricesByFilter(array $priceProductTransfers, PriceProductFilterTransfer $priceProductFilterTransfer): array
    {
        if (count($priceProductTransfers) === 0) {
            return [];
        }

        $priceProductFilterTransfer
            ->requireCurrencyIsoCode()
            ->requirePriceMode();

        $priceProductTransfers = $this->findPricesByPriceProductFilter($priceProductTransfers, $priceProductFilterTransfer);

        return $priceProductTransfers;
    }

    /**
     * @param array<\Generated\Shared\Transfer\PriceProductTransfer> $priceProductTransfers
     * @param \Generated\Shared\Transfer\PriceProductFilterTransfer $priceProductFilterTransfer
     *
     * @return array<\Generated\Shared\Transfer\PriceProductTransfer>
     */
    protected function findPricesByPriceProductFilter(array $priceProductTransfers, PriceProductFilterTransfer $priceProductFilterTransfer): array
    {
        $matchedPriceProductTransfers = [];

        foreach ($priceProductTransfers as $priceProductTransfer) {
            if ($this->checkPriceProductOnFilter($priceProductTransfer, $priceProductFilterTransfer)) {
                $matchedPriceProductTransfers[] = $priceProductTransfer;
            }
        }

        return $this->filterProductPrices($matchedPriceProductTransfers, $priceProductFilterTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\PriceProductTransfer $priceProductTransfer
     * @param \Generated\Shared\Transfer\PriceProductFilterTransfer $priceProductFilterTransfer
     *
     * @return bool
     */
    protected function checkPriceProductOnFilter(PriceProductTransfer $priceProductTransfer, PriceProductFilterTransfer $priceProductFilterTransfer): bool
    {
        if ($priceProductTransfer->getSkuProduct() !== $priceProductFilterTransfer->getSku()) {
            return false;
        }

        if ($priceProductFilterTransfer->getPriceDimension() !== null) {
            $priceProductTransfer->requirePriceDimension();

            /** @var \Generated\Shared\Transfer\PriceProductDimensionTransfer $priceDimensionTransfer */
            $priceDimensionTransfer = $priceProductTransfer->requirePriceDimension()->getPriceDimension();

            /** @var \Generated\Shared\Transfer\PriceProductDimensionTransfer $priceProductFilterDimensionTransfer */
            $priceProductFilterDimensionTransfer = $priceProductFilterTransfer->getPriceDimension();

            if ($priceProductFilterDimensionTransfer->getType() !== $priceDimensionTransfer->getType()) {
                return false;
            }
        }

        if ($priceProductFilterTransfer->getCurrencyIsoCode() !== null) {
            /** @var \Generated\Shared\Transfer\MoneyValueTransfer $moneyValueTransfer */
            $moneyValueTransfer = $priceProductTransfer->requireMoneyValue()->getMoneyValue();
            /** @var \Generated\Shared\Transfer\CurrencyTransfer $currencyTransfer */
            $currencyTransfer = $moneyValueTransfer->requireCurrency()->getCurrency();

            if ($currencyTransfer->requireCode()->getCode() !== $priceProductFilterTransfer->getCurrencyIsoCode()) {
                return false;
            }
        }

        if ($priceProductFilterTransfer->getPriceTypeName() !== null) {
            $priceProductTransfer->requirePriceTypeName();

            if ($priceProductFilterTransfer->getPriceTypeName() !== $priceProductTransfer->getPriceTypeName()) {
                return false;
            }
        }

        return true;
    }
}
