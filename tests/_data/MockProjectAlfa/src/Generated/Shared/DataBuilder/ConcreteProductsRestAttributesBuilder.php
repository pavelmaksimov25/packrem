<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ConcreteProductsRestAttributesTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ConcreteProductsRestAttributesBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "sku" => "word()",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'productConfigurationInstance' => 'RestProductConfigurationInstanceAttributes',
    ];

    /**
     * @return \Generated\Shared\Transfer\ConcreteProductsRestAttributesTransfer
     */
    public function build(): ConcreteProductsRestAttributesTransfer
    {
        /** @var \Generated\Shared\Transfer\ConcreteProductsRestAttributesTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ConcreteProductsRestAttributesTransfer
     */
    public function getTransfer(): ConcreteProductsRestAttributesTransfer
    {
        return new ConcreteProductsRestAttributesTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductConfigurationInstance($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productConfigurationInstance', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productConfigurationInstance', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductConfigurationInstance($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productConfigurationInstance', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productConfigurationInstance', $overrideOrBuilder, true);

        return $this;
    }
}
