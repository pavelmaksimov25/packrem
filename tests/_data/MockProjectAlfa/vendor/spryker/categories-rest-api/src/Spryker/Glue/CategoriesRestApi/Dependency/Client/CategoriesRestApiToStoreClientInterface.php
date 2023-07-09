<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\CategoriesRestApi\Dependency\Client;

use Generated\Shared\Transfer\StoreTransfer;

interface CategoriesRestApiToStoreClientInterface
{
    /**
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getCurrentStore(): StoreTransfer;
}
