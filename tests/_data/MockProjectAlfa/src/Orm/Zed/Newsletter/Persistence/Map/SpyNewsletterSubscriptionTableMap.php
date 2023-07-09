<?php

namespace Orm\Zed\Newsletter\Persistence\Map;

use Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription;
use Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscriptionQuery;
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
 * This class defines the structure of the 'spy_newsletter_subscription' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyNewsletterSubscriptionTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.Newsletter.Persistence.Map.SpyNewsletterSubscriptionTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_newsletter_subscription';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyNewsletterSubscription';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\Newsletter\\Persistence\\SpyNewsletterSubscription';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.Newsletter.Persistence.SpyNewsletterSubscription';

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
     * the column name for the fk_newsletter_subscriber field
     */
    public const COL_FK_NEWSLETTER_SUBSCRIBER = 'spy_newsletter_subscription.fk_newsletter_subscriber';

    /**
     * the column name for the fk_newsletter_type field
     */
    public const COL_FK_NEWSLETTER_TYPE = 'spy_newsletter_subscription.fk_newsletter_type';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_newsletter_subscription.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_newsletter_subscription.updated_at';

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
        self::TYPE_PHPNAME       => ['FkNewsletterSubscriber', 'FkNewsletterType', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['fkNewsletterSubscriber', 'fkNewsletterType', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_SUBSCRIBER, SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_TYPE, SpyNewsletterSubscriptionTableMap::COL_CREATED_AT, SpyNewsletterSubscriptionTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['fk_newsletter_subscriber', 'fk_newsletter_type', 'created_at', 'updated_at', ],
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
        self::TYPE_PHPNAME       => ['FkNewsletterSubscriber' => 0, 'FkNewsletterType' => 1, 'CreatedAt' => 2, 'UpdatedAt' => 3, ],
        self::TYPE_CAMELNAME     => ['fkNewsletterSubscriber' => 0, 'fkNewsletterType' => 1, 'createdAt' => 2, 'updatedAt' => 3, ],
        self::TYPE_COLNAME       => [SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_SUBSCRIBER => 0, SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_TYPE => 1, SpyNewsletterSubscriptionTableMap::COL_CREATED_AT => 2, SpyNewsletterSubscriptionTableMap::COL_UPDATED_AT => 3, ],
        self::TYPE_FIELDNAME     => ['fk_newsletter_subscriber' => 0, 'fk_newsletter_type' => 1, 'created_at' => 2, 'updated_at' => 3, ],
        self::TYPE_NUM           => [0, 1, 2, 3, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'FkNewsletterSubscriber' => 'FK_NEWSLETTER_SUBSCRIBER',
        'SpyNewsletterSubscription.FkNewsletterSubscriber' => 'FK_NEWSLETTER_SUBSCRIBER',
        'fkNewsletterSubscriber' => 'FK_NEWSLETTER_SUBSCRIBER',
        'spyNewsletterSubscription.fkNewsletterSubscriber' => 'FK_NEWSLETTER_SUBSCRIBER',
        'SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_SUBSCRIBER' => 'FK_NEWSLETTER_SUBSCRIBER',
        'COL_FK_NEWSLETTER_SUBSCRIBER' => 'FK_NEWSLETTER_SUBSCRIBER',
        'fk_newsletter_subscriber' => 'FK_NEWSLETTER_SUBSCRIBER',
        'spy_newsletter_subscription.fk_newsletter_subscriber' => 'FK_NEWSLETTER_SUBSCRIBER',
        'FkNewsletterType' => 'FK_NEWSLETTER_TYPE',
        'SpyNewsletterSubscription.FkNewsletterType' => 'FK_NEWSLETTER_TYPE',
        'fkNewsletterType' => 'FK_NEWSLETTER_TYPE',
        'spyNewsletterSubscription.fkNewsletterType' => 'FK_NEWSLETTER_TYPE',
        'SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_TYPE' => 'FK_NEWSLETTER_TYPE',
        'COL_FK_NEWSLETTER_TYPE' => 'FK_NEWSLETTER_TYPE',
        'fk_newsletter_type' => 'FK_NEWSLETTER_TYPE',
        'spy_newsletter_subscription.fk_newsletter_type' => 'FK_NEWSLETTER_TYPE',
        'CreatedAt' => 'CREATED_AT',
        'SpyNewsletterSubscription.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyNewsletterSubscription.createdAt' => 'CREATED_AT',
        'SpyNewsletterSubscriptionTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_newsletter_subscription.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyNewsletterSubscription.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyNewsletterSubscription.updatedAt' => 'UPDATED_AT',
        'SpyNewsletterSubscriptionTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_newsletter_subscription.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_newsletter_subscription');
        $this->setPhpName('SpyNewsletterSubscription');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\Newsletter\\Persistence\\SpyNewsletterSubscription');
        $this->setPackage('src.Orm.Zed.Newsletter.Persistence');
        $this->setUseIdGenerator(false);
        $this->setIsCrossRef(true);
        // columns
        $this->addForeignPrimaryKey('fk_newsletter_subscriber', 'FkNewsletterSubscriber', 'INTEGER' , 'spy_newsletter_subscriber', 'id_newsletter_subscriber', true, null, null);
        $this->addForeignPrimaryKey('fk_newsletter_type', 'FkNewsletterType', 'INTEGER' , 'spy_newsletter_type', 'id_newsletter_type', true, null, null);
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
        $this->addRelation('SpyNewsletterSubscriber', '\\Orm\\Zed\\Newsletter\\Persistence\\SpyNewsletterSubscriber', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_newsletter_subscriber',
    1 => ':id_newsletter_subscriber',
  ),
), null, null, null, false);
        $this->addRelation('SpyNewsletterType', '\\Orm\\Zed\\Newsletter\\Persistence\\SpyNewsletterType', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_newsletter_type',
    1 => ':id_newsletter_type',
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
            'timestampable' => ['create_column' => 'created_at', 'update_column' => 'updated_at', 'disable_created_at' => 'false', 'disable_updated_at' => 'false'],
        ];
    }

    /**
     * Adds an object to the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database. In some cases you may need to explicitly add objects
     * to the cache in order to ensure that the same objects are always returned by find*()
     * and findPk*() calls.
     *
     * @param \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription $obj A \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription object.
     * @param string|null $key Key (optional) to use for instance map (for performance boost if key was already calculated externally).
     *
     * @return void
     */
    public static function addInstanceToPool(SpyNewsletterSubscription $obj, ?string $key = null): void
    {
        if (Propel::isInstancePoolingEnabled()) {
            if (null === $key) {
                $key = serialize([(null === $obj->getFkNewsletterSubscriber() || is_scalar($obj->getFkNewsletterSubscriber()) || is_callable([$obj->getFkNewsletterSubscriber(), '__toString']) ? (string) $obj->getFkNewsletterSubscriber() : $obj->getFkNewsletterSubscriber()), (null === $obj->getFkNewsletterType() || is_scalar($obj->getFkNewsletterType()) || is_callable([$obj->getFkNewsletterType(), '__toString']) ? (string) $obj->getFkNewsletterType() : $obj->getFkNewsletterType())]);
            } // if key === null
            self::$instances[$key] = $obj;
        }
    }

    /**
     * Removes an object from the instance pool.
     *
     * Propel keeps cached copies of objects in an instance pool when they are retrieved
     * from the database.  In some cases -- especially when you override doDelete
     * methods in your stub classes -- you may need to explicitly remove objects
     * from the cache in order to prevent returning objects that no longer exist.
     *
     * @param mixed $value A \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription object or a primary key value.
     *
     * @return void
     */
    public static function removeInstanceFromPool($value): void
    {
        if (Propel::isInstancePoolingEnabled() && null !== $value) {
            if (is_object($value) && $value instanceof \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription) {
                $key = serialize([(null === $value->getFkNewsletterSubscriber() || is_scalar($value->getFkNewsletterSubscriber()) || is_callable([$value->getFkNewsletterSubscriber(), '__toString']) ? (string) $value->getFkNewsletterSubscriber() : $value->getFkNewsletterSubscriber()), (null === $value->getFkNewsletterType() || is_scalar($value->getFkNewsletterType()) || is_callable([$value->getFkNewsletterType(), '__toString']) ? (string) $value->getFkNewsletterType() : $value->getFkNewsletterType())]);

            } elseif (is_array($value) && count($value) === 2) {
                // assume we've been passed a primary key";
                $key = serialize([(null === $value[0] || is_scalar($value[0]) || is_callable([$value[0], '__toString']) ? (string) $value[0] : $value[0]), (null === $value[1] || is_scalar($value[1]) || is_callable([$value[1], '__toString']) ? (string) $value[1] : $value[1])]);
            } elseif ($value instanceof Criteria) {
                self::$instances = [];

                return;
            } else {
                $e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value, true)));
                throw $e;
            }

            unset(self::$instances[$key]);
        }
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkNewsletterSubscriber', TableMap::TYPE_PHPNAME, $indexType)] === null && $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkNewsletterType', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return serialize([(null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkNewsletterSubscriber', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkNewsletterSubscriber', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkNewsletterSubscriber', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkNewsletterSubscriber', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('FkNewsletterSubscriber', TableMap::TYPE_PHPNAME, $indexType)]), (null === $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkNewsletterType', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkNewsletterType', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkNewsletterType', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkNewsletterType', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 1 + $offset : static::translateFieldName('FkNewsletterType', TableMap::TYPE_PHPNAME, $indexType)])]);
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
            $pks = [];

        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 0 + $offset
                : self::translateFieldName('FkNewsletterSubscriber', TableMap::TYPE_PHPNAME, $indexType)
        ];
        $pks[] = (int) $row[
            $indexType == TableMap::TYPE_NUM
                ? 1 + $offset
                : self::translateFieldName('FkNewsletterType', TableMap::TYPE_PHPNAME, $indexType)
        ];

        return $pks;
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
        return $withPrefix ? SpyNewsletterSubscriptionTableMap::CLASS_DEFAULT : SpyNewsletterSubscriptionTableMap::OM_CLASS;
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
     * @return array (SpyNewsletterSubscription object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyNewsletterSubscriptionTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyNewsletterSubscriptionTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyNewsletterSubscriptionTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyNewsletterSubscriptionTableMap::OM_CLASS;
            /** @var SpyNewsletterSubscription $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyNewsletterSubscriptionTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyNewsletterSubscriptionTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyNewsletterSubscriptionTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyNewsletterSubscription $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyNewsletterSubscriptionTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_SUBSCRIBER);
            $criteria->addSelectColumn(SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_TYPE);
            $criteria->addSelectColumn(SpyNewsletterSubscriptionTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyNewsletterSubscriptionTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.fk_newsletter_subscriber');
            $criteria->addSelectColumn($alias . '.fk_newsletter_type');
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
            $criteria->removeSelectColumn(SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_SUBSCRIBER);
            $criteria->removeSelectColumn(SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_TYPE);
            $criteria->removeSelectColumn(SpyNewsletterSubscriptionTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyNewsletterSubscriptionTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.fk_newsletter_subscriber');
            $criteria->removeSelectColumn($alias . '.fk_newsletter_type');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyNewsletterSubscriptionTableMap::DATABASE_NAME)->getTable(SpyNewsletterSubscriptionTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyNewsletterSubscription or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyNewsletterSubscription object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyNewsletterSubscriptionTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Newsletter\Persistence\SpyNewsletterSubscription) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyNewsletterSubscriptionTableMap::DATABASE_NAME);
            // primary key is composite; we therefore, expect
            // the primary key passed to be an array of pkey values
            if (count($values) == count($values, COUNT_RECURSIVE)) {
                // array is not multi-dimensional
                $values = [$values];
            }
            foreach ($values as $value) {
                $criterion = $criteria->getNewCriterion(SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_SUBSCRIBER, $value[0]);
                $criterion->addAnd($criteria->getNewCriterion(SpyNewsletterSubscriptionTableMap::COL_FK_NEWSLETTER_TYPE, $value[1]));
                $criteria->addOr($criterion);
            }
        }

        $query = SpyNewsletterSubscriptionQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyNewsletterSubscriptionTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyNewsletterSubscriptionTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_newsletter_subscription table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyNewsletterSubscriptionQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyNewsletterSubscription or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyNewsletterSubscription object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyNewsletterSubscriptionTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyNewsletterSubscription object
        }


        // Set the correct dbName
        $query = SpyNewsletterSubscriptionQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
