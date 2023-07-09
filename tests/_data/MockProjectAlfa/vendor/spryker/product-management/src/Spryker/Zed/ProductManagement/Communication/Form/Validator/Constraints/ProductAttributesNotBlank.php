<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\ProductManagement\Communication\Form\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

class ProductAttributesNotBlank extends Constraint
{
    /**
     * @var string
     */
    public $message = 'All attribute values should be specified';

    /**
     * @param array<string, mixed> $options
     */
    public function __construct(array $options = [])
    {
        parent::__construct($options);
    }
}
