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
class FlysystemConfigTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const FLYSYSTEM_CONFIG = 'flysystemConfig';

    /**
     * @var string
     */
    public const ADAPTER_CONFIG = 'adapterConfig';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const TYPE = 'type';

    /**
     * @var array
     */
    protected $flysystemConfig = [];

    /**
     * @var array
     */
    protected $adapterConfig = [];

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'flysystem_config' => 'flysystemConfig',
        'flysystemConfig' => 'flysystemConfig',
        'FlysystemConfig' => 'flysystemConfig',
        'adapter_config' => 'adapterConfig',
        'adapterConfig' => 'adapterConfig',
        'AdapterConfig' => 'adapterConfig',
        'name' => 'name',
        'Name' => 'name',
        'type' => 'type',
        'Type' => 'type',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::FLYSYSTEM_CONFIG => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'flysystem_config',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ADAPTER_CONFIG => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'adapter_config',
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
        self::TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'type',
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
     * @module FlysystemFtpFileSystem|FlysystemLocalFileSystem|Flysystem
     *
     * @param array|null $flysystemConfig
     *
     * @return $this
     */
    public function setFlysystemConfig(array $flysystemConfig = null)
    {
        if ($flysystemConfig === null) {
            $flysystemConfig = [];
        }

        $this->flysystemConfig = $flysystemConfig;
        $this->modifiedProperties[self::FLYSYSTEM_CONFIG] = true;

        return $this;
    }

    /**
     * @module FlysystemFtpFileSystem|FlysystemLocalFileSystem|Flysystem
     *
     * @return array
     */
    public function getFlysystemConfig()
    {
        return $this->flysystemConfig;
    }

    /**
     * @module FlysystemFtpFileSystem|FlysystemLocalFileSystem|Flysystem
     *
     * @param mixed $flysystemConfig
     *
     * @return $this
     */
    public function addFlysystemConfig($flysystemConfig)
    {
        $this->flysystemConfig[] = $flysystemConfig;
        $this->modifiedProperties[self::FLYSYSTEM_CONFIG] = true;

        return $this;
    }

    /**
     * @module FlysystemFtpFileSystem|FlysystemLocalFileSystem|Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFlysystemConfig()
    {
        $this->assertPropertyIsSet(self::FLYSYSTEM_CONFIG);

        return $this;
    }

    /**
     * @module FlysystemFtpFileSystem|FlysystemLocalFileSystem|Flysystem
     *
     * @param array|null $adapterConfig
     *
     * @return $this
     */
    public function setAdapterConfig(array $adapterConfig = null)
    {
        if ($adapterConfig === null) {
            $adapterConfig = [];
        }

        $this->adapterConfig = $adapterConfig;
        $this->modifiedProperties[self::ADAPTER_CONFIG] = true;

        return $this;
    }

    /**
     * @module FlysystemFtpFileSystem|FlysystemLocalFileSystem|Flysystem
     *
     * @return array
     */
    public function getAdapterConfig()
    {
        return $this->adapterConfig;
    }

    /**
     * @module FlysystemFtpFileSystem|FlysystemLocalFileSystem|Flysystem
     *
     * @param mixed $adapterConfig
     *
     * @return $this
     */
    public function addAdapterConfig($adapterConfig)
    {
        $this->adapterConfig[] = $adapterConfig;
        $this->modifiedProperties[self::ADAPTER_CONFIG] = true;

        return $this;
    }

    /**
     * @module FlysystemFtpFileSystem|FlysystemLocalFileSystem|Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAdapterConfig()
    {
        $this->assertPropertyIsSet(self::ADAPTER_CONFIG);

        return $this;
    }

    /**
     * @module Flysystem
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
     * @module Flysystem
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module Flysystem
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
     * @module Flysystem
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
     * @module Flysystem
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
     * @module Flysystem
     *
     * @param string|null $type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
        $this->modifiedProperties[self::TYPE] = true;

        return $this;
    }

    /**
     * @module Flysystem
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module Flysystem
     *
     * @param string|null $type
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setTypeOrFail($type)
    {
        if ($type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->setType($type);
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getTypeOrFail()
    {
        if ($this->type === null) {
            $this->throwNullValueException(static::TYPE);
        }

        return $this->type;
    }

    /**
     * @module Flysystem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireType()
    {
        $this->assertPropertyIsSet(self::TYPE);

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
                case 'flysystemConfig':
                case 'adapterConfig':
                case 'name':
                case 'type':
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
                case 'flysystemConfig':
                case 'adapterConfig':
                case 'name':
                case 'type':
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
                case 'flysystemConfig':
                case 'adapterConfig':
                case 'name':
                case 'type':
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
            'flysystemConfig' => $this->flysystemConfig,
            'adapterConfig' => $this->adapterConfig,
            'name' => $this->name,
            'type' => $this->type,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'flysystem_config' => $this->flysystemConfig,
            'adapter_config' => $this->adapterConfig,
            'name' => $this->name,
            'type' => $this->type,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'flysystem_config' => $this->flysystemConfig instanceof AbstractTransfer ? $this->flysystemConfig->toArray(true, false) : $this->flysystemConfig,
            'adapter_config' => $this->adapterConfig instanceof AbstractTransfer ? $this->adapterConfig->toArray(true, false) : $this->adapterConfig,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'flysystemConfig' => $this->flysystemConfig instanceof AbstractTransfer ? $this->flysystemConfig->toArray(true, true) : $this->flysystemConfig,
            'adapterConfig' => $this->adapterConfig instanceof AbstractTransfer ? $this->adapterConfig->toArray(true, true) : $this->adapterConfig,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
        ];
    }
}
