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
class ResourceShareResponseTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const RESOURCE_SHARE = 'resourceShare';

    /**
     * @var string
     */
    public const IS_SUCCESSFUL = 'isSuccessful';

    /**
     * @var string
     */
    public const IS_LOGIN_REQUIRED = 'isLoginRequired';

    /**
     * @var string
     */
    public const MESSAGES = 'messages';

    /**
     * @var \Generated\Shared\Transfer\ResourceShareTransfer|null
     */
    protected $resourceShare;

    /**
     * @var bool|null
     */
    protected $isSuccessful;

    /**
     * @var bool|null
     */
    protected $isLoginRequired;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    protected $messages;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'resource_share' => 'resourceShare',
        'resourceShare' => 'resourceShare',
        'ResourceShare' => 'resourceShare',
        'is_successful' => 'isSuccessful',
        'isSuccessful' => 'isSuccessful',
        'IsSuccessful' => 'isSuccessful',
        'is_login_required' => 'isLoginRequired',
        'isLoginRequired' => 'isLoginRequired',
        'IsLoginRequired' => 'isLoginRequired',
        'messages' => 'messages',
        'Messages' => 'messages',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::RESOURCE_SHARE => [
            'type' => 'Generated\Shared\Transfer\ResourceShareTransfer',
            'type_shim' => null,
            'name_underscore' => 'resource_share',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
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
        self::IS_LOGIN_REQUIRED => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_login_required',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::MESSAGES => [
            'type' => 'Generated\Shared\Transfer\MessageTransfer',
            'type_shim' => null,
            'name_underscore' => 'messages',
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
     * @module PersistentCartShareWidget|ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @param \Generated\Shared\Transfer\ResourceShareTransfer|null $resourceShare
     *
     * @return $this
     */
    public function setResourceShare(ResourceShareTransfer $resourceShare = null)
    {
        $this->resourceShare = $resourceShare;
        $this->modifiedProperties[self::RESOURCE_SHARE] = true;

        return $this;
    }

    /**
     * @module PersistentCartShareWidget|ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @return \Generated\Shared\Transfer\ResourceShareTransfer|null
     */
    public function getResourceShare()
    {
        return $this->resourceShare;
    }

    /**
     * @module PersistentCartShareWidget|ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @param \Generated\Shared\Transfer\ResourceShareTransfer $resourceShare
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setResourceShareOrFail(ResourceShareTransfer $resourceShare)
    {
        return $this->setResourceShare($resourceShare);
    }

    /**
     * @module PersistentCartShareWidget|ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ResourceShareTransfer
     */
    public function getResourceShareOrFail()
    {
        if ($this->resourceShare === null) {
            $this->throwNullValueException(static::RESOURCE_SHARE);
        }

        return $this->resourceShare;
    }

    /**
     * @module PersistentCartShareWidget|ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireResourceShare()
    {
        $this->assertPropertyIsSet(self::RESOURCE_SHARE);

        return $this;
    }

    /**
     * @module ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
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
     * @module ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @return bool|null
     */
    public function getIsSuccessful()
    {
        return $this->isSuccessful;
    }

    /**
     * @module ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
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
     * @module ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
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
     * @module ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
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
     * @module ResourceSharePage|PersistentCartShare|SharedCart
     *
     * @param bool|null $isLoginRequired
     *
     * @return $this
     */
    public function setIsLoginRequired($isLoginRequired)
    {
        $this->isLoginRequired = $isLoginRequired;
        $this->modifiedProperties[self::IS_LOGIN_REQUIRED] = true;

        return $this;
    }

    /**
     * @module ResourceSharePage|PersistentCartShare|SharedCart
     *
     * @return bool|null
     */
    public function getIsLoginRequired()
    {
        return $this->isLoginRequired;
    }

    /**
     * @module ResourceSharePage|PersistentCartShare|SharedCart
     *
     * @param bool|null $isLoginRequired
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsLoginRequiredOrFail($isLoginRequired)
    {
        if ($isLoginRequired === null) {
            $this->throwNullValueException(static::IS_LOGIN_REQUIRED);
        }

        return $this->setIsLoginRequired($isLoginRequired);
    }

    /**
     * @module ResourceSharePage|PersistentCartShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsLoginRequiredOrFail()
    {
        if ($this->isLoginRequired === null) {
            $this->throwNullValueException(static::IS_LOGIN_REQUIRED);
        }

        return $this->isLoginRequired;
    }

    /**
     * @module ResourceSharePage|PersistentCartShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsLoginRequired()
    {
        $this->assertPropertyIsSet(self::IS_LOGIN_REQUIRED);

        return $this;
    }

    /**
     * @module ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[] $messages
     *
     * @return $this
     */
    public function setMessages(ArrayObject $messages)
    {
        $this->messages = $messages;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\MessageTransfer[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @module ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @param \Generated\Shared\Transfer\MessageTransfer $message
     *
     * @return $this
     */
    public function addMessage(MessageTransfer $message)
    {
        $this->messages[] = $message;
        $this->modifiedProperties[self::MESSAGES] = true;

        return $this;
    }

    /**
     * @module ResourceSharePage|PersistentCartShare|ResourceShare|SharedCart
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireMessages()
    {
        $this->assertCollectionPropertyIsSet(self::MESSAGES);

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
                case 'isLoginRequired':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'resourceShare':
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
                case 'messages':
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
                case 'isLoginRequired':
                    $values[$arrayKey] = $value;

                    break;
                case 'resourceShare':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, true) : $value;

                    break;
                case 'messages':
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
                case 'isLoginRequired':
                    $values[$arrayKey] = $value;

                    break;
                case 'resourceShare':
                    $values[$arrayKey] = $value instanceof AbstractTransfer ? $value->modifiedToArray(true, false) : $value;

                    break;
                case 'messages':
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
        $this->messages = $this->messages ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful,
            'isLoginRequired' => $this->isLoginRequired,
            'resourceShare' => $this->resourceShare,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful,
            'is_login_required' => $this->isLoginRequired,
            'resource_share' => $this->resourceShare,
            'messages' => $this->messages,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'is_successful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, false) : $this->isSuccessful,
            'is_login_required' => $this->isLoginRequired instanceof AbstractTransfer ? $this->isLoginRequired->toArray(true, false) : $this->isLoginRequired,
            'resource_share' => $this->resourceShare instanceof AbstractTransfer ? $this->resourceShare->toArray(true, false) : $this->resourceShare,
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, false) : $this->addValuesToCollection($this->messages, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'isSuccessful' => $this->isSuccessful instanceof AbstractTransfer ? $this->isSuccessful->toArray(true, true) : $this->isSuccessful,
            'isLoginRequired' => $this->isLoginRequired instanceof AbstractTransfer ? $this->isLoginRequired->toArray(true, true) : $this->isLoginRequired,
            'resourceShare' => $this->resourceShare instanceof AbstractTransfer ? $this->resourceShare->toArray(true, true) : $this->resourceShare,
            'messages' => $this->messages instanceof AbstractTransfer ? $this->messages->toArray(true, true) : $this->addValuesToCollection($this->messages, true, true),
        ];
    }
}
