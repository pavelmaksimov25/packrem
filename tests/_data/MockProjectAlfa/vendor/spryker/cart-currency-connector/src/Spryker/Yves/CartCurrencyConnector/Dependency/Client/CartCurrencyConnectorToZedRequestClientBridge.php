<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Yves\CartCurrencyConnector\Dependency\Client;

class CartCurrencyConnectorToZedRequestClientBridge implements CartCurrencyConnectorToZedRequestClientInterface
{
    /**
     * @var \Spryker\Client\ZedRequest\ZedRequestClientInterface
     */
    protected $zedRequestClient;

    /**
     * @param \Spryker\Client\ZedRequest\ZedRequestClientInterface $zedRequestClient
     */
    public function __construct($zedRequestClient)
    {
        $this->zedRequestClient = $zedRequestClient;
    }

    /**
     * @return array<\Generated\Shared\Transfer\MessageTransfer>
     */
    public function getLastResponseErrorMessages()
    {
        return $this->zedRequestClient->getLastResponseErrorMessages();
    }

    /**
     * @return array<\Generated\Shared\Transfer\MessageTransfer>
     */
    public function getResponsesErrorMessages(): array
    {
        return $this->zedRequestClient->getResponsesErrorMessages();
    }
}
