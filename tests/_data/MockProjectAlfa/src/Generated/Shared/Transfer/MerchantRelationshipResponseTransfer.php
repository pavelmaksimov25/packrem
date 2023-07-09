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
class MerchantRelationshipResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IS_SUCCESSFUL = 'isSuccessful';

    /**
     * @var string
     */
    public const ERRORS = 'errors';

    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIP_COLLECTION = 'merchantRelationshipCollection';

    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIP = 'merchantRelationship';

    /**
     * @var bool|null
     */
    protected $isSuccessful;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MerchantRelationshipErrorTransfer[]
     */
    protected $errors;

    /**
     * @var \Generated\Shared\Transfer\MerchantRelationshipCollectionTransfer|null
     */
    protected $merchantRelationshipCollection;

    /**
     * @var \Generated\Shared\Transfer\MerchantRelationshipTransfer|null
     */
    protected $merchantRelationship;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'is_successful' => 'isSuccessful',
        'isSuccessful' => 'isSuccessful',
        'IsSuccessful' => 'isSuccessful',
        'errors' => 'errors',
        'Errors' => 'errors',
        'merchant_relationship_collection' => 'merchantRelationshipCollection',
        'merchantRelationshipCollection' => 'merchantRelationshipCollection',
        'MerchantRelationshipCollection' => 'merchantRelationshipCollection',
        'merchant_relationship' => 'merchantRelationship',
        'merchantRelationship' => 'merchantRelationship',
        'MerchantRelationship' => 'merchantRelationship',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::ERRORS => [
            'type' => 'Generated\Shared\Transfer\MerchantRelationshipErrorTransfer',
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
        self::MERCHANT_RELATIONSHIP_COLLECTION => [
            'type' => 'Generated\Shared\Transfer\MerchantRelationshipCollectionTransfer',
            'type_shim' => null,
            'name_underscore' => 'merchant_relationship_collection',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MERCHANT_RELATIONSHIP => [
            'type' => 'Generated\Shared\Transfer\MerchantRelationshipTransfer',
            'type_shim' => null,
            'name_underscore' => 'merchant_relationship',
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
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationship|PriceProductMerchantRelationshipGui
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
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationship|PriceProductMerchantRelationshipGui
     *
     * @return bool|null
     */
    public function getIsSuccessful()
    {
        return $this->isSuccessful;
    }

    /**
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationship|PriceProductMerchantRelationshipGui
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
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationship|PriceProductMerchantRelationshipGui
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
     * @module MerchantRelationshipGui|MerchantRelationshipProductListGui|MerchantRelationship|PriceProductMerchantRelationshipGui
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
     * @module MerchantRelationshipGui|MerchantRelationship
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MerchantRelationshipErrorTransfer[] $errors
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
     * @module MerchantRelationshipGui|MerchantRelationship
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MerchantRelationshipErrorTransfer[]
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @module MerchantRelationshipGui|MerchantRelationship
     *
     * @param \Generated\Shared\Transfer\MerchantRelationshipErrorTransfer $error
     *
     * @return $this
     */
    public function addError(MerchantRelationshipErrorTransfer $error)
    {
        $this->errors[] = $error;
        $this->modifiedProperties[self::ERRORS] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipGui|MerchantRelationship
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
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|PriceProductMerchantRelationshipGui
     *
     * @param \Generated\Shared\Transfer\MerchantRelationshipCollectionTransfer|null $merchantRelationshipCollection
     *
     * @return $this
     */
    public function setMerchantRelationshipCollection(MerchantRelationshipCollectionTransfer $merchantRelationshipCollection = null)
    {
        $this->merchantRelationshipCollection = $merchantRelationshipCollection;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP_COLLECTION] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|PriceProductMerchantRelationshipGui
     *
     * @return \Generated\Shared\Transfer\MerchantRelationshipCollectionTransfer|null
     */
    public function getMerchantRelationshipCollection()
    {
        return $this->merchantRelationshipCollection;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|PriceProductMerchantRelationshipGui
     *
     * @param \Generated\Shared\Transfer\MerchantRelationshipCollectionTransfer $merchantRelationshipCollection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantRelationshipCollectionOrFail(MerchantRelationshipCollectionTransfer $merchantRelationshipCollection)
    {
        return $this->setMerchantRelationshipCollection($merchantRelationshipCollection);
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|PriceProductMerchantRelationshipGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MerchantRelationshipCollectionTransfer
     */
    public function getMerchantRelationshipCollectionOrFail()
    {
        if ($this->merchantRelationshipCollection === null) {
            $this->throwNullValueException(static::MERCHANT_RELATIONSHIP_COLLECTION);
        }

        return $this->merchantRelationshipCollection;
    }

    /**
     * @module MerchantRelationshipProductListGui|MerchantRelationshipProductList|PriceProductMerchantRelationshipGui
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantRelationshipCollection()
    {
        $this->assertPropertyIsSet(self::MERCHANT_RELATIONSHIP_COLLECTION);

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @param \Generated\Shared\Transfer\MerchantRelationshipTransfer|null $merchantRelationship
     *
     * @return $this
     */
    public function setMerchantRelationship(MerchantRelationshipTransfer $merchantRelationship = null)
    {
        $this->merchantRelationship = $merchantRelationship;
        $this->modifiedProperties[self::MERCHANT_RELATIONSHIP] = true;

        return $this;
    }

    /**
     * @module MerchantRelationship
     *
     * @return \Generated\Shared\Transfer\MerchantRelationshipTransfer|null
     */
    public function getMerchantRelationship()
    {
        return $this->merchantRelationship;
    }

    /**
     * @module MerchantRelationship
     *
     * @param \Generated\Shared\Transfer\MerchantRelationshipTransfer $merchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMerchantRelationshipOrFail(MerchantRelationshipTransfer $merchantRelationship)
    {
        return $this->setMerchantRelationship($merchantRelationship);
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MerchantRelationshipTransfer
     */
    public function getMerchantRelationshipOrFail()
    {
        if ($this->merchantRelationship === null) {
            $this->throwNullValueException(static::MERCHANT_RELATIONSHIP);
        }

        return $this->merchantRelationship;
    }

    /**
     * @module MerchantRelationship
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMerchantRelationship()
    {
        $this->assertPropertyIsSet(self::MERCHANT_RELATIONSHIP);

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
                case 'isSuccessful':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'merchantRelationshipCollection':
                case 'merchantRelationship':
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
                case 'errors':
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
                case 'isSuccessful':
                    $values[$arrayKey] = $value;

                    break;
                case 'merchantRelationshipCollection':
                case 'merchantRelationship':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'errors':
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
                case 'isSuccessful':
                    $values[$arrayKey] = $value;

                    break;
                case 'merchantRelationshipCollection':
                case 'merchantRelationship':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'errors':
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
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful,
            'merchantRelationshipCollection' => $this->merchantRelationshipCollection,
            'merchantRelationship' => $this->merchantRelationship,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful,
            'merchant_relationship_collection' => $this->merchantRelationshipCollection,
            'merchant_relationship' => $this->merchantRelationship,
            'errors' => $this->errors,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, false) : $this->isSuccessful,
            'merchant_relationship_collection' => $this->merchantRelationshipCollection instanceof AbstractTransfer ? $this->merchantRelationshipCollection->toArray(true, false) : $this->merchantRelationshipCollection,
            'merchant_relationship' => $this->merchantRelationship instanceof AbstractTransfer ? $this->merchantRelationship->toArray(true, false) : $this->merchantRelationship,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, false) : $this->addValuesToCollection($this->errors, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, true) : $this->isSuccessful,
            'merchantRelationshipCollection' => $this->merchantRelationshipCollection instanceof AbstractTransfer ? $this->merchantRelationshipCollection->toArray(true, true) : $this->merchantRelationshipCollection,
            'merchantRelationship' => $this->merchantRelationship instanceof AbstractTransfer ? $this->merchantRelationship->toArray(true, true) : $this->merchantRelationship,
            'errors' => $this->errors instanceof AbstractTransfer ? $this->errors->toArray(true, true) : $this->addValuesToCollection($this->errors, true, true),
        ];
    }
}
