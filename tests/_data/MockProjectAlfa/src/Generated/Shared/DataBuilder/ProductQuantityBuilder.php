<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductQuantityTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductQuantityBuilder extends AbstractDataBuilder
{
    /**
     * @var \Faker\Generator
     */
    protected static $faker;

    /**
     * @var array<string, string>
     */
    protected $defaultRules = [
        "quantityMin" => "=1",
        "quantityInterval" => "=1",
    ];

    /**
     * @var array<string, string>
     */
    protected $dependencies = [
        'product' => 'ProductConcrete',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductQuantityTransfer
     */
    public function build(): ProductQuantityTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductQuantityTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductQuantityTransfer
     */
    public function getTransfer(): ProductQuantityTransfer
    {
        return new ProductQuantityTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProduct($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('product', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('product', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProduct($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('product', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('product', $overrideOrBuilder, true);

        return $this;
    }
}
