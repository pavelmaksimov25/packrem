<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace ArchitectureSniffer\Zed\Business\Directory;

use PHPMD\AbstractRule;
use PHPMD\Node\AbstractNode;
use PHPMD\Node\MethodNode;

abstract class AbstractDirectoryRule extends AbstractRule
{
    /**
     * @param \PHPMD\Node\AbstractNode $node
     *
     * @return bool
     */
    protected function isInBusinessLayer(AbstractNode $node)
    {
        if ($node instanceof MethodNode) {
            $parent = $node->getNode()->getParent();
            $className = $parent->getNamespaceName();
        } else {
            $className = $node->getFullQualifiedName();
        }

        if (preg_match('/\\\\Zed\\\\\w+\\\\Business\\\\/', $className)) {
            return true;
        }

        return false;
    }
}
