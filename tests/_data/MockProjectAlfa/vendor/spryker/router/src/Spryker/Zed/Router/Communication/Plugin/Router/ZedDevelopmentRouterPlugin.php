<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Router\Communication\Plugin\Router;

use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\RouterExtension\Dependency\Plugin\RouterPluginInterface;
use Symfony\Component\Routing\RouterInterface;

/**
 * @method \Spryker\Zed\Router\Business\RouterFacadeInterface getFacade()
 * @method \Spryker\Zed\Router\RouterConfig getConfig()
 * @method \Spryker\Zed\Router\Communication\RouterCommunicationFactory getFactory()
 */
class ZedDevelopmentRouterPlugin extends AbstractPlugin implements RouterPluginInterface
{
    /**
     * {@inheritDoc}
     * Specification:
     * - Returns a Router which can be used as fallback, when no other (cached) router was able to match.
     *
     * @api
     *
     * @return \Symfony\Component\Routing\RouterInterface
     */
    public function getRouter(): RouterInterface
    {
        return $this->getFacade()->getZedFallbackRouter();
    }
}
