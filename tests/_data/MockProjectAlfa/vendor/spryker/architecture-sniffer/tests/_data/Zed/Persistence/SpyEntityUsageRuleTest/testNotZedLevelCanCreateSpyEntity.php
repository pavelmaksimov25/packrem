<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spyryker\Yves\Module\Persistence\TestClass;

use Orm\Zed\Persistence\SpyTestEntity;

class TestClass
{
    /**
     * @return void
     */
    protected function createTestSpyEntity(): void
    {
        $spyTestEntity = new SpyTestEntity();
    }
}
