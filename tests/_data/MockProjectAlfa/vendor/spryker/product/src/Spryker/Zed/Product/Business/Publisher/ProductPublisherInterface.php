<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\Product\Business\Publisher;

use Generated\Shared\Transfer\ProductPublisherConfigTransfer;

interface ProductPublisherInterface
{
    /**
     * @param \Generated\Shared\Transfer\ProductPublisherConfigTransfer $productPublisherConfigTransfer
     *
     * @return void
     */
    public function publish(ProductPublisherConfigTransfer $productPublisherConfigTransfer): void;

    /**
     * @param \Generated\Shared\Transfer\ProductPublisherConfigTransfer $productPublisherConfigTransfer
     *
     * @return void
     */
    public function unpublish(ProductPublisherConfigTransfer $productPublisherConfigTransfer): void;
}
