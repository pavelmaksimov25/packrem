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
class AclEntityParentMetadataTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ENTITY_NAME = 'entityName';

    /**
     * @var string
     */
    public const CONNECTION = 'connection';

    /**
     * @var string|null
     */
    protected $entityName;

    /**
     * @var \Generated\Shared\Transfer\AclEntityParentConnectionMetadataTransfer|null
     */
    protected $connection;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'entity_name' => 'entityName',
        'entityName' => 'entityName',
        'EntityName' => 'entityName',
        'connection' => 'connection',
        'Connection' => 'connection',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ENTITY_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'entity_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CONNECTION => [
            'type' => 'Generated\Shared\Transfer\AclEntityParentConnectionMetadataTransfer',
            'type_shim' => null,
            'name_underscore' => 'connection',
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
     * @module Availability|CategoryImage|Category|CompanyBusinessUnit|DiscountPromotion|Discount|Glossary|MerchantRelationship|Merchant|Oms|Payment|PriceProductMerchantRelationship|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @param string|null $entityName
     *
     * @return $this
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;
        $this->modifiedProperties[self::ENTITY_NAME] = true;

        return $this;
    }

    /**
     * @module Availability|CategoryImage|Category|CompanyBusinessUnit|DiscountPromotion|Discount|Glossary|MerchantRelationship|Merchant|Oms|Payment|PriceProductMerchantRelationship|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @return string|null
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @module Availability|CategoryImage|Category|CompanyBusinessUnit|DiscountPromotion|Discount|Glossary|MerchantRelationship|Merchant|Oms|Payment|PriceProductMerchantRelationship|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @param string|null $entityName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEntityNameOrFail($entityName)
    {
        if ($entityName === null) {
            $this->throwNullValueException(static::ENTITY_NAME);
        }

        return $this->setEntityName($entityName);
    }

    /**
     * @module Availability|CategoryImage|Category|CompanyBusinessUnit|DiscountPromotion|Discount|Glossary|MerchantRelationship|Merchant|Oms|Payment|PriceProductMerchantRelationship|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEntityNameOrFail()
    {
        if ($this->entityName === null) {
            $this->throwNullValueException(static::ENTITY_NAME);
        }

        return $this->entityName;
    }

    /**
     * @module Availability|CategoryImage|Category|CompanyBusinessUnit|DiscountPromotion|Discount|Glossary|MerchantRelationship|Merchant|Oms|Payment|PriceProductMerchantRelationship|PriceProduct|ProductAttribute|ProductCategory|ProductImage|ProductOption|ProductSearch|ProductValidity|Product|Refund|SalesInvoice|SalesOrderThreshold|Sales|Shipment|Stock|Tax
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEntityName()
    {
        $this->assertPropertyIsSet(self::ENTITY_NAME);

        return $this;
    }

    /**
     * @module Availability
     *
     * @param \Generated\Shared\Transfer\AclEntityParentConnectionMetadataTransfer|null $connection
     *
     * @return $this
     */
    public function setConnection(AclEntityParentConnectionMetadataTransfer $connection = null)
    {
        $this->connection = $connection;
        $this->modifiedProperties[self::CONNECTION] = true;

        return $this;
    }

    /**
     * @module Availability
     *
     * @return \Generated\Shared\Transfer\AclEntityParentConnectionMetadataTransfer|null
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @module Availability
     *
     * @param \Generated\Shared\Transfer\AclEntityParentConnectionMetadataTransfer $connection
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setConnectionOrFail(AclEntityParentConnectionMetadataTransfer $connection)
    {
        return $this->setConnection($connection);
    }

    /**
     * @module Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AclEntityParentConnectionMetadataTransfer
     */
    public function getConnectionOrFail()
    {
        if ($this->connection === null) {
            $this->throwNullValueException(static::CONNECTION);
        }

        return $this->connection;
    }

    /**
     * @module Availability
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireConnection()
    {
        $this->assertPropertyIsSet(self::CONNECTION);

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
                case 'entityName':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'connection':
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
                case 'entityName':
                    $values[$arrayKey] = $value;

                    break;
                case 'connection':
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
                case 'entityName':
                    $values[$arrayKey] = $value;

                    break;
                case 'connection':
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
            'entityName' => $this->entityName,
            'connection' => $this->connection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'entity_name' => $this->entityName,
            'connection' => $this->connection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'entity_name' => $this->entityName instanceof AbstractTransfer ? $this->entityName->toArray(true, false) : $this->entityName,
            'connection' => $this->connection instanceof AbstractTransfer ? $this->connection->toArray(true, false) : $this->connection,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'entityName' => $this->entityName instanceof AbstractTransfer ? $this->entityName->toArray(true, true) : $this->entityName,
            'connection' => $this->connection instanceof AbstractTransfer ? $this->connection->toArray(true, true) : $this->connection,
        ];
    }
}
