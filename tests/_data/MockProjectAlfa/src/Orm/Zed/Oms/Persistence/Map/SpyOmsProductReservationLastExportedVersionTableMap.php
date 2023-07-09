<?php

namespace Orm\Zed\Oms\Persistence\Map;

use Orm\Zed\Oms\Persistence\SpyOmsProductReservationLastExportedVersion;
use Orm\Zed\Oms\Persistence\SpyOmsProductReservationLastExportedVersionQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\InstancePoolTrait;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\DataFetcher\DataFetcherInterface;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\RelationMap;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Map\TableMapTrait;


/**
 * This class defines the structure of the 'spy_oms_product_reservation_last_exported_version' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyOmsProductReservationLastExportedVersionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.Oms.Persistence.Map.SpyOmsProductReservationLastExportedVersionTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_oms_product_reservation_last_exported_version';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyOmsProductReservationLastExportedVersion';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\Oms\\Persistence\\SpyOmsProductReservationLastExportedVersion';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.Oms.Persistence.SpyOmsProductReservationLastExportedVersion';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 3;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 3;

    /**
     * the column name for the version field
     */
    public const COL_VERSION = 'spy_oms_product_reservation_last_exported_version.version';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_oms_product_reservation_last_exported_version.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_oms_product_reservation_last_exported_version.updated_at';

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
        self::TYPE_PHPNAME       => ['Version', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['version', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyOmsProductReservationLastExportedVersionTableMap::COL_VERSION, SpyOmsProductReservationLastExportedVersionTableMap::COL_CREATED_AT, SpyOmsProductReservationLastExportedVersionTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['version', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, ]
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
        self::TYPE_PHPNAME       => ['Version' => 0, 'CreatedAt' => 1, 'UpdatedAt' => 2, ],
        self::TYPE_CAMELNAME     => ['version' => 0, 'createdAt' => 1, 'updatedAt' => 2, ],
        self::TYPE_COLNAME       => [SpyOmsProductReservationLastExportedVersionTableMap::COL_VERSION => 0, SpyOmsProductReservationLastExportedVersionTableMap::COL_CREATED_AT => 1, SpyOmsProductReservationLastExportedVersionTableMap::COL_UPDATED_AT => 2, ],
        self::TYPE_FIELDNAME     => ['version' => 0, 'created_at' => 1, 'updated_at' => 2, ],
        self::TYPE_NUM           => [0, 1, 2, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'Version' => 'VERSION',
        'SpyOmsProductReservationLastExportedVersion.Version' => 'VERSION',
        'version' => 'VERSION',
        'spyOmsProductReservationLastExportedVersion.version' => 'VERSION',
        'SpyOmsProductReservationLastExportedVersionTableMap::COL_VERSION' => 'VERSION',
        'COL_VERSION' => 'VERSION',
        'spy_oms_product_reservation_last_exported_version.version' => 'VERSION',
        'CreatedAt' => 'CREATED_AT',
        'SpyOmsProductReservationLastExportedVersion.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyOmsProductReservationLastExportedVersion.createdAt' => 'CREATED_AT',
        'SpyOmsProductReservationLastExportedVersionTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_oms_product_reservation_last_exported_version.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyOmsProductReservationLastExportedVersion.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyOmsProductReservationLastExportedVersion.updatedAt' => 'UPDATED_AT',
        'SpyOmsProductReservationLastExportedVersionTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_oms_product_reservation_last_exported_version.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_oms_product_reservation_last_exported_version');
        $this->setPhpName('SpyOmsProductReservationLastExportedVersion');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\Oms\\Persistence\\SpyOmsProductReservationLastExportedVersion');
        $this->setPackage('src.Orm.Zed.Oms.Persistence');
        $this->setUseIdGenerator(false);
        // columns
        $this->addColumn('version', 'Version', 'BIGINT', true, null, null);
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
        return null;
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
        return '';
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
        return $withPrefix ? SpyOmsProductReservationLastExportedVersionTableMap::CLASS_DEFAULT : SpyOmsProductReservationLastExportedVersionTableMap::OM_CLASS;
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
     * @return array (SpyOmsProductReservationLastExportedVersion object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyOmsProductReservationLastExportedVersionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyOmsProductReservationLastExportedVersionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyOmsProductReservationLastExportedVersionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyOmsProductReservationLastExportedVersionTableMap::OM_CLASS;
            /** @var SpyOmsProductReservationLastExportedVersion $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyOmsProductReservationLastExportedVersionTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyOmsProductReservationLastExportedVersionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyOmsProductReservationLastExportedVersionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyOmsProductReservationLastExportedVersion $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyOmsProductReservationLastExportedVersionTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyOmsProductReservationLastExportedVersionTableMap::COL_VERSION);
            $criteria->addSelectColumn(SpyOmsProductReservationLastExportedVersionTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyOmsProductReservationLastExportedVersionTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.version');
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
            $criteria->removeSelectColumn(SpyOmsProductReservationLastExportedVersionTableMap::COL_VERSION);
            $criteria->removeSelectColumn(SpyOmsProductReservationLastExportedVersionTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyOmsProductReservationLastExportedVersionTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.version');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyOmsProductReservationLastExportedVersionTableMap::DATABASE_NAME)->getTable(SpyOmsProductReservationLastExportedVersionTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyOmsProductReservationLastExportedVersion or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyOmsProductReservationLastExportedVersion object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyOmsProductReservationLastExportedVersionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Oms\Persistence\SpyOmsProductReservationLastExportedVersion) { // it's a model object
            // create criteria based on pk value
            $criteria = $values->buildCriteria();
        } else { // it's a primary key, or an array of pks
            throw new LogicException('The SpyOmsProductReservationLastExportedVersion object has no primary key');
        }

        $query = SpyOmsProductReservationLastExportedVersionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyOmsProductReservationLastExportedVersionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyOmsProductReservationLastExportedVersionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_oms_product_reservation_last_exported_version table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyOmsProductReservationLastExportedVersionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyOmsProductReservationLastExportedVersion or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyOmsProductReservationLastExportedVersion object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyOmsProductReservationLastExportedVersionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyOmsProductReservationLastExportedVersion object
        }


        // Set the correct dbName
        $query = SpyOmsProductReservationLastExportedVersionQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
