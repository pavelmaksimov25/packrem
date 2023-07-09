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
class AccessTokenRequestTransfer extends AbstractTransfer
{
    /**
     * @var string
     */
    public const GRANT_TYPE = 'grantType';

    /**
     * @var string
     */
    public const ACCESS_TOKEN_REQUEST_OPTIONS = 'accessTokenRequestOptions';

    /**
     * @var string
     */
    public const PROVIDER_NAME = 'providerName';

    /**
     * @var string
     */
    public const CACHE_KEY_SEED = 'cacheKeySeed';

    /**
     * @var string
     */
    public const IGNORE_CACHE = 'ignoreCache';

    /**
     * @var string|null
     */
    protected $grantType;

    /**
     * @var \Generated\Shared\Transfer\AccessTokenRequestOptionsTransfer|null
     */
    protected $accessTokenRequestOptions;

    /**
     * @var string|null
     */
    protected $providerName;

    /**
     * @var string|null
     */
    protected $cacheKeySeed;

    /**
     * @var bool|null
     */
    protected $ignoreCache;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'grant_type' => 'grantType',
        'grantType' => 'grantType',
        'GrantType' => 'grantType',
        'access_token_request_options' => 'accessTokenRequestOptions',
        'accessTokenRequestOptions' => 'accessTokenRequestOptions',
        'AccessTokenRequestOptions' => 'accessTokenRequestOptions',
        'provider_name' => 'providerName',
        'providerName' => 'providerName',
        'ProviderName' => 'providerName',
        'cache_key_seed' => 'cacheKeySeed',
        'cacheKeySeed' => 'cacheKeySeed',
        'CacheKeySeed' => 'cacheKeySeed',
        'ignore_cache' => 'ignoreCache',
        'ignoreCache' => 'ignoreCache',
        'IgnoreCache' => 'ignoreCache',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::GRANT_TYPE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'grant_type',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ACCESS_TOKEN_REQUEST_OPTIONS => [
            'type' => 'Generated\Shared\Transfer\AccessTokenRequestOptionsTransfer',
            'type_shim' => null,
            'name_underscore' => 'access_token_request_options',
            'is_collection' => false,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::PROVIDER_NAME => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'provider_name',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::CACHE_KEY_SEED => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'cache_key_seed',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::IGNORE_CACHE => [
            'type' => 'bool',
            'type_shim' => null,
            'name_underscore' => 'ignore_cache',
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
     * @module AppCatalogGui|OauthAuth0|OauthClient
     *
     * @param string|null $grantType
     *
     * @return $this
     */
    public function setGrantType($grantType)
    {
        $this->grantType = $grantType;
        $this->modifiedProperties[self::GRANT_TYPE] = true;

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient
     *
     * @return string|null
     */
    public function getGrantType()
    {
        return $this->grantType;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient
     *
     * @param string|null $grantType
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setGrantTypeOrFail($grantType)
    {
        if ($grantType === null) {
            $this->throwNullValueException(static::GRANT_TYPE);
        }

        return $this->setGrantType($grantType);
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getGrantTypeOrFail()
    {
        if ($this->grantType === null) {
            $this->throwNullValueException(static::GRANT_TYPE);
        }

        return $this->grantType;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireGrantType()
    {
        $this->assertPropertyIsSet(self::GRANT_TYPE);

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy|Store
     *
     * @param \Generated\Shared\Transfer\AccessTokenRequestOptionsTransfer|null $accessTokenRequestOptions
     *
     * @return $this
     */
    public function setAccessTokenRequestOptions(AccessTokenRequestOptionsTransfer $accessTokenRequestOptions = null)
    {
        $this->accessTokenRequestOptions = $accessTokenRequestOptions;
        $this->modifiedProperties[self::ACCESS_TOKEN_REQUEST_OPTIONS] = true;

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy|Store
     *
     * @return \Generated\Shared\Transfer\AccessTokenRequestOptionsTransfer|null
     */
    public function getAccessTokenRequestOptions()
    {
        return $this->accessTokenRequestOptions;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy|Store
     *
     * @param \Generated\Shared\Transfer\AccessTokenRequestOptionsTransfer $accessTokenRequestOptions
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setAccessTokenRequestOptionsOrFail(AccessTokenRequestOptionsTransfer $accessTokenRequestOptions)
    {
        return $this->setAccessTokenRequestOptions($accessTokenRequestOptions);
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return \Generated\Shared\Transfer\AccessTokenRequestOptionsTransfer
     */
    public function getAccessTokenRequestOptionsOrFail()
    {
        if ($this->accessTokenRequestOptions === null) {
            $this->throwNullValueException(static::ACCESS_TOKEN_REQUEST_OPTIONS);
        }

        return $this->accessTokenRequestOptions;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy|Store
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireAccessTokenRequestOptions()
    {
        $this->assertPropertyIsSet(self::ACCESS_TOKEN_REQUEST_OPTIONS);

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @param string|null $providerName
     *
     * @return $this
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;
        $this->modifiedProperties[self::PROVIDER_NAME] = true;

        return $this;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @return string|null
     */
    public function getProviderName()
    {
        return $this->providerName;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @param string|null $providerName
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setProviderNameOrFail($providerName)
    {
        if ($providerName === null) {
            $this->throwNullValueException(static::PROVIDER_NAME);
        }

        return $this->setProviderName($providerName);
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getProviderNameOrFail()
    {
        if ($this->providerName === null) {
            $this->throwNullValueException(static::PROVIDER_NAME);
        }

        return $this->providerName;
    }

    /**
     * @module AppCatalogGui|OauthAuth0|OauthClient|OauthDummy
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireProviderName()
    {
        $this->assertPropertyIsSet(self::PROVIDER_NAME);

        return $this;
    }

    /**
     * @module OauthAuth0
     *
     * @param string|null $cacheKeySeed
     *
     * @return $this
     */
    public function setCacheKeySeed($cacheKeySeed)
    {
        $this->cacheKeySeed = $cacheKeySeed;
        $this->modifiedProperties[self::CACHE_KEY_SEED] = true;

        return $this;
    }

    /**
     * @module OauthAuth0
     *
     * @return string|null
     */
    public function getCacheKeySeed()
    {
        return $this->cacheKeySeed;
    }

    /**
     * @module OauthAuth0
     *
     * @param string|null $cacheKeySeed
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setCacheKeySeedOrFail($cacheKeySeed)
    {
        if ($cacheKeySeed === null) {
            $this->throwNullValueException(static::CACHE_KEY_SEED);
        }

        return $this->setCacheKeySeed($cacheKeySeed);
    }

    /**
     * @module OauthAuth0
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getCacheKeySeedOrFail()
    {
        if ($this->cacheKeySeed === null) {
            $this->throwNullValueException(static::CACHE_KEY_SEED);
        }

        return $this->cacheKeySeed;
    }

    /**
     * @module OauthAuth0
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireCacheKeySeed()
    {
        $this->assertPropertyIsSet(self::CACHE_KEY_SEED);

        return $this;
    }

    /**
     * @module OauthClient
     *
     * @param bool|null $ignoreCache
     *
     * @return $this
     */
    public function setIgnoreCache($ignoreCache)
    {
        $this->ignoreCache = $ignoreCache;
        $this->modifiedProperties[self::IGNORE_CACHE] = true;

        return $this;
    }

    /**
     * @module OauthClient
     *
     * @return bool|null
     */
    public function getIgnoreCache()
    {
        return $this->ignoreCache;
    }

    /**
     * @module OauthClient
     *
     * @param bool|null $ignoreCache
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIgnoreCacheOrFail($ignoreCache)
    {
        if ($ignoreCache === null) {
            $this->throwNullValueException(static::IGNORE_CACHE);
        }

        return $this->setIgnoreCache($ignoreCache);
    }

    /**
     * @module OauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return bool
     */
    public function getIgnoreCacheOrFail()
    {
        if ($this->ignoreCache === null) {
            $this->throwNullValueException(static::IGNORE_CACHE);
        }

        return $this->ignoreCache;
    }

    /**
     * @module OauthClient
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIgnoreCache()
    {
        $this->assertPropertyIsSet(self::IGNORE_CACHE);

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
                case 'grantType':
                case 'providerName':
                case 'cacheKeySeed':
                case 'ignoreCache':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'accessTokenRequestOptions':
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
                case 'grantType':
                case 'providerName':
                case 'cacheKeySeed':
                case 'ignoreCache':
                    $values[$arrayKey] = $value;

                    break;
                case 'accessTokenRequestOptions':
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
                case 'grantType':
                case 'providerName':
                case 'cacheKeySeed':
                case 'ignoreCache':
                    $values[$arrayKey] = $value;

                    break;
                case 'accessTokenRequestOptions':
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
            'grantType' => $this->grantType,
            'providerName' => $this->providerName,
            'cacheKeySeed' => $this->cacheKeySeed,
            'ignoreCache' => $this->ignoreCache,
            'accessTokenRequestOptions' => $this->accessTokenRequestOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'grant_type' => $this->grantType,
            'provider_name' => $this->providerName,
            'cache_key_seed' => $this->cacheKeySeed,
            'ignore_cache' => $this->ignoreCache,
            'access_token_request_options' => $this->accessTokenRequestOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'grant_type' => $this->grantType instanceof AbstractTransfer ? $this->grantType->toArray(true, false) : $this->grantType,
            'provider_name' => $this->providerName instanceof AbstractTransfer ? $this->providerName->toArray(true, false) : $this->providerName,
            'cache_key_seed' => $this->cacheKeySeed instanceof AbstractTransfer ? $this->cacheKeySeed->toArray(true, false) : $this->cacheKeySeed,
            'ignore_cache' => $this->ignoreCache instanceof AbstractTransfer ? $this->ignoreCache->toArray(true, false) : $this->ignoreCache,
            'access_token_request_options' => $this->accessTokenRequestOptions instanceof AbstractTransfer ? $this->accessTokenRequestOptions->toArray(true, false) : $this->accessTokenRequestOptions,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'grantType' => $this->grantType instanceof AbstractTransfer ? $this->grantType->toArray(true, true) : $this->grantType,
            'providerName' => $this->providerName instanceof AbstractTransfer ? $this->providerName->toArray(true, true) : $this->providerName,
            'cacheKeySeed' => $this->cacheKeySeed instanceof AbstractTransfer ? $this->cacheKeySeed->toArray(true, true) : $this->cacheKeySeed,
            'ignoreCache' => $this->ignoreCache instanceof AbstractTransfer ? $this->ignoreCache->toArray(true, true) : $this->ignoreCache,
            'accessTokenRequestOptions' => $this->accessTokenRequestOptions instanceof AbstractTransfer ? $this->accessTokenRequestOptions->toArray(true, true) : $this->accessTokenRequestOptions,
        ];
    }
}
