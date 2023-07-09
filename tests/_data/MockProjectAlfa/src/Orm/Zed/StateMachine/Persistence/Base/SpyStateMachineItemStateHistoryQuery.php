<?php

namespace Orm\Zed\StateMachine\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistory as ChildSpyStateMachineItemStateHistory;
use Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateHistoryQuery as ChildSpyStateMachineItemStateHistoryQuery;
use Orm\Zed\StateMachine\Persistence\Map\SpyStateMachineItemStateHistoryTableMap;
use Propel\Runtime\Propel;
use Propel\Runtime\ActiveQuery\Criteria;
use Propel\Runtime\ActiveQuery\ModelCriteria;
use Propel\Runtime\ActiveQuery\ModelJoin;
use Propel\Runtime\Collection\Collection;
use Propel\Runtime\Collection\ObjectCollection;
use Propel\Runtime\Connection\ConnectionInterface;
use Propel\Runtime\Exception\PropelException;
use Spryker\Zed\PropelOrm\Business\Model\Formatter\TypeAwareSimpleArrayFormatter;
use Spryker\Zed\PropelOrm\Business\Runtime\ActiveQuery\Criteria as SprykerCriteria;
use Spryker\Zed\PropelReplicationCache\Business\PropelReplicationCacheFacade;
use Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException;

/**
 * Base class that represents a query for the `spy_state_machine_item_state_history` table.
 *
 * @method     ChildSpyStateMachineItemStateHistoryQuery orderByIdStateMachineItemStateHistory($order = Criteria::ASC) Order by the id_state_machine_item_state_history column
 * @method     ChildSpyStateMachineItemStateHistoryQuery orderByFkStateMachineItemState($order = Criteria::ASC) Order by the fk_state_machine_item_state column
 * @method     ChildSpyStateMachineItemStateHistoryQuery orderByIdentifier($order = Criteria::ASC) Order by the identifier column
 * @method     ChildSpyStateMachineItemStateHistoryQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 *
 * @method     ChildSpyStateMachineItemStateHistoryQuery groupByIdStateMachineItemStateHistory() Group by the id_state_machine_item_state_history column
 * @method     ChildSpyStateMachineItemStateHistoryQuery groupByFkStateMachineItemState() Group by the fk_state_machine_item_state column
 * @method     ChildSpyStateMachineItemStateHistoryQuery groupByIdentifier() Group by the identifier column
 * @method     ChildSpyStateMachineItemStateHistoryQuery groupByCreatedAt() Group by the created_at column
 *
 * @method     ChildSpyStateMachineItemStateHistoryQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyStateMachineItemStateHistoryQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyStateMachineItemStateHistoryQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyStateMachineItemStateHistoryQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyStateMachineItemStateHistoryQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyStateMachineItemStateHistoryQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyStateMachineItemStateHistoryQuery leftJoinState($relationAlias = null) Adds a LEFT JOIN clause to the query using the State relation
 * @method     ChildSpyStateMachineItemStateHistoryQuery rightJoinState($relationAlias = null) Adds a RIGHT JOIN clause to the query using the State relation
 * @method     ChildSpyStateMachineItemStateHistoryQuery innerJoinState($relationAlias = null) Adds a INNER JOIN clause to the query using the State relation
 *
 * @method     ChildSpyStateMachineItemStateHistoryQuery joinWithState($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the State relation
 *
 * @method     ChildSpyStateMachineItemStateHistoryQuery leftJoinWithState() Adds a LEFT JOIN clause and with to the query using the State relation
 * @method     ChildSpyStateMachineItemStateHistoryQuery rightJoinWithState() Adds a RIGHT JOIN clause and with to the query using the State relation
 * @method     ChildSpyStateMachineItemStateHistoryQuery innerJoinWithState() Adds a INNER JOIN clause and with to the query using the State relation
 *
 * @method     \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyStateMachineItemStateHistory|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyStateMachineItemStateHistory matching the query
 * @method     ChildSpyStateMachineItemStateHistory findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyStateMachineItemStateHistory matching the query, or a new ChildSpyStateMachineItemStateHistory object populated from the query conditions when no match is found
 *
 * @method     ChildSpyStateMachineItemStateHistory|null findOneByIdStateMachineItemStateHistory(int $id_state_machine_item_state_history) Return the first ChildSpyStateMachineItemStateHistory filtered by the id_state_machine_item_state_history column
 * @method     ChildSpyStateMachineItemStateHistory|null findOneByFkStateMachineItemState(int $fk_state_machine_item_state) Return the first ChildSpyStateMachineItemStateHistory filtered by the fk_state_machine_item_state column
 * @method     ChildSpyStateMachineItemStateHistory|null findOneByIdentifier(int $identifier) Return the first ChildSpyStateMachineItemStateHistory filtered by the identifier column
 * @method     ChildSpyStateMachineItemStateHistory|null findOneByCreatedAt(string $created_at) Return the first ChildSpyStateMachineItemStateHistory filtered by the created_at column
 *
 * @method     ChildSpyStateMachineItemStateHistory requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyStateMachineItemStateHistory by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStateMachineItemStateHistory requireOne(?ConnectionInterface $con = null) Return the first ChildSpyStateMachineItemStateHistory matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyStateMachineItemStateHistory requireOneByIdStateMachineItemStateHistory(int $id_state_machine_item_state_history) Return the first ChildSpyStateMachineItemStateHistory filtered by the id_state_machine_item_state_history column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStateMachineItemStateHistory requireOneByFkStateMachineItemState(int $fk_state_machine_item_state) Return the first ChildSpyStateMachineItemStateHistory filtered by the fk_state_machine_item_state column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStateMachineItemStateHistory requireOneByIdentifier(int $identifier) Return the first ChildSpyStateMachineItemStateHistory filtered by the identifier column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyStateMachineItemStateHistory requireOneByCreatedAt(string $created_at) Return the first ChildSpyStateMachineItemStateHistory filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyStateMachineItemStateHistory[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyStateMachineItemStateHistory objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyStateMachineItemStateHistory> find(?ConnectionInterface $con = null) Return ChildSpyStateMachineItemStateHistory objects based on current ModelCriteria
 *
 * @method     ChildSpyStateMachineItemStateHistory[]|Collection findByIdStateMachineItemStateHistory(int|array<int> $id_state_machine_item_state_history) Return ChildSpyStateMachineItemStateHistory objects filtered by the id_state_machine_item_state_history column
 * @psalm-method Collection&\Traversable<ChildSpyStateMachineItemStateHistory> findByIdStateMachineItemStateHistory(int|array<int> $id_state_machine_item_state_history) Return ChildSpyStateMachineItemStateHistory objects filtered by the id_state_machine_item_state_history column
 * @method     ChildSpyStateMachineItemStateHistory[]|Collection findByFkStateMachineItemState(int|array<int> $fk_state_machine_item_state) Return ChildSpyStateMachineItemStateHistory objects filtered by the fk_state_machine_item_state column
 * @psalm-method Collection&\Traversable<ChildSpyStateMachineItemStateHistory> findByFkStateMachineItemState(int|array<int> $fk_state_machine_item_state) Return ChildSpyStateMachineItemStateHistory objects filtered by the fk_state_machine_item_state column
 * @method     ChildSpyStateMachineItemStateHistory[]|Collection findByIdentifier(int|array<int> $identifier) Return ChildSpyStateMachineItemStateHistory objects filtered by the identifier column
 * @psalm-method Collection&\Traversable<ChildSpyStateMachineItemStateHistory> findByIdentifier(int|array<int> $identifier) Return ChildSpyStateMachineItemStateHistory objects filtered by the identifier column
 * @method     ChildSpyStateMachineItemStateHistory[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyStateMachineItemStateHistory objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyStateMachineItemStateHistory> findByCreatedAt(string|array<string> $created_at) Return ChildSpyStateMachineItemStateHistory objects filtered by the created_at column
 *
 * @method     ChildSpyStateMachineItemStateHistory[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyStateMachineItemStateHistory> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyStateMachineItemStateHistoryQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\StateMachine\Persistence\Base\SpyStateMachineItemStateHistoryQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\StateMachine\\Persistence\\SpyStateMachineItemStateHistory', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyStateMachineItemStateHistoryQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyStateMachineItemStateHistoryQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyStateMachineItemStateHistoryQuery) {
            return $criteria;
        }
        $query = new ChildSpyStateMachineItemStateHistoryQuery();
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
     * @return ChildSpyStateMachineItemStateHistory|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyStateMachineItemStateHistoryTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyStateMachineItemStateHistory A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_state_machine_item_state_history`, `fk_state_machine_item_state`, `identifier`, `created_at` FROM `spy_state_machine_item_state_history` WHERE `id_state_machine_item_state_history` = :p0';
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
            /** @var ChildSpyStateMachineItemStateHistory $obj */
            $obj = new ChildSpyStateMachineItemStateHistory();
            $obj->hydrate($row);
            SpyStateMachineItemStateHistoryTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyStateMachineItemStateHistory|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_ID_STATE_MACHINE_ITEM_STATE_HISTORY, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_ID_STATE_MACHINE_ITEM_STATE_HISTORY, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idStateMachineItemStateHistory Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdStateMachineItemStateHistory_Between(array $idStateMachineItemStateHistory)
    {
        return $this->filterByIdStateMachineItemStateHistory($idStateMachineItemStateHistory, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idStateMachineItemStateHistorys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdStateMachineItemStateHistory_In(array $idStateMachineItemStateHistorys)
    {
        return $this->filterByIdStateMachineItemStateHistory($idStateMachineItemStateHistorys, Criteria::IN);
    }

    /**
     * Filter the query on the id_state_machine_item_state_history column
     *
     * Example usage:
     * <code>
     * $query->filterByIdStateMachineItemStateHistory(1234); // WHERE id_state_machine_item_state_history = 1234
     * $query->filterByIdStateMachineItemStateHistory(array(12, 34), Criteria::IN); // WHERE id_state_machine_item_state_history IN (12, 34)
     * $query->filterByIdStateMachineItemStateHistory(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_state_machine_item_state_history > 12
     * </code>
     *
     * @param     mixed $idStateMachineItemStateHistory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdStateMachineItemStateHistory($idStateMachineItemStateHistory = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idStateMachineItemStateHistory)) {
            $useMinMax = false;
            if (isset($idStateMachineItemStateHistory['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_ID_STATE_MACHINE_ITEM_STATE_HISTORY, $idStateMachineItemStateHistory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idStateMachineItemStateHistory['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_ID_STATE_MACHINE_ITEM_STATE_HISTORY, $idStateMachineItemStateHistory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idStateMachineItemStateHistory of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_ID_STATE_MACHINE_ITEM_STATE_HISTORY, $idStateMachineItemStateHistory, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkStateMachineItemState Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStateMachineItemState_Between(array $fkStateMachineItemState)
    {
        return $this->filterByFkStateMachineItemState($fkStateMachineItemState, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkStateMachineItemStates Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStateMachineItemState_In(array $fkStateMachineItemStates)
    {
        return $this->filterByFkStateMachineItemState($fkStateMachineItemStates, Criteria::IN);
    }

    /**
     * Filter the query on the fk_state_machine_item_state column
     *
     * Example usage:
     * <code>
     * $query->filterByFkStateMachineItemState(1234); // WHERE fk_state_machine_item_state = 1234
     * $query->filterByFkStateMachineItemState(array(12, 34), Criteria::IN); // WHERE fk_state_machine_item_state IN (12, 34)
     * $query->filterByFkStateMachineItemState(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_state_machine_item_state > 12
     * </code>
     *
     * @see       filterByState()
     *
     * @param     mixed $fkStateMachineItemState The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkStateMachineItemState($fkStateMachineItemState = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkStateMachineItemState)) {
            $useMinMax = false;
            if (isset($fkStateMachineItemState['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_FK_STATE_MACHINE_ITEM_STATE, $fkStateMachineItemState['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkStateMachineItemState['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_FK_STATE_MACHINE_ITEM_STATE, $fkStateMachineItemState['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkStateMachineItemState of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_FK_STATE_MACHINE_ITEM_STATE, $fkStateMachineItemState, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $identifier Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdentifier_Between(array $identifier)
    {
        return $this->filterByIdentifier($identifier, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $identifiers Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdentifier_In(array $identifiers)
    {
        return $this->filterByIdentifier($identifiers, Criteria::IN);
    }

    /**
     * Filter the query on the identifier column
     *
     * Example usage:
     * <code>
     * $query->filterByIdentifier(1234); // WHERE identifier = 1234
     * $query->filterByIdentifier(array(12, 34), Criteria::IN); // WHERE identifier IN (12, 34)
     * $query->filterByIdentifier(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE identifier > 12
     * </code>
     *
     * @param     mixed $identifier The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdentifier($identifier = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($identifier)) {
            $useMinMax = false;
            if (isset($identifier['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_IDENTIFIER, $identifier['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($identifier['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_IDENTIFIER, $identifier['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$identifier of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_IDENTIFIER, $identifier, $comparison);

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
                $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_CREATED_AT, $createdAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemState object
     *
     * @param \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemState|ObjectCollection $spyStateMachineItemState The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByState($spyStateMachineItemState, ?string $comparison = null)
    {
        if ($spyStateMachineItemState instanceof \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemState) {
            return $this
                ->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_FK_STATE_MACHINE_ITEM_STATE, $spyStateMachineItemState->getIdStateMachineItemState(), $comparison);
        } elseif ($spyStateMachineItemState instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_FK_STATE_MACHINE_ITEM_STATE, $spyStateMachineItemState->toKeyValue('PrimaryKey', 'IdStateMachineItemState'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByState() only accepts arguments of type \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemState or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the State relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinState(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('State');

        // create a ModelJoin object for this join
        $join = new ModelJoin();
        $join->setJoinType($joinType);
        $join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
        if ($previousJoin = $this->getPreviousJoin()) {
            $join->setPreviousJoin($previousJoin);
        }

        // add the ModelJoin to the current object
        if ($relationAlias) {
            $this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
            $this->addJoinObject($join, $relationAlias);
        } else {
            $this->addJoinObject($join, 'State');
        }

        return $this;
    }

    /**
     * Use the State relation SpyStateMachineItemState object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery A secondary query class using the current class as primary query
     */
    public function useStateQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinState($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'State', '\Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery');
    }

    /**
     * Use the State relation SpyStateMachineItemState object
     *
     * @param callable(\Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery):\Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withStateQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useStateQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the State relation to the SpyStateMachineItemState table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery The inner query object of the EXISTS statement
     */
    public function useStateExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery */
        $q = $this->useExistsQuery('State', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the State relation to the SpyStateMachineItemState table for a NOT EXISTS query.
     *
     * @see useStateExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery The inner query object of the NOT EXISTS statement
     */
    public function useStateNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery */
        $q = $this->useExistsQuery('State', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the State relation to the SpyStateMachineItemState table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery The inner query object of the IN statement
     */
    public function useInStateQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery */
        $q = $this->useInQuery('State', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the State relation to the SpyStateMachineItemState table for a NOT IN query.
     *
     * @see useStateInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery The inner query object of the NOT IN statement
     */
    public function useNotInStateQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\StateMachine\Persistence\SpyStateMachineItemStateQuery */
        $q = $this->useInQuery('State', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyStateMachineItemStateHistory $spyStateMachineItemStateHistory Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyStateMachineItemStateHistory = null)
    {
        if ($spyStateMachineItemStateHistory) {
            $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_ID_STATE_MACHINE_ITEM_STATE_HISTORY, $spyStateMachineItemStateHistory->getIdStateMachineItemStateHistory(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_state_machine_item_state_history table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStateMachineItemStateHistoryTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyStateMachineItemStateHistoryTableMap::clearInstancePool();
            SpyStateMachineItemStateHistoryTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyStateMachineItemStateHistoryTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyStateMachineItemStateHistoryTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyStateMachineItemStateHistoryTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyStateMachineItemStateHistoryTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // timestampable behavior

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyStateMachineItemStateHistoryTableMap::COL_CREATED_AT);

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
        $this->addUsingAlias(SpyStateMachineItemStateHistoryTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyStateMachineItemStateHistoryTableMap::COL_CREATED_AT);

        return $this;
    }

}
