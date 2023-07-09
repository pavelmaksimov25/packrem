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
class MerchantRelationshipSalesOrderThresholdTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const MERCHANT_RELATIONSHIP = 'merchantRelationship';

    /**
     * @var string
     */
    public const STORE = 'store';

    /**
     * @var string
     */
    public const CURRENCY = 'currency';

    /**
     * @var string
     */
    public const SALES_ORDER_THRESHOLD_VALUE = 'salesOrderThresholdValue';

    /**
     * @var string
     */
    public const ID_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD = 'idMerchantRelationshipSalesOrderThreshold';

    /**
     * @var string
     */
    public const LOCALIZED_MESSAGES = 'localizedMessages';

    /**
     * @var \Generated\Shared\Transfer\MerchantRelationshipTransfer|null
     */
    protected $merchantRelationship;

    /**
     * @var \Generated\Shared\Transfer\StoreTransfer|null
     */
    protected $store;

    /**
     * @var \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    protected $currency;

    /**
     * @var \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer|null
     */
    protected $salesOrderThresholdValue;

    /**
     * @var int|null
     */
    protected $idMerchantRelationshipSalesOrderThreshold;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SalesOrderThresholdLocalizedMessageTransfer[]
     */
    protected $localizedMessages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'merchant_relationship' => 'merchantRelationship',
        'merchantRelationship' => 'merchantRelationship',
        'MerchantRelationship' => 'merchantRelationship',
        'store' => 'store',
        'Store' => 'store',
        'currency' => 'currency',
        'Currency' => 'currency',
        'sales_order_threshold_value' => 'salesOrderThresholdValue',
        'salesOrderThresholdValue' => 'salesOrderThresholdValue',
        'SalesOrderThresholdValue' => 'salesOrderThresholdValue',
        'id_merchant_relationship_sales_order_threshold' => 'idMerchantRelationshipSalesOrderThreshold',
        'idMerchantRelationshipSalesOrderThreshold' => 'idMerchantRelationshipSalesOrderThreshold',
        'IdMerchantRelationshipSalesOrderThreshold' => 'idMerchantRelationshipSalesOrderThreshold',
        'localized_messages' => 'localizedMessages',
        'localizedMessages' => 'localizedMessages',
        'LocalizedMessages' => 'localizedMessages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
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
        self::STORE => [
            'type' => 'Generated\Shared\Transfer\StoreTransfer',
            'type_shim' => null,
            'name_underscore' => 'store',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY => [
            'type' => 'Generated\Shared\Transfer\CurrencyTransfer',
            'type_shim' => null,
            'name_underscore' => 'currency',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SALES_ORDER_THRESHOLD_VALUE => [
            'type' => 'Generated\Shared\Transfer\SalesOrderThresholdValueTransfer',
            'type_shim' => null,
            'name_underscore' => 'sales_order_threshold_value',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_merchant_relationship_sales_order_threshold',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::LOCALIZED_MESSAGES => [
            'type' => 'Generated\Shared\Transfer\SalesOrderThresholdLocalizedMessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'localized_messages',
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @return \Generated\Shared\Transfer\MerchantRelationshipTransfer|null
     */
    public function getMerchantRelationship()
    {
        return $this->merchantRelationship;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
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
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\StoreTransfer|null $store
     *
     * @return $this
     */
    public function setStore(StoreTransfer $store = null)
    {
        $this->store = $store;
        $this->modifiedProperties[self::STORE] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @return \Generated\Shared\Transfer\StoreTransfer|null
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\StoreTransfer $store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStoreOrFail(StoreTransfer $store)
    {
        return $this->setStore($store);
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\StoreTransfer
     */
    public function getStoreOrFail()
    {
        if ($this->store === null) {
            $this->throwNullValueException(static::STORE);
        }

        return $this->store;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStore()
    {
        $this->assertPropertyIsSet(self::STORE);

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\CurrencyTransfer|null $currency
     *
     * @return $this
     */
    public function setCurrency(CurrencyTransfer $currency = null)
    {
        $this->currency = $currency;
        $this->modifiedProperties[self::CURRENCY] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer|null
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\CurrencyTransfer $currency
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyOrFail(CurrencyTransfer $currency)
    {
        return $this->setCurrency($currency);
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CurrencyTransfer
     */
    public function getCurrencyOrFail()
    {
        if ($this->currency === null) {
            $this->throwNullValueException(static::CURRENCY);
        }

        return $this->currency;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrency()
    {
        $this->assertPropertyIsSet(self::CURRENCY);

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer|null $salesOrderThresholdValue
     *
     * @return $this
     */
    public function setSalesOrderThresholdValue(SalesOrderThresholdValueTransfer $salesOrderThresholdValue = null)
    {
        $this->salesOrderThresholdValue = $salesOrderThresholdValue;
        $this->modifiedProperties[self::SALES_ORDER_THRESHOLD_VALUE] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @return \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer|null
     */
    public function getSalesOrderThresholdValue()
    {
        return $this->salesOrderThresholdValue;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer $salesOrderThresholdValue
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setSalesOrderThresholdValueOrFail(SalesOrderThresholdValueTransfer $salesOrderThresholdValue)
    {
        return $this->setSalesOrderThresholdValue($salesOrderThresholdValue);
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SalesOrderThresholdValueTransfer
     */
    public function getSalesOrderThresholdValueOrFail()
    {
        if ($this->salesOrderThresholdValue === null) {
            $this->throwNullValueException(static::SALES_ORDER_THRESHOLD_VALUE);
        }

        return $this->salesOrderThresholdValue;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdDataImport|MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSalesOrderThresholdValue()
    {
        $this->assertPropertyIsSet(self::SALES_ORDER_THRESHOLD_VALUE);

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @param int|null $idMerchantRelationshipSalesOrderThreshold
     *
     * @return $this
     */
    public function setIdMerchantRelationshipSalesOrderThreshold($idMerchantRelationshipSalesOrderThreshold)
    {
        $this->idMerchantRelationshipSalesOrderThreshold = $idMerchantRelationshipSalesOrderThreshold;
        $this->modifiedProperties[self::ID_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @return int|null
     */
    public function getIdMerchantRelationshipSalesOrderThreshold()
    {
        return $this->idMerchantRelationshipSalesOrderThreshold;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @param int|null $idMerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdMerchantRelationshipSalesOrderThresholdOrFail($idMerchantRelationshipSalesOrderThreshold)
    {
        if ($idMerchantRelationshipSalesOrderThreshold === null) {
            $this->throwNullValueException(static::ID_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD);
        }

        return $this->setIdMerchantRelationshipSalesOrderThreshold($idMerchantRelationshipSalesOrderThreshold);
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdMerchantRelationshipSalesOrderThresholdOrFail()
    {
        if ($this->idMerchantRelationshipSalesOrderThreshold === null) {
            $this->throwNullValueException(static::ID_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD);
        }

        return $this->idMerchantRelationshipSalesOrderThreshold;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdMerchantRelationshipSalesOrderThreshold()
    {
        $this->assertPropertyIsSet(self::ID_MERCHANT_RELATIONSHIP_SALES_ORDER_THRESHOLD);

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SalesOrderThresholdLocalizedMessageTransfer[] $localizedMessages
     *
     * @return $this
     */
    public function setLocalizedMessages(ArrayObject $localizedMessages)
    {
        $this->localizedMessages = $localizedMessages;
        $this->modifiedProperties[self::LOCALIZED_MESSAGES] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SalesOrderThresholdLocalizedMessageTransfer[]
     */
    public function getLocalizedMessages()
    {
        return $this->localizedMessages;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @param \Generated\Shared\Transfer\SalesOrderThresholdLocalizedMessageTransfer $localizedMessage
     *
     * @return $this
     */
    public function addLocalizedMessage(SalesOrderThresholdLocalizedMessageTransfer $localizedMessage)
    {
        $this->localizedMessages[] = $localizedMessage;
        $this->modifiedProperties[self::LOCALIZED_MESSAGES] = true;

        return $this;
    }

    /**
     * @module MerchantRelationshipSalesOrderThresholdGui|MerchantRelationshipSalesOrderThreshold
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireLocalizedMessages()
    {
        $this->assertCollectionPropertyIsSet(self::LOCALIZED_MESSAGES);

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
                case 'idMerchantRelationshipSalesOrderThreshold':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'merchantRelationship':
                case 'store':
                case 'currency':
                case 'salesOrderThresholdValue':
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
                case 'localizedMessages':
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
                case 'idMerchantRelationshipSalesOrderThreshold':
                    $values[$arrayKey] = $value;

                    break;
                case 'merchantRelationship':
                case 'store':
                case 'currency':
                case 'salesOrderThresholdValue':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'localizedMessages':
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
                case 'idMerchantRelationshipSalesOrderThreshold':
                    $values[$arrayKey] = $value;

                    break;
                case 'merchantRelationship':
                case 'store':
                case 'currency':
                case 'salesOrderThresholdValue':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'localizedMessages':
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
        $this->localizedMessages = $this->localizedMessages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idMerchantRelationshipSalesOrderThreshold' => $this->idMerchantRelationshipSalesOrderThreshold,
            'merchantRelationship' => $this->merchantRelationship,
            'store' => $this->store,
            'currency' => $this->currency,
            'salesOrderThresholdValue' => $this->salesOrderThresholdValue,
            'localizedMessages' => $this->localizedMessages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant_relationship_sales_order_threshold' => $this->idMerchantRelationshipSalesOrderThreshold,
            'merchant_relationship' => $this->merchantRelationship,
            'store' => $this->store,
            'currency' => $this->currency,
            'sales_order_threshold_value' => $this->salesOrderThresholdValue,
            'localized_messages' => $this->localizedMessages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_merchant_relationship_sales_order_threshold' => $this->idMerchantRelationshipSalesOrderThreshold instanceof AbstractTransfer ? $this->idMerchantRelationshipSalesOrderThreshold->toArray(true, false) : $this->idMerchantRelationshipSalesOrderThreshold,
            'merchant_relationship' => $this->merchantRelationship instanceof AbstractTransfer ? $this->merchantRelationship->toArray(true, false) : $this->merchantRelationship,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, false) : $this->store,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, false) : $this->currency,
            'sales_order_threshold_value' => $this->salesOrderThresholdValue instanceof AbstractTransfer ? $this->salesOrderThresholdValue->toArray(true, false) : $this->salesOrderThresholdValue,
            'localized_messages' => $this->localizedMessages instanceof AbstractTransfer ? $this->localizedMessages->toArray(true, false) : $this->addValuesToCollection($this->localizedMessages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idMerchantRelationshipSalesOrderThreshold' => $this->idMerchantRelationshipSalesOrderThreshold instanceof AbstractTransfer ? $this->idMerchantRelationshipSalesOrderThreshold->toArray(true, true) : $this->idMerchantRelationshipSalesOrderThreshold,
            'merchantRelationship' => $this->merchantRelationship instanceof AbstractTransfer ? $this->merchantRelationship->toArray(true, true) : $this->merchantRelationship,
            'store' => $this->store instanceof AbstractTransfer ? $this->store->toArray(true, true) : $this->store,
            'currency' => $this->currency instanceof AbstractTransfer ? $this->currency->toArray(true, true) : $this->currency,
            'salesOrderThresholdValue' => $this->salesOrderThresholdValue instanceof AbstractTransfer ? $this->salesOrderThresholdValue->toArray(true, true) : $this->salesOrderThresholdValue,
            'localizedMessages' => $this->localizedMessages instanceof AbstractTransfer ? $this->localizedMessages->toArray(true, true) : $this->addValuesToCollection($this->localizedMessages, true, true),
        ];
    }
}
