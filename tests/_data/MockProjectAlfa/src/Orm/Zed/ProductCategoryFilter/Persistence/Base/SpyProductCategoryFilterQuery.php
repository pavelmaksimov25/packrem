<?php

namespace Orm\Zed\ProductCategoryFilter\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Category\Persistence\SpyCategory;
use Orm\Zed\ProductCategoryFilter\Persistence\SpyProductCategoryFilter as ChildSpyProductCategoryFilter;
use Orm\Zed\ProductCategoryFilter\Persistence\SpyProductCategoryFilterQuery as ChildSpyProductCategoryFilterQuery;
use Orm\Zed\ProductCategoryFilter\Persistence\Map\SpyProductCategoryFilterTableMap;
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
 * Base class that represents a query for the `spy_product_category_filter` table.
 *
 * @method     ChildSpyProductCategoryFilterQuery orderByIdProductCategoryFilter($order = Criteria::ASC) Order by the id_product_category_filter column
 * @method     ChildSpyProductCategoryFilterQuery orderByFkCategory($order = Criteria::ASC) Order by the fk_category column
 * @method     ChildSpyProductCategoryFilterQuery orderByFilterData($order = Criteria::ASC) Order by the filter_data column
 *
 * @method     ChildSpyProductCategoryFilterQuery groupByIdProductCategoryFilter() Group by the id_product_category_filter column
 * @method     ChildSpyProductCategoryFilterQuery groupByFkCategory() Group by the fk_category column
 * @method     ChildSpyProductCategoryFilterQuery groupByFilterData() Group by the filter_data column
 *
 * @method     ChildSpyProductCategoryFilterQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductCategoryFilterQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductCategoryFilterQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductCategoryFilterQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductCategoryFilterQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductCategoryFilterQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductCategoryFilterQuery leftJoinSpyCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCategory relation
 * @method     ChildSpyProductCategoryFilterQuery rightJoinSpyCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCategory relation
 * @method     ChildSpyProductCategoryFilterQuery innerJoinSpyCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCategory relation
 *
 * @method     ChildSpyProductCategoryFilterQuery joinWithSpyCategory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCategory relation
 *
 * @method     ChildSpyProductCategoryFilterQuery leftJoinWithSpyCategory() Adds a LEFT JOIN clause and with to the query using the SpyCategory relation
 * @method     ChildSpyProductCategoryFilterQuery rightJoinWithSpyCategory() Adds a RIGHT JOIN clause and with to the query using the SpyCategory relation
 * @method     ChildSpyProductCategoryFilterQuery innerJoinWithSpyCategory() Adds a INNER JOIN clause and with to the query using the SpyCategory relation
 *
 * @method     \Orm\Zed\Category\Persistence\SpyCategoryQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductCategoryFilter|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyProductCategoryFilter matching the query
 * @method     ChildSpyProductCategoryFilter findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyProductCategoryFilter matching the query, or a new ChildSpyProductCategoryFilter object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductCategoryFilter|null findOneByIdProductCategoryFilter(int $id_product_category_filter) Return the first ChildSpyProductCategoryFilter filtered by the id_product_category_filter column
 * @method     ChildSpyProductCategoryFilter|null findOneByFkCategory(int $fk_category) Return the first ChildSpyProductCategoryFilter filtered by the fk_category column
 * @method     ChildSpyProductCategoryFilter|null findOneByFilterData(string $filter_data) Return the first ChildSpyProductCategoryFilter filtered by the filter_data column
 *
 * @method     ChildSpyProductCategoryFilter requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyProductCategoryFilter by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductCategoryFilter requireOne(?ConnectionInterface $con = null) Return the first ChildSpyProductCategoryFilter matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductCategoryFilter requireOneByIdProductCategoryFilter(int $id_product_category_filter) Return the first ChildSpyProductCategoryFilter filtered by the id_product_category_filter column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductCategoryFilter requireOneByFkCategory(int $fk_category) Return the first ChildSpyProductCategoryFilter filtered by the fk_category column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductCategoryFilter requireOneByFilterData(string $filter_data) Return the first ChildSpyProductCategoryFilter filtered by the filter_data column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductCategoryFilter[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyProductCategoryFilter objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyProductCategoryFilter> find(?ConnectionInterface $con = null) Return ChildSpyProductCategoryFilter objects based on current ModelCriteria
 *
 * @method     ChildSpyProductCategoryFilter[]|Collection findByIdProductCategoryFilter(int|array<int> $id_product_category_filter) Return ChildSpyProductCategoryFilter objects filtered by the id_product_category_filter column
 * @psalm-method Collection&\Traversable<ChildSpyProductCategoryFilter> findByIdProductCategoryFilter(int|array<int> $id_product_category_filter) Return ChildSpyProductCategoryFilter objects filtered by the id_product_category_filter column
 * @method     ChildSpyProductCategoryFilter[]|Collection findByFkCategory(int|array<int> $fk_category) Return ChildSpyProductCategoryFilter objects filtered by the fk_category column
 * @psalm-method Collection&\Traversable<ChildSpyProductCategoryFilter> findByFkCategory(int|array<int> $fk_category) Return ChildSpyProductCategoryFilter objects filtered by the fk_category column
 * @method     ChildSpyProductCategoryFilter[]|Collection findByFilterData(string|array<string> $filter_data) Return ChildSpyProductCategoryFilter objects filtered by the filter_data column
 * @psalm-method Collection&\Traversable<ChildSpyProductCategoryFilter> findByFilterData(string|array<string> $filter_data) Return ChildSpyProductCategoryFilter objects filtered by the filter_data column
 *
 * @method     ChildSpyProductCategoryFilter[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductCategoryFilter> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyProductCategoryFilterQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ProductCategoryFilter\Persistence\Base\SpyProductCategoryFilterQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductCategoryFilter\\Persistence\\SpyProductCategoryFilter', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductCategoryFilterQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductCategoryFilterQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyProductCategoryFilterQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductCategoryFilterQuery();
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
     * @return ChildSpyProductCategoryFilter|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductCategoryFilterTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductCategoryFilter A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_product_category_filter, fk_category, filter_data FROM spy_product_category_filter WHERE id_product_category_filter = :p0';
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
            /** @var ChildSpyProductCategoryFilter $obj */
            $obj = new ChildSpyProductCategoryFilter();
            $obj->hydrate($row);
            SpyProductCategoryFilterTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductCategoryFilter|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyProductCategoryFilterTableMap::COL_ID_PRODUCT_CATEGORY_FILTER, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyProductCategoryFilterTableMap::COL_ID_PRODUCT_CATEGORY_FILTER, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductCategoryFilter Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductCategoryFilter_Between(array $idProductCategoryFilter)
    {
        return $this->filterByIdProductCategoryFilter($idProductCategoryFilter, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductCategoryFilters Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductCategoryFilter_In(array $idProductCategoryFilters)
    {
        return $this->filterByIdProductCategoryFilter($idProductCategoryFilters, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_category_filter column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductCategoryFilter(1234); // WHERE id_product_category_filter = 1234
     * $query->filterByIdProductCategoryFilter(array(12, 34), Criteria::IN); // WHERE id_product_category_filter IN (12, 34)
     * $query->filterByIdProductCategoryFilter(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_category_filter > 12
     * </code>
     *
     * @param     mixed $idProductCategoryFilter The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductCategoryFilter($idProductCategoryFilter = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductCategoryFilter)) {
            $useMinMax = false;
            if (isset($idProductCategoryFilter['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductCategoryFilterTableMap::COL_ID_PRODUCT_CATEGORY_FILTER, $idProductCategoryFilter['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductCategoryFilter['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductCategoryFilterTableMap::COL_ID_PRODUCT_CATEGORY_FILTER, $idProductCategoryFilter['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductCategoryFilter of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductCategoryFilterTableMap::COL_ID_PRODUCT_CATEGORY_FILTER, $idProductCategoryFilter, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCategory Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCategory_Between(array $fkCategory)
    {
        return $this->filterByFkCategory($fkCategory, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCategorys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCategory_In(array $fkCategorys)
    {
        return $this->filterByFkCategory($fkCategorys, Criteria::IN);
    }

    /**
     * Filter the query on the fk_category column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCategory(1234); // WHERE fk_category = 1234
     * $query->filterByFkCategory(array(12, 34), Criteria::IN); // WHERE fk_category IN (12, 34)
     * $query->filterByFkCategory(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_category > 12
     * </code>
     *
     * @see       filterBySpyCategory()
     *
     * @param     mixed $fkCategory The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCategory($fkCategory = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCategory)) {
            $useMinMax = false;
            if (isset($fkCategory['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductCategoryFilterTableMap::COL_FK_CATEGORY, $fkCategory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCategory['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductCategoryFilterTableMap::COL_FK_CATEGORY, $fkCategory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCategory of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductCategoryFilterTableMap::COL_FK_CATEGORY, $fkCategory, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $filterDatas Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFilterData_In(array $filterDatas)
    {
        return $this->filterByFilterData($filterDatas, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $filterData Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFilterData_Like($filterData)
    {
        return $this->filterByFilterData($filterData, Criteria::LIKE);
    }

    /**
     * Filter the query on the filter_data column
     *
     * Example usage:
     * <code>
     * $query->filterByFilterData('fooValue');   // WHERE filter_data = 'fooValue'
     * $query->filterByFilterData('%fooValue%', Criteria::LIKE); // WHERE filter_data LIKE '%fooValue%'
     * $query->filterByFilterData([1, 'foo'], Criteria::IN); // WHERE filter_data IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $filterData The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFilterData($filterData = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $filterData = str_replace('*', '%', $filterData);
        }

        if (is_array($filterData) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$filterData of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyProductCategoryFilterTableMap::COL_FILTER_DATA, $filterData, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\Category\Persistence\SpyCategory object
     *
     * @param \Orm\Zed\Category\Persistence\SpyCategory|ObjectCollection $spyCategory The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyCategory($spyCategory, ?string $comparison = null)
    {
        if ($spyCategory instanceof \Orm\Zed\Category\Persistence\SpyCategory) {
            return $this
                ->addUsingAlias(SpyProductCategoryFilterTableMap::COL_FK_CATEGORY, $spyCategory->getIdCategory(), $comparison);
        } elseif ($spyCategory instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyProductCategoryFilterTableMap::COL_FK_CATEGORY, $spyCategory->toKeyValue('PrimaryKey', 'IdCategory'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyCategory() only accepts arguments of type \Orm\Zed\Category\Persistence\SpyCategory or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCategory relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyCategory(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCategory');

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
            $this->addJoinObject($join, 'SpyCategory');
        }

        return $this;
    }

    /**
     * Use the SpyCategory relation SpyCategory object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryQuery A secondary query class using the current class as primary query
     */
    public function useSpyCategoryQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyCategory($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCategory', '\Orm\Zed\Category\Persistence\SpyCategoryQuery');
    }

    /**
     * Use the SpyCategory relation SpyCategory object
     *
     * @param callable(\Orm\Zed\Category\Persistence\SpyCategoryQuery):\Orm\Zed\Category\Persistence\SpyCategoryQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCategoryQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyCategoryQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyCategory table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryQuery The inner query object of the EXISTS statement
     */
    public function useSpyCategoryExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Category\Persistence\SpyCategoryQuery */
        $q = $this->useExistsQuery('SpyCategory', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyCategory table for a NOT EXISTS query.
     *
     * @see useSpyCategoryExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCategoryNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Category\Persistence\SpyCategoryQuery */
        $q = $this->useExistsQuery('SpyCategory', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyCategory table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryQuery The inner query object of the IN statement
     */
    public function useInSpyCategoryQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Category\Persistence\SpyCategoryQuery */
        $q = $this->useInQuery('SpyCategory', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyCategory table for a NOT IN query.
     *
     * @see useSpyCategoryInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Category\Persistence\SpyCategoryQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyCategoryQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Category\Persistence\SpyCategoryQuery */
        $q = $this->useInQuery('SpyCategory', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyProductCategoryFilter $spyProductCategoryFilter Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyProductCategoryFilter = null)
    {
        if ($spyProductCategoryFilter) {
            $this->addUsingAlias(SpyProductCategoryFilterTableMap::COL_ID_PRODUCT_CATEGORY_FILTER, $spyProductCategoryFilter->getIdProductCategoryFilter(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_category_filter table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductCategoryFilterTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductCategoryFilterTableMap::clearInstancePool();
            SpyProductCategoryFilterTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductCategoryFilterTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductCategoryFilterTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductCategoryFilterTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductCategoryFilterTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
