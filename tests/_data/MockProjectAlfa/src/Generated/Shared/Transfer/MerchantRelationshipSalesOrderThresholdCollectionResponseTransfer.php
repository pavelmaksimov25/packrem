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
class MerchantRelationshipSalesOrderThresholdCollectionResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ERRORS = 'errors';

    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS = 'merchantRelationshipSalesOrderThresholds';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\ErrorTransfer[]
     */
    protected $errors;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdTransfer[]
     */
    protected $merchantRelationshipSalesOrderThresholds;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'errors' => 'errors',
        'Errors' => 'errors',
        'merchant_relationship_sales_order_thresholds' => 'merchantRelationshipSalesOrderThresholds',
        'merchantRelationshipSalesOrderThresholds' => 'merchantRelationshipSalesOrderThresholds',
        'MerchantRelationshipSalesOrderThresholds' => 'merchantRelationshipSalesOrderThresholds',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ERRORS => [
            'type' => 'Generated\Shared\Transfer\ErrorTransfer',
            'type_shim' => null,
            'name_underscore' => 'errors',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS => [
            'type' => 'Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdTransfer',
            'type_shim' => null,
            'name_underscore' => 'merchant_relationship_sales_order_thresholds',
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
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\ErrorTransfer[] $errors
     *
     * @return $this
     */
    public function setErrors(ArrayObject $errors)
    {
        $this->errors = $errors;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\ErrorTransfer[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\ErrorTransfer $error
     *
     * @return $this
     */
    public function addError(ErrorTransfer $error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireErrors()
    {
        $this->assertCollectionPropertyIsSet(self::ERRORS);

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdTransfer[] $merchantRelationshipSalesOrderThresholds
     *
     * @return $this
     */
    public function setMerchantRelationshipSalesOrderThresholds(ArrayObject $merchantRelationshipSalesOrderThresholds)
    {
        $this->merchantRelationshipSalesOrderThresholds = $merchantRelationshipSalesOrderThresholds;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdTransfer[]
     */
    public function getMerchantRelationshipSalesOrderThresholds()
    {
        return $this->merchantRelationshipSalesOrderThresholds;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\MerchantRelationshipSalesOrderThresholdTransfer $merchantRelationshipSalesOrderThreshold
     *
     * @return $this
     */
    public function addMerchantRelationshipSalesOrderThreshold(MerchantRelationshipSalesOrderThresholdTransfer $merchantRelationshipSalesOrderThreshold)
    {
        $this->merchantRelationshipSalesOrderThresholds[] = $merchantRelationshipSalesOrderThreshold;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantRelationshipSalesOrderThresholds()
    {
        $this->assertCollectionPropertyIsSet(self::MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLDS);

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
                case 'errors':
                case 'merchantRelationshipSalesOrderThresholds':
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
                case 'errors':
                case 'merchantRelationshipSalesOrderThresholds':
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
                case 'errors':
                case 'merchantRelationshipSalesOrderThresholds':
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
        $this->errors = $this->errors ?: new ArrayObject();
        $this->merchantRelationshipSalesOrderThresholds = $this->merchantRelationshipSalesOrderThresholds ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'errors' => $this->errors,
            'merchantRelationshipSalesOrderThresholds' => $this->merchantRelationshipSalesOrderThresholds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'errors' => $this->errors,
            'merchant_relationship_sales_order_thresholds' => $this->merchantRelationshipSalesOrderThresholds,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, false) : $this->addValuesToCollection($this->errors, true, false),
            'merchant_relationship_sales_order_thresholds' => $this->merchantRelationshipSalesOrderThresholds instanceof AbstractTransfer ? $this->merchantRelationshipSalesOrderThresholds->toArray(true, false) : $this->addValuesToCollection($this->merchantRelationshipSalesOrderThresholds, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, true) : $this->addValuesToCollection($this->errors, true, true),
            'merchantRelationshipSalesOrderThresholds' => $this->merchantRelationshipSalesOrderThresholds instanceof AbstractTransfer ? $this->merchantRelationshipSalesOrderThresholds->toArray(true, true) : $this->addValuesToCollection($this->merchantRelationshipSalesOrderThresholds, true, true),
        ];
    }
}
