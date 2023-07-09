<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Zed\Sales\PageObject;

use SprykerTest\Zed\Sales\SalesPresentationTester;

class SalesDetailPage
{
    /**
     * @var string
     */
    public const URL = '/sales/detail?id-sales-order=';

    /**
     * @var string
     */
    public const SELECTOR_ID_SALES_ORDER_ITEM = '//div[@id="items"]//table/tbody/tr/td[{{position}}]/input';

    /**
     * @var string
     */
    public const SELECTOR_SALES_ORDER_ROW = '//div[@id="items"]//table/tbody/tr/td[{{position}}]/input';

    /**
     * @var string
     */
    public const SELECTOR_ITEM_TOTAL_ELEMENT = '//table[@data-qa="order-item-list"]/tbody/tr[@data-qa-item-row="{{idSalesOrderItem}}"]/td[@data-qa="item-total-amount"]';

    /**
     * @var string
     */
    public const SELECTOR_CURRENT_STATE = '//td[@data-qa-item-current-state={{idSalesOrderItem}}]';

    /**
     * @var string
     */
    public const SELECTOR_GRAND_TOTAL = '//td[@data-qa="grand-total"]';

    /**
     * @var string
     */
    public const ATTRIBUTE_ITEM_TOTAL_RAW = 'data-qa-raw';

    /**
     * @var string
     */
    public const ATTRIBUTE_GRAND_TOTAL_RAW = 'data-qa-grand-total-raw';

    /**
     * @var \SprykerTest\Zed\Sales\SalesPresentationTester
     */
    protected $tester;

    /**
     * @param \SprykerTest\Zed\Sales\SalesPresentationTester $tester
     */
    public function __construct(SalesPresentationTester $tester)
    {
        $this->tester = $tester;
    }

    /**
     * @param int $idSalesOrder
     *
     * @return string
     */
    public static function getOrderDetailsPageUrl(int $idSalesOrder): string
    {
        return static::URL . $idSalesOrder;
    }

    /**
     * @param int $idSalesOrderItem
     *
     * @return string
     */
    public static function getCurrentStateSelector(int $idSalesOrderItem): string
    {
        return str_replace('{{idSalesOrderItem}}', $idSalesOrderItem, static::SELECTOR_CURRENT_STATE);
    }

    /**
     * @param int $idSalesOrderItem
     *
     * @return string
     */
    public static function getItemTotalElementSelector(int $idSalesOrderItem): string
    {
        return str_replace('{{idSalesOrderItem}}', $idSalesOrderItem, static::SELECTOR_ITEM_TOTAL_ELEMENT);
    }

    /**
     * @param int $rowPosition Position of row in list, starts with 1
     *
     * @return string
     */
    public static function getIdSalesOrderItemSelector(int $rowPosition): string
    {
        return str_replace('{{position}}', $rowPosition, static::SELECTOR_ID_SALES_ORDER_ITEM);
    }

    /**
     * @param int $rowPosition Position of row in list, starts with 1
     *
     * @return string
     */
    public static function getSalesOrderItemRowSelector(int $rowPosition): string
    {
        return str_replace('{{position}}', $rowPosition, static::SELECTOR_SALES_ORDER_ROW);
    }

    /**
     * @param int $idSalesOrder
     *
     * @return void
     */
    public function openDetailPageForOrder(int $idSalesOrder): void
    {
        $this->tester->amOnPage(static::getOrderDetailsPageUrl($idSalesOrder));
    }

    /**
     * This method assumes that we are already on a details page
     *
     * @param int $rowPosition
     *
     * @return int
     */
    public function grabIdSalesOrderItemFromRow(int $rowPosition): int
    {
        $idSalesOrderItem = $this->tester->grabValueFrom(static::getIdSalesOrderItemSelector($rowPosition));

        return $idSalesOrderItem;
    }
}
