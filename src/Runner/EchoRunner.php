<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\Runner;

class EchoRunner implements RunnerInterface
{
    /**
     * @inheritDoc
     */
    public function run(string $command): mixed
    {
        echo 'dry-run mode enabled.' . PHP_EOL;
        echo $command . PHP_EOL;

        return true;
    }
}
