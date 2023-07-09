<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductPageSearch\Communication\Plugin\Event\Listener;

use Spryker\Zed\Product\Dependency\ProductEvents;

/**
 * @method \Spryker\Zed\ProductPageSearch\Communication\ProductPageSearchCommunicationFactory getFactory()
 * @method \Spryker\Zed\ProductPageSearch\Persistence\ProductPageSearchQueryContainerInterface getQueryContainer()
 * @method \Spryker\Zed\ProductPageSearch\ProductPageSearchConfig getConfig()
 * @method \Spryker\Zed\ProductPageSearch\Business\ProductPageSearchFacadeInterface getFacade()
 */
class ProductConcretePageSearchProductAbstractListener extends AbstractProductConcretePageSearchListener
{
    /**
     * @api
     *
     * @param array<\Generated\Shared\Transfer\EventEntityTransfer> $eventEntityTransfers
     * @param string $eventName
     *
     * @return void
     */
    public function handleBulk(array $eventEntityTransfers, $eventName): void
    {
        $productAbstractIds = $this->getFactory()
            ->getEventBehaviorFacade()
            ->getEventTransferIds($eventEntityTransfers);

        $productIds = $this->getProductIds($productAbstractIds);

        if ($eventName === ProductEvents::ENTITY_SPY_PRODUCT_ABSTRACT_DELETE) {
            $this->unpublish($productIds);
        }

        if ($eventName === ProductEvents::ENTITY_SPY_PRODUCT_ABSTRACT_CREATE || $eventName === ProductEvents::ENTITY_SPY_PRODUCT_ABSTRACT_UPDATE) {
            $this->publish($productIds);
        }
    }

    /**
     * @param array<int> $productAbstractIds
     *
     * @return array<int>
     */
    protected function getProductIds(array $productAbstractIds): array
    {
        $productIds = [];
        foreach ($productAbstractIds as $idProductAbstract) {
            $productIds = array_merge(
                $productIds,
                $this->getFactory()
                    ->getProductFacade()
                    ->findProductConcreteIdsByAbstractProductId($idProductAbstract),
            );
        }

        return $productIds;
    }
}
