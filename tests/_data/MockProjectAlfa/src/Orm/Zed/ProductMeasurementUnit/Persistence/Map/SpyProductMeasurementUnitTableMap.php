<?php

namespace Orm\Zed\ProductMeasurementUnit\Persistence\Map;

use Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementUnit;
use Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementUnitQuery;
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
 * This class defines the structure of the 'spy_product_measurement_unit' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductMeasurementUnitTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.ProductMeasurementUnit.Persistence.Map.SpyProductMeasurementUnitTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_product_measurement_unit';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyProductMeasurementUnit';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\ProductMeasurementUnit\\Persistence\\SpyProductMeasurementUnit';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.ProductMeasurementUnit.Persistence.SpyProductMeasurementUnit';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 6;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 6;

    /**
     * the column name for the id_product_measurement_unit field
     */
    public const COL_ID_PRODUCT_MEASUREMENT_UNIT = 'spy_product_measurement_unit.id_product_measurement_unit';

    /**
     * the column name for the code field
     */
    public const COL_CODE = 'spy_product_measurement_unit.code';

    /**
     * the column name for the default_precision field
     */
    public const COL_DEFAULT_PRECISION = 'spy_product_measurement_unit.default_precision';

    /**
     * the column name for the name field
     */
    public const COL_NAME = 'spy_product_measurement_unit.name';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_product_measurement_unit.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_product_measurement_unit.updated_at';

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
        self::TYPE_PHPNAME       => ['IdProductMeasurementUnit', 'Code', 'DefaultPrecision', 'Name', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idProductMeasurementUnit', 'code', 'defaultPrecision', 'name', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT, SpyProductMeasurementUnitTableMap::COL_CODE, SpyProductMeasurementUnitTableMap::COL_DEFAULT_PRECISION, SpyProductMeasurementUnitTableMap::COL_NAME, SpyProductMeasurementUnitTableMap::COL_CREATED_AT, SpyProductMeasurementUnitTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_product_measurement_unit', 'code', 'default_precision', 'name', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
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
        self::TYPE_PHPNAME       => ['IdProductMeasurementUnit' => 0, 'Code' => 1, 'DefaultPrecision' => 2, 'Name' => 3, 'CreatedAt' => 4, 'UpdatedAt' => 5, ],
        self::TYPE_CAMELNAME     => ['idProductMeasurementUnit' => 0, 'code' => 1, 'defaultPrecision' => 2, 'name' => 3, 'createdAt' => 4, 'updatedAt' => 5, ],
        self::TYPE_COLNAME       => [SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT => 0, SpyProductMeasurementUnitTableMap::COL_CODE => 1, SpyProductMeasurementUnitTableMap::COL_DEFAULT_PRECISION => 2, SpyProductMeasurementUnitTableMap::COL_NAME => 3, SpyProductMeasurementUnitTableMap::COL_CREATED_AT => 4, SpyProductMeasurementUnitTableMap::COL_UPDATED_AT => 5, ],
        self::TYPE_FIELDNAME     => ['id_product_measurement_unit' => 0, 'code' => 1, 'default_precision' => 2, 'name' => 3, 'created_at' => 4, 'updated_at' => 5, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdProductMeasurementUnit' => 'ID_PRODUCT_MEASUREMENT_UNIT',
        'SpyProductMeasurementUnit.IdProductMeasurementUnit' => 'ID_PRODUCT_MEASUREMENT_UNIT',
        'idProductMeasurementUnit' => 'ID_PRODUCT_MEASUREMENT_UNIT',
        'spyProductMeasurementUnit.idProductMeasurementUnit' => 'ID_PRODUCT_MEASUREMENT_UNIT',
        'SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT' => 'ID_PRODUCT_MEASUREMENT_UNIT',
        'COL_ID_PRODUCT_MEASUREMENT_UNIT' => 'ID_PRODUCT_MEASUREMENT_UNIT',
        'id_product_measurement_unit' => 'ID_PRODUCT_MEASUREMENT_UNIT',
        'spy_product_measurement_unit.id_product_measurement_unit' => 'ID_PRODUCT_MEASUREMENT_UNIT',
        'Code' => 'CODE',
        'SpyProductMeasurementUnit.Code' => 'CODE',
        'code' => 'CODE',
        'spyProductMeasurementUnit.code' => 'CODE',
        'SpyProductMeasurementUnitTableMap::COL_CODE' => 'CODE',
        'COL_CODE' => 'CODE',
        'spy_product_measurement_unit.code' => 'CODE',
        'DefaultPrecision' => 'DEFAULT_PRECISION',
        'SpyProductMeasurementUnit.DefaultPrecision' => 'DEFAULT_PRECISION',
        'defaultPrecision' => 'DEFAULT_PRECISION',
        'spyProductMeasurementUnit.defaultPrecision' => 'DEFAULT_PRECISION',
        'SpyProductMeasurementUnitTableMap::COL_DEFAULT_PRECISION' => 'DEFAULT_PRECISION',
        'COL_DEFAULT_PRECISION' => 'DEFAULT_PRECISION',
        'default_precision' => 'DEFAULT_PRECISION',
        'spy_product_measurement_unit.default_precision' => 'DEFAULT_PRECISION',
        'Name' => 'NAME',
        'SpyProductMeasurementUnit.Name' => 'NAME',
        'name' => 'NAME',
        'spyProductMeasurementUnit.name' => 'NAME',
        'SpyProductMeasurementUnitTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_product_measurement_unit.name' => 'NAME',
        'CreatedAt' => 'CREATED_AT',
        'SpyProductMeasurementUnit.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyProductMeasurementUnit.createdAt' => 'CREATED_AT',
        'SpyProductMeasurementUnitTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_product_measurement_unit.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyProductMeasurementUnit.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyProductMeasurementUnit.updatedAt' => 'UPDATED_AT',
        'SpyProductMeasurementUnitTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_product_measurement_unit.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_product_measurement_unit');
        $this->setPhpName('SpyProductMeasurementUnit');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\ProductMeasurementUnit\\Persistence\\SpyProductMeasurementUnit');
        $this->setPackage('src.Orm.Zed.ProductMeasurementUnit.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('id_product_measurement_unit_pk_seq');
        // columns
        $this->addPrimaryKey('id_product_measurement_unit', 'IdProductMeasurementUnit', 'INTEGER', true, null, null);
        $this->addColumn('code', 'Code', 'VARCHAR', true, 255, null);
        $this->addColumn('default_precision', 'DefaultPrecision', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
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
        $this->addRelation('SpyProductMeasurementBaseUnit', '\\Orm\\Zed\\ProductMeasurementUnit\\Persistence\\SpyProductMeasurementBaseUnit', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_product_measurement_unit',
    1 => ':id_product_measurement_unit',
  ),
), null, null, 'SpyProductMeasurementBaseUnits', false);
        $this->addRelation('SpyProductMeasurementSalesUnit', '\\Orm\\Zed\\ProductMeasurementUnit\\Persistence\\SpyProductMeasurementSalesUnit', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_product_measurement_unit',
    1 => ':id_product_measurement_unit',
  ),
), null, null, 'SpyProductMeasurementSalesUnits', false);
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
            'event' => ['spy_product_measurement_unit_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnit', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnit', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnit', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnit', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnit', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductMeasurementUnit', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdProductMeasurementUnit', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductMeasurementUnitTableMap::CLASS_DEFAULT : SpyProductMeasurementUnitTableMap::OM_CLASS;
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
     * @return array (SpyProductMeasurementUnit object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyProductMeasurementUnitTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductMeasurementUnitTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductMeasurementUnitTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductMeasurementUnitTableMap::OM_CLASS;
            /** @var SpyProductMeasurementUnit $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductMeasurementUnitTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductMeasurementUnitTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductMeasurementUnitTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductMeasurementUnit $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductMeasurementUnitTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT);
            $criteria->addSelectColumn(SpyProductMeasurementUnitTableMap::COL_CODE);
            $criteria->addSelectColumn(SpyProductMeasurementUnitTableMap::COL_DEFAULT_PRECISION);
            $criteria->addSelectColumn(SpyProductMeasurementUnitTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyProductMeasurementUnitTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyProductMeasurementUnitTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_measurement_unit');
            $criteria->addSelectColumn($alias . '.code');
            $criteria->addSelectColumn($alias . '.default_precision');
            $criteria->addSelectColumn($alias . '.name');
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
            $criteria->removeSelectColumn(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitTableMap::COL_CODE);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitTableMap::COL_DEFAULT_PRECISION);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyProductMeasurementUnitTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_measurement_unit');
            $criteria->removeSelectColumn($alias . '.code');
            $criteria->removeSelectColumn($alias . '.default_precision');
            $criteria->removeSelectColumn($alias . '.name');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductMeasurementUnitTableMap::DATABASE_NAME)->getTable(SpyProductMeasurementUnitTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductMeasurementUnit or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyProductMeasurementUnit object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductMeasurementUnitTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ProductMeasurementUnit\Persistence\SpyProductMeasurementUnit) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductMeasurementUnitTableMap::DATABASE_NAME);
            $criteria->add(SpyProductMeasurementUnitTableMap::COL_ID_PRODUCT_MEASUREMENT_UNIT, (array) $values, Criteria::IN);
        }

        $query = SpyProductMeasurementUnitQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductMeasurementUnitTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductMeasurementUnitTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_measurement_unit table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyProductMeasurementUnitQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductMeasurementUnit or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyProductMeasurementUnit object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductMeasurementUnitTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductMeasurementUnit object
        }


        // Set the correct dbName
        $query = SpyProductMeasurementUnitQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
