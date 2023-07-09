<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\CountryGui\Communication\Plugin\StoreGui;

use Generated\Shared\Transfer\StoreTransfer;
use Spryker\Zed\Gui\Communication\Table\TableConfiguration;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Spryker\Zed\StoreGuiExtension\Dependency\Plugin\StoreTableExpanderPluginInterface;

/**
 * @method \Spryker\Zed\CountryGui\Communication\CountryGuiCommunicationFactory getFactory()
 * @method \Spryker\Zed\CountryGui\CountryGuiConfig getConfig()
 */
class CountryStoreTableExpanderPlugin extends AbstractPlugin implements StoreTableExpanderPluginInterface
{
    /**
     * {@inheritDoc}
     * - Adds country header to Store table.
     *
     * @api
     *
     * @param \Spryker\Zed\Gui\Communication\Table\TableConfiguration $config
     *
     * @return \Spryker\Zed\Gui\Communication\Table\TableConfiguration
     */
    public function expandConfig(TableConfiguration $config): TableConfiguration
    {
        return $this->getFactory()
            ->createStoreTableExpander()
            ->expandConfig($config);
    }

    /**
     * {@inheritDoc}
     * - Expands collection of store transfers with country names and codes.
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\StoreTransfer> $storeTransfers
     *
     * @return array<\Generated\Shared\Transfer\StoreTransfer>
     */
    public function expandStoreTransfers(array $storeTransfers): array
    {
        return $this->getFactory()
            ->getCountryFacade()
            ->expandStoreTransfersWithCountries($storeTransfers);
    }

    /**
     * {@inheritDoc}
     * - Expands table data rows of store table with countries.
     *
     * @api
     *
     * @param array<mixed> $storeDataItem
     * @param \Generated\Shared\Transfer\StoreTransfer $storeTransfer
     *
     * @return array<mixed>
     */
    public function expandDataItem(array $storeDataItem, StoreTransfer $storeTransfer): array
    {
        return $this->getFactory()
            ->createStoreTableExpander()
            ->expandDataItem($storeDataItem, $storeTransfer);
    }
}
