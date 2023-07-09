<?php

namespace Orm\Zed\Availability\Persistence\Map;

use Orm\Zed\Availability\Persistence\SpyAvailabilityAbstract;
use Orm\Zed\Availability\Persistence\SpyAvailabilityAbstractQuery;
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
 * This class defines the structure of the 'spy_availability_abstract' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyAvailabilityAbstractTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.Availability.Persistence.Map.SpyAvailabilityAbstractTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_availability_abstract';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyAvailabilityAbstract';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\Availability\\Persistence\\SpyAvailabilityAbstract';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.Availability.Persistence.SpyAvailabilityAbstract';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 4;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 4;

    /**
     * the column name for the id_availability_abstract field
     */
    public const COL_ID_AVAILABILITY_ABSTRACT = 'spy_availability_abstract.id_availability_abstract';

    /**
     * the column name for the fk_store field
     */
    public const COL_FK_STORE = 'spy_availability_abstract.fk_store';

    /**
     * the column name for the abstract_sku field
     */
    public const COL_ABSTRACT_SKU = 'spy_availability_abstract.abstract_sku';

    /**
     * the column name for the quantity field
     */
    public const COL_QUANTITY = 'spy_availability_abstract.quantity';

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
        self::TYPE_PHPNAME       => ['IdAvailabilityAbstract', 'FkStore', 'AbstractSku', 'Quantity', ],
        self::TYPE_CAMELNAME     => ['idAvailabilityAbstract', 'fkStore', 'abstractSku', 'quantity', ],
        self::TYPE_COLNAME       => [SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT, SpyAvailabilityAbstractTableMap::COL_FK_STORE, SpyAvailabilityAbstractTableMap::COL_ABSTRACT_SKU, SpyAvailabilityAbstractTableMap::COL_QUANTITY, ],
        self::TYPE_FIELDNAME     => ['id_availability_abstract', 'fk_store', 'abstract_sku', 'quantity', ],
        self::TYPE_NUM           => [0, 1, 2, 3, ]
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
        self::TYPE_PHPNAME       => ['IdAvailabilityAbstract' => 0, 'FkStore' => 1, 'AbstractSku' => 2, 'Quantity' => 3, ],
        self::TYPE_CAMELNAME     => ['idAvailabilityAbstract' => 0, 'fkStore' => 1, 'abstractSku' => 2, 'quantity' => 3, ],
        self::TYPE_COLNAME       => [SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT => 0, SpyAvailabilityAbstractTableMap::COL_FK_STORE => 1, SpyAvailabilityAbstractTableMap::COL_ABSTRACT_SKU => 2, SpyAvailabilityAbstractTableMap::COL_QUANTITY => 3, ],
        self::TYPE_FIELDNAME     => ['id_availability_abstract' => 0, 'fk_store' => 1, 'abstract_sku' => 2, 'quantity' => 3, ],
        self::TYPE_NUM           => [0, 1, 2, 3, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdAvailabilityAbstract' => 'ID_AVAILABILITY_ABSTRACT',
        'SpyAvailabilityAbstract.IdAvailabilityAbstract' => 'ID_AVAILABILITY_ABSTRACT',
        'idAvailabilityAbstract' => 'ID_AVAILABILITY_ABSTRACT',
        'spyAvailabilityAbstract.idAvailabilityAbstract' => 'ID_AVAILABILITY_ABSTRACT',
        'SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT' => 'ID_AVAILABILITY_ABSTRACT',
        'COL_ID_AVAILABILITY_ABSTRACT' => 'ID_AVAILABILITY_ABSTRACT',
        'id_availability_abstract' => 'ID_AVAILABILITY_ABSTRACT',
        'spy_availability_abstract.id_availability_abstract' => 'ID_AVAILABILITY_ABSTRACT',
        'FkStore' => 'FK_STORE',
        'SpyAvailabilityAbstract.FkStore' => 'FK_STORE',
        'fkStore' => 'FK_STORE',
        'spyAvailabilityAbstract.fkStore' => 'FK_STORE',
        'SpyAvailabilityAbstractTableMap::COL_FK_STORE' => 'FK_STORE',
        'COL_FK_STORE' => 'FK_STORE',
        'fk_store' => 'FK_STORE',
        'spy_availability_abstract.fk_store' => 'FK_STORE',
        'AbstractSku' => 'ABSTRACT_SKU',
        'SpyAvailabilityAbstract.AbstractSku' => 'ABSTRACT_SKU',
        'abstractSku' => 'ABSTRACT_SKU',
        'spyAvailabilityAbstract.abstractSku' => 'ABSTRACT_SKU',
        'SpyAvailabilityAbstractTableMap::COL_ABSTRACT_SKU' => 'ABSTRACT_SKU',
        'COL_ABSTRACT_SKU' => 'ABSTRACT_SKU',
        'abstract_sku' => 'ABSTRACT_SKU',
        'spy_availability_abstract.abstract_sku' => 'ABSTRACT_SKU',
        'Quantity' => 'QUANTITY',
        'SpyAvailabilityAbstract.Quantity' => 'QUANTITY',
        'quantity' => 'QUANTITY',
        'spyAvailabilityAbstract.quantity' => 'QUANTITY',
        'SpyAvailabilityAbstractTableMap::COL_QUANTITY' => 'QUANTITY',
        'COL_QUANTITY' => 'QUANTITY',
        'spy_availability_abstract.quantity' => 'QUANTITY',
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
        $this->setName('spy_availability_abstract');
        $this->setPhpName('SpyAvailabilityAbstract');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\Availability\\Persistence\\SpyAvailabilityAbstract');
        $this->setPackage('src.Orm.Zed.Availability.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_availability_abstract_pk_seq');
        // columns
        $this->addPrimaryKey('id_availability_abstract', 'IdAvailabilityAbstract', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_store', 'FkStore', 'INTEGER', 'spy_store', 'id_store', false, null, null);
        $this->addColumn('abstract_sku', 'AbstractSku', 'VARCHAR', true, 255, null);
        $this->addColumn('quantity', 'Quantity', 'DECIMAL', true, 20, 0);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('Store', '\\Orm\\Zed\\Store\\Persistence\\SpyStore', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, null, false);
        $this->addRelation('SpyAvailability', '\\Orm\\Zed\\Availability\\Persistence\\SpyAvailability', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_availability_abstract',
    1 => ':id_availability_abstract',
  ),
), null, null, 'SpyAvailabilities', false);
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
            'event' => ['spy_availability_abstract_quantity' => ['column' => 'quantity', 'value' => '0', 'operator' => '===']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAvailabilityAbstract', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAvailabilityAbstract', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAvailabilityAbstract', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAvailabilityAbstract', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAvailabilityAbstract', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdAvailabilityAbstract', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdAvailabilityAbstract', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyAvailabilityAbstractTableMap::CLASS_DEFAULT : SpyAvailabilityAbstractTableMap::OM_CLASS;
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
     * @return array (SpyAvailabilityAbstract object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyAvailabilityAbstractTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyAvailabilityAbstractTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyAvailabilityAbstractTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyAvailabilityAbstractTableMap::OM_CLASS;
            /** @var SpyAvailabilityAbstract $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyAvailabilityAbstractTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyAvailabilityAbstractTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyAvailabilityAbstractTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyAvailabilityAbstract $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyAvailabilityAbstractTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT);
            $criteria->addSelectColumn(SpyAvailabilityAbstractTableMap::COL_FK_STORE);
            $criteria->addSelectColumn(SpyAvailabilityAbstractTableMap::COL_ABSTRACT_SKU);
            $criteria->addSelectColumn(SpyAvailabilityAbstractTableMap::COL_QUANTITY);
        } else {
            $criteria->addSelectColumn($alias . '.id_availability_abstract');
            $criteria->addSelectColumn($alias . '.fk_store');
            $criteria->addSelectColumn($alias . '.abstract_sku');
            $criteria->addSelectColumn($alias . '.quantity');
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
            $criteria->removeSelectColumn(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT);
            $criteria->removeSelectColumn(SpyAvailabilityAbstractTableMap::COL_FK_STORE);
            $criteria->removeSelectColumn(SpyAvailabilityAbstractTableMap::COL_ABSTRACT_SKU);
            $criteria->removeSelectColumn(SpyAvailabilityAbstractTableMap::COL_QUANTITY);
        } else {
            $criteria->removeSelectColumn($alias . '.id_availability_abstract');
            $criteria->removeSelectColumn($alias . '.fk_store');
            $criteria->removeSelectColumn($alias . '.abstract_sku');
            $criteria->removeSelectColumn($alias . '.quantity');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyAvailabilityAbstractTableMap::DATABASE_NAME)->getTable(SpyAvailabilityAbstractTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyAvailabilityAbstract or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyAvailabilityAbstract object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAvailabilityAbstractTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Availability\Persistence\SpyAvailabilityAbstract) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyAvailabilityAbstractTableMap::DATABASE_NAME);
            $criteria->add(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT, (array) $values, Criteria::IN);
        }

        $query = SpyAvailabilityAbstractQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyAvailabilityAbstractTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyAvailabilityAbstractTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_availability_abstract table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyAvailabilityAbstractQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyAvailabilityAbstract or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyAvailabilityAbstract object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAvailabilityAbstractTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyAvailabilityAbstract object
        }

        if ($criteria->containsKey(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT) && $criteria->keyContainsValue(SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyAvailabilityAbstractTableMap::COL_ID_AVAILABILITY_ABSTRACT.')');
        }


        // Set the correct dbName
        $query = SpyAvailabilityAbstractQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
