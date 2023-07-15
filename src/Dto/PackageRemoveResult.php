<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

declare(strict_types=1);

namespace SprykerSdk\SprykerFeatureRemover\Dto;

class PackageRemoveResult
{
    private bool $isOk = true;

    /**
     * @var array<string>
     */
    private array $messages = [];

    /**
     * @return bool
     */
    public function isOk(): bool
    {
        return $this->isOk;
    }

    /**
     * @param bool $isOk
     *
     * @return void
     */
    public function setIsOk(bool $isOk): void
    {
        $this->isOk = $isOk;
    }

    /**
     * @return array<string>
     */
    public function getMessages(): array
    {
        return $this->messages;
    }

    /**
     * @param string $message
     *
     * @return void
     */
    public function addMessage(string $message): void
    {
        $this->messages[] = $message;
    }
}
