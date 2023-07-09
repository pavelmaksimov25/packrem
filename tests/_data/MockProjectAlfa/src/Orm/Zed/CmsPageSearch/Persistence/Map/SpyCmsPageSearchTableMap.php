<?php

namespace Orm\Zed\CmsPageSearch\Persistence\Map;

use Orm\Zed\CmsPageSearch\Persistence\SpyCmsPageSearch;
use Orm\Zed\CmsPageSearch\Persistence\SpyCmsPageSearchQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'spy_cms_page_search' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyCmsPageSearchTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.CmsPageSearch.Persistence.Map.SpyCmsPageSearchTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_cms_page_search';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyCmsPageSearch';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\CmsPageSearch\\Persistence\\SpyCmsPageSearch';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.CmsPageSearch.Persistence.SpyCmsPageSearch';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 10;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 10;

    /**
     * the column name for the id_cms_page_search field
     */
    public const COL_ID_CMS_PAGE_SEARCH = 'spy_cms_page_search.id_cms_page_search';

    /**
     * the column name for the fk_cms_page field
     */
    public const COL_FK_CMS_PAGE = 'spy_cms_page_search.fk_cms_page';

    /**
     * the column name for the structured_data field
     */
    public const COL_STRUCTURED_DATA = 'spy_cms_page_search.structured_data';

    /**
     * the column name for the data field
     */
    public const COL_DATA = 'spy_cms_page_search.data';

    /**
     * the column name for the store field
     */
    public const COL_STORE = 'spy_cms_page_search.store';

    /**
     * the column name for the locale field
     */
    public const COL_LOCALE = 'spy_cms_page_search.locale';

    /**
     * the column name for the alias_keys field
     */
    public const COL_ALIAS_KEYS = 'spy_cms_page_search.alias_keys';

    /**
     * the column name for the key field
     */
    public const COL_KEY = 'spy_cms_page_search.key';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_cms_page_search.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_cms_page_search.updated_at';

    /**
     * The default string format for model objects of the related table
     */
    public const DEFAULT_STRING_FORMAT = 'YAML';

    /**
     * holds an array of fieldnames
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
     *
     * @var array<string, mixed>
     */
    protected static $fieldNames = [
        self::TYPE_PHPNAME       => ['IdCmsPageSearch', 'FkCmsPage', 'StructuredData', 'Data', 'Store', 'Locale', 'AliasKeys', 'Key', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idCmsPageSearch', 'fkCmsPage', 'structuredData', 'data', 'store', 'locale', 'aliasKeys', 'key', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyCmsPageSearchTableMap::COL_ID_CMS_PAGE_SEARCH, SpyCmsPageSearchTableMap::COL_FK_CMS_PAGE, SpyCmsPageSearchTableMap::COL_STRUCTURED_DATA, SpyCmsPageSearchTableMap::COL_DATA, SpyCmsPageSearchTableMap::COL_STORE, SpyCmsPageSearchTableMap::COL_LOCALE, SpyCmsPageSearchTableMap::COL_ALIAS_KEYS, SpyCmsPageSearchTableMap::COL_KEY, SpyCmsPageSearchTableMap::COL_CREATED_AT, SpyCmsPageSearchTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_cms_page_search', 'fk_cms_page', 'structured_data', 'data', 'store', 'locale', 'alias_keys', 'key', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ]
    ];

    /**
     * holds an array of keys for quick access to the fieldnames array
     *
     * first dimension keys are the type constants
     * e.g. self::$fieldKeys[self::TYPE_PHPNAME]['Id'] = 0
     *
     * @var array<string, mixed>
     */
    protected static $fieldKeys = [
        self::TYPE_PHPNAME       => ['IdCmsPageSearch' => 0, 'FkCmsPage' => 1, 'StructuredData' => 2, 'Data' => 3, 'Store' => 4, 'Locale' => 5, 'AliasKeys' => 6, 'Key' => 7, 'CreatedAt' => 8, 'UpdatedAt' => 9, ],
        self::TYPE_CAMELNAME     => ['idCmsPageSearch' => 0, 'fkCmsPage' => 1, 'structuredData' => 2, 'data' => 3, 'store' => 4, 'locale' => 5, 'aliasKeys' => 6, 'key' => 7, 'createdAt' => 8, 'updatedAt' => 9, ],
        self::TYPE_COLNAME       => [SpyCmsPageSearchTableMap::COL_ID_CMS_PAGE_SEARCH => 0, SpyCmsPageSearchTableMap::COL_FK_CMS_PAGE => 1, SpyCmsPageSearchTableMap::COL_STRUCTURED_DATA => 2, SpyCmsPageSearchTableMap::COL_DATA => 3, SpyCmsPageSearchTableMap::COL_STORE => 4, SpyCmsPageSearchTableMap::COL_LOCALE => 5, SpyCmsPageSearchTableMap::COL_ALIAS_KEYS => 6, SpyCmsPageSearchTableMap::COL_KEY => 7, SpyCmsPageSearchTableMap::COL_CREATED_AT => 8, SpyCmsPageSearchTableMap::COL_UPDATED_AT => 9, ],
        self::TYPE_FIELDNAME     => ['id_cms_page_search' => 0, 'fk_cms_page' => 1, 'structured_data' => 2, 'data' => 3, 'store' => 4, 'locale' => 5, 'alias_keys' => 6, 'key' => 7, 'created_at' => 8, 'updated_at' => 9, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdCmsPageSearch' => 'ID_CMS_PAGE_SEARCH',
        'SpyCmsPageSearch.IdCmsPageSearch' => 'ID_CMS_PAGE_SEARCH',
        'idCmsPageSearch' => 'ID_CMS_PAGE_SEARCH',
        'spyCmsPageSearch.idCmsPageSearch' => 'ID_CMS_PAGE_SEARCH',
        'SpyCmsPageSearchTableMap::COL_ID_CMS_PAGE_SEARCH' => 'ID_CMS_PAGE_SEARCH',
        'COL_ID_CMS_PAGE_SEARCH' => 'ID_CMS_PAGE_SEARCH',
        'id_cms_page_search' => 'ID_CMS_PAGE_SEARCH',
        'spy_cms_page_search.id_cms_page_search' => 'ID_CMS_PAGE_SEARCH',
        'FkCmsPage' => 'FK_CMS_PAGE',
        'SpyCmsPageSearch.FkCmsPage' => 'FK_CMS_PAGE',
        'fkCmsPage' => 'FK_CMS_PAGE',
        'spyCmsPageSearch.fkCmsPage' => 'FK_CMS_PAGE',
        'SpyCmsPageSearchTableMap::COL_FK_CMS_PAGE' => 'FK_CMS_PAGE',
        'COL_FK_CMS_PAGE' => 'FK_CMS_PAGE',
        'fk_cms_page' => 'FK_CMS_PAGE',
        'spy_cms_page_search.fk_cms_page' => 'FK_CMS_PAGE',
        'StructuredData' => 'STRUCTURED_DATA',
        'SpyCmsPageSearch.StructuredData' => 'STRUCTURED_DATA',
        'structuredData' => 'STRUCTURED_DATA',
        'spyCmsPageSearch.structuredData' => 'STRUCTURED_DATA',
        'SpyCmsPageSearchTableMap::COL_STRUCTURED_DATA' => 'STRUCTURED_DATA',
        'COL_STRUCTURED_DATA' => 'STRUCTURED_DATA',
        'structured_data' => 'STRUCTURED_DATA',
        'spy_cms_page_search.structured_data' => 'STRUCTURED_DATA',
        'Data' => 'DATA',
        'SpyCmsPageSearch.Data' => 'DATA',
        'data' => 'DATA',
        'spyCmsPageSearch.data' => 'DATA',
        'SpyCmsPageSearchTableMap::COL_DATA' => 'DATA',
        'COL_DATA' => 'DATA',
        'spy_cms_page_search.data' => 'DATA',
        'Store' => 'STORE',
        'SpyCmsPageSearch.Store' => 'STORE',
        'store' => 'STORE',
        'spyCmsPageSearch.store' => 'STORE',
        'SpyCmsPageSearchTableMap::COL_STORE' => 'STORE',
        'COL_STORE' => 'STORE',
        'spy_cms_page_search.store' => 'STORE',
        'Locale' => 'LOCALE',
        'SpyCmsPageSearch.Locale' => 'LOCALE',
        'locale' => 'LOCALE',
        'spyCmsPageSearch.locale' => 'LOCALE',
        'SpyCmsPageSearchTableMap::COL_LOCALE' => 'LOCALE',
        'COL_LOCALE' => 'LOCALE',
        'spy_cms_page_search.locale' => 'LOCALE',
        'AliasKeys' => 'ALIAS_KEYS',
        'SpyCmsPageSearch.AliasKeys' => 'ALIAS_KEYS',
        'aliasKeys' => 'ALIAS_KEYS',
        'spyCmsPageSearch.aliasKeys' => 'ALIAS_KEYS',
        'SpyCmsPageSearchTableMap::COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'alias_keys' => 'ALIAS_KEYS',
        'spy_cms_page_search.alias_keys' => 'ALIAS_KEYS',
        'Key' => 'KEY',
        'SpyCmsPageSearch.Key' => 'KEY',
        'key' => 'KEY',
        'spyCmsPageSearch.key' => 'KEY',
        'SpyCmsPageSearchTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_cms_page_search.key' => 'KEY',
        'CreatedAt' => 'CREATED_AT',
        'SpyCmsPageSearch.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyCmsPageSearch.createdAt' => 'CREATED_AT',
        'SpyCmsPageSearchTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_cms_page_search.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyCmsPageSearch.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyCmsPageSearch.updatedAt' => 'UPDATED_AT',
        'SpyCmsPageSearchTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_cms_page_search.updated_at' => 'UPDATED_AT',
    ];

    /**
     * Initialize the table attributes and columns
     * Relations are not initialized by this method since they are lazy loaded
     *
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function initialize(): void
    {
        // attributes
        $this->setName('spy_cms_page_search');
        $this->setPhpName('SpyCmsPageSearch');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\CmsPageSearch\\Persistence\\SpyCmsPageSearch');
        $this->setPackage('src.Orm.Zed.CmsPageSearch.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_cms_page_search_pk_seq');
        // columns
        $this->addPrimaryKey('id_cms_page_search', 'IdCmsPageSearch', 'BIGINT', true, null, null);
        $this->addColumn('fk_cms_page', 'FkCmsPage', 'INTEGER', true, null, null);
        $this->addColumn('structured_data', 'StructuredData', 'LONGVARCHAR', true, null, null);
        $this->addColumn('data', 'Data', 'CLOB', false, null, null);
        $this->addColumn('store', 'Store', 'VARCHAR', false, 128, null);
        $this->addColumn('locale', 'Locale', 'VARCHAR', true, 16, null);
        $this->addColumn('alias_keys', 'AliasKeys', 'VARCHAR', false, 255, null);
        $this->addColumn('key', 'Key', 'VARCHAR', false, 255, null);
        $this->addColumn('created_at', 'CreatedAt', 'TIMESTAMP', false, null, null);
        $this->addColumn('updated_at', 'UpdatedAt', 'TIMESTAMP', false, null, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
    }

    /**
     *
     * Gets the list of behaviors registered for this table
     *
     * @return array<string, array> Associative array (name => parameters) of behaviors
     */
    public function getBehaviors(): array
    {
        return [
            'synchronization' => ['resource' => ['value' => 'cms_page'], 'queue_group' => ['value' => 'sync.search.cms'], 'queue_pool' => NULL, 'locale' => ['required' => 'true'], 'store' => ['required' => 'false'], 'key_suffix_column' => ['value' => 'fk_cms_page'], 'params' => ['value' => '{"type":"page"}']],
            'timestampable' => ['create_column' => 'created_at', 'update_column' => 'updated_at', 'disable_created_at' => 'false', 'disable_updated_at' => 'false'],
        ];
    }

    /**
     * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
     *
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, a serialize()d version of the primary key will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return string|null The primary key hash of the row
     */
    public static function getPrimaryKeyHashFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): ?string
    {
        // If the PK cannot be derived from the row, return NULL.
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsPageSearch', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsPageSearch', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsPageSearch', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsPageSearch', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsPageSearch', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdCmsPageSearch', TableMap::TYPE_PHPNAME, $indexType)];
    }

    /**
     * Retrieves the primary key from the DB resultset row
     * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
     * a multi-column primary key, an array of the primary key columns will be returned.
     *
     * @param array $row Resultset row.
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM
     *
     * @return mixed The primary key of the row
     */
    public static function getPrimaryKeyFromRow(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM)
    {
        return (string) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('IdCmsPageSearch', TableMap::TYPE_PHPNAME, $indexType)
        ];
    }

    /**
     * The class that the tableMap will make instances of.
     *
     * If $withPrefix is true, the returned path
     * uses a dot-path notation which is translated into a path
     * relative to a location on the PHP include_path.
     * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
     *
     * @param bool $withPrefix Whether to return the path with the class name
     * @return string path.to.ClassName
     */
    public static function getOMClass(bool $withPrefix = true): string
    {
        return $withPrefix ? SpyCmsPageSearchTableMap::CLASS_DEFAULT : SpyCmsPageSearchTableMap::OM_CLASS;
    }

    /**
     * Populates an object of the default type or an object that inherit from the default.
     *
     * @param array $row Row returned by DataFetcher->fetch().
     * @param int $offset The 0-based offset for reading from the resultset row.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                 One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                           TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return array (SpyCmsPageSearch object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyCmsPageSearchTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyCmsPageSearchTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyCmsPageSearchTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyCmsPageSearchTableMap::OM_CLASS;
            /** @var SpyCmsPageSearch $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyCmsPageSearchTableMap::addInstanceToPool($obj, $key);
        }

        return [$obj, $col];
    }

    /**
     * The returned array will contain objects of the default type or
     * objects that inherit from the default.
     *
     * @param DataFetcherInterface $dataFetcher
     * @return array<object>
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function populateObjects(DataFetcherInterface $dataFetcher): array
    {
        $results = [];

        // set the class once to avoid overhead in the loop
        $cls = static::getOMClass(false);
        // populate the object(s)
        while ($row = $dataFetcher->fetch()) {
            $key = SpyCmsPageSearchTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyCmsPageSearchTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyCmsPageSearch $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyCmsPageSearchTableMap::addInstanceToPool($obj, $key);
            } // if key exists
        }

        return $results;
    }
    /**
     * Add all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be added to the select list and only loaded
     * on demand.
     *
     * @param Criteria $criteria Object containing the columns to add.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function addSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->addSelectColumn(SpyCmsPageSearchTableMap::COL_ID_CMS_PAGE_SEARCH);
            $criteria->addSelectColumn(SpyCmsPageSearchTableMap::COL_FK_CMS_PAGE);
            $criteria->addSelectColumn(SpyCmsPageSearchTableMap::COL_STRUCTURED_DATA);
            $criteria->addSelectColumn(SpyCmsPageSearchTableMap::COL_DATA);
            $criteria->addSelectColumn(SpyCmsPageSearchTableMap::COL_STORE);
            $criteria->addSelectColumn(SpyCmsPageSearchTableMap::COL_LOCALE);
            $criteria->addSelectColumn(SpyCmsPageSearchTableMap::COL_ALIAS_KEYS);
            $criteria->addSelectColumn(SpyCmsPageSearchTableMap::COL_KEY);
            $criteria->addSelectColumn(SpyCmsPageSearchTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyCmsPageSearchTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_cms_page_search');
            $criteria->addSelectColumn($alias . '.fk_cms_page');
            $criteria->addSelectColumn($alias . '.structured_data');
            $criteria->addSelectColumn($alias . '.data');
            $criteria->addSelectColumn($alias . '.store');
            $criteria->addSelectColumn($alias . '.locale');
            $criteria->addSelectColumn($alias . '.alias_keys');
            $criteria->addSelectColumn($alias . '.key');
            $criteria->addSelectColumn($alias . '.created_at');
            $criteria->addSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Remove all the columns needed to create a new object.
     *
     * Note: any columns that were marked with lazyLoad="true" in the
     * XML schema will not be removed as they are only loaded on demand.
     *
     * @param Criteria $criteria Object containing the columns to remove.
     * @param string|null $alias Optional table alias
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     * @return void
     */
    public static function removeSelectColumns(Criteria $criteria, ?string $alias = null): void
    {
        if (null === $alias) {
            $criteria->removeSelectColumn(SpyCmsPageSearchTableMap::COL_ID_CMS_PAGE_SEARCH);
            $criteria->removeSelectColumn(SpyCmsPageSearchTableMap::COL_FK_CMS_PAGE);
            $criteria->removeSelectColumn(SpyCmsPageSearchTableMap::COL_STRUCTURED_DATA);
            $criteria->removeSelectColumn(SpyCmsPageSearchTableMap::COL_DATA);
            $criteria->removeSelectColumn(SpyCmsPageSearchTableMap::COL_STORE);
            $criteria->removeSelectColumn(SpyCmsPageSearchTableMap::COL_LOCALE);
            $criteria->removeSelectColumn(SpyCmsPageSearchTableMap::COL_ALIAS_KEYS);
            $criteria->removeSelectColumn(SpyCmsPageSearchTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpyCmsPageSearchTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyCmsPageSearchTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_cms_page_search');
            $criteria->removeSelectColumn($alias . '.fk_cms_page');
            $criteria->removeSelectColumn($alias . '.structured_data');
            $criteria->removeSelectColumn($alias . '.data');
            $criteria->removeSelectColumn($alias . '.store');
            $criteria->removeSelectColumn($alias . '.locale');
            $criteria->removeSelectColumn($alias . '.alias_keys');
            $criteria->removeSelectColumn($alias . '.key');
            $criteria->removeSelectColumn($alias . '.created_at');
            $criteria->removeSelectColumn($alias . '.updated_at');
        }
    }

    /**
     * Returns the TableMap related to this object.
     * This method is not needed for general use but a specific application could have a need.
     * @return TableMap
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function getTableMap(): TableMap
    {
        return Propel::getServiceContainer()->getDatabaseMap(SpyCmsPageSearchTableMap::DATABASE_NAME)->getTable(SpyCmsPageSearchTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyCmsPageSearch or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyCmsPageSearch object or primary key or array of primary keys
     *              which is used to create the DELETE statement
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
     public static function doDelete($values, ?ConnectionInterface $con = null): int
     {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsPageSearchTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\CmsPageSearch\Persistence\SpyCmsPageSearch) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyCmsPageSearchTableMap::DATABASE_NAME);
            $criteria->add(SpyCmsPageSearchTableMap::COL_ID_CMS_PAGE_SEARCH, (array) $values, Criteria::IN);
        }

        $query = SpyCmsPageSearchQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyCmsPageSearchTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyCmsPageSearchTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_cms_page_search table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyCmsPageSearchQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyCmsPageSearch or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyCmsPageSearch object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsPageSearchTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyCmsPageSearch object
        }

        if ($criteria->containsKey(SpyCmsPageSearchTableMap::COL_ID_CMS_PAGE_SEARCH) && $criteria->keyContainsValue(SpyCmsPageSearchTableMap::COL_ID_CMS_PAGE_SEARCH) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyCmsPageSearchTableMap::COL_ID_CMS_PAGE_SEARCH.')');
        }


        // Set the correct dbName
        $query = SpyCmsPageSearchQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
