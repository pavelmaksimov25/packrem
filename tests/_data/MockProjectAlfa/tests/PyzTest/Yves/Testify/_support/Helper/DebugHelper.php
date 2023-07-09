<?php


declare(strict_types=1);

namespace PyzTest\Yves\Testify\Helper;

use Codeception\Module;
use Spryker\Shared\ZedRequest\ZedRequestConstants;
use SprykerTest\Shared\Testify\Helper\ConfigHelperTrait;

/**
 * This helper enables cookie forwarding to debug Zed during yves - zed requests.
 */
class DebugHelper extends Module
{
    use ConfigHelperTrait;

    /**
     * @param array $settings
     *
     * @return void
     */
    public function _beforeSuite(array $settings = []): void
    {
        $_COOKIE['XDEBUG_SESSION'] = 'XDEBUG_ECLIPSE';
        $this->getConfigHelper()->setConfig(ZedRequestConstants::TRANSFER_DEBUG_SESSION_FORWARD_ENABLED, true);
    }
}
