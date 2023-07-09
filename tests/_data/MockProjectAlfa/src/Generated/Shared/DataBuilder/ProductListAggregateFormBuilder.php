<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ProductListAggregateFormTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductListAggregateFormBuilder extends AbstractDataBuilder
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
        'productList' => 'ProductList',
        'productListCategoryRelation' => 'ProductListCategoryRelation',
        'productListProductConcreteRelation' => 'ProductListProductConcreteRelation',
    ];

    /**
     * @return \Generated\Shared\Transfer\ProductListAggregateFormTransfer
     */
    public function build(): ProductListAggregateFormTransfer
    {
        /** @var \Generated\Shared\Transfer\ProductListAggregateFormTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ProductListAggregateFormTransfer
     */
    public function getTransfer(): ProductListAggregateFormTransfer
    {
        return new ProductListAggregateFormTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductList($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productList', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productList', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductList($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productList', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productList', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductListCategoryRelation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productListCategoryRelation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productListCategoryRelation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductListCategoryRelation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productListCategoryRelation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productListCategoryRelation', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withProductListProductConcreteRelation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productListProductConcreteRelation', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('productListProductConcreteRelation', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherProductListProductConcreteRelation($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('productListProductConcreteRelation', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('productListProductConcreteRelation', $overrideOrBuilder, true);

        return $this;
    }
}
