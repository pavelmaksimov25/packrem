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
class PublishAndSynchronizeHealthCheckStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_STORAGE = 'idPublishAndSynchronizeHealthCheckStorage';

    /**
     * @var string
     */
    public const FK_PUBLISH_ANDY_SYNCHRONIZE_HEALTH_CHECK = 'fkPublishAndySynchronizeHealthCheck';

    /**
     * @var string
     */
    public const HEALTH_CHECK_KEY = 'healthCheckKey';

    /**
     * @var string
     */
    public const DATA = 'data';

    /**
     * @var int|null
     */
    protected $idPublishAndSynchronizeHealthCheckStorage;

    /**
     * @var int|null
     */
    protected $fkPublishAndySynchronizeHealthCheck;

    /**
     * @var string|null
     */
    protected $healthCheckKey;

    /**
     * @var string|null
     */
    protected $data;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_publish_and_synchronize_health_check_storage' => 'idPublishAndSynchronizeHealthCheckStorage',
        'idPublishAndSynchronizeHealthCheckStorage' => 'idPublishAndSynchronizeHealthCheckStorage',
        'IdPublishAndSynchronizeHealthCheckStorage' => 'idPublishAndSynchronizeHealthCheckStorage',
        'fk_publish_andy_synchronize_health_check' => 'fkPublishAndySynchronizeHealthCheck',
        'fkPublishAndySynchronizeHealthCheck' => 'fkPublishAndySynchronizeHealthCheck',
        'FkPublishAndySynchronizeHealthCheck' => 'fkPublishAndySynchronizeHealthCheck',
        'health_check_key' => 'healthCheckKey',
        'healthCheckKey' => 'healthCheckKey',
        'HealthCheckKey' => 'healthCheckKey',
        'data' => 'data',
        'Data' => 'data',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_STORAGE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_publish_and_synchronize_health_check_storage',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_PUBLISH_ANDY_SYNCHRONIZE_HEALTH_CHECK => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'fk_publish_andy_synchronize_health_check',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::HEALTH_CHECK_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'health_check_key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::DATA => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'data',
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
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @param int|null $idPublishAndSynchronizeHealthCheckStorage
     *
     * @return $this
     */
    public function setIdPublishAndSynchronizeHealthCheckStorage($idPublishAndSynchronizeHealthCheckStorage)
    {
        $this->idPublishAndSynchronizeHealthCheckStorage = $idPublishAndSynchronizeHealthCheckStorage;
        $this->modifiedProperties[self::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_STORAGE] = true;

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @return int|null
     */
    public function getIdPublishAndSynchronizeHealthCheckStorage()
    {
        return $this->idPublishAndSynchronizeHealthCheckStorage;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @param int|null $idPublishAndSynchronizeHealthCheckStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdPublishAndSynchronizeHealthCheckStorageOrFail($idPublishAndSynchronizeHealthCheckStorage)
    {
        if ($idPublishAndSynchronizeHealthCheckStorage === null) {
            $this->throwNullValueException(static::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_STORAGE);
        }

        return $this->setIdPublishAndSynchronizeHealthCheckStorage($idPublishAndSynchronizeHealthCheckStorage);
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdPublishAndSynchronizeHealthCheckStorageOrFail()
    {
        if ($this->idPublishAndSynchronizeHealthCheckStorage === null) {
            $this->throwNullValueException(static::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_STORAGE);
        }

        return $this->idPublishAndSynchronizeHealthCheckStorage;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdPublishAndSynchronizeHealthCheckStorage()
    {
        $this->assertPropertyIsSet(self::ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_STORAGE);

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @param int|null $fkPublishAndySynchronizeHealthCheck
     *
     * @return $this
     */
    public function setFkPublishAndySynchronizeHealthCheck($fkPublishAndySynchronizeHealthCheck)
    {
        $this->fkPublishAndySynchronizeHealthCheck = $fkPublishAndySynchronizeHealthCheck;
        $this->modifiedProperties[self::FK_PUBLISH_ANDY_SYNCHRONIZE_HEALTH_CHECK] = true;

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @return int|null
     */
    public function getFkPublishAndySynchronizeHealthCheck()
    {
        return $this->fkPublishAndySynchronizeHealthCheck;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @param int|null $fkPublishAndySynchronizeHealthCheck
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkPublishAndySynchronizeHealthCheckOrFail($fkPublishAndySynchronizeHealthCheck)
    {
        if ($fkPublishAndySynchronizeHealthCheck === null) {
            $this->throwNullValueException(static::FK_PUBLISH_ANDY_SYNCHRONIZE_HEALTH_CHECK);
        }

        return $this->setFkPublishAndySynchronizeHealthCheck($fkPublishAndySynchronizeHealthCheck);
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getFkPublishAndySynchronizeHealthCheckOrFail()
    {
        if ($this->fkPublishAndySynchronizeHealthCheck === null) {
            $this->throwNullValueException(static::FK_PUBLISH_ANDY_SYNCHRONIZE_HEALTH_CHECK);
        }

        return $this->fkPublishAndySynchronizeHealthCheck;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkPublishAndySynchronizeHealthCheck()
    {
        $this->assertPropertyIsSet(self::FK_PUBLISH_ANDY_SYNCHRONIZE_HEALTH_CHECK);

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @param string|null $healthCheckKey
     *
     * @return $this
     */
    public function setHealthCheckKey($healthCheckKey)
    {
        $this->healthCheckKey = $healthCheckKey;
        $this->modifiedProperties[self::HEALTH_CHECK_KEY] = true;

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @return string|null
     */
    public function getHealthCheckKey()
    {
        return $this->healthCheckKey;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @param string|null $healthCheckKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setHealthCheckKeyOrFail($healthCheckKey)
    {
        if ($healthCheckKey === null) {
            $this->throwNullValueException(static::HEALTH_CHECK_KEY);
        }

        return $this->setHealthCheckKey($healthCheckKey);
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getHealthCheckKeyOrFail()
    {
        if ($this->healthCheckKey === null) {
            $this->throwNullValueException(static::HEALTH_CHECK_KEY);
        }

        return $this->healthCheckKey;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireHealthCheckKey()
    {
        $this->assertPropertyIsSet(self::HEALTH_CHECK_KEY);

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @param string|null $data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->data = $data;
        $this->modifiedProperties[self::DATA] = true;

        return $this;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @return string|null
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @param string|null $data
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setDataOrFail($data)
    {
        if ($data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->setData($data);
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getDataOrFail()
    {
        if ($this->data === null) {
            $this->throwNullValueException(static::DATA);
        }

        return $this->data;
    }

    /**
     * @module PublishAndSynchronizeHealthCheckStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireData()
    {
        $this->assertPropertyIsSet(self::DATA);

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
                case 'idPublishAndSynchronizeHealthCheckStorage':
                case 'fkPublishAndySynchronizeHealthCheck':
                case 'healthCheckKey':
                case 'data':
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
                case 'idPublishAndSynchronizeHealthCheckStorage':
                case 'fkPublishAndySynchronizeHealthCheck':
                case 'healthCheckKey':
                case 'data':
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
                case 'idPublishAndSynchronizeHealthCheckStorage':
                case 'fkPublishAndySynchronizeHealthCheck':
                case 'healthCheckKey':
                case 'data':
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
            'idPublishAndSynchronizeHealthCheckStorage' => $this->idPublishAndSynchronizeHealthCheckStorage,
            'fkPublishAndySynchronizeHealthCheck' => $this->fkPublishAndySynchronizeHealthCheck,
            'healthCheckKey' => $this->healthCheckKey,
            'data' => $this->data,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_publish_and_synchronize_health_check_storage' => $this->idPublishAndSynchronizeHealthCheckStorage,
            'fk_publish_andy_synchronize_health_check' => $this->fkPublishAndySynchronizeHealthCheck,
            'health_check_key' => $this->healthCheckKey,
            'data' => $this->data,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_publish_and_synchronize_health_check_storage' => $this->idPublishAndSynchronizeHealthCheckStorage instanceof AbstractTransfer ? $this->idPublishAndSynchronizeHealthCheckStorage->toArray(true, false) : $this->idPublishAndSynchronizeHealthCheckStorage,
            'fk_publish_andy_synchronize_health_check' => $this->fkPublishAndySynchronizeHealthCheck instanceof AbstractTransfer ? $this->fkPublishAndySynchronizeHealthCheck->toArray(true, false) : $this->fkPublishAndySynchronizeHealthCheck,
            'health_check_key' => $this->healthCheckKey instanceof AbstractTransfer ? $this->healthCheckKey->toArray(true, false) : $this->healthCheckKey,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, false) : $this->data,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idPublishAndSynchronizeHealthCheckStorage' => $this->idPublishAndSynchronizeHealthCheckStorage instanceof AbstractTransfer ? $this->idPublishAndSynchronizeHealthCheckStorage->toArray(true, true) : $this->idPublishAndSynchronizeHealthCheckStorage,
            'fkPublishAndySynchronizeHealthCheck' => $this->fkPublishAndySynchronizeHealthCheck instanceof AbstractTransfer ? $this->fkPublishAndySynchronizeHealthCheck->toArray(true, true) : $this->fkPublishAndySynchronizeHealthCheck,
            'healthCheckKey' => $this->healthCheckKey instanceof AbstractTransfer ? $this->healthCheckKey->toArray(true, true) : $this->healthCheckKey,
            'data' => $this->data instanceof AbstractTransfer ? $this->data->toArray(true, true) : $this->data,
        ];
    }
}
