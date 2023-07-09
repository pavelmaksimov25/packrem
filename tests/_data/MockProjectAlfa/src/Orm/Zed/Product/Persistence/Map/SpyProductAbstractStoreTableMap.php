<?php

namespace Orm\Zed\Product\Persistence\Map;

use Orm\Zed\Product\Persistence\SpyProductAbstractStore;
use Orm\Zed\Product\Persistence\SpyProductAbstractStoreQuery;
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
 * This class defines the structure of the 'spy_product_abstract_store' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductAbstractStoreTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.Product.Persistence.Map.SpyProductAbstractStoreTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_product_abstract_store';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyProductAbstractStore';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\Product\\Persistence\\SpyProductAbstractStore';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.Product.Persistence.SpyProductAbstractStore';

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
     * the column name for the id_product_abstract_store field
     */
    public const COL_ID_PRODUCT_ABSTRACT_STORE = 'spy_product_abstract_store.id_product_abstract_store';

    /**
     * the column name for the fk_product_abstract field
     */
    public const COL_FK_PRODUCT_ABSTRACT = 'spy_product_abstract_store.fk_product_abstract';

    /**
     * the column name for the fk_store field
     */
    public const COL_FK_STORE = 'spy_product_abstract_store.fk_store';

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
        self::TYPE_PHPNAME       => ['IdProductAbstractStore', 'FkProductAbstract', 'FkStore', ],
        self::TYPE_CAMELNAME     => ['idProductAbstractStore', 'fkProductAbstract', 'fkStore', ],
        self::TYPE_COLNAME       => [SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE, SpyProductAbstractStoreTableMap::COL_FK_PRODUCT_ABSTRACT, SpyProductAbstractStoreTableMap::COL_FK_STORE, ],
        self::TYPE_FIELDNAME     => ['id_product_abstract_store', 'fk_product_abstract', 'fk_store', ],
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
        self::TYPE_PHPNAME       => ['IdProductAbstractStore' => 0, 'FkProductAbstract' => 1, 'FkStore' => 2, ],
        self::TYPE_CAMELNAME     => ['idProductAbstractStore' => 0, 'fkProductAbstract' => 1, 'fkStore' => 2, ],
        self::TYPE_COLNAME       => [SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE => 0, SpyProductAbstractStoreTableMap::COL_FK_PRODUCT_ABSTRACT => 1, SpyProductAbstractStoreTableMap::COL_FK_STORE => 2, ],
        self::TYPE_FIELDNAME     => ['id_product_abstract_store' => 0, 'fk_product_abstract' => 1, 'fk_store' => 2, ],
        self::TYPE_NUM           => [0, 1, 2, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdProductAbstractStore' => 'ID_PRODUCT_ABSTRACT_STORE',
        'SpyProductAbstractStore.IdProductAbstractStore' => 'ID_PRODUCT_ABSTRACT_STORE',
        'idProductAbstractStore' => 'ID_PRODUCT_ABSTRACT_STORE',
        'spyProductAbstractStore.idProductAbstractStore' => 'ID_PRODUCT_ABSTRACT_STORE',
        'SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE' => 'ID_PRODUCT_ABSTRACT_STORE',
        'COL_ID_PRODUCT_ABSTRACT_STORE' => 'ID_PRODUCT_ABSTRACT_STORE',
        'id_product_abstract_store' => 'ID_PRODUCT_ABSTRACT_STORE',
        'spy_product_abstract_store.id_product_abstract_store' => 'ID_PRODUCT_ABSTRACT_STORE',
        'FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyProductAbstractStore.FkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'spyProductAbstractStore.fkProductAbstract' => 'FK_PRODUCT_ABSTRACT',
        'SpyProductAbstractStoreTableMap::COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'COL_FK_PRODUCT_ABSTRACT' => 'FK_PRODUCT_ABSTRACT',
        'fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'spy_product_abstract_store.fk_product_abstract' => 'FK_PRODUCT_ABSTRACT',
        'FkStore' => 'FK_STORE',
        'SpyProductAbstractStore.FkStore' => 'FK_STORE',
        'fkStore' => 'FK_STORE',
        'spyProductAbstractStore.fkStore' => 'FK_STORE',
        'SpyProductAbstractStoreTableMap::COL_FK_STORE' => 'FK_STORE',
        'COL_FK_STORE' => 'FK_STORE',
        'fk_store' => 'FK_STORE',
        'spy_product_abstract_store.fk_store' => 'FK_STORE',
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
        $this->setName('spy_product_abstract_store');
        $this->setPhpName('SpyProductAbstractStore');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\Product\\Persistence\\SpyProductAbstractStore');
        $this->setPackage('src.Orm.Zed.Product.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('id_product_abstract_store_pk_seq');
        // columns
        $this->addPrimaryKey('id_product_abstract_store', 'IdProductAbstractStore', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_product_abstract', 'FkProductAbstract', 'INTEGER', 'spy_product_abstract', 'id_product_abstract', true, null, null);
        $this->addForeignKey('fk_store', 'FkStore', 'INTEGER', 'spy_store', 'id_store', true, null, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('SpyProductAbstract', '\\Orm\\Zed\\Product\\Persistence\\SpyProductAbstract', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product_abstract',
    1 => ':id_product_abstract',
  ),
), null, null, null, false);
        $this->addRelation('SpyStore', '\\Orm\\Zed\\Store\\Persistence\\SpyStore', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_store',
    1 => ':id_store',
  ),
), null, null, null, false);
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
            'event' => ['spy_product_abstract_store_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractStore', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractStore', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractStore', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractStore', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractStore', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductAbstractStore', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdProductAbstractStore', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductAbstractStoreTableMap::CLASS_DEFAULT : SpyProductAbstractStoreTableMap::OM_CLASS;
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
     * @return array (SpyProductAbstractStore object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyProductAbstractStoreTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductAbstractStoreTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductAbstractStoreTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductAbstractStoreTableMap::OM_CLASS;
            /** @var SpyProductAbstractStore $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductAbstractStoreTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductAbstractStoreTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductAbstractStoreTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductAbstractStore $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductAbstractStoreTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE);
            $criteria->addSelectColumn(SpyProductAbstractStoreTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->addSelectColumn(SpyProductAbstractStoreTableMap::COL_FK_STORE);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_abstract_store');
            $criteria->addSelectColumn($alias . '.fk_product_abstract');
            $criteria->addSelectColumn($alias . '.fk_store');
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
            $criteria->removeSelectColumn(SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE);
            $criteria->removeSelectColumn(SpyProductAbstractStoreTableMap::COL_FK_PRODUCT_ABSTRACT);
            $criteria->removeSelectColumn(SpyProductAbstractStoreTableMap::COL_FK_STORE);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_abstract_store');
            $criteria->removeSelectColumn($alias . '.fk_product_abstract');
            $criteria->removeSelectColumn($alias . '.fk_store');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductAbstractStoreTableMap::DATABASE_NAME)->getTable(SpyProductAbstractStoreTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductAbstractStore or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyProductAbstractStore object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductAbstractStoreTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Product\Persistence\SpyProductAbstractStore) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductAbstractStoreTableMap::DATABASE_NAME);
            $criteria->add(SpyProductAbstractStoreTableMap::COL_ID_PRODUCT_ABSTRACT_STORE, (array) $values, Criteria::IN);
        }

        $query = SpyProductAbstractStoreQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductAbstractStoreTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductAbstractStoreTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_abstract_store table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyProductAbstractStoreQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductAbstractStore or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyProductAbstractStore object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductAbstractStoreTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductAbstractStore object
        }


        // Set the correct dbName
        $query = SpyProductAbstractStoreQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
