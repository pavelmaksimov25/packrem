<?php


declare(strict_types=1);

namespace PyzTest\Zed\Product;

use Codeception\Actor;

/**
 * Inherited Methods
 *
 * @method void wantToTest($text)
 * @method void wantTo($text)
 * @method void execute($callable)
 * @method void expectTo($prediction)
 * @method void expect($prediction)
 * @method void amGoingTo($argumentation)
 * @method void am($role)
 * @method void lookForwardTo($achieveValue)
 * @method void comment($description)
 * @method \Codeception\Lib\Friend haveFriend($name, $actorClass = null)
 *
 * @SuppressWarnings(\PyzTest\Zed\Product\PHPMD)
 */
class ProductCommunicationTester extends Actor
{
    use _generated\ProductCommunicationTesterActions;

    /**
     * @return bool
     */
    public function seeThatDynamicStoreEnabled(): bool
    {
        return $this->getLocator()->store()->facade()->isDynamicStoreEnabled();
    }
}
