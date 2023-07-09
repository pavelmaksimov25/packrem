<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\PropelOrmExtension\Dependency\Plugin;

/**
 * This plugin is created for extension of Propel's find*() methods generation
 */
interface FindExtensionPluginInterface extends DeclareClassesToBeUsedInterface
{
    /**
     * Specification:
     * - Used to extend find*() methods in Propel's query objects.
     *
     * @api
     *
     * @param string $script
     *
     * @return string
     */
    public function extend(string $script): string;
}
