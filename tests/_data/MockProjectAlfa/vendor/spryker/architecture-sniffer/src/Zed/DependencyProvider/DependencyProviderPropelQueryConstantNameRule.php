<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace ArchitectureSniffer\Zed\DependencyProvider;

use ArchitectureSniffer\Common\DependencyProvider\AbstractDependencyProviderRule;
use PHPMD\AbstractNode;
use PHPMD\Node\MethodNode;
use PHPMD\Rule\MethodAware;

class DependencyProviderPropelQueryConstantNameRule extends AbstractDependencyProviderRule implements MethodAware
{
    /**
     * @var string
     */
    public const RULE = 'Propel query constants must be named like PROPEL_QUERY_* in dependency provider.';

    /**
     * @param \PHPMD\AbstractNode $node
     *
     * @return void
     */
    public function apply(AbstractNode $node): void
    {
        if (!$this->isDependencyProvider($node, 'Zed')) {
            return;
        }

        if (!$this->hasPropelQueryAllocationExpression($node)) {
            return;
        }

        $this->applyPropelQueryConstNameRule($node);
    }

    /**
     * @param \PHPMD\Node\MethodNode $methodNode
     *
     * @return void
     */
    protected function applyPropelQueryConstNameRule(MethodNode $methodNode): void
    {
        $constant = $methodNode->getFirstChildOfType('ConstantPostfix');

        if ($this->isPropelQueryConstant($constant->getName())) {
            return;
        }

        $this->addViolationMessage($methodNode);
    }

    /**
     * @param string $constantName
     *
     * @return bool
     */
    protected function isPropelQueryConstant(string $constantName): bool
    {
        $propelQueryConstantPattern = '/^PROPEL_QUERY_.+/';

        if (!preg_match($propelQueryConstantPattern, $constantName)) {
            return false;
        }

        return true;
    }
}
