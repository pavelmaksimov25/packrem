<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\Evaluator\External\Http;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;

class HttpClientFactory implements HttpClientFactoryInterface
{
    /**
     * @param array<string, mixed> $config
     *
     * @return \GuzzleHttp\ClientInterface
     */
    public function createClient(array $config = []): ClientInterface
    {
        return new Client($config);
    }
}
