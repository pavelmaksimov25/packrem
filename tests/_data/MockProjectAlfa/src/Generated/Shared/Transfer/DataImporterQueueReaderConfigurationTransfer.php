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
class DataImporterQueueReaderConfigurationTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUEUE_CONSUMER_OPTIONS = 'queueConsumerOptions';

    /**
     * @var string
     */
    public const CHUNK_SIZE = 'chunkSize';

    /**
     * @var string
     */
    public const QUEUE_NAME = 'queueName';

    /**
     * @var array
     */
    protected $queueConsumerOptions = [];

    /**
     * @var int|null
     */
    protected $chunkSize;

    /**
     * @var string|null
     */
    protected $queueName;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'queue_consumer_options' => 'queueConsumerOptions',
        'queueConsumerOptions' => 'queueConsumerOptions',
        'QueueConsumerOptions' => 'queueConsumerOptions',
        'chunk_size' => 'chunkSize',
        'chunkSize' => 'chunkSize',
        'ChunkSize' => 'chunkSize',
        'queue_name' => 'queueName',
        'queueName' => 'queueName',
        'QueueName' => 'queueName',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUEUE_CONSUMER_OPTIONS => [
            'type' => 'array',
            'type_shim' => null,
            'name_underscore' => 'queue_consumer_options',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CHUNK_SIZE => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'chunk_size',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::QUEUE_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'queue_name',
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
     * @module DataImport
     *
     * @param array|null $queueConsumerOptions
     *
     * @return $this
     */
    public function setQueueConsumerOptions(array $queueConsumerOptions = null)
    {
        if ($queueConsumerOptions === null) {
            $queueConsumerOptions = [];
        }

        $this->queueConsumerOptions = $queueConsumerOptions;
        $this->modifiedProperties[self::QUEUE_CONSUMER_OPTIONS] = true;

        return $this;
    }

    /**
     * @module DataImport
     *
     * @return array
     */
    public function getQueueConsumerOptions()
    {
        return $this->queueConsumerOptions;
    }

    /**
     * @module DataImport
     *
     * @param mixed $queueConsumerOptions
     *
     * @return $this
     */
    public function addQueueConsumerOptions($queueConsumerOptions)
    {
        $this->queueConsumerOptions[] = $queueConsumerOptions;
        $this->modifiedProperties[self::QUEUE_CONSUMER_OPTIONS] = true;

        return $this;
    }

    /**
     * @module DataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueueConsumerOptions()
    {
        $this->assertPropertyIsSet(self::QUEUE_CONSUMER_OPTIONS);

        return $this;
    }

    /**
     * @module DataImport
     *
     * @param int|null $chunkSize
     *
     * @return $this
     */
    public function setChunkSize($chunkSize)
    {
        $this->chunkSize = $chunkSize;
        $this->modifiedProperties[self::CHUNK_SIZE] = true;

        return $this;
    }

    /**
     * @module DataImport
     *
     * @return int|null
     */
    public function getChunkSize()
    {
        return $this->chunkSize;
    }

    /**
     * @module DataImport
     *
     * @param int|null $chunkSize
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setChunkSizeOrFail($chunkSize)
    {
        if ($chunkSize === null) {
            $this->throwNullValueException(static::CHUNK_SIZE);
        }

        return $this->setChunkSize($chunkSize);
    }

    /**
     * @module DataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getChunkSizeOrFail()
    {
        if ($this->chunkSize === null) {
            $this->throwNullValueException(static::CHUNK_SIZE);
        }

        return $this->chunkSize;
    }

    /**
     * @module DataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireChunkSize()
    {
        $this->assertPropertyIsSet(self::CHUNK_SIZE);

        return $this;
    }

    /**
     * @module DataImport
     *
     * @param string|null $queueName
     *
     * @return $this
     */
    public function setQueueName($queueName)
    {
        $this->queueName = $queueName;
        $this->modifiedProperties[self::QUEUE_NAME] = true;

        return $this;
    }

    /**
     * @module DataImport
     *
     * @return string|null
     */
    public function getQueueName()
    {
        return $this->queueName;
    }

    /**
     * @module DataImport
     *
     * @param string|null $queueName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQueueNameOrFail($queueName)
    {
        if ($queueName === null) {
            $this->throwNullValueException(static::QUEUE_NAME);
        }

        return $this->setQueueName($queueName);
    }

    /**
     * @module DataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getQueueNameOrFail()
    {
        if ($this->queueName === null) {
            $this->throwNullValueException(static::QUEUE_NAME);
        }

        return $this->queueName;
    }

    /**
     * @module DataImport
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQueueName()
    {
        $this->assertPropertyIsSet(self::QUEUE_NAME);

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
                case 'queueConsumerOptions':
                case 'chunkSize':
                case 'queueName':
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
                case 'queueConsumerOptions':
                case 'chunkSize':
                case 'queueName':
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
                case 'queueConsumerOptions':
                case 'chunkSize':
                case 'queueName':
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
            'queueConsumerOptions' => $this->queueConsumerOptions,
            'chunkSize' => $this->chunkSize,
            'queueName' => $this->queueName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'queue_consumer_options' => $this->queueConsumerOptions,
            'chunk_size' => $this->chunkSize,
            'queue_name' => $this->queueName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'queue_consumer_options' => $this->queueConsumerOptions instanceof AbstractTransfer ? $this->queueConsumerOptions->toArray(true, false) : $this->queueConsumerOptions,
            'chunk_size' => $this->chunkSize instanceof AbstractTransfer ? $this->chunkSize->toArray(true, false) : $this->chunkSize,
            'queue_name' => $this->queueName instanceof AbstractTransfer ? $this->queueName->toArray(true, false) : $this->queueName,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'queueConsumerOptions' => $this->queueConsumerOptions instanceof AbstractTransfer ? $this->queueConsumerOptions->toArray(true, true) : $this->queueConsumerOptions,
            'chunkSize' => $this->chunkSize instanceof AbstractTransfer ? $this->chunkSize->toArray(true, true) : $this->chunkSize,
            'queueName' => $this->queueName instanceof AbstractTransfer ? $this->queueName->toArray(true, true) : $this->queueName,
        ];
    }
}
