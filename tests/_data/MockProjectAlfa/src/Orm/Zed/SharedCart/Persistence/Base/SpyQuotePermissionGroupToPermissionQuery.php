<?php

namespace Orm\Zed\SharedCart\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Permission\Persistence\SpyPermission;
use Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermission as ChildSpyQuotePermissionGroupToPermission;
use Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupToPermissionQuery as ChildSpyQuotePermissionGroupToPermissionQuery;
use Orm\Zed\SharedCart\Persistence\Map\SpyQuotePermissionGroupToPermissionTableMap;
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
 * Base class that represents a query for the `spy_quote_permission_group_to_permission` table.
 *
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery orderByIdQuotePermissionGroupToPermission($order = Criteria::ASC) Order by the id_quote_permission_group_to_permission column
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery orderByFkPermission($order = Criteria::ASC) Order by the fk_permission column
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery orderByFkQuotePermissionGroup($order = Criteria::ASC) Order by the fk_quote_permission_group column
 *
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery groupByIdQuotePermissionGroupToPermission() Group by the id_quote_permission_group_to_permission column
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery groupByFkPermission() Group by the fk_permission column
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery groupByFkQuotePermissionGroup() Group by the fk_quote_permission_group column
 *
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery leftJoinPermission($relationAlias = null) Adds a LEFT JOIN clause to the query using the Permission relation
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery rightJoinPermission($relationAlias = null) Adds a RIGHT JOIN clause to the query using the Permission relation
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery innerJoinPermission($relationAlias = null) Adds a INNER JOIN clause to the query using the Permission relation
 *
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery joinWithPermission($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the Permission relation
 *
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery leftJoinWithPermission() Adds a LEFT JOIN clause and with to the query using the Permission relation
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery rightJoinWithPermission() Adds a RIGHT JOIN clause and with to the query using the Permission relation
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery innerJoinWithPermission() Adds a INNER JOIN clause and with to the query using the Permission relation
 *
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery leftJoinQuotePermissionGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the QuotePermissionGroup relation
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery rightJoinQuotePermissionGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the QuotePermissionGroup relation
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery innerJoinQuotePermissionGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the QuotePermissionGroup relation
 *
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery joinWithQuotePermissionGroup($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the QuotePermissionGroup relation
 *
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery leftJoinWithQuotePermissionGroup() Adds a LEFT JOIN clause and with to the query using the QuotePermissionGroup relation
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery rightJoinWithQuotePermissionGroup() Adds a RIGHT JOIN clause and with to the query using the QuotePermissionGroup relation
 * @method     ChildSpyQuotePermissionGroupToPermissionQuery innerJoinWithQuotePermissionGroup() Adds a INNER JOIN clause and with to the query using the QuotePermissionGroup relation
 *
 * @method     \Orm\Zed\Permission\Persistence\SpyPermissionQuery|\Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyQuotePermissionGroupToPermission|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyQuotePermissionGroupToPermission matching the query
 * @method     ChildSpyQuotePermissionGroupToPermission findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyQuotePermissionGroupToPermission matching the query, or a new ChildSpyQuotePermissionGroupToPermission object populated from the query conditions when no match is found
 *
 * @method     ChildSpyQuotePermissionGroupToPermission|null findOneByIdQuotePermissionGroupToPermission(int $id_quote_permission_group_to_permission) Return the first ChildSpyQuotePermissionGroupToPermission filtered by the id_quote_permission_group_to_permission column
 * @method     ChildSpyQuotePermissionGroupToPermission|null findOneByFkPermission(int $fk_permission) Return the first ChildSpyQuotePermissionGroupToPermission filtered by the fk_permission column
 * @method     ChildSpyQuotePermissionGroupToPermission|null findOneByFkQuotePermissionGroup(int $fk_quote_permission_group) Return the first ChildSpyQuotePermissionGroupToPermission filtered by the fk_quote_permission_group column
 *
 * @method     ChildSpyQuotePermissionGroupToPermission requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyQuotePermissionGroupToPermission by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyQuotePermissionGroupToPermission requireOne(?ConnectionInterface $con = null) Return the first ChildSpyQuotePermissionGroupToPermission matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyQuotePermissionGroupToPermission requireOneByIdQuotePermissionGroupToPermission(int $id_quote_permission_group_to_permission) Return the first ChildSpyQuotePermissionGroupToPermission filtered by the id_quote_permission_group_to_permission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyQuotePermissionGroupToPermission requireOneByFkPermission(int $fk_permission) Return the first ChildSpyQuotePermissionGroupToPermission filtered by the fk_permission column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyQuotePermissionGroupToPermission requireOneByFkQuotePermissionGroup(int $fk_quote_permission_group) Return the first ChildSpyQuotePermissionGroupToPermission filtered by the fk_quote_permission_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyQuotePermissionGroupToPermission[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyQuotePermissionGroupToPermission objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyQuotePermissionGroupToPermission> find(?ConnectionInterface $con = null) Return ChildSpyQuotePermissionGroupToPermission objects based on current ModelCriteria
 *
 * @method     ChildSpyQuotePermissionGroupToPermission[]|Collection findByIdQuotePermissionGroupToPermission(int|array<int> $id_quote_permission_group_to_permission) Return ChildSpyQuotePermissionGroupToPermission objects filtered by the id_quote_permission_group_to_permission column
 * @psalm-method Collection&\Traversable<ChildSpyQuotePermissionGroupToPermission> findByIdQuotePermissionGroupToPermission(int|array<int> $id_quote_permission_group_to_permission) Return ChildSpyQuotePermissionGroupToPermission objects filtered by the id_quote_permission_group_to_permission column
 * @method     ChildSpyQuotePermissionGroupToPermission[]|Collection findByFkPermission(int|array<int> $fk_permission) Return ChildSpyQuotePermissionGroupToPermission objects filtered by the fk_permission column
 * @psalm-method Collection&\Traversable<ChildSpyQuotePermissionGroupToPermission> findByFkPermission(int|array<int> $fk_permission) Return ChildSpyQuotePermissionGroupToPermission objects filtered by the fk_permission column
 * @method     ChildSpyQuotePermissionGroupToPermission[]|Collection findByFkQuotePermissionGroup(int|array<int> $fk_quote_permission_group) Return ChildSpyQuotePermissionGroupToPermission objects filtered by the fk_quote_permission_group column
 * @psalm-method Collection&\Traversable<ChildSpyQuotePermissionGroupToPermission> findByFkQuotePermissionGroup(int|array<int> $fk_quote_permission_group) Return ChildSpyQuotePermissionGroupToPermission objects filtered by the fk_quote_permission_group column
 *
 * @method     ChildSpyQuotePermissionGroupToPermission[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyQuotePermissionGroupToPermission> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyQuotePermissionGroupToPermissionQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\SharedCart\Persistence\Base\SpyQuotePermissionGroupToPermissionQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\SharedCart\\Persistence\\SpyQuotePermissionGroupToPermission', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyQuotePermissionGroupToPermissionQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyQuotePermissionGroupToPermissionQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyQuotePermissionGroupToPermissionQuery) {
            return $criteria;
        }
        $query = new ChildSpyQuotePermissionGroupToPermissionQuery();
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
     * @return ChildSpyQuotePermissionGroupToPermission|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyQuotePermissionGroupToPermissionTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyQuotePermissionGroupToPermission A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_quote_permission_group_to_permission, fk_permission, fk_quote_permission_group FROM spy_quote_permission_group_to_permission WHERE id_quote_permission_group_to_permission = :p0';
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
            /** @var ChildSpyQuotePermissionGroupToPermission $obj */
            $obj = new ChildSpyQuotePermissionGroupToPermission();
            $obj->hydrate($row);
            SpyQuotePermissionGroupToPermissionTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyQuotePermissionGroupToPermission|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idQuotePermissionGroupToPermission Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdQuotePermissionGroupToPermission_Between(array $idQuotePermissionGroupToPermission)
    {
        return $this->filterByIdQuotePermissionGroupToPermission($idQuotePermissionGroupToPermission, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idQuotePermissionGroupToPermissions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdQuotePermissionGroupToPermission_In(array $idQuotePermissionGroupToPermissions)
    {
        return $this->filterByIdQuotePermissionGroupToPermission($idQuotePermissionGroupToPermissions, Criteria::IN);
    }

    /**
     * Filter the query on the id_quote_permission_group_to_permission column
     *
     * Example usage:
     * <code>
     * $query->filterByIdQuotePermissionGroupToPermission(1234); // WHERE id_quote_permission_group_to_permission = 1234
     * $query->filterByIdQuotePermissionGroupToPermission(array(12, 34), Criteria::IN); // WHERE id_quote_permission_group_to_permission IN (12, 34)
     * $query->filterByIdQuotePermissionGroupToPermission(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_quote_permission_group_to_permission > 12
     * </code>
     *
     * @param     mixed $idQuotePermissionGroupToPermission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdQuotePermissionGroupToPermission($idQuotePermissionGroupToPermission = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idQuotePermissionGroupToPermission)) {
            $useMinMax = false;
            if (isset($idQuotePermissionGroupToPermission['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION, $idQuotePermissionGroupToPermission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idQuotePermissionGroupToPermission['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION, $idQuotePermissionGroupToPermission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idQuotePermissionGroupToPermission of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION, $idQuotePermissionGroupToPermission, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkPermission Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPermission_Between(array $fkPermission)
    {
        return $this->filterByFkPermission($fkPermission, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkPermissions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkPermission_In(array $fkPermissions)
    {
        return $this->filterByFkPermission($fkPermissions, Criteria::IN);
    }

    /**
     * Filter the query on the fk_permission column
     *
     * Example usage:
     * <code>
     * $query->filterByFkPermission(1234); // WHERE fk_permission = 1234
     * $query->filterByFkPermission(array(12, 34), Criteria::IN); // WHERE fk_permission IN (12, 34)
     * $query->filterByFkPermission(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_permission > 12
     * </code>
     *
     * @see       filterByPermission()
     *
     * @param     mixed $fkPermission The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkPermission($fkPermission = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkPermission)) {
            $useMinMax = false;
            if (isset($fkPermission['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $fkPermission['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkPermission['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $fkPermission['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkPermission of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $fkPermission, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkQuotePermissionGroup Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkQuotePermissionGroup_Between(array $fkQuotePermissionGroup)
    {
        return $this->filterByFkQuotePermissionGroup($fkQuotePermissionGroup, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkQuotePermissionGroups Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkQuotePermissionGroup_In(array $fkQuotePermissionGroups)
    {
        return $this->filterByFkQuotePermissionGroup($fkQuotePermissionGroups, Criteria::IN);
    }

    /**
     * Filter the query on the fk_quote_permission_group column
     *
     * Example usage:
     * <code>
     * $query->filterByFkQuotePermissionGroup(1234); // WHERE fk_quote_permission_group = 1234
     * $query->filterByFkQuotePermissionGroup(array(12, 34), Criteria::IN); // WHERE fk_quote_permission_group IN (12, 34)
     * $query->filterByFkQuotePermissionGroup(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_quote_permission_group > 12
     * </code>
     *
     * @see       filterByQuotePermissionGroup()
     *
     * @param     mixed $fkQuotePermissionGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkQuotePermissionGroup($fkQuotePermissionGroup = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkQuotePermissionGroup)) {
            $useMinMax = false;
            if (isset($fkQuotePermissionGroup['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_FK_QUOTE_PERMISSION_GROUP, $fkQuotePermissionGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkQuotePermissionGroup['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_FK_QUOTE_PERMISSION_GROUP, $fkQuotePermissionGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkQuotePermissionGroup of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_FK_QUOTE_PERMISSION_GROUP, $fkQuotePermissionGroup, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Permission\Persistence\SpyPermission object
     *
     * @param \Orm\Zed\Permission\Persistence\SpyPermission|ObjectCollection $spyPermission The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByPermission($spyPermission, ?string $comparison = null)
    {
        if ($spyPermission instanceof \Orm\Zed\Permission\Persistence\SpyPermission) {
            return $this
                ->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $spyPermission->getIdPermission(), $comparison);
        } elseif ($spyPermission instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_FK_PERMISSION, $spyPermission->toKeyValue('PrimaryKey', 'IdPermission'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByPermission() only accepts arguments of type \Orm\Zed\Permission\Persistence\SpyPermission or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the Permission relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinPermission(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('Permission');

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
            $this->addJoinObject($join, 'Permission');
        }

        return $this;
    }

    /**
     * Use the Permission relation SpyPermission object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Permission\Persistence\SpyPermissionQuery A secondary query class using the current class as primary query
     */
    public function usePermissionQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinPermission($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'Permission', '\Orm\Zed\Permission\Persistence\SpyPermissionQuery');
    }

    /**
     * Use the Permission relation SpyPermission object
     *
     * @param callable(\Orm\Zed\Permission\Persistence\SpyPermissionQuery):\Orm\Zed\Permission\Persistence\SpyPermissionQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withPermissionQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->usePermissionQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the Permission relation to the SpyPermission table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Permission\Persistence\SpyPermissionQuery The inner query object of the EXISTS statement
     */
    public function usePermissionExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Permission\Persistence\SpyPermissionQuery */
        $q = $this->useExistsQuery('Permission', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the Permission relation to the SpyPermission table for a NOT EXISTS query.
     *
     * @see usePermissionExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Permission\Persistence\SpyPermissionQuery The inner query object of the NOT EXISTS statement
     */
    public function usePermissionNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Permission\Persistence\SpyPermissionQuery */
        $q = $this->useExistsQuery('Permission', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the Permission relation to the SpyPermission table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Permission\Persistence\SpyPermissionQuery The inner query object of the IN statement
     */
    public function useInPermissionQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Permission\Persistence\SpyPermissionQuery */
        $q = $this->useInQuery('Permission', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the Permission relation to the SpyPermission table for a NOT IN query.
     *
     * @see usePermissionInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Permission\Persistence\SpyPermissionQuery The inner query object of the NOT IN statement
     */
    public function useNotInPermissionQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Permission\Persistence\SpyPermissionQuery */
        $q = $this->useInQuery('Permission', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroup object
     *
     * @param \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroup|ObjectCollection $spyQuotePermissionGroup The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByQuotePermissionGroup($spyQuotePermissionGroup, ?string $comparison = null)
    {
        if ($spyQuotePermissionGroup instanceof \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroup) {
            return $this
                ->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_FK_QUOTE_PERMISSION_GROUP, $spyQuotePermissionGroup->getIdQuotePermissionGroup(), $comparison);
        } elseif ($spyQuotePermissionGroup instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_FK_QUOTE_PERMISSION_GROUP, $spyQuotePermissionGroup->toKeyValue('PrimaryKey', 'IdQuotePermissionGroup'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterByQuotePermissionGroup() only accepts arguments of type \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroup or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the QuotePermissionGroup relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinQuotePermissionGroup(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('QuotePermissionGroup');

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
            $this->addJoinObject($join, 'QuotePermissionGroup');
        }

        return $this;
    }

    /**
     * Use the QuotePermissionGroup relation SpyQuotePermissionGroup object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery A secondary query class using the current class as primary query
     */
    public function useQuotePermissionGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinQuotePermissionGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'QuotePermissionGroup', '\Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery');
    }

    /**
     * Use the QuotePermissionGroup relation SpyQuotePermissionGroup object
     *
     * @param callable(\Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery):\Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withQuotePermissionGroupQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useQuotePermissionGroupQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the QuotePermissionGroup relation to the SpyQuotePermissionGroup table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery The inner query object of the EXISTS statement
     */
    public function useQuotePermissionGroupExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery */
        $q = $this->useExistsQuery('QuotePermissionGroup', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the QuotePermissionGroup relation to the SpyQuotePermissionGroup table for a NOT EXISTS query.
     *
     * @see useQuotePermissionGroupExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery The inner query object of the NOT EXISTS statement
     */
    public function useQuotePermissionGroupNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery */
        $q = $this->useExistsQuery('QuotePermissionGroup', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the QuotePermissionGroup relation to the SpyQuotePermissionGroup table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery The inner query object of the IN statement
     */
    public function useInQuotePermissionGroupQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery */
        $q = $this->useInQuery('QuotePermissionGroup', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the QuotePermissionGroup relation to the SpyQuotePermissionGroup table for a NOT IN query.
     *
     * @see useQuotePermissionGroupInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery The inner query object of the NOT IN statement
     */
    public function useNotInQuotePermissionGroupQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\SharedCart\Persistence\SpyQuotePermissionGroupQuery */
        $q = $this->useInQuery('QuotePermissionGroup', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyQuotePermissionGroupToPermission $spyQuotePermissionGroupToPermission Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyQuotePermissionGroupToPermission = null)
    {
        if ($spyQuotePermissionGroupToPermission) {
            $this->addUsingAlias(SpyQuotePermissionGroupToPermissionTableMap::COL_ID_QUOTE_PERMISSION_GROUP_TO_PERMISSION, $spyQuotePermissionGroupToPermission->getIdQuotePermissionGroupToPermission(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_quote_permission_group_to_permission table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyQuotePermissionGroupToPermissionTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyQuotePermissionGroupToPermissionTableMap::clearInstancePool();
            SpyQuotePermissionGroupToPermissionTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyQuotePermissionGroupToPermissionTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyQuotePermissionGroupToPermissionTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyQuotePermissionGroupToPermissionTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyQuotePermissionGroupToPermissionTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
