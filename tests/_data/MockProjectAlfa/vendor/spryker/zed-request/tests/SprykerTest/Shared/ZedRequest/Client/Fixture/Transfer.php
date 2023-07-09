<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace SprykerTest\Shared\ZedRequest\Client\Fixture;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

class Transfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    protected $key;

    /**
     * @var array
     */
    protected $transferPropertyNameMap = [
        'key' => 'key',
        'Key' => 'key',
    ];

    /**
     * @var array
     */
    protected $transferMetadata = [
        self::KEY => [
            'type' => 'string',
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
        ],
    ];

    /**
     * @param string $key
     *
     * @return $this
     */
    public function setKey(string $key)
    {
        $this->key = $key;
        $this->modifiedProperties[static::KEY] = $key;

        return $this;
    }

    /**
     * @return string
     */
    public function getKey(): string
    {
        return $this->key;
    }

    /**
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(static::KEY);

        return $this;
    }
}
