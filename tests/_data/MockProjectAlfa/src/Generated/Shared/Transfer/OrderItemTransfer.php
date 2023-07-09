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
class OrderItemTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_ID = 'productId';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const IMAGE_URL = 'imageUrl';

    /**
     * @var string
     */
    public const PRICE = 'price';

    /**
     * @var string|null
     */
    protected $productId;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $imageUrl;

    /**
     * @var int|null
     */
    protected $price;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_id' => 'productId',
        'productId' => 'productId',
        'ProductId' => 'productId',
        'name' => 'name',
        'Name' => 'name',
        'image_url' => 'imageUrl',
        'imageUrl' => 'imageUrl',
        'ImageUrl' => 'imageUrl',
        'price' => 'price',
        'Price' => 'price',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_ID => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'product_id',
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
        self::IMAGE_URL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'image_url',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRICE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'price',
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
     * @module Oms
     *
     * @param string|null $productId
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
        $this->modifiedProperties[self::PRODUCT_ID] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string|null
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @module Oms
     *
     * @param string|null $productId
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProductIdOrFail($productId)
    {
        if ($productId === null) {
            $this->throwNullValueException(static::PRODUCT_ID);
        }

        return $this->setProductId($productId);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProductIdOrFail()
    {
        if ($this->productId === null) {
            $this->throwNullValueException(static::PRODUCT_ID);
        }

        return $this->productId;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductId()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ID);

        return $this;
    }

    /**
     * @module Oms
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
     * @module Oms
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module Oms
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
     * @module Oms
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
     * @module Oms
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
     * @module Oms
     *
     * @param string|null $imageUrl
     *
     * @return $this
     */
    public function setImageUrl($imageUrl)
    {
        $this->imageUrl = $imageUrl;
        $this->modifiedProperties[self::IMAGE_URL] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return string|null
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * @module Oms
     *
     * @param string|null $imageUrl
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setImageUrlOrFail($imageUrl)
    {
        if ($imageUrl === null) {
            $this->throwNullValueException(static::IMAGE_URL);
        }

        return $this->setImageUrl($imageUrl);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getImageUrlOrFail()
    {
        if ($this->imageUrl === null) {
            $this->throwNullValueException(static::IMAGE_URL);
        }

        return $this->imageUrl;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageUrl()
    {
        $this->assertPropertyIsSet(self::IMAGE_URL);

        return $this;
    }

    /**
     * @module Oms
     *
     * @param int|null $price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->price = $price;
        $this->modifiedProperties[self::PRICE] = true;

        return $this;
    }

    /**
     * @module Oms
     *
     * @return int|null
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @module Oms
     *
     * @param int|null $price
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPriceOrFail($price)
    {
        if ($price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->setPrice($price);
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPriceOrFail()
    {
        if ($this->price === null) {
            $this->throwNullValueException(static::PRICE);
        }

        return $this->price;
    }

    /**
     * @module Oms
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePrice()
    {
        $this->assertPropertyIsSet(self::PRICE);

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
                case 'productId':
                case 'name':
                case 'imageUrl':
                case 'price':
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
                case 'productId':
                case 'name':
                case 'imageUrl':
                case 'price':
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
                case 'productId':
                case 'name':
                case 'imageUrl':
                case 'price':
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
            'productId' => $this->productId,
            'name' => $this->name,
            'imageUrl' => $this->imageUrl,
            'price' => $this->price,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_id' => $this->productId,
            'name' => $this->name,
            'image_url' => $this->imageUrl,
            'price' => $this->price,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_id' => $this->productId instanceof AbstractTransfer ? $this->productId->toArray(true, false) : $this->productId,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'image_url' => $this->imageUrl instanceof AbstractTransfer ? $this->imageUrl->toArray(true, false) : $this->imageUrl,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, false) : $this->price,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productId' => $this->productId instanceof AbstractTransfer ? $this->productId->toArray(true, true) : $this->productId,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'imageUrl' => $this->imageUrl instanceof AbstractTransfer ? $this->imageUrl->toArray(true, true) : $this->imageUrl,
            'price' => $this->price instanceof AbstractTransfer ? $this->price->toArray(true, true) : $this->price,
        ];
    }
}
