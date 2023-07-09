<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace ArchitectureSniffer\Common\Plugin;

use PHPMD\AbstractNode;
use PHPMD\Rule\InterfaceAware;

class PluginInterfaceSuffixRule extends AbstractPluginRule implements InterfaceAware
{
    /**
     * @var string
     */
    protected const EXPECTED_INTERFACE_NAME_SUFFIX = 'PluginInterface';

    /**
     * @param \PHPMD\AbstractNode $node
     *
     * @return void
     */
    public function apply(AbstractNode $node): void
    {
        if (!$this->isPlugin($node)) {
            return;
        }

        $className = $node->getName();
        $suffix = substr($className, -strlen(static::EXPECTED_INTERFACE_NAME_SUFFIX));
        if ($suffix !== static::EXPECTED_INTERFACE_NAME_SUFFIX) {
            $this->addViolation($node, [$node->getName()]);
        }
    }
}
