<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace ArchitectureSniffer\Zed\Business\Facade;

use PHPMD\AbstractRule;
use PHPMD\Node\AbstractNode;
use PHPMD\Node\ClassNode;
use PHPMD\Node\MethodNode;

abstract class AbstractFacadeRule extends AbstractRule
{
    /**
     * @param \PHPMD\Node\AbstractNode $node
     *
     * @return bool
     */
    protected function isFacade(AbstractNode $node)
    {
        if ($node instanceof MethodNode) {
            $parent = $node->getNode()->getParent();
            $className = $parent->getNamespaceName() . '\\' . $parent->getName();
        } else {
            $className = $node->getFullQualifiedName();
        }

        if (preg_match('/\\\\Zed\\\\\w+\\\\Business\\\\\w+Facade$/', $className)) {
            return true;
        }

        return false;
    }

    /**
     * @param \PHPMD\Node\AbstractNode $node
     *
     * @return bool
     */
    protected function isAbstractFacade(ClassNode $node): bool
    {
        return $node->getName() === 'AbstractFacade';
    }
}
