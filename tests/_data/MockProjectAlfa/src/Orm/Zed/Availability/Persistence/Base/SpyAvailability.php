<?php

namespace Orm\Zed\Availability\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Availability\Persistence\SpyAvailabilityAbstract as ChildSpyAvailabilityAbstract;
use Orm\Zed\Availability\Persistence\SpyAvailabilityAbstractQuery as ChildSpyAvailabilityAbstractQuery;
use Orm\Zed\Availability\Persistence\SpyAvailabilityQuery as ChildSpyAvailabilityQuery;
use Orm\Zed\Availability\Persistence\Map\SpyAvailabilityTableMap;
use Orm\Zed\Store\Persistence\SpyStore;
use Orm\Zed\Store\Persistence\SpyStoreQuery;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveRecord\ActiveRecordInterface;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\BadMethodCallException;
use Propel\Runtime\Exception\LogicException;
use Propel\Runtime\Exception\PropelException;
use Propel\Runtime\Map\TableMap;
use Propel\Runtime\Parser\AbstractParser;
use Spryker\Zed\PropelReplicationCache\Business\PropelReplicationCacheFacade;

/**
 * Base class that represents a row from the 'spy_availability' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Availability.Persistence.Base
 */
abstract class SpyAvailability implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = '\\Orm\\Zed\\Availability\\Persistence\\Map\\SpyAvailabilityTableMap';


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
     * The value for the id_availability field.
     *
     * @var        int
     */
    protected $id_availability;

    /**
     * The value for the fk_availability_abstract field.
     *
     * @var        int
     */
    protected $fk_availability_abstract;

    /**
     * The value for the fk_store field.
     *
     * @var        int|null
     */
    protected $fk_store;

    /**
     * The value for the is_never_out_of_stock field.
     *
     * Note: this column has a database default value of: false
     * @var        boolean|null
     */
    protected $is_never_out_of_stock;

    /**
     * The value for the quantity field.
     *
     * @var        string
     */
    protected $quantity;

    /**
     * The value for the sku field.
     *
     * @var        string
     */
    protected $sku;

    /**
     * @var        ChildSpyAvailabilityAbstract
     */
    protected $aSpyAvailabilityAbstract;

    /**
     * @var        SpyStore
     */
    protected $aStore;

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
        'spy_availability.fk_availability_abstract' => 'fk_availability_abstract',
        'spy_availability.fk_store' => 'fk_store',
    ];

    /**
     * Applies default values to this object.
     * This method should be called from the object's constructor (or
     * equivalent initialization method).
     * @see __construct()
     */
    public function applyDefaultValues(): void
    {
        $this->is_never_out_of_stock = false;
    }

    /**
     * Initializes internal state of Orm\Zed\Availability\Persistence\Base\SpyAvailability object.
     * @see applyDefaults()
     */
    public function __construct()
    {
        $this->applyDefaultValues();
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
     * Compares this with another <code>SpyAvailability</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyAvailability</code>, delegates to
     * <code>equals(SpyAvailability)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_availability] column value.
     *
     * @return int
     */
    public function getIdAvailability()
    {
        return $this->id_availability;
    }

    /**
     * Get the [fk_availability_abstract] column value.
     *
     * @return int
     */
    public function getFkAvailabilityAbstract()
    {
        return $this->fk_availability_abstract;
    }

    /**
     * Get the [fk_store] column value.
     *
     * @return int|null
     */
    public function getFkStore()
    {
        return $this->fk_store;
    }

    /**
     * Get the [is_never_out_of_stock] column value.
     *
     * @return boolean|null
     */
    public function getIsNeverOutOfStock()
    {
        return $this->is_never_out_of_stock;
    }

    /**
     * Get the [is_never_out_of_stock] column value.
     *
     * @return boolean|null
     */
    public function isNeverOutOfStock()
    {
        return $this->getIsNeverOutOfStock();
    }

    /**
     * Get the [quantity] column value.
     *
     * @return string
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Get the [sku] column value.
     *
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * Set the value of [id_availability] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setIdAvailability($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_availability !== $v) {
            $this->id_availability = $v;
            $this->modifiedColumns[SpyAvailabilityTableMap::COL_ID_AVAILABILITY] = true;
        }

        return $this;
    }

    /**
     * Set the value of [fk_availability_abstract] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setFkAvailabilityAbstract($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_availability_abstract !== $v) {
            $this->fk_availability_abstract = $v;
            $this->modifiedColumns[SpyAvailabilityTableMap::COL_FK_AVAILABILITY_ABSTRACT] = true;
        }

        if ($this->aSpyAvailabilityAbstract !== null && $this->aSpyAvailabilityAbstract->getIdAvailabilityAbstract() !== $v) {
            $this->aSpyAvailabilityAbstract = null;
        }

        return $this;
    }

    /**
     * Set the value of [fk_store] column.
     *
     * @param int|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setFkStore($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->fk_store !== $v) {
            $this->fk_store = $v;
            $this->modifiedColumns[SpyAvailabilityTableMap::COL_FK_STORE] = true;
        }

        if ($this->aStore !== null && $this->aStore->getIdStore() !== $v) {
            $this->aStore = null;
        }

        return $this;
    }

    /**
     * Sets the value of the [is_never_out_of_stock] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param bool|integer|string|null $v The new value
     * @return $this The current object (for fluent API support)
     */
    public function setIsNeverOutOfStock($v)
    {
        $this->_initialValues[SpyAvailabilityTableMap::COL_IS_NEVER_OUT_OF_STOCK] = $this->is_never_out_of_stock;

        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (bool) $v;
            }
        }

        $allowNullValues = false;

        if ($v === null && !$allowNullValues) {
            return $this;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = true;

        if (($this->isNew() && $hasDefaultValue) || $this->is_never_out_of_stock !== $v) {
            $this->is_never_out_of_stock = $v;
            $this->modifiedColumns[SpyAvailabilityTableMap::COL_IS_NEVER_OUT_OF_STOCK] = true;
        }

        return $this;
    }

    /**
     * Set the value of [quantity] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setQuantity($v)
    {
        $this->_initialValues[SpyAvailabilityTableMap::COL_QUANTITY] = $this->quantity;

        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->quantity !== $v) {
            $this->quantity = $v;
            $this->modifiedColumns[SpyAvailabilityTableMap::COL_QUANTITY] = true;
        }

        return $this;
    }

    /**
     * Set the value of [sku] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setSku($v)
    {
        $this->_initialValues[SpyAvailabilityTableMap::COL_SKU] = $this->sku;

        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->sku !== $v) {
            $this->sku = $v;
            $this->modifiedColumns[SpyAvailabilityTableMap::COL_SKU] = true;
        }

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
            if ($this->is_never_out_of_stock !== false) {
                return false;
            }

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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyAvailabilityTableMap::translateFieldName('IdAvailability', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_availability = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyAvailabilityTableMap::translateFieldName('FkAvailabilityAbstract', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_availability_abstract = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyAvailabilityTableMap::translateFieldName('FkStore', TableMap::TYPE_PHPNAME, $indexType)];
            $this->fk_store = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyAvailabilityTableMap::translateFieldName('IsNeverOutOfStock', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_never_out_of_stock = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyAvailabilityTableMap::translateFieldName('Quantity', TableMap::TYPE_PHPNAME, $indexType)];
            $this->quantity = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyAvailabilityTableMap::translateFieldName('Sku', TableMap::TYPE_PHPNAME, $indexType)];
            $this->sku = (null !== $col) ? (string) $col : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 6; // 6 = SpyAvailabilityTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Availability\\Persistence\\SpyAvailability'), 0, $e);
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
        if ($this->aSpyAvailabilityAbstract !== null && $this->fk_availability_abstract !== $this->aSpyAvailabilityAbstract->getIdAvailabilityAbstract()) {
            $this->aSpyAvailabilityAbstract = null;
        }
        if ($this->aStore !== null && $this->fk_store !== $this->aStore->getIdStore()) {
            $this->aStore = null;
        }
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyAvailabilityTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyAvailabilityQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->aSpyAvailabilityAbstract = null;
            $this->aStore = null;
        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     * @see SpyAvailability::setDeleted()
     * @see SpyAvailability::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAvailabilityTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyAvailabilityQuery::create()
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAvailabilityTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
            // event behavior

            $this->prepareSaveEventName();

            if ($isInsert) {
                $ret = $ret && $this->preInsert($con);
            } else {
                $ret = $ret && $this->preUpdate($con);
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

                SpyAvailabilityTableMap::addInstanceToPool($this);
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

            // We call the save method on the following object(s) if they
            // were passed to this object by their corresponding set
            // method.  This object relates to these object(s) by a
            // foreign key reference.

            if ($this->aSpyAvailabilityAbstract !== null) {
                if ($this->aSpyAvailabilityAbstract->isModified() || $this->aSpyAvailabilityAbstract->isNew()) {
                    $affectedRows += $this->aSpyAvailabilityAbstract->save($con);
                }
                $this->setSpyAvailabilityAbstract($this->aSpyAvailabilityAbstract);
            }

            if ($this->aStore !== null) {
                if ($this->aStore->isModified() || $this->aStore->isNew()) {
                    $affectedRows += $this->aStore->save($con);
                }
                $this->setStore($this->aStore);
            }

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

        $this->modifiedColumns[SpyAvailabilityTableMap::COL_ID_AVAILABILITY] = true;
        if (null !== $this->id_availability) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyAvailabilityTableMap::COL_ID_AVAILABILITY . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_ID_AVAILABILITY)) {
            $modifiedColumns[':p' . $index++]  = 'id_availability';
        }
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_FK_AVAILABILITY_ABSTRACT)) {
            $modifiedColumns[':p' . $index++]  = 'fk_availability_abstract';
        }
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_FK_STORE)) {
            $modifiedColumns[':p' . $index++]  = 'fk_store';
        }
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_IS_NEVER_OUT_OF_STOCK)) {
            $modifiedColumns[':p' . $index++]  = 'is_never_out_of_stock';
        }
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_QUANTITY)) {
            $modifiedColumns[':p' . $index++]  = 'quantity';
        }
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_SKU)) {
            $modifiedColumns[':p' . $index++]  = 'sku';
        }

        $sql = sprintf(
            'INSERT INTO spy_availability (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case 'id_availability':
                        $stmt->bindValue($identifier, $this->id_availability, PDO::PARAM_INT);

                        break;
                    case 'fk_availability_abstract':
                        $stmt->bindValue($identifier, $this->fk_availability_abstract, PDO::PARAM_INT);

                        break;
                    case 'fk_store':
                        $stmt->bindValue($identifier, $this->fk_store, PDO::PARAM_INT);

                        break;
                    case 'is_never_out_of_stock':
                        $stmt->bindValue($identifier, (int) $this->is_never_out_of_stock, PDO::PARAM_INT);

                        break;
                    case 'quantity':
                        $stmt->bindValue($identifier, $this->quantity, PDO::PARAM_STR);

                        break;
                    case 'sku':
                        $stmt->bindValue($identifier, $this->sku, PDO::PARAM_STR);

                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_availability_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdAvailability($pk);

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
        $pos = SpyAvailabilityTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdAvailability();

            case 1:
                return $this->getFkAvailabilityAbstract();

            case 2:
                return $this->getFkStore();

            case 3:
                return $this->getIsNeverOutOfStock();

            case 4:
                return $this->getQuantity();

            case 5:
                return $this->getSku();

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
        if (isset($alreadyDumpedObjects['SpyAvailability'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['SpyAvailability'][$this->hashCode()] = true;
        $keys = SpyAvailabilityTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getIdAvailability(),
            $keys[1] => $this->getFkAvailabilityAbstract(),
            $keys[2] => $this->getFkStore(),
            $keys[3] => $this->getIsNeverOutOfStock(),
            $keys[4] => $this->getQuantity(),
            $keys[5] => $this->getSku(),
        ];
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->aSpyAvailabilityAbstract) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyAvailabilityAbstract';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_availability_abstract';
                        break;
                    default:
                        $key = 'SpyAvailabilityAbstract';
                }

                $result[$key] = $this->aSpyAvailabilityAbstract->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
            }
            if (null !== $this->aStore) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyStore';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_store';
                        break;
                    default:
                        $key = 'Store';
                }

                $result[$key] = $this->aStore->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
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
        $pos = SpyAvailabilityTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

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
                $this->setIdAvailability($value);
                break;
            case 1:
                $this->setFkAvailabilityAbstract($value);
                break;
            case 2:
                $this->setFkStore($value);
                break;
            case 3:
                $this->setIsNeverOutOfStock($value);
                break;
            case 4:
                $this->setQuantity($value);
                break;
            case 5:
                $this->setSku($value);
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
        $keys = SpyAvailabilityTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdAvailability($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setFkAvailabilityAbstract($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setFkStore($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setIsNeverOutOfStock($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setQuantity($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setSku($arr[$keys[5]]);
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
        $criteria = new Criteria(SpyAvailabilityTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_ID_AVAILABILITY)) {
            $criteria->add(SpyAvailabilityTableMap::COL_ID_AVAILABILITY, $this->id_availability);
        }
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_FK_AVAILABILITY_ABSTRACT)) {
            $criteria->add(SpyAvailabilityTableMap::COL_FK_AVAILABILITY_ABSTRACT, $this->fk_availability_abstract);
        }
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_FK_STORE)) {
            $criteria->add(SpyAvailabilityTableMap::COL_FK_STORE, $this->fk_store);
        }
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_IS_NEVER_OUT_OF_STOCK)) {
            $criteria->add(SpyAvailabilityTableMap::COL_IS_NEVER_OUT_OF_STOCK, $this->is_never_out_of_stock);
        }
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_QUANTITY)) {
            $criteria->add(SpyAvailabilityTableMap::COL_QUANTITY, $this->quantity);
        }
        if ($this->isColumnModified(SpyAvailabilityTableMap::COL_SKU)) {
            $criteria->add(SpyAvailabilityTableMap::COL_SKU, $this->sku);
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
        $criteria = ChildSpyAvailabilityQuery::create();
        $criteria->add(SpyAvailabilityTableMap::COL_ID_AVAILABILITY, $this->id_availability);

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
        $validPk = null !== $this->getIdAvailability();

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
        return $this->getIdAvailability();
    }

    /**
     * Generic method to set the primary key (id_availability column).
     *
     * @param int|null $key Primary key.
     * @return void
     */
    public function setPrimaryKey(?int $key = null): void
    {
        $this->setIdAvailability($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     *
     * @return bool
     */
    public function isPrimaryKeyNull(): bool
    {
        return null === $this->getIdAvailability();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \Orm\Zed\Availability\Persistence\SpyAvailability (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setFkAvailabilityAbstract($this->getFkAvailabilityAbstract());
        $copyObj->setFkStore($this->getFkStore());
        $copyObj->setIsNeverOutOfStock($this->getIsNeverOutOfStock());
        $copyObj->setQuantity($this->getQuantity());
        $copyObj->setSku($this->getSku());
        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdAvailability(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Availability\Persistence\SpyAvailability Clone of current object.
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
     * Declares an association between this object and a ChildSpyAvailabilityAbstract object.
     *
     * @param ChildSpyAvailabilityAbstract $v
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setSpyAvailabilityAbstract(ChildSpyAvailabilityAbstract $v = null)
    {
        if ($v === null) {
            $this->setFkAvailabilityAbstract(NULL);
        } else {
            $this->setFkAvailabilityAbstract($v->getIdAvailabilityAbstract());
        }

        $this->aSpyAvailabilityAbstract = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the ChildSpyAvailabilityAbstract object, it will not be re-added.
        if ($v !== null) {
            $v->addSpyAvailability($this);
        }


        return $this;
    }


    /**
     * Get the associated ChildSpyAvailabilityAbstract object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return ChildSpyAvailabilityAbstract The associated ChildSpyAvailabilityAbstract object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getSpyAvailabilityAbstract(?ConnectionInterface $con = null)
    {
        if ($this->aSpyAvailabilityAbstract === null && ($this->fk_availability_abstract != 0)) {
            $this->aSpyAvailabilityAbstract = ChildSpyAvailabilityAbstractQuery::create()->findPk($this->fk_availability_abstract, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aSpyAvailabilityAbstract->addSpyAvailabilities($this);
             */
        }

        return $this->aSpyAvailabilityAbstract;
    }

    /**
     * Declares an association between this object and a SpyStore object.
     *
     * @param SpyStore|null $v
     * @return $this The current object (for fluent API support)
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function setStore(SpyStore $v = null)
    {
        if ($v === null) {
            $this->setFkStore(NULL);
        } else {
            $this->setFkStore($v->getIdStore());
        }

        $this->aStore = $v;

        // Add binding for other direction of this n:n relationship.
        // If this object has already been added to the SpyStore object, it will not be re-added.
        if ($v !== null) {
            $v->addAvailability($this);
        }


        return $this;
    }


    /**
     * Get the associated SpyStore object
     *
     * @param ConnectionInterface $con Optional Connection object.
     * @return SpyStore|null The associated SpyStore object.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getStore(?ConnectionInterface $con = null)
    {
        if ($this->aStore === null && ($this->fk_store != 0)) {
            $this->aStore = SpyStoreQuery::create()->findPk($this->fk_store, $con);
            /* The following can be used additionally to
                guarantee the related object contains a reference
                to this object.  This level of coupling may, however, be
                undesirable since it could result in an only partially populated collection
                in the referenced object.
                $this->aStore->addAvailabilities($this);
             */
        }

        return $this->aStore;
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
        if (null !== $this->aSpyAvailabilityAbstract) {
            $this->aSpyAvailabilityAbstract->removeSpyAvailability($this);
        }
        if (null !== $this->aStore) {
            $this->aStore->removeAvailability($this);
        }
        $this->id_availability = null;
        $this->fk_availability_abstract = null;
        $this->fk_store = null;
        $this->is_never_out_of_stock = null;
        $this->quantity = null;
        $this->sku = null;
        $this->alreadyInSave = false;
        $this->clearAllReferences();
        $this->applyDefaultValues();
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
        } // if ($deep)

        $this->aSpyAvailabilityAbstract = null;
        $this->aStore = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyAvailabilityTableMap::DEFAULT_STRING_FORMAT);
    }

    // event behavior

    /**
     * @return void
     */
    protected function prepareSaveEventName()
    {
        if ($this->isNew()) {
            $this->_eventName = 'Entity.spy_availability.create';
        } else {
            $this->_eventName = 'Entity.spy_availability.update';
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

        if ($this->_eventName !== 'Entity.spy_availability.create') {
            if (!$this->_isModified) {
                return;
            }

            if (!$this->isEventColumnsModified()) {
                return;
            }
        }

        $data = [
            'name' => 'spy_availability',
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
            'name' => 'spy_availability',
            'id' => $this->getPrimaryKey(),
            'event' => 'Entity.spy_availability.delete',
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
        $eventColumns = [
                'spy_availability.is_never_out_of_stock' => [
                    'column' => 'is_never_out_of_stock',
                ],
                'spy_availability.quantity' => [
                    'column' => 'quantity',
                ],
                'spy_availability.sku' => [
                    'column' => 'sku',
                    'keep-additional' => 'true',
                ],
        ];

        foreach ($this->_modifiedColumns as $modifiedColumn) {
            if (isset($eventColumns[$modifiedColumn])) {

                if (!isset($eventColumns[$modifiedColumn]['value'])) {
                    return true;
                }

                $xmlValue = $eventColumns[$modifiedColumn]['value'];
                $xmlValue = $this->getPhpType($xmlValue, $modifiedColumn);
                $xmlOperator = '';
                if (isset($eventColumns[$modifiedColumn]['operator'])) {
                    $xmlOperator = $eventColumns[$modifiedColumn]['operator'];
                }
                $before = $this->_initialValues[$modifiedColumn];
                $field = str_replace('spy_availability.', '', $modifiedColumn);
                $after = $this->$field;

                if ($before === null && $after !== null) {
                    return true;
                }

                if ($before !== null && $after === null) {
                    return true;
                }

                switch ($xmlOperator) {
                    case '<':
                        $result = ($before < $xmlValue xor $after < $xmlValue);
                        break;
                    case '>':
                        $result = ($before > $xmlValue xor $after > $xmlValue);
                        break;
                    case '<=':
                        $result = ($before <= $xmlValue xor $after <= $xmlValue);
                        break;
                    case '>=':
                        $result = ($before >= $xmlValue xor $after >= $xmlValue);
                        break;
                    case '<>':
                        $result = ($before <> $xmlValue xor $after <> $xmlValue);
                        break;
                    case '!=':
                        $result = ($before != $xmlValue xor $after != $xmlValue);
                        break;
                    case '==':
                        $result = ($before == $xmlValue xor $after == $xmlValue);
                        break;
                    case '!==':
                        $result = ($before !== $xmlValue xor $after !== $xmlValue);
                        break;
                    default:
                        $result = ($before === $xmlValue xor $after === $xmlValue);
                }

                if ($result) {
                    return true;
                }
            }
        }

        return false;
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
            $field = str_replace('spy_availability.', '', $modifiedColumn);
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
                'spy_availability.sku',
        ];
    }

    /**
     * @return array
     */
    protected function getAdditionalValues(): array
    {
        $additionalValues = [];
        foreach ($this->getAdditionalValueColumnNames() as $additionalValueColumnName) {
            $field = str_replace('spy_availability.', '', $additionalValueColumnName);
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
        $columnType = SpyAvailabilityTableMap::getTableMap()->getColumn($column)->getType();
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
