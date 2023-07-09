<?php

namespace Orm\Zed\ProductMeasurementUnitStorage\Persistence\Map;

use Orm\Zed\ProductMeasurementUnitStorage\Persistence\SpyProductMeasurementUnitStorage;
use Orm\Zed\ProductMeasurementUnitStorage\Persistence\SpyProductMeasurementUnitStorageQuery;
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
 * This class defines the structure of the 'spy_product_measurement_unit_storage' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductMeasurementUnitStorageTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.ProductMeasurementUnitStorage.Persistence.Map.SpyProductMeasurementUnitStorageTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_product_measurement_unit_storage';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyProductMeasurementUnitStorage';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\ProductMeasurementUnitStorage\\Persistence\\SpyProductMeasurementUnitStorage';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.ProductMeasurementUnitStorage.Persistence.SpyProductMeasurementUnitStorage';

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
     * the column name for the id_product_measurement_unit_storage field
     */
    public const COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE = 'spy_product_measurement_unit_storage.id_product_measurement_unit_storage';

    /**
     * the column name for the fk_product_measurement_unit field
     */
    public const COL_FK_PRODUCT_MEASUREMENT_UNIT = 'spy_product_measurement_unit_storage.fk_product_measurement_unit';

    /**
     * the column name for the data field
     */
    public const COL_DATA = 'spy_product_measurement_unit_storage.data';

    /**
     * the column name for the key field
     */
    public const COL_KEY = 'spy_product_measurement_unit_storage.key';

    /**
     * the column name for the alias_keys field
     */
    public const COL_ALIAS_KEYS = 'spy_product_measurement_unit_storage.alias_keys';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_product_measurement_unit_storage.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_product_measurement_unit_storage.updated_at';

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
        self::TYPE_PHPNAME       => ['IdProductMeasurementUnitStorage', 'FkProductMeasurementUnit', 'Data', 'Key', 'AliasKeys', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idProductMeasurementUnitStorage', 'fkProductMeasurementUnit', 'data', 'key', 'aliasKeys', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyProductMeasurementUnitStorageTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE, SpyProductMeasurementUnitStorageTableMap::COL_FK_PRODUCT_MEASUREMENT_UNIT, SpyProductMeasurementUnitStorageTableMap::COL_DATA, SpyProductMeasurementUnitStorageTableMap::COL_KEY, SpyProductMeasurementUnitStorageTableMap::COL_ALIAS_KEYS, SpyProductMeasurementUnitStorageTableMap::COL_CREATED_AT, SpyProductMeasurementUnitStorageTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_product_measurement_unit_storage', 'fk_product_measurement_unit', 'data', 'key', 'alias_keys', 'created_at', 'updated_at', ],
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
        self::TYPE_PHPNAME       => ['IdProductMeasurementUnitStorage' => 0, 'FkProductMeasurementUnit' => 1, 'Data' => 2, 'Key' => 3, 'AliasKeys' => 4, 'CreatedAt' => 5, 'UpdatedAt' => 6, ],
        self::TYPE_CAMELNAME     => ['idProductMeasurementUnitStorage' => 0, 'fkProductMeasurementUnit' => 1, 'data' => 2, 'key' => 3, 'aliasKeys' => 4, 'createdAt' => 5, 'updatedAt' => 6, ],
        self::TYPE_COLNAME       => [SpyProductMeasurementUnitStorageTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE => 0, SpyProductMeasurementUnitStorageTableMap::COL_FK_PRODUCT_MEASUREMENT_UNIT => 1, SpyProductMeasurementUnitStorageTableMap::COL_DATA => 2, SpyProductMeasurementUnitStorageTableMap::COL_KEY => 3, SpyProductMeasurementUnitStorageTableMap::COL_ALIAS_KEYS => 4, SpyProductMeasurementUnitStorageTableMap::COL_CREATED_AT => 5, SpyProductMeasurementUnitStorageTableMap::COL_UPDATED_AT => 6, ],
        self::TYPE_FIELDNAME     => ['id_product_measurement_unit_storage' => 0, 'fk_product_measurement_unit' => 1, 'data' => 2, 'key' => 3, 'alias_keys' => 4, 'created_at' => 5, 'updated_at' => 6, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdProductMeasurementUnitStorage' => 'ID_PRODUCT_MEASUREMENT_UNIT_STORAGE',
        'SpyProductMeasurementUnitStorage.IdProductMeasurementUnitStorage' => 'ID_PRODUCT_MEASUREMENT_UNIT_STORAGE',
        'idProductMeasurementUnitStorage' => 'ID_PRODUCT_MEASUREMENT_UNIT_STORAGE',
        'spyProductMeasurementUnitStorage.idProductMeasurementUnitStorage' => 'ID_PRODUCT_MEASUREMENT_UNIT_STORAGE',
        'SpyProductMeasurementUnitStorageTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE' => 'ID_PRODUCT_MEASUREMENT_UNIT_STORAGE',
        'COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE' => 'ID_PRODUCT_MEASUREMENT_UNIT_STORAGE',
        'id_product_measurement_unit_storage' => 'ID_PRODUCT_MEASUREMENT_UNIT_STORAGE',
        'spy_product_measurement_unit_storage.id_product_measurement_unit_storage' => 'ID_PRODUCT_MEASUREMENT_UNIT_STORAGE',
        'FkProductMeasurementUnit' => 'FK_PRODUCT_MEASUREMENT_UNIT',
        'SpyProductMeasurementUnitStorage.FkProductMeasurementUnit' => 'FK_PRODUCT_MEASUREMENT_UNIT',
        'fkProductMeasurementUnit' => 'FK_PRODUCT_MEASUREMENT_UNIT',
        'spyProductMeasurementUnitStorage.fkProductMeasurementUnit' => 'FK_PRODUCT_MEASUREMENT_UNIT',
        'SpyProductMeasurementUnitStorageTableMap::COL_FK_PRODUCT_MEASUREMENT_UNIT' => 'FK_PRODUCT_MEASUREMENT_UNIT',
        'COL_FK_PRODUCT_MEASUREMENT_UNIT' => 'FK_PRODUCT_MEASUREMENT_UNIT',
        'fk_product_measurement_unit' => 'FK_PRODUCT_MEASUREMENT_UNIT',
        'spy_product_measurement_unit_storage.fk_product_measurement_unit' => 'FK_PRODUCT_MEASUREMENT_UNIT',
        'Data' => 'DATA',
        'SpyProductMeasurementUnitStorage.Data' => 'DATA',
        'data' => 'DATA',
        'spyProductMeasurementUnitStorage.data' => 'DATA',
        'SpyProductMeasurementUnitStorageTableMap::COL_DATA' => 'DATA',
        'COL_DATA' => 'DATA',
        'spy_product_measurement_unit_storage.data' => 'DATA',
        'Key' => 'KEY',
        'SpyProductMeasurementUnitStorage.Key' => 'KEY',
        'key' => 'KEY',
        'spyProductMeasurementUnitStorage.key' => 'KEY',
        'SpyProductMeasurementUnitStorageTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_product_measurement_unit_storage.key' => 'KEY',
        'AliasKeys' => 'ALIAS_KEYS',
        'SpyProductMeasurementUnitStorage.AliasKeys' => 'ALIAS_KEYS',
        'aliasKeys' => 'ALIAS_KEYS',
        'spyProductMeasurementUnitStorage.aliasKeys' => 'ALIAS_KEYS',
        'SpyProductMeasurementUnitStorageTableMap::COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'COL_ALIAS_KEYS' => 'ALIAS_KEYS',
        'alias_keys' => 'ALIAS_KEYS',
        'spy_product_measurement_unit_storage.alias_keys' => 'ALIAS_KEYS',
        'CreatedAt' => 'CREATED_AT',
        'SpyProductMeasurementUnitStorage.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyProductMeasurementUnitStorage.createdAt' => 'CREATED_AT',
        'SpyProductMeasurementUnitStorageTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_product_measurement_unit_storage.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyProductMeasurementUnitStorage.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyProductMeasurementUnitStorage.updatedAt' => 'UPDATED_AT',
        'SpyProductMeasurementUnitStorageTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_product_measurement_unit_storage.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_product_measurement_unit_storage');
        $this->setPhpName('SpyProductMeasurementUnitStorage');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\ProductMeasurementUnitStorage\\Persistence\\SpyProductMeasurementUnitStorage');
        $this->setPackage('src.Orm.Zed.ProductMeasurementUnitStorage.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('id_product_measurement_unit_storage_pk_seq');
        // columns
        $this->addPrimaryKey('id_product_measurement_unit_storage', 'IdProductMeasurementUnitStorage', 'INTEGER', true, null, null);
        $this->addColumn('fk_product_measurement_unit', 'FkProductMeasurementUnit', 'INTEGER', true, null, null);
        $this->addColumn('data', 'Data', 'LONGVARCHAR', false, null, null);
        $this->addColumn('key', 'Key', 'VARCHAR', true, 1024, null);
        $this->addColumn('alias_keys', 'AliasKeys', 'VARCHAR', false, 255, null);
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
            'synchronization' => ['resource' => ['value' => 'product_measurement_unit'], 'queue_group' => ['value' => 'sync.storage.product'], 'queue_pool' => ['value' => 'synchronizationPool'], 'key_suffix_column' => ['value' => 'fk_product_measurement_unit'], 'mappings' => ['value' => 'code:id_product_measurement_unit']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnitStorage', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnitStorage', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnitStorage', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnitStorage', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnitStorage', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnitStorage', TableMap::TYPE_PHPNAME, $indexType)];
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
        return (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('IdProductMeasurementUnitStorage', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductMeasurementUnitStorageTableMap::CLASS_DEFAULT : SpyProductMeasurementUnitStorageTableMap::OM_CLASS;
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
     * @return array (SpyProductMeasurementUnitStorage object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyProductMeasurementUnitStorageTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductMeasurementUnitStorageTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductMeasurementUnitStorageTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductMeasurementUnitStorageTableMap::OM_CLASS;
            /** @var SpyProductMeasurementUnitStorage $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductMeasurementUnitStorageTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductMeasurementUnitStorageTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductMeasurementUnitStorageTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductMeasurementUnitStorage $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductMeasurementUnitStorageTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE);
            $criteria->addSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_FK_PRODUCT_MEASUREMENT_UNIT);
            $criteria->addSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_DATA);
            $criteria->addSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_KEY);
            $criteria->addSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_ALIAS_KEYS);
            $criteria->addSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_measurement_unit_storage');
            $criteria->addSelectColumn($alias . '.fk_product_measurement_unit');
            $criteria->addSelectColumn($alias . '.data');
            $criteria->addSelectColumn($alias . '.key');
            $criteria->addSelectColumn($alias . '.alias_keys');
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
            $criteria->removeSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_FK_PRODUCT_MEASUREMENT_UNIT);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_DATA);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_ALIAS_KEYS);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitStorageTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_measurement_unit_storage');
            $criteria->removeSelectColumn($alias . '.fk_product_measurement_unit');
            $criteria->removeSelectColumn($alias . '.data');
            $criteria->removeSelectColumn($alias . '.key');
            $criteria->removeSelectColumn($alias . '.alias_keys');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductMeasurementUnitStorageTableMap::DATABASE_NAME)->getTable(SpyProductMeasurementUnitStorageTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductMeasurementUnitStorage or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyProductMeasurementUnitStorage object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductMeasurementUnitStorageTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ProductMeasurementUnitStorage\Persistence\SpyProductMeasurementUnitStorage) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductMeasurementUnitStorageTableMap::DATABASE_NAME);
            $criteria->add(SpyProductMeasurementUnitStorageTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE, (array) $values, Criteria::IN);
        }

        $query = SpyProductMeasurementUnitStorageQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductMeasurementUnitStorageTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductMeasurementUnitStorageTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_measurement_unit_storage table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyProductMeasurementUnitStorageQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductMeasurementUnitStorage or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyProductMeasurementUnitStorage object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductMeasurementUnitStorageTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductMeasurementUnitStorage object
        }

        if ($criteria->containsKey(SpyProductMeasurementUnitStorageTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE) && $criteria->keyContainsValue(SpyProductMeasurementUnitStorageTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyProductMeasurementUnitStorageTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT_STORAGE.')');
        }


        // Set the correct dbName
        $query = SpyProductMeasurementUnitStorageQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
