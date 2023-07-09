<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class MerchantRelationshipSalesOrderThresholdCollectionBuilder extends AbstractDataBuilder
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
        'merchantRelationshipSalesOrderThreshold' => 'MerchantRelationshipSalesOrderThreshold',
    ];

    /**
     * @return \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionTransfer
     */
    public function build(): MerchantRelationshipSalesOrderThresholdCollectionTransfer
    {
        /** @var \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionTransfer
     */
    public function getTransfer(): MerchantRelationshipSalesOrderThresholdCollectionTransfer
    {
        return new MerchantRelationshipSalesOrderThresholdCollectionTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withMerchantRelationshipSalesOrderThreshold($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('merchantRelationshipSalesOrderThreshold', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('merchantRelationshipSalesOrderThreshold', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherMerchantRelationshipSalesOrderThreshold($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('merchantRelationshipSalesOrderThreshold', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('merchantRelationshipSalesOrderThreshold', $overrideOrBuilder, true);

        return $this;
    }
}
