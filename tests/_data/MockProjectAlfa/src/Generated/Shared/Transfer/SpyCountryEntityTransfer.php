<?php

/**
 * (c) Spryker Systems GmbH copyright protected
 */

namespace Generated\Shared\Transfer;

use ArrayObject;
use Spryker\Shared\Kernel\Transfer\AbstractTransfer;
use Spryker\Shared\Kernel\Transfer\AbstractEntityTransfer;

/**
 * !!! THIS FILE IS AUTO-GENERATED, EVERY CHANGE WILL BE LOST WITH THE NEXT RUN OF TRANSFER GENERATOR
 * !!! DO NOT CHANGE ANYTHING IN THIS FILE
 */
class SpyCountryEntityTransfer extends AbstractEntityTransfer
{
    /**
     * @var string
     */
    public const ID_COUNTRY = 'idCountry';

    /**
     * @var string
     */
    public const ISO2_CODE = 'iso2Code';

    /**
     * @var string
     */
    public const ISO3_CODE = 'iso3Code';

    /**
     * @var string
     */
    public const NAME = 'name';

    /**
     * @var string
     */
    public const POSTAL_CODE_MANDATORY = 'postalCodeMandatory';

    /**
     * @var string
     */
    public const POSTAL_CODE_REGEX = 'postalCodeRegex';

    /**
     * @var string
     */
    public const SPY_REGIONS = 'spyRegions';

    /**
     * @var string
     */
    public const SPY_COUNTRY_STORES = 'spyCountryStores';

    /**
     * @var string
     */
    public const SPY_COMPANY_UNIT_ADDRESSES = 'spyCompanyUnitAddresses';

    /**
     * @var string
     */
    public const SPY_STOCK_ADDRESSES = 'spyStockAddresses';

    /**
     * @var string
     */
    public const SPY_CUSTOMER_ADDRESSES = 'spyCustomerAddresses';

    /**
     * @var string
     */
    public const SPY_TAX_RATES = 'spyTaxRates';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ADDRESSES = 'spySalesOrderAddresses';

    /**
     * @var string
     */
    public const SPY_SALES_ORDER_ADDRESS_HISTORIES = 'spySalesOrderAddressHistories';

    /**
     * @var integer|null
     */
    protected $idCountry;

    /**
     * @var string|null
     */
    protected $iso2Code;

    /**
     * @var string|null
     */
    protected $iso3Code;

    /**
     * @var string|null
     */
    protected $name;

    /**
     * @var boolean|null
     */
    protected $postalCodeMandatory;

    /**
     * @var string|null
     */
    protected $postalCodeRegex;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyRegionEntityTransfer[]
     */
    protected $spyRegions;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCountryStoreEntityTransfer[]
     */
    protected $spyCountryStores;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer[]
     */
    protected $spyCompanyUnitAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyStockAddressEntityTransfer[]
     */
    protected $spyStockAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer[]
     */
    protected $spyCustomerAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpyTaxRateEntityTransfer[]
     */
    protected $spyTaxRates;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer[]
     */
    protected $spySalesOrderAddresses;

    /**
     * @var \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressHistoryEntityTransfer[]
     */
    protected $spySalesOrderAddressHistories;

    /**
     * @var array<string, string>
     */
    protected $transferPropertyNameMap = [
        'id_country' => 'idCountry',
        'idCountry' => 'idCountry',
        'IdCountry' => 'idCountry',
        'iso2_code' => 'iso2Code',
        'iso2Code' => 'iso2Code',
        'Iso2Code' => 'iso2Code',
        'iso3_code' => 'iso3Code',
        'iso3Code' => 'iso3Code',
        'Iso3Code' => 'iso3Code',
        'name' => 'name',
        'Name' => 'name',
        'postal_code_mandatory' => 'postalCodeMandatory',
        'postalCodeMandatory' => 'postalCodeMandatory',
        'PostalCodeMandatory' => 'postalCodeMandatory',
        'postal_code_regex' => 'postalCodeRegex',
        'postalCodeRegex' => 'postalCodeRegex',
        'PostalCodeRegex' => 'postalCodeRegex',
        'spy_regions' => 'spyRegions',
        'spyRegions' => 'spyRegions',
        'SpyRegions' => 'spyRegions',
        'spy_country_stores' => 'spyCountryStores',
        'spyCountryStores' => 'spyCountryStores',
        'SpyCountryStores' => 'spyCountryStores',
        'spy_company_unit_addresses' => 'spyCompanyUnitAddresses',
        'spyCompanyUnitAddresses' => 'spyCompanyUnitAddresses',
        'SpyCompanyUnitAddresses' => 'spyCompanyUnitAddresses',
        'spy_stock_addresses' => 'spyStockAddresses',
        'spyStockAddresses' => 'spyStockAddresses',
        'SpyStockAddresses' => 'spyStockAddresses',
        'spy_customer_addresses' => 'spyCustomerAddresses',
        'spyCustomerAddresses' => 'spyCustomerAddresses',
        'SpyCustomerAddresses' => 'spyCustomerAddresses',
        'spy_tax_rates' => 'spyTaxRates',
        'spyTaxRates' => 'spyTaxRates',
        'SpyTaxRates' => 'spyTaxRates',
        'spy_sales_order_addresses' => 'spySalesOrderAddresses',
        'spySalesOrderAddresses' => 'spySalesOrderAddresses',
        'SpySalesOrderAddresses' => 'spySalesOrderAddresses',
        'spy_sales_order_address_histories' => 'spySalesOrderAddressHistories',
        'spySalesOrderAddressHistories' => 'spySalesOrderAddressHistories',
        'SpySalesOrderAddressHistories' => 'spySalesOrderAddressHistories',
    ];

    /**
     * @var array<string, array<string, mixed>>
     */
    protected $transferMetadata = [
        self::ID_COUNTRY => [
            'type' => 'integer',
            'type_shim' => null,
            'name_underscore' => 'id_country',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ISO2_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'iso2_code',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::ISO3_CODE => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'iso3_code',
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
        self::POSTAL_CODE_MANDATORY => [
            'type' => 'boolean',
            'type_shim' => null,
            'name_underscore' => 'postal_code_mandatory',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::POSTAL_CODE_REGEX => [
            'type' => 'string',
            'type_shim' => null,
            'name_underscore' => 'postal_code_regex',
            'is_collection' => false,
            'is_transfer' => false,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_REGIONS => [
            'type' => 'Generated\Shared\Transfer\SpyRegionEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_regions',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COUNTRY_STORES => [
            'type' => 'Generated\Shared\Transfer\SpyCountryStoreEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_country_stores',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_COMPANY_UNIT_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_company_unit_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_STOCK_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyStockAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_stock_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_CUSTOMER_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_customer_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_TAX_RATES => [
            'type' => 'Generated\Shared\Transfer\SpyTaxRateEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_tax_rates',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_ADDRESSES => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_addresses',
            'is_collection' => true,
            'is_transfer' => true,
            'is_value_object' => false,
            'rest_request_parameter' => 'no',
            'is_associative' => false,
            'is_nullable' => false,
            'is_strict' => false,
        ],
        self::SPY_SALES_ORDER_ADDRESS_HISTORIES => [
            'type' => 'Generated\Shared\Transfer\SpySalesOrderAddressHistoryEntityTransfer',
            'type_shim' => null,
            'name_underscore' => 'spy_sales_order_address_histories',
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
     * @var string
     */
    public static $entityNamespace = 'Orm\Zed\Country\Persistence\SpyCountry';


    /**
     * @module 
     *
     * @param integer|null $idCountry
     *
     * @return $this
     */
    public function setIdCountry($idCountry)
    {
        $this->idCountry = $idCountry;
        $this->modifiedProperties[self::ID_COUNTRY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return integer|null
     */
    public function getIdCountry()
    {
        return $this->idCountry;
    }

    /**
     * @module 
     *
     * @param integer|null $idCountry
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIdCountryOrFail($idCountry)
    {
        if ($idCountry === null) {
            $this->throwNullValueException(static::ID_COUNTRY);
        }

        return $this->setIdCountry($idCountry);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return integer
     */
    public function getIdCountryOrFail()
    {
        if ($this->idCountry === null) {
            $this->throwNullValueException(static::ID_COUNTRY);
        }

        return $this->idCountry;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIdCountry()
    {
        $this->assertPropertyIsSet(self::ID_COUNTRY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $iso2Code
     *
     * @return $this
     */
    public function setIso2Code($iso2Code)
    {
        $this->iso2Code = $iso2Code;
        $this->modifiedProperties[self::ISO2_CODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIso2Code()
    {
        return $this->iso2Code;
    }

    /**
     * @module 
     *
     * @param string|null $iso2Code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIso2CodeOrFail($iso2Code)
    {
        if ($iso2Code === null) {
            $this->throwNullValueException(static::ISO2_CODE);
        }

        return $this->setIso2Code($iso2Code);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIso2CodeOrFail()
    {
        if ($this->iso2Code === null) {
            $this->throwNullValueException(static::ISO2_CODE);
        }

        return $this->iso2Code;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIso2Code()
    {
        $this->assertPropertyIsSet(self::ISO2_CODE);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $iso3Code
     *
     * @return $this
     */
    public function setIso3Code($iso3Code)
    {
        $this->iso3Code = $iso3Code;
        $this->modifiedProperties[self::ISO3_CODE] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getIso3Code()
    {
        return $this->iso3Code;
    }

    /**
     * @module 
     *
     * @param string|null $iso3Code
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setIso3CodeOrFail($iso3Code)
    {
        if ($iso3Code === null) {
            $this->throwNullValueException(static::ISO3_CODE);
        }

        return $this->setIso3Code($iso3Code);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getIso3CodeOrFail()
    {
        if ($this->iso3Code === null) {
            $this->throwNullValueException(static::ISO3_CODE);
        }

        return $this->iso3Code;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireIso3Code()
    {
        $this->assertPropertyIsSet(self::ISO3_CODE);

        return $this;
    }

    /**
     * @module 
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
     * @module 
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @module 
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
     * @module 
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
     * @module 
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
     * @module 
     *
     * @param boolean|null $postalCodeMandatory
     *
     * @return $this
     */
    public function setPostalCodeMandatory($postalCodeMandatory)
    {
        $this->postalCodeMandatory = $postalCodeMandatory;
        $this->modifiedProperties[self::POSTAL_CODE_MANDATORY] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return boolean|null
     */
    public function getPostalCodeMandatory()
    {
        return $this->postalCodeMandatory;
    }

    /**
     * @module 
     *
     * @param boolean|null $postalCodeMandatory
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPostalCodeMandatoryOrFail($postalCodeMandatory)
    {
        if ($postalCodeMandatory === null) {
            $this->throwNullValueException(static::POSTAL_CODE_MANDATORY);
        }

        return $this->setPostalCodeMandatory($postalCodeMandatory);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return boolean
     */
    public function getPostalCodeMandatoryOrFail()
    {
        if ($this->postalCodeMandatory === null) {
            $this->throwNullValueException(static::POSTAL_CODE_MANDATORY);
        }

        return $this->postalCodeMandatory;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePostalCodeMandatory()
    {
        $this->assertPropertyIsSet(self::POSTAL_CODE_MANDATORY);

        return $this;
    }

    /**
     * @module 
     *
     * @param string|null $postalCodeRegex
     *
     * @return $this
     */
    public function setPostalCodeRegex($postalCodeRegex)
    {
        $this->postalCodeRegex = $postalCodeRegex;
        $this->modifiedProperties[self::POSTAL_CODE_REGEX] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return string|null
     */
    public function getPostalCodeRegex()
    {
        return $this->postalCodeRegex;
    }

    /**
     * @module 
     *
     * @param string|null $postalCodeRegex
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return $this
     */
    public function setPostalCodeRegexOrFail($postalCodeRegex)
    {
        if ($postalCodeRegex === null) {
            $this->throwNullValueException(static::POSTAL_CODE_REGEX);
        }

        return $this->setPostalCodeRegex($postalCodeRegex);
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\NullValueException
     *
     * @return string
     */
    public function getPostalCodeRegexOrFail()
    {
        if ($this->postalCodeRegex === null) {
            $this->throwNullValueException(static::POSTAL_CODE_REGEX);
        }

        return $this->postalCodeRegex;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requirePostalCodeRegex()
    {
        $this->assertPropertyIsSet(self::POSTAL_CODE_REGEX);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyRegionEntityTransfer[] $spyRegions
     *
     * @return $this
     */
    public function setSpyRegions(ArrayObject $spyRegions)
    {
        $this->spyRegions = $spyRegions;
        $this->modifiedProperties[self::SPY_REGIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyRegionEntityTransfer[]
     */
    public function getSpyRegions()
    {
        return $this->spyRegions;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyRegionEntityTransfer $spyRegions
     *
     * @return $this
     */
    public function addSpyRegions(SpyRegionEntityTransfer $spyRegions)
    {
        $this->spyRegions[] = $spyRegions;
        $this->modifiedProperties[self::SPY_REGIONS] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyRegions()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_REGIONS);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCountryStoreEntityTransfer[] $spyCountryStores
     *
     * @return $this
     */
    public function setSpyCountryStores(ArrayObject $spyCountryStores)
    {
        $this->spyCountryStores = $spyCountryStores;
        $this->modifiedProperties[self::SPY_COUNTRY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCountryStoreEntityTransfer[]
     */
    public function getSpyCountryStores()
    {
        return $this->spyCountryStores;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCountryStoreEntityTransfer $spyCountryStores
     *
     * @return $this
     */
    public function addSpyCountryStores(SpyCountryStoreEntityTransfer $spyCountryStores)
    {
        $this->spyCountryStores[] = $spyCountryStores;
        $this->modifiedProperties[self::SPY_COUNTRY_STORES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCountryStores()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COUNTRY_STORES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer[] $spyCompanyUnitAddresses
     *
     * @return $this
     */
    public function setSpyCompanyUnitAddresses(ArrayObject $spyCompanyUnitAddresses)
    {
        $this->spyCompanyUnitAddresses = $spyCompanyUnitAddresses;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer[]
     */
    public function getSpyCompanyUnitAddresses()
    {
        return $this->spyCompanyUnitAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCompanyUnitAddressEntityTransfer $spyCompanyUnitAddresses
     *
     * @return $this
     */
    public function addSpyCompanyUnitAddresses(SpyCompanyUnitAddressEntityTransfer $spyCompanyUnitAddresses)
    {
        $this->spyCompanyUnitAddresses[] = $spyCompanyUnitAddresses;
        $this->modifiedProperties[self::SPY_COMPANY_UNIT_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCompanyUnitAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_COMPANY_UNIT_ADDRESSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyStockAddressEntityTransfer[] $spyStockAddresses
     *
     * @return $this
     */
    public function setSpyStockAddresses(ArrayObject $spyStockAddresses)
    {
        $this->spyStockAddresses = $spyStockAddresses;
        $this->modifiedProperties[self::SPY_STOCK_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyStockAddressEntityTransfer[]
     */
    public function getSpyStockAddresses()
    {
        return $this->spyStockAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyStockAddressEntityTransfer $spyStockAddresses
     *
     * @return $this
     */
    public function addSpyStockAddresses(SpyStockAddressEntityTransfer $spyStockAddresses)
    {
        $this->spyStockAddresses[] = $spyStockAddresses;
        $this->modifiedProperties[self::SPY_STOCK_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyStockAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_STOCK_ADDRESSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer[] $spyCustomerAddresses
     *
     * @return $this
     */
    public function setSpyCustomerAddresses(ArrayObject $spyCustomerAddresses)
    {
        $this->spyCustomerAddresses = $spyCustomerAddresses;
        $this->modifiedProperties[self::SPY_CUSTOMER_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer[]
     */
    public function getSpyCustomerAddresses()
    {
        return $this->spyCustomerAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyCustomerAddressEntityTransfer $spyCustomerAddresses
     *
     * @return $this
     */
    public function addSpyCustomerAddresses(SpyCustomerAddressEntityTransfer $spyCustomerAddresses)
    {
        $this->spyCustomerAddresses[] = $spyCustomerAddresses;
        $this->modifiedProperties[self::SPY_CUSTOMER_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyCustomerAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_CUSTOMER_ADDRESSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpyTaxRateEntityTransfer[] $spyTaxRates
     *
     * @return $this
     */
    public function setSpyTaxRates(ArrayObject $spyTaxRates)
    {
        $this->spyTaxRates = $spyTaxRates;
        $this->modifiedProperties[self::SPY_TAX_RATES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpyTaxRateEntityTransfer[]
     */
    public function getSpyTaxRates()
    {
        return $this->spyTaxRates;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpyTaxRateEntityTransfer $spyTaxRates
     *
     * @return $this
     */
    public function addSpyTaxRates(SpyTaxRateEntityTransfer $spyTaxRates)
    {
        $this->spyTaxRates[] = $spyTaxRates;
        $this->modifiedProperties[self::SPY_TAX_RATES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpyTaxRates()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_TAX_RATES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer[] $spySalesOrderAddresses
     *
     * @return $this
     */
    public function setSpySalesOrderAddresses(ArrayObject $spySalesOrderAddresses)
    {
        $this->spySalesOrderAddresses = $spySalesOrderAddresses;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer[]
     */
    public function getSpySalesOrderAddresses()
    {
        return $this->spySalesOrderAddresses;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderAddressEntityTransfer $spySalesOrderAddresses
     *
     * @return $this
     */
    public function addSpySalesOrderAddresses(SpySalesOrderAddressEntityTransfer $spySalesOrderAddresses)
    {
        $this->spySalesOrderAddresses[] = $spySalesOrderAddresses;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ADDRESSES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderAddresses()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_ADDRESSES);

        return $this;
    }

    /**
     * @module 
     *
     * @param \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressHistoryEntityTransfer[] $spySalesOrderAddressHistories
     *
     * @return $this
     */
    public function setSpySalesOrderAddressHistories(ArrayObject $spySalesOrderAddressHistories)
    {
        $this->spySalesOrderAddressHistories = $spySalesOrderAddressHistories;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ADDRESS_HISTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @return \ArrayObject|\Generated\Shared\Transfer\SpySalesOrderAddressHistoryEntityTransfer[]
     */
    public function getSpySalesOrderAddressHistories()
    {
        return $this->spySalesOrderAddressHistories;
    }

    /**
     * @module 
     *
     * @param \Generated\Shared\Transfer\SpySalesOrderAddressHistoryEntityTransfer $spySalesOrderAddressHistories
     *
     * @return $this
     */
    public function addSpySalesOrderAddressHistories(SpySalesOrderAddressHistoryEntityTransfer $spySalesOrderAddressHistories)
    {
        $this->spySalesOrderAddressHistories[] = $spySalesOrderAddressHistories;
        $this->modifiedProperties[self::SPY_SALES_ORDER_ADDRESS_HISTORIES] = true;

        return $this;
    }

    /**
     * @module 
     *
     * @throws \Spryker\Shared\Kernel\Transfer\Exception\RequiredTransferPropertyException
     *
     * @return $this
     */
    public function requireSpySalesOrderAddressHistories()
    {
        $this->assertCollectionPropertyIsSet(self::SPY_SALES_ORDER_ADDRESS_HISTORIES);

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
                case 'idCountry':
                case 'iso2Code':
                case 'iso3Code':
                case 'name':
                case 'postalCodeMandatory':
                case 'postalCodeRegex':
                    $this->$normalizedPropertyName = $value;
                    $this->modifiedProperties[$normalizedPropertyName] = true;

                    break;
                case 'spyRegions':
                case 'spyCountryStores':
                case 'spyCompanyUnitAddresses':
                case 'spyStockAddresses':
                case 'spyCustomerAddresses':
                case 'spyTaxRates':
                case 'spySalesOrderAddresses':
                case 'spySalesOrderAddressHistories':
                    $elementType = $this->transferMetadata[$normalizedPropertyName]['type'];
                    $this->$normalizedPropertyName = $this->processArrayObject($elementType, $value, $ignoreMissingProperty);
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
                case 'idCountry':
                case 'iso2Code':
                case 'iso3Code':
                case 'name':
                case 'postalCodeMandatory':
                case 'postalCodeRegex':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyRegions':
                case 'spyCountryStores':
                case 'spyCompanyUnitAddresses':
                case 'spyStockAddresses':
                case 'spyCustomerAddresses':
                case 'spyTaxRates':
                case 'spySalesOrderAddresses':
                case 'spySalesOrderAddressHistories':
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
                case 'idCountry':
                case 'iso2Code':
                case 'iso3Code':
                case 'name':
                case 'postalCodeMandatory':
                case 'postalCodeRegex':
                    $values[$arrayKey] = $value;

                    break;
                case 'spyRegions':
                case 'spyCountryStores':
                case 'spyCompanyUnitAddresses':
                case 'spyStockAddresses':
                case 'spyCustomerAddresses':
                case 'spyTaxRates':
                case 'spySalesOrderAddresses':
                case 'spySalesOrderAddressHistories':
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
        $this->spyRegions = $this->spyRegions ?: new ArrayObject();
        $this->spyCountryStores = $this->spyCountryStores ?: new ArrayObject();
        $this->spyCompanyUnitAddresses = $this->spyCompanyUnitAddresses ?: new ArrayObject();
        $this->spyStockAddresses = $this->spyStockAddresses ?: new ArrayObject();
        $this->spyCustomerAddresses = $this->spyCustomerAddresses ?: new ArrayObject();
        $this->spyTaxRates = $this->spyTaxRates ?: new ArrayObject();
        $this->spySalesOrderAddresses = $this->spySalesOrderAddresses ?: new ArrayObject();
        $this->spySalesOrderAddressHistories = $this->spySalesOrderAddressHistories ?: new ArrayObject();
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveCamelCased(): array
    {
        return [
            'idCountry' => $this->idCountry,
            'iso2Code' => $this->iso2Code,
            'iso3Code' => $this->iso3Code,
            'name' => $this->name,
            'postalCodeMandatory' => $this->postalCodeMandatory,
            'postalCodeRegex' => $this->postalCodeRegex,
            'spyRegions' => $this->spyRegions,
            'spyCountryStores' => $this->spyCountryStores,
            'spyCompanyUnitAddresses' => $this->spyCompanyUnitAddresses,
            'spyStockAddresses' => $this->spyStockAddresses,
            'spyCustomerAddresses' => $this->spyCustomerAddresses,
            'spyTaxRates' => $this->spyTaxRates,
            'spySalesOrderAddresses' => $this->spySalesOrderAddresses,
            'spySalesOrderAddressHistories' => $this->spySalesOrderAddressHistories,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayNotRecursiveNotCamelCased(): array
    {
        return [
            'id_country' => $this->idCountry,
            'iso2_code' => $this->iso2Code,
            'iso3_code' => $this->iso3Code,
            'name' => $this->name,
            'postal_code_mandatory' => $this->postalCodeMandatory,
            'postal_code_regex' => $this->postalCodeRegex,
            'spy_regions' => $this->spyRegions,
            'spy_country_stores' => $this->spyCountryStores,
            'spy_company_unit_addresses' => $this->spyCompanyUnitAddresses,
            'spy_stock_addresses' => $this->spyStockAddresses,
            'spy_customer_addresses' => $this->spyCustomerAddresses,
            'spy_tax_rates' => $this->spyTaxRates,
            'spy_sales_order_addresses' => $this->spySalesOrderAddresses,
            'spy_sales_order_address_histories' => $this->spySalesOrderAddressHistories,
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveNotCamelCased(): array
    {
        return [
            'id_country' => $this->idCountry instanceof AbstractTransfer ? $this->idCountry->toArray(true, false) : $this->idCountry,
            'iso2_code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, false) : $this->iso2Code,
            'iso3_code' => $this->iso3Code instanceof AbstractTransfer ? $this->iso3Code->toArray(true, false) : $this->iso3Code,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, false) : $this->name,
            'postal_code_mandatory' => $this->postalCodeMandatory instanceof AbstractTransfer ? $this->postalCodeMandatory->toArray(true, false) : $this->postalCodeMandatory,
            'postal_code_regex' => $this->postalCodeRegex instanceof AbstractTransfer ? $this->postalCodeRegex->toArray(true, false) : $this->postalCodeRegex,
            'spy_regions' => $this->spyRegions instanceof AbstractTransfer ? $this->spyRegions->toArray(true, false) : $this->addValuesToCollection($this->spyRegions, true, false),
            'spy_country_stores' => $this->spyCountryStores instanceof AbstractTransfer ? $this->spyCountryStores->toArray(true, false) : $this->addValuesToCollection($this->spyCountryStores, true, false),
            'spy_company_unit_addresses' => $this->spyCompanyUnitAddresses instanceof AbstractTransfer ? $this->spyCompanyUnitAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyCompanyUnitAddresses, true, false),
            'spy_stock_addresses' => $this->spyStockAddresses instanceof AbstractTransfer ? $this->spyStockAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyStockAddresses, true, false),
            'spy_customer_addresses' => $this->spyCustomerAddresses instanceof AbstractTransfer ? $this->spyCustomerAddresses->toArray(true, false) : $this->addValuesToCollection($this->spyCustomerAddresses, true, false),
            'spy_tax_rates' => $this->spyTaxRates instanceof AbstractTransfer ? $this->spyTaxRates->toArray(true, false) : $this->addValuesToCollection($this->spyTaxRates, true, false),
            'spy_sales_order_addresses' => $this->spySalesOrderAddresses instanceof AbstractTransfer ? $this->spySalesOrderAddresses->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderAddresses, true, false),
            'spy_sales_order_address_histories' => $this->spySalesOrderAddressHistories instanceof AbstractTransfer ? $this->spySalesOrderAddressHistories->toArray(true, false) : $this->addValuesToCollection($this->spySalesOrderAddressHistories, true, false),
        ];
    }

    /**
     * @return array<string, mixed>
     */
    public function toArrayRecursiveCamelCased(): array
    {
        return [
            'idCountry' => $this->idCountry instanceof AbstractTransfer ? $this->idCountry->toArray(true, true) : $this->idCountry,
            'iso2Code' => $this->iso2Code instanceof AbstractTransfer ? $this->iso2Code->toArray(true, true) : $this->iso2Code,
            'iso3Code' => $this->iso3Code instanceof AbstractTransfer ? $this->iso3Code->toArray(true, true) : $this->iso3Code,
            'name' => $this->name instanceof AbstractTransfer ? $this->name->toArray(true, true) : $this->name,
            'postalCodeMandatory' => $this->postalCodeMandatory instanceof AbstractTransfer ? $this->postalCodeMandatory->toArray(true, true) : $this->postalCodeMandatory,
            'postalCodeRegex' => $this->postalCodeRegex instanceof AbstractTransfer ? $this->postalCodeRegex->toArray(true, true) : $this->postalCodeRegex,
            'spyRegions' => $this->spyRegions instanceof AbstractTransfer ? $this->spyRegions->toArray(true, true) : $this->addValuesToCollection($this->spyRegions, true, true),
            'spyCountryStores' => $this->spyCountryStores instanceof AbstractTransfer ? $this->spyCountryStores->toArray(true, true) : $this->addValuesToCollection($this->spyCountryStores, true, true),
            'spyCompanyUnitAddresses' => $this->spyCompanyUnitAddresses instanceof AbstractTransfer ? $this->spyCompanyUnitAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyCompanyUnitAddresses, true, true),
            'spyStockAddresses' => $this->spyStockAddresses instanceof AbstractTransfer ? $this->spyStockAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyStockAddresses, true, true),
            'spyCustomerAddresses' => $this->spyCustomerAddresses instanceof AbstractTransfer ? $this->spyCustomerAddresses->toArray(true, true) : $this->addValuesToCollection($this->spyCustomerAddresses, true, true),
            'spyTaxRates' => $this->spyTaxRates instanceof AbstractTransfer ? $this->spyTaxRates->toArray(true, true) : $this->addValuesToCollection($this->spyTaxRates, true, true),
            'spySalesOrderAddresses' => $this->spySalesOrderAddresses instanceof AbstractTransfer ? $this->spySalesOrderAddresses->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderAddresses, true, true),
            'spySalesOrderAddressHistories' => $this->spySalesOrderAddressHistories instanceof AbstractTransfer ? $this->spySalesOrderAddressHistories->toArray(true, true) : $this->addValuesToCollection($this->spySalesOrderAddressHistories, true, true),
        ];
    }
}
