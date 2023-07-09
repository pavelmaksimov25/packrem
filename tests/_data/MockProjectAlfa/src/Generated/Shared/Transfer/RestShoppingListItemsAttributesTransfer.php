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
class RestShoppingListItemsAttributesTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_CONFIGURATION_INSTANCE = 'productConfigurationInstance';

    /**
     * @var string
     */
    public const QUANTITY = 'quantity';

    /**
     * @var string
     */
    public const SKU = 'sku';

    /**
     * @var \Generated\Shared\Transfer\RestShoppingListItemProductConfigurationInstanceAttributesTransfer|null
     */
    protected $productConfigurationInstance;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string|null
     */
    protected $sku;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_configuration_instance' => 'productConfigurationInstance',
        'productConfigurationInstance' => 'productConfigurationInstance',
        'ProductConfigurationInstance' => 'productConfigurationInstance',
        'quantity' => 'quantity',
        'Quantity' => 'quantity',
        'sku' => 'sku',
        'Sku' => 'sku',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_CONFIGURATION_INSTANCE => [
            'type' => 'Generated\Shared\Transfer\RestShoppingListItemProductConfigurationInstanceAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'product_configuration_instance',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUANTITY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'quantity',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SKU => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'sku',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'required',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module ProductConfigurationShoppingListsRestApi
     *
     * @param \Generated\Shared\Transfer\RestShoppingListItemProductConfigurationInstanceAttributesTransfer|null $productConfigurationInstance
     *
     * @return $this
     */
    public function setProductConfigurationInstance(RestShoppingListItemProductConfigurationInstanceAttributesTransfer $productConfigurationInstance = null)
    {
        $this->productConfigurationInstance = $productConfigurationInstance;
        $this->modifiedProperties[self::PRODUCT_CONFIGURATION_INSTANCE] = true;

        return $this;
    }

    /**
     * @module ProductConfigurationShoppingListsRestApi
     *
     * @return \Generated\Shared\Transfer\RestShoppingListItemProductConfigurationInstanceAttributesTransfer|null
     */
    public function getProductConfigurationInstance()
    {
        return $this->productConfigurationInstance;
    }

    /**
     * @module ProductConfigurationShoppingListsRestApi
     *
     * @param \Generated\Shared\Transfer\RestShoppingListItemProductConfigurationInstanceAttributesTransfer $productConfigurationInstance
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductConfigurationInstanceOrFail(RestShoppingListItemProductConfigurationInstanceAttributesTransfer $productConfigurationInstance)
    {
        return $this->setProductConfigurationInstance($productConfigurationInstance);
    }

    /**
     * @module ProductConfigurationShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestShoppingListItemProductConfigurationInstanceAttributesTransfer
     */
    public function getProductConfigurationInstanceOrFail()
    {
        if ($this->productConfigurationInstance === null) {
            $this->throwNullValueException(static::PRODUCT_CONFIGURATION_INSTANCE);
        }

        return $this->productConfigurationInstance;
    }

    /**
     * @module ProductConfigurationShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductConfigurationInstance()
    {
        $this->assertPropertyIsSet(self::PRODUCT_CONFIGURATION_INSTANCE);

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        $this->modifiedProperties[self::QUANTITY] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param int|null $quantity
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuantityOrFail($quantity)
    {
        if ($quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->setQuantity($quantity);
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getQuantityOrFail()
    {
        if ($this->quantity === null) {
            $this->throwNullValueException(static::QUANTITY);
        }

        return $this->quantity;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuantity()
    {
        $this->assertPropertyIsSet(self::QUANTITY);

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string|null $sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
        $this->modifiedProperties[self::SKU] = true;

        return $this;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @return string|null
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @param string|null $sku
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSkuOrFail($sku)
    {
        if ($sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->setSku($sku);
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getSkuOrFail()
    {
        if ($this->sku === null) {
            $this->throwNullValueException(static::SKU);
        }

        return $this->sku;
    }

    /**
     * @module ShoppingListsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSku()
    {
        $this->assertPropertyIsSet(self::SKU);

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
                case 'quantity':
                case 'sku':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'productConfigurationInstance':
                    if (is_array($value)) {
                        $type = $this->transferMetadata[$normalizedPropertyName]['type'];
                        /** @var \Spryker\Shared\Kernel\Transfer\TransferInterface $value */
                        $value = (new $type())->fromArray($value, $ignoreMissingProperty);
                    }

                    if ($value !== null && $this->isPropertyStrict($normalizedPropertyName)) {
                        $this->assertInstanceOfTransfer($normalizedPropertyName, $value);
                    }
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
                case 'quantity':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConfigurationInstance':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

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
                case 'quantity':
                case 'sku':
                    $values[$arrayKey] = $value;

                    break;
                case 'productConfigurationInstance':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

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
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'productConfigurationInstance' => $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quantity' => $this->quantity,
            'sku' => $this->sku,
            'product_configuration_instance' => $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, false) : $this->quantity,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, false) : $this->sku,
            'product_configuration_instance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, false) : $this->productConfigurationInstance,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quantity' => $this->quantity instanceof AbstractTransfer ? $this->quantity->toArray(true, true) : $this->quantity,
            'sku' => $this->sku instanceof AbstractTransfer ? $this->sku->toArray(true, true) : $this->sku,
            'productConfigurationInstance' => $this->productConfigurationInstance instanceof AbstractTransfer ? $this->productConfigurationInstance->toArray(true, true) : $this->productConfigurationInstance,
        ];
    }
}
