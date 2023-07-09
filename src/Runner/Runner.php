<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\Runner;

class Runner implements RunnerInterface
{
    public function run(string $command): mixed
    {
        return passthru($command) === false;
    }
}
