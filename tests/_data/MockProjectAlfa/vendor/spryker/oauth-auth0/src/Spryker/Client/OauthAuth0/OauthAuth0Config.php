<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\OauthAuth0;

use Spryker\Client\Kernel\AbstractBundleConfig;

/**
 * @method \Spryker\Shared\OauthAuth0\OauthAuth0Config getSharedConfig()
 */
class OauthAuth0Config extends AbstractBundleConfig
{
    /**
     * @api
     *
     * @return string
     */
    public function getClientId(): string
    {
        return $this->getSharedConfig()->getClientId();
    }

    /**
     * @api
     *
     * @return string
     */
    public function getClientSecret(): string
    {
        return $this->getSharedConfig()->getClientSecret();
    }

    /**
     * @api
     *
     * @return string
     */
    public function getCustomDomain(): string
    {
        return $this->getSharedConfig()->getCustomDomain();
    }
}
