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
class CategoryImageSetCollectionStorageTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const IMAGE_SETS = 'imageSets';

    /**
     * @var string
     */
    public const ID_CATEGORY = 'idCategory';

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\CategoryImageSetStorageTransfer[]
     */
    protected $imageSets;

    /**
     * @var int|null
     */
    protected $idCategory;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'image_sets' => 'imageSets',
        'imageSets' => 'imageSets',
        'ImageSets' => 'imageSets',
        'id_category' => 'idCategory',
        'idCategory' => 'idCategory',
        'IdCategory' => 'idCategory',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::IMAGE_SETS => [
            'type' => 'Generated\Shared\Transfer\CategoryImageSetStorageTransfer',
            'type_shim' => null,
            'name_underscore' => 'image_sets',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ID_CATEGORY => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_category',
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
     * @module CategoryImageStorageWidget|CategoryImageStorage
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\CategoryImageSetStorageTransfer[] $imageSets
     *
     * @return $this
     */
    public function setImageSets(ArrayObject $imageSets)
    {
        $this->imageSets = $imageSets;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module CategoryImageStorageWidget|CategoryImageStorage
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\CategoryImageSetStorageTransfer[]
     */
    public function getImageSets()
    {
        return $this->imageSets;
    }

    /**
     * @module CategoryImageStorageWidget|CategoryImageStorage
     *
     * @param \Generated\Shared\Transfer\CategoryImageSetStorageTransfer $imageSet
     *
     * @return $this
     */
    public function addImageSet(CategoryImageSetStorageTransfer $imageSet)
    {
        $this->imageSets[] = $imageSet;
        $this->modifiedProperties[self::IMAGE_SETS] = true;

        return $this;
    }

    /**
     * @module CategoryImageStorageWidget|CategoryImageStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireImageSets()
    {
        $this->assertCollectionPropertyIsSet(self::IMAGE_SETS);

        return $this;
    }

    /**
     * @module CategoryImageStorage
     *
     * @param int|null $idCategory
     *
     * @return $this
     */
    public function setIdCategory($idCategory)
    {
        $this->idCategory = $idCategory;
        $this->modifiedProperties[self::ID_CATEGORY] = true;

        return $this;
    }

    /**
     * @module CategoryImageStorage
     *
     * @return int|null
     */
    public function getIdCategory()
    {
        return $this->idCategory;
    }

    /**
     * @module CategoryImageStorage
     *
     * @param int|null $idCategory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCategoryOrFail($idCategory)
    {
        if ($idCategory === null) {
            $this->throwNullValueException(static::ID_CATEGORY);
        }

        return $this->setIdCategory($idCategory);
    }

    /**
     * @module CategoryImageStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCategoryOrFail()
    {
        if ($this->idCategory === null) {
            $this->throwNullValueException(static::ID_CATEGORY);
        }

        return $this->idCategory;
    }

    /**
     * @module CategoryImageStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCategory()
    {
        $this->assertPropertyIsSet(self::ID_CATEGORY);

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
                case 'idCategory':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'imageSets':
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
                case 'idCategory':
                    $values[$arrayKey] = $value;

                    break;
                case 'imageSets':
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
                case 'idCategory':
                    $values[$arrayKey] = $value;

                    break;
                case 'imageSets':
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
        $this->imageSets = $this->imageSets ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCategory' => $this->idCategory,
            'imageSets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_category' => $this->idCategory,
            'image_sets' => $this->imageSets,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_category' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, false) : $this->idCategory,
            'image_sets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, false) : $this->addValuesToCollection($this->imageSets, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCategory' => $this->idCategory instanceof AbstractTransfer ? $this->idCategory->toArray(true, true) : $this->idCategory,
            'imageSets' => $this->imageSets instanceof AbstractTransfer ? $this->imageSets->toArray(true, true) : $this->addValuesToCollection($this->imageSets, true, true),
        ];
    }
}
