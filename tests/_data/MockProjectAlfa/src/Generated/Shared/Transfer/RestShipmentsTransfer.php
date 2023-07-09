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
class RestShipmentsTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const SHIPPING_ADDRESS = 'shippingAddress';

    /**
     * @var string
     */
    public const ITEMS = 'items';

    /**
     * @var string
     */
    public const ID_SHIPMENT_METHOD = 'idShipmentMethod';

    /**
     * @var string
     */
    public const REQUESTED_DELIVERY_DATE = 'requestedDeliveryDate';

    /**
     * @var \Generated\Shared\Transfer\RestAddressTransfer|null
     */
    protected $shippingAddress;

    /**
     * @var string[]
     */
    protected $items = [];

    /**
     * @var int|null
     */
    protected $idShipmentMethod;

    /**
     * @var string|null
     */
    protected $requestedDeliveryDate;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'shipping_address' => 'shippingAddress',
        'shippingAddress' => 'shippingAddress',
        'ShippingAddress' => 'shippingAddress',
        'items' => 'items',
        'Items' => 'items',
        'id_shipment_method' => 'idShipmentMethod',
        'idShipmentMethod' => 'idShipmentMethod',
        'IdShipmentMethod' => 'idShipmentMethod',
        'requested_delivery_date' => 'requestedDeliveryDate',
        'requestedDeliveryDate' => 'requestedDeliveryDate',
        'RequestedDeliveryDate' => 'requestedDeliveryDate',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::SHIPPING_ADDRESS => [
            'type' => 'Generated\Shared\Transfer\RestAddressTransfer',
            'type_shim' => null,
            'name_underscore' => 'shipping_address',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEMS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'items',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_SHIPMENT_METHOD => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_shipment_method',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::REQUESTED_DELIVERY_DATE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'requested_delivery_date',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'yes',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
    ];

    /**
     * @module CompanyBusinessUnitAddressesRestApi|Country|CustomersRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestAddressTransfer|null $shippingAddress
     *
     * @return $this
     */
    public function setShippingAddress(RestAddressTransfer $shippingAddress = null)
    {
        $this->shippingAddress = $shippingAddress;
        $this->modifiedProperties[self::SHIPPING_ADDRESS] = true;

        return $this;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|Country|CustomersRestApi|ShipmentsRestApi
     *
     * @return \Generated\Shared\Transfer\RestAddressTransfer|null
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|Country|CustomersRestApi|ShipmentsRestApi
     *
     * @param \Generated\Shared\Transfer\RestAddressTransfer $shippingAddress
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setShippingAddressOrFail(RestAddressTransfer $shippingAddress)
    {
        return $this->setShippingAddress($shippingAddress);
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|Country|CustomersRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\RestAddressTransfer
     */
    public function getShippingAddressOrFail()
    {
        if ($this->shippingAddress === null) {
            $this->throwNullValueException(static::SHIPPING_ADDRESS);
        }

        return $this->shippingAddress;
    }

    /**
     * @module CompanyBusinessUnitAddressesRestApi|Country|CustomersRestApi|ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireShippingAddress()
    {
        $this->assertPropertyIsSet(self::SHIPPING_ADDRESS);

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string[]|null $items
     *
     * @return $this
     */
    public function setItems(array $items = null)
    {
        if ($items === null) {
            $items = [];
        }

        $this->items = $items;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return string[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string $item
     *
     * @return $this
     */
    public function addItem($item)
    {
        $this->items[] = $item;
        $this->modifiedProperties[self::ITEMS] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItems()
    {
        $this->assertPropertyIsSet(self::ITEMS);

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param int|null $idShipmentMethod
     *
     * @return $this
     */
    public function setIdShipmentMethod($idShipmentMethod)
    {
        $this->idShipmentMethod = $idShipmentMethod;
        $this->modifiedProperties[self::ID_SHIPMENT_METHOD] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return int|null
     */
    public function getIdShipmentMethod()
    {
        return $this->idShipmentMethod;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param int|null $idShipmentMethod
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdShipmentMethodOrFail($idShipmentMethod)
    {
        if ($idShipmentMethod === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_METHOD);
        }

        return $this->setIdShipmentMethod($idShipmentMethod);
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdShipmentMethodOrFail()
    {
        if ($this->idShipmentMethod === null) {
            $this->throwNullValueException(static::ID_SHIPMENT_METHOD);
        }

        return $this->idShipmentMethod;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdShipmentMethod()
    {
        $this->assertPropertyIsSet(self::ID_SHIPMENT_METHOD);

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string|null $requestedDeliveryDate
     *
     * @return $this
     */
    public function setRequestedDeliveryDate($requestedDeliveryDate)
    {
        $this->requestedDeliveryDate = $requestedDeliveryDate;
        $this->modifiedProperties[self::REQUESTED_DELIVERY_DATE] = true;

        return $this;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @return string|null
     */
    public function getRequestedDeliveryDate()
    {
        return $this->requestedDeliveryDate;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @param string|null $requestedDeliveryDate
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setRequestedDeliveryDateOrFail($requestedDeliveryDate)
    {
        if ($requestedDeliveryDate === null) {
            $this->throwNullValueException(static::REQUESTED_DELIVERY_DATE);
        }

        return $this->setRequestedDeliveryDate($requestedDeliveryDate);
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getRequestedDeliveryDateOrFail()
    {
        if ($this->requestedDeliveryDate === null) {
            $this->throwNullValueException(static::REQUESTED_DELIVERY_DATE);
        }

        return $this->requestedDeliveryDate;
    }

    /**
     * @module ShipmentsRestApi
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireRequestedDeliveryDate()
    {
        $this->assertPropertyIsSet(self::REQUESTED_DELIVERY_DATE);

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
                case 'items':
                case 'idShipmentMethod':
                case 'requestedDeliveryDate':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'shippingAddress':
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
                case 'items':
                case 'idShipmentMethod':
                case 'requestedDeliveryDate':
                    $values[$arrayKey] = $value;

                    break;
                case 'shippingAddress':
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
                case 'items':
                case 'idShipmentMethod':
                case 'requestedDeliveryDate':
                    $values[$arrayKey] = $value;

                    break;
                case 'shippingAddress':
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
            'items' => $this->items,
            'idShipmentMethod' => $this->idShipmentMethod,
            'requestedDeliveryDate' => $this->requestedDeliveryDate,
            'shippingAddress' => $this->shippingAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'items' => $this->items,
            'id_shipment_method' => $this->idShipmentMethod,
            'requested_delivery_date' => $this->requestedDeliveryDate,
            'shipping_address' => $this->shippingAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, false) : $this->items,
            'id_shipment_method' => $this->idShipmentMethod instanceof AbstractTransfer ? $this->idShipmentMethod->toArray(true, false) : $this->idShipmentMethod,
            'requested_delivery_date' => $this->requestedDeliveryDate instanceof AbstractTransfer ? $this->requestedDeliveryDate->toArray(true, false) : $this->requestedDeliveryDate,
            'shipping_address' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, false) : $this->shippingAddress,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'items' => $this->items instanceof AbstractTransfer ? $this->items->toArray(true, true) : $this->items,
            'idShipmentMethod' => $this->idShipmentMethod instanceof AbstractTransfer ? $this->idShipmentMethod->toArray(true, true) : $this->idShipmentMethod,
            'requestedDeliveryDate' => $this->requestedDeliveryDate instanceof AbstractTransfer ? $this->requestedDeliveryDate->toArray(true, true) : $this->requestedDeliveryDate,
            'shippingAddress' => $this->shippingAddress instanceof AbstractTransfer ? $this->shippingAddress->toArray(true, true) : $this->shippingAddress,
        ];
    }
}
