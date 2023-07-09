<?php


declare(strict_types=1);

namespace PyzTest\Yves\Customer\Presentation;

use PyzTest\Yves\Customer\CustomerPresentationTester;
use PyzTest\Yves\Customer\PageObject\CustomerLoginPage;
use PyzTest\Yves\Customer\PageObject\CustomerLogoutPage;
use PyzTest\Yves\Customer\PageObject\CustomerOverviewPage;

/**
 * Auto-generated group annotations
 *
 * @group PyzTest
 * @group Yves
 * @group Customer
 * @group Presentation
 * @group CustomerLogoutCest
 * Add your own group annotations below this line
 */
class CustomerLogoutCest
{
    /**
     * @param \PyzTest\Yves\Customer\CustomerPresentationTester $i
     *
     * @return void
     */
    public function testICanLogoutWhenLoggedIn(CustomerPresentationTester $i): void
    {
        $i->amOnPage(CustomerLoginPage::URL);
        $customerTransfer = $i->haveRegisteredCustomer();
        $i->submitLoginForm($customerTransfer->getEmail(), $customerTransfer->getPassword());
        $i->seeCurrentUrlEquals(CustomerOverviewPage::URL);

        $i->amOnPage(CustomerLogoutPage::URL);

        $i->seeCurrentUrlEquals('/en/');
    }
}
