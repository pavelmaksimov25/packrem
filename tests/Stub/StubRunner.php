<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdkTests\Stub;

use SprykerSdk\SprykerFeatureRemover\Runner\RunnerInterface;

class StubRunner implements RunnerInterface
{
    /**
     * @var string
     */
    public const TEST_VENDOR_DIR = 'test_vendor';

    /**
     * @inheritDoc
     */
    public function run(string $command): mixed
    {
        $command = str_replace('composer remove ', '', $command);
        $directories = explode(' ', $command);
        foreach ($directories as $directory) {
            rmdir(static::TEST_VENDOR_DIR . DIRECTORY_SEPARATOR . $directory);
        }

        return true;
    }
}
