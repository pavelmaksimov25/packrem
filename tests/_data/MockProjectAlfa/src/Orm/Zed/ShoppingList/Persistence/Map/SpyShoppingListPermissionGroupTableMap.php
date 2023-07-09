<?php

namespace Orm\Zed\ShoppingList\Persistence\Map;

use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroupQuery;
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
 * This class defines the structure of the 'spy_shopping_list_permission_group' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyShoppingListPermissionGroupTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.ShoppingList.Persistence.Map.SpyShoppingListPermissionGroupTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_shopping_list_permission_group';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyShoppingListPermissionGroup';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroup';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.ShoppingList.Persistence.SpyShoppingListPermissionGroup';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 2;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 2;

    /**
     * the column name for the id_shopping_list_permission_group field
     */
    public const COL_ID_SHOPPING_LIST_PERMISSION_GROUP = 'spy_shopping_list_permission_group.id_shopping_list_permission_group';

    /**
     * the column name for the name field
     */
    public const COL_NAME = 'spy_shopping_list_permission_group.name';

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
        self::TYPE_PHPNAME       => ['IdShoppingListPermissionGroup', 'Name', ],
        self::TYPE_CAMELNAME     => ['idShoppingListPermissionGroup', 'name', ],
        self::TYPE_COLNAME       => [SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, SpyShoppingListPermissionGroupTableMap::COL_NAME, ],
        self::TYPE_FIELDNAME     => ['id_shopping_list_permission_group', 'name', ],
        self::TYPE_NUM           => [0, 1, ]
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
        self::TYPE_PHPNAME       => ['IdShoppingListPermissionGroup' => 0, 'Name' => 1, ],
        self::TYPE_CAMELNAME     => ['idShoppingListPermissionGroup' => 0, 'name' => 1, ],
        self::TYPE_COLNAME       => [SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP => 0, SpyShoppingListPermissionGroupTableMap::COL_NAME => 1, ],
        self::TYPE_FIELDNAME     => ['id_shopping_list_permission_group' => 0, 'name' => 1, ],
        self::TYPE_NUM           => [0, 1, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdShoppingListPermissionGroup' => 'ID_SHOPPING_LIST_PERMISSION_GROUP',
        'SpyShoppingListPermissionGroup.IdShoppingListPermissionGroup' => 'ID_SHOPPING_LIST_PERMISSION_GROUP',
        'idShoppingListPermissionGroup' => 'ID_SHOPPING_LIST_PERMISSION_GROUP',
        'spyShoppingListPermissionGroup.idShoppingListPermissionGroup' => 'ID_SHOPPING_LIST_PERMISSION_GROUP',
        'SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP' => 'ID_SHOPPING_LIST_PERMISSION_GROUP',
        'COL_ID_SHOPPING_LIST_PERMISSION_GROUP' => 'ID_SHOPPING_LIST_PERMISSION_GROUP',
        'id_shopping_list_permission_group' => 'ID_SHOPPING_LIST_PERMISSION_GROUP',
        'spy_shopping_list_permission_group.id_shopping_list_permission_group' => 'ID_SHOPPING_LIST_PERMISSION_GROUP',
        'Name' => 'NAME',
        'SpyShoppingListPermissionGroup.Name' => 'NAME',
        'name' => 'NAME',
        'spyShoppingListPermissionGroup.name' => 'NAME',
        'SpyShoppingListPermissionGroupTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_shopping_list_permission_group.name' => 'NAME',
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
        $this->setName('spy_shopping_list_permission_group');
        $this->setPhpName('SpyShoppingListPermissionGroup');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroup');
        $this->setPackage('src.Orm.Zed.ShoppingList.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_shopping_list_permission_group_pk_seq');
        // columns
        $this->addPrimaryKey('id_shopping_list_permission_group', 'IdShoppingListPermissionGroup', 'INTEGER', true, null, null);
        $this->addColumn('name', 'Name', 'VARCHAR', true, 255, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('SpyShoppingListCompanyUser', '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListCompanyUser', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_shopping_list_permission_group',
    1 => ':id_shopping_list_permission_group',
  ),
), null, null, 'SpyShoppingListCompanyUsers', false);
        $this->addRelation('SpyShoppingListCompanyBusinessUnit', '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListCompanyBusinessUnit', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_shopping_list_permission_group',
    1 => ':id_shopping_list_permission_group',
  ),
), null, null, 'SpyShoppingListCompanyBusinessUnits', false);
        $this->addRelation('SpyShoppingListPermissionGroupToPermission', '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingListPermissionGroupToPermission', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_shopping_list_permission_group',
    1 => ':id_shopping_list_permission_group',
  ),
), null, null, 'SpyShoppingListPermissionGroupToPermissions', false);
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroup', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroup', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroup', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroup', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroup', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdShoppingListPermissionGroup', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdShoppingListPermissionGroup', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyShoppingListPermissionGroupTableMap::CLASS_DEFAULT : SpyShoppingListPermissionGroupTableMap::OM_CLASS;
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
     * @return array (SpyShoppingListPermissionGroup object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyShoppingListPermissionGroupTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyShoppingListPermissionGroupTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyShoppingListPermissionGroupTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyShoppingListPermissionGroupTableMap::OM_CLASS;
            /** @var SpyShoppingListPermissionGroup $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyShoppingListPermissionGroupTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyShoppingListPermissionGroupTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyShoppingListPermissionGroupTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyShoppingListPermissionGroup $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyShoppingListPermissionGroupTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP);
            $criteria->addSelectColumn(SpyShoppingListPermissionGroupTableMap::COL_NAME);
        } else {
            $criteria->addSelectColumn($alias . '.id_shopping_list_permission_group');
            $criteria->addSelectColumn($alias . '.name');
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
            $criteria->removeSelectColumn(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP);
            $criteria->removeSelectColumn(SpyShoppingListPermissionGroupTableMap::COL_NAME);
        } else {
            $criteria->removeSelectColumn($alias . '.id_shopping_list_permission_group');
            $criteria->removeSelectColumn($alias . '.name');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME)->getTable(SpyShoppingListPermissionGroupTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyShoppingListPermissionGroup or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyShoppingListPermissionGroup object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListPermissionGroup) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME);
            $criteria->add(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP, (array) $values, Criteria::IN);
        }

        $query = SpyShoppingListPermissionGroupQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyShoppingListPermissionGroupTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyShoppingListPermissionGroupTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_shopping_list_permission_group table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyShoppingListPermissionGroupQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyShoppingListPermissionGroup or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyShoppingListPermissionGroup object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListPermissionGroupTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyShoppingListPermissionGroup object
        }

        if ($criteria->containsKey(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP) && $criteria->keyContainsValue(SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyShoppingListPermissionGroupTableMap::COL_ID_SHOPPING_LIST_PERMISSION_GROUP.')');
        }


        // Set the correct dbName
        $query = SpyShoppingListPermissionGroupQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
