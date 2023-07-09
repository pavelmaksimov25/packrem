<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Service\UtilEncoding\Encoder;

use Spryker\Service\UtilEncoding\Exception\FormatNotSupportedException;

class Encoder implements EncoderInterface
{
    /**
     * @var array<\Spryker\Service\UtilEncoding\FormatEncoder\FormatEncoderInterface>
     */
    protected $formatEncoders;

    /**
     * @param array<\Spryker\Service\UtilEncoding\FormatEncoder\FormatEncoderInterface> $formatEncoders
     */
    public function __construct(array $formatEncoders)
    {
        $this->formatEncoders = $formatEncoders;
    }

    /**
     * @param array<string, mixed> $data
     * @param string $formatName
     *
     * @throws \Spryker\Service\UtilEncoding\Exception\FormatNotSupportedException
     *
     * @return string|null
     */
    public function encodeToFormat(array $data, string $formatName): ?string
    {
        foreach ($this->formatEncoders as $formatDecoder) {
            if ($formatDecoder->getFormatName() === $formatName) {
                return $formatDecoder->encode($data);
            }
        }

        throw new FormatNotSupportedException();
    }
}
