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
class StorageProductLabelTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_PRODUCT_LABEL = 'idProductLabel';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const KEY = 'key';

    /**
     * @var string
     */
    public const IS_EXCLUSIVE = 'isExclusive';

    /**
     * @var string
     */
    public const POSITION = 'position';

    /**
     * @var string
     */
    public const FRONT_END_REFERENCE = 'frontEndReference';

    /**
     * @var int|null
     */
    protected $idProductLabel;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $key;

    /**
     * @var bool|null
     */
    protected $isExclusive;

    /**
     * @var int|null
     */
    protected $position;

    /**
     * @var string|null
     */
    protected $frontEndReference;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_product_label' => 'idProductLabel',
        'idProductLabel' => 'idProductLabel',
        'IdProductLabel' => 'idProductLabel',
        'name' => 'name',
        'Name' => 'name',
        'key' => 'key',
        'Key' => 'key',
        'is_exclusive' => 'isExclusive',
        'isExclusive' => 'isExclusive',
        'IsExclusive' => 'isExclusive',
        'position' => 'position',
        'Position' => 'position',
        'front_end_reference' => 'frontEndReference',
        'frontEndReference' => 'frontEndReference',
        'FrontEndReference' => 'frontEndReference',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_PRODUCT_LABEL => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_product_label',
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
        self::KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'key',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IS_EXCLUSIVE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'is_exclusive',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::POSITION => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'position',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FRONT_END_REFERENCE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'front_end_reference',
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
     * @module ProductLabelStorage|ProductLabel
     *
     * @param int|null $idProductLabel
     *
     * @return $this
     */
    public function setIdProductLabel($idProductLabel)
    {
        $this->idProductLabel = $idProductLabel;
        $this->modifiedProperties[self::ID_PRODUCT_LABEL] = true;

        return $this;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @return int|null
     */
    public function getIdProductLabel()
    {
        return $this->idProductLabel;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @param int|null $idProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdProductLabelOrFail($idProductLabel)
    {
        if ($idProductLabel === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL);
        }

        return $this->setIdProductLabel($idProductLabel);
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdProductLabelOrFail()
    {
        if ($this->idProductLabel === null) {
            $this->throwNullValueException(static::ID_PRODUCT_LABEL);
        }

        return $this->idProductLabel;
    }

    /**
     * @module ProductLabelStorage|ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdProductLabel()
    {
        $this->assertPropertyIsSet(self::ID_PRODUCT_LABEL);

        return $this;
    }

    /**
     * @module ProductLabel
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
     * @module ProductLabel
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module ProductLabel
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
     * @module ProductLabel
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
     * @module ProductLabel
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
     * @module ProductLabel
     *
     * @param string|null $key
     *
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
        $this->modifiedProperties[self::KEY] = true;

        return $this;
    }

    /**
     * @module ProductLabel
     *
     * @return string|null
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @module ProductLabel
     *
     * @param string|null $key
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setKeyOrFail($key)
    {
        if ($key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->setKey($key);
    }

    /**
     * @module ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getKeyOrFail()
    {
        if ($this->key === null) {
            $this->throwNullValueException(static::KEY);
        }

        return $this->key;
    }

    /**
     * @module ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireKey()
    {
        $this->assertPropertyIsSet(self::KEY);

        return $this;
    }

    /**
     * @module ProductLabel
     *
     * @param bool|null $isExclusive
     *
     * @return $this
     */
    public function setIsExclusive($isExclusive)
    {
        $this->isExclusive = $isExclusive;
        $this->modifiedProperties[self::IS_EXCLUSIVE] = true;

        return $this;
    }

    /**
     * @module ProductLabel
     *
     * @return bool|null
     */
    public function getIsExclusive()
    {
        return $this->isExclusive;
    }

    /**
     * @module ProductLabel
     *
     * @param bool|null $isExclusive
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIsExclusiveOrFail($isExclusive)
    {
        if ($isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->setIsExclusive($isExclusive);
    }

    /**
     * @module ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIsExclusiveOrFail()
    {
        if ($this->isExclusive === null) {
            $this->throwNullValueException(static::IS_EXCLUSIVE);
        }

        return $this->isExclusive;
    }

    /**
     * @module ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIsExclusive()
    {
        $this->assertPropertyIsSet(self::IS_EXCLUSIVE);

        return $this;
    }

    /**
     * @module ProductLabel
     *
     * @param int|null $position
     *
     * @return $this
     */
    public function setPosition($position)
    {
        $this->position = $position;
        $this->modifiedProperties[self::POSITION] = true;

        return $this;
    }

    /**
     * @module ProductLabel
     *
     * @return int|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @module ProductLabel
     *
     * @param int|null $position
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPositionOrFail($position)
    {
        if ($position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->setPosition($position);
    }

    /**
     * @module ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getPositionOrFail()
    {
        if ($this->position === null) {
            $this->throwNullValueException(static::POSITION);
        }

        return $this->position;
    }

    /**
     * @module ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePosition()
    {
        $this->assertPropertyIsSet(self::POSITION);

        return $this;
    }

    /**
     * @module ProductLabel
     *
     * @param string|null $frontEndReference
     *
     * @return $this
     */
    public function setFrontEndReference($frontEndReference)
    {
        $this->frontEndReference = $frontEndReference;
        $this->modifiedProperties[self::FRONT_END_REFERENCE] = true;

        return $this;
    }

    /**
     * @module ProductLabel
     *
     * @return string|null
     */
    public function getFrontEndReference()
    {
        return $this->frontEndReference;
    }

    /**
     * @module ProductLabel
     *
     * @param string|null $frontEndReference
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFrontEndReferenceOrFail($frontEndReference)
    {
        if ($frontEndReference === null) {
            $this->throwNullValueException(static::FRONT_END_REFERENCE);
        }

        return $this->setFrontEndReference($frontEndReference);
    }

    /**
     * @module ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getFrontEndReferenceOrFail()
    {
        if ($this->frontEndReference === null) {
            $this->throwNullValueException(static::FRONT_END_REFERENCE);
        }

        return $this->frontEndReference;
    }

    /**
     * @module ProductLabel
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFrontEndReference()
    {
        $this->assertPropertyIsSet(self::FRONT_END_REFERENCE);

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
                case 'idProductLabel':
                case 'name':
                case 'key':
                case 'isExclusive':
                case 'position':
                case 'frontEndReference':
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
                case 'idProductLabel':
                case 'name':
                case 'key':
                case 'isExclusive':
                case 'position':
                case 'frontEndReference':
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
                case 'idProductLabel':
                case 'name':
                case 'key':
                case 'isExclusive':
                case 'position':
                case 'frontEndReference':
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
            'idProductLabel' => $this->idProductLabel,
            'name' => $this->name,
            'key' => $this->key,
            'isExclusive' => $this->isExclusive,
            'position' => $this->position,
            'frontEndReference' => $this->frontEndReference,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_product_label' => $this->idProductLabel,
            'name' => $this->name,
            'key' => $this->key,
            'is_exclusive' => $this->isExclusive,
            'position' => $this->position,
            'front_end_reference' => $this->frontEndReference,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_product_label' => $this->idProductLabel instanceof AbstractTransfer ? $this->idProductLabel->toArray(true, false) : $this->idProductLabel,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, false) : $this->key,
            'is_exclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, false) : $this->isExclusive,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, false) : $this->position,
            'front_end_reference' => $this->frontEndReference instanceof AbstractTransfer ? $this->frontEndReference->toArray(true, false) : $this->frontEndReference,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idProductLabel' => $this->idProductLabel instanceof AbstractTransfer ? $this->idProductLabel->toArray(true, true) : $this->idProductLabel,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'key' => $this->key instanceof AbstractTransfer ? $this->key->toArray(true, true) : $this->key,
            'isExclusive' => $this->isExclusive instanceof AbstractTransfer ? $this->isExclusive->toArray(true, true) : $this->isExclusive,
            'position' => $this->position instanceof AbstractTransfer ? $this->position->toArray(true, true) : $this->position,
            'frontEndReference' => $this->frontEndReference instanceof AbstractTransfer ? $this->frontEndReference->toArray(true, true) : $this->frontEndReference,
        ];
    }
}
