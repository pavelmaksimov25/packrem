<?php

namespace Orm\Zed\SalesOrderThreshold\Persistence\Map;

use Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdType;
use Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdTypeQuery;
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
 * This class defines the structure of the 'spy_sales_order_threshold_type' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpySalesOrderThresholdTypeTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.SalesOrderThreshold.Persistence.Map.SpySalesOrderThresholdTypeTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_sales_order_threshold_type';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpySalesOrderThresholdType';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\SalesOrderThreshold\\Persistence\\SpySalesOrderThresholdType';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.SalesOrderThreshold.Persistence.SpySalesOrderThresholdType';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 5;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 5;

    /**
     * the column name for the id_sales_order_threshold_type field
     */
    public const COL_ID_SALES_ORDER_THRESHOLD_TYPE = 'spy_sales_order_threshold_type.id_sales_order_threshold_type';

    /**
     * the column name for the key field
     */
    public const COL_KEY = 'spy_sales_order_threshold_type.key';

    /**
     * the column name for the threshold_group field
     */
    public const COL_THRESHOLD_GROUP = 'spy_sales_order_threshold_type.threshold_group';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_sales_order_threshold_type.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_sales_order_threshold_type.updated_at';

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
        self::TYPE_PHPNAME       => ['IdSalesOrderThresholdType', 'Key', 'ThresholdGroup', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idSalesOrderThresholdType', 'key', 'thresholdGroup', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpySalesOrderThresholdTypeTableMap::COL_ID_SALES_ORDER_THRESHOLD_TYPE, SpySalesOrderThresholdTypeTableMap::COL_KEY, SpySalesOrderThresholdTypeTableMap::COL_THRESHOLD_GROUP, SpySalesOrderThresholdTypeTableMap::COL_CREATED_AT, SpySalesOrderThresholdTypeTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_sales_order_threshold_type', 'key', 'threshold_group', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, ]
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
        self::TYPE_PHPNAME       => ['IdSalesOrderThresholdType' => 0, 'Key' => 1, 'ThresholdGroup' => 2, 'CreatedAt' => 3, 'UpdatedAt' => 4, ],
        self::TYPE_CAMELNAME     => ['idSalesOrderThresholdType' => 0, 'key' => 1, 'thresholdGroup' => 2, 'createdAt' => 3, 'updatedAt' => 4, ],
        self::TYPE_COLNAME       => [SpySalesOrderThresholdTypeTableMap::COL_ID_SALES_ORDER_THRESHOLD_TYPE => 0, SpySalesOrderThresholdTypeTableMap::COL_KEY => 1, SpySalesOrderThresholdTypeTableMap::COL_THRESHOLD_GROUP => 2, SpySalesOrderThresholdTypeTableMap::COL_CREATED_AT => 3, SpySalesOrderThresholdTypeTableMap::COL_UPDATED_AT => 4, ],
        self::TYPE_FIELDNAME     => ['id_sales_order_threshold_type' => 0, 'key' => 1, 'threshold_group' => 2, 'created_at' => 3, 'updated_at' => 4, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdSalesOrderThresholdType' => 'ID_SALES_ORDER_THRESHOLD_TYPE',
        'SpySalesOrderThresholdType.IdSalesOrderThresholdType' => 'ID_SALES_ORDER_THRESHOLD_TYPE',
        'idSalesOrderThresholdType' => 'ID_SALES_ORDER_THRESHOLD_TYPE',
        'spySalesOrderThresholdType.idSalesOrderThresholdType' => 'ID_SALES_ORDER_THRESHOLD_TYPE',
        'SpySalesOrderThresholdTypeTableMap::COL_ID_SALES_ORDER_THRESHOLD_TYPE' => 'ID_SALES_ORDER_THRESHOLD_TYPE',
        'COL_ID_SALES_ORDER_THRESHOLD_TYPE' => 'ID_SALES_ORDER_THRESHOLD_TYPE',
        'id_sales_order_threshold_type' => 'ID_SALES_ORDER_THRESHOLD_TYPE',
        'spy_sales_order_threshold_type.id_sales_order_threshold_type' => 'ID_SALES_ORDER_THRESHOLD_TYPE',
        'Key' => 'KEY',
        'SpySalesOrderThresholdType.Key' => 'KEY',
        'key' => 'KEY',
        'spySalesOrderThresholdType.key' => 'KEY',
        'SpySalesOrderThresholdTypeTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_sales_order_threshold_type.key' => 'KEY',
        'ThresholdGroup' => 'THRESHOLD_GROUP',
        'SpySalesOrderThresholdType.ThresholdGroup' => 'THRESHOLD_GROUP',
        'thresholdGroup' => 'THRESHOLD_GROUP',
        'spySalesOrderThresholdType.thresholdGroup' => 'THRESHOLD_GROUP',
        'SpySalesOrderThresholdTypeTableMap::COL_THRESHOLD_GROUP' => 'THRESHOLD_GROUP',
        'COL_THRESHOLD_GROUP' => 'THRESHOLD_GROUP',
        'threshold_group' => 'THRESHOLD_GROUP',
        'spy_sales_order_threshold_type.threshold_group' => 'THRESHOLD_GROUP',
        'CreatedAt' => 'CREATED_AT',
        'SpySalesOrderThresholdType.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spySalesOrderThresholdType.createdAt' => 'CREATED_AT',
        'SpySalesOrderThresholdTypeTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_sales_order_threshold_type.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpySalesOrderThresholdType.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spySalesOrderThresholdType.updatedAt' => 'UPDATED_AT',
        'SpySalesOrderThresholdTypeTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_sales_order_threshold_type.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_sales_order_threshold_type');
        $this->setPhpName('SpySalesOrderThresholdType');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\SalesOrderThreshold\\Persistence\\SpySalesOrderThresholdType');
        $this->setPackage('src.Orm.Zed.SalesOrderThreshold.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('id_sales_order_threshold_type_pk_seq');
        // columns
        $this->addPrimaryKey('id_sales_order_threshold_type', 'IdSalesOrderThresholdType', 'INTEGER', true, null, null);
        $this->addColumn('key', 'Key', 'VARCHAR', true, 255, null);
        $this->addColumn('threshold_group', 'ThresholdGroup', 'VARCHAR', true, 255, null);
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
        $this->addRelation('SpyMerchantRelationshipSalesOrderThreshold', '\\Orm\\Zed\\MerchantRelationshipSalesOrderThreshold\\Persistence\\SpyMerchantRelationshipSalesOrderThreshold', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_threshold_type',
    1 => ':id_sales_order_threshold_type',
  ),
), null, null, 'SpyMerchantRelationshipSalesOrderThresholds', false);
        $this->addRelation('SpySalesOrderThreshold', '\\Orm\\Zed\\SalesOrderThreshold\\Persistence\\SpySalesOrderThreshold', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_sales_order_threshold_type',
    1 => ':id_sales_order_threshold_type',
  ),
), null, null, 'SpySalesOrderThresholds', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderThresholdType', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderThresholdType', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderThresholdType', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderThresholdType', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderThresholdType', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdSalesOrderThresholdType', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdSalesOrderThresholdType', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpySalesOrderThresholdTypeTableMap::CLASS_DEFAULT : SpySalesOrderThresholdTypeTableMap::OM_CLASS;
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
     * @return array (SpySalesOrderThresholdType object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpySalesOrderThresholdTypeTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpySalesOrderThresholdTypeTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpySalesOrderThresholdTypeTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpySalesOrderThresholdTypeTableMap::OM_CLASS;
            /** @var SpySalesOrderThresholdType $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpySalesOrderThresholdTypeTableMap::addInstanceToPool($obj, $key);
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
            $key = SpySalesOrderThresholdTypeTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpySalesOrderThresholdTypeTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpySalesOrderThresholdType $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpySalesOrderThresholdTypeTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpySalesOrderThresholdTypeTableMap::COL_ID_SALES_ORDER_THRESHOLD_TYPE);
            $criteria->addSelectColumn(SpySalesOrderThresholdTypeTableMap::COL_KEY);
            $criteria->addSelectColumn(SpySalesOrderThresholdTypeTableMap::COL_THRESHOLD_GROUP);
            $criteria->addSelectColumn(SpySalesOrderThresholdTypeTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpySalesOrderThresholdTypeTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_sales_order_threshold_type');
            $criteria->addSelectColumn($alias . '.key');
            $criteria->addSelectColumn($alias . '.threshold_group');
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
            $criteria->removeSelectColumn(SpySalesOrderThresholdTypeTableMap::COL_ID_SALES_ORDER_THRESHOLD_TYPE);
            $criteria->removeSelectColumn(SpySalesOrderThresholdTypeTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpySalesOrderThresholdTypeTableMap::COL_THRESHOLD_GROUP);
            $criteria->removeSelectColumn(SpySalesOrderThresholdTypeTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpySalesOrderThresholdTypeTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_sales_order_threshold_type');
            $criteria->removeSelectColumn($alias . '.key');
            $criteria->removeSelectColumn($alias . '.threshold_group');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpySalesOrderThresholdTypeTableMap::DATABASE_NAME)->getTable(SpySalesOrderThresholdTypeTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpySalesOrderThresholdType or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpySalesOrderThresholdType object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderThresholdTypeTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\SalesOrderThreshold\Persistence\SpySalesOrderThresholdType) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpySalesOrderThresholdTypeTableMap::DATABASE_NAME);
            $criteria->add(SpySalesOrderThresholdTypeTableMap::COL_ID_SALES_ORDER_THRESHOLD_TYPE, (array) $values, Criteria::IN);
        }

        $query = SpySalesOrderThresholdTypeQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpySalesOrderThresholdTypeTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpySalesOrderThresholdTypeTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_sales_order_threshold_type table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpySalesOrderThresholdTypeQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpySalesOrderThresholdType or Criteria object.
     *
     * @param mixed $criteria Criteria or SpySalesOrderThresholdType object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderThresholdTypeTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpySalesOrderThresholdType object
        }


        // Set the correct dbName
        $query = SpySalesOrderThresholdTypeQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
