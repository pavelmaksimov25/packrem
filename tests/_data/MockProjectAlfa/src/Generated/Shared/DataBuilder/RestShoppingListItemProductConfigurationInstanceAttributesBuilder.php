<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\RestShoppingListItemProductConfigurationInstanceAttributesTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RestShoppingListItemProductConfigurationInstanceAttributesBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "displayData" => "unique()->sentence()",
        "configuration" => "unique()->sentence()",
        "configuratorKey" => "word()",
        "isComplete" => "boolean(100)",
        "quantity" => "randomNumber(1)",
        "availableQuantity" => "randomNumber(1)",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'price' => 'RestProductConfigurationPriceAttributes',
    ];

    /**
     * @return \Generated\Shared\Transfer\RestShoppingListItemProductConfigurationInstanceAttributesTransfer
     */
    public function build(): RestShoppingListItemProductConfigurationInstanceAttributesTransfer
    {
        /** @var \Generated\Shared\Transfer\RestShoppingListItemProductConfigurationInstanceAttributesTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\RestShoppingListItemProductConfigurationInstanceAttributesTransfer
     */
    public function getTransfer(): RestShoppingListItemProductConfigurationInstanceAttributesTransfer
    {
        return new RestShoppingListItemProductConfigurationInstanceAttributesTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withPrice($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('price', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('price', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherPrice($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('price', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('price', $overrideOrBuilder, true);

        return $this;
    }
}
