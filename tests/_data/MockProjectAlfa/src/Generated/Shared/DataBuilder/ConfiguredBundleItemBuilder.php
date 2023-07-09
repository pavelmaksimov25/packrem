<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ConfiguredBundleItemTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ConfiguredBundleItemBuilder extends AbstractDataBuilder
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
        'slot' => 'ConfigurableBundleTemplateSlot',
    ];

    /**
     * @return \Generated\Shared\Transfer\ConfiguredBundleItemTransfer
     */
    public function build(): ConfiguredBundleItemTransfer
    {
        /** @var \Generated\Shared\Transfer\ConfiguredBundleItemTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ConfiguredBundleItemTransfer
     */
    public function getTransfer(): ConfiguredBundleItemTransfer
    {
        return new ConfiguredBundleItemTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withSlot($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('slot', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('slot', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherSlot($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('slot', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('slot', $overrideOrBuilder, true);

        return $this;
    }
}
