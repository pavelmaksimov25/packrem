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
class MailRecipientTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const EMAIL = 'email';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const NAME_TRANSLATION_PARAMETERS = 'nameTranslationParameters';

    /**
     * @deprecated Will be removed without replacement
     */
    public const TYPE = 'type';

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var string[]
     */
    protected $nameTranslationParameters = [];

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'email' => 'email',
        'Email' => 'email',
        'name' => 'name',
        'Name' => 'name',
        'name_translation_parameters' => 'nameTranslationParameters',
        'nameTranslationParameters' => 'nameTranslationParameters',
        'NameTranslationParameters' => 'nameTranslationParameters',
        'type' => 'type',
        'Type' => 'type',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::EMAIL => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'email',
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
        self::NAME_TRANSLATION_PARAMETERS => [
            'type' => 'string[]',
            'type_shim' => null,
            'name_underscore' => 'name_translation_parameters',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => true,
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
     * @module AvailabilityNotification|CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Newsletter|Oms|SalesInvoice|SymfonyMailer|UserPasswordResetMail|User
     *
     * @param string|null $email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;
        $this->modifiedProperties[self::EMAIL] = true;

        return $this;
    }

    /**
     * @module AvailabilityNotification|CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Newsletter|Oms|SalesInvoice|SymfonyMailer|UserPasswordResetMail|User
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @module AvailabilityNotification|CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Newsletter|Oms|SalesInvoice|SymfonyMailer|UserPasswordResetMail|User
     *
     * @param string|null $email
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setEmailOrFail($email)
    {
        if ($email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->setEmail($email);
    }

    /**
     * @module AvailabilityNotification|CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Newsletter|Oms|SalesInvoice|SymfonyMailer|UserPasswordResetMail|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getEmailOrFail()
    {
        if ($this->email === null) {
            $this->throwNullValueException(static::EMAIL);
        }

        return $this->email;
    }

    /**
     * @module AvailabilityNotification|CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Newsletter|Oms|SalesInvoice|SymfonyMailer|UserPasswordResetMail|User
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireEmail()
    {
        $this->assertPropertyIsSet(self::EMAIL);

        return $this;
    }

    /**
     * @module CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Oms|SalesInvoice|SymfonyMailer
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
     * @module CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Oms|SalesInvoice|SymfonyMailer
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Oms|SalesInvoice|SymfonyMailer
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
     * @module CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Oms|SalesInvoice|SymfonyMailer
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
     * @module CompanyMailConnector|CompanyUserInvitation|Customer|Mail|Oms|SalesInvoice|SymfonyMailer
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
     * @module Mail
     *
     * @param string[] $nameTranslationParameters
     *
     * @return $this
     */
    public function setNameTranslationParameters($nameTranslationParameters)
    {
        if ($nameTranslationParameters === null) {
            $nameTranslationParameters = [];
        }

        $this->nameTranslationParameters = $nameTranslationParameters;
        $this->modifiedProperties[self::NAME_TRANSLATION_PARAMETERS] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @return string[]
     */
    public function getNameTranslationParameters()
    {
        return $this->nameTranslationParameters;
    }

    /**
     * @module Mail
     *
     * @param string|int $nameTranslationParameterKey
     * @param string $nameTranslationParameterValue
     *
     * @return $this
     */
    public function addNameTranslationParameter($nameTranslationParameterKey, $nameTranslationParameterValue)
    {
        $this->nameTranslationParameters[$nameTranslationParameterKey] = $nameTranslationParameterValue;
        $this->modifiedProperties[self::NAME_TRANSLATION_PARAMETERS] = true;

        return $this;
    }

    /**
     * @module Mail
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireNameTranslationParameters()
    {
        $this->assertPropertyIsSet(self::NAME_TRANSLATION_PARAMETERS);

        return $this;
    }

    /**
     * @module Mail|SymfonyMailer
     *
     * @deprecated Will be removed without replacement
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
     * @module Mail|SymfonyMailer
     *
     * @deprecated Will be removed without replacement
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @module Mail|SymfonyMailer
     *
     * @deprecated Will be removed without replacement
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
     * @module Mail|SymfonyMailer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @deprecated Will be removed without replacement
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
     * @module Mail|SymfonyMailer
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @deprecated Will be removed without replacement
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
                case 'email':
                case 'name':
                case 'nameTranslationParameters':
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
                case 'email':
                case 'name':
                case 'nameTranslationParameters':
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
                case 'email':
                case 'name':
                case 'nameTranslationParameters':
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
            'email' => $this->email,
            'name' => $this->name,
            'nameTranslationParameters' => $this->nameTranslationParameters,
            'type' => $this->type,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'email' => $this->email,
            'name' => $this->name,
            'name_translation_parameters' => $this->nameTranslationParameters,
            'type' => $this->type,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, false) : $this->email,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'name_translation_parameters' => $this->nameTranslationParameters instanceof AbstractTransfer ? $this->nameTranslationParameters->toArray(true, false) : $this->nameTranslationParameters,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, false) : $this->type,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'email' => $this->email instanceof AbstractTransfer ? $this->email->toArray(true, true) : $this->email,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'nameTranslationParameters' => $this->nameTranslationParameters instanceof AbstractTransfer ? $this->nameTranslationParameters->toArray(true, true) : $this->nameTranslationParameters,
            'type' => $this->type instanceof AbstractTransfer ? $this->type->toArray(true, true) : $this->type,
        ];
    }
}
