<?php

namespace Orm\Zed\Content\Persistence\Map;

use Orm\Zed\Content\Persistence\SpyContent;
use Orm\Zed\Content\Persistence\SpyContentQuery;
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
 * This class defines the structure of the 'spy_content' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyContentTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.Content.Persistence.Map.SpyContentTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_content';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyContent';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\Content\\Persistence\\SpyContent';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.Content.Persistence.SpyContent';

    /**
     * The total number of columns
     */
    public const NUM_COLUMNS = 8;

    /**
     * The number of lazy-loaded columns
     */
    public const NUM_LAZY_LOAD_COLUMNS = 0;

    /**
     * The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS)
     */
    public const NUM_HYDRATE_COLUMNS = 8;

    /**
     * the column name for the id_content field
     */
    public const COL_ID_CONTENT = 'spy_content.id_content';

    /**
     * the column name for the content_term_key field
     */
    public const COL_CONTENT_TERM_KEY = 'spy_content.content_term_key';

    /**
     * the column name for the content_type_key field
     */
    public const COL_CONTENT_TYPE_KEY = 'spy_content.content_type_key';

    /**
     * the column name for the description field
     */
    public const COL_DESCRIPTION = 'spy_content.description';

    /**
     * the column name for the key field
     */
    public const COL_KEY = 'spy_content.key';

    /**
     * the column name for the name field
     */
    public const COL_NAME = 'spy_content.name';

    /**
     * the column name for the created_at field
     */
    public const COL_CREATED_AT = 'spy_content.created_at';

    /**
     * the column name for the updated_at field
     */
    public const COL_UPDATED_AT = 'spy_content.updated_at';

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
        self::TYPE_PHPNAME       => ['IdContent', 'ContentTermKey', 'ContentTypeKey', 'Description', 'Key', 'Name', 'CreatedAt', 'UpdatedAt', ],
        self::TYPE_CAMELNAME     => ['idContent', 'contentTermKey', 'contentTypeKey', 'description', 'key', 'name', 'createdAt', 'updatedAt', ],
        self::TYPE_COLNAME       => [SpyContentTableMap::COL_ID_CONTENT, SpyContentTableMap::COL_CONTENT_TERM_KEY, SpyContentTableMap::COL_CONTENT_TYPE_KEY, SpyContentTableMap::COL_DESCRIPTION, SpyContentTableMap::COL_KEY, SpyContentTableMap::COL_NAME, SpyContentTableMap::COL_CREATED_AT, SpyContentTableMap::COL_UPDATED_AT, ],
        self::TYPE_FIELDNAME     => ['id_content', 'content_term_key', 'content_type_key', 'description', 'key', 'name', 'created_at', 'updated_at', ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, ]
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
        self::TYPE_PHPNAME       => ['IdContent' => 0, 'ContentTermKey' => 1, 'ContentTypeKey' => 2, 'Description' => 3, 'Key' => 4, 'Name' => 5, 'CreatedAt' => 6, 'UpdatedAt' => 7, ],
        self::TYPE_CAMELNAME     => ['idContent' => 0, 'contentTermKey' => 1, 'contentTypeKey' => 2, 'description' => 3, 'key' => 4, 'name' => 5, 'createdAt' => 6, 'updatedAt' => 7, ],
        self::TYPE_COLNAME       => [SpyContentTableMap::COL_ID_CONTENT => 0, SpyContentTableMap::COL_CONTENT_TERM_KEY => 1, SpyContentTableMap::COL_CONTENT_TYPE_KEY => 2, SpyContentTableMap::COL_DESCRIPTION => 3, SpyContentTableMap::COL_KEY => 4, SpyContentTableMap::COL_NAME => 5, SpyContentTableMap::COL_CREATED_AT => 6, SpyContentTableMap::COL_UPDATED_AT => 7, ],
        self::TYPE_FIELDNAME     => ['id_content' => 0, 'content_term_key' => 1, 'content_type_key' => 2, 'description' => 3, 'key' => 4, 'name' => 5, 'created_at' => 6, 'updated_at' => 7, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, 5, 6, 7, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdContent' => 'ID_CONTENT',
        'SpyContent.IdContent' => 'ID_CONTENT',
        'idContent' => 'ID_CONTENT',
        'spyContent.idContent' => 'ID_CONTENT',
        'SpyContentTableMap::COL_ID_CONTENT' => 'ID_CONTENT',
        'COL_ID_CONTENT' => 'ID_CONTENT',
        'id_content' => 'ID_CONTENT',
        'spy_content.id_content' => 'ID_CONTENT',
        'ContentTermKey' => 'CONTENT_TERM_KEY',
        'SpyContent.ContentTermKey' => 'CONTENT_TERM_KEY',
        'contentTermKey' => 'CONTENT_TERM_KEY',
        'spyContent.contentTermKey' => 'CONTENT_TERM_KEY',
        'SpyContentTableMap::COL_CONTENT_TERM_KEY' => 'CONTENT_TERM_KEY',
        'COL_CONTENT_TERM_KEY' => 'CONTENT_TERM_KEY',
        'content_term_key' => 'CONTENT_TERM_KEY',
        'spy_content.content_term_key' => 'CONTENT_TERM_KEY',
        'ContentTypeKey' => 'CONTENT_TYPE_KEY',
        'SpyContent.ContentTypeKey' => 'CONTENT_TYPE_KEY',
        'contentTypeKey' => 'CONTENT_TYPE_KEY',
        'spyContent.contentTypeKey' => 'CONTENT_TYPE_KEY',
        'SpyContentTableMap::COL_CONTENT_TYPE_KEY' => 'CONTENT_TYPE_KEY',
        'COL_CONTENT_TYPE_KEY' => 'CONTENT_TYPE_KEY',
        'content_type_key' => 'CONTENT_TYPE_KEY',
        'spy_content.content_type_key' => 'CONTENT_TYPE_KEY',
        'Description' => 'DESCRIPTION',
        'SpyContent.Description' => 'DESCRIPTION',
        'description' => 'DESCRIPTION',
        'spyContent.description' => 'DESCRIPTION',
        'SpyContentTableMap::COL_DESCRIPTION' => 'DESCRIPTION',
        'COL_DESCRIPTION' => 'DESCRIPTION',
        'spy_content.description' => 'DESCRIPTION',
        'Key' => 'KEY',
        'SpyContent.Key' => 'KEY',
        'key' => 'KEY',
        'spyContent.key' => 'KEY',
        'SpyContentTableMap::COL_KEY' => 'KEY',
        'COL_KEY' => 'KEY',
        'spy_content.key' => 'KEY',
        'Name' => 'NAME',
        'SpyContent.Name' => 'NAME',
        'name' => 'NAME',
        'spyContent.name' => 'NAME',
        'SpyContentTableMap::COL_NAME' => 'NAME',
        'COL_NAME' => 'NAME',
        'spy_content.name' => 'NAME',
        'CreatedAt' => 'CREATED_AT',
        'SpyContent.CreatedAt' => 'CREATED_AT',
        'createdAt' => 'CREATED_AT',
        'spyContent.createdAt' => 'CREATED_AT',
        'SpyContentTableMap::COL_CREATED_AT' => 'CREATED_AT',
        'COL_CREATED_AT' => 'CREATED_AT',
        'created_at' => 'CREATED_AT',
        'spy_content.created_at' => 'CREATED_AT',
        'UpdatedAt' => 'UPDATED_AT',
        'SpyContent.UpdatedAt' => 'UPDATED_AT',
        'updatedAt' => 'UPDATED_AT',
        'spyContent.updatedAt' => 'UPDATED_AT',
        'SpyContentTableMap::COL_UPDATED_AT' => 'UPDATED_AT',
        'COL_UPDATED_AT' => 'UPDATED_AT',
        'updated_at' => 'UPDATED_AT',
        'spy_content.updated_at' => 'UPDATED_AT',
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
        $this->setName('spy_content');
        $this->setPhpName('SpyContent');
        $this->setIdentifierQuoting(true);
        $this->setClassName('\\Orm\\Zed\\Content\\Persistence\\SpyContent');
        $this->setPackage('src.Orm.Zed.Content.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_content_pk_seq');
        // columns
        $this->addPrimaryKey('id_content', 'IdContent', 'INTEGER', true, null, null);
        $this->addColumn('content_term_key', 'ContentTermKey', 'VARCHAR', true, 255, null);
        $this->addColumn('content_type_key', 'ContentTypeKey', 'VARCHAR', true, 255, null);
        $this->addColumn('description', 'Description', 'LONGVARCHAR', false, null, null);
        $this->addColumn('key', 'Key', 'VARCHAR', true, 255, null);
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
        $this->addRelation('SpyContentLocalized', '\\Orm\\Zed\\Content\\Persistence\\SpyContentLocalized', RelationMap::ONE_TO_MANY, array (
  0 =>
  array (
    0 => ':fk_content',
    1 => ':id_content',
  ),
), null, null, 'SpyContentLocalizeds', false);
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
            'event' => ['spy_content_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdContent', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdContent', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdContent', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdContent', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdContent', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdContent', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdContent', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyContentTableMap::CLASS_DEFAULT : SpyContentTableMap::OM_CLASS;
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
     * @return array (SpyContent object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyContentTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyContentTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyContentTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyContentTableMap::OM_CLASS;
            /** @var SpyContent $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyContentTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyContentTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyContentTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyContent $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyContentTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyContentTableMap::COL_ID_CONTENT);
            $criteria->addSelectColumn(SpyContentTableMap::COL_CONTENT_TERM_KEY);
            $criteria->addSelectColumn(SpyContentTableMap::COL_CONTENT_TYPE_KEY);
            $criteria->addSelectColumn(SpyContentTableMap::COL_DESCRIPTION);
            $criteria->addSelectColumn(SpyContentTableMap::COL_KEY);
            $criteria->addSelectColumn(SpyContentTableMap::COL_NAME);
            $criteria->addSelectColumn(SpyContentTableMap::COL_CREATED_AT);
            $criteria->addSelectColumn(SpyContentTableMap::COL_UPDATED_AT);
        } else {
            $criteria->addSelectColumn($alias . '.id_content');
            $criteria->addSelectColumn($alias . '.content_term_key');
            $criteria->addSelectColumn($alias . '.content_type_key');
            $criteria->addSelectColumn($alias . '.description');
            $criteria->addSelectColumn($alias . '.key');
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
            $criteria->removeSelectColumn(SpyContentTableMap::COL_ID_CONTENT);
            $criteria->removeSelectColumn(SpyContentTableMap::COL_CONTENT_TERM_KEY);
            $criteria->removeSelectColumn(SpyContentTableMap::COL_CONTENT_TYPE_KEY);
            $criteria->removeSelectColumn(SpyContentTableMap::COL_DESCRIPTION);
            $criteria->removeSelectColumn(SpyContentTableMap::COL_KEY);
            $criteria->removeSelectColumn(SpyContentTableMap::COL_NAME);
            $criteria->removeSelectColumn(SpyContentTableMap::COL_CREATED_AT);
            $criteria->removeSelectColumn(SpyContentTableMap::COL_UPDATED_AT);
        } else {
            $criteria->removeSelectColumn($alias . '.id_content');
            $criteria->removeSelectColumn($alias . '.content_term_key');
            $criteria->removeSelectColumn($alias . '.content_type_key');
            $criteria->removeSelectColumn($alias . '.description');
            $criteria->removeSelectColumn($alias . '.key');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyContentTableMap::DATABASE_NAME)->getTable(SpyContentTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyContent or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyContent object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyContentTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\Content\Persistence\SpyContent) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyContentTableMap::DATABASE_NAME);
            $criteria->add(SpyContentTableMap::COL_ID_CONTENT, (array) $values, Criteria::IN);
        }

        $query = SpyContentQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyContentTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyContentTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_content table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyContentQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyContent or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyContent object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyContentTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyContent object
        }

        if ($criteria->containsKey(SpyContentTableMap::COL_ID_CONTENT) && $criteria->keyContainsValue(SpyContentTableMap::COL_ID_CONTENT) ) {
            throw new PropelException('Cannot insert a value for auto-increment primary key ('.SpyContentTableMap::COL_ID_CONTENT.')');
        }


        // Set the correct dbName
        $query = SpyContentQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
