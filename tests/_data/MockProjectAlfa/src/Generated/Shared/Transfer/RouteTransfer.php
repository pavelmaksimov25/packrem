<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class RouteTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ROUTE = 'route';

    /**
     * @var string
     */
    public const PARAMETERS = 'parameters';

    /**
     * @var string
     */
    public const METHOD = 'method';

    /**
     * @var string|null
     */
    protected $route;

    /**
     * @var array
     */
    protected $parameters = [];

    /**
     * @var string|null
     */
    protected $method;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'route' => 'route',
        'Route' => 'route',
        'parameters' => 'parameters',
        'Parameters' => 'parameters',
        'method' => 'method',
        'Method' => 'method',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ROUTE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'route',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PARAMETERS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'parameters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::METHOD => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module PersistentCartSharePage|QuickOrderPageExtension|QuickOrderPage|ResourceSharePage|SharedCartPage|ShoppingListWidget|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string|null $route
     *
     * @return $this
     */
    public function setRoute($route)
    {
        $this->route = $route;
        $this->modifiedProperties[self::ROUTE] = true;

        return $this;
    }

    /**
     * @module PersistentCartSharePage|QuickOrderPageExtension|QuickOrderPage|ResourceSharePage|SharedCartPage|ShoppingListWidget|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @return string|null
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @module PersistentCartSharePage|QuickOrderPageExtension|QuickOrderPage|ResourceSharePage|SharedCartPage|ShoppingListWidget|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string|null $route
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRouteOrFail($route)
    {
        if ($route === null) {
            $this->throwNullValueException(static::ROUTE);
        }

        return $this->setRoute($route);
    }

    /**
     * @module PersistentCartSharePage|QuickOrderPageExtension|QuickOrderPage|ResourceSharePage|SharedCartPage|ShoppingListWidget|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRouteOrFail()
    {
        if ($this->route === null) {
            $this->throwNullValueException(static::ROUTE);
        }

        return $this->route;
    }

    /**
     * @module PersistentCartSharePage|QuickOrderPageExtension|QuickOrderPage|ResourceSharePage|SharedCartPage|ShoppingListWidget|GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRoute()
    {
        $this->assertPropertyIsSet(self::ROUTE);

        return $this;
    }

    /**
     * @module PersistentCartSharePage|QuickOrderPageExtension|QuickOrderPage|ResourceSharePage|ShoppingListWidget
     *
     * @param array|null $parameters
     *
     * @return $this
     */
    public function setParameters(array $parameters = null)
    {
        if ($parameters === null) {
            $parameters = [];
        }

        $this->parameters = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module PersistentCartSharePage|QuickOrderPageExtension|QuickOrderPage|ResourceSharePage|ShoppingListWidget
     *
     * @return array
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @module PersistentCartSharePage|QuickOrderPageExtension|QuickOrderPage|ResourceSharePage|ShoppingListWidget
     *
     * @param mixed $parameters
     *
     * @return $this
     */
    public function addParameters($parameters)
    {
        $this->parameters[] = $parameters;
        $this->modifiedProperties[self::PARAMETERS] = true;

        return $this;
    }

    /**
     * @module PersistentCartSharePage|QuickOrderPageExtension|QuickOrderPage|ResourceSharePage|ShoppingListWidget
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireParameters()
    {
        $this->assertPropertyIsSet(self::PARAMETERS);

        return $this;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string|null $method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
        $this->modifiedProperties[self::METHOD] = true;

        return $this;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @param string|null $method
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMethodOrFail($method)
    {
        if ($method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->setMethod($method);
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getMethodOrFail()
    {
        if ($this->method === null) {
            $this->throwNullValueException(static::METHOD);
        }

        return $this->method;
    }

    /**
     * @module GlueBackendApiApplicationAuthorizationConnector|GlueStorefrontApiApplicationAuthorizationConnector
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMethod()
    {
        $this->assertPropertyIsSet(self::METHOD);

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
                case 'route':
                case 'parameters':
                case 'method':
                    $this->$normalizedPropertyName = $value;
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
                case 'route':
                case 'parameters':
                case 'method':
                    $values[$arrayKey] = $value;

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
                case 'route':
                case 'parameters':
                case 'method':
                    $values[$arrayKey] = $value;

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
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'route' => $this->route,
            'parameters' => $this->parameters,
            'method' => $this->method,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'route' => $this->route,
            'parameters' => $this->parameters,
            'method' => $this->method,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'route' => $this->route instanceof AbstractTransfer ? $this->route->toArray(true, false) : $this->route,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, false) : $this->parameters,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, false) : $this->method,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'route' => $this->route instanceof AbstractTransfer ? $this->route->toArray(true, true) : $this->route,
            'parameters' => $this->parameters instanceof AbstractTransfer ? $this->parameters->toArray(true, true) : $this->parameters,
            'method' => $this->method instanceof AbstractTransfer ? $this->method->toArray(true, true) : $this->method,
        ];
    }
}
