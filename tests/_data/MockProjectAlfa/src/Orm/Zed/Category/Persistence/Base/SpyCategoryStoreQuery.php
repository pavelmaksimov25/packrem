<?php

namespace Orm\Zed\Category\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\Category\Persistence\SpyCategoryStore as ChildSpyCategoryStore;
use Orm\Zed\Category\Persistence\SpyCategoryStoreQuery as ChildSpyCategoryStoreQuery;
use Orm\Zed\Category\Persistence\Map\SpyCategoryStoreTableMap;
use Orm\Zed\Store\Persistence\SpyStore;
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
 * Base class that represents a query for the `spy_category_store` table.
 *
 * @method     ChildSpyCategoryStoreQuery orderByIdCategoryStore($order = Criteria::ASC) Order by the id_category_store column
 * @method     ChildSpyCategoryStoreQuery orderByFkCategory($order = Criteria::ASC) Order by the fk_category column
 * @method     ChildSpyCategoryStoreQuery orderByFkStore($order = Criteria::ASC) Order by the fk_store column
 *
 * @method     ChildSpyCategoryStoreQuery groupByIdCategoryStore() Group by the id_category_store column
 * @method     ChildSpyCategoryStoreQuery groupByFkCategory() Group by the fk_category column
 * @method     ChildSpyCategoryStoreQuery groupByFkStore() Group by the fk_store column
 *
 * @method     ChildSpyCategoryStoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCategoryStoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCategoryStoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCategoryStoreQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCategoryStoreQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCategoryStoreQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCategoryStoreQuery leftJoinSpyCategory($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCategory relation
 * @method     ChildSpyCategoryStoreQuery rightJoinSpyCategory($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCategory relation
 * @method     ChildSpyCategoryStoreQuery innerJoinSpyCategory($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCategory relation
 *
 * @method     ChildSpyCategoryStoreQuery joinWithSpyCategory($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCategory relation
 *
 * @method     ChildSpyCategoryStoreQuery leftJoinWithSpyCategory() Adds a LEFT JOIN clause and with to the query using the SpyCategory relation
 * @method     ChildSpyCategoryStoreQuery rightJoinWithSpyCategory() Adds a RIGHT JOIN clause and with to the query using the SpyCategory relation
 * @method     ChildSpyCategoryStoreQuery innerJoinWithSpyCategory() Adds a INNER JOIN clause and with to the query using the SpyCategory relation
 *
 * @method     ChildSpyCategoryStoreQuery leftJoinSpyStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyStore relation
 * @method     ChildSpyCategoryStoreQuery rightJoinSpyStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyStore relation
 * @method     ChildSpyCategoryStoreQuery innerJoinSpyStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyStore relation
 *
 * @method     ChildSpyCategoryStoreQuery joinWithSpyStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyStore relation
 *
 * @method     ChildSpyCategoryStoreQuery leftJoinWithSpyStore() Adds a LEFT JOIN clause and with to the query using the SpyStore relation
 * @method     ChildSpyCategoryStoreQuery rightJoinWithSpyStore() Adds a RIGHT JOIN clause and with to the query using the SpyStore relation
 * @method     ChildSpyCategoryStoreQuery innerJoinWithSpyStore() Adds a INNER JOIN clause and with to the query using the SpyStore relation
 *
 * @method     \Orm\Zed\Category\Persistence\SpyCategoryQuery|\Orm\Zed\Store\Persistence\SpyStoreQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCategoryStore|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyCategoryStore matching the query
 * @method     ChildSpyCategoryStore findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyCategoryStore matching the query, or a new ChildSpyCategoryStore object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCategoryStore|null findOneByIdCategoryStore(int $id_category_store) Return the first ChildSpyCategoryStore filtered by the id_category_store column
 * @method     ChildSpyCategoryStore|null findOneByFkCategory(int $fk_category) Return the first ChildSpyCategoryStore filtered by the fk_category column
 * @method     ChildSpyCategoryStore|null findOneByFkStore(int $fk_store) Return the first ChildSpyCategoryStore filtered by the fk_store column
 *
 * @method     ChildSpyCategoryStore requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyCategoryStore by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryStore requireOne(?ConnectionInterface $con = null) Return the first ChildSpyCategoryStore matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCategoryStore requireOneByIdCategoryStore(int $id_category_store) Return the first ChildSpyCategoryStore filtered by the id_category_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryStore requireOneByFkCategory(int $fk_category) Return the first ChildSpyCategoryStore filtered by the fk_category column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCategoryStore requireOneByFkStore(int $fk_store) Return the first ChildSpyCategoryStore filtered by the fk_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCategoryStore[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyCategoryStore objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyCategoryStore> find(?ConnectionInterface $con = null) Return ChildSpyCategoryStore objects based on current ModelCriteria
 *
 * @method     ChildSpyCategoryStore[]|Collection findByIdCategoryStore(int|array<int> $id_category_store) Return ChildSpyCategoryStore objects filtered by the id_category_store column
 * @psalm-method Collection&\Traversable<ChildSpyCategoryStore> findByIdCategoryStore(int|array<int> $id_category_store) Return ChildSpyCategoryStore objects filtered by the id_category_store column
 * @method     ChildSpyCategoryStore[]|Collection findByFkCategory(int|array<int> $fk_category) Return ChildSpyCategoryStore objects filtered by the fk_category column
 * @psalm-method Collection&\Traversable<ChildSpyCategoryStore> findByFkCategory(int|array<int> $fk_category) Return ChildSpyCategoryStore objects filtered by the fk_category column
 * @method     ChildSpyCategoryStore[]|Collection findByFkStore(int|array<int> $fk_store) Return ChildSpyCategoryStore objects filtered by the fk_store column
 * @psalm-method Collection&\Traversable<ChildSpyCategoryStore> findByFkStore(int|array<int> $fk_store) Return ChildSpyCategoryStore objects filtered by the fk_store column
 *
 * @method     ChildSpyCategoryStore[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCategoryStore> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyCategoryStoreQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Category\Persistence\Base\SpyCategoryStoreQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Category\\Persistence\\SpyCategoryStore', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCategoryStoreQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCategoryStoreQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyCategoryStoreQuery) {
            return $criteria;
        }
        $query = new ChildSpyCategoryStoreQuery();
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
     * @return ChildSpyCategoryStore|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCategoryStoreTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCategoryStore A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT id_category_store, fk_category, fk_store FROM spy_category_store WHERE id_category_store = :p0';
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
            /** @var ChildSpyCategoryStore $obj */
            $obj = new ChildSpyCategoryStore();
            $obj->hydrate($row);
            SpyCategoryStoreTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCategoryStore|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyCategoryStoreTableMap::COL_ID_CATEGORY_STORE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyCategoryStoreTableMap::COL_ID_CATEGORY_STORE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCategoryStore Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCategoryStore_Between(array $idCategoryStore)
    {
        return $this->filterByIdCategoryStore($idCategoryStore, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCategoryStores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCategoryStore_In(array $idCategoryStores)
    {
        return $this->filterByIdCategoryStore($idCategoryStores, Criteria::IN);
    }

    /**
     * Filter the query on the id_category_store column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCategoryStore(1234); // WHERE id_category_store = 1234
     * $query->filterByIdCategoryStore(array(12, 34), Criteria::IN); // WHERE id_category_store IN (12, 34)
     * $query->filterByIdCategoryStore(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_category_store > 12
     * </code>
     *
     * @param     mixed $idCategoryStore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCategoryStore($idCategoryStore = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCategoryStore)) {
            $useMinMax = false;
            if (isset($idCategoryStore['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryStoreTableMap::COL_ID_CATEGORY_STORE, $idCategoryStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCategoryStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryStoreTableMap::COL_ID_CATEGORY_STORE, $idCategoryStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCategoryStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCategoryStoreTableMap::COL_ID_CATEGORY_STORE, $idCategoryStore, $comparison);

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
                $this->addUsingAlias(SpyCategoryStoreTableMap::COL_FK_CATEGORY, $fkCategory['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCategory['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryStoreTableMap::COL_FK_CATEGORY, $fkCategory['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCategory of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCategoryStoreTableMap::COL_FK_CATEGORY, $fkCategory, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkStore Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStore_Between(array $fkStore)
    {
        return $this->filterByFkStore($fkStore, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkStores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkStore_In(array $fkStores)
    {
        return $this->filterByFkStore($fkStores, Criteria::IN);
    }

    /**
     * Filter the query on the fk_store column
     *
     * Example usage:
     * <code>
     * $query->filterByFkStore(1234); // WHERE fk_store = 1234
     * $query->filterByFkStore(array(12, 34), Criteria::IN); // WHERE fk_store IN (12, 34)
     * $query->filterByFkStore(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_store > 12
     * </code>
     *
     * @see       filterBySpyStore()
     *
     * @param     mixed $fkStore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkStore($fkStore = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkStore)) {
            $useMinMax = false;
            if (isset($fkStore['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryStoreTableMap::COL_FK_STORE, $fkStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCategoryStoreTableMap::COL_FK_STORE, $fkStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCategoryStoreTableMap::COL_FK_STORE, $fkStore, $comparison);

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
                ->addUsingAlias(SpyCategoryStoreTableMap::COL_FK_CATEGORY, $spyCategory->getIdCategory(), $comparison);
        } elseif ($spyCategory instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyCategoryStoreTableMap::COL_FK_CATEGORY, $spyCategory->toKeyValue('PrimaryKey', 'IdCategory'), $comparison);

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
    public function joinSpyCategory(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
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
    public function useSpyCategoryQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
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
        ?string $joinType = Criteria::INNER_JOIN
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
     * Filter the query by a related \Orm\Zed\Store\Persistence\SpyStore object
     *
     * @param \Orm\Zed\Store\Persistence\SpyStore|ObjectCollection $spyStore The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyStore($spyStore, ?string $comparison = null)
    {
        if ($spyStore instanceof \Orm\Zed\Store\Persistence\SpyStore) {
            return $this
                ->addUsingAlias(SpyCategoryStoreTableMap::COL_FK_STORE, $spyStore->getIdStore(), $comparison);
        } elseif ($spyStore instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyCategoryStoreTableMap::COL_FK_STORE, $spyStore->toKeyValue('PrimaryKey', 'IdStore'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyStore() only accepts arguments of type \Orm\Zed\Store\Persistence\SpyStore or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyStore relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyStore(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyStore');

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
            $this->addJoinObject($join, 'SpyStore');
        }

        return $this;
    }

    /**
     * Use the SpyStore relation SpyStore object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery A secondary query class using the current class as primary query
     */
    public function useSpyStoreQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyStore($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyStore', '\Orm\Zed\Store\Persistence\SpyStoreQuery');
    }

    /**
     * Use the SpyStore relation SpyStore object
     *
     * @param callable(\Orm\Zed\Store\Persistence\SpyStoreQuery):\Orm\Zed\Store\Persistence\SpyStoreQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyStoreQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyStoreQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyStore table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery The inner query object of the EXISTS statement
     */
    public function useSpyStoreExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Store\Persistence\SpyStoreQuery */
        $q = $this->useExistsQuery('SpyStore', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyStore table for a NOT EXISTS query.
     *
     * @see useSpyStoreExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyStoreNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Store\Persistence\SpyStoreQuery */
        $q = $this->useExistsQuery('SpyStore', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyStore table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery The inner query object of the IN statement
     */
    public function useInSpyStoreQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Store\Persistence\SpyStoreQuery */
        $q = $this->useInQuery('SpyStore', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyStore table for a NOT IN query.
     *
     * @see useSpyStoreInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Store\Persistence\SpyStoreQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyStoreQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Store\Persistence\SpyStoreQuery */
        $q = $this->useInQuery('SpyStore', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyCategoryStore $spyCategoryStore Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyCategoryStore = null)
    {
        if ($spyCategoryStore) {
            $this->addUsingAlias(SpyCategoryStoreTableMap::COL_ID_CATEGORY_STORE, $spyCategoryStore->getIdCategoryStore(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_category_store table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCategoryStoreTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCategoryStoreTableMap::clearInstancePool();
            SpyCategoryStoreTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCategoryStoreTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCategoryStoreTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCategoryStoreTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCategoryStoreTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
