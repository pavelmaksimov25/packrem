<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\SalesOrderThresholdValueTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SalesOrderThresholdValueBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "threshold" => "=",
        "fee" => "randomDigit()",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'salesOrderThresholdType' => 'SalesOrderThresholdType',
    ];

    /**
     * @return \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer
     */
    public function build(): SalesOrderThresholdValueTransfer
    {
        /** @var \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer
     */
    public function getTransfer(): SalesOrderThresholdValueTransfer
    {
        return new SalesOrderThresholdValueTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withSalesOrderThresholdType($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('salesOrderThresholdType', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('salesOrderThresholdType', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherSalesOrderThresholdType($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('salesOrderThresholdType', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('salesOrderThresholdType', $overrideOrBuilder, true);

        return $this;
    }
}
