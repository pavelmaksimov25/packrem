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
class MerchantRelationshipSalesOrderThresholdCriteriaTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD_CONDITIONS = 'merchantRelationshipSalesOrderThresholdConditions';

    /**
     * @var \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdConditionsTransfer|null
     */
    protected $merchantRelationshipSalesOrderThresholdConditions;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'merchant_relationship_sales_order_threshold_conditions' => 'merchantRelationshipSalesOrderThresholdConditions',
        'merchantRelationshipSalesOrderThresholdConditions' => 'merchantRelationshipSalesOrderThresholdConditions',
        'MerchantRelationshipSalesOrderThresholdConditions' => 'merchantRelationshipSalesOrderThresholdConditions',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD_CONDITIONS => [
            'type' => 'Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdConditionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'merchant_relationship_sales_order_threshold_conditions',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdConditionsTransfer|null $merchantRelationshipSalesOrderThresholdConditions
     *
     * @return $this
     */
    public function setMerchantRelationshipSalesOrderThresholdConditions(MerchantRelationshipSalesOrderThresholdConditionsTransfer $merchantRelationshipSalesOrderThresholdConditions = null)
    {
        $this->merchantRelationshipSalesOrderThresholdConditions = $merchantRelationshipSalesOrderThresholdConditions;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD_CONDITIONS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @return \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdConditionsTransfer|null
     */
    public function getMerchantRelationshipSalesOrderThresholdConditions()
    {
        return $this->merchantRelationshipSalesOrderThresholdConditions;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdConditionsTransfer $merchantRelationshipSalesOrderThresholdConditions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantRelationshipSalesOrderThresholdConditionsOrFail(MerchantRelationshipSalesOrderThresholdConditionsTransfer $merchantRelationshipSalesOrderThresholdConditions)
    {
        return $this->setMerchantRelationshipSalesOrderThresholdConditions($merchantRelationshipSalesOrderThresholdConditions);
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdConditionsTransfer
     */
    public function getMerchantRelationshipSalesOrderThresholdConditionsOrFail()
    {
        if ($this->merchantRelationshipSalesOrderThresholdConditions === null) {
            $this->throwNullValueException(static::MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD_CONDITIONS);
        }

        return $this->merchantRelationshipSalesOrderThresholdConditions;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantRelationshipSalesOrderThresholdConditions()
    {
        $this->assertPropertyIsSet(self::MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD_CONDITIONS);

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
                case 'merchantRelationshipSalesOrderThresholdConditions':
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
                case 'merchantRelationshipSalesOrderThresholdConditions':
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
                case 'merchantRelationshipSalesOrderThresholdConditions':
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
            'merchantRelationshipSalesOrderThresholdConditions' => $this->merchantRelationshipSalesOrderThresholdConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'merchant_relationship_sales_order_threshold_conditions' => $this->merchantRelationshipSalesOrderThresholdConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'merchant_relationship_sales_order_threshold_conditions' => $this->merchantRelationshipSalesOrderThresholdConditions instanceof AbstractTransfer ? $this->merchantRelationshipSalesOrderThresholdConditions->toArray(true, false) : $this->merchantRelationshipSalesOrderThresholdConditions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'merchantRelationshipSalesOrderThresholdConditions' => $this->merchantRelationshipSalesOrderThresholdConditions instanceof AbstractTransfer ? $this->merchantRelationshipSalesOrderThresholdConditions->toArray(true, true) : $this->merchantRelationshipSalesOrderThresholdConditions,
        ];
    }
}
