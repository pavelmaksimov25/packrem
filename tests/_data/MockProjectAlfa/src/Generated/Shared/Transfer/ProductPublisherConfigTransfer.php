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
class ProductPublisherConfigTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const PRODUCT_IDS = 'productIds';

    /**
     * @var string
     */
    public const PRODUCT_ABSTRACT_IDS = 'productAbstractIds';

    /**
     * @var string
     */
    public const EVENT_NAME = 'eventName';

    /**
     * @var int[]
     */
    protected $productIds = [];

    /**
     * @var int[]
     */
    protected $productAbstractIds = [];

    /**
     * @var string|null
     */
    protected $eventName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'product_ids' => 'productIds',
        'productIds' => 'productIds',
        'ProductIds' => 'productIds',
        'product_abstract_ids' => 'productAbstractIds',
        'productAbstractIds' => 'productAbstractIds',
        'ProductAbstractIds' => 'productAbstractIds',
        'event_name' => 'eventName',
        'eventName' => 'eventName',
        'EventName' => 'eventName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::PRODUCT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'product_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PRODUCT_ABSTRACT_IDS => [
            'type' => 'int[]',
            'type_shim' => null,
            'name_underscore' => 'product_abstract_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::EVENT_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'event_name',
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
     * @module Product
     *
     * @param int[]|null $productIds
     *
     * @return $this
     */
    public function setProductIds(array $productIds = null)
    {
        if ($productIds === null) {
            $productIds = [];
        }

        $this->productIds = $productIds;
        $this->modifiedProperties[self::PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @return int[]
     */
    public function getProductIds()
    {
        return $this->productIds;
    }

    /**
     * @module Product
     *
     * @param int $productId
     *
     * @return $this
     */
    public function addProductId($productId)
    {
        $this->productIds[] = $productId;
        $this->modifiedProperties[self::PRODUCT_IDS] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_IDS);

        return $this;
    }

    /**
     * @module Product
     *
     * @param int[]|null $productAbstractIds
     *
     * @return $this
     */
    public function setProductAbstractIds(array $productAbstractIds = null)
    {
        if ($productAbstractIds === null) {
            $productAbstractIds = [];
        }

        $this->productAbstractIds = $productAbstractIds;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @return int[]
     */
    public function getProductAbstractIds()
    {
        return $this->productAbstractIds;
    }

    /**
     * @module Product
     *
     * @param int $productAbstractId
     *
     * @return $this
     */
    public function addProductAbstractId($productAbstractId)
    {
        $this->productAbstractIds[] = $productAbstractId;
        $this->modifiedProperties[self::PRODUCT_ABSTRACT_IDS] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProductAbstractIds()
    {
        $this->assertPropertyIsSet(self::PRODUCT_ABSTRACT_IDS);

        return $this;
    }

    /**
     * @module Product
     *
     * @param string|null $eventName
     *
     * @return $this
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;
        $this->modifiedProperties[self::EVENT_NAME] = true;

        return $this;
    }

    /**
     * @module Product
     *
     * @return string|null
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * @module Product
     *
     * @param string|null $eventName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEventNameOrFail($eventName)
    {
        if ($eventName === null) {
            $this->throwNullValueException(static::EVENT_NAME);
        }

        return $this->setEventName($eventName);
    }

    /**
     * @module Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEventNameOrFail()
    {
        if ($this->eventName === null) {
            $this->throwNullValueException(static::EVENT_NAME);
        }

        return $this->eventName;
    }

    /**
     * @module Product
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEventName()
    {
        $this->assertPropertyIsSet(self::EVENT_NAME);

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
                case 'productIds':
                case 'productAbstractIds':
                case 'eventName':
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
                case 'productIds':
                case 'productAbstractIds':
                case 'eventName':
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
                case 'productIds':
                case 'productAbstractIds':
                case 'eventName':
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
            'productIds' => $this->productIds,
            'productAbstractIds' => $this->productAbstractIds,
            'eventName' => $this->eventName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'product_ids' => $this->productIds,
            'product_abstract_ids' => $this->productAbstractIds,
            'event_name' => $this->eventName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'product_ids' => $this->productIds instanceof AbstractTransfer ? $this->productIds->toArray(true, false) : $this->productIds,
            'product_abstract_ids' => $this->productAbstractIds instanceof AbstractTransfer ? $this->productAbstractIds->toArray(true, false) : $this->productAbstractIds,
            'event_name' => $this->eventName instanceof AbstractTransfer ? $this->eventName->toArray(true, false) : $this->eventName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'productIds' => $this->productIds instanceof AbstractTransfer ? $this->productIds->toArray(true, true) : $this->productIds,
            'productAbstractIds' => $this->productAbstractIds instanceof AbstractTransfer ? $this->productAbstractIds->toArray(true, true) : $this->productAbstractIds,
            'eventName' => $this->eventName instanceof AbstractTransfer ? $this->eventName->toArray(true, true) : $this->eventName,
        ];
    }
}
