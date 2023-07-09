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
class PaymentConfirmationFailedTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ORDER_REFERENCE = 'orderReference';

    /**
     * @var string
     */
    public const ORDER_ITEM_IDS = 'orderItemIds';

    /**
     * @var string
     */
    public const AMOUNT = 'amount';

    /**
     * @var string
     */
    public const CURRENCY_ISO_CODE = 'currencyIsoCode';

    /**
     * @var string
     */
    public const MESSAGE_ATTRIBUTES = 'messageAttributes';

    /**
     * @var string|null
     */
    protected $orderReference;

    /**
     * @var array
     */
    protected $orderItemIds = [];

    /**
     * @var int|null
     */
    protected $amount;

    /**
     * @var string|null
     */
    protected $currencyIsoCode;

    /**
     * @var \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    protected $messageAttributes;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'order_reference' => 'orderReference',
        'orderReference' => 'orderReference',
        'OrderReference' => 'orderReference',
        'order_item_ids' => 'orderItemIds',
        'orderItemIds' => 'orderItemIds',
        'OrderItemIds' => 'orderItemIds',
        'amount' => 'amount',
        'Amount' => 'amount',
        'currency_iso_code' => 'currencyIsoCode',
        'currencyIsoCode' => 'currencyIsoCode',
        'CurrencyIsoCode' => 'currencyIsoCode',
        'message_attributes' => 'messageAttributes',
        'messageAttributes' => 'messageAttributes',
        'MessageAttributes' => 'messageAttributes',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ORDER_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'order_reference',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ORDER_ITEM_IDS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'order_item_ids',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::AMOUNT => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'amount',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CURRENCY_ISO_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'currency_iso_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGE_ATTRIBUTES => [
            'type' => 'Generated\Shared\Transfer\MessageAttributesTransfer',
            'type_shim' => null,
            'name_underscore' => 'message_attributes',
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
     * @module Payment
     *
     * @param string|null $orderReference
     *
     * @return $this
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        $this->modifiedProperties[self::ORDER_REFERENCE] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return string|null
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @module Payment
     *
     * @param string|null $orderReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setOrderReferenceOrFail($orderReference)
    {
        if ($orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->setOrderReference($orderReference);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getOrderReferenceOrFail()
    {
        if ($this->orderReference === null) {
            $this->throwNullValueException(static::ORDER_REFERENCE);
        }

        return $this->orderReference;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderReference()
    {
        $this->assertPropertyIsSet(self::ORDER_REFERENCE);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param array|null $orderItemIds
     *
     * @return $this
     */
    public function setOrderItemIds(array $orderItemIds = null)
    {
        if ($orderItemIds === null) {
            $orderItemIds = [];
        }

        $this->orderItemIds = $orderItemIds;
        $this->modifiedProperties[self::ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return array
     */
    public function getOrderItemIds()
    {
        return $this->orderItemIds;
    }

    /**
     * @module Payment
     *
     * @param mixed $orderItemId
     *
     * @return $this
     */
    public function addOrderItemId($orderItemId)
    {
        $this->orderItemIds[] = $orderItemId;
        $this->modifiedProperties[self::ORDER_ITEM_IDS] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireOrderItemIds()
    {
        $this->assertPropertyIsSet(self::ORDER_ITEM_IDS);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param int|null $amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        $this->modifiedProperties[self::AMOUNT] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return int|null
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @module Payment
     *
     * @param int|null $amount
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAmountOrFail($amount)
    {
        if ($amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->setAmount($amount);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getAmountOrFail()
    {
        if ($this->amount === null) {
            $this->throwNullValueException(static::AMOUNT);
        }

        return $this->amount;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAmount()
    {
        $this->assertPropertyIsSet(self::AMOUNT);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param string|null $currencyIsoCode
     *
     * @return $this
     */
    public function setCurrencyIsoCode($currencyIsoCode)
    {
        $this->currencyIsoCode = $currencyIsoCode;
        $this->modifiedProperties[self::CURRENCY_ISO_CODE] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return string|null
     */
    public function getCurrencyIsoCode()
    {
        return $this->currencyIsoCode;
    }

    /**
     * @module Payment
     *
     * @param string|null $currencyIsoCode
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCurrencyIsoCodeOrFail($currencyIsoCode)
    {
        if ($currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->setCurrencyIsoCode($currencyIsoCode);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCurrencyIsoCodeOrFail()
    {
        if ($this->currencyIsoCode === null) {
            $this->throwNullValueException(static::CURRENCY_ISO_CODE);
        }

        return $this->currencyIsoCode;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCurrencyIsoCode()
    {
        $this->assertPropertyIsSet(self::CURRENCY_ISO_CODE);

        return $this;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer|null $messageAttributes
     *
     * @return $this
     */
    public function setMessageAttributes(MessageAttributesTransfer $messageAttributes = null)
    {
        $this->messageAttributes = $messageAttributes;
        $this->modifiedProperties[self::MESSAGE_ATTRIBUTES] = true;

        return $this;
    }

    /**
     * @module Payment
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer|null
     */
    public function getMessageAttributes()
    {
        return $this->messageAttributes;
    }

    /**
     * @module Payment
     *
     * @param \Generated\Shared\Transfer\MessageAttributesTransfer $messageAttributes
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setMessageAttributesOrFail(MessageAttributesTransfer $messageAttributes)
    {
        return $this->setMessageAttributes($messageAttributes);
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\MessageAttributesTransfer
     */
    public function getMessageAttributesOrFail()
    {
        if ($this->messageAttributes === null) {
            $this->throwNullValueException(static::MESSAGE_ATTRIBUTES);
        }

        return $this->messageAttributes;
    }

    /**
     * @module Payment
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessageAttributes()
    {
        $this->assertPropertyIsSet(self::MESSAGE_ATTRIBUTES);

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
                case 'orderReference':
                case 'orderItemIds':
                case 'amount':
                case 'currencyIsoCode':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'messageAttributes':
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
                case 'orderReference':
                case 'orderItemIds':
                case 'amount':
                case 'currencyIsoCode':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
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
                case 'orderReference':
                case 'orderItemIds':
                case 'amount':
                case 'currencyIsoCode':
                    $values[$arrayKey] = $value;

                    break;
                case 'messageAttributes':
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
            'orderReference' => $this->orderReference,
            'orderItemIds' => $this->orderItemIds,
            'amount' => $this->amount,
            'currencyIsoCode' => $this->currencyIsoCode,
            'messageAttributes' => $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'order_reference' => $this->orderReference,
            'order_item_ids' => $this->orderItemIds,
            'amount' => $this->amount,
            'currency_iso_code' => $this->currencyIsoCode,
            'message_attributes' => $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'order_reference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, false) : $this->orderReference,
            'order_item_ids' => $this->orderItemIds instanceof AbstractTransfer ? $this->orderItemIds->toArray(true, false) : $this->orderItemIds,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, false) : $this->amount,
            'currency_iso_code' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, false) : $this->currencyIsoCode,
            'message_attributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, false) : $this->messageAttributes,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'orderReference' => $this->orderReference instanceof AbstractTransfer ? $this->orderReference->toArray(true, true) : $this->orderReference,
            'orderItemIds' => $this->orderItemIds instanceof AbstractTransfer ? $this->orderItemIds->toArray(true, true) : $this->orderItemIds,
            'amount' => $this->amount instanceof AbstractTransfer ? $this->amount->toArray(true, true) : $this->amount,
            'currencyIsoCode' => $this->currencyIsoCode instanceof AbstractTransfer ? $this->currencyIsoCode->toArray(true, true) : $this->currencyIsoCode,
            'messageAttributes' => $this->messageAttributes instanceof AbstractTransfer ? $this->messageAttributes->toArray(true, true) : $this->messageAttributes,
        ];
    }
}
