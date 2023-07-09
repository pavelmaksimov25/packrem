<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyStateMachineItemStateHistoryEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_STATE_MACHINE_ITEM_STATE_HISTORY = 'idStateMachineItemStateHistory';

    /**
     * @var string
     */
    public const FK_STATE_MACHINE_ITEM_STATE = 'fkStateMachineItemState';

    /**
     * @var string
     */
    public const IDENTIFIER = 'identifier';

    /**
     * @var string
     */
    public const STATE = 'state';

    /**
     * @var integer|null
     */
    protected $idStateMachineItemStateHistory;

    /**
     * @var integer|null
     */
    protected $fkStateMachineItemState;

    /**
     * @var integer|null
     */
    protected $identifier;

    /**
     * @var \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer|null
     */
    protected $state;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_state_machine_item_state_history' => 'idStateMachineItemStateHistory',
        'idStateMachineItemStateHistory' => 'idStateMachineItemStateHistory',
        'IdStateMachineItemStateHistory' => 'idStateMachineItemStateHistory',
        'fk_state_machine_item_state' => 'fkStateMachineItemState',
        'fkStateMachineItemState' => 'fkStateMachineItemState',
        'FkStateMachineItemState' => 'fkStateMachineItemState',
        'identifier' => 'identifier',
        'Identifier' => 'identifier',
        'state' => 'state',
        'State' => 'state',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_STATE_MACHINE_ITEM_STATE_HISTORY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_state_machine_item_state_history',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::FK_STATE_MACHINE_ITEM_STATE => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'fk_state_machine_item_state',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IDENTIFIER => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'identifier',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATE => [
            'type' => 'Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'state',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistory';


    /**
     * @module 
     *
     * @param integer|null $idStateMachineItemStateHistory
     *
     * @return $this
     */
    public function setIdStateMachineItemStateHistory($idStateMachineItemStateHistory)
    {
        $this->idStateMachineItemStateHistory = $idStateMachineItemStateHistory;
        $this->modifiedProperties[self::ID_STATE_MACHINE_ITEM_STATE_HISTORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdStateMachineItemStateHistory()
    {
        return $this->idStateMachineItemStateHistory;
    }

    /**
     * @module 
     *
     * @param integer|null $idStateMachineItemStateHistory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdStateMachineItemStateHistoryOrFail($idStateMachineItemStateHistory)
    {
        if ($idStateMachineItemStateHistory === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_ITEM_STATE_HISTORY);
        }

        return $this->setIdStateMachineItemStateHistory($idStateMachineItemStateHistory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdStateMachineItemStateHistoryOrFail()
    {
        if ($this->idStateMachineItemStateHistory === null) {
            $this->throwNullValueException(static::ID_STATE_MACHINE_ITEM_STATE_HISTORY);
        }

        return $this->idStateMachineItemStateHistory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdStateMachineItemStateHistory()
    {
        $this->assertPropertyIsSet(self::ID_STATE_MACHINE_ITEM_STATE_HISTORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStateMachineItemState
     *
     * @return $this
     */
    public function setFkStateMachineItemState($fkStateMachineItemState)
    {
        $this->fkStateMachineItemState = $fkStateMachineItemState;
        $this->modifiedProperties[self::FK_STATE_MACHINE_ITEM_STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getFkStateMachineItemState()
    {
        return $this->fkStateMachineItemState;
    }

    /**
     * @module 
     *
     * @param integer|null $fkStateMachineItemState
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setFkStateMachineItemStateOrFail($fkStateMachineItemState)
    {
        if ($fkStateMachineItemState === null) {
            $this->throwNullValueException(static::FK_STATE_MACHINE_ITEM_STATE);
        }

        return $this->setFkStateMachineItemState($fkStateMachineItemState);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getFkStateMachineItemStateOrFail()
    {
        if ($this->fkStateMachineItemState === null) {
            $this->throwNullValueException(static::FK_STATE_MACHINE_ITEM_STATE);
        }

        return $this->fkStateMachineItemState;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireFkStateMachineItemState()
    {
        $this->assertPropertyIsSet(self::FK_STATE_MACHINE_ITEM_STATE);

        return $this;
    }

    /**
     * @module 
     *
     * @param integer|null $identifier
     *
     * @return $this
     */
    public function setIdentifier($identifier)
    {
        $this->identifier = $identifier;
        $this->modifiedProperties[self::IDENTIFIER] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @module 
     *
     * @param integer|null $identifier
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdentifierOrFail($identifier)
    {
        if ($identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->setIdentifier($identifier);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdentifierOrFail()
    {
        if ($this->identifier === null) {
            $this->throwNullValueException(static::IDENTIFIER);
        }

        return $this->identifier;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdentifier()
    {
        $this->assertPropertyIsSet(self::IDENTIFIER);

        return $this;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer|null $state
     *
     * @return $this
     */
    public function setState(SpyStateMachineItemStateEntityTransfer $state = null)
    {
        $this->state = $state;
        $this->modifiedProperties[self::STATE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer|null
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer $state
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStateOrFail(SpyStateMachineItemStateEntityTransfer $state)
    {
        return $this->setState($state);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\SpyStateMachineItemStateEntityTransfer
     */
    public function getStateOrFail()
    {
        if ($this->state === null) {
            $this->throwNullValueException(static::STATE);
        }

        return $this->state;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireState()
    {
        $this->assertPropertyIsSet(self::STATE);

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
                case 'idStateMachineItemStateHistory':
                case 'fkStateMachineItemState':
                case 'identifier':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'state':
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
                    $this->virtualProperties[$property] = $value;
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
                case 'idStateMachineItemStateHistory':
                case 'fkStateMachineItemState':
                case 'identifier':
                    $values[$arrayKey] = $value;

                    break;
                case 'state':
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
                case 'idStateMachineItemStateHistory':
                case 'fkStateMachineItemState':
                case 'identifier':
                    $values[$arrayKey] = $value;

                    break;
                case 'state':
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
            'idStateMachineItemStateHistory' => $this->idStateMachineItemStateHistory,
            'fkStateMachineItemState' => $this->fkStateMachineItemState,
            'identifier' => $this->identifier,
            'state' => $this->state,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_state_machine_item_state_history' => $this->idStateMachineItemStateHistory,
            'fk_state_machine_item_state' => $this->fkStateMachineItemState,
            'identifier' => $this->identifier,
            'state' => $this->state,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_state_machine_item_state_history' => $this->idStateMachineItemStateHistory instanceof AbstractTransfer ? $this->idStateMachineItemStateHistory->toArray(true, false) : $this->idStateMachineItemStateHistory,
            'fk_state_machine_item_state' => $this->fkStateMachineItemState instanceof AbstractTransfer ? $this->fkStateMachineItemState->toArray(true, false) : $this->fkStateMachineItemState,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, false) : $this->identifier,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, false) : $this->state,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idStateMachineItemStateHistory' => $this->idStateMachineItemStateHistory instanceof AbstractTransfer ? $this->idStateMachineItemStateHistory->toArray(true, true) : $this->idStateMachineItemStateHistory,
            'fkStateMachineItemState' => $this->fkStateMachineItemState instanceof AbstractTransfer ? $this->fkStateMachineItemState->toArray(true, true) : $this->fkStateMachineItemState,
            'identifier' => $this->identifier instanceof AbstractTransfer ? $this->identifier->toArray(true, true) : $this->identifier,
            'state' => $this->state instanceof AbstractTransfer ? $this->state->toArray(true, true) : $this->state,
        ];
    }
}
