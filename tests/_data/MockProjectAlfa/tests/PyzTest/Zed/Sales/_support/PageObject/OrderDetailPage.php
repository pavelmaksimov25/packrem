<?php


declare(strict_types=1);

namespace PyzTest\Zed\Sales\PageObject;

class OrderDetailPage
{
    /**
     * @var string
     */
    public const OMS_EVENT_TRIGGER_XPATH = '//a[@data-event="%s"]';

    /**
     * @var string
     */
    public const ORDER_DETAIL_PAGE_URL = '/sales/detail?id-sales-order=%d';

    /**
     * @var string
     */
    public const ORDER_DETAIL_TABLE_FIRST_ORDER_ID_XPATH = '//*[@class="dataTables_scrollBody"]/table/tbody/tr[1]/td[1]';
}
