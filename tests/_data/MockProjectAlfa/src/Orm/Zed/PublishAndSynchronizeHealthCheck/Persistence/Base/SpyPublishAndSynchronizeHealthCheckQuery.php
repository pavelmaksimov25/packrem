<?php

namespace Orm\Zed\PublishAndSynchronizeHealthCheck\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\PublishAndSynchronizeHealthCheck\Persistence\SpyPublishAndSynchronizeHealthCheck as ChildSpyPublishAndSynchronizeHealthCheck;
use Orm\Zed\PublishAndSynchronizeHealthCheck\Persistence\SpyPublishAndSynchronizeHealthCheckQuery as ChildSpyPublishAndSynchronizeHealthCheckQuery;
use Orm\Zed\PublishAndSynchronizeHealthCheck\Persistence\Map\SpyPublishAndSynchronizeHealthCheckTableMap;
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
 * Base class that represents a query for the `spy_publish_and_synchronize_health_check` table.
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery orderByIdPublishAndSynchronizeHealthCheck($order = Criteria::ASC) Order by the id_publish_and_synchronize_health_check column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery orderByHealthCheckKey($order = Criteria::ASC) Order by the health_check_key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery orderByHealthCheckData($order = Criteria::ASC) Order by the health_check_data column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery groupByIdPublishAndSynchronizeHealthCheck() Group by the id_publish_and_synchronize_health_check column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery groupByHealthCheckKey() Group by the health_check_key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery groupByHealthCheckData() Group by the health_check_data column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyPublishAndSynchronizeHealthCheckQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheck|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyPublishAndSynchronizeHealthCheck matching the query
 * @method     ChildSpyPublishAndSynchronizeHealthCheck findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyPublishAndSynchronizeHealthCheck matching the query, or a new ChildSpyPublishAndSynchronizeHealthCheck object populated from the query conditions when no match is found
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheck|null findOneByIdPublishAndSynchronizeHealthCheck(int $id_publish_and_synchronize_health_check) Return the first ChildSpyPublishAndSynchronizeHealthCheck filtered by the id_publish_and_synchronize_health_check column
 * @method     ChildSpyPublishAndSynchronizeHealthCheck|null findOneByHealthCheckKey(string $health_check_key) Return the first ChildSpyPublishAndSynchronizeHealthCheck filtered by the health_check_key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheck|null findOneByHealthCheckData(string $health_check_data) Return the first ChildSpyPublishAndSynchronizeHealthCheck filtered by the health_check_data column
 * @method     ChildSpyPublishAndSynchronizeHealthCheck|null findOneByCreatedAt(string $created_at) Return the first ChildSpyPublishAndSynchronizeHealthCheck filtered by the created_at column
 * @method     ChildSpyPublishAndSynchronizeHealthCheck|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyPublishAndSynchronizeHealthCheck filtered by the updated_at column
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheck requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyPublishAndSynchronizeHealthCheck by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheck requireOne(?ConnectionInterface $con = null) Return the first ChildSpyPublishAndSynchronizeHealthCheck matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheck requireOneByIdPublishAndSynchronizeHealthCheck(int $id_publish_and_synchronize_health_check) Return the first ChildSpyPublishAndSynchronizeHealthCheck filtered by the id_publish_and_synchronize_health_check column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheck requireOneByHealthCheckKey(string $health_check_key) Return the first ChildSpyPublishAndSynchronizeHealthCheck filtered by the health_check_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheck requireOneByHealthCheckData(string $health_check_data) Return the first ChildSpyPublishAndSynchronizeHealthCheck filtered by the health_check_data column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheck requireOneByCreatedAt(string $created_at) Return the first ChildSpyPublishAndSynchronizeHealthCheck filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyPublishAndSynchronizeHealthCheck requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyPublishAndSynchronizeHealthCheck filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheck[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyPublishAndSynchronizeHealthCheck objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheck> find(?ConnectionInterface $con = null) Return ChildSpyPublishAndSynchronizeHealthCheck objects based on current ModelCriteria
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheck[]|Collection findByIdPublishAndSynchronizeHealthCheck(int|array<int> $id_publish_and_synchronize_health_check) Return ChildSpyPublishAndSynchronizeHealthCheck objects filtered by the id_publish_and_synchronize_health_check column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheck> findByIdPublishAndSynchronizeHealthCheck(int|array<int> $id_publish_and_synchronize_health_check) Return ChildSpyPublishAndSynchronizeHealthCheck objects filtered by the id_publish_and_synchronize_health_check column
 * @method     ChildSpyPublishAndSynchronizeHealthCheck[]|Collection findByHealthCheckKey(string|array<string> $health_check_key) Return ChildSpyPublishAndSynchronizeHealthCheck objects filtered by the health_check_key column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheck> findByHealthCheckKey(string|array<string> $health_check_key) Return ChildSpyPublishAndSynchronizeHealthCheck objects filtered by the health_check_key column
 * @method     ChildSpyPublishAndSynchronizeHealthCheck[]|Collection findByHealthCheckData(string|array<string> $health_check_data) Return ChildSpyPublishAndSynchronizeHealthCheck objects filtered by the health_check_data column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheck> findByHealthCheckData(string|array<string> $health_check_data) Return ChildSpyPublishAndSynchronizeHealthCheck objects filtered by the health_check_data column
 * @method     ChildSpyPublishAndSynchronizeHealthCheck[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyPublishAndSynchronizeHealthCheck objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheck> findByCreatedAt(string|array<string> $created_at) Return ChildSpyPublishAndSynchronizeHealthCheck objects filtered by the created_at column
 * @method     ChildSpyPublishAndSynchronizeHealthCheck[]|Collection findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyPublishAndSynchronizeHealthCheck objects filtered by the updated_at column
 * @psalm-method Collection&\Traversable<ChildSpyPublishAndSynchronizeHealthCheck> findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyPublishAndSynchronizeHealthCheck objects filtered by the updated_at column
 *
 * @method     ChildSpyPublishAndSynchronizeHealthCheck[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyPublishAndSynchronizeHealthCheck> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyPublishAndSynchronizeHealthCheckQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\PublishAndSynchronizeHealthCheck\Persistence\Base\SpyPublishAndSynchronizeHealthCheckQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\PublishAndSynchronizeHealthCheck\\Persistence\\SpyPublishAndSynchronizeHealthCheck', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyPublishAndSynchronizeHealthCheckQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyPublishAndSynchronizeHealthCheckQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyPublishAndSynchronizeHealthCheckQuery) {
            return $criteria;
        }
        $query = new ChildSpyPublishAndSynchronizeHealthCheckQuery();
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
     * @return ChildSpyPublishAndSynchronizeHealthCheck|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyPublishAndSynchronizeHealthCheckTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyPublishAndSynchronizeHealthCheck A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_publish_and_synchronize_health_check, health_check_key, health_check_data, created_at, updated_at FROM spy_publish_and_synchronize_health_check WHERE id_publish_and_synchronize_health_check = :p0';
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
            /** @var ChildSpyPublishAndSynchronizeHealthCheck $obj */
            $obj = new ChildSpyPublishAndSynchronizeHealthCheck();
            $obj->hydrate($row);
            SpyPublishAndSynchronizeHealthCheckTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyPublishAndSynchronizeHealthCheck|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idPublishAndSynchronizeHealthCheck Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPublishAndSynchronizeHealthCheck_Between(array $idPublishAndSynchronizeHealthCheck)
    {
        return $this->filterByIdPublishAndSynchronizeHealthCheck($idPublishAndSynchronizeHealthCheck, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idPublishAndSynchronizeHealthChecks Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdPublishAndSynchronizeHealthCheck_In(array $idPublishAndSynchronizeHealthChecks)
    {
        return $this->filterByIdPublishAndSynchronizeHealthCheck($idPublishAndSynchronizeHealthChecks, Criteria::IN);
    }

    /**
     * Filter the query on the id_publish_and_synchronize_health_check column
     *
     * Example usage:
     * <code>
     * $query->filterByIdPublishAndSynchronizeHealthCheck(1234); // WHERE id_publish_and_synchronize_health_check = 1234
     * $query->filterByIdPublishAndSynchronizeHealthCheck(array(12, 34), Criteria::IN); // WHERE id_publish_and_synchronize_health_check IN (12, 34)
     * $query->filterByIdPublishAndSynchronizeHealthCheck(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_publish_and_synchronize_health_check > 12
     * </code>
     *
     * @param     mixed $idPublishAndSynchronizeHealthCheck The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdPublishAndSynchronizeHealthCheck($idPublishAndSynchronizeHealthCheck = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idPublishAndSynchronizeHealthCheck)) {
            $useMinMax = false;
            if (isset($idPublishAndSynchronizeHealthCheck['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK, $idPublishAndSynchronizeHealthCheck['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idPublishAndSynchronizeHealthCheck['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK, $idPublishAndSynchronizeHealthCheck['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idPublishAndSynchronizeHealthCheck of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK, $idPublishAndSynchronizeHealthCheck, $comparison);

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

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_HEALTH_CHECK_KEY, $healthCheckKey, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $healthCheckDatas Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByHealthCheckData_In(array $healthCheckDatas)
    {
        return $this->filterByHealthCheckData($healthCheckDatas, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $healthCheckData Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByHealthCheckData_Like($healthCheckData)
    {
        return $this->filterByHealthCheckData($healthCheckData, Criteria::LIKE);
    }

    /**
     * Filter the query on the health_check_data column
     *
     * Example usage:
     * <code>
     * $query->filterByHealthCheckData('fooValue');   // WHERE health_check_data = 'fooValue'
     * $query->filterByHealthCheckData('%fooValue%', Criteria::LIKE); // WHERE health_check_data LIKE '%fooValue%'
     * $query->filterByHealthCheckData([1, 'foo'], Criteria::IN); // WHERE health_check_data IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $healthCheckData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByHealthCheckData($healthCheckData = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $healthCheckData = str_replace('*', '%', $healthCheckData);
        }

        if (is_array($healthCheckData) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$healthCheckData of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_HEALTH_CHECK_DATA, $healthCheckData, $comparison);

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
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyPublishAndSynchronizeHealthCheck $spyPublishAndSynchronizeHealthCheck Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyPublishAndSynchronizeHealthCheck = null)
    {
        if ($spyPublishAndSynchronizeHealthCheck) {
            $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_ID_PUBLISH_AND_SYNCHRONIZE_HEALTH_CHECK, $spyPublishAndSynchronizeHealthCheck->getIdPublishAndSynchronizeHealthCheck(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_publish_and_synchronize_health_check table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPublishAndSynchronizeHealthCheckTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyPublishAndSynchronizeHealthCheckTableMap::clearInstancePool();
            SpyPublishAndSynchronizeHealthCheckTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyPublishAndSynchronizeHealthCheckTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyPublishAndSynchronizeHealthCheckTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyPublishAndSynchronizeHealthCheckTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyPublishAndSynchronizeHealthCheckTableMap::clearRelatedInstancePool();

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
        $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by update date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyPublishAndSynchronizeHealthCheckTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by update date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyPublishAndSynchronizeHealthCheckTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyPublishAndSynchronizeHealthCheckTableMap::COL_CREATED_AT);

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
        $this->addUsingAlias(SpyPublishAndSynchronizeHealthCheckTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyPublishAndSynchronizeHealthCheckTableMap::COL_CREATED_AT);

        return $this;
    }

}
