<?php

namespace Orm\Zed\Acl\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Acl\Persistence\SpyAclUserHasGroup as ChildSpyAclUserHasGroup;
use Orm\Zed\Acl\Persistence\SpyAclUserHasGroupQuery as ChildSpyAclUserHasGroupQuery;
use Orm\Zed\Acl\Persistence\Map\SpyAclUserHasGroupTableMap;
use Orm\Zed\User\Persistence\SpyUser;
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
 * Base class that represents a query for the `spy_acl_user_has_group` table.
 *
 * @method     ChildSpyAclUserHasGroupQuery orderByFkUser($order = Criteria::ASC) Order by the fk_user column
 * @method     ChildSpyAclUserHasGroupQuery orderByFkAclGroup($order = Criteria::ASC) Order by the fk_acl_group column
 *
 * @method     ChildSpyAclUserHasGroupQuery groupByFkUser() Group by the fk_user column
 * @method     ChildSpyAclUserHasGroupQuery groupByFkAclGroup() Group by the fk_acl_group column
 *
 * @method     ChildSpyAclUserHasGroupQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyAclUserHasGroupQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyAclUserHasGroupQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyAclUserHasGroupQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyAclUserHasGroupQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyAclUserHasGroupQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyAclUserHasGroupQuery leftJoinSpyUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyUser relation
 * @method     ChildSpyAclUserHasGroupQuery rightJoinSpyUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyUser relation
 * @method     ChildSpyAclUserHasGroupQuery innerJoinSpyUser($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyUser relation
 *
 * @method     ChildSpyAclUserHasGroupQuery joinWithSpyUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyUser relation
 *
 * @method     ChildSpyAclUserHasGroupQuery leftJoinWithSpyUser() Adds a LEFT JOIN clause and with to the query using the SpyUser relation
 * @method     ChildSpyAclUserHasGroupQuery rightJoinWithSpyUser() Adds a RIGHT JOIN clause and with to the query using the SpyUser relation
 * @method     ChildSpyAclUserHasGroupQuery innerJoinWithSpyUser() Adds a INNER JOIN clause and with to the query using the SpyUser relation
 *
 * @method     ChildSpyAclUserHasGroupQuery leftJoinSpyAclGroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyAclGroup relation
 * @method     ChildSpyAclUserHasGroupQuery rightJoinSpyAclGroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyAclGroup relation
 * @method     ChildSpyAclUserHasGroupQuery innerJoinSpyAclGroup($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyAclGroup relation
 *
 * @method     ChildSpyAclUserHasGroupQuery joinWithSpyAclGroup($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyAclGroup relation
 *
 * @method     ChildSpyAclUserHasGroupQuery leftJoinWithSpyAclGroup() Adds a LEFT JOIN clause and with to the query using the SpyAclGroup relation
 * @method     ChildSpyAclUserHasGroupQuery rightJoinWithSpyAclGroup() Adds a RIGHT JOIN clause and with to the query using the SpyAclGroup relation
 * @method     ChildSpyAclUserHasGroupQuery innerJoinWithSpyAclGroup() Adds a INNER JOIN clause and with to the query using the SpyAclGroup relation
 *
 * @method     \Orm\Zed\User\Persistence\SpyUserQuery|\Orm\Zed\Acl\Persistence\SpyAclGroupQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyAclUserHasGroup|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyAclUserHasGroup matching the query
 * @method     ChildSpyAclUserHasGroup findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyAclUserHasGroup matching the query, or a new ChildSpyAclUserHasGroup object populated from the query conditions when no match is found
 *
 * @method     ChildSpyAclUserHasGroup|null findOneByFkUser(int $fk_user) Return the first ChildSpyAclUserHasGroup filtered by the fk_user column
 * @method     ChildSpyAclUserHasGroup|null findOneByFkAclGroup(int $fk_acl_group) Return the first ChildSpyAclUserHasGroup filtered by the fk_acl_group column
 *
 * @method     ChildSpyAclUserHasGroup requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyAclUserHasGroup by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAclUserHasGroup requireOne(?ConnectionInterface $con = null) Return the first ChildSpyAclUserHasGroup matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyAclUserHasGroup requireOneByFkUser(int $fk_user) Return the first ChildSpyAclUserHasGroup filtered by the fk_user column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyAclUserHasGroup requireOneByFkAclGroup(int $fk_acl_group) Return the first ChildSpyAclUserHasGroup filtered by the fk_acl_group column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyAclUserHasGroup[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyAclUserHasGroup objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyAclUserHasGroup> find(?ConnectionInterface $con = null) Return ChildSpyAclUserHasGroup objects based on current ModelCriteria
 *
 * @method     ChildSpyAclUserHasGroup[]|Collection findByFkUser(int|array<int> $fk_user) Return ChildSpyAclUserHasGroup objects filtered by the fk_user column
 * @psalm-method Collection&\Traversable<ChildSpyAclUserHasGroup> findByFkUser(int|array<int> $fk_user) Return ChildSpyAclUserHasGroup objects filtered by the fk_user column
 * @method     ChildSpyAclUserHasGroup[]|Collection findByFkAclGroup(int|array<int> $fk_acl_group) Return ChildSpyAclUserHasGroup objects filtered by the fk_acl_group column
 * @psalm-method Collection&\Traversable<ChildSpyAclUserHasGroup> findByFkAclGroup(int|array<int> $fk_acl_group) Return ChildSpyAclUserHasGroup objects filtered by the fk_acl_group column
 *
 * @method     ChildSpyAclUserHasGroup[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyAclUserHasGroup> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyAclUserHasGroupQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Acl\Persistence\Base\SpyAclUserHasGroupQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Acl\\Persistence\\SpyAclUserHasGroup', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyAclUserHasGroupQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyAclUserHasGroupQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyAclUserHasGroupQuery) {
            return $criteria;
        }
        $query = new ChildSpyAclUserHasGroupQuery();
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
     * $obj = $c->findPk(array(12, 34), $con);
     * </code>
     *
     * @param array[$fk_user, $fk_acl_group] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSpyAclUserHasGroup|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyAclUserHasGroupTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildSpyAclUserHasGroup A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT fk_user, fk_acl_group FROM spy_acl_user_has_group WHERE fk_user = :p0 AND fk_acl_group = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_INT);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSpyAclUserHasGroup $obj */
            $obj = new ChildSpyAclUserHasGroup();
            $obj->hydrate($row);
            SpyAclUserHasGroupTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildSpyAclUserHasGroup|array|mixed the result, formatted by the current formatter
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
     * $objs = $c->findPks(array(array(12, 56), array(832, 123), array(123, 456)), $con);
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
        $this->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_USER, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_ACL_GROUP, $key[1], Criteria::EQUAL);

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
        if (empty($keys)) {
            $this->add(null, '1<>1', Criteria::CUSTOM);

            return $this;
        }
        foreach ($keys as $key) {
            $cton0 = $this->getNewCriterion(SpyAclUserHasGroupTableMap::COL_FK_USER, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SpyAclUserHasGroupTableMap::COL_FK_ACL_GROUP, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkUser Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkUser_Between(array $fkUser)
    {
        return $this->filterByFkUser($fkUser, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkUsers Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkUser_In(array $fkUsers)
    {
        return $this->filterByFkUser($fkUsers, Criteria::IN);
    }

    /**
     * Filter the query on the fk_user column
     *
     * Example usage:
     * <code>
     * $query->filterByFkUser(1234); // WHERE fk_user = 1234
     * $query->filterByFkUser(array(12, 34), Criteria::IN); // WHERE fk_user IN (12, 34)
     * $query->filterByFkUser(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_user > 12
     * </code>
     *
     * @see       filterBySpyUser()
     *
     * @param     mixed $fkUser The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkUser($fkUser = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkUser)) {
            $useMinMax = false;
            if (isset($fkUser['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_USER, $fkUser['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkUser['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_USER, $fkUser['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkUser of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_USER, $fkUser, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkAclGroup Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkAclGroup_Between(array $fkAclGroup)
    {
        return $this->filterByFkAclGroup($fkAclGroup, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkAclGroups Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkAclGroup_In(array $fkAclGroups)
    {
        return $this->filterByFkAclGroup($fkAclGroups, Criteria::IN);
    }

    /**
     * Filter the query on the fk_acl_group column
     *
     * Example usage:
     * <code>
     * $query->filterByFkAclGroup(1234); // WHERE fk_acl_group = 1234
     * $query->filterByFkAclGroup(array(12, 34), Criteria::IN); // WHERE fk_acl_group IN (12, 34)
     * $query->filterByFkAclGroup(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_acl_group > 12
     * </code>
     *
     * @see       filterBySpyAclGroup()
     *
     * @param     mixed $fkAclGroup The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkAclGroup($fkAclGroup = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkAclGroup)) {
            $useMinMax = false;
            if (isset($fkAclGroup['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_ACL_GROUP, $fkAclGroup['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkAclGroup['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_ACL_GROUP, $fkAclGroup['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkAclGroup of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_ACL_GROUP, $fkAclGroup, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\User\Persistence\SpyUser object
     *
     * @param \Orm\Zed\User\Persistence\SpyUser|ObjectCollection $spyUser The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyUser($spyUser, ?string $comparison = null)
    {
        if ($spyUser instanceof \Orm\Zed\User\Persistence\SpyUser) {
            return $this
                ->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_USER, $spyUser->getIdUser(), $comparison);
        } elseif ($spyUser instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_USER, $spyUser->toKeyValue('PrimaryKey', 'IdUser'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyUser() only accepts arguments of type \Orm\Zed\User\Persistence\SpyUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyUser relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyUser(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyUser');

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
            $this->addJoinObject($join, 'SpyUser');
        }

        return $this;
    }

    /**
     * Use the SpyUser relation SpyUser object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\User\Persistence\SpyUserQuery A secondary query class using the current class as primary query
     */
    public function useSpyUserQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyUser', '\Orm\Zed\User\Persistence\SpyUserQuery');
    }

    /**
     * Use the SpyUser relation SpyUser object
     *
     * @param callable(\Orm\Zed\User\Persistence\SpyUserQuery):\Orm\Zed\User\Persistence\SpyUserQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyUserQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyUserQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyUser table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\User\Persistence\SpyUserQuery The inner query object of the EXISTS statement
     */
    public function useSpyUserExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\User\Persistence\SpyUserQuery */
        $q = $this->useExistsQuery('SpyUser', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyUser table for a NOT EXISTS query.
     *
     * @see useSpyUserExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\User\Persistence\SpyUserQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyUserNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\User\Persistence\SpyUserQuery */
        $q = $this->useExistsQuery('SpyUser', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyUser table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\User\Persistence\SpyUserQuery The inner query object of the IN statement
     */
    public function useInSpyUserQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\User\Persistence\SpyUserQuery */
        $q = $this->useInQuery('SpyUser', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyUser table for a NOT IN query.
     *
     * @see useSpyUserInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\User\Persistence\SpyUserQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyUserQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\User\Persistence\SpyUserQuery */
        $q = $this->useInQuery('SpyUser', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\Acl\Persistence\SpyAclGroup object
     *
     * @param \Orm\Zed\Acl\Persistence\SpyAclGroup|ObjectCollection $spyAclGroup The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyAclGroup($spyAclGroup, ?string $comparison = null)
    {
        if ($spyAclGroup instanceof \Orm\Zed\Acl\Persistence\SpyAclGroup) {
            return $this
                ->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_ACL_GROUP, $spyAclGroup->getIdAclGroup(), $comparison);
        } elseif ($spyAclGroup instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyAclUserHasGroupTableMap::COL_FK_ACL_GROUP, $spyAclGroup->toKeyValue('PrimaryKey', 'IdAclGroup'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyAclGroup() only accepts arguments of type \Orm\Zed\Acl\Persistence\SpyAclGroup or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyAclGroup relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyAclGroup(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyAclGroup');

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
            $this->addJoinObject($join, 'SpyAclGroup');
        }

        return $this;
    }

    /**
     * Use the SpyAclGroup relation SpyAclGroup object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclGroupQuery A secondary query class using the current class as primary query
     */
    public function useSpyAclGroupQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyAclGroup($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyAclGroup', '\Orm\Zed\Acl\Persistence\SpyAclGroupQuery');
    }

    /**
     * Use the SpyAclGroup relation SpyAclGroup object
     *
     * @param callable(\Orm\Zed\Acl\Persistence\SpyAclGroupQuery):\Orm\Zed\Acl\Persistence\SpyAclGroupQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyAclGroupQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyAclGroupQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyAclGroup table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclGroupQuery The inner query object of the EXISTS statement
     */
    public function useSpyAclGroupExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Acl\Persistence\SpyAclGroupQuery */
        $q = $this->useExistsQuery('SpyAclGroup', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyAclGroup table for a NOT EXISTS query.
     *
     * @see useSpyAclGroupExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclGroupQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyAclGroupNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Acl\Persistence\SpyAclGroupQuery */
        $q = $this->useExistsQuery('SpyAclGroup', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyAclGroup table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclGroupQuery The inner query object of the IN statement
     */
    public function useInSpyAclGroupQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Acl\Persistence\SpyAclGroupQuery */
        $q = $this->useInQuery('SpyAclGroup', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyAclGroup table for a NOT IN query.
     *
     * @see useSpyAclGroupInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Acl\Persistence\SpyAclGroupQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyAclGroupQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Acl\Persistence\SpyAclGroupQuery */
        $q = $this->useInQuery('SpyAclGroup', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyAclUserHasGroup $spyAclUserHasGroup Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyAclUserHasGroup = null)
    {
        if ($spyAclUserHasGroup) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SpyAclUserHasGroupTableMap::COL_FK_USER), $spyAclUserHasGroup->getFkUser(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SpyAclUserHasGroupTableMap::COL_FK_ACL_GROUP), $spyAclUserHasGroup->getFkAclGroup(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_acl_user_has_group table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAclUserHasGroupTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyAclUserHasGroupTableMap::clearInstancePool();
            SpyAclUserHasGroupTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyAclUserHasGroupTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyAclUserHasGroupTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyAclUserHasGroupTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyAclUserHasGroupTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
