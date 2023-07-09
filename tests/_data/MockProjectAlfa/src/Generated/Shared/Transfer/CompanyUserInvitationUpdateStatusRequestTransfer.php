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
class CompanyUserInvitationUpdateStatusRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const ID_COMPANY_USER = 'idCompanyUser';

    /**
     * @var string
     */
    public const COMPANY_USER_INVITATION = 'companyUserInvitation';

    /**
     * @var string
     */
    public const STATUS_KEY = 'statusKey';

    /**
     * @var int|null
     */
    protected $idCompanyUser;

    /**
     * @var \Generated\Shared\Transfer\CompanyUserInvitationTransfer|null
     */
    protected $companyUserInvitation;

    /**
     * @var string|null
     */
    protected $statusKey;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_company_user' => 'idCompanyUser',
        'idCompanyUser' => 'idCompanyUser',
        'IdCompanyUser' => 'idCompanyUser',
        'company_user_invitation' => 'companyUserInvitation',
        'companyUserInvitation' => 'companyUserInvitation',
        'CompanyUserInvitation' => 'companyUserInvitation',
        'status_key' => 'statusKey',
        'statusKey' => 'statusKey',
        'StatusKey' => 'statusKey',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COMPANY_USER => [
            'type' => 'int',
            'type_shim' => null,
            'name_underscore' => 'id_company_user',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::COMPANY_USER_INVITATION => [
            'type' => 'Generated\Shared\Transfer\CompanyUserInvitationTransfer',
            'type_shim' => null,
            'name_underscore' => 'company_user_invitation',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::STATUS_KEY => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'status_key',
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
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param int|null $idCompanyUser
     *
     * @return $this
     */
    public function setIdCompanyUser($idCompanyUser)
    {
        $this->idCompanyUser = $idCompanyUser;
        $this->modifiedProperties[self::ID_COMPANY_USER] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return int|null
     */
    public function getIdCompanyUser()
    {
        return $this->idCompanyUser;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param int|null $idCompanyUser
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCompanyUserOrFail($idCompanyUser)
    {
        if ($idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->setIdCompanyUser($idCompanyUser);
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return int
     */
    public function getIdCompanyUserOrFail()
    {
        if ($this->idCompanyUser === null) {
            $this->throwNullValueException(static::ID_COMPANY_USER);
        }

        return $this->idCompanyUser;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCompanyUser()
    {
        $this->assertPropertyIsSet(self::ID_COMPANY_USER);

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param \Generated\Shared\Transfer\CompanyUserInvitationTransfer|null $companyUserInvitation
     *
     * @return $this
     */
    public function setCompanyUserInvitation(CompanyUserInvitationTransfer $companyUserInvitation = null)
    {
        $this->companyUserInvitation = $companyUserInvitation;
        $this->modifiedProperties[self::COMPANY_USER_INVITATION] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return \Generated\Shared\Transfer\CompanyUserInvitationTransfer|null
     */
    public function getCompanyUserInvitation()
    {
        return $this->companyUserInvitation;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param \Generated\Shared\Transfer\CompanyUserInvitationTransfer $companyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCompanyUserInvitationOrFail(CompanyUserInvitationTransfer $companyUserInvitation)
    {
        return $this->setCompanyUserInvitation($companyUserInvitation);
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\CompanyUserInvitationTransfer
     */
    public function getCompanyUserInvitationOrFail()
    {
        if ($this->companyUserInvitation === null) {
            $this->throwNullValueException(static::COMPANY_USER_INVITATION);
        }

        return $this->companyUserInvitation;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCompanyUserInvitation()
    {
        $this->assertPropertyIsSet(self::COMPANY_USER_INVITATION);

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param string|null $statusKey
     *
     * @return $this
     */
    public function setStatusKey($statusKey)
    {
        $this->statusKey = $statusKey;
        $this->modifiedProperties[self::STATUS_KEY] = true;

        return $this;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @return string|null
     */
    public function getStatusKey()
    {
        return $this->statusKey;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @param string|null $statusKey
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setStatusKeyOrFail($statusKey)
    {
        if ($statusKey === null) {
            $this->throwNullValueException(static::STATUS_KEY);
        }

        return $this->setStatusKey($statusKey);
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getStatusKeyOrFail()
    {
        if ($this->statusKey === null) {
            $this->throwNullValueException(static::STATUS_KEY);
        }

        return $this->statusKey;
    }

    /**
     * @module CompanyUserInvitationPage|CompanyUserInvitation
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireStatusKey()
    {
        $this->assertPropertyIsSet(self::STATUS_KEY);

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
                case 'idCompanyUser':
                case 'statusKey':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'companyUserInvitation':
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
                case 'idCompanyUser':
                case 'statusKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUserInvitation':
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
                case 'idCompanyUser':
                case 'statusKey':
                    $values[$arrayKey] = $value;

                    break;
                case 'companyUserInvitation':
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
            'idCompanyUser' => $this->idCompanyUser,
            'statusKey' => $this->statusKey,
            'companyUserInvitation' => $this->companyUserInvitation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user' => $this->idCompanyUser,
            'status_key' => $this->statusKey,
            'company_user_invitation' => $this->companyUserInvitation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_company_user' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, false) : $this->idCompanyUser,
            'status_key' => $this->statusKey instanceof AbstractTransfer ? $this->statusKey->toArray(true, false) : $this->statusKey,
            'company_user_invitation' => $this->companyUserInvitation instanceof AbstractTransfer ? $this->companyUserInvitation->toArray(true, false) : $this->companyUserInvitation,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCompanyUser' => $this->idCompanyUser instanceof AbstractTransfer ? $this->idCompanyUser->toArray(true, true) : $this->idCompanyUser,
            'statusKey' => $this->statusKey instanceof AbstractTransfer ? $this->statusKey->toArray(true, true) : $this->statusKey,
            'companyUserInvitation' => $this->companyUserInvitation instanceof AbstractTransfer ? $this->companyUserInvitation->toArray(true, true) : $this->companyUserInvitation,
        ];
    }
}
