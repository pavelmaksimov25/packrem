<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\Runner;

interface RunnerInterface
{
    /**
     * Accepts a string and runs it with the defined engine.
     *
     * @param string $command
     *
     * @return mixed
     */
    public function run(string $command): mixed;
}
