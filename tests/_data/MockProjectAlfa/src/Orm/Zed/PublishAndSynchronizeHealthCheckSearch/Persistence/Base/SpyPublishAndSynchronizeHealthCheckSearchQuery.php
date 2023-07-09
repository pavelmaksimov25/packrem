<?php

namespace Orm\Zed\PublishAndSynchronizeHealthCheckSearch\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\PublishAndSynchronizeHealthCheckSearch\Persistence\SpyPublishAndSynchronizeHealthCheckSearch as ChildSpyPublishAndSynchronizeHealthCheckSearch;
use Orm\Zed\PublishAndSynchronizeHealthCheckSearch\Persistence\SpyPublishAndSynchronizeHealthCheckSearchQuery as ChildSpyPublishAndSynchronizeHealthCheckSearchQuery;
use Orm\Zed\PublishAndSynchronizeHealthCheckSearch\Persistence\Map\SpyPublishAndSynchronizeHealthCheckSearchTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Model\Formatter\TypeAwareSimpleArrayFormatter;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\PropelReplicationCache\Business\PropelReplicationCacheFacade;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the `spy_publish_and_synchronize_health_check_search` table.
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery orderByIdPublishAndSynchronizeHealthCheckSearch($order = Criteria::ASC) Order by the id_publish_and_synchronize_health_check_search column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery orderByFkPublishAndSynchronizeHealthCheck($order = Criteria::ASC) Order by the fk_publish_and_synchronize_health_check column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery orderByHealthCheckKey($order = Criteria::ASC) Order by the health_check_key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery orderByData($order = Criteria::ASC) Order by the data column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery orderByStore($order = Criteria::ASC) Order by the store column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery orderByLocale($order = Criteria::ASC) Order by the locale column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery orderByAliasKeys($order = Criteria::ASC) Order by the alias_keys column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery groupByIdPublishAndSynchronizeHealthCheckSearch() Group by the id_publish_and_synchronize_health_check_search column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery groupByFkPublishAndSynchronizeHealthCheck() Group by the fk_publish_and_synchronize_health_check column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery groupByHealthCheckKey() Group by the health_check_key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery groupByData() Group by the data column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery groupByStore() Group by the store column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery groupByLocale() Group by the locale column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery groupByAliasKeys() Group by the alias_keys column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery groupByKey() Group by the key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearchQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch matching the query
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch matching the query, or a new ChildSpyPublishAndSynchronizeHealthCheckSearch object populated from the query conditions when no match is found
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOneByIdPublishAndSynchronizeHealthCheckSearch(string $id_publish_and_synchronize_health_check_search) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the id_publish_and_synchronize_health_check_search column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOneByFkPublishAndSynchronizeHealthCheck(int $fk_publish_and_synchronize_health_check) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the fk_publish_and_synchronize_health_check column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOneByHealthCheckKey(string $health_check_key) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the health_check_key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOneByData(string $data) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the data column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOneByStore(string $store) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the store column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOneByLocale(string $locale) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the locale column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOneByAliasKeys(string $alias_keys) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the alias_keys column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOneByKey(string $key) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOneByCreatedAt(string $created_at) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the created_at column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the updated_at column
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyPublishAndSynchronizeHealthCheckSearch by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOne(?ConnectionInterface $con = null) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOneByIdPublishAndSynchronizeHealthCheckSearch(string $id_publish_and_synchronize_health_check_search) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the id_publish_and_synchronize_health_check_search column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOneByFkPublishAndSynchronizeHealthCheck(int $fk_publish_and_synchronize_health_check) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the fk_publish_and_synchronize_health_check column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOneByHealthCheckKey(string $health_check_key) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the health_check_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOneByData(string $data) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the data column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOneByStore(string $store) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOneByLocale(string $locale) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the locale column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOneByAliasKeys(string $alias_keys) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the alias_keys column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOneByKey(string $key) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOneByCreatedAt(string $created_at) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyPublishAndSynchronizeHealthCheckSearch filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> find(?ConnectionInterface $con = null) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects based on current ModelCriteria
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection findByIdPublishAndSynchronizeHealthCheckSearch(string|array<string> $id_publish_and_synchronize_health_check_search) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the id_publish_and_synchronize_health_check_search column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> findByIdPublishAndSynchronizeHealthCheckSearch(string|array<string> $id_publish_and_synchronize_health_check_search) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the id_publish_and_synchronize_health_check_search column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection findByFkPublishAndSynchronizeHealthCheck(int|array<int> $fk_publish_and_synchronize_health_check) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the fk_publish_and_synchronize_health_check column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> findByFkPublishAndSynchronizeHealthCheck(int|array<int> $fk_publish_and_synchronize_health_check) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the fk_publish_and_synchronize_health_check column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection findByHealthCheckKey(string|array<string> $health_check_key) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the health_check_key column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> findByHealthCheckKey(string|array<string> $health_check_key) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the health_check_key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection findByData(string|array<string> $data) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the data column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> findByData(string|array<string> $data) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the data column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection findByStore(string|array<string> $store) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the store column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> findByStore(string|array<string> $store) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the store column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection findByLocale(string|array<string> $locale) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the locale column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> findByLocale(string|array<string> $locale) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the locale column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection findByAliasKeys(string|array<string> $alias_keys) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the alias_keys column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> findByAliasKeys(string|array<string> $alias_keys) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the alias_keys column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection findByKey(string|array<string> $key) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the key column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> findByKey(string|array<string> $key) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> findByCreatedAt(string|array<string> $created_at) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the created_at column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|Collection findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the updated_at column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyPublishAndSynchronizeHealthCheckSearch objects filtered by the updated_at column
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckSearch[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyPublishAndSynchronizeHealthCheckSearch> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyPublishAndSynchronizeHealthCheckSearchQuery extends ModelCriteria
{

    /**
     * @var bool
     */
    protected $isForUpdateEnabled = false;

    /**
     * @deprecated Use {@link \Propel\Runtime\ActiveQuery\Criteria::lockForUpdate()} instead.
     *
     * @param bool $isForUpdateEnabled
     *
     * @return $this The primary criteria object
     */
    public function forUpdate($isForUpdateEnabled)
    {
        $this->isForUpdateEnabled = $isForUpdateEnabled;

        return $this;
    }

    /**
     * @param array $params
     *
     * @return string
     */
    public function createSelectSql(&$params): string
    {
        $sql = parent::createSelectSql($params);
        if ($this->isForUpdateEnabled) {
            $sql .= ' FOR UPDATE';
        }

        return $sql;
    }

    /**
     * Clear the conditions to allow the reuse of the query object.
     * The ModelCriteria's Model and alias 'all the properties set by construct) will remain.
     *
     * @return $this The primary criteria object
     */
    public function clear()
    {
        parent::clear();

        $this->isSelfSelected = false;
        $this->forUpdate(false);

        return $this;
    }


    /**
     * @param int $affectedRows
     * @param \Propel\Runtime\Connection\ConnectionInterface $con
     *
     * @return int|null
     */
    protected function postUpdate(int $affectedRows, ConnectionInterface $con): ?int
    {
        $class = get_class($this);
        PropelReplicationCacheFacade::getInstance()->setKey($class);

        return null;
    }

    /**
     * @param int $affectedRows
     * @param \Propel\Runtime\Connection\ConnectionInterface $con
     *
     * @return int|null
     */
    protected function postDelete(int $affectedRows, ConnectionInterface $con): ?int
    {
        $class = get_class($this);
        PropelReplicationCacheFacade::getInstance()->setKey($class);

        return null;
    }

    /**
     * Issue a SELECT query based on the current ModelCriteria
     * and format the list of results with the current formatter
     * By default, returns an array of model objects
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return \Propel\Runtime\Collection\ObjectCollection|\Propel\Runtime\ActiveRecord\ActiveRecordInterface[]|mixed the list of results, formatted by the current formatter
     */
    public function find(?ConnectionInterface $con = null)
    {
        $class = get_class($this);
        $mustUseWriteContext = PropelReplicationCacheFacade::getInstance()->hasKey($class);

        if ($mustUseWriteContext) {
            $con = Propel::getWriteConnection($this->getDbName());
        } elseif ($con === null) {
            $con = Propel::getReadConnection($this->getDbName());
        }

        return parent::find($con);
    }

    /**
     * Issue a SELECT ... LIMIT 1 query based on the current ModelCriteria
     * and format the result with the current formatter
     * By default, returns a model object.
     *
     * Does not work with ->with()s containing one-to-many relations.
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return mixed the result, formatted by the current formatter
     */
    public function findOne(?ConnectionInterface $con = null)
    {
        $class = get_class($this);
        $mustUseWriteContext = PropelReplicationCacheFacade::getInstance()->hasKey($class);

        if ($mustUseWriteContext) {
            $con = Propel::getWriteConnection($this->getDbName());
        } elseif ($con === null) {
            $con = Propel::getReadConnection($this->getDbName());
        }

        return parent::findOne($con);
    }

    /**
     * Issue an existence check on the current ModelCriteria
     *
     * @param \Propel\Runtime\Connection\ConnectionInterface|null $con an optional connection object
     *
     * @return bool column existence
     */
    public function exists(?ConnectionInterface $con = null): bool
    {
        $class = get_class($this);
        $mustUseWriteContext = PropelReplicationCacheFacade::getInstance()->hasKey($class);

        if ($mustUseWriteContext) {
            $con = Propel::getWriteConnection($this->getDbName());
        } elseif ($con === null) {
            $con = Propel::getReadConnection($this->getDbName());
        }

        return parent::exists($con);
    }

    /**
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return void
     */
    public function configureSelectColumns(): void
    {
        if (!$this->select) {
            return;
        }

        if ($this->formatter === null) {
            $this->setFormatter(new TypeAwareSimpleArrayFormatter());
        }

        parent::configureSelectColumns();
     }
        protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Orm\Zed\PublishAndSynchronizeHealthCheckSearch\Persistence\Base\SpyPublishAndSynchronizeHealthCheckSearchQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\PublishAndSynchronizeHealthCheckSearch\\Persistence\\SpyPublishAndSynchronizeHealthCheckSearch', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyPublishAndSynchronizeHealthCheckSearchQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyPublishAndSynchronizeHealthCheckSearchQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyPublishAndSynchronizeHealthCheckSearchQuery) {
            return $criteria;
        }
        $query = new ChildSpyPublishAndSynchronizeHealthCheckSearchQuery();
        if (null !== $modelAlias) {
            $query->setModelAlias($modelAlias);
        }
        if ($criteria instanceof Criteria) {
            $query->mergeWith($criteria);
        }

        return $query;
    }

    /**
     * Find object by primary key.
     * Propel uses the instance pool to skip the database if the object exists.
     * Go fast if the query is untouched.
     *
     * <code>
     * $obj  = $c->findPk(12, $con);
     * </code>
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSpyPublishAndSynchronizeHealthCheckSearch|array|mixed the result, formatted by the current formatter
     */
    public function findPk($key, ?ConnectionInterface $con = null)
    {
        if ($key === null) {
            return null;
        }
        $class = get_class($this);
        $mustUseWriteContext = PropelReplicationCacheFacade::getInstance()->hasKey($class);

        if ($mustUseWriteContext) {
            $con = Propel::getWriteConnection($this->getDbName());
        } elseif ($con === null) {
            $con = Propel::getReadConnection($this->getDbName());
        }


        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }

        $this->basePreSelect($con);

        if (
            $this->formatter || $this->modelAlias || $this->with || $this->select
            || $this->selectColumns || $this->asColumns || $this->selectModifiers
            || $this->map || $this->having || $this->joins
        ) {
            return $this->findPkComplex($key, $con);
        }

        if ((null !== ($obj = SpyPublishAndSynchronizeHealthCheckSearchTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
            // the object is already in the instance pool
            return $obj;
        }

        return $this->findPkSimple($key, $con);
    }

    /**
     * Find object by primary key using raw SQL to go fast.
     * Bypass doSelect() and the object formatter by using generated code.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return ChildSpyPublishAndSynchronizeHealthCheckSearch A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_publish_and_synchronize_health_check_search`, `fk_publish_and_synchronize_health_check`, `health_check_key`, `data`, `store`, `locale`, `alias_keys`, `key`, `created_at`, `updated_at` FROM `spy_publish_and_synchronize_health_check_search` WHERE `id_publish_and_synchronize_health_check_search` = :p0';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key, PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSpyPublishAndSynchronizeHealthCheckSearch $obj */
            $obj = new ChildSpyPublishAndSynchronizeHealthCheckSearch();
            $obj->hydrate($row);
            SpyPublishAndSynchronizeHealthCheckSearchTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
        }
        $stmt->closeCursor();

        return $obj;
    }

    /**
     * Find object by primary key.
     *
     * @param mixed $key Primary key to use for the query
     * @param ConnectionInterface $con A connection object
     *
     * @return ChildSpyPublishAndSynchronizeHealthCheckSearch|array|mixed the result, formatted by the current formatter
     */
    protected function findPkComplex($key, ConnectionInterface $con)
    {
        // As the query uses a PK condition, no limit(1) is necessary.
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKey($key)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->formatOne($dataFetcher);
    }

    /**
     * Find objects by primary key
     * <code>
     * $objs = $c->findPks(array(12, 56, 832), $con);
     * </code>
     * @param     array $keys Primary keys to use for the query
     * @param     ConnectionInterface $con an optional connection object
     *
     * @return    Collection|array|mixed the list of results, formatted by the current formatter
     */
    public function findPks($keys, ConnectionInterface $con = null)
    {
        $class = get_class($this);
        $mustUseWriteContext = PropelReplicationCacheFacade::getInstance()->hasKey($class);

        if ($mustUseWriteContext) {
            $con = Propel::getWriteConnection($this->getDbName());
        } elseif ($con === null) {
            $con = Propel::getReadConnection($this->getDbName());
        }


        if ($con === null) {
            $con = Propel::getServiceContainer()->getReadConnection($this->getDbName());
        }

        $this->basePreSelect($con);
        $criteria = $this->isKeepQuery() ? clone $this : $this;
        $dataFetcher = $criteria
            ->filterByPrimaryKeys($keys)
            ->doSelect($con);

        return $criteria->getFormatter()->init($criteria)->format($dataFetcher);
    }

    /**
     * Filter the query by primary key
     *
     * @param mixed $key Primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKey($key)
    {

        $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH, $key, Criteria::EQUAL);

        return $this;
    }

    /**
     * Filter the query by a list of primary keys
     *
     * @param array|int $keys The list of primary key to use for the query
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPrimaryKeys($keys)
    {

        $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idPublishAndSynchronizeHealthCheckSearch Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPublishAndSynchronizeHealthCheckSearch_Between(array $idPublishAndSynchronizeHealthCheckSearch)
    {
        return $this->filterByIdPublishAndSynchronizeHealthCheckSearch($idPublishAndSynchronizeHealthCheckSearch, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idPublishAndSynchronizeHealthCheckSearchs Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPublishAndSynchronizeHealthCheckSearch_In(array $idPublishAndSynchronizeHealthCheckSearchs)
    {
        return $this->filterByIdPublishAndSynchronizeHealthCheckSearch($idPublishAndSynchronizeHealthCheckSearchs, Criteria::IN);
    }

    /**
     * Filter the query on the id_publish_and_synchronize_health_check_search column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPublishAndSynchronizeHealthCheckSearch(1234); // WHERE id_publish_and_synchronize_health_check_search = 1234
     * $query->filterByIdPublishAndSynchronizeHealthCheckSearch(array(12, 34), Criteria::IN); // WHERE id_publish_and_synchronize_health_check_search IN (12, 34)
     * $query->filterByIdPublishAndSynchronizeHealthCheckSearch(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_publish_and_synchronize_health_check_search > 12
     * </code>
     *
     * @param     mixed $idPublishAndSynchronizeHealthCheckSearch The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdPublishAndSynchronizeHealthCheckSearch($idPublishAndSynchronizeHealthCheckSearch = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idPublishAndSynchronizeHealthCheckSearch)) {
            $useMinMax = false;
            if (isset($idPublishAndSynchronizeHealthCheckSearch['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH, $idPublishAndSynchronizeHealthCheckSearch['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPublishAndSynchronizeHealthCheckSearch['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH, $idPublishAndSynchronizeHealthCheckSearch['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idPublishAndSynchronizeHealthCheckSearch of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH, $idPublishAndSynchronizeHealthCheckSearch, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkPublishAndSynchronizeHealthCheck Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPublishAndSynchronizeHealthCheck_Between(array $fkPublishAndSynchronizeHealthCheck)
    {
        return $this->filterByFkPublishAndSynchronizeHealthCheck($fkPublishAndSynchronizeHealthCheck, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkPublishAndSynchronizeHealthChecks Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPublishAndSynchronizeHealthCheck_In(array $fkPublishAndSynchronizeHealthChecks)
    {
        return $this->filterByFkPublishAndSynchronizeHealthCheck($fkPublishAndSynchronizeHealthChecks, Criteria::IN);
    }

    /**
     * Filter the query on the fk_publish_and_synchronize_health_check column
     *
     * Example usage:
     * <code>
     * $query->filterByFkPublishAndSynchronizeHealthCheck(1234); // WHERE fk_publish_and_synchronize_health_check = 1234
     * $query->filterByFkPublishAndSynchronizeHealthCheck(array(12, 34), Criteria::IN); // WHERE fk_publish_and_synchronize_health_check IN (12, 34)
     * $query->filterByFkPublishAndSynchronizeHealthCheck(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_publish_and_synchronize_health_check > 12
     * </code>
     *
     * @param     mixed $fkPublishAndSynchronizeHealthCheck The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkPublishAndSynchronizeHealthCheck($fkPublishAndSynchronizeHealthCheck = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkPublishAndSynchronizeHealthCheck)) {
            $useMinMax = false;
            if (isset($fkPublishAndSynchronizeHealthCheck['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_FK_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK, $fkPublishAndSynchronizeHealthCheck['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkPublishAndSynchronizeHealthCheck['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_FK_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK, $fkPublishAndSynchronizeHealthCheck['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkPublishAndSynchronizeHealthCheck of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_FK_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK, $fkPublishAndSynchronizeHealthCheck, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $healthCheckKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByHealthCheckKey_In(array $healthCheckKeys)
    {
        return $this->filterByHealthCheckKey($healthCheckKeys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $healthCheckKey Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByHealthCheckKey_Like($healthCheckKey)
    {
        return $this->filterByHealthCheckKey($healthCheckKey, Criteria::LIKE);
    }

    /**
     * Filter the query on the health_check_key column
     *
     * Example usage:
     * <code>
     * $query->filterByHealthCheckKey('fooValue');   // WHERE health_check_key = 'fooValue'
     * $query->filterByHealthCheckKey('%fooValue%', Criteria::LIKE); // WHERE health_check_key LIKE '%fooValue%'
     * $query->filterByHealthCheckKey([1, 'foo'], Criteria::IN); // WHERE health_check_key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $healthCheckKey The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByHealthCheckKey($healthCheckKey = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $healthCheckKey = str_replace('*', '%', $healthCheckKey);
        }

        if (is_array($healthCheckKey) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$healthCheckKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_HEALTH_CHECK_KEY, $healthCheckKey, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $datas Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByData_In(array $datas)
    {
        return $this->filterByData($datas, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $data Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByData_Like($data)
    {
        return $this->filterByData($data, Criteria::LIKE);
    }

    /**
     * Filter the query on the data column
     *
     * Example usage:
     * <code>
     * $query->filterByData('fooValue');   // WHERE data = 'fooValue'
     * $query->filterByData('%fooValue%', Criteria::LIKE); // WHERE data LIKE '%fooValue%'
     * $query->filterByData([1, 'foo'], Criteria::IN); // WHERE data IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $data The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByData($data = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $data = str_replace('*', '%', $data);
        }

        if (is_array($data) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$data of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_DATA, $data, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $stores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStore_In(array $stores)
    {
        return $this->filterByStore($stores, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $store Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByStore_Like($store)
    {
        return $this->filterByStore($store, Criteria::LIKE);
    }

    /**
     * Filter the query on the store column
     *
     * Example usage:
     * <code>
     * $query->filterByStore('fooValue');   // WHERE store = 'fooValue'
     * $query->filterByStore('%fooValue%', Criteria::LIKE); // WHERE store LIKE '%fooValue%'
     * $query->filterByStore([1, 'foo'], Criteria::IN); // WHERE store IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $store The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByStore($store = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $store = str_replace('*', '%', $store);
        }

        if (is_array($store) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$store of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_STORE, $store, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $locales Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLocale_In(array $locales)
    {
        return $this->filterByLocale($locales, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $locale Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByLocale_Like($locale)
    {
        return $this->filterByLocale($locale, Criteria::LIKE);
    }

    /**
     * Filter the query on the locale column
     *
     * Example usage:
     * <code>
     * $query->filterByLocale('fooValue');   // WHERE locale = 'fooValue'
     * $query->filterByLocale('%fooValue%', Criteria::LIKE); // WHERE locale LIKE '%fooValue%'
     * $query->filterByLocale([1, 'foo'], Criteria::IN); // WHERE locale IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $locale The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByLocale($locale = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $locale = str_replace('*', '%', $locale);
        }

        if (is_array($locale) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$locale of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_LOCALE, $locale, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $aliasKeyss Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAliasKeys_In(array $aliasKeyss)
    {
        return $this->filterByAliasKeys($aliasKeyss, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $aliasKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByAliasKeys_Like($aliasKeys)
    {
        return $this->filterByAliasKeys($aliasKeys, Criteria::LIKE);
    }

    /**
     * Filter the query on the alias_keys column
     *
     * Example usage:
     * <code>
     * $query->filterByAliasKeys('fooValue');   // WHERE alias_keys = 'fooValue'
     * $query->filterByAliasKeys('%fooValue%', Criteria::LIKE); // WHERE alias_keys LIKE '%fooValue%'
     * $query->filterByAliasKeys([1, 'foo'], Criteria::IN); // WHERE alias_keys IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $aliasKeys The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByAliasKeys($aliasKeys = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $aliasKeys = str_replace('*', '%', $aliasKeys);
        }

        if (is_array($aliasKeys) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$aliasKeys of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_ALIAS_KEYS, $aliasKeys, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $keys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByKey_In(array $keys)
    {
        return $this->filterByKey($keys, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $key Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByKey_Like($key)
    {
        return $this->filterByKey($key, Criteria::LIKE);
    }

    /**
     * Filter the query on the key column
     *
     * Example usage:
     * <code>
     * $query->filterByKey('fooValue');   // WHERE key = 'fooValue'
     * $query->filterByKey('%fooValue%', Criteria::LIKE); // WHERE key LIKE '%fooValue%'
     * $query->filterByKey([1, 'foo'], Criteria::IN); // WHERE key IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $key The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByKey($key = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $key = str_replace('*', '%', $key);
        }

        if (is_array($key) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$key of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_KEY, $key, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $createdAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_Between(array $createdAt)
    {
        return $this->filterByCreatedAt($createdAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $createdAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_In(array $createdAts)
    {
        return $this->filterByCreatedAt($createdAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $createdAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCreatedAt_Like($createdAt)
    {
        return $this->filterByCreatedAt($createdAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the created_at column
     *
     * Example usage:
     * <code>
     * $query->filterByCreatedAt('2011-03-14'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt('now'); // WHERE created_at = '2011-03-14'
     * $query->filterByCreatedAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE created_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $createdAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCreatedAt($createdAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($createdAt)) {
            $useMinMax = false;
            if (isset($createdAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_CREATED_AT, $createdAt, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $updatedAt Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_Between(array $updatedAt)
    {
        return $this->filterByUpdatedAt($updatedAt, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $updatedAts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_In(array $updatedAts)
    {
        return $this->filterByUpdatedAt($updatedAts, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $updatedAt Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUpdatedAt_Like($updatedAt)
    {
        return $this->filterByUpdatedAt($updatedAt, Criteria::LIKE);
    }

    /**
     * Filter the query on the updated_at column
     *
     * Example usage:
     * <code>
     * $query->filterByUpdatedAt('2011-03-14'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt('now'); // WHERE updated_at = '2011-03-14'
     * $query->filterByUpdatedAt(array('max' => 'yesterday'), SprykerCriteria::BETWEEN); // WHERE updated_at > '2011-03-13'
     * </code>
     *
     * @param     mixed $updatedAt The value to use as filter.
     *              Values can be integers (unix timestamps), DateTime objects, or strings.
     *              Empty strings are treated as NULL.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByUpdatedAt($updatedAt = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($updatedAt)) {
            $useMinMax = false;
            if (isset($updatedAt['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyPublishAndSynchronizeHealthCheckSearch $spyPublishAndSynchronizeHealthCheckSearch Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyPublishAndSynchronizeHealthCheckSearch = null)
    {
        if ($spyPublishAndSynchronizeHealthCheckSearch) {
            $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK_SEARCH, $spyPublishAndSynchronizeHealthCheckSearch->getIdPublishAndSynchronizeHealthCheckSearch(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_publish_and_synchronize_health_check_search table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPublishAndSynchronizeHealthCheckSearchTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyPublishAndSynchronizeHealthCheckSearchTableMap::clearInstancePool();
            SpyPublishAndSynchronizeHealthCheckSearchTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    /**
     * Performs a DELETE on the database based on the current ModelCriteria
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
     *                         if supported by native driver or if emulated using Propel.
     * @throws \Propel\Runtime\Exception\PropelException Any exceptions caught during processing will be
     *                         rethrown wrapped into a PropelException.
     */
    public function delete(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPublishAndSynchronizeHealthCheckSearchTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyPublishAndSynchronizeHealthCheckSearchTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyPublishAndSynchronizeHealthCheckSearchTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyPublishAndSynchronizeHealthCheckSearchTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Filter by the latest updated
     *
     * @param int $nbDays Maximum age of the latest update in days
     *
     * @return $this The current query, for fluid interface
     */
    public function recentlyUpdated($nbDays = 7)
    {
        $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by update date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by update date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_CREATED_AT);

        return $this;
    }

    /**
     * Filter by the latest created
     *
     * @param int $nbDays Maximum age of in days
     *
     * @return $this The current query, for fluid interface
     */
    public function recentlyCreated($nbDays = 7)
    {
        $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyPublishAndSynchronizeHealthCheckSearchTableMap::COL_CREATED_AT);

        return $this;
    }

}
