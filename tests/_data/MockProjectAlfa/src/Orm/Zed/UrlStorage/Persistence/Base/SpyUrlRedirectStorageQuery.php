<?php

namespace Orm\Zed\UrlStorage\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\UrlStorage\Persistence\SpyUrlRedirectStorage as ChildSpyUrlRedirectStorage;
use Orm\Zed\UrlStorage\Persistence\SpyUrlRedirectStorageQuery as ChildSpyUrlRedirectStorageQuery;
use Orm\Zed\UrlStorage\Persistence\Map\SpyUrlRedirectStorageTableMap;
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
 * Base class that represents a query for the `spy_url_redirect_storage` table.
 *
 * @method     ChildSpyUrlRedirectStorageQuery orderByIdUrlRedirectStorage($order = Criteria::ASC) Order by the id_url_redirect_storage column
 * @method     ChildSpyUrlRedirectStorageQuery orderByFkUrlRedirect($order = Criteria::ASC) Order by the fk_url_redirect column
 * @method     ChildSpyUrlRedirectStorageQuery orderByData($order = Criteria::ASC) Order by the data column
 * @method     ChildSpyUrlRedirectStorageQuery orderByAliasKeys($order = Criteria::ASC) Order by the alias_keys column
 * @method     ChildSpyUrlRedirectStorageQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method     ChildSpyUrlRedirectStorageQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyUrlRedirectStorageQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyUrlRedirectStorageQuery groupByIdUrlRedirectStorage() Group by the id_url_redirect_storage column
 * @method     ChildSpyUrlRedirectStorageQuery groupByFkUrlRedirect() Group by the fk_url_redirect column
 * @method     ChildSpyUrlRedirectStorageQuery groupByData() Group by the data column
 * @method     ChildSpyUrlRedirectStorageQuery groupByAliasKeys() Group by the alias_keys column
 * @method     ChildSpyUrlRedirectStorageQuery groupByKey() Group by the key column
 * @method     ChildSpyUrlRedirectStorageQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyUrlRedirectStorageQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyUrlRedirectStorageQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyUrlRedirectStorageQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyUrlRedirectStorageQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyUrlRedirectStorageQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyUrlRedirectStorageQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyUrlRedirectStorageQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyUrlRedirectStorage|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyUrlRedirectStorage matching the query
 * @method     ChildSpyUrlRedirectStorage findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyUrlRedirectStorage matching the query, or a new ChildSpyUrlRedirectStorage object populated from the query conditions when no match is found
 *
 * @method     ChildSpyUrlRedirectStorage|null findOneByIdUrlRedirectStorage(string $id_url_redirect_storage) Return the first ChildSpyUrlRedirectStorage filtered by the id_url_redirect_storage column
 * @method     ChildSpyUrlRedirectStorage|null findOneByFkUrlRedirect(int $fk_url_redirect) Return the first ChildSpyUrlRedirectStorage filtered by the fk_url_redirect column
 * @method     ChildSpyUrlRedirectStorage|null findOneByData(string $data) Return the first ChildSpyUrlRedirectStorage filtered by the data column
 * @method     ChildSpyUrlRedirectStorage|null findOneByAliasKeys(string $alias_keys) Return the first ChildSpyUrlRedirectStorage filtered by the alias_keys column
 * @method     ChildSpyUrlRedirectStorage|null findOneByKey(string $key) Return the first ChildSpyUrlRedirectStorage filtered by the key column
 * @method     ChildSpyUrlRedirectStorage|null findOneByCreatedAt(string $created_at) Return the first ChildSpyUrlRedirectStorage filtered by the created_at column
 * @method     ChildSpyUrlRedirectStorage|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyUrlRedirectStorage filtered by the updated_at column
 *
 * @method     ChildSpyUrlRedirectStorage requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyUrlRedirectStorage by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUrlRedirectStorage requireOne(?ConnectionInterface $con = null) Return the first ChildSpyUrlRedirectStorage matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyUrlRedirectStorage requireOneByIdUrlRedirectStorage(string $id_url_redirect_storage) Return the first ChildSpyUrlRedirectStorage filtered by the id_url_redirect_storage column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUrlRedirectStorage requireOneByFkUrlRedirect(int $fk_url_redirect) Return the first ChildSpyUrlRedirectStorage filtered by the fk_url_redirect column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUrlRedirectStorage requireOneByData(string $data) Return the first ChildSpyUrlRedirectStorage filtered by the data column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUrlRedirectStorage requireOneByAliasKeys(string $alias_keys) Return the first ChildSpyUrlRedirectStorage filtered by the alias_keys column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUrlRedirectStorage requireOneByKey(string $key) Return the first ChildSpyUrlRedirectStorage filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUrlRedirectStorage requireOneByCreatedAt(string $created_at) Return the first ChildSpyUrlRedirectStorage filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyUrlRedirectStorage requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyUrlRedirectStorage filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyUrlRedirectStorage[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyUrlRedirectStorage objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyUrlRedirectStorage> find(?ConnectionInterface $con = null) Return ChildSpyUrlRedirectStorage objects based on current ModelCriteria
 *
 * @method     ChildSpyUrlRedirectStorage[]|Collection findByIdUrlRedirectStorage(string|array<string> $id_url_redirect_storage) Return ChildSpyUrlRedirectStorage objects filtered by the id_url_redirect_storage column
 * @psalm-method Collection&\Traversable<ChildSpyUrlRedirectStorage> findByIdUrlRedirectStorage(string|array<string> $id_url_redirect_storage) Return ChildSpyUrlRedirectStorage objects filtered by the id_url_redirect_storage column
 * @method     ChildSpyUrlRedirectStorage[]|Collection findByFkUrlRedirect(int|array<int> $fk_url_redirect) Return ChildSpyUrlRedirectStorage objects filtered by the fk_url_redirect column
 * @psalm-method Collection&\Traversable<ChildSpyUrlRedirectStorage> findByFkUrlRedirect(int|array<int> $fk_url_redirect) Return ChildSpyUrlRedirectStorage objects filtered by the fk_url_redirect column
 * @method     ChildSpyUrlRedirectStorage[]|Collection findByData(string|array<string> $data) Return ChildSpyUrlRedirectStorage objects filtered by the data column
 * @psalm-method Collection&\Traversable<ChildSpyUrlRedirectStorage> findByData(string|array<string> $data) Return ChildSpyUrlRedirectStorage objects filtered by the data column
 * @method     ChildSpyUrlRedirectStorage[]|Collection findByAliasKeys(string|array<string> $alias_keys) Return ChildSpyUrlRedirectStorage objects filtered by the alias_keys column
 * @psalm-method Collection&\Traversable<ChildSpyUrlRedirectStorage> findByAliasKeys(string|array<string> $alias_keys) Return ChildSpyUrlRedirectStorage objects filtered by the alias_keys column
 * @method     ChildSpyUrlRedirectStorage[]|Collection findByKey(string|array<string> $key) Return ChildSpyUrlRedirectStorage objects filtered by the key column
 * @psalm-method Collection&\Traversable<ChildSpyUrlRedirectStorage> findByKey(string|array<string> $key) Return ChildSpyUrlRedirectStorage objects filtered by the key column
 * @method     ChildSpyUrlRedirectStorage[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyUrlRedirectStorage objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyUrlRedirectStorage> findByCreatedAt(string|array<string> $created_at) Return ChildSpyUrlRedirectStorage objects filtered by the created_at column
 * @method     ChildSpyUrlRedirectStorage[]|Collection findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyUrlRedirectStorage objects filtered by the updated_at column
 * @psalm-method Collection&\Traversable<ChildSpyUrlRedirectStorage> findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyUrlRedirectStorage objects filtered by the updated_at column
 *
 * @method     ChildSpyUrlRedirectStorage[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyUrlRedirectStorage> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyUrlRedirectStorageQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\UrlStorage\Persistence\Base\SpyUrlRedirectStorageQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\UrlStorage\\Persistence\\SpyUrlRedirectStorage', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyUrlRedirectStorageQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyUrlRedirectStorageQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyUrlRedirectStorageQuery) {
            return $criteria;
        }
        $query = new ChildSpyUrlRedirectStorageQuery();
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
     * @return ChildSpyUrlRedirectStorage|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyUrlRedirectStorageTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyUrlRedirectStorage A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_url_redirect_storage`, `fk_url_redirect`, `data`, `alias_keys`, `key`, `created_at`, `updated_at` FROM `spy_url_redirect_storage` WHERE `id_url_redirect_storage` = :p0';
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
            /** @var ChildSpyUrlRedirectStorage $obj */
            $obj = new ChildSpyUrlRedirectStorage();
            $obj->hydrate($row);
            SpyUrlRedirectStorageTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyUrlRedirectStorage|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_ID_URL_REDIRECT_STORAGE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_ID_URL_REDIRECT_STORAGE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idUrlRedirectStorage Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdUrlRedirectStorage_Between(array $idUrlRedirectStorage)
    {
        return $this->filterByIdUrlRedirectStorage($idUrlRedirectStorage, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idUrlRedirectStorages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdUrlRedirectStorage_In(array $idUrlRedirectStorages)
    {
        return $this->filterByIdUrlRedirectStorage($idUrlRedirectStorages, Criteria::IN);
    }

    /**
     * Filter the query on the id_url_redirect_storage column
     *
     * Example usage:
     * <code>
     * $query->filterByIdUrlRedirectStorage(1234); // WHERE id_url_redirect_storage = 1234
     * $query->filterByIdUrlRedirectStorage(array(12, 34), Criteria::IN); // WHERE id_url_redirect_storage IN (12, 34)
     * $query->filterByIdUrlRedirectStorage(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_url_redirect_storage > 12
     * </code>
     *
     * @param     mixed $idUrlRedirectStorage The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdUrlRedirectStorage($idUrlRedirectStorage = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idUrlRedirectStorage)) {
            $useMinMax = false;
            if (isset($idUrlRedirectStorage['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_ID_URL_REDIRECT_STORAGE, $idUrlRedirectStorage['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idUrlRedirectStorage['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_ID_URL_REDIRECT_STORAGE, $idUrlRedirectStorage['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idUrlRedirectStorage of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_ID_URL_REDIRECT_STORAGE, $idUrlRedirectStorage, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkUrlRedirect Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkUrlRedirect_Between(array $fkUrlRedirect)
    {
        return $this->filterByFkUrlRedirect($fkUrlRedirect, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkUrlRedirects Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkUrlRedirect_In(array $fkUrlRedirects)
    {
        return $this->filterByFkUrlRedirect($fkUrlRedirects, Criteria::IN);
    }

    /**
     * Filter the query on the fk_url_redirect column
     *
     * Example usage:
     * <code>
     * $query->filterByFkUrlRedirect(1234); // WHERE fk_url_redirect = 1234
     * $query->filterByFkUrlRedirect(array(12, 34), Criteria::IN); // WHERE fk_url_redirect IN (12, 34)
     * $query->filterByFkUrlRedirect(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_url_redirect > 12
     * </code>
     *
     * @param     mixed $fkUrlRedirect The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkUrlRedirect($fkUrlRedirect = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkUrlRedirect)) {
            $useMinMax = false;
            if (isset($fkUrlRedirect['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_FK_URL_REDIRECT, $fkUrlRedirect['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkUrlRedirect['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_FK_URL_REDIRECT, $fkUrlRedirect['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkUrlRedirect of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_FK_URL_REDIRECT, $fkUrlRedirect, $comparison);

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

        $query = $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_DATA, $data, $comparison);

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

        $query = $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_ALIAS_KEYS, $aliasKeys, $comparison);

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

        $query = $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_KEY, $key, $comparison);

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
                $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyUrlRedirectStorage $spyUrlRedirectStorage Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyUrlRedirectStorage = null)
    {
        if ($spyUrlRedirectStorage) {
            $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_ID_URL_REDIRECT_STORAGE, $spyUrlRedirectStorage->getIdUrlRedirectStorage(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_url_redirect_storage table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUrlRedirectStorageTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyUrlRedirectStorageTableMap::clearInstancePool();
            SpyUrlRedirectStorageTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyUrlRedirectStorageTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyUrlRedirectStorageTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyUrlRedirectStorageTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyUrlRedirectStorageTableMap::clearRelatedInstancePool();

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
        $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by update date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyUrlRedirectStorageTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by update date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyUrlRedirectStorageTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyUrlRedirectStorageTableMap::COL_CREATED_AT);

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
        $this->addUsingAlias(SpyUrlRedirectStorageTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyUrlRedirectStorageTableMap::COL_CREATED_AT);

        return $this;
    }

}
