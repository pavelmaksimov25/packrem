<?php


declare(strict_types=1);

namespace PyzTest\Zed\CmsGui\Presentation;

use PyzTest\Zed\CmsGui\CmsGuiPresentationTester;
use PyzTest\Zed\CmsGui\PageObject\CmsListPage;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Zed
 * @group CmsGui
 * @group Presentation
 * @group CmsGuiPageListCest
 * Add your own group annotations below this line
 */
class CmsGuiPageListCest
{
    /**
     * @param \PyzTest\Zed\CmsGui\CmsGuiPresentationTester $i
     *
     * @return void
     */
    public function testICanOpenCmsPageList(CmsGuiPresentationTester $i): void
    {
        $i->amLoggedInUser();
        $i->amOnPage(CmsListPage::URL);

        $i->waitForElementVisible(CmsListPage::PAGE_LIST_TABLE_XPATH, 10);
    }
}
