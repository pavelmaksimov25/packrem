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
class RestCurrencyTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const CODE = 'code';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const SYMBOL = 'symbol';

    /**
     * @var string|null
     */
    protected $code;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $symbol;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'code' => 'code',
        'Code' => 'code',
        'name' => 'name',
        'Name' => 'name',
        'symbol' => 'symbol',
        'Symbol' => 'symbol',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SYMBOL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'symbol',
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
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @param string|null $code
     *
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;
        $this->modifiedProperties[self::CODE] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @return string|null
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @param string|null $code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCodeOrFail($code)
    {
        if ($code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->setCode($code);
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCodeOrFail()
    {
        if ($this->code === null) {
            $this->throwNullValueException(static::CODE);
        }

        return $this->code;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCode()
    {
        $this->assertPropertyIsSet(self::CODE);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @param string|null $name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
        $this->modifiedProperties[self::NAME] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @param string|null $name
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNameOrFail($name)
    {
        if ($name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->setName($name);
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getNameOrFail()
    {
        if ($this->name === null) {
            $this->throwNullValueException(static::NAME);
        }

        return $this->name;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsPriceProductVolumesRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireName()
    {
        $this->assertPropertyIsSet(self::NAME);

        return $this;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @param string|null $symbol
     *
     * @return $this
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
        $this->modifiedProperties[self::SYMBOL] = true;

        return $this;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @return string|null
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @param string|null $symbol
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSymbolOrFail($symbol)
    {
        if ($symbol === null) {
            $this->throwNullValueException(static::SYMBOL);
        }

        return $this->setSymbol($symbol);
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSymbolOrFail()
    {
        if ($this->symbol === null) {
            $this->throwNullValueException(static::SYMBOL);
        }

        return $this->symbol;
    }

    /**
     * @module CatalogSearchRestApi|ProductConfigurationShoppingListsRestApi|ProductConfigurationsRestApi|ProductPricesRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSymbol()
    {
        $this->assertPropertyIsSet(self::SYMBOL);

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
                case 'code':
                case 'name':
                case 'symbol':
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
                case 'code':
                case 'name':
                case 'symbol':
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
                case 'code':
                case 'name':
                case 'symbol':
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
            'code' => $this->code,
            'name' => $this->name,
            'symbol' => $this->symbol,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'code' => $this->code,
            'name' => $this->name,
            'symbol' => $this->symbol,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, false) : $this->code,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'symbol' => $this->symbol instanceof AbstractTransfer ? $this->symbol->toArray(true, false) : $this->symbol,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'code' => $this->code instanceof AbstractTransfer ? $this->code->toArray(true, true) : $this->code,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'symbol' => $this->symbol instanceof AbstractTransfer ? $this->symbol->toArray(true, true) : $this->symbol,
        ];
    }
}
