<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueApplication\Plugin\Rest\ServiceProvider;

use Silex\Application;
use Silex\ServiceProviderInterface;
use Spryker\Glue\Kernel\AbstractPlugin;

/**
 * @deprecated Use {@link \Spryker\Glue\GlueApplication\Plugin\Application\GlueApplicationApplicationPlugin} instead.
 *
 * @method \Spryker\Glue\GlueApplication\GlueApplicationFactory getFactory()
 */
class GlueResourceBuilderService extends AbstractPlugin implements ServiceProviderInterface
{
    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    public function register(Application $app)
    {
        $app['resource_builder'] = $this->getFactory()->createRestResourceBuilder();
    }

    /**
     * @param \Silex\Application $app
     *
     * @return void
     */
    public function boot(Application $app)
    {
    }
}
