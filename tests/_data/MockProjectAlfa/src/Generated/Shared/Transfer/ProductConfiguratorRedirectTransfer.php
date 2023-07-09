<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class ProductConfiguratorRedirectTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CONFIGURATOR_REDIRECT_URL = 'configuratorRedirectUrl';

    /**
     * @var string
     */
    public const CONFIGURATOR_REDIRECT_QUERY_PARAMS = 'configuratorRedirectQueryParams';

    /**
     * @var string
     */
    public const IS_SUCCESSFUL = 'isSuccessful';

    /**
     * @var string
     */
    public const MESSAGES = 'messages';

    /**
     * @var string|null
     */
    protected $configuratorRedirectUrl;

    /**
     * @var array
     */
    protected $configuratorRedirectQueryParams = [];

    /**
     * @var bool|null
     */
    protected $isSuccessful;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    protected $messages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'configurator_redirect_url' => 'configuratorRedirectUrl',
        'configuratorRedirectUrl' => 'configuratorRedirectUrl',
        'ConfiguratorRedirectUrl' => 'configuratorRedirectUrl',
        'configurator_redirect_query_params' => 'configuratorRedirectQueryParams',
        'configuratorRedirectQueryParams' => 'configuratorRedirectQueryParams',
        'ConfiguratorRedirectQueryParams' => 'configuratorRedirectQueryParams',
        'is_successful' => 'isSuccessful',
        'isSuccessful' => 'isSuccessful',
        'IsSuccessful' => 'isSuccessful',
        'messages' => 'messages',
        'Messages' => 'messages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CONFIGURATOR_REDIRECT_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'configurator_redirect_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONFIGURATOR_REDIRECT_QUERY_PARAMS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'configurator_redirect_query_params',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_SUCCESSFUL => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_successful',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGES => [
            'type' => 'Generated\Shared\Transfer\MessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'messages',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $configuratorRedirectUrl
     *
     * @return $this
     */
    public function setConfiguratorRedirectUrl($configuratorRedirectUrl)
    {
        $this->configuratorRedirectUrl = $configuratorRedirectUrl;
        $this->modifiedProperties[self::CONFIGURATOR_REDIRECT_URL] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @return string|null
     */
    public function getConfiguratorRedirectUrl()
    {
        return $this->configuratorRedirectUrl;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @param string|null $configuratorRedirectUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConfiguratorRedirectUrlOrFail($configuratorRedirectUrl)
    {
        if ($configuratorRedirectUrl === null) {
            $this->throwNullValueException(static::CONFIGURATOR_REDIRECT_URL);
        }

        return $this->setConfiguratorRedirectUrl($configuratorRedirectUrl);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getConfiguratorRedirectUrlOrFail()
    {
        if ($this->configuratorRedirectUrl === null) {
            $this->throwNullValueException(static::CONFIGURATOR_REDIRECT_URL);
        }

        return $this->configuratorRedirectUrl;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguratorRedirectUrl()
    {
        $this->assertPropertyIsSet(self::CONFIGURATOR_REDIRECT_URL);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @param array|null $configuratorRedirectQueryParams
     *
     * @return $this
     */
    public function setConfiguratorRedirectQueryParams(array $configuratorRedirectQueryParams = null)
    {
        if ($configuratorRedirectQueryParams === null) {
            $configuratorRedirectQueryParams = [];
        }

        $this->configuratorRedirectQueryParams = $configuratorRedirectQueryParams;
        $this->modifiedProperties[self::CONFIGURATOR_REDIRECT_QUERY_PARAMS] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @return array
     */
    public function getConfiguratorRedirectQueryParams()
    {
        return $this->configuratorRedirectQueryParams;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @param mixed $configuratorRedirectQueryParam
     *
     * @return $this
     */
    public function addConfiguratorRedirectQueryParam($configuratorRedirectQueryParam)
    {
        $this->configuratorRedirectQueryParams[] = $configuratorRedirectQueryParam;
        $this->modifiedProperties[self::CONFIGURATOR_REDIRECT_QUERY_PARAMS] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConfiguratorRedirectQueryParams()
    {
        $this->assertPropertyIsSet(self::CONFIGURATOR_REDIRECT_QUERY_PARAMS);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationShoppingList|ProductConfiguration
     *
     * @param bool|null $isSuccessful
     *
     * @return $this
     */
    public function setIsSuccessful($isSuccessful)
    {
        $this->isSuccessful = $isSuccessful;
        $this->modifiedProperties[self::IS_SUCCESSFUL] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationShoppingList|ProductConfiguration
     *
     * @return bool|null
     */
    public function getIsSuccessful()
    {
        return $this->isSuccessful;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationShoppingList|ProductConfiguration
     *
     * @param bool|null $isSuccessful
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsSuccessfulOrFail($isSuccessful)
    {
        if ($isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->setIsSuccessful($isSuccessful);
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationShoppingList|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsSuccessfulOrFail()
    {
        if ($this->isSuccessful === null) {
            $this->throwNullValueException(static::IS_SUCCESSFUL);
        }

        return $this->isSuccessful;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationShoppingList|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsSuccessful()
    {
        $this->assertPropertyIsSet(self::IS_SUCCESSFUL);

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationShoppingList|ProductConfiguration
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[] $messages
     *
     * @return $this
     */
    public function setMessages(ArrayObject $messages)
    {
        $this->messages = $messages;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationShoppingList|ProductConfiguration
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationShoppingList|ProductConfiguration
     *
     * @param \Generated\Shared\Transfer\MessageTransfer $message
     *
     * @return $this
     */
    public function addMessage(MessageTransfer $message)
    {
        $this->messages[] = $message;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module ProductConfiguratorGatewayPage|ProductConfigurationCart|ProductConfigurationShoppingList|ProductConfiguration
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessages()
    {
        $this->assertCollectionPropertyIsSet(self::MESSAGES);

        return $this;
    }

    /**
     * @param array<string, mixed> $data
     * @param bool $ignoreMissingProperty
     *
     * @throws \InvalidArgumentException
     *
     * @return $this
     */
    public function fromArray(array $data, $ignoreMissingProperty = false)
    {
        foreach ($data as $property => $value) {
            $normalizedPropertyName = $this->transferPropertyNameMap[$property] ?? null;

            switch ($normalizedPropertyName) {
                case 'configuratorRedirectUrl':
                case 'configuratorRedirectQueryParams':
                case 'isSuccessful':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'messages':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                default:
                    if (!$ignoreMissingProperty) {
                        throw new \InvalidArgumentException(sprintf('Missing property `%s` in `%s`', $property, static::class));
                    }
            }
        }

        return $this;
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function modifiedToArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayRecursiveCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->modifiedToArrayNotRecursiveNotCamelCased();
        }
    }

    /**
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    public function toArray($isRecursive = true, $camelCasedKeys = false): array
    {
        if ($isRecursive && !$camelCasedKeys) {
            return $this->toArrayRecursiveNotCamelCased();
        }
        if ($isRecursive && $camelCasedKeys) {
            return $this->toArrayRecursiveCamelCased();
        }
        if (!$isRecursive && !$camelCasedKeys) {
            return $this->toArrayNotRecursiveNotCamelCased();
        }
        if (!$isRecursive && $camelCasedKeys) {
            return $this->toArrayNotRecursiveCamelCased();
        }
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollectionModified($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->modifiedToArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @param array<string, mixed>|\ArrayObject<string, mixed> $value
     * @param bool $isRecursive
     * @param bool $camelCasedKeys
     *
     * @return array<string, mixed>
     */
    protected function addValuesToCollection($value, $isRecursive, $camelCasedKeys): array
    {
        $result = [];
        foreach ($value as $elementKey => $arrayElement) {
            if ($arrayElement instanceof AbstractTransfer) {
                $result[$elementKey] = $arrayElement->toArray($isRecursive, $camelCasedKeys);

                continue;
            }
            $result[$elementKey] = $arrayElement;
        }

        return $result;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, true);

                continue;
            }
            switch ($property) {
                case 'configuratorRedirectUrl':
                case 'configuratorRedirectQueryParams':
                case 'isSuccessful':
                    $values[$arrayKey] = $value;

                    break;
                case 'messages':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, true) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            if ($value instanceof AbstractTransfer) {
                $values[$arrayKey] = $value->modifiedToArray(true, false);

                continue;
            }
            switch ($property) {
                case 'configuratorRedirectUrl':
                case 'configuratorRedirectQueryParams':
                case 'isSuccessful':
                    $values[$arrayKey] = $value;

                    break;
                case 'messages':
                    $values[$arrayKey] = $value ? $this->addValuesToCollectionModified($value, true, false) : $value;

                    break;
            }
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveNotCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $this->transferMetadata[$property]['name_underscore'];

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return array<string, mixed>
     */
    public function modifiedToArrayNotRecursiveCamelCased(): array
    {
        $values = [];
        foreach ($this->modifiedProperties as $property => $_) {
            $value = $this->$property;

            $arrayKey = $property;

            $values[$arrayKey] = $value;
        }

        return $values;
    }

    /**
     * @return void
     */
    protected function initCollectionProperties(): void
    {
        $this->messages = $this->messages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'configuratorRedirectUrl' => $this->configuratorRedirectUrl,
            'configuratorRedirectQueryParams' => $this->configuratorRedirectQueryParams,
            'isSuccessful' => $this->isSuccessful,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'configurator_redirect_url' => $this->configuratorRedirectUrl,
            'configurator_redirect_query_params' => $this->configuratorRedirectQueryParams,
            'is_successful' => $this->isSuccessful,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'configurator_redirect_url' => $this->configuratorRedirectUrl instanceof AbstractTransfer ? $this->configuratorRedirectUrl->toArray(true, false) : $this->configuratorRedirectUrl,
            'configurator_redirect_query_params' => $this->configuratorRedirectQueryParams instanceof AbstractTransfer ? $this->configuratorRedirectQueryParams->toArray(true, false) : $this->configuratorRedirectQueryParams,
            'is_successful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, false) : $this->isSuccessful,
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, false) : $this->addValuesToCollection($this->messages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'configuratorRedirectUrl' => $this->configuratorRedirectUrl instanceof AbstractTransfer ? $this->configuratorRedirectUrl->toArray(true, true) : $this->configuratorRedirectUrl,
            'configuratorRedirectQueryParams' => $this->configuratorRedirectQueryParams instanceof AbstractTransfer ? $this->configuratorRedirectQueryParams->toArray(true, true) : $this->configuratorRedirectQueryParams,
            'isSuccessful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, true) : $this->isSuccessful,
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, true) : $this->addValuesToCollection($this->messages, true, true),
        ];
    }
}
