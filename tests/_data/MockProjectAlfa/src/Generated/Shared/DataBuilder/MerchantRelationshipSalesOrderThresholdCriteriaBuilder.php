<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCriteriaTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class MerchantRelationshipSalesOrderThresholdCriteriaBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'merchantRelationshipSalesOrderThresholdConditions' => 'MerchantRelationshipSalesOrderThresholdConditions',
    ];

    /**
     * @return \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCriteriaTransfer
     */
    public function build(): MerchantRelationshipSalesOrderThresholdCriteriaTransfer
    {
        /** @var \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCriteriaTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCriteriaTransfer
     */
    public function getTransfer(): MerchantRelationshipSalesOrderThresholdCriteriaTransfer
    {
        return new MerchantRelationshipSalesOrderThresholdCriteriaTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withMerchantRelationshipSalesOrderThresholdConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('merchantRelationshipSalesOrderThresholdConditions', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('merchantRelationshipSalesOrderThresholdConditions', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherMerchantRelationshipSalesOrderThresholdConditions($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('merchantRelationshipSalesOrderThresholdConditions', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('merchantRelationshipSalesOrderThresholdConditions', $overrideOrBuilder, true);

        return $this;
    }
}
