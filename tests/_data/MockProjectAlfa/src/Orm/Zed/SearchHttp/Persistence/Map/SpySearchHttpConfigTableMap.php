<?php

namespace Orm\Zed\SearchHttp\Persistence\Map;

use Orm\Zed\SearchHttp\Persistence\SpySearchHttpConfig;
use Orm\Zed\SearchHttp\Persistence\SpySearchHttpConfigQuery;
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
 * This class defines the structure of the 'spy_search_http_config' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpySearchHttpConfigTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.SearchHttp.Persistence.Map.SpySearchHttpConfigTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_search_http_config';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpySearchHttpConfig';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\SearchHttp\\Persistence\\SpySearchHttpConfig';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.SearchHttp.Persistence.SpySearchHttpConfig';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 7;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 7;

    /**
     * the column name for the id_search_http_config field
     */
    public const COL_ID_SEARCH_HTTP_CONFIG = 'spy_search_http_config.id_search_http_config';

    /**
     * the column name for the store_name field
     */
    public const COL_STORE_NAME = 'spy_search_http_config.store_name';

    /**
     * the column name for the data field
     */
    public const COL_DATA = 'spy_search_http_config.data';

    /**
     * the column name for the alias_keys field
     */
    public const COL_ALIAS_KEYS = 'spy_search_http_config.alias_keys';

    /**
     * the column name for the key field
     */
    public const COL_KEY = 'spy_search_http_config.key';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_search_http_config.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_search_http_config.updated_at';

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
        self::TYPE_PHPNAME       => ['IdSearchHttpConfig', 'StoreName', 'Data', 'AliasKeys', 'Key', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idSearchHttpConfig', 'storeName', 'data', 'aliasKeys', 'key', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpySearchHttpConfigTableMap::COL_ID_SEARCH_HTTP_CONFIG, SpySearchHttpConfigTableMap::COL_STORE_NAME, SpySearchHttpConfigTableMap::COL_DATA, SpySearchHttpConfigTableMap::COL_ALIAS_KEYS, SpySearchHttpConfigTableMap::COL_KEY, SpySearchHttpConfigTableMap::COL_CREATED_AT, SpySearchHttpConfigTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_search_http_config', 'store_name', 'data', 'alias_keys', 'key', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
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
        self::TYPE_PHPNAME       => ['IdSearchHttpConfig' => 0, 'StoreName' => 1, 'Data' => 2, 'AliasKeys' => 3, 'Key' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ],
        self::TYPE_CAMELNAME     => ['idSearchHttpConfig' => 0, 'storeName' => 1, 'data' => 2, 'aliasKeys' => 3, 'key' => 4, 'createdAt' => 5, 'updatedAt' => 6, ],
        self::TYPE_COLNAME       => [SpySearchHttpConfigTableMap::COL_ID_SEARCH_HTTP_CONFIG => 0, SpySearchHttpConfigTableMap::COL_STORE_NAME => 1, SpySearchHttpConfigTableMap::COL_DATA => 2, SpySearchHttpConfigTableMap::COL_ALIAS_KEYS => 3, SpySearchHttpConfigTableMap::COL_KEY => 4, SpySearchHttpConfigTableMap::COL_CREATED_AT => 5, SpySearchHttpConfigTableMap::COL_UPDATED_AT => 6, ],
        self::TYPE_FIELDNAME     => ['id_search_http_config' => 0, 'store_name' => 1, 'data' => 2, 'alias_keys' => 3, 'key' => 4, 'created_at' => 5, 'updated_at' => 6, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdSearchHttpConfig' => 'ID_SEARCH_HTTP_CONFIG',
        'SpySearchHttpConfig.IdSearchHttpConfig' => 'ID_SEARCH_HTTP_CONFIG',
        'idSearchHttpConfig' => 'ID_SEARCH_HTTP_CONFIG',
        'spySearchHttpConfig.idSearchHttpConfig' => 'ID_SEARCH_HTTP_CONFIG',
        'SpySearchHttpConfigTableMap::COL_ID_SEARCH_HTTP_CONFIG' => 'ID_SEARCH_HTTP_CONFIG',
        'COL_ID_SEARCH_HTTP_CONFIG' => 'ID_SEARCH_HTTP_CONFIG',
        'id_search_http_config' => 'ID_SEARCH_HTTP_CONFIG',
        'spy_search_http_config.id_search_http_config' => 'ID_SEARCH_HTTP_CONFIG',
        'StoreName' => 'STORE_NAME',
        'SpySearchHttpConfig.StoreName' => 'STORE_NAME',
        'storeName' => 'STORE_NAME',
        'spySearchHttpConfig.storeName' => 'STORE_NAME',
        'SpySearchHttpConfigTableMap::COL_STORE_NAME' => 'STORE_NAME',
        'COL_STORE_NAME' => 'STORE_NAME',
        'store_name' => 'STORE_NAME',
        'spy_search_http_config.store_name' => 'STORE_NAME',
        'Data' => 'DATA',
        'SpySearchHttpConfig.Data' => 'DATA',
        'data' => 'DATA',
        'spySearchHttpConfig.data' => 'DATA',
        'SpySearchHttpConfigTableMap::COL_DATA' => 'DATA',
        'COL_DATA' => 'DATA',
        'spy_search_http_config.data' => 'DATA',
        'AliasKeys' => 'ALIAS_KEYS',
        'SpySearchHttpConfig.AliasKeys' => 'ALIAS_KEYS',
        'aliasKeys' => 'ALIAS_KEYS',
        'spySearchHttpConfig.aliasKeys' => 'ALIAS_KEYS',
        'SpySearchHttpConfigTableMap::COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'alias_keys' => 'ALIAS_KEYS',
        'spy_search_http_config.alias_keys' => 'ALIAS_KEYS',
        'Key' => 'KEY',
        'SpySearchHttpConfig.Key' => 'KEY',
        'key' => 'KEY',
        'spySearchHttpConfig.key' => 'KEY',
        'SpySearchHttpConfigTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_search_http_config.key' => 'KEY',
        'CreatedAt' => 'CREATED_AT',
        'SpySearchHttpConfig.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spySearchHttpConfig.createdAt' => 'CREATED_AT',
        'SpySearchHttpConfigTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_search_http_config.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpySearchHttpConfig.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spySearchHttpConfig.updatedAt' => 'UPDATED_AT',
        'SpySearchHttpConfigTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_search_http_config.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_search_http_config');
        $this->setPhpName('SpySearchHttpConfig');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\SearchHttp\\Persistence\\SpySearchHttpConfig');
        $this->setPackage('src.Orm.Zed.SearchHttp.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_search_http_config_pk_seq');
        // columns
        $this->addPrimaryKey('id_search_http_config', 'IdSearchHttpConfig', 'BIGINT', true, null, null);
        $this->addColumn('store_name', 'StoreName', 'VARCHAR', false, 255, null);
        $this->addColumn('data', 'Data', 'CLOB', false, null, null);
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
            'synchronization' => ['resource' => ['value' => 'search_http_config'], 'queue_group' => ['value' => 'sync.http.search.config'], 'queue_pool' => NULL, 'key_suffix_column' => ['value' => 'store_name']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSearchHttpConfig', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSearchHttpConfig', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSearchHttpConfig', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSearchHttpConfig', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSearchHttpConfig', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSearchHttpConfig', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdSearchHttpConfig', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpySearchHttpConfigTableMap::CLASS_DEFAULT : SpySearchHttpConfigTableMap::OM_CLASS;
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
     * @return array (SpySearchHttpConfig object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpySearchHttpConfigTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpySearchHttpConfigTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpySearchHttpConfigTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpySearchHttpConfigTableMap::OM_CLASS;
            /** @var SpySearchHttpConfig $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpySearchHttpConfigTableMap::addInstanceToPool($obj, $key);
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
            $key = SpySearchHttpConfigTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpySearchHttpConfigTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpySearchHttpConfig $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpySearchHttpConfigTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpySearchHttpConfigTableMap::COL_ID_SEARCH_HTTP_CONFIG);
            $criteria->addSelectColumn(SpySearchHttpConfigTableMap::COL_STORE_NAME);
            $criteria->addSelectColumn(SpySearchHttpConfigTableMap::COL_DATA);
            $criteria->addSelectColumn(SpySearchHttpConfigTableMap::COL_ALIAS_KEYS);
            $criteria->addSelectColumn(SpySearchHttpConfigTableMap::COL_KEY);
            $criteria->addSelectColumn(SpySearchHttpConfigTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpySearchHttpConfigTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_search_http_config');
            $criteria->addSelectColumn($alias . '.store_name');
            $criteria->addSelectColumn($alias . '.data');
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
            $criteria->removeSelectColumn(SpySearchHttpConfigTableMap::COL_ID_SEARCH_HTTP_CONFIG);
            $criteria->removeSelectColumn(SpySearchHttpConfigTableMap::COL_STORE_NAME);
            $criteria->removeSelectColumn(SpySearchHttpConfigTableMap::COL_DATA);
            $criteria->removeSelectColumn(SpySearchHttpConfigTableMap::COL_ALIAS_KEYS);
            $criteria->removeSelectColumn(SpySearchHttpConfigTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpySearchHttpConfigTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpySearchHttpConfigTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_search_http_config');
            $criteria->removeSelectColumn($alias . '.store_name');
            $criteria->removeSelectColumn($alias . '.data');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpySearchHttpConfigTableMap::DATABASE_NAME)->getTable(SpySearchHttpConfigTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpySearchHttpConfig or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpySearchHttpConfig object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySearchHttpConfigTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\SearchHttp\Persistence\SpySearchHttpConfig) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpySearchHttpConfigTableMap::DATABASE_NAME);
            $criteria->add(SpySearchHttpConfigTableMap::COL_ID_SEARCH_HTTP_CONFIG, (array) $values, Criteria::IN);
        }

        $query = SpySearchHttpConfigQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpySearchHttpConfigTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpySearchHttpConfigTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_search_http_config table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpySearchHttpConfigQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpySearchHttpConfig or Criteria object.
     *
     * @param mixed $criteria Criteria or SpySearchHttpConfig object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySearchHttpConfigTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpySearchHttpConfig object
        }

        if ($criteria->containsKey(SpySearchHttpConfigTableMap::COL_ID_SEARCH_HTTP_CONFIG) && $criteria->keyContainsValue(SpySearchHttpConfigTableMap::COL_ID_SEARCH_HTTP_CONFIG) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpySearchHttpConfigTableMap::COL_ID_SEARCH_HTTP_CONFIG.')');
        }


        // Set the correct dbName
        $query = SpySearchHttpConfigQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
