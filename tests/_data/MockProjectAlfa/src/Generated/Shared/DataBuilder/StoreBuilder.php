<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\StoreTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class StoreBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "name" => "isbn10()",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
    ];

    /**
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function build(): StoreTransfer
    {
        /** @var \Generated\Shared\Transfer\StoreTransfer $transfer */
        $transfer = parent::build();

        return $transfer;
    }

    /**
     * @param string $builder
     *
     * @throws \Exception
     *
     * @return \Spryker\Shared\Testify\AbstractDataBuilder
     */
    protected function locateDataBuilder($builder)
    {
        $builderClass = __NAMESPACE__ . "\\{$builder}Builder";

        if (!class_exists($builderClass)) {
            throw new Exception("Builder '$builderClass' not found");
        }

        return new $builderClass;
    }

    /**
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getTransfer(): StoreTransfer
    {
        return new StoreTransfer;
    }

}
