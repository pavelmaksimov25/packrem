<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\GlueJsonApiConvention\Decoder;

interface DecoderInterface
{
    /**
     * @param string $data
     *
     * @return array<mixed>
     */
    public function decode(string $data): array;
}
