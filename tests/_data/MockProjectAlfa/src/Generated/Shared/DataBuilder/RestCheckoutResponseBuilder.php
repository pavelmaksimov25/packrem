<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\RestCheckoutResponseTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RestCheckoutResponseBuilder extends AbstractDataBuilder
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
        'error' => 'RestCheckoutError',
        'checkoutResponse' => 'CheckoutResponse',
        'checkoutData' => 'CheckoutData',
    ];

    /**
     * @return \Generated\Shared\Transfer\RestCheckoutResponseTransfer
     */
    public function build(): RestCheckoutResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\RestCheckoutResponseTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\RestCheckoutResponseTransfer
     */
    public function getTransfer(): RestCheckoutResponseTransfer
    {
        return new RestCheckoutResponseTransfer;
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
    public function withCheckoutResponse($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('checkoutResponse', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('checkoutResponse', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCheckoutResponse($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('checkoutResponse', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('checkoutResponse', $overrideOrBuilder, true);

        return $this;
    }
    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withCheckoutData($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('checkoutData', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('checkoutData', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherCheckoutData($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('checkoutData', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('checkoutData', $overrideOrBuilder, true);

        return $this;
    }
}
