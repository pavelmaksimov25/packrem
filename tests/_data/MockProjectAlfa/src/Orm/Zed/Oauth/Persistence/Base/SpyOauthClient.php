<?php

namespace Orm\Zed\Oauth\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\OauthRevoke\Persistence\SpyOauthRefreshToken;
use Orm\Zed\OauthRevoke\Persistence\SpyOauthRefreshTokenQuery;
use Orm\Zed\OauthRevoke\Persistence\Base\SpyOauthRefreshToken as BaseSpyOauthRefreshToken;
use Orm\Zed\OauthRevoke\Persistence\Map\SpyOauthRefreshTokenTableMap;
use Orm\Zed\Oauth\Persistence\SpyOauthAccessToken as ChildSpyOauthAccessToken;
use Orm\Zed\Oauth\Persistence\SpyOauthAccessTokenQuery as ChildSpyOauthAccessTokenQuery;
use Orm\Zed\Oauth\Persistence\SpyOauthClient as ChildSpyOauthClient;
use Orm\Zed\Oauth\Persistence\SpyOauthClientQuery as ChildSpyOauthClientQuery;
use Orm\Zed\Oauth\Persistence\Map\SpyOauthAccessTokenTableMap;
use Orm\Zed\Oauth\Persistence\Map\SpyOauthClientTableMap;
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
use Spryker\Zed\PropelReplicationCache\Business\PropelReplicationCacheFacade;

/**
 * Base class that represents a row from the 'spy_oauth_client' table.
 *
 *
 *
 * @package    propel.generator.src.Orm.Zed.Oauth.Persistence.Base
 */
abstract class SpyOauthClient implements ActiveRecordInterface
{
    /**
     * TableMap class name
     *
     * @var string
     */
    public const TABLE_MAP = '\\Orm\\Zed\\Oauth\\Persistence\\Map\\SpyOauthClientTableMap';


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
     * The value for the id_oauth_client field.
     *
     * @var        int
     */
    protected $id_oauth_client;

    /**
     * The value for the identifier field.
     *
     * @var        string
     */
    protected $identifier;

    /**
     * The value for the is_confidential field.
     *
     * @var        boolean|null
     */
    protected $is_confidential;

    /**
     * The value for the name field.
     *
     * @var        string
     */
    protected $name;

    /**
     * The value for the redirect_uri field.
     *
     * @var        string|null
     */
    protected $redirect_uri;

    /**
     * The value for the secret field.
     *
     * @var        string|null
     */
    protected $secret;

    /**
     * @var        ObjectCollection|ChildSpyOauthAccessToken[] Collection to store aggregation of ChildSpyOauthAccessToken objects.
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyOauthAccessToken> Collection to store aggregation of ChildSpyOauthAccessToken objects.
     */
    protected $collOauthAccessTokens;
    protected $collOauthAccessTokensPartial;

    /**
     * @var        ObjectCollection|SpyOauthRefreshToken[] Collection to store aggregation of SpyOauthRefreshToken objects.
     * @phpstan-var ObjectCollection&\Traversable<SpyOauthRefreshToken> Collection to store aggregation of SpyOauthRefreshToken objects.
     */
    protected $collSpyOauthRefreshTokens;
    protected $collSpyOauthRefreshTokensPartial;

    /**
     * Flag to prevent endless save loop, if this object is referenced
     * by another object which falls in this transaction.
     *
     * @var bool
     */
    protected $alreadyInSave = false;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|ChildSpyOauthAccessToken[]
     * @phpstan-var ObjectCollection&\Traversable<ChildSpyOauthAccessToken>
     */
    protected $oauthAccessTokensScheduledForDeletion = null;

    /**
     * An array of objects scheduled for deletion.
     * @var ObjectCollection|SpyOauthRefreshToken[]
     * @phpstan-var ObjectCollection&\Traversable<SpyOauthRefreshToken>
     */
    protected $spyOauthRefreshTokensScheduledForDeletion = null;

    /**
     * Initializes internal state of Orm\Zed\Oauth\Persistence\Base\SpyOauthClient object.
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
     * Compares this with another <code>SpyOauthClient</code> instance.  If
     * <code>obj</code> is an instance of <code>SpyOauthClient</code>, delegates to
     * <code>equals(SpyOauthClient)</code>.  Otherwise, returns <code>false</code>.
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
     * Get the [id_oauth_client] column value.
     *
     * @return int
     */
    public function getIdOauthClient()
    {
        return $this->id_oauth_client;
    }

    /**
     * Get the [identifier] column value.
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * Get the [is_confidential] column value.
     *
     * @return boolean|null
     */
    public function getIsConfidential()
    {
        return $this->is_confidential;
    }

    /**
     * Get the [is_confidential] column value.
     *
     * @return boolean|null
     */
    public function isConfidential()
    {
        return $this->getIsConfidential();
    }

    /**
     * Get the [name] column value.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get the [redirect_uri] column value.
     *
     * @return string|null
     */
    public function getRedirectUri()
    {
        return $this->redirect_uri;
    }

    /**
     * Get the [secret] column value.
     *
     * @return string|null
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set the value of [id_oauth_client] column.
     *
     * @param int $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setIdOauthClient($v)
    {
        if ($v !== null) {
            $v = (int) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->id_oauth_client !== $v) {
            $this->id_oauth_client = $v;
            $this->modifiedColumns[SpyOauthClientTableMap::COL_ID_OAUTH_CLIENT] = true;
        }

        return $this;
    }

    /**
     * Set the value of [identifier] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setIdentifier($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->identifier !== $v) {
            $this->identifier = $v;
            $this->modifiedColumns[SpyOauthClientTableMap::COL_IDENTIFIER] = true;
        }

        return $this;
    }

    /**
     * Sets the value of the [is_confidential] column.
     * Non-boolean arguments are converted using the following rules:
     *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     *
     * @param bool|integer|string|null $v The new value
     * @return $this The current object (for fluent API support)
     */
    public function setIsConfidential($v)
    {
        if ($v !== null) {
            if (is_string($v)) {
                $v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
            } else {
                $v = (bool) $v;
            }
        }

        $allowNullValues = true;

        if ($v === null && !$allowNullValues) {
            return $this;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->is_confidential !== $v) {
            $this->is_confidential = $v;
            $this->modifiedColumns[SpyOauthClientTableMap::COL_IS_CONFIDENTIAL] = true;
        }

        return $this;
    }

    /**
     * Set the value of [name] column.
     *
     * @param string $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setName($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->name !== $v) {
            $this->name = $v;
            $this->modifiedColumns[SpyOauthClientTableMap::COL_NAME] = true;
        }

        return $this;
    }

    /**
     * Set the value of [redirect_uri] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setRedirectUri($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->redirect_uri !== $v) {
            $this->redirect_uri = $v;
            $this->modifiedColumns[SpyOauthClientTableMap::COL_REDIRECT_URI] = true;
        }

        return $this;
    }

    /**
     * Set the value of [secret] column.
     *
     * @param string|null $v New value
     * @return $this The current object (for fluent API support)
     */
    public function setSecret($v)
    {
        if ($v !== null) {
            $v = (string) $v;
        }

        // When this is true we will not check for value equality as we need to be able to set a value for this field
        // to its initial value and have the column marked as modified. This is relevant for update cases when
        // we create an instance of an entity manually.
        // @see \Spryker\Zed\Kernel\Persistence\EntityManager\TransferToEntityMapper::mapEntity()
        $hasDefaultValue = false;

        if (($this->isNew() && $hasDefaultValue) || $this->secret !== $v) {
            $this->secret = $v;
            $this->modifiedColumns[SpyOauthClientTableMap::COL_SECRET] = true;
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

            $col = $row[TableMap::TYPE_NUM == $indexType ? 0 + $startcol : SpyOauthClientTableMap::translateFieldName('IdOauthClient', TableMap::TYPE_PHPNAME, $indexType)];
            $this->id_oauth_client = (null !== $col) ? (int) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 1 + $startcol : SpyOauthClientTableMap::translateFieldName('Identifier', TableMap::TYPE_PHPNAME, $indexType)];
            $this->identifier = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 2 + $startcol : SpyOauthClientTableMap::translateFieldName('IsConfidential', TableMap::TYPE_PHPNAME, $indexType)];
            $this->is_confidential = (null !== $col) ? (boolean) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 3 + $startcol : SpyOauthClientTableMap::translateFieldName('Name', TableMap::TYPE_PHPNAME, $indexType)];
            $this->name = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 4 + $startcol : SpyOauthClientTableMap::translateFieldName('RedirectUri', TableMap::TYPE_PHPNAME, $indexType)];
            $this->redirect_uri = (null !== $col) ? (string) $col : null;

            $col = $row[TableMap::TYPE_NUM == $indexType ? 5 + $startcol : SpyOauthClientTableMap::translateFieldName('Secret', TableMap::TYPE_PHPNAME, $indexType)];
            $this->secret = (null !== $col) ? (string) $col : null;

            $this->resetModified();
            $this->setNew(false);

            if ($rehydrate) {
                $this->ensureConsistency();
            }

            return $startcol + 6; // 6 = SpyOauthClientTableMap::NUM_HYDRATE_COLUMNS.

        } catch (Exception $e) {
            throw new PropelException(sprintf('Error populating %s object', '\\Orm\\Zed\\Oauth\\Persistence\\SpyOauthClient'), 0, $e);
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
            $con = Propel::getServiceContainer()->getReadConnection(SpyOauthClientTableMap::DATABASE_NAME);
        }

        // We don't need to alter the object instance pool; we're just modifying this instance
        // already in the pool.

        $dataFetcher = ChildSpyOauthClientQuery::create(null, $this->buildPkeyCriteria())->setFormatter(ModelCriteria::FORMAT_STATEMENT)->find($con);
        $row = $dataFetcher->fetch();
        $dataFetcher->close();
        if (!$row) {
            throw new PropelException('Cannot find matching row in the database to reload object values.');
        }
        $this->hydrate($row, 0, true, $dataFetcher->getIndexType()); // rehydrate

        if ($deep) {  // also de-associate any related objects?

            $this->collOauthAccessTokens = null;

            $this->collSpyOauthRefreshTokens = null;

        } // if (deep)
    }

    /**
     * Removes this object from datastore and sets delete attribute.
     *
     * @param ConnectionInterface $con
     * @return void
     * @throws \Propel\Runtime\Exception\PropelException
     * @see SpyOauthClient::setDeleted()
     * @see SpyOauthClient::isDeleted()
     */
    public function delete(?ConnectionInterface $con = null): void
    {
        if ($this->isDeleted()) {
            throw new PropelException("This object has already been deleted.");
        }

        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyOauthClientTableMap::DATABASE_NAME);
        }

        $con->transaction(function () use ($con) {
            $deleteQuery = ChildSpyOauthClientQuery::create()
                ->filterByPrimaryKey($this->getPrimaryKey());
            $ret = $this->preDelete($con);
            if ($ret) {
                $deleteQuery->delete($con);
                $this->postDelete($con);
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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyOauthClientTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con) {
            $ret = $this->preSave($con);
            $isInsert = $this->isNew();
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
                SpyOauthClientTableMap::addInstanceToPool($this);
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

            if ($this->oauthAccessTokensScheduledForDeletion !== null) {
                if (!$this->oauthAccessTokensScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\Oauth\Persistence\SpyOauthAccessTokenQuery::create()
                        ->filterByPrimaryKeys($this->oauthAccessTokensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->oauthAccessTokensScheduledForDeletion = null;
                }
            }

            if ($this->collOauthAccessTokens !== null) {
                foreach ($this->collOauthAccessTokens as $referrerFK) {
                    if (!$referrerFK->isDeleted() && ($referrerFK->isNew() || $referrerFK->isModified())) {
                        $affectedRows += $referrerFK->save($con);
                    }
                }
            }

            if ($this->spyOauthRefreshTokensScheduledForDeletion !== null) {
                if (!$this->spyOauthRefreshTokensScheduledForDeletion->isEmpty()) {
                    \Orm\Zed\OauthRevoke\Persistence\SpyOauthRefreshTokenQuery::create()
                        ->filterByPrimaryKeys($this->spyOauthRefreshTokensScheduledForDeletion->getPrimaryKeys(false))
                        ->delete($con);
                    $this->spyOauthRefreshTokensScheduledForDeletion = null;
                }
            }

            if ($this->collSpyOauthRefreshTokens !== null) {
                foreach ($this->collSpyOauthRefreshTokens as $referrerFK) {
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

        $this->modifiedColumns[SpyOauthClientTableMap::COL_ID_OAUTH_CLIENT] = true;
        if (null !== $this->id_oauth_client) {
            throw new PropelException('Cannot insert a value for auto-increment primary key (' . SpyOauthClientTableMap::COL_ID_OAUTH_CLIENT . ')');
        }

         // check the columns in natural order for more readable SQL queries
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_ID_OAUTH_CLIENT)) {
            $modifiedColumns[':p' . $index++]  = '`id_oauth_client`';
        }
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_IDENTIFIER)) {
            $modifiedColumns[':p' . $index++]  = '`identifier`';
        }
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_IS_CONFIDENTIAL)) {
            $modifiedColumns[':p' . $index++]  = '`is_confidential`';
        }
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_NAME)) {
            $modifiedColumns[':p' . $index++]  = '`name`';
        }
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_REDIRECT_URI)) {
            $modifiedColumns[':p' . $index++]  = '`redirect_uri`';
        }
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_SECRET)) {
            $modifiedColumns[':p' . $index++]  = '`secret`';
        }

        $sql = sprintf(
            'INSERT INTO `spy_oauth_client` (%s) VALUES (%s)',
            implode(', ', $modifiedColumns),
            implode(', ', array_keys($modifiedColumns))
        );

        try {
            $stmt = $con->prepare($sql);
            foreach ($modifiedColumns as $identifier => $columnName) {
                switch ($columnName) {
                    case '`id_oauth_client`':
                        $stmt->bindValue($identifier, $this->id_oauth_client, PDO::PARAM_INT);

                        break;
                    case '`identifier`':
                        $stmt->bindValue($identifier, $this->identifier, PDO::PARAM_STR);

                        break;
                    case '`is_confidential`':
                        $stmt->bindValue($identifier, (int) $this->is_confidential, PDO::PARAM_INT);

                        break;
                    case '`name`':
                        $stmt->bindValue($identifier, $this->name, PDO::PARAM_STR);

                        break;
                    case '`redirect_uri`':
                        $stmt->bindValue($identifier, $this->redirect_uri, PDO::PARAM_STR);

                        break;
                    case '`secret`':
                        $stmt->bindValue($identifier, $this->secret, PDO::PARAM_STR);

                        break;
                }
            }
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute INSERT statement [%s]', $sql), 0, $e);
        }

        try {
            $pk = $con->lastInsertId('spy_oauth_client_pk_seq');
        } catch (Exception $e) {
            throw new PropelException('Unable to get autoincrement id.', 0, $e);
        }
        $this->setIdOauthClient($pk);

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
        $pos = SpyOauthClientTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);
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
                return $this->getIdOauthClient();

            case 1:
                return $this->getIdentifier();

            case 2:
                return $this->getIsConfidential();

            case 3:
                return $this->getName();

            case 4:
                return $this->getRedirectUri();

            case 5:
                return $this->getSecret();

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
        if (isset($alreadyDumpedObjects['SpyOauthClient'][$this->hashCode()])) {
            return ['*RECURSION*'];
        }
        $alreadyDumpedObjects['SpyOauthClient'][$this->hashCode()] = true;
        $keys = SpyOauthClientTableMap::getFieldNames($keyType);
        $result = [
            $keys[0] => $this->getIdOauthClient(),
            $keys[1] => $this->getIdentifier(),
            $keys[2] => $this->getIsConfidential(),
            $keys[3] => $this->getName(),
            $keys[4] => $this->getRedirectUri(),
            $keys[5] => $this->getSecret(),
        ];
        $virtualColumns = $this->virtualColumns;
        foreach ($virtualColumns as $key => $virtualColumn) {
            $result[$key] = $virtualColumn;
        }

        if ($includeForeignObjects) {
            if (null !== $this->collOauthAccessTokens) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyOauthAccessTokens';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_oauth_access_tokens';
                        break;
                    default:
                        $key = 'OauthAccessTokens';
                }

                $result[$key] = $this->collOauthAccessTokens->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
            }
            if (null !== $this->collSpyOauthRefreshTokens) {

                switch ($keyType) {
                    case TableMap::TYPE_CAMELNAME:
                        $key = 'spyOauthRefreshTokens';
                        break;
                    case TableMap::TYPE_FIELDNAME:
                        $key = 'spy_oauth_refresh_tokens';
                        break;
                    default:
                        $key = 'SpyOauthRefreshTokens';
                }

                $result[$key] = $this->collSpyOauthRefreshTokens->toArray(null, false, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
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
        $pos = SpyOauthClientTableMap::translateFieldName($name, $type, TableMap::TYPE_NUM);

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
                $this->setIdOauthClient($value);
                break;
            case 1:
                $this->setIdentifier($value);
                break;
            case 2:
                $this->setIsConfidential($value);
                break;
            case 3:
                $this->setName($value);
                break;
            case 4:
                $this->setRedirectUri($value);
                break;
            case 5:
                $this->setSecret($value);
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
        $keys = SpyOauthClientTableMap::getFieldNames($keyType);

        if (array_key_exists($keys[0], $arr)) {
            $this->setIdOauthClient($arr[$keys[0]]);
        }
        if (array_key_exists($keys[1], $arr)) {
            $this->setIdentifier($arr[$keys[1]]);
        }
        if (array_key_exists($keys[2], $arr)) {
            $this->setIsConfidential($arr[$keys[2]]);
        }
        if (array_key_exists($keys[3], $arr)) {
            $this->setName($arr[$keys[3]]);
        }
        if (array_key_exists($keys[4], $arr)) {
            $this->setRedirectUri($arr[$keys[4]]);
        }
        if (array_key_exists($keys[5], $arr)) {
            $this->setSecret($arr[$keys[5]]);
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
        $criteria = new Criteria(SpyOauthClientTableMap::DATABASE_NAME);

        if ($this->isColumnModified(SpyOauthClientTableMap::COL_ID_OAUTH_CLIENT)) {
            $criteria->add(SpyOauthClientTableMap::COL_ID_OAUTH_CLIENT, $this->id_oauth_client);
        }
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_IDENTIFIER)) {
            $criteria->add(SpyOauthClientTableMap::COL_IDENTIFIER, $this->identifier);
        }
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_IS_CONFIDENTIAL)) {
            $criteria->add(SpyOauthClientTableMap::COL_IS_CONFIDENTIAL, $this->is_confidential);
        }
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_NAME)) {
            $criteria->add(SpyOauthClientTableMap::COL_NAME, $this->name);
        }
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_REDIRECT_URI)) {
            $criteria->add(SpyOauthClientTableMap::COL_REDIRECT_URI, $this->redirect_uri);
        }
        if ($this->isColumnModified(SpyOauthClientTableMap::COL_SECRET)) {
            $criteria->add(SpyOauthClientTableMap::COL_SECRET, $this->secret);
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
        $criteria = ChildSpyOauthClientQuery::create();
        $criteria->add(SpyOauthClientTableMap::COL_ID_OAUTH_CLIENT, $this->id_oauth_client);

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
        $validPk = null !== $this->getIdOauthClient();

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
        return $this->getIdOauthClient();
    }

    /**
     * Generic method to set the primary key (id_oauth_client column).
     *
     * @param int|null $key Primary key.
     * @return void
     */
    public function setPrimaryKey(?int $key = null): void
    {
        $this->setIdOauthClient($key);
    }

    /**
     * Returns true if the primary key for this object is null.
     *
     * @return bool
     */
    public function isPrimaryKeyNull(): bool
    {
        return null === $this->getIdOauthClient();
    }

    /**
     * Sets contents of passed object to values from current object.
     *
     * If desired, this method can also make copies of all associated (fkey referrers)
     * objects.
     *
     * @param object $copyObj An object of \Orm\Zed\Oauth\Persistence\SpyOauthClient (or compatible) type.
     * @param bool $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
     * @param bool $makeNew Whether to reset autoincrement PKs and make the object new.
     * @throws \Propel\Runtime\Exception\PropelException
     * @return void
     */
    public function copyInto(object $copyObj, bool $deepCopy = false, bool $makeNew = true): void
    {
        $copyObj->setIdentifier($this->getIdentifier());
        $copyObj->setIsConfidential($this->getIsConfidential());
        $copyObj->setName($this->getName());
        $copyObj->setRedirectUri($this->getRedirectUri());
        $copyObj->setSecret($this->getSecret());

        if ($deepCopy) {
            // important: temporarily setNew(false) because this affects the behavior of
            // the getter/setter methods for fkey referrer objects.
            $copyObj->setNew(false);

            foreach ($this->getOauthAccessTokens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addOauthAccessToken($relObj->copy($deepCopy));
                }
            }

            foreach ($this->getSpyOauthRefreshTokens() as $relObj) {
                if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                    $copyObj->addSpyOauthRefreshToken($relObj->copy($deepCopy));
                }
            }

        } // if ($deepCopy)

        if ($makeNew) {
            $copyObj->setNew(true);
            $copyObj->setIdOauthClient(NULL); // this is a auto-increment column, so set to default value
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
     * @return \Orm\Zed\Oauth\Persistence\SpyOauthClient Clone of current object.
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
        if ('OauthAccessToken' === $relationName) {
            $this->initOauthAccessTokens();
            return;
        }
        if ('SpyOauthRefreshToken' === $relationName) {
            $this->initSpyOauthRefreshTokens();
            return;
        }
    }

    /**
     * Clears out the collOauthAccessTokens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return $this
     * @see addOauthAccessTokens()
     */
    public function clearOauthAccessTokens()
    {
        $this->collOauthAccessTokens = null; // important to set this to NULL since that means it is uninitialized

        return $this;
    }

    /**
     * Reset is the collOauthAccessTokens collection loaded partially.
     *
     * @return void
     */
    public function resetPartialOauthAccessTokens($v = true): void
    {
        $this->collOauthAccessTokensPartial = $v;
    }

    /**
     * Initializes the collOauthAccessTokens collection.
     *
     * By default this just sets the collOauthAccessTokens collection to an empty array (like clearcollOauthAccessTokens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param bool $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initOauthAccessTokens(bool $overrideExisting = true): void
    {
        if (null !== $this->collOauthAccessTokens && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyOauthAccessTokenTableMap::getTableMap()->getCollectionClassName();

        $this->collOauthAccessTokens = new $collectionClassName;
        $this->collOauthAccessTokens->setModel('\Orm\Zed\Oauth\Persistence\SpyOauthAccessToken');
    }

    /**
     * Gets an array of ChildSpyOauthAccessToken objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyOauthClient is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @return ObjectCollection|ChildSpyOauthAccessToken[] List of ChildSpyOauthAccessToken objects
     * @phpstan-return ObjectCollection&\Traversable<ChildSpyOauthAccessToken> List of ChildSpyOauthAccessToken objects
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getOauthAccessTokens(?Criteria $criteria = null, ?ConnectionInterface $con = null)
    {
        $partial = $this->collOauthAccessTokensPartial && !$this->isNew();
        if (null === $this->collOauthAccessTokens || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collOauthAccessTokens) {
                    $this->initOauthAccessTokens();
                } else {
                    $collectionClassName = SpyOauthAccessTokenTableMap::getTableMap()->getCollectionClassName();

                    $collOauthAccessTokens = new $collectionClassName;
                    $collOauthAccessTokens->setModel('\Orm\Zed\Oauth\Persistence\SpyOauthAccessToken');

                    return $collOauthAccessTokens;
                }
            } else {
                $collOauthAccessTokens = ChildSpyOauthAccessTokenQuery::create(null, $criteria)
                    ->filterByOauthClient($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collOauthAccessTokensPartial && count($collOauthAccessTokens)) {
                        $this->initOauthAccessTokens(false);

                        foreach ($collOauthAccessTokens as $obj) {
                            if (false == $this->collOauthAccessTokens->contains($obj)) {
                                $this->collOauthAccessTokens->append($obj);
                            }
                        }

                        $this->collOauthAccessTokensPartial = true;
                    }

                    return $collOauthAccessTokens;
                }

                if ($partial && $this->collOauthAccessTokens) {
                    foreach ($this->collOauthAccessTokens as $obj) {
                        if ($obj->isNew()) {
                            $collOauthAccessTokens[] = $obj;
                        }
                    }
                }

                $this->collOauthAccessTokens = $collOauthAccessTokens;
                $this->collOauthAccessTokensPartial = false;
            }
        }

        return $this->collOauthAccessTokens;
    }

    /**
     * Sets a collection of ChildSpyOauthAccessToken objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param Collection $oauthAccessTokens A Propel collection.
     * @param ConnectionInterface $con Optional connection object
     * @return $this The current object (for fluent API support)
     */
    public function setOauthAccessTokens(Collection $oauthAccessTokens, ?ConnectionInterface $con = null)
    {
        /** @var ChildSpyOauthAccessToken[] $oauthAccessTokensToDelete */
        $oauthAccessTokensToDelete = $this->getOauthAccessTokens(new Criteria(), $con)->diff($oauthAccessTokens);


        $this->oauthAccessTokensScheduledForDeletion = $oauthAccessTokensToDelete;

        foreach ($oauthAccessTokensToDelete as $oauthAccessTokenRemoved) {
            $oauthAccessTokenRemoved->setOauthClient(null);
        }

        $this->collOauthAccessTokens = null;
        foreach ($oauthAccessTokens as $oauthAccessToken) {
            $this->addOauthAccessToken($oauthAccessToken);
        }

        $this->collOauthAccessTokens = $oauthAccessTokens;
        $this->collOauthAccessTokensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related SpyOauthAccessToken objects.
     *
     * @param Criteria $criteria
     * @param bool $distinct
     * @param ConnectionInterface $con
     * @return int Count of related SpyOauthAccessToken objects.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function countOauthAccessTokens(?Criteria $criteria = null, bool $distinct = false, ?ConnectionInterface $con = null): int
    {
        $partial = $this->collOauthAccessTokensPartial && !$this->isNew();
        if (null === $this->collOauthAccessTokens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collOauthAccessTokens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getOauthAccessTokens());
            }

            $query = ChildSpyOauthAccessTokenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterByOauthClient($this)
                ->count($con);
        }

        return count($this->collOauthAccessTokens);
    }

    /**
     * Method called to associate a ChildSpyOauthAccessToken object to this object
     * through the ChildSpyOauthAccessToken foreign key attribute.
     *
     * @param ChildSpyOauthAccessToken $l ChildSpyOauthAccessToken
     * @return $this The current object (for fluent API support)
     */
    public function addOauthAccessToken(ChildSpyOauthAccessToken $l)
    {
        if ($this->collOauthAccessTokens === null) {
            $this->initOauthAccessTokens();
            $this->collOauthAccessTokensPartial = true;
        }

        if (!$this->collOauthAccessTokens->contains($l)) {
            $this->doAddOauthAccessToken($l);

            if ($this->oauthAccessTokensScheduledForDeletion and $this->oauthAccessTokensScheduledForDeletion->contains($l)) {
                $this->oauthAccessTokensScheduledForDeletion->remove($this->oauthAccessTokensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param ChildSpyOauthAccessToken $oauthAccessToken The ChildSpyOauthAccessToken object to add.
     */
    protected function doAddOauthAccessToken(ChildSpyOauthAccessToken $oauthAccessToken): void
    {
        $this->collOauthAccessTokens[]= $oauthAccessToken;
        $oauthAccessToken->setOauthClient($this);
    }

    /**
     * @param ChildSpyOauthAccessToken $oauthAccessToken The ChildSpyOauthAccessToken object to remove.
     * @return $this The current object (for fluent API support)
     */
    public function removeOauthAccessToken(ChildSpyOauthAccessToken $oauthAccessToken)
    {
        if ($this->getOauthAccessTokens()->contains($oauthAccessToken)) {
            $pos = $this->collOauthAccessTokens->search($oauthAccessToken);
            $this->collOauthAccessTokens->remove($pos);
            if (null === $this->oauthAccessTokensScheduledForDeletion) {
                $this->oauthAccessTokensScheduledForDeletion = clone $this->collOauthAccessTokens;
                $this->oauthAccessTokensScheduledForDeletion->clear();
            }
            $this->oauthAccessTokensScheduledForDeletion[]= clone $oauthAccessToken;
            $oauthAccessToken->setOauthClient(null);
        }

        return $this;
    }

    /**
     * Clears out the collSpyOauthRefreshTokens collection
     *
     * This does not modify the database; however, it will remove any associated objects, causing
     * them to be refetched by subsequent calls to accessor method.
     *
     * @return $this
     * @see addSpyOauthRefreshTokens()
     */
    public function clearSpyOauthRefreshTokens()
    {
        $this->collSpyOauthRefreshTokens = null; // important to set this to NULL since that means it is uninitialized

        return $this;
    }

    /**
     * Reset is the collSpyOauthRefreshTokens collection loaded partially.
     *
     * @return void
     */
    public function resetPartialSpyOauthRefreshTokens($v = true): void
    {
        $this->collSpyOauthRefreshTokensPartial = $v;
    }

    /**
     * Initializes the collSpyOauthRefreshTokens collection.
     *
     * By default this just sets the collSpyOauthRefreshTokens collection to an empty array (like clearcollSpyOauthRefreshTokens());
     * however, you may wish to override this method in your stub class to provide setting appropriate
     * to your application -- for example, setting the initial array to the values stored in database.
     *
     * @param bool $overrideExisting If set to true, the method call initializes
     *                                        the collection even if it is not empty
     *
     * @return void
     */
    public function initSpyOauthRefreshTokens(bool $overrideExisting = true): void
    {
        if (null !== $this->collSpyOauthRefreshTokens && !$overrideExisting) {
            return;
        }

        $collectionClassName = SpyOauthRefreshTokenTableMap::getTableMap()->getCollectionClassName();

        $this->collSpyOauthRefreshTokens = new $collectionClassName;
        $this->collSpyOauthRefreshTokens->setModel('\Orm\Zed\OauthRevoke\Persistence\SpyOauthRefreshToken');
    }

    /**
     * Gets an array of SpyOauthRefreshToken objects which contain a foreign key that references this object.
     *
     * If the $criteria is not null, it is used to always fetch the results from the database.
     * Otherwise the results are fetched from the database the first time, then cached.
     * Next time the same method is called without $criteria, the cached collection is returned.
     * If this ChildSpyOauthClient is new, it will return
     * an empty collection or the current collection; the criteria is ignored on a new object.
     *
     * @param Criteria $criteria optional Criteria object to narrow the query
     * @param ConnectionInterface $con optional connection object
     * @return ObjectCollection|SpyOauthRefreshToken[] List of SpyOauthRefreshToken objects
     * @phpstan-return ObjectCollection&\Traversable<SpyOauthRefreshToken> List of SpyOauthRefreshToken objects
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function getSpyOauthRefreshTokens(?Criteria $criteria = null, ?ConnectionInterface $con = null)
    {
        $partial = $this->collSpyOauthRefreshTokensPartial && !$this->isNew();
        if (null === $this->collSpyOauthRefreshTokens || null !== $criteria || $partial) {
            if ($this->isNew()) {
                // return empty collection
                if (null === $this->collSpyOauthRefreshTokens) {
                    $this->initSpyOauthRefreshTokens();
                } else {
                    $collectionClassName = SpyOauthRefreshTokenTableMap::getTableMap()->getCollectionClassName();

                    $collSpyOauthRefreshTokens = new $collectionClassName;
                    $collSpyOauthRefreshTokens->setModel('\Orm\Zed\OauthRevoke\Persistence\SpyOauthRefreshToken');

                    return $collSpyOauthRefreshTokens;
                }
            } else {
                $collSpyOauthRefreshTokens = SpyOauthRefreshTokenQuery::create(null, $criteria)
                    ->filterBySpyOauthClient($this)
                    ->find($con);

                if (null !== $criteria) {
                    if (false !== $this->collSpyOauthRefreshTokensPartial && count($collSpyOauthRefreshTokens)) {
                        $this->initSpyOauthRefreshTokens(false);

                        foreach ($collSpyOauthRefreshTokens as $obj) {
                            if (false == $this->collSpyOauthRefreshTokens->contains($obj)) {
                                $this->collSpyOauthRefreshTokens->append($obj);
                            }
                        }

                        $this->collSpyOauthRefreshTokensPartial = true;
                    }

                    return $collSpyOauthRefreshTokens;
                }

                if ($partial && $this->collSpyOauthRefreshTokens) {
                    foreach ($this->collSpyOauthRefreshTokens as $obj) {
                        if ($obj->isNew()) {
                            $collSpyOauthRefreshTokens[] = $obj;
                        }
                    }
                }

                $this->collSpyOauthRefreshTokens = $collSpyOauthRefreshTokens;
                $this->collSpyOauthRefreshTokensPartial = false;
            }
        }

        return $this->collSpyOauthRefreshTokens;
    }

    /**
     * Sets a collection of SpyOauthRefreshToken objects related by a one-to-many relationship
     * to the current object.
     * It will also schedule objects for deletion based on a diff between old objects (aka persisted)
     * and new objects from the given Propel collection.
     *
     * @param Collection $spyOauthRefreshTokens A Propel collection.
     * @param ConnectionInterface $con Optional connection object
     * @return $this The current object (for fluent API support)
     */
    public function setSpyOauthRefreshTokens(Collection $spyOauthRefreshTokens, ?ConnectionInterface $con = null)
    {
        /** @var SpyOauthRefreshToken[] $spyOauthRefreshTokensToDelete */
        $spyOauthRefreshTokensToDelete = $this->getSpyOauthRefreshTokens(new Criteria(), $con)->diff($spyOauthRefreshTokens);


        $this->spyOauthRefreshTokensScheduledForDeletion = $spyOauthRefreshTokensToDelete;

        foreach ($spyOauthRefreshTokensToDelete as $spyOauthRefreshTokenRemoved) {
            $spyOauthRefreshTokenRemoved->setSpyOauthClient(null);
        }

        $this->collSpyOauthRefreshTokens = null;
        foreach ($spyOauthRefreshTokens as $spyOauthRefreshToken) {
            $this->addSpyOauthRefreshToken($spyOauthRefreshToken);
        }

        $this->collSpyOauthRefreshTokens = $spyOauthRefreshTokens;
        $this->collSpyOauthRefreshTokensPartial = false;

        return $this;
    }

    /**
     * Returns the number of related BaseSpyOauthRefreshToken objects.
     *
     * @param Criteria $criteria
     * @param bool $distinct
     * @param ConnectionInterface $con
     * @return int Count of related BaseSpyOauthRefreshToken objects.
     * @throws \Propel\Runtime\Exception\PropelException
     */
    public function countSpyOauthRefreshTokens(?Criteria $criteria = null, bool $distinct = false, ?ConnectionInterface $con = null): int
    {
        $partial = $this->collSpyOauthRefreshTokensPartial && !$this->isNew();
        if (null === $this->collSpyOauthRefreshTokens || null !== $criteria || $partial) {
            if ($this->isNew() && null === $this->collSpyOauthRefreshTokens) {
                return 0;
            }

            if ($partial && !$criteria) {
                return count($this->getSpyOauthRefreshTokens());
            }

            $query = SpyOauthRefreshTokenQuery::create(null, $criteria);
            if ($distinct) {
                $query->distinct();
            }

            return $query
                ->filterBySpyOauthClient($this)
                ->count($con);
        }

        return count($this->collSpyOauthRefreshTokens);
    }

    /**
     * Method called to associate a SpyOauthRefreshToken object to this object
     * through the SpyOauthRefreshToken foreign key attribute.
     *
     * @param SpyOauthRefreshToken $l SpyOauthRefreshToken
     * @return $this The current object (for fluent API support)
     */
    public function addSpyOauthRefreshToken(SpyOauthRefreshToken $l)
    {
        if ($this->collSpyOauthRefreshTokens === null) {
            $this->initSpyOauthRefreshTokens();
            $this->collSpyOauthRefreshTokensPartial = true;
        }

        if (!$this->collSpyOauthRefreshTokens->contains($l)) {
            $this->doAddSpyOauthRefreshToken($l);

            if ($this->spyOauthRefreshTokensScheduledForDeletion and $this->spyOauthRefreshTokensScheduledForDeletion->contains($l)) {
                $this->spyOauthRefreshTokensScheduledForDeletion->remove($this->spyOauthRefreshTokensScheduledForDeletion->search($l));
            }
        }

        return $this;
    }

    /**
     * @param SpyOauthRefreshToken $spyOauthRefreshToken The SpyOauthRefreshToken object to add.
     */
    protected function doAddSpyOauthRefreshToken(SpyOauthRefreshToken $spyOauthRefreshToken): void
    {
        $this->collSpyOauthRefreshTokens[]= $spyOauthRefreshToken;
        $spyOauthRefreshToken->setSpyOauthClient($this);
    }

    /**
     * @param SpyOauthRefreshToken $spyOauthRefreshToken The SpyOauthRefreshToken object to remove.
     * @return $this The current object (for fluent API support)
     */
    public function removeSpyOauthRefreshToken(SpyOauthRefreshToken $spyOauthRefreshToken)
    {
        if ($this->getSpyOauthRefreshTokens()->contains($spyOauthRefreshToken)) {
            $pos = $this->collSpyOauthRefreshTokens->search($spyOauthRefreshToken);
            $this->collSpyOauthRefreshTokens->remove($pos);
            if (null === $this->spyOauthRefreshTokensScheduledForDeletion) {
                $this->spyOauthRefreshTokensScheduledForDeletion = clone $this->collSpyOauthRefreshTokens;
                $this->spyOauthRefreshTokensScheduledForDeletion->clear();
            }
            $this->spyOauthRefreshTokensScheduledForDeletion[]= clone $spyOauthRefreshToken;
            $spyOauthRefreshToken->setSpyOauthClient(null);
        }

        return $this;
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
        $this->id_oauth_client = null;
        $this->identifier = null;
        $this->is_confidential = null;
        $this->name = null;
        $this->redirect_uri = null;
        $this->secret = null;
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
            if ($this->collOauthAccessTokens) {
                foreach ($this->collOauthAccessTokens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
            if ($this->collSpyOauthRefreshTokens) {
                foreach ($this->collSpyOauthRefreshTokens as $o) {
                    $o->clearAllReferences($deep);
                }
            }
        } // if ($deep)

        $this->collOauthAccessTokens = null;
        $this->collSpyOauthRefreshTokens = null;
        return $this;
    }

    /**
     * Return the string representation of this object
     *
     * @return string
     */
    public function __toString()
    {
        return (string) $this->exportTo(SpyOauthClientTableMap::DEFAULT_STRING_FORMAT);
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
