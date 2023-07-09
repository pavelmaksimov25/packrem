<?php

namespace Orm\Zed\FileManager\Persistence\Map;

use Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributes;
use Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributesQuery;
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
 * This class defines the structure of the 'spy_file_localized_attributes' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 */
class SpyFileLocalizedAttributesTableMap extends TableMap
{
    use InstancePoolTrait;
    use TableMapTrait;

    /**
     * The (dot-path) name of this class
     */
    public const CLASS_NAME = 'src.Orm.Zed.FileManager.Persistence.Map.SpyFileLocalizedAttributesTableMap';

    /**
     * The default database name for this class
     */
    public const DATABASE_NAME = 'zed';

    /**
     * The table name for this class
     */
    public const TABLE_NAME = 'spy_file_localized_attributes';

    /**
     * The PHP name of this class (PascalCase)
     */
    public const TABLE_PHP_NAME = 'SpyFileLocalizedAttributes';

    /**
     * The related Propel class for this table
     */
    public const OM_CLASS = '\\Orm\\Zed\\FileManager\\Persistence\\SpyFileLocalizedAttributes';

    /**
     * A class that can be returned by this tableMap
     */
    public const CLASS_DEFAULT = 'src.Orm.Zed.FileManager.Persistence.SpyFileLocalizedAttributes';

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
     * the column name for the id_file_localized_attributes field
     */
    public const COL_ID_FILE_LOCALIZED_ATTRIBUTES = 'spy_file_localized_attributes.id_file_localized_attributes';

    /**
     * the column name for the fk_file field
     */
    public const COL_FK_FILE = 'spy_file_localized_attributes.fk_file';

    /**
     * the column name for the fk_locale field
     */
    public const COL_FK_LOCALE = 'spy_file_localized_attributes.fk_locale';

    /**
     * the column name for the alt field
     */
    public const COL_ALT = 'spy_file_localized_attributes.alt';

    /**
     * the column name for the title field
     */
    public const COL_TITLE = 'spy_file_localized_attributes.title';

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
        self::TYPE_PHPNAME       => ['IdFileLocalizedAttributes', 'FkFile', 'FkLocale', 'Alt', 'Title', ],
        self::TYPE_CAMELNAME     => ['idFileLocalizedAttributes', 'fkFile', 'fkLocale', 'alt', 'title', ],
        self::TYPE_COLNAME       => [SpyFileLocalizedAttributesTableMap::COL_ID_FILE_LOCALIZED_ATTRIBUTES, SpyFileLocalizedAttributesTableMap::COL_FK_FILE, SpyFileLocalizedAttributesTableMap::COL_FK_LOCALE, SpyFileLocalizedAttributesTableMap::COL_ALT, SpyFileLocalizedAttributesTableMap::COL_TITLE, ],
        self::TYPE_FIELDNAME     => ['id_file_localized_attributes', 'fk_file', 'fk_locale', 'alt', 'title', ],
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
        self::TYPE_PHPNAME       => ['IdFileLocalizedAttributes' => 0, 'FkFile' => 1, 'FkLocale' => 2, 'Alt' => 3, 'Title' => 4, ],
        self::TYPE_CAMELNAME     => ['idFileLocalizedAttributes' => 0, 'fkFile' => 1, 'fkLocale' => 2, 'alt' => 3, 'title' => 4, ],
        self::TYPE_COLNAME       => [SpyFileLocalizedAttributesTableMap::COL_ID_FILE_LOCALIZED_ATTRIBUTES => 0, SpyFileLocalizedAttributesTableMap::COL_FK_FILE => 1, SpyFileLocalizedAttributesTableMap::COL_FK_LOCALE => 2, SpyFileLocalizedAttributesTableMap::COL_ALT => 3, SpyFileLocalizedAttributesTableMap::COL_TITLE => 4, ],
        self::TYPE_FIELDNAME     => ['id_file_localized_attributes' => 0, 'fk_file' => 1, 'fk_locale' => 2, 'alt' => 3, 'title' => 4, ],
        self::TYPE_NUM           => [0, 1, 2, 3, 4, ]
    ];

    /**
     * Holds a list of column names and their normalized version.
     *
     * @var array<string>
     */
    protected $normalizedColumnNameMap = [
        'IdFileLocalizedAttributes' => 'ID_FILE_LOCALIZED_ATTRIBUTES',
        'SpyFileLocalizedAttributes.IdFileLocalizedAttributes' => 'ID_FILE_LOCALIZED_ATTRIBUTES',
        'idFileLocalizedAttributes' => 'ID_FILE_LOCALIZED_ATTRIBUTES',
        'spyFileLocalizedAttributes.idFileLocalizedAttributes' => 'ID_FILE_LOCALIZED_ATTRIBUTES',
        'SpyFileLocalizedAttributesTableMap::COL_ID_FILE_LOCALIZED_ATTRIBUTES' => 'ID_FILE_LOCALIZED_ATTRIBUTES',
        'COL_ID_FILE_LOCALIZED_ATTRIBUTES' => 'ID_FILE_LOCALIZED_ATTRIBUTES',
        'id_file_localized_attributes' => 'ID_FILE_LOCALIZED_ATTRIBUTES',
        'spy_file_localized_attributes.id_file_localized_attributes' => 'ID_FILE_LOCALIZED_ATTRIBUTES',
        'FkFile' => 'FK_FILE',
        'SpyFileLocalizedAttributes.FkFile' => 'FK_FILE',
        'fkFile' => 'FK_FILE',
        'spyFileLocalizedAttributes.fkFile' => 'FK_FILE',
        'SpyFileLocalizedAttributesTableMap::COL_FK_FILE' => 'FK_FILE',
        'COL_FK_FILE' => 'FK_FILE',
        'fk_file' => 'FK_FILE',
        'spy_file_localized_attributes.fk_file' => 'FK_FILE',
        'FkLocale' => 'FK_LOCALE',
        'SpyFileLocalizedAttributes.FkLocale' => 'FK_LOCALE',
        'fkLocale' => 'FK_LOCALE',
        'spyFileLocalizedAttributes.fkLocale' => 'FK_LOCALE',
        'SpyFileLocalizedAttributesTableMap::COL_FK_LOCALE' => 'FK_LOCALE',
        'COL_FK_LOCALE' => 'FK_LOCALE',
        'fk_locale' => 'FK_LOCALE',
        'spy_file_localized_attributes.fk_locale' => 'FK_LOCALE',
        'Alt' => 'ALT',
        'SpyFileLocalizedAttributes.Alt' => 'ALT',
        'alt' => 'ALT',
        'spyFileLocalizedAttributes.alt' => 'ALT',
        'SpyFileLocalizedAttributesTableMap::COL_ALT' => 'ALT',
        'COL_ALT' => 'ALT',
        'spy_file_localized_attributes.alt' => 'ALT',
        'Title' => 'TITLE',
        'SpyFileLocalizedAttributes.Title' => 'TITLE',
        'title' => 'TITLE',
        'spyFileLocalizedAttributes.title' => 'TITLE',
        'SpyFileLocalizedAttributesTableMap::COL_TITLE' => 'TITLE',
        'COL_TITLE' => 'TITLE',
        'spy_file_localized_attributes.title' => 'TITLE',
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
        $this->setName('spy_file_localized_attributes');
        $this->setPhpName('SpyFileLocalizedAttributes');
        $this->setIdentifierQuoting(false);
        $this->setClassName('\\Orm\\Zed\\FileManager\\Persistence\\SpyFileLocalizedAttributes');
        $this->setPackage('src.Orm.Zed.FileManager.Persistence');
        $this->setUseIdGenerator(true);
        $this->setPrimaryKeyMethodInfo('spy_file_localized_attributes_pk_seq');
        // columns
        $this->addPrimaryKey('id_file_localized_attributes', 'IdFileLocalizedAttributes', 'INTEGER', true, null, null);
        $this->addForeignKey('fk_file', 'FkFile', 'INTEGER', 'spy_file', 'id_file', true, null, null);
        $this->addForeignKey('fk_locale', 'FkLocale', 'INTEGER', 'spy_locale', 'id_locale', true, null, null);
        $this->addColumn('alt', 'Alt', 'LONGVARCHAR', false, null, null);
        $this->addColumn('title', 'Title', 'VARCHAR', false, 255, null);
    }

    /**
     * Build the RelationMap objects for this table relationships
     *
     * @return void
     */
    public function buildRelations(): void
    {
        $this->addRelation('SpyFile', '\\Orm\\Zed\\FileManager\\Persistence\\SpyFile', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_file',
    1 => ':id_file',
  ),
), 'CASCADE', 'CASCADE', null, false);
        $this->addRelation('Locale', '\\Orm\\Zed\\Locale\\Persistence\\SpyLocale', RelationMap::MANY_TO_ONE, array (
  0 =>
  array (
    0 => ':fk_locale',
    1 => ':id_locale',
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
            'event' => ['spy_file_localized_attributes_all' => ['column' => '*']],
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
        if ($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFileLocalizedAttributes', TableMap::TYPE_PHPNAME, $indexType)] === null) {
            return null;
        }

        return null === $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFileLocalizedAttributes', TableMap::TYPE_PHPNAME, $indexType)] || is_scalar($row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFileLocalizedAttributes', TableMap::TYPE_PHPNAME, $indexType)]) || is_callable([$row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFileLocalizedAttributes', TableMap::TYPE_PHPNAME, $indexType)], '__toString']) ? (string) $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFileLocalizedAttributes', TableMap::TYPE_PHPNAME, $indexType)] : $row[TableMap::TYPE_NUM == $indexType ? 0 + $offset : static::translateFieldName('IdFileLocalizedAttributes', TableMap::TYPE_PHPNAME, $indexType)];
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
                : self::translateFieldName('IdFileLocalizedAttributes', TableMap::TYPE_PHPNAME, $indexType)
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
        return $withPrefix ? SpyFileLocalizedAttributesTableMap::CLASS_DEFAULT : SpyFileLocalizedAttributesTableMap::OM_CLASS;
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
     * @return array (SpyFileLocalizedAttributes object, last column rank)
     */
    public static function populateObject(array $row, int $offset = 0, string $indexType = TableMap::TYPE_NUM): array
    {
        $key = SpyFileLocalizedAttributesTableMap::getPrimaryKeyHashFromRow($row, $offset, $indexType);
        if (null !== ($obj = SpyFileLocalizedAttributesTableMap::getInstanceFromPool($key))) {
            // We no longer rehydrate the object, since this can cause data loss.
            // See http://www.propelorm.org/ticket/509
            // $obj->hydrate($row, $offset, true); // rehydrate
            $col = $offset + SpyFileLocalizedAttributesTableMap::NUM_HYDRATE_COLUMNS;
        } else {
            $cls = SpyFileLocalizedAttributesTableMap::OM_CLASS;
            /** @var SpyFileLocalizedAttributes $obj */
            $obj = new $cls();
            $col = $obj->hydrate($row, $offset, false, $indexType);
            SpyFileLocalizedAttributesTableMap::addInstanceToPool($obj, $key);
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
            $key = SpyFileLocalizedAttributesTableMap::getPrimaryKeyHashFromRow($row, 0, $dataFetcher->getIndexType());
            if (null !== ($obj = SpyFileLocalizedAttributesTableMap::getInstanceFromPool($key))) {
                // We no longer rehydrate the object, since this can cause data loss.
                // See http://www.propelorm.org/ticket/509
                // $obj->hydrate($row, 0, true); // rehydrate
                $results[] = $obj;
            } else {
                /** @var SpyFileLocalizedAttributes $obj */
                $obj = new $cls();
                $obj->hydrate($row);
                $results[] = $obj;
                SpyFileLocalizedAttributesTableMap::addInstanceToPool($obj, $key);
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
            $criteria->addSelectColumn(SpyFileLocalizedAttributesTableMap::COL_ID_FILE_LOCALIZED_ATTRIBUTES);
            $criteria->addSelectColumn(SpyFileLocalizedAttributesTableMap::COL_FK_FILE);
            $criteria->addSelectColumn(SpyFileLocalizedAttributesTableMap::COL_FK_LOCALE);
            $criteria->addSelectColumn(SpyFileLocalizedAttributesTableMap::COL_ALT);
            $criteria->addSelectColumn(SpyFileLocalizedAttributesTableMap::COL_TITLE);
        } else {
            $criteria->addSelectColumn($alias . '.id_file_localized_attributes');
            $criteria->addSelectColumn($alias . '.fk_file');
            $criteria->addSelectColumn($alias . '.fk_locale');
            $criteria->addSelectColumn($alias . '.alt');
            $criteria->addSelectColumn($alias . '.title');
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
            $criteria->removeSelectColumn(SpyFileLocalizedAttributesTableMap::COL_ID_FILE_LOCALIZED_ATTRIBUTES);
            $criteria->removeSelectColumn(SpyFileLocalizedAttributesTableMap::COL_FK_FILE);
            $criteria->removeSelectColumn(SpyFileLocalizedAttributesTableMap::COL_FK_LOCALE);
            $criteria->removeSelectColumn(SpyFileLocalizedAttributesTableMap::COL_ALT);
            $criteria->removeSelectColumn(SpyFileLocalizedAttributesTableMap::COL_TITLE);
        } else {
            $criteria->removeSelectColumn($alias . '.id_file_localized_attributes');
            $criteria->removeSelectColumn($alias . '.fk_file');
            $criteria->removeSelectColumn($alias . '.fk_locale');
            $criteria->removeSelectColumn($alias . '.alt');
            $criteria->removeSelectColumn($alias . '.title');
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
        return Propel::getServiceContainer()->getDatabaseMap(SpyFileLocalizedAttributesTableMap::DATABASE_NAME)->getTable(SpyFileLocalizedAttributesTableMap::TABLE_NAME);
    }

    /**
     * Performs a DELETE on the database, given a SpyFileLocalizedAttributes or Criteria object OR a primary key value.
     *
     * @param mixed $values Criteria or SpyFileLocalizedAttributes object or primary key or array of primary keys
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileLocalizedAttributesTableMap::DATABASE_NAME);
        }

        if ($values instanceof Criteria) {
            // rename for clarity
            $criteria = $values;
        } elseif ($values instanceof \Orm\Zed\FileManager\Persistence\SpyFileLocalizedAttributes) { // it's a model object
            // create criteria based on pk values
            $criteria = $values->buildPkeyCriteria();
        } else { // it's a primary key, or an array of pks
            $criteria = new Criteria(SpyFileLocalizedAttributesTableMap::DATABASE_NAME);
            $criteria->add(SpyFileLocalizedAttributesTableMap::COL_ID_FILE_LOCALIZED_ATTRIBUTES, (array) $values, Criteria::IN);
        }

        $query = SpyFileLocalizedAttributesQuery::create()->mergeWith($criteria);

        if ($values instanceof Criteria) {
            SpyFileLocalizedAttributesTableMap::clearInstancePool();
        } elseif (!is_object($values)) { // it's a primary key, or an array of pks
            foreach ((array) $values as $singleval) {
                SpyFileLocalizedAttributesTableMap::removeInstanceFromPool($singleval);
            }
        }

        return $query->delete($con);
    }

    /**
     * Deletes all rows from the spy_file_localized_attributes table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public static function doDeleteAll(?ConnectionInterface $con = null): int
    {
        return SpyFileLocalizedAttributesQuery::create()->doDeleteAll($con);
    }

    /**
     * Performs an INSERT on the database, given a SpyFileLocalizedAttributes or Criteria object.
     *
     * @param mixed $criteria Criteria or SpyFileLocalizedAttributes object containing data that is used to create the INSERT statement.
     * @param ConnectionInterface $con the ConnectionInterface connection to use
     * @return mixed The new primary key.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public static function doInsert($criteria, ?ConnectionInterface $con = null)
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyFileLocalizedAttributesTableMap::DATABASE_NAME);
        }

        if ($criteria instanceof Criteria) {
            $criteria = clone $criteria; // rename for clarity
        } else {
            $criteria = $criteria->buildCriteria(); // build Criteria from SpyFileLocalizedAttributes object
        }


        // Set the correct dbName
        $query = SpyFileLocalizedAttributesQuery::create()->mergeWith($criteria);

        // use transaction because $criteria could contain info
        // for more than one table (I guess, conceivably)
        return $con->transaction(function () use ($con, $query) {
            return $query->doInsert($con);
        });
    }

}
