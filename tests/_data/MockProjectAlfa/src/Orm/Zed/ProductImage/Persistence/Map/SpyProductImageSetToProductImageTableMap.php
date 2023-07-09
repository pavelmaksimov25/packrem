<?php

namespace Orm\Zed\ProductImage\Persistence\Map;

use Orm\Zed\ProductImage\Persistence\SpyProductImageSetToProductImage;
use Orm\Zed\ProductImage\Persistence\SpyProductImageSetToProductImageQuery;
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
 * This class defines the structure of the 'spy_product_image_set_to_product_image' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyProductImageSetToProductImageTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.ProductImage.Persistence.Map.SpyProductImageSetToProductImageTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_product_image_set_to_product_image';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyProductImageSetToProductImage';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\ProductImage\\Persistence\\SpyProductImageSetToProductImage';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.ProductImage.Persistence.SpyProductImageSetToProductImage';

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
     * the column name for the id_product_image_set_to_product_image field
     */
    public const COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE = 'spy_product_image_set_to_product_image.id_product_image_set_to_product_image';

    /**
     * the column name for the fk_product_image field
     */
    public const COL_FK_PRODUCT_IMAGE = 'spy_product_image_set_to_product_image.fk_product_image';

    /**
     * the column name for the fk_product_image_set field
     */
    public const COL_FK_PRODUCT_IMAGE_SET = 'spy_product_image_set_to_product_image.fk_product_image_set';

    /**
     * the column name for the sort_order field
     */
    public const COL_SORT_ORDER = 'spy_product_image_set_to_product_image.sort_order';

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
        self::TYPE_PHPNAME       => ['IdProductImageSetToProductImage', 'FkProductImage', 'FkProductImageSet', 'SortOrder', ],
        self::TYPE_CAMELNAME     => ['idProductImageSetToProductImage', 'fkProductImage', 'fkProductImageSet', 'sortOrder', ],
        self::TYPE_COLNAME       => [SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE, SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE, SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE_SET, SpyProductImageSetToProductImageTableMap::COL_SORT_ORDER, ],
        self::TYPE_FIELDNAME     => ['id_product_image_set_to_product_image', 'fk_product_image', 'fk_product_image_set', 'sort_order', ],
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
        self::TYPE_PHPNAME       => ['IdProductImageSetToProductImage' => 0, 'FkProductImage' => 1, 'FkProductImageSet' => 2, 'SortOrder' => 3, ],
        self::TYPE_CAMELNAME     => ['idProductImageSetToProductImage' => 0, 'fkProductImage' => 1, 'fkProductImageSet' => 2, 'sortOrder' => 3, ],
        self::TYPE_COLNAME       => [SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE => 0, SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE => 1, SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE_SET => 2, SpyProductImageSetToProductImageTableMap::COL_SORT_ORDER => 3, ],
        self::TYPE_FIELDNAME     => ['id_product_image_set_to_product_image' => 0, 'fk_product_image' => 1, 'fk_product_image_set' => 2, 'sort_order' => 3, ],
        self::TYPE_NUM           => [0, 1, 2, 3, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdProductImageSetToProductImage' => 'ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE',
        'SpyProductImageSetToProductImage.IdProductImageSetToProductImage' => 'ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE',
        'idProductImageSetToProductImage' => 'ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE',
        'spyProductImageSetToProductImage.idProductImageSetToProductImage' => 'ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE',
        'SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE' => 'ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE',
        'COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE' => 'ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE',
        'id_product_image_set_to_product_image' => 'ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE',
        'spy_product_image_set_to_product_image.id_product_image_set_to_product_image' => 'ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE',
        'FkProductImage' => 'FK_PRODUCT_IMAGE',
        'SpyProductImageSetToProductImage.FkProductImage' => 'FK_PRODUCT_IMAGE',
        'fkProductImage' => 'FK_PRODUCT_IMAGE',
        'spyProductImageSetToProductImage.fkProductImage' => 'FK_PRODUCT_IMAGE',
        'SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE' => 'FK_PRODUCT_IMAGE',
        'COL_FK_PRODUCT_IMAGE' => 'FK_PRODUCT_IMAGE',
        'fk_product_image' => 'FK_PRODUCT_IMAGE',
        'spy_product_image_set_to_product_image.fk_product_image' => 'FK_PRODUCT_IMAGE',
        'FkProductImageSet' => 'FK_PRODUCT_IMAGE_SET',
        'SpyProductImageSetToProductImage.FkProductImageSet' => 'FK_PRODUCT_IMAGE_SET',
        'fkProductImageSet' => 'FK_PRODUCT_IMAGE_SET',
        'spyProductImageSetToProductImage.fkProductImageSet' => 'FK_PRODUCT_IMAGE_SET',
        'SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE_SET' => 'FK_PRODUCT_IMAGE_SET',
        'COL_FK_PRODUCT_IMAGE_SET' => 'FK_PRODUCT_IMAGE_SET',
        'fk_product_image_set' => 'FK_PRODUCT_IMAGE_SET',
        'spy_product_image_set_to_product_image.fk_product_image_set' => 'FK_PRODUCT_IMAGE_SET',
        'SortOrder' => 'SORT_ORDER',
        'SpyProductImageSetToProductImage.SortOrder' => 'SORT_ORDER',
        'sortOrder' => 'SORT_ORDER',
        'spyProductImageSetToProductImage.sortOrder' => 'SORT_ORDER',
        'SpyProductImageSetToProductImageTableMap::COL_SORT_ORDER' => 'SORT_ORDER',
        'COL_SORT_ORDER' => 'SORT_ORDER',
        'sort_order' => 'SORT_ORDER',
        'spy_product_image_set_to_product_image.sort_order' => 'SORT_ORDER',
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
        $this->setName('spy_product_image_set_to_product_image');
        $this->setPhpName('SpyProductImageSetToProductImage');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\ProductImage\\Persistence\\SpyProductImageSetToProductImage');
        $this->setPackage('src.Orm.Zed.ProductImage.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_product_image_set_to_product_image_pk_seq');
        // columns
        $this->addPrimaryKey('id_product_image_set_to_product_image', 'IdProductImageSetToProductImage', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_product_image', 'FkProductImage', 'INTEGER', 'spy_product_image', 'id_product_image', true, null, null);
        $this->addForeignKey('fk_product_image_set', 'FkProductImageSet', 'INTEGER', 'spy_product_image_set', 'id_product_image_set', true, null, null);
        $this->addColumn('sort_order', 'SortOrder', 'INTEGER', true, null, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('SpyProductImageSet', '\\Orm\\Zed\\ProductImage\\Persistence\\SpyProductImageSet', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product_image_set',
    1 => ':id_product_image_set',
  ),
), null, null, null, false);
        $this->addRelation('SpyProductImage', '\\Orm\\Zed\\ProductImage\\Persistence\\SpyProductImage', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_product_image',
    1 => ':id_product_image',
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
            'event' => ['spy_product_image_set_to_product_image_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductImageSetToProductImage', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductImageSetToProductImage', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductImageSetToProductImage', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductImageSetToProductImage', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductImageSetToProductImage', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdProductImageSetToProductImage', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdProductImageSetToProductImage', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyProductImageSetToProductImageTableMap::CLASS_DEFAULT : SpyProductImageSetToProductImageTableMap::OM_CLASS;
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
     * @return array (SpyProductImageSetToProductImage object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyProductImageSetToProductImageTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyProductImageSetToProductImageTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyProductImageSetToProductImageTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyProductImageSetToProductImageTableMap::OM_CLASS;
            /** @var SpyProductImageSetToProductImage $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyProductImageSetToProductImageTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyProductImageSetToProductImageTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyProductImageSetToProductImageTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyProductImageSetToProductImage $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyProductImageSetToProductImageTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE);
            $criteria->addSelectColumn(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE);
            $criteria->addSelectColumn(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE_SET);
            $criteria->addSelectColumn(SpyProductImageSetToProductImageTableMap::COL_SORT_ORDER);
        } else {
            $criteria->addSelectColumn($alias . '.id_product_image_set_to_product_image');
            $criteria->addSelectColumn($alias . '.fk_product_image');
            $criteria->addSelectColumn($alias . '.fk_product_image_set');
            $criteria->addSelectColumn($alias . '.sort_order');
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
            $criteria->removeSelectColumn(SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE);
            $criteria->removeSelectColumn(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE);
            $criteria->removeSelectColumn(SpyProductImageSetToProductImageTableMap::COL_FK_PRODUCT_IMAGE_SET);
            $criteria->removeSelectColumn(SpyProductImageSetToProductImageTableMap::COL_SORT_ORDER);
        } else {
            $criteria->removeSelectColumn($alias . '.id_product_image_set_to_product_image');
            $criteria->removeSelectColumn($alias . '.fk_product_image');
            $criteria->removeSelectColumn($alias . '.fk_product_image_set');
            $criteria->removeSelectColumn($alias . '.sort_order');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyProductImageSetToProductImageTableMap::DATABASE_NAME)->getTable(SpyProductImageSetToProductImageTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyProductImageSetToProductImage or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyProductImageSetToProductImage object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductImageSetToProductImageTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\ProductImage\Persistence\SpyProductImageSetToProductImage) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyProductImageSetToProductImageTableMap::DATABASE_NAME);
            $criteria->add(SpyProductImageSetToProductImageTableMap::COL_ID_PRODUCT_IMAGE_SET_TO_PRODUCT_IMAGE, (array) $values, Criteria::IN);
        }

        $query = SpyProductImageSetToProductImageQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyProductImageSetToProductImageTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyProductImageSetToProductImageTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_product_image_set_to_product_image table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyProductImageSetToProductImageQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyProductImageSetToProductImage or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyProductImageSetToProductImage object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductImageSetToProductImageTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyProductImageSetToProductImage object
        }


        // Set the correct dbName
        $query = SpyProductImageSetToProductImageQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
