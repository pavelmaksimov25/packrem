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
class ItemReplaceTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const QUOTE = 'quote';

    /**
     * @var string
     */
    public const ITEM_TO_BE_REPLACED = 'itemToBeReplaced';

    /**
     * @var string
     */
    public const NEW_ITEM = 'newItem';

    /**
     * @var \Generated\Shared\Transfer\QuoteTransfer|null
     */
    protected $quote;

    /**
     * @var \Generated\Shared\Transfer\ItemTransfer|null
     */
    protected $itemToBeReplaced;

    /**
     * @var \Generated\Shared\Transfer\ItemTransfer|null
     */
    protected $newItem;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'quote' => 'quote',
        'Quote' => 'quote',
        'item_to_be_replaced' => 'itemToBeReplaced',
        'itemToBeReplaced' => 'itemToBeReplaced',
        'ItemToBeReplaced' => 'itemToBeReplaced',
        'new_item' => 'newItem',
        'newItem' => 'newItem',
        'NewItem' => 'newItem',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::QUOTE => [
            'type' => 'Generated\Shared\Transfer\QuoteTransfer',
            'type_shim' => null,
            'name_underscore' => 'quote',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ITEM_TO_BE_REPLACED => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'item_to_be_replaced',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::NEW_ITEM => [
            'type' => 'Generated\Shared\Transfer\ItemTransfer',
            'type_shim' => null,
            'name_underscore' => 'new_item',
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
     * @module Cart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer|null $quote
     *
     * @return $this
     */
    public function setQuote(QuoteTransfer $quote = null)
    {
        $this->quote = $quote;
        $this->modifiedProperties[self::QUOTE] = true;

        return $this;
    }

    /**
     * @module Cart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer|null
     */
    public function getQuote()
    {
        return $this->quote;
    }

    /**
     * @module Cart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @param \Generated\Shared\Transfer\QuoteTransfer $quote
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setQuoteOrFail(QuoteTransfer $quote)
    {
        return $this->setQuote($quote);
    }

    /**
     * @module Cart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\QuoteTransfer
     */
    public function getQuoteOrFail()
    {
        if ($this->quote === null) {
            $this->throwNullValueException(static::QUOTE);
        }

        return $this->quote;
    }

    /**
     * @module Cart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireQuote()
    {
        $this->assertPropertyIsSet(self::QUOTE);

        return $this;
    }

    /**
     * @module Cart|PersistentCart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @param \Generated\Shared\Transfer\ItemTransfer|null $itemToBeReplaced
     *
     * @return $this
     */
    public function setItemToBeReplaced(ItemTransfer $itemToBeReplaced = null)
    {
        $this->itemToBeReplaced = $itemToBeReplaced;
        $this->modifiedProperties[self::ITEM_TO_BE_REPLACED] = true;

        return $this;
    }

    /**
     * @module Cart|PersistentCart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @return \Generated\Shared\Transfer\ItemTransfer|null
     */
    public function getItemToBeReplaced()
    {
        return $this->itemToBeReplaced;
    }

    /**
     * @module Cart|PersistentCart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $itemToBeReplaced
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setItemToBeReplacedOrFail(ItemTransfer $itemToBeReplaced)
    {
        return $this->setItemToBeReplaced($itemToBeReplaced);
    }

    /**
     * @module Cart|PersistentCart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    public function getItemToBeReplacedOrFail()
    {
        if ($this->itemToBeReplaced === null) {
            $this->throwNullValueException(static::ITEM_TO_BE_REPLACED);
        }

        return $this->itemToBeReplaced;
    }

    /**
     * @module Cart|PersistentCart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireItemToBeReplaced()
    {
        $this->assertPropertyIsSet(self::ITEM_TO_BE_REPLACED);

        return $this;
    }

    /**
     * @module Cart|PersistentCart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @param \Generated\Shared\Transfer\ItemTransfer|null $newItem
     *
     * @return $this
     */
    public function setNewItem(ItemTransfer $newItem = null)
    {
        $this->newItem = $newItem;
        $this->modifiedProperties[self::NEW_ITEM] = true;

        return $this;
    }

    /**
     * @module Cart|PersistentCart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @return \Generated\Shared\Transfer\ItemTransfer|null
     */
    public function getNewItem()
    {
        return $this->newItem;
    }

    /**
     * @module Cart|PersistentCart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @param \Generated\Shared\Transfer\ItemTransfer $newItem
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setNewItemOrFail(ItemTransfer $newItem)
    {
        return $this->setNewItem($newItem);
    }

    /**
     * @module Cart|PersistentCart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\ItemTransfer
     */
    public function getNewItemOrFail()
    {
        if ($this->newItem === null) {
            $this->throwNullValueException(static::NEW_ITEM);
        }

        return $this->newItem;
    }

    /**
     * @module Cart|PersistentCart|ProductConfigurationCart|ProductConfigurationStorage
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNewItem()
    {
        $this->assertPropertyIsSet(self::NEW_ITEM);

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
                case 'quote':
                case 'itemToBeReplaced':
                case 'newItem':
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
                case 'quote':
                case 'itemToBeReplaced':
                case 'newItem':
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
                case 'quote':
                case 'itemToBeReplaced':
                case 'newItem':
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
            'quote' => $this->quote,
            'itemToBeReplaced' => $this->itemToBeReplaced,
            'newItem' => $this->newItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'quote' => $this->quote,
            'item_to_be_replaced' => $this->itemToBeReplaced,
            'new_item' => $this->newItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, false) : $this->quote,
            'item_to_be_replaced' => $this->itemToBeReplaced instanceof AbstractTransfer ? $this->itemToBeReplaced->toArray(true, false) : $this->itemToBeReplaced,
            'new_item' => $this->newItem instanceof AbstractTransfer ? $this->newItem->toArray(true, false) : $this->newItem,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'quote' => $this->quote instanceof AbstractTransfer ? $this->quote->toArray(true, true) : $this->quote,
            'itemToBeReplaced' => $this->itemToBeReplaced instanceof AbstractTransfer ? $this->itemToBeReplaced->toArray(true, true) : $this->itemToBeReplaced,
            'newItem' => $this->newItem instanceof AbstractTransfer ? $this->newItem->toArray(true, true) : $this->newItem,
        ];
    }
}
