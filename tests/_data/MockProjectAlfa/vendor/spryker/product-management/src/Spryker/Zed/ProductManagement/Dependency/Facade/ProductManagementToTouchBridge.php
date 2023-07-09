<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductManagement\Dependency\Facade;

class ProductManagementToTouchBridge implements ProductManagementToTouchInterface
{
    /**
     * @var \Spryker\Zed\Touch\Business\TouchFacadeInterface
     */
    protected $touchFacade;

    /**
     * @param \Spryker\Zed\Touch\Business\TouchFacadeInterface $touchFacade
     */
    public function __construct($touchFacade)
    {
        $this->touchFacade = $touchFacade;
    }

    /**
     * @param string $itemType
     * @param int $idItem
     *
     * @return bool
     */
    public function touchActive($itemType, $idItem): bool
    {
        return $this->touchFacade->touchActive($itemType, $idItem);
    }

    /**
     * @param string $itemType
     * @param int $idItem
     *
     * @return bool
     */
    public function touchDeleted($itemType, $idItem): bool
    {
        return $this->touchFacade->touchDeleted($itemType, $idItem);
    }
}
