<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionResponseTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class MerchantRelationshipSalesOrderThresholdCollectionResponseBuilder extends AbstractDataBuilder
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
        'error' => 'Error',
        'merchantRelationshipSalesOrderThreshold' => 'MerchantRelationshipSalesOrderThreshold',
    ];

    /**
     * @return \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionResponseTransfer
     */
    public function build(): MerchantRelationshipSalesOrderThresholdCollectionResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionResponseTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdCollectionResponseTransfer
     */
    public function getTransfer(): MerchantRelationshipSalesOrderThresholdCollectionResponseTransfer
    {
        return new MerchantRelationshipSalesOrderThresholdCollectionResponseTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withError($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('error', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('error', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherError($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('error', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('error', $overrideOrBuilder, true);

        return $this;
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
