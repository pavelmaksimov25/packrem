<?php

namespace Orm\Zed\CategoryImage\Persistence\Base;

use \DateTime;
use \Exception;
use \PDO;
use Orm\Zed\CategoryImage\Persistence\SpyCategoryImage as ChildSpyCategoryImage;
use Orm\Zed\CategoryImage\Persistence\SpyCategoryImageQuery as ChildSpyCategoryImageQuery;
use Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImage as ChildSpyCategoryImageSetToCategoryImage;
use Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImageQuery as ChildSpyCategoryImageSetToCategoryImageQuery;
use Orm\Zed\CategoryImage\Persistence\Map\SpyCategoryImageSetToCategoryImageTableMap;
use Orm\Zed\CategoryImage\Persistence\Map\SpyCategoryImageTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Propel\Runtime\Util\PropelDateTime;
use Spryker\Zed\PropelReplicationCache\Business\PropelReplicationCacheFacade;

/**
 * Base class that represents a row from the 'spy_category_image' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.CategoryImage.Persistence.Base
 */
abstract class SpyCategoryImage implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = '\\Orm\\Zed\\CategoryImage\\Persistence\\Map\\SpyCategoryImageTableMap';


    /**
     * attribute to determine if this object has previously been saved.
     * @var bool
     */
    protected $new = true;

    /**
     * attribute to determine whether this object has been deleted.
     * @var bool
     */
    protected $deleted = false;

    /**
     * The columns that have been modified in current object.
     * Tracking modified columns allows us to only update modified columns.
     * @var array
     */
    protected $modifiedColumns = [];

    /**
     * The (virtual) columns that are added at runtime
     * The formatters can add supplementary columns based on a resultset
     * @var array
     */
    protected $virtualColumns = [];

    /**
     * The value for the id_category_image field.
     *
     * @var        int
     */
    protected $id_category_image;

    /**
     * The value for the external_url_large field.
     *
     * @var        string|null
     */
    protected $external_url_large;

    /**
     * The value for the external_url_small field.
     *
     * @var        string|null
     */
    protected $external_url_small;

    /**
     * The value for the created_at field.
     *
     * @var        DateTime|null
     */
    protected $created_at;

    /**
     * The value for the updated_at field.
     *
     * @var        DateTime|null
     */
    protected $updated_at;

    /**
     * @var        ObjectCollection|ChildSpyCategoryImageSetToCategoryImage[] Collection to store aggregation of ChildSpyCategoryImageSetToCategoryImage objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyCategoryImageSetToCategoryImage> Collection to store aggregation of ChildSpyCategoryImageSetToCategoryImage objects.
     */
    protected $collSpyCategoryImageSetToCategoryImages;
    protected $collSpyCategoryImageSetToCategoryImagesPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var bool
     */
    protected $alreadyInSave = false;

    // event behavior

    /**
     * @var string
     */
    private $_eventName;

    /**
     * @var bool
     */
    private $_isModified;

    /**
     * @var array
     */
    private $_modifiedColumns;

    /**
     * @var array
     */
    private $_initialValues;

    /**
     * @var bool
     */
    private $_isEventDisabled;

    /**
     * @var array
     */
    private $_foreignKeys = [
    ];

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyCategoryImageSetToCategoryImage[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyCategoryImageSetToCategoryImage>
     */
    protected $spyCategoryImageSetToCategoryImagesScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\CategoryImage\Persistence\Base\SpyCategoryImage object.
     */
    public function __construct()
    {
    }

    /**
     * Returns whether the object has been modified.
     *
     * @return bool True if the object has been modified.
     */
    public function isModified(): bool
    {
        return !!$this->modifiedColumns;
    }

    /**
     * Has specified column been modified?
     *
     * @param string $col column fully qualified name (TableMap::TYPE_COLNAME), e.g. Book::AUTHOR_ID
     * @return bool True if $col has been modified.
     */
    public function isColumnModified(string $col): bool
    {
        return $this->modifiedColumns && isset($this->modifiedColumns[$col]);
    }

    /**
     * Get the columns that have been modified in this object.
     * @return array A unique list of the modified column names for this object.
     */
    public function getModifiedColumns(): array
    {
        return $this->modifiedColumns ? array_keys($this->modifiedColumns) : [];
    }

    /**
     * Returns whether the object has ever been saved.  This will
     * be false, if the object was retrieved from storage or was created
     * and then saved.
     *
     * @return bool True, if the object has never been persisted.
     */
    public function isNew(): bool
    {
        return $this->new;
    }

    /**
     * Setter for the isNew attribute.  This method will be called
     * by Propel-generated children and objects.
     *
     * @param bool $b the state of the object.
     */
    public function setNew(bool $b): void
    {
        $this->new = $b;
    }

    /**
     * Whether this object has been deleted.
     * @return bool The deleted state of this object.
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * Specify whether this object has been deleted.
     * @param bool $b The deleted state of this object.
     * @return void
     */
    public function setDeleted(bool $b): void
    {
        $this->deleted = $b;
    }

    /**
     * Sets the modified state for the object to be false.
     * @param string $col If supplied, only the specified column is reset.
     * @return void
     */
    public function resetModified(?string $col = null): void
    {
        if (null !== $col) {
            unset($this->modifiedColumns[$col]);
        } else {
            $this->modifiedColumns = [];
        }
    }

    /**
     * Compares this with another <code>SpyCategoryImage</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyCategoryImage</code>, delegates to
     * <code>equals(SpyCategoryImage)</code>.  Otherwise, returns <code>false</code>.
     *
     * @param mixed $obj The object to compare to.
     * @return bool Whether equal to the object specified.
     */
    public function equals($obj): bool
    {
        if (!$obj instanceof static) {
            return false;
        }

        if ($this === $obj) {
            return true;
        }

        if (null === $this->getPrimaryKey() || null === $obj->getPrimaryKey()) {
            return false;
        }

        return $this->getPrimaryKey() === $obj->getPrimaryKey();
    }

    /**
     * Get the associative array of the virtual columns in this object
     *
     * @return array
     */
    public function getVirtualColumns(): array
    {
        return $this->virtualColumns;
    }

    /**
     * Checks the existence of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @return bool
     */
    public function hasVirtualColumn(string $name): bool
    {
        return array_key_exists($name, $this->virtualColumns);
    }

    /**
     * Get the value of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @return mixed
     *
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getVirtualColumn(string $name)
    {
        if (!$this->hasVirtualColumn($name)) {
            throw new PropelException(sprintf('Cannot get value of nonexistent virtual column `%s`.', $name));
        }

        return $this->virtualColumns[$name];
    }

    /**
     * Set the value of a virtual column in this object
     *
     * @param string $name The virtual column name
     * @param mixed $value The value to give to the virtual column
     *
     * @return $this The current object, for fluid interface
     */
    public function setVirtualColumn(string $name, $value)
    {
        $this->virtualColumns[$name] = $value;

        return $this;
    }

    /**
     * Logs a message using Propel::log().
     *
     * @param string $msg
     * @param int $priority One of the Propel::LOG_* logging levels
     * @return void
     */
    protected function log(string $msg, int $priority = Propel::LOG_INFO): void
    {
        Propel::log(get_class($this) . ': ' . $msg, $priority);
    }

    /**
     * Export the current object properties to a string, using a given parser format
     * <code>
     * $book = BookQuery::create()->findPk(9012);
     * echo $book->exportTo('JSON');
     *  => {"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * @param \Propel\Runtime\Parser\AbstractParser|string $parser An AbstractParser instance, or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param bool $includeLazyLoadColumns (optional) Whether to include lazy load(ed) columns. Defaults to TRUE.
     * @param string $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME, TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM. Defaults to TableMap::TYPE_PHPNAME.
     * @return string The exported data
     */
    public function exportTo($parser, bool $includeLazyLoadColumns = true, string $keyType = TableMap::TYPE_PHPNAME): string
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        return $parser->fromArray($this->toArray($keyType, $includeLazyLoadColumns, array(), true));
    }

    /**
     * Clean up internal collections prior to serializing
     * Avoids recursive loops that turn into segmentation faults when serializing
     *
     * @return array<string>
     */
    public function __sleep(): array
    {
        $this->clearAllReferences();

        $cls = new \ReflectionClass($this);
        $propertyNames = [];
        $serializableProperties = array_diff($cls->getProperties(), $cls->getProperties(\ReflectionProperty::IS_STATIC));

        foreach($serializableProperties as $property) {
            $propertyNames[] = $property->getName();
        }

        return $propertyNames;
    }

    /**
     * Get the [id_category_image] column value.
     *
     * @return int
     */
    public function getIdCategoryImage()
    {
        return $this->id_category_image;
    }

    /**
     * Get the [external_url_large] column value.
     *
     * @return string|null
     */
    public function getExternalUrlLarge()
    {
        return $this->external_url_large;
    }

    /**
     * Get the [external_url_small] column value.
     *
     * @return string|null
     */
    public function getExternalUrlSmall()
    {
        return $this->external_url_small;
    }

    /**
     * Get the [optionally formatted] temporal [created_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime|null Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00.
     *
     * @throws \Propel\Runtime\Exception\PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime|null : string|null)
     */
    public function getCreatedAt($format = null)
    {
        if ($format === null) {
            return $this->created_at;
        } else {
            return $this->created_at instanceof \DateTimeInterface ? $this->created_at->format($format) : null;
        }
    }

    /**
     * Get the [optionally formatted] temporal [updated_at] column value.
     *
     *
     * @param string|null $format The date/time format string (either date()-style or strftime()-style).
     *   If format is NULL, then the raw DateTime object will be returned.
     *
     * @return string|DateTime|null Formatted date/time value as string or DateTime object (if format is NULL), NULL if column is NULL, and 0 if column value is 0000-00-00 00:00:00.
     *
     * @throws \Propel\Runtime\Exception\PropelException - if unable to parse/validate the date/time value.
     *
     * @psalm-return ($format is null ? DateTime|null : string|null)
     */
    public function getUpdatedAt($format = null)
    {
        if ($format === null) {
            return $this->updated_at;
        } else {
            return $this->updated_at instanceof \DateTimeInterface ? $this->updated_at->format($format) : null;
        }
    }

    /**
     * Set the value of [id_category_image] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setIdCategoryImage($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_category_image !== $v) {
            $this->id_category_image = $v;
            $this->modifiedColumns[SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [external_url_large] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setExternalUrlLarge($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->external_url_large !== $v) {
            $this->external_url_large = $v;
            $this->modifiedColumns[SpyCategoryImageTableMap::COL_EXTERNAL_URL_LARGE] = true;
        }

        return $this;
    }

    /**
     * Set the value of [external_url_small] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setExternalUrlSmall($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->external_url_small !== $v) {
            $this->external_url_small = $v;
            $this->modifiedColumns[SpyCategoryImageTableMap::COL_EXTERNAL_URL_SMALL] = true;
        }

        return $this;
    }

    /**
     * Sets the value of [created_at] column to a normalized version of the date/time value specified.
     *
     * @param string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this The current object (for fluent API support)
     */
    public function setCreatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->created_at !== null || $dt !== null) {
            if ($this->created_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->created_at->format("Y-m-d H:i:s.u")) {
                $this->created_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyCategoryImageTableMap::COL_CREATED_AT] = true;
            }
        } // if either are not null

        return $this;
    }

    /**
     * Sets the value of [updated_at] column to a normalized version of the date/time value specified.
     *
     * @param string|integer|\DateTimeInterface|null $v string, integer (timestamp), or \DateTimeInterface value.
     *               Empty strings are treated as NULL.
     * @return $this The current object (for fluent API support)
     */
    public function setUpdatedAt($v)
    {
        $dt = PropelDateTime::newInstance($v, null, 'DateTime');
        if ($this->updated_at !== null || $dt !== null) {
            if ($this->updated_at === null || $dt === null || $dt->format("Y-m-d H:i:s.u") !== $this->updated_at->format("Y-m-d H:i:s.u")) {
                $this->updated_at = $dt === null ? null : clone $dt;
                $this->modifiedColumns[SpyCategoryImageTableMap::COL_UPDATED_AT] = true;
            }
        } // if either are not null

        return $this;
    }

    /**
     * Indicates whether the columns in this object are only set to default values.
     *
     * This method can be used in conjunction with isModified() to indicate whether an object is both
     * modified _and_ has some values set which are non-default.
     *
     * @return bool Whether the columns in this object are only been set with default values.
     */
    public function hasOnlyDefaultValues(): bool
    {
        // otherwise, everything was equal, so return TRUE
        return true;
    }

    /**
     * Hydrates (populates) the object variables with values from the database resultset.
     *
     * An offset (0-based "start column") is specified so that objects can be hydrated
     * with a subset of the columns in the resultset rows.  This is needed, for example,
     * for results of JOIN queries where the resultset row includes columns from two or
     * more tables.
     *
     * @param array $row The row returned by DataFetcher->fetch().
     * @param int $startcol 0-based offset column which indicates which resultset column to start with.
     * @param bool $rehydrate Whether this object is being re-hydrated from the database.
     * @param string $indexType The index type of $row. Mostly DataFetcher->getIndexType().
                                  One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                            TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *
     * @return int next starting column
     * @throws \Propel\Runtime\Exception\PropelException - Any caught Exception will be rewrapped as a PropelException.
     */
    public function hydrate(array $row, int $startcol = 0, bool $rehydrate = false, string $indexType = TableMap::TYPE_NUM): int
    {
        try {

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyCategoryImageTableMap::translateFieldName('IdCategoryImage', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_category_image = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyCategoryImageTableMap::translateFieldName('ExternalUrlLarge', TableMap::TYPE_PHPNAME, $indexType)];
            $this->external_url_large = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyCategoryImageTableMap::translateFieldName('ExternalUrlSmall', TableMap::TYPE_PHPNAME, $indexType)];
            $this->external_url_small = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyCategoryImageTableMap::translateFieldName('CreatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->created_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyCategoryImageTableMap::translateFieldName('UpdatedAt', TableMap::TYPE_PHPNAME, $indexType)];
            if ($col === '0000-00-00 00:00:00') {
                $col = null;
            }
            $this->updated_at = (null !== $col) ? PropelDateTime::newInstance($col, null, 'DateTime') : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 5; // 5 = SpyCategoryImageTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\CategoryImage\\Persistence\\SpyCategoryImage'), 0, $e);
        }
    }

    /**
     * Checks and repairs the internal consistency of the object.
     *
     * This method is executed after an already-instantiated object is re-hydrated
     * from the database.  It exists to check any foreign keys to make sure that
     * the objects related to the current object are correct based on foreign key.
     *
     * You can override this method in the stub class, but you should always invoke
     * the base method from the overridden method (i.e. parent::ensureConsistency()),
     * in case your model changes.
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function ensureConsistency(): void
    {
    }

    /**
     * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
     *
     * This will only work if the object has been saved and has a valid primary key set.
     *
     * @param bool $deep (optional) Whether to also de-associated any related objects.
     * @param ConnectionInterface $con (optional) The ConnectionInterface connection to use.
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException - if this object is deleted, unsaved or doesn't have pk match in db
     */
    public function reload(bool $deep = false, ?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("Cannot reload a deleted object.");
        }

        if ($this->isNew()) {
            throw new PropelException("Cannot reload an unsaved object.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection(SpyCategoryImageTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyCategoryImageQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collSpyCategoryImageSetToCategoryImages = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     * @see SpyCategoryImage::setDeleted()
     * @see SpyCategoryImage::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCategoryImageTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyCategoryImageQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
                // event behavior

                $this->addDeleteEventToMemory();

                $this->setDeleted(true);
            }
        });
    }

    /**
     * Persists this object to the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All modified related objects will also be persisted in the doSave()
     * method.  This method wraps all precipitate database operations in a
     * single transaction.
     *
     * @param ConnectionInterface $con
     * @return int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    public function save(?ConnectionInterface $con = null): int
    {
        if ($this->isDeleted()) {
            throw new PropelException("You cannot save an object that has been deleted.");
        }

        if ($this->alreadyInSave) {
            return 0;
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCategoryImageTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            // event behavior

            $this->prepareSaveEventName();

            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
                // timestampable behavior
                $time = time();
                $highPrecision = \Propel\Runtime\Util\PropelDateTime::createHighPrecision();
                if (!$this->isColumnModified(SpyCategoryImageTableMap::COL_CREATED_AT)) {
                    $this->setCreatedAt($highPrecision);
                }
                if (!$this->isColumnModified(SpyCategoryImageTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt($highPrecision);
                }
            } else {
                $ret = $ret && $this->preUpdate($con);
                // timestampable behavior
                if ($this->isModified() && !$this->isColumnModified(SpyCategoryImageTableMap::COL_UPDATED_AT)) {
                    $this->setUpdatedAt(\Propel\Runtime\Util\PropelDateTime::createHighPrecision());
                }
            }
            if ($ret) {
                $affectedRows = $this->doSave($con);
                if ($isInsert) {
                    $this->postInsert($con);
                } else {
                    $this->postUpdate($con);
                }
                $this->postSave($con);
                // event behavior

                if ($affectedRows) {
                    $this->addSaveEventToMemory();
                }

                SpyCategoryImageTableMap::addInstanceToPool($this);
            } else {
                $affectedRows = 0;
            }

            return $affectedRows;
        });
    }

    /**
     * Code to be run after persisting the object
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con
     *
     * @return void
     */
    public function postSave(?ConnectionInterface $con = null): void
    {
        $class = get_class($this);
        PropelReplicationCacheFacade::getInstance()->setKey($class);

    }

    /**
     * Code to be run after updating the object in database
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con
     *
     * @return void
     */
    public function postUpdate(?ConnectionInterface $con = null): void
    {
        $class = get_class($this);
        PropelReplicationCacheFacade::getInstance()->setKey($class);

    }

    /**
     * Code to be run after deleting the object in database
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con
     *
     * @return void
     */
    public function postDelete(?ConnectionInterface $con = null): void
    {
        $class = get_class($this);
        PropelReplicationCacheFacade::getInstance()->setKey($class);

    }

    /**
     * Performs the work of inserting or updating the row in the database.
     *
     * If the object is new, it inserts it; otherwise an update is performed.
     * All related objects are also updated in this method.
     *
     * @param ConnectionInterface $con
     * @return int The number of rows affected by this insert/update and any referring fk objects' save() operations.
     * @throws \Propel\Runtime\Exception\PropelException
     * @see save()
     */
    protected function doSave(ConnectionInterface $con): int
    {
        $affectedRows = 0; // initialize var to track total num of affected rows
        if (!$this->alreadyInSave) {
            $this->alreadyInSave = true;

            if ($this->isNew() || $this->isModified()) {
                // persist changes
                if ($this->isNew()) {
                    $this->doInsert($con);
                    $affectedRows += 1;
                } else {
                    $affectedRows += $this->doUpdate($con);
                }
                $this->resetModified();
            }

            if ($this->spyCategoryImageSetToCategoryImagesScheduledForDeletion !== null) {
                if (!$this->spyCategoryImageSetToCategoryImagesScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImageQuery::create()
                        ->filterByPrimaryKeys($this->spyCategoryImageSetToCategoryImagesScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyCategoryImageSetToCategoryImagesScheduledForDeletion = null;
                }
            }

            if ($this->collSpyCategoryImageSetToCategoryImages !== null) {
                foreach ($this->collSpyCategoryImageSetToCategoryImages as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            $this->alreadyInSave = false;

        }

        return $affectedRows;
    }

    /**
     * Insert the row in the database.
     *
     * @param ConnectionInterface $con
     *
     * @throws \Propel\Runtime\Exception\PropelException
     * @see doSave()
     */
    protected function doInsert(ConnectionInterface $con): void
    {
        $modifiedColumns = [];
        $index = 0;

        $this->modifiedColumns[SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE] = true;

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE)) {
            $modifiedColumns[':p' . $index++]  = 'id_category_image';
        }
        if ($this->isColumnModified(SpyCategoryImageTableMap::COL_EXTERNAL_URL_LARGE)) {
            $modifiedColumns[':p' . $index++]  = 'external_url_large';
        }
        if ($this->isColumnModified(SpyCategoryImageTableMap::COL_EXTERNAL_URL_SMALL)) {
            $modifiedColumns[':p' . $index++]  = 'external_url_small';
        }
        if ($this->isColumnModified(SpyCategoryImageTableMap::COL_CREATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'created_at';
        }
        if ($this->isColumnModified(SpyCategoryImageTableMap::COL_UPDATED_AT)) {
            $modifiedColumns[':p' . $index++]  = 'updated_at';
        }

        $sql = sprintf(
            'INSERT INTO spy_category_image (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_category_image':
                        $stmt->bindValue($identifier, $this->id_category_image, PDO::PARAM_INT);

                        break;
                    case 'external_url_large':
                        $stmt->bindValue($identifier, $this->external_url_large, PDO::PARAM_STR);

                        break;
                    case 'external_url_small':
                        $stmt->bindValue($identifier, $this->external_url_small, PDO::PARAM_STR);

                        break;
                    case 'created_at':
                        $stmt->bindValue($identifier, $this->created_at ? $this->created_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);

                        break;
                    case 'updated_at':
                        $stmt->bindValue($identifier, $this->updated_at ? $this->updated_at->format("Y-m-d H:i:s.u") : null, PDO::PARAM_STR);

                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_category_image_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        if ($pk !== null) {
            $this->setIdCategoryImage($pk);
        }

        $this->setNew(false);
    }

    /**
     * Update the row in the database.
     *
     * @param ConnectionInterface $con
     *
     * @return int Number of updated rows
     * @see doSave()
     */
    protected function doUpdate(ConnectionInterface $con): int
    {
        $selectCriteria = $this->buildPkeyCriteria();
        $valuesCriteria = $this->buildCriteria();

        return $selectCriteria->doUpdate($valuesCriteria, $con);
    }

    /**
     * Retrieves a field from the object by name passed in as a string.
     *
     * @param string $name name
     * @param string $type The type of fieldname the $name is of:
     *                     one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                     TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                     Defaults to TableMap::TYPE_FIELDNAME.
     * @return mixed Value of field.
     */
    public function getByName(string $name, string $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyCategoryImageTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
        $field = $this->getByPosition($pos);

        return $field;
    }

    /**
     * Retrieves a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos Position in XML schema
     * @return mixed Value of field at $pos
     */
    public function getByPosition(int $pos)
    {
        switch ($pos) {
            case 0:
                return $this->getIdCategoryImage();

            case 1:
                return $this->getExternalUrlLarge();

            case 2:
                return $this->getExternalUrlSmall();

            case 3:
                return $this->getCreatedAt();

            case 4:
                return $this->getUpdatedAt();

            default:
                return null;
        } // switch()
    }

    /**
     * Exports the object as an array.
     *
     * You can specify the key type of the array by passing one of the class
     * type constants.
     *
     * @param string $keyType (optional) One of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     *                    TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                    Defaults to TableMap::TYPE_FIELDNAME.
     * @param bool $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
     * @param array $alreadyDumpedObjects List of objects to skip to avoid recursion
     * @param bool $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
     *
     * @return array An associative array containing the field names (as keys) and field values
     */
    public function toArray(string $keyType = TableMap::TYPE_FIELDNAME, bool $includeLazyLoadColumns = true, array $alreadyDumpedObjects = [], bool $includeForeignObjects = false): array
    {
        if (isset($alreadyDumpedObjects['SpyCategoryImage'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['SpyCategoryImage'][$this->hashCode()] = true;
        $keys = SpyCategoryImageTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getIdCategoryImage(),
            $keys[1] => $this->getExternalUrlLarge(),
            $keys[2] => $this->getExternalUrlSmall(),
            $keys[3] => $this->getCreatedAt(),
            $keys[4] => $this->getUpdatedAt(),
        ];
        if ($result[$keys[3]] instanceof \DateTimeInterface) {
            $result[$keys[3]] = $result[$keys[3]]->format('Y-m-d H:i:s.u');
        }

        if ($result[$keys[4]] instanceof \DateTimeInterface) {
            $result[$keys[4]] = $result[$keys[4]]->format('Y-m-d H:i:s.u');
        }

        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collSpyCategoryImageSetToCategoryImages) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyCategoryImageSetToCategoryImages';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_category_image_set_to_category_images';
                        break;
                    default:
                        $key = 'SpyCategoryImageSetToCategoryImages';
                }

                $result[$key] = $this->collSpyCategoryImageSetToCategoryImages->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
        }

        return $result;
    }

    /**
     * Sets a field from the object by name passed in as a string.
     *
     * @param string $name
     * @param mixed $value field value
     * @param string $type The type of fieldname the $name is of:
     *                one of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME
     *                TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     *                Defaults to TableMap::TYPE_FIELDNAME.
     * @return $this
     */
    public function setByName(string $name, $value, string $type = TableMap::TYPE_FIELDNAME)
    {
        $pos = SpyCategoryImageTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

        $this->setByPosition($pos, $value);

        return $this;
    }

    /**
     * Sets a field from the object by Position as specified in the xml schema.
     * Zero-based.
     *
     * @param int $pos position in xml schema
     * @param mixed $value field value
     * @return $this
     */
    public function setByPosition(int $pos, $value)
    {
        switch ($pos) {
            case 0:
                $this->setIdCategoryImage($value);
                break;
            case 1:
                $this->setExternalUrlLarge($value);
                break;
            case 2:
                $this->setExternalUrlSmall($value);
                break;
            case 3:
                $this->setCreatedAt($value);
                break;
            case 4:
                $this->setUpdatedAt($value);
                break;
        } // switch()

        return $this;
    }

    /**
     * Populates the object using an array.
     *
     * This is particularly useful when populating an object from one of the
     * request arrays (e.g. $_POST).  This method goes through the column
     * names, checking to see whether a matching key exists in populated
     * array. If so the setByName() method is called for that column.
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_FIELDNAME.
     *
     * @param array $arr An array to populate the object from.
     * @param string $keyType The type of keys the array uses.
     * @return $this
     */
    public function fromArray(array $arr, string $keyType = TableMap::TYPE_FIELDNAME)
    {
        $keys = SpyCategoryImageTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdCategoryImage($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setExternalUrlLarge($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setExternalUrlSmall($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setCreatedAt($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setUpdatedAt($arr[$keys[4]]);
        }

        return $this;
    }

     /**
     * Populate the current object from a string, using a given parser format
     * <code>
     * $book = new Book();
     * $book->importFrom('JSON', '{"Id":9012,"Title":"Don Juan","ISBN":"0140422161","Price":12.99,"PublisherId":1234,"AuthorId":5678}');
     * </code>
     *
     * You can specify the key type of the array by additionally passing one
     * of the class type constants TableMap::TYPE_PHPNAME, TableMap::TYPE_CAMELNAME,
     * TableMap::TYPE_COLNAME, TableMap::TYPE_FIELDNAME, TableMap::TYPE_NUM.
     * The default key type is the column's TableMap::TYPE_FIELDNAME.
     *
     * @param mixed $parser A AbstractParser instance,
     *                       or a format name ('XML', 'YAML', 'JSON', 'CSV')
     * @param string $data The source data to import from
     * @param string $keyType The type of keys the array uses.
     *
     * @return $this The current object, for fluid interface
     */
    public function importFrom($parser, string $data, string $keyType = TableMap::TYPE_FIELDNAME)
    {
        if (!$parser instanceof AbstractParser) {
            $parser = AbstractParser::getParser($parser);
        }

        $this->fromArray($parser->toArray($data), $keyType);

        return $this;
    }

    /**
     * Build a Criteria object containing the values of all modified columns in this object.
     *
     * @return \Propel\Runtime\ActiveQuery\Criteria The Criteria object containing all modified values.
     */
    public function buildCriteria(): Criteria
    {
        $criteria = new Criteria(SpyCategoryImageTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE)) {
            $criteria->add(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE, $this->id_category_image);
        }
        if ($this->isColumnModified(SpyCategoryImageTableMap::COL_EXTERNAL_URL_LARGE)) {
            $criteria->add(SpyCategoryImageTableMap::COL_EXTERNAL_URL_LARGE, $this->external_url_large);
        }
        if ($this->isColumnModified(SpyCategoryImageTableMap::COL_EXTERNAL_URL_SMALL)) {
            $criteria->add(SpyCategoryImageTableMap::COL_EXTERNAL_URL_SMALL, $this->external_url_small);
        }
        if ($this->isColumnModified(SpyCategoryImageTableMap::COL_CREATED_AT)) {
            $criteria->add(SpyCategoryImageTableMap::COL_CREATED_AT, $this->created_at);
        }
        if ($this->isColumnModified(SpyCategoryImageTableMap::COL_UPDATED_AT)) {
            $criteria->add(SpyCategoryImageTableMap::COL_UPDATED_AT, $this->updated_at);
        }

        return $criteria;
    }

    /**
     * Builds a Criteria object containing the primary key for this object.
     *
     * Unlike buildCriteria() this method includes the primary key values regardless
     * of whether they have been modified.
     *
     * @throws LogicException if no primary key is defined
     *
     * @return \Propel\Runtime\ActiveQuery\Criteria The Criteria object containing value(s) for primary key(s).
     */
    public function buildPkeyCriteria(): Criteria
    {
        $criteria = ChildSpyCategoryImageQuery::create();
        $criteria->add(SpyCategoryImageTableMap::COL_ID_CATEGORY_IMAGE, $this->id_category_image);

        return $criteria;
    }

    /**
     * If the primary key is not null, return the hashcode of the
     * primary key. Otherwise, return the hash code of the object.
     *
     * @return int|string Hashcode
     */
    public function hashCode()
    {
        $validPk = null !== $this->getIdCategoryImage();

        $validPrimaryKeyFKs = 0;
        $primaryKeyFKs = [];

        if ($validPk) {
            return crc32(json_encode($this->getPrimaryKey(), JSON_UNESCAPED_UNICODE));
        } elseif ($validPrimaryKeyFKs) {
            return crc32(json_encode($primaryKeyFKs, JSON_UNESCAPED_UNICODE));
        }

        return spl_object_hash($this);
    }

    /**
     * Returns the primary key for this object (row).
     * @return int
     */
    public function getPrimaryKey()
    {
        return $this->getIdCategoryImage();
    }

    /**
     * Generic method to set the primary key (id_category_image column).
     *
     * @param int|null $key Primary key.
     * @return void
     */
    public function setPrimaryKey(?int $key = null): void
    {
        $this->setIdCategoryImage($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     *
     * @return bool
     */
    public function isPrimaryKeyNull(): bool
    {
        return null === $this->getIdCategoryImage();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \Orm\Zed\CategoryImage\Persistence\SpyCategoryImage (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setExternalUrlLarge($this->getExternalUrlLarge());
        $copyObj->setExternalUrlSmall($this->getExternalUrlSmall());
        $copyObj->setCreatedAt($this->getCreatedAt());
        $copyObj->setUpdatedAt($this->getUpdatedAt());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getSpyCategoryImageSetToCategoryImages() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyCategoryImageSetToCategoryImage($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdCategoryImage(NULL); // this is a auto-increment column, so set to default value
        }
    }

    /**
     * Makes a copy of this object that will be inserted as a new row in table when saved.
     * It creates a new object filling in the simple attributes, but skipping any primary
     * keys that are defined for the table.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @return \Orm\Zed\CategoryImage\Persistence\SpyCategoryImage Clone of current object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function copy(bool $deepCopy = false)
    {
        // we use get_class(), because this might be a subclass
        $clazz = get_class($this);
        $copyObj = new $clazz();
        $this->copyInto($copyObj, $deepCopy);

        return $copyObj;
    }


    /**
     * Initializes a collection based on the name of a relation.
     * Avoids crafting an 'init[$relationName]s' method name
     * that wouldn't work when StandardEnglishPluralizer is used.
     *
     * @param string $relationName The name of the relation to initialize
     * @return void
     */
    public function initRelation($relationName): void
    {
        if ('SpyCategoryImageSetToCategoryImage' === $relationName) {
            $this->initSpyCategoryImageSetToCategoryImages();
            return;
        }
    }

    /**
     * Clears out the collSpyCategoryImageSetToCategoryImages collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return $this
     * @see addSpyCategoryImageSetToCategoryImages()
     */
    public function clearSpyCategoryImageSetToCategoryImages()
    {
        $this->collSpyCategoryImageSetToCategoryImages = null; // important to set this to NULL since that means it is uninitialized

        return $this;
    }

    /**
     * Reset is the collSpyCategoryImageSetToCategoryImages collection loaded partially.
     *
     * @return void
     */
    public function resetPartialSpyCategoryImageSetToCategoryImages($v = true): void
    {
        $this->collSpyCategoryImageSetToCategoryImagesPartial = $v;
    }

    /**
     * Initializes the collSpyCategoryImageSetToCategoryImages collection.
     *
     * By default this just sets the collSpyCategoryImageSetToCategoryImages collection to an empty array (like clearcollSpyCategoryImageSetToCategoryImages());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param bool $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyCategoryImageSetToCategoryImages(bool $overrideExisting = true): void
    {
        if (null !== $this->collSpyCategoryImageSetToCategoryImages && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyCategoryImageSetToCategoryImageTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyCategoryImageSetToCategoryImages = new $collectionClassName;
        $this->collSpyCategoryImageSetToCategoryImages->setModel('\Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImage');
    }

    /**
     * Gets an array of ChildSpyCategoryImageSetToCategoryImage objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyCategoryImage is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyCategoryImageSetToCategoryImage[] List of ChildSpyCategoryImageSetToCategoryImage objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyCategoryImageSetToCategoryImage> List of ChildSpyCategoryImageSetToCategoryImage objects
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getSpyCategoryImageSetToCategoryImages(?Criteria $criteria = null, ?ConnectionInterface $con = null)
    {
        $partial = $this->collSpyCategoryImageSetToCategoryImagesPartial && !$this->isNew();
        if (null === $this->collSpyCategoryImageSetToCategoryImages || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyCategoryImageSetToCategoryImages) {
                    $this->initSpyCategoryImageSetToCategoryImages();
                } else {
                    $collectionClassName = SpyCategoryImageSetToCategoryImageTableMap::getTableMap()->getCollectionClassName();

                    $collSpyCategoryImageSetToCategoryImages = new $collectionClassName;
                    $collSpyCategoryImageSetToCategoryImages->setModel('\Orm\Zed\CategoryImage\Persistence\SpyCategoryImageSetToCategoryImage');

                    return $collSpyCategoryImageSetToCategoryImages;
                }
            } else {
                $collSpyCategoryImageSetToCategoryImages = ChildSpyCategoryImageSetToCategoryImageQuery::create(null, $criteria)
                    ->filterBySpyCategoryImage($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyCategoryImageSetToCategoryImagesPartial && count($collSpyCategoryImageSetToCategoryImages)) {
                        $this->initSpyCategoryImageSetToCategoryImages(false);

                        foreach ($collSpyCategoryImageSetToCategoryImages as $obj) {
                            if (false == $this->collSpyCategoryImageSetToCategoryImages->contains($obj)) {
                                $this->collSpyCategoryImageSetToCategoryImages->append($obj);
                            }
                        }

                        $this->collSpyCategoryImageSetToCategoryImagesPartial = true;
                    }

                    return $collSpyCategoryImageSetToCategoryImages;
                }

                if ($partial && $this->collSpyCategoryImageSetToCategoryImages) {
                    foreach ($this->collSpyCategoryImageSetToCategoryImages as $obj) {
                        if ($obj->isNew()) {
                            $collSpyCategoryImageSetToCategoryImages[] = $obj;
                        }
                    }
                }

                $this->collSpyCategoryImageSetToCategoryImages = $collSpyCategoryImageSetToCategoryImages;
                $this->collSpyCategoryImageSetToCategoryImagesPartial = false;
            }
        }

        return $this->collSpyCategoryImageSetToCategoryImages;
    }

    /**
     * Sets a collection of ChildSpyCategoryImageSetToCategoryImage objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param Collection $spyCategoryImageSetToCategoryImages A Propel collection.
     * @param ConnectionInterface $con Optional connection object
     * @return $this The current object (for fluent API support)
     */
    public function setSpyCategoryImageSetToCategoryImages(Collection $spyCategoryImageSetToCategoryImages, ?ConnectionInterface $con = null)
    {
        /** @var ChildSpyCategoryImageSetToCategoryImage[] $spyCategoryImageSetToCategoryImagesToDelete */
        $spyCategoryImageSetToCategoryImagesToDelete = $this->getSpyCategoryImageSetToCategoryImages(new Criteria(), $con)->diff($spyCategoryImageSetToCategoryImages);


        $this->spyCategoryImageSetToCategoryImagesScheduledForDeletion = $spyCategoryImageSetToCategoryImagesToDelete;

        foreach ($spyCategoryImageSetToCategoryImagesToDelete as $spyCategoryImageSetToCategoryImageRemoved) {
            $spyCategoryImageSetToCategoryImageRemoved->setSpyCategoryImage(null);
        }

        $this->collSpyCategoryImageSetToCategoryImages = null;
        foreach ($spyCategoryImageSetToCategoryImages as $spyCategoryImageSetToCategoryImage) {
            $this->addSpyCategoryImageSetToCategoryImage($spyCategoryImageSetToCategoryImage);
        }

        $this->collSpyCategoryImageSetToCategoryImages = $spyCategoryImageSetToCategoryImages;
        $this->collSpyCategoryImageSetToCategoryImagesPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyCategoryImageSetToCategoryImage objects.
     *
     * @param Criteria $criteria
     * @param bool $distinct
     * @param ConnectionInterface $con
     * @return int Count of related SpyCategoryImageSetToCategoryImage objects.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function countSpyCategoryImageSetToCategoryImages(?Criteria $criteria = null, bool $distinct = false, ?ConnectionInterface $con = null): int
    {
        $partial = $this->collSpyCategoryImageSetToCategoryImagesPartial && !$this->isNew();
        if (null === $this->collSpyCategoryImageSetToCategoryImages || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyCategoryImageSetToCategoryImages) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyCategoryImageSetToCategoryImages());
            }

            $query = ChildSpyCategoryImageSetToCategoryImageQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyCategoryImage($this)
                ->count($con);
        }

        return count($this->collSpyCategoryImageSetToCategoryImages);
    }

    /**
     * Method called to associate a ChildSpyCategoryImageSetToCategoryImage object to this object
     * through the ChildSpyCategoryImageSetToCategoryImage foreign key attribute.
     *
     * @param ChildSpyCategoryImageSetToCategoryImage $l ChildSpyCategoryImageSetToCategoryImage
     * @return $this The current object (for fluent API support)
     */
    public function addSpyCategoryImageSetToCategoryImage(ChildSpyCategoryImageSetToCategoryImage $l)
    {
        if ($this->collSpyCategoryImageSetToCategoryImages === null) {
            $this->initSpyCategoryImageSetToCategoryImages();
            $this->collSpyCategoryImageSetToCategoryImagesPartial = true;
        }

        if (!$this->collSpyCategoryImageSetToCategoryImages->contains($l)) {
            $this->doAddSpyCategoryImageSetToCategoryImage($l);

            if ($this->spyCategoryImageSetToCategoryImagesScheduledForDeletion and $this->spyCategoryImageSetToCategoryImagesScheduledForDeletion->contains($l)) {
                $this->spyCategoryImageSetToCategoryImagesScheduledForDeletion->remove($this->spyCategoryImageSetToCategoryImagesScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyCategoryImageSetToCategoryImage $spyCategoryImageSetToCategoryImage The ChildSpyCategoryImageSetToCategoryImage object to add.
     */
    protected function doAddSpyCategoryImageSetToCategoryImage(ChildSpyCategoryImageSetToCategoryImage $spyCategoryImageSetToCategoryImage): void
    {
        $this->collSpyCategoryImageSetToCategoryImages[]= $spyCategoryImageSetToCategoryImage;
        $spyCategoryImageSetToCategoryImage->setSpyCategoryImage($this);
    }

    /**
     * @param ChildSpyCategoryImageSetToCategoryImage $spyCategoryImageSetToCategoryImage The ChildSpyCategoryImageSetToCategoryImage object to remove.
     * @return $this The current object (for fluent API support)
     */
    public function removeSpyCategoryImageSetToCategoryImage(ChildSpyCategoryImageSetToCategoryImage $spyCategoryImageSetToCategoryImage)
    {
        if ($this->getSpyCategoryImageSetToCategoryImages()->contains($spyCategoryImageSetToCategoryImage)) {
            $pos = $this->collSpyCategoryImageSetToCategoryImages->search($spyCategoryImageSetToCategoryImage);
            $this->collSpyCategoryImageSetToCategoryImages->remove($pos);
            if (null === $this->spyCategoryImageSetToCategoryImagesScheduledForDeletion) {
                $this->spyCategoryImageSetToCategoryImagesScheduledForDeletion = clone $this->collSpyCategoryImageSetToCategoryImages;
                $this->spyCategoryImageSetToCategoryImagesScheduledForDeletion->clear();
            }
            $this->spyCategoryImageSetToCategoryImagesScheduledForDeletion[]= clone $spyCategoryImageSetToCategoryImage;
            $spyCategoryImageSetToCategoryImage->setSpyCategoryImage(null);
        }

        return $this;
    }


    /**
     * If this collection has already been initialized with
     * an identical criteria, it returns the collection.
     * Otherwise if this SpyCategoryImage is new, it will return
     * an empty collection; or if this SpyCategoryImage has previously
     * been saved, it will retrieve related SpyCategoryImageSetToCategoryImages from storage.
     *
     * This method is protected by default in order to keep the public
     * api reasonable.  You can provide public methods for those you
     * actually need in SpyCategoryImage.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @param string $joinBehavior optional join type to use (defaults to Criteria::LEFT_JOIN)
     * @return ObjectCollection|ChildSpyCategoryImageSetToCategoryImage[] List of ChildSpyCategoryImageSetToCategoryImage objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyCategoryImageSetToCategoryImage}> List of ChildSpyCategoryImageSetToCategoryImage objects
     */
    public function getSpyCategoryImageSetToCategoryImagesJoinSpyCategoryImageSet(?Criteria $criteria = null, ?ConnectionInterface $con = null, $joinBehavior = Criteria::LEFT_JOIN)
    {
        $query = ChildSpyCategoryImageSetToCategoryImageQuery::create(null, $criteria);
        $query->joinWith('SpyCategoryImageSet', $joinBehavior);

        return $this->getSpyCategoryImageSetToCategoryImages($query, $con);
    }

    /**
     * Clears the current object, sets all attributes to their default values and removes
     * outgoing references as well as back-references (from other objects to this one. Results probably in a database
     * change of those foreign objects when you call `save` there).
     *
     * @return $this
     */
    public function clear()
    {
        $this->id_category_image = null;
        $this->external_url_large = null;
        $this->external_url_small = null;
        $this->created_at = null;
        $this->updated_at = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->resetModified();
        $this->setNew(true);
        $this->setDeleted(false);

        return $this;
    }

    /**
     * Resets all references and back-references to other model objects or collections of model objects.
     *
     * This method is used to reset all php object references (not the actual reference in the database).
     * Necessary for object serialisation.
     *
     * @param bool $deep Whether to also clear the references on all referrer objects.
     * @return $this
     */
    public function clearAllReferences(bool $deep = false)
    {
        if ($deep) {
            if ($this->collSpyCategoryImageSetToCategoryImages) {
                foreach ($this->collSpyCategoryImageSetToCategoryImages as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collSpyCategoryImageSetToCategoryImages = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyCategoryImageTableMap::DEFAULT_STRING_FORMAT);
    }

    // timestampable behavior

    /**
     * Mark the current object so that the update date doesn't get updated during next save
     *
     * @return $this The current object (for fluent API support)
     */
    public function keepUpdateDateUnchanged()
    {
        $this->modifiedColumns[SpyCategoryImageTableMap::COL_UPDATED_AT] = true;

        return $this;
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_category_image.create';
        } else {
            $this->_eventName = 'Entity.spy_category_image.update';
        }

        $this->_modifiedColumns = $this->getModifiedColumns();
        $this->_isModified = $this->isModified();
    }

    /**
     * @return void
     */
    public function disableEvent()
    {
        $this->_isEventDisabled = true;
    }

    /**
     * @return void
     */
    public function enableEvent()
    {
        $this->_isEventDisabled = false;
    }

    /**
     * @return void
     */
    protected function addSaveEventToMemory()
    {
        if ($this->_isEventDisabled) {
            return;
        }

        if ($this->_eventName !== 'Entity.spy_category_image.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_category_image',
            'id' => $this->getPrimaryKey(),
            'event' => $this->_eventName,
            'foreignKeys' => $this->getForeignKeys(),
            'modifiedColumns' => $this->_modifiedColumns,
            'originalValues' => $this->getOriginalValues(),
            'additionalValues' => $this->getAdditionalValues(),
        ];

        $this->saveEventBehaviorEntityChange($data);

        unset($this->_eventName);
        unset($this->_modifiedColumns);
        unset($this->_isModified);
    }

    /**
     * @return void
     */
    protected function addDeleteEventToMemory()
    {
        if ($this->_isEventDisabled) {
            return;
        }

        $data = [
            'name' => 'spy_category_image',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_category_image.delete',
            'foreignKeys' => $this->getForeignKeys(),
            'additionalValues' => $this->getAdditionalValues(),
        ];

        $this->saveEventBehaviorEntityChange($data);
    }

    /**
     * @return array
     */
    protected function getForeignKeys()
    {
        $foreignKeysWithValue = [];
        foreach ($this->_foreignKeys as $key => $value) {
            $foreignKeysWithValue[$key] = $this->getByName($value);
        }

        return $foreignKeysWithValue;
    }

    /**
     * @param array $data
     *
     * @return void
     */
    protected function saveEventBehaviorEntityChange(array $data)
    {
        $isInstancePoolingDisabledSuccessfully = \Propel\Runtime\Propel::disableInstancePooling();

        $spyEventBehaviorEntityChange = new \Orm\Zed\EventBehavior\Persistence\SpyEventBehaviorEntityChange();
        $spyEventBehaviorEntityChange->setData(json_encode($data));
        $spyEventBehaviorEntityChange->setProcessId(\Spryker\Zed\Kernel\RequestIdentifier::getRequestId());
        $spyEventBehaviorEntityChange->save();

        if ($isInstancePoolingDisabledSuccessfully) {
            \Propel\Runtime\Propel::enableInstancePooling();
        }
    }

    /**
     * @return bool
     */
    protected function isEventColumnsModified()
    {
        /* There is a wildcard(*) property for this event */
        return true;
    }

    /**
     * @return array
     */
    protected function getOriginalValueColumnNames(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    protected function getOriginalValues(): array
    {
        if ($this->isNew()) {
            return [];
        }

        $originalValues = [];
        foreach ($this->_modifiedColumns as $modifiedColumn) {
            if (!in_array($modifiedColumn, $this->getOriginalValueColumnNames())) {
                continue;
            }

            $before = $this->_initialValues[$modifiedColumn];
            $field = str_replace('spy_category_image.', '', $modifiedColumn);
            $after = $this->$field;

            if ($before !== $after) {
                $originalValues[$modifiedColumn] = $before;
            }
        }

        return $originalValues;
    }

    /**
     * @return array
     */
    protected function getAdditionalValueColumnNames(): array
    {
        return [

        ];
    }

    /**
     * @return array
     */
    protected function getAdditionalValues(): array
    {
        $additionalValues = [];
        foreach ($this->getAdditionalValueColumnNames() as $additionalValueColumnName) {
            $field = str_replace('spy_category_image.', '', $additionalValueColumnName);
            $additionalValues[$additionalValueColumnName] = $this->$field;
        }

        return $additionalValues;
    }

    /**
     * @param string $xmlValue
     * @param string $column
     *
     * @return array|bool|\DateTime|float|int|object
     */
    protected function getPhpType($xmlValue, $column)
    {
        $columnType = SpyCategoryImageTableMap::getTableMap()->getColumn($column)->getType();
        if (in_array(strtoupper($columnType), ['INTEGER', 'TINYINT', 'SMALLINT'])) {
            $xmlValue = (int) $xmlValue;
        } else if (in_array(strtoupper($columnType), ['REAL', 'FLOAT', 'DOUBLE', 'BINARY', 'VARBINARY', 'LONGVARBINARY'])) {
            $xmlValue = (double) $xmlValue;
        } else if (strtoupper($columnType) === 'ARRAY') {
            $xmlValue = (array) $xmlValue;
        } else if (strtoupper($columnType) === 'BOOLEAN') {
            $xmlValue = filter_var($xmlValue,  FILTER_VALIDATE_BOOLEAN);
        } else if (strtoupper($columnType) === 'OBJECT') {
            $xmlValue = (object) $xmlValue;
        } else if (in_array(strtoupper($columnType), ['DATE', 'TIME', 'TIMESTAMP', 'BU_DATE', 'BU_TIMESTAMP'])) {
            $xmlValue = \DateTime::createFromFormat('Y-m-d H:i:s', $xmlValue);
        }

        return $xmlValue;
    }

    /**
     * Code to be run before persisting the object
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preSave(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run before inserting to database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preInsert(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run after inserting to database
     * @param ConnectionInterface|null $con
     * @return void
     */
    public function postInsert(?ConnectionInterface $con = null): void
    {
            }

    /**
     * Code to be run before updating the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preUpdate(?ConnectionInterface $con = null): bool
    {
                return true;
    }

    /**
     * Code to be run before deleting the object in database
     * @param ConnectionInterface|null $con
     * @return bool
     */
    public function preDelete(?ConnectionInterface $con = null): bool
    {
                return true;
    }


    /**
     * Derived method to catches calls to undefined methods.
     *
     * Provides magic import/export method support (fromXML()/toXML(), fromYAML()/toYAML(), etc.).
     * Allows to define default __call() behavior if you overwrite __call()
     *
     * @param string $name
     * @param mixed $params
     *
     * @return array|string
     */
    public function __call($name, $params)
    {
        if (0 === strpos($name, 'get')) {
            $virtualColumn = substr($name, 3);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }

            $virtualColumn = lcfirst($virtualColumn);
            if ($this->hasVirtualColumn($virtualColumn)) {
                return $this->getVirtualColumn($virtualColumn);
            }
        }

        if (0 === strpos($name, 'from')) {
            $format = substr($name, 4);
            $inputData = $params[0];
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->importFrom($format, $inputData, $keyType);
        }

        if (0 === strpos($name, 'to')) {
            $format = substr($name, 2);
            $includeLazyLoadColumns = $params[0] ?? true;
            $keyType = $params[1] ?? TableMap::TYPE_PHPNAME;

            return $this->exportTo($format, $includeLazyLoadColumns, $keyType);
        }

        throw new BadMethodCallException(sprintf('Call to undefined method: %s.', $name));
    }

}
