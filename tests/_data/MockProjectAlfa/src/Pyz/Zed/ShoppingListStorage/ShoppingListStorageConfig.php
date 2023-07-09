<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

namespace Pyz\Zed\ShoppingListStorage;

use Pyz\Zed\Synchronization\SynchronizationConfig;
use Spryker\Shared\Publisher\PublisherConfig;
use Spryker\Zed\ShoppingListStorage\ShoppingListStorageConfig as SprykerShoppingListStorageConfig;

class ShoppingListStorageConfig extends SprykerShoppingListStorageConfig
{
    /**
     * @return string|null
     */
    public function getShoppingListSynchronizationPoolName(): ?string
    {
        return SynchronizationConfig::PYZ_DEFAULT_SYNCHRONIZATION_POOL_NAME;
    }

    /**
     * @return string|null
     */
    public function getEventQueueName(): ?string
    {
        return PublisherConfig::PUBLISH_QUEUE;
    }
}
