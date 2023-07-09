<?php

namespace Orm\Zed\ProductSearch\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMap as ChildSpyProductSearchAttributeMap;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapArchive as ChildSpyProductSearchAttributeMapArchive;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery as ChildSpyProductSearchAttributeMapQuery;
use Orm\Zed\ProductSearch\Persistence\Map\SpyProductSearchAttributeMapTableMap;
use Orm\Zed\Product\Persistence\SpyProductAttributeKey;
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
 * Base class that represents a query for the `spy_product_search_attribute_map` table.
 *
 * @method     ChildSpyProductSearchAttributeMapQuery orderByFkProductAttributeKey($order = Criteria::ASC) Order by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttributeMapQuery orderBySynced($order = Criteria::ASC) Order by the synced column
 * @method     ChildSpyProductSearchAttributeMapQuery orderByTargetField($order = Criteria::ASC) Order by the target_field column
 *
 * @method     ChildSpyProductSearchAttributeMapQuery groupByFkProductAttributeKey() Group by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttributeMapQuery groupBySynced() Group by the synced column
 * @method     ChildSpyProductSearchAttributeMapQuery groupByTargetField() Group by the target_field column
 *
 * @method     ChildSpyProductSearchAttributeMapQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductSearchAttributeMapQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductSearchAttributeMapQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductSearchAttributeMapQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductSearchAttributeMapQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductSearchAttributeMapQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductSearchAttributeMapQuery leftJoinSpyProductAttributeKey($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductSearchAttributeMapQuery rightJoinSpyProductAttributeKey($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductSearchAttributeMapQuery innerJoinSpyProductAttributeKey($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductAttributeKey relation
 *
 * @method     ChildSpyProductSearchAttributeMapQuery joinWithSpyProductAttributeKey($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductAttributeKey relation
 *
 * @method     ChildSpyProductSearchAttributeMapQuery leftJoinWithSpyProductAttributeKey() Adds a LEFT JOIN clause and with to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductSearchAttributeMapQuery rightJoinWithSpyProductAttributeKey() Adds a RIGHT JOIN clause and with to the query using the SpyProductAttributeKey relation
 * @method     ChildSpyProductSearchAttributeMapQuery innerJoinWithSpyProductAttributeKey() Adds a INNER JOIN clause and with to the query using the SpyProductAttributeKey relation
 *
 * @method     \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductSearchAttributeMap|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyProductSearchAttributeMap matching the query
 * @method     ChildSpyProductSearchAttributeMap findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyProductSearchAttributeMap matching the query, or a new ChildSpyProductSearchAttributeMap object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductSearchAttributeMap|null findOneByFkProductAttributeKey(int $fk_product_attribute_key) Return the first ChildSpyProductSearchAttributeMap filtered by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttributeMap|null findOneBySynced(boolean $synced) Return the first ChildSpyProductSearchAttributeMap filtered by the synced column
 * @method     ChildSpyProductSearchAttributeMap|null findOneByTargetField(string $target_field) Return the first ChildSpyProductSearchAttributeMap filtered by the target_field column
 *
 * @method     ChildSpyProductSearchAttributeMap requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyProductSearchAttributeMap by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttributeMap requireOne(?ConnectionInterface $con = null) Return the first ChildSpyProductSearchAttributeMap matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductSearchAttributeMap requireOneByFkProductAttributeKey(int $fk_product_attribute_key) Return the first ChildSpyProductSearchAttributeMap filtered by the fk_product_attribute_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttributeMap requireOneBySynced(boolean $synced) Return the first ChildSpyProductSearchAttributeMap filtered by the synced column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductSearchAttributeMap requireOneByTargetField(string $target_field) Return the first ChildSpyProductSearchAttributeMap filtered by the target_field column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductSearchAttributeMap[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyProductSearchAttributeMap objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyProductSearchAttributeMap> find(?ConnectionInterface $con = null) Return ChildSpyProductSearchAttributeMap objects based on current ModelCriteria
 *
 * @method     ChildSpyProductSearchAttributeMap[]|Collection findByFkProductAttributeKey(int|array<int> $fk_product_attribute_key) Return ChildSpyProductSearchAttributeMap objects filtered by the fk_product_attribute_key column
 * @psalm-method Collection&\Traversable<ChildSpyProductSearchAttributeMap> findByFkProductAttributeKey(int|array<int> $fk_product_attribute_key) Return ChildSpyProductSearchAttributeMap objects filtered by the fk_product_attribute_key column
 * @method     ChildSpyProductSearchAttributeMap[]|Collection findBySynced(boolean|array<boolean> $synced) Return ChildSpyProductSearchAttributeMap objects filtered by the synced column
 * @psalm-method Collection&\Traversable<ChildSpyProductSearchAttributeMap> findBySynced(boolean|array<boolean> $synced) Return ChildSpyProductSearchAttributeMap objects filtered by the synced column
 * @method     ChildSpyProductSearchAttributeMap[]|Collection findByTargetField(string|array<string> $target_field) Return ChildSpyProductSearchAttributeMap objects filtered by the target_field column
 * @psalm-method Collection&\Traversable<ChildSpyProductSearchAttributeMap> findByTargetField(string|array<string> $target_field) Return ChildSpyProductSearchAttributeMap objects filtered by the target_field column
 *
 * @method     ChildSpyProductSearchAttributeMap[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductSearchAttributeMap> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyProductSearchAttributeMapQuery extends ModelCriteria
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

    // archivable behavior
    protected $archiveOnDelete = true;
    protected $entityNotFoundExceptionClass = '\\Propel\\Runtime\\Exception\\EntityNotFoundException';

    /**
     * Initializes internal state of \Orm\Zed\ProductSearch\Persistence\Base\SpyProductSearchAttributeMapQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductSearch\\Persistence\\SpyProductSearchAttributeMap', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductSearchAttributeMapQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductSearchAttributeMapQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyProductSearchAttributeMapQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductSearchAttributeMapQuery();
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
     * @param array[$fk_product_attribute_key, $target_field] $key Primary key to use for the query
     * @param ConnectionInterface $con an optional connection object
     *
     * @return ChildSpyProductSearchAttributeMap|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductSearchAttributeMapTableMap::getInstanceFromPool(serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]))))) {
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
     * @return ChildSpyProductSearchAttributeMap A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT fk_product_attribute_key, synced, target_field FROM spy_product_search_attribute_map WHERE fk_product_attribute_key = :p0 AND target_field = :p1';
        try {
            $stmt = $con->prepare($sql);
            $stmt->bindValue(':p0', $key[0], PDO::PARAM_INT);
            $stmt->bindValue(':p1', $key[1], PDO::PARAM_STR);
            $stmt->execute();
        } catch (Exception $e) {
            Propel::log($e->getMessage(), Propel::LOG_ERR);
            throw new PropelException(sprintf('Unable to execute SELECT statement [%s]', $sql), 0, $e);
        }
        $obj = null;
        if ($row = $stmt->fetch(\PDO::FETCH_NUM)) {
            /** @var ChildSpyProductSearchAttributeMap $obj */
            $obj = new ChildSpyProductSearchAttributeMap();
            $obj->hydrate($row);
            SpyProductSearchAttributeMapTableMap::addInstanceToPool($obj, serialize([(null === $key[0] || is_scalar($key[0]) || is_callable([$key[0], '__toString']) ? (string) $key[0] : $key[0]), (null === $key[1] || is_scalar($key[1]) || is_callable([$key[1], '__toString']) ? (string) $key[1] : $key[1])]));
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
     * @return ChildSpyProductSearchAttributeMap|array|mixed the result, formatted by the current formatter
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
        $this->addUsingAlias(SpyProductSearchAttributeMapTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $key[0], Criteria::EQUAL);
        $this->addUsingAlias(SpyProductSearchAttributeMapTableMap::COL_TARGET_FIELD, $key[1], Criteria::EQUAL);

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
            $cton0 = $this->getNewCriterion(SpyProductSearchAttributeMapTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $key[0], Criteria::EQUAL);
            $cton1 = $this->getNewCriterion(SpyProductSearchAttributeMapTableMap::COL_TARGET_FIELD, $key[1], Criteria::EQUAL);
            $cton0->addAnd($cton1);
            $this->addOr($cton0);
        }

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductAttributeKey Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAttributeKey_Between(array $fkProductAttributeKey)
    {
        return $this->filterByFkProductAttributeKey($fkProductAttributeKey, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductAttributeKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAttributeKey_In(array $fkProductAttributeKeys)
    {
        return $this->filterByFkProductAttributeKey($fkProductAttributeKeys, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_attribute_key column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductAttributeKey(1234); // WHERE fk_product_attribute_key = 1234
     * $query->filterByFkProductAttributeKey(array(12, 34), Criteria::IN); // WHERE fk_product_attribute_key IN (12, 34)
     * $query->filterByFkProductAttributeKey(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_attribute_key > 12
     * </code>
     *
     * @see       filterBySpyProductAttributeKey()
     *
     * @param     mixed $fkProductAttributeKey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductAttributeKey($fkProductAttributeKey = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductAttributeKey)) {
            $useMinMax = false;
            if (isset($fkProductAttributeKey['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeMapTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductAttributeKey['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductSearchAttributeMapTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductAttributeKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeMapTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $fkProductAttributeKey, $comparison);

        return $query;
    }

    /**
     * Filter the query on the synced column
     *
     * Example usage:
     * <code>
     * $query->filterBySynced(true); // WHERE synced = true
     * $query->filterBySynced('yes'); // WHERE synced = true
     * </code>
     *
     * @param     bool|string $synced The value to use as filter.
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
    public function filterBySynced($synced = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($synced)) {
            $synced = in_array(strtolower($synced), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeMapTableMap::COL_SYNCED, $synced, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $targetFields Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTargetField_In(array $targetFields)
    {
        return $this->filterByTargetField($targetFields, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $targetField Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByTargetField_Like($targetField)
    {
        return $this->filterByTargetField($targetField, Criteria::LIKE);
    }

    /**
     * Filter the query on the target_field column
     *
     * Example usage:
     * <code>
     * $query->filterByTargetField('fooValue');   // WHERE target_field = 'fooValue'
     * $query->filterByTargetField('%fooValue%', Criteria::LIKE); // WHERE target_field LIKE '%fooValue%'
     * $query->filterByTargetField([1, 'foo'], Criteria::IN); // WHERE target_field IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $targetField The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByTargetField($targetField = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $targetField = str_replace('*', '%', $targetField);
        }

        if (is_array($targetField) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$targetField of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyProductSearchAttributeMapTableMap::COL_TARGET_FIELD, $targetField, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Product\Persistence\SpyProductAttributeKey object
     *
     * @param \Orm\Zed\Product\Persistence\SpyProductAttributeKey|ObjectCollection $spyProductAttributeKey The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyProductAttributeKey($spyProductAttributeKey, ?string $comparison = null)
    {
        if ($spyProductAttributeKey instanceof \Orm\Zed\Product\Persistence\SpyProductAttributeKey) {
            return $this
                ->addUsingAlias(SpyProductSearchAttributeMapTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $spyProductAttributeKey->getIdProductAttributeKey(), $comparison);
        } elseif ($spyProductAttributeKey instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyProductSearchAttributeMapTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY, $spyProductAttributeKey->toKeyValue('PrimaryKey', 'IdProductAttributeKey'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyProductAttributeKey() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProductAttributeKey or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductAttributeKey relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyProductAttributeKey(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductAttributeKey');

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
            $this->addJoinObject($join, 'SpyProductAttributeKey');
        }

        return $this;
    }

    /**
     * Use the SpyProductAttributeKey relation SpyProductAttributeKey object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductAttributeKeyQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductAttributeKey($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductAttributeKey', '\Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery');
    }

    /**
     * Use the SpyProductAttributeKey relation SpyProductAttributeKey object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery):\Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductAttributeKeyQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductAttributeKeyQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyProductAttributeKey table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductAttributeKeyExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery */
        $q = $this->useExistsQuery('SpyProductAttributeKey', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyProductAttributeKey table for a NOT EXISTS query.
     *
     * @see useSpyProductAttributeKeyExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductAttributeKeyNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery */
        $q = $this->useExistsQuery('SpyProductAttributeKey', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyProductAttributeKey table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery The inner query object of the IN statement
     */
    public function useInSpyProductAttributeKeyQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery */
        $q = $this->useInQuery('SpyProductAttributeKey', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyProductAttributeKey table for a NOT IN query.
     *
     * @see useSpyProductAttributeKeyInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyProductAttributeKeyQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery */
        $q = $this->useInQuery('SpyProductAttributeKey', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyProductSearchAttributeMap $spyProductSearchAttributeMap Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyProductSearchAttributeMap = null)
    {
        if ($spyProductSearchAttributeMap) {
            $this->addCond('pruneCond0', $this->getAliasedColName(SpyProductSearchAttributeMapTableMap::COL_FK_PRODUCT_ATTRIBUTE_KEY), $spyProductSearchAttributeMap->getFkProductAttributeKey(), Criteria::NOT_EQUAL);
            $this->addCond('pruneCond1', $this->getAliasedColName(SpyProductSearchAttributeMapTableMap::COL_TARGET_FIELD), $spyProductSearchAttributeMap->getTargetField(), Criteria::NOT_EQUAL);
            $this->combine(array('pruneCond0', 'pruneCond1'), Criteria::LOGICAL_OR);
        }

        return $this;
    }

    /**
     * Code to execute before every DELETE statement
     *
     * @param ConnectionInterface $con The connection object used by the query
     * @return int|null
     */
    protected function basePreDelete(ConnectionInterface $con): ?int
    {
        // archivable behavior

        if ($this->archiveOnDelete) {
            $this->archive($con);
        } else {
            $this->archiveOnDelete = true;
        }


        return $this->preDelete($con);
    }

    /**
     * Deletes all rows from the spy_product_search_attribute_map table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductSearchAttributeMapTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductSearchAttributeMapTableMap::clearInstancePool();
            SpyProductSearchAttributeMapTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductSearchAttributeMapTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductSearchAttributeMapTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductSearchAttributeMapTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductSearchAttributeMapTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

    // archivable behavior

    /**
     * Copy the data of the objects satisfying the query into ChildSpyProductSearchAttributeMapArchive archive objects.
     * The archived objects are then saved.
     * If any of the objects has already been archived, the archived object
     * is updated and not duplicated.
     * Warning: This termination methods issues 2n+1 queries.
     *
     * @param ConnectionInterface|null $con    Connection to use.
     * @param bool $useLittleMemory Whether to use OnDemandFormatter to retrieve objects.
     *               Set to false if the identity map matters.
     *               Set to true (default) to use less memory.
     *
     * @return int the number of archived objects
     */
    public function archive($con = null, $useLittleMemory = true)
    {
        $criteria = clone $this;
        // prepare the query
        $criteria->setWith(array());
        if ($useLittleMemory) {
            $criteria->setFormatter(ModelCriteria::FORMAT_ON_DEMAND);
        }
        if ($con === null) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductSearchAttributeMapTableMap::DATABASE_NAME);
        }

        return $con->transaction(function () use ($con, $criteria) {
            $totalArchivedObjects = 0;

            // archive all results one by one
            foreach ($criteria->find($con) as $object) {
                $object->archive($con);
                $totalArchivedObjects++;
            }

            return $totalArchivedObjects;
        });
    }

    /**
     * Enable/disable auto-archiving on delete for the next query.
     *
     * @param bool True if the query must archive deleted objects, false otherwise.
     */
    public function setArchiveOnDelete(bool $archiveOnDelete)
    {
        $this->archiveOnDelete = $archiveOnDelete;
    }

    /**
     * Delete records matching the current query without archiving them.
     *
     * @param ConnectionInterface|null $con    Connection to use.
     *
     * @return int The number of deleted rows
     */
    public function deleteWithoutArchive($con = null): int
    {
        $this->archiveOnDelete = false;

        return $this->delete($con);
    }

    /**
     * Delete all records without archiving them.
     *
     * @param ConnectionInterface|null $con    Connection to use.
     *
     * @return int The number of deleted rows
     */
    public function deleteAllWithoutArchive($con = null): int
    {
        $this->archiveOnDelete = false;

        return $this->deleteAll($con);
    }

}
