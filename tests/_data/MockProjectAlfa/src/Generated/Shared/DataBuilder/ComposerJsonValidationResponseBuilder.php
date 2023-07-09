<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\DataBuilder;

use Exception;
use Generated\Shared\Transfer\ComposerJsonValidationResponseTransfer;
use Spryker\Shared\Testify\AbstractDataBuilder;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ComposerJsonValidationResponseBuilder extends AbstractDataBuilder
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
        'validationMessage' => 'ValidationMessage',
    ];

    /**
     * @return \Generated\Shared\Transfer\ComposerJsonValidationResponseTransfer
     */
    public function build(): ComposerJsonValidationResponseTransfer
    {
        /** @var \Generated\Shared\Transfer\ComposerJsonValidationResponseTransfer $transfer */
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
     * @return \Generated\Shared\Transfer\ComposerJsonValidationResponseTransfer
     */
    public function getTransfer(): ComposerJsonValidationResponseTransfer
    {
        return new ComposerJsonValidationResponseTransfer;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withValidationMessage($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('validationMessage', $overrideOrBuilder, false);

            return $this;
        }
        $this->buildDependency('validationMessage', $overrideOrBuilder);

        return $this;
    }

    /**
     * @param array|\Spryker\Shared\Testify\AbstractDataBuilder $overrideOrBuilder
     *
     * @return $this
     */
    public function withAnotherValidationMessage($overrideOrBuilder = [])
    {
        if ($overrideOrBuilder instanceof AbstractDataBuilder) {
            $this->addDependencyBuilder('validationMessage', $overrideOrBuilder, true);

            return $this;
        }
        $this->buildDependency('validationMessage', $overrideOrBuilder, true);

        return $this;
    }
}
