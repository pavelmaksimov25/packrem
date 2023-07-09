<?php

namespace Orm\Zed\Sales\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Sales\Persistence\SpySalesOrderNote as ChildSpySalesOrderNote;
use Orm\Zed\Sales\Persistence\SpySalesOrderNoteQuery as ChildSpySalesOrderNoteQuery;
use Orm\Zed\Sales\Persistence\Map\SpySalesOrderNoteTableMap;
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
 * Base class that represents a query for the `spy_sales_order_note` table.
 *
 * @method     ChildSpySalesOrderNoteQuery orderByIdSalesOrderNote($order = Criteria::ASC) Order by the id_sales_order_note column
 * @method     ChildSpySalesOrderNoteQuery orderByFkSalesOrder($order = Criteria::ASC) Order by the fk_sales_order column
 * @method     ChildSpySalesOrderNoteQuery orderByCommand($order = Criteria::ASC) Order by the command column
 * @method     ChildSpySalesOrderNoteQuery orderByMessage($order = Criteria::ASC) Order by the message column
 * @method     ChildSpySalesOrderNoteQuery orderBySuccess($order = Criteria::ASC) Order by the success column
 * @method     ChildSpySalesOrderNoteQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpySalesOrderNoteQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpySalesOrderNoteQuery groupByIdSalesOrderNote() Group by the id_sales_order_note column
 * @method     ChildSpySalesOrderNoteQuery groupByFkSalesOrder() Group by the fk_sales_order column
 * @method     ChildSpySalesOrderNoteQuery groupByCommand() Group by the command column
 * @method     ChildSpySalesOrderNoteQuery groupByMessage() Group by the message column
 * @method     ChildSpySalesOrderNoteQuery groupBySuccess() Group by the success column
 * @method     ChildSpySalesOrderNoteQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpySalesOrderNoteQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpySalesOrderNoteQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpySalesOrderNoteQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpySalesOrderNoteQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpySalesOrderNoteQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpySalesOrderNoteQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpySalesOrderNoteQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpySalesOrderNoteQuery leftJoinOrder($relationAlias = null) Adds a LEFT JOIN clause to the query using the Order relation
 * @method     ChildSpySalesOrderNoteQuery rightJoinOrder($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Order relation
 * @method     ChildSpySalesOrderNoteQuery innerJoinOrder($relationAlias = null) Adds a INNER JOIN clause to the query using the Order relation
 *
 * @method     ChildSpySalesOrderNoteQuery joinWithOrder($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Order relation
 *
 * @method     ChildSpySalesOrderNoteQuery leftJoinWithOrder() Adds a LEFT JOIN clause and with to the query using the Order relation
 * @method     ChildSpySalesOrderNoteQuery rightJoinWithOrder() Adds a RIGHT JOIN clause and with to the query using the Order relation
 * @method     ChildSpySalesOrderNoteQuery innerJoinWithOrder() Adds a INNER JOIN clause and with to the query using the Order relation
 *
 * @method     \Orm\Zed\Sales\Persistence\SpySalesOrderQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpySalesOrderNote|null findOne(?ConnectionInterface $con = null) Return the first ChildSpySalesOrderNote matching the query
 * @method     ChildSpySalesOrderNote findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpySalesOrderNote matching the query, or a new ChildSpySalesOrderNote object populated from the query conditions when no match is found
 *
 * @method     ChildSpySalesOrderNote|null findOneByIdSalesOrderNote(int $id_sales_order_note) Return the first ChildSpySalesOrderNote filtered by the id_sales_order_note column
 * @method     ChildSpySalesOrderNote|null findOneByFkSalesOrder(int $fk_sales_order) Return the first ChildSpySalesOrderNote filtered by the fk_sales_order column
 * @method     ChildSpySalesOrderNote|null findOneByCommand(string $command) Return the first ChildSpySalesOrderNote filtered by the command column
 * @method     ChildSpySalesOrderNote|null findOneByMessage(string $message) Return the first ChildSpySalesOrderNote filtered by the message column
 * @method     ChildSpySalesOrderNote|null findOneBySuccess(boolean $success) Return the first ChildSpySalesOrderNote filtered by the success column
 * @method     ChildSpySalesOrderNote|null findOneByCreatedAt(string $created_at) Return the first ChildSpySalesOrderNote filtered by the created_at column
 * @method     ChildSpySalesOrderNote|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpySalesOrderNote filtered by the updated_at column
 *
 * @method     ChildSpySalesOrderNote requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpySalesOrderNote by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderNote requireOne(?ConnectionInterface $con = null) Return the first ChildSpySalesOrderNote matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesOrderNote requireOneByIdSalesOrderNote(int $id_sales_order_note) Return the first ChildSpySalesOrderNote filtered by the id_sales_order_note column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderNote requireOneByFkSalesOrder(int $fk_sales_order) Return the first ChildSpySalesOrderNote filtered by the fk_sales_order column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderNote requireOneByCommand(string $command) Return the first ChildSpySalesOrderNote filtered by the command column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderNote requireOneByMessage(string $message) Return the first ChildSpySalesOrderNote filtered by the message column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderNote requireOneBySuccess(boolean $success) Return the first ChildSpySalesOrderNote filtered by the success column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderNote requireOneByCreatedAt(string $created_at) Return the first ChildSpySalesOrderNote filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpySalesOrderNote requireOneByUpdatedAt(string $updated_at) Return the first ChildSpySalesOrderNote filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpySalesOrderNote[]|Collection find(?ConnectionInterface $con = null) Return ChildSpySalesOrderNote objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderNote> find(?ConnectionInterface $con = null) Return ChildSpySalesOrderNote objects based on current ModelCriteria
 *
 * @method     ChildSpySalesOrderNote[]|Collection findByIdSalesOrderNote(int|array<int> $id_sales_order_note) Return ChildSpySalesOrderNote objects filtered by the id_sales_order_note column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderNote> findByIdSalesOrderNote(int|array<int> $id_sales_order_note) Return ChildSpySalesOrderNote objects filtered by the id_sales_order_note column
 * @method     ChildSpySalesOrderNote[]|Collection findByFkSalesOrder(int|array<int> $fk_sales_order) Return ChildSpySalesOrderNote objects filtered by the fk_sales_order column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderNote> findByFkSalesOrder(int|array<int> $fk_sales_order) Return ChildSpySalesOrderNote objects filtered by the fk_sales_order column
 * @method     ChildSpySalesOrderNote[]|Collection findByCommand(string|array<string> $command) Return ChildSpySalesOrderNote objects filtered by the command column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderNote> findByCommand(string|array<string> $command) Return ChildSpySalesOrderNote objects filtered by the command column
 * @method     ChildSpySalesOrderNote[]|Collection findByMessage(string|array<string> $message) Return ChildSpySalesOrderNote objects filtered by the message column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderNote> findByMessage(string|array<string> $message) Return ChildSpySalesOrderNote objects filtered by the message column
 * @method     ChildSpySalesOrderNote[]|Collection findBySuccess(boolean|array<boolean> $success) Return ChildSpySalesOrderNote objects filtered by the success column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderNote> findBySuccess(boolean|array<boolean> $success) Return ChildSpySalesOrderNote objects filtered by the success column
 * @method     ChildSpySalesOrderNote[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpySalesOrderNote objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderNote> findByCreatedAt(string|array<string> $created_at) Return ChildSpySalesOrderNote objects filtered by the created_at column
 * @method     ChildSpySalesOrderNote[]|Collection findByUpdatedAt(string|array<string> $updated_at) Return ChildSpySalesOrderNote objects filtered by the updated_at column
 * @psalm-method Collection&\Traversable<ChildSpySalesOrderNote> findByUpdatedAt(string|array<string> $updated_at) Return ChildSpySalesOrderNote objects filtered by the updated_at column
 *
 * @method     ChildSpySalesOrderNote[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpySalesOrderNote> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpySalesOrderNoteQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Sales\Persistence\Base\SpySalesOrderNoteQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Sales\\Persistence\\SpySalesOrderNote', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpySalesOrderNoteQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpySalesOrderNoteQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpySalesOrderNoteQuery) {
            return $criteria;
        }
        $query = new ChildSpySalesOrderNoteQuery();
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
     * @return ChildSpySalesOrderNote|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpySalesOrderNoteTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpySalesOrderNote A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_sales_order_note, fk_sales_order, command, message, success, created_at, updated_at FROM spy_sales_order_note WHERE id_sales_order_note = :p0';
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
            /** @var ChildSpySalesOrderNote $obj */
            $obj = new ChildSpySalesOrderNote();
            $obj->hydrate($row);
            SpySalesOrderNoteTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpySalesOrderNote|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_ID_SALES_ORDER_NOTE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_ID_SALES_ORDER_NOTE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idSalesOrderNote Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesOrderNote_Between(array $idSalesOrderNote)
    {
        return $this->filterByIdSalesOrderNote($idSalesOrderNote, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idSalesOrderNotes Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdSalesOrderNote_In(array $idSalesOrderNotes)
    {
        return $this->filterByIdSalesOrderNote($idSalesOrderNotes, Criteria::IN);
    }

    /**
     * Filter the query on the id_sales_order_note column
     *
     * Example usage:
     * <code>
     * $query->filterByIdSalesOrderNote(1234); // WHERE id_sales_order_note = 1234
     * $query->filterByIdSalesOrderNote(array(12, 34), Criteria::IN); // WHERE id_sales_order_note IN (12, 34)
     * $query->filterByIdSalesOrderNote(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_sales_order_note > 12
     * </code>
     *
     * @param     mixed $idSalesOrderNote The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdSalesOrderNote($idSalesOrderNote = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idSalesOrderNote)) {
            $useMinMax = false;
            if (isset($idSalesOrderNote['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_ID_SALES_ORDER_NOTE, $idSalesOrderNote['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idSalesOrderNote['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_ID_SALES_ORDER_NOTE, $idSalesOrderNote['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idSalesOrderNote of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_ID_SALES_ORDER_NOTE, $idSalesOrderNote, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkSalesOrder Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrder_Between(array $fkSalesOrder)
    {
        return $this->filterByFkSalesOrder($fkSalesOrder, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkSalesOrders Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkSalesOrder_In(array $fkSalesOrders)
    {
        return $this->filterByFkSalesOrder($fkSalesOrders, Criteria::IN);
    }

    /**
     * Filter the query on the fk_sales_order column
     *
     * Example usage:
     * <code>
     * $query->filterByFkSalesOrder(1234); // WHERE fk_sales_order = 1234
     * $query->filterByFkSalesOrder(array(12, 34), Criteria::IN); // WHERE fk_sales_order IN (12, 34)
     * $query->filterByFkSalesOrder(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_sales_order > 12
     * </code>
     *
     * @see       filterByOrder()
     *
     * @param     mixed $fkSalesOrder The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkSalesOrder($fkSalesOrder = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkSalesOrder)) {
            $useMinMax = false;
            if (isset($fkSalesOrder['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_FK_SALES_ORDER, $fkSalesOrder['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkSalesOrder['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_FK_SALES_ORDER, $fkSalesOrder['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkSalesOrder of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_FK_SALES_ORDER, $fkSalesOrder, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $commands Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCommand_In(array $commands)
    {
        return $this->filterByCommand($commands, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $command Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCommand_Like($command)
    {
        return $this->filterByCommand($command, Criteria::LIKE);
    }

    /**
     * Filter the query on the command column
     *
     * Example usage:
     * <code>
     * $query->filterByCommand('fooValue');   // WHERE command = 'fooValue'
     * $query->filterByCommand('%fooValue%', Criteria::LIKE); // WHERE command LIKE '%fooValue%'
     * $query->filterByCommand([1, 'foo'], Criteria::IN); // WHERE command IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $command The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCommand($command = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $command = str_replace('*', '%', $command);
        }

        if (is_array($command) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$command of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_COMMAND, $command, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $messages Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByMessage_In(array $messages)
    {
        return $this->filterByMessage($messages, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $message Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByMessage_Like($message)
    {
        return $this->filterByMessage($message, Criteria::LIKE);
    }

    /**
     * Filter the query on the message column
     *
     * Example usage:
     * <code>
     * $query->filterByMessage('fooValue');   // WHERE message = 'fooValue'
     * $query->filterByMessage('%fooValue%', Criteria::LIKE); // WHERE message LIKE '%fooValue%'
     * $query->filterByMessage([1, 'foo'], Criteria::IN); // WHERE message IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $message The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByMessage($message = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $message = str_replace('*', '%', $message);
        }

        if (is_array($message) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$message of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_MESSAGE, $message, $comparison);

        return $query;
    }

    /**
     * Filter the query on the success column
     *
     * Example usage:
     * <code>
     * $query->filterBySuccess(true); // WHERE success = true
     * $query->filterBySuccess('yes'); // WHERE success = true
     * </code>
     *
     * @param     bool|string $success The value to use as filter.
     *              Non-boolean arguments are converted using the following rules:
     *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
     *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
     *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterBySuccess($success = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($success)) {
            $success = in_array(strtolower($success), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_SUCCESS, $success, $comparison);

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
                $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Sales\Persistence\SpySalesOrder object
     *
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrder|ObjectCollection $spySalesOrder The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByOrder($spySalesOrder, ?string $comparison = null)
    {
        if ($spySalesOrder instanceof \Orm\Zed\Sales\Persistence\SpySalesOrder) {
            return $this
                ->addUsingAlias(SpySalesOrderNoteTableMap::COL_FK_SALES_ORDER, $spySalesOrder->getIdSalesOrder(), $comparison);
        } elseif ($spySalesOrder instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpySalesOrderNoteTableMap::COL_FK_SALES_ORDER, $spySalesOrder->toKeyValue('PrimaryKey', 'IdSalesOrder'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByOrder() only accepts arguments of type \Orm\Zed\Sales\Persistence\SpySalesOrder or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Order relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinOrder(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Order');

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
            $this->addJoinObject($join, 'Order');
        }

        return $this;
    }

    /**
     * Use the Order relation SpySalesOrder object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery A secondary query class using the current class as primary query
     */
    public function useOrderQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinOrder($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Order', '\Orm\Zed\Sales\Persistence\SpySalesOrderQuery');
    }

    /**
     * Use the Order relation SpySalesOrder object
     *
     * @param callable(\Orm\Zed\Sales\Persistence\SpySalesOrderQuery):\Orm\Zed\Sales\Persistence\SpySalesOrderQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withOrderQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useOrderQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the Order relation to the SpySalesOrder table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the EXISTS statement
     */
    public function useOrderExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderQuery */
        $q = $this->useExistsQuery('Order', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the Order relation to the SpySalesOrder table for a NOT EXISTS query.
     *
     * @see useOrderExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the NOT EXISTS statement
     */
    public function useOrderNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderQuery */
        $q = $this->useExistsQuery('Order', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the Order relation to the SpySalesOrder table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the IN statement
     */
    public function useInOrderQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderQuery */
        $q = $this->useInQuery('Order', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the Order relation to the SpySalesOrder table for a NOT IN query.
     *
     * @see useOrderInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Sales\Persistence\SpySalesOrderQuery The inner query object of the NOT IN statement
     */
    public function useNotInOrderQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Sales\Persistence\SpySalesOrderQuery */
        $q = $this->useInQuery('Order', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpySalesOrderNote $spySalesOrderNote Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spySalesOrderNote = null)
    {
        if ($spySalesOrderNote) {
            $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_ID_SALES_ORDER_NOTE, $spySalesOrderNote->getIdSalesOrderNote(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_sales_order_note table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderNoteTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpySalesOrderNoteTableMap::clearInstancePool();
            SpySalesOrderNoteTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpySalesOrderNoteTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpySalesOrderNoteTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpySalesOrderNoteTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpySalesOrderNoteTableMap::clearRelatedInstancePool();

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
        $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by update date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        $this->addDescendingOrderByColumn(SpySalesOrderNoteTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by update date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        $this->addAscendingOrderByColumn(SpySalesOrderNoteTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpySalesOrderNoteTableMap::COL_CREATED_AT);

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
        $this->addUsingAlias(SpySalesOrderNoteTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpySalesOrderNoteTableMap::COL_CREATED_AT);

        return $this;
    }

}
