<?php

namespace Orm\Zed\ProductLabel\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductLabel\Persistence\SpyProductLabelProductAbstract as ChildSpyProductLabelProductAbstract;
use Orm\Zed\ProductLabel\Persistence\SpyProductLabelProductAbstractQuery as ChildSpyProductLabelProductAbstractQuery;
use Orm\Zed\ProductLabel\Persistence\Map\SpyProductLabelProductAbstractTableMap;
use Orm\Zed\Product\Persistence\SpyProductAbstract;
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
 * Base class that represents a query for the `spy_product_label_product_abstract` table.
 *
 * @method     ChildSpyProductLabelProductAbstractQuery orderByIdProductLabelProductAbstract($order = Criteria::ASC) Order by the id_product_label_product_abstract column
 * @method     ChildSpyProductLabelProductAbstractQuery orderByFkProductAbstract($order = Criteria::ASC) Order by the fk_product_abstract column
 * @method     ChildSpyProductLabelProductAbstractQuery orderByFkProductLabel($order = Criteria::ASC) Order by the fk_product_label column
 *
 * @method     ChildSpyProductLabelProductAbstractQuery groupByIdProductLabelProductAbstract() Group by the id_product_label_product_abstract column
 * @method     ChildSpyProductLabelProductAbstractQuery groupByFkProductAbstract() Group by the fk_product_abstract column
 * @method     ChildSpyProductLabelProductAbstractQuery groupByFkProductLabel() Group by the fk_product_label column
 *
 * @method     ChildSpyProductLabelProductAbstractQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductLabelProductAbstractQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductLabelProductAbstractQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductLabelProductAbstractQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductLabelProductAbstractQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductLabelProductAbstractQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductLabelProductAbstractQuery leftJoinSpyProductLabel($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductLabel relation
 * @method     ChildSpyProductLabelProductAbstractQuery rightJoinSpyProductLabel($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductLabel relation
 * @method     ChildSpyProductLabelProductAbstractQuery innerJoinSpyProductLabel($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductLabel relation
 *
 * @method     ChildSpyProductLabelProductAbstractQuery joinWithSpyProductLabel($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductLabel relation
 *
 * @method     ChildSpyProductLabelProductAbstractQuery leftJoinWithSpyProductLabel() Adds a LEFT JOIN clause and with to the query using the SpyProductLabel relation
 * @method     ChildSpyProductLabelProductAbstractQuery rightJoinWithSpyProductLabel() Adds a RIGHT JOIN clause and with to the query using the SpyProductLabel relation
 * @method     ChildSpyProductLabelProductAbstractQuery innerJoinWithSpyProductLabel() Adds a INNER JOIN clause and with to the query using the SpyProductLabel relation
 *
 * @method     ChildSpyProductLabelProductAbstractQuery leftJoinSpyProductAbstract($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductAbstract relation
 * @method     ChildSpyProductLabelProductAbstractQuery rightJoinSpyProductAbstract($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductAbstract relation
 * @method     ChildSpyProductLabelProductAbstractQuery innerJoinSpyProductAbstract($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductAbstract relation
 *
 * @method     ChildSpyProductLabelProductAbstractQuery joinWithSpyProductAbstract($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductAbstract relation
 *
 * @method     ChildSpyProductLabelProductAbstractQuery leftJoinWithSpyProductAbstract() Adds a LEFT JOIN clause and with to the query using the SpyProductAbstract relation
 * @method     ChildSpyProductLabelProductAbstractQuery rightJoinWithSpyProductAbstract() Adds a RIGHT JOIN clause and with to the query using the SpyProductAbstract relation
 * @method     ChildSpyProductLabelProductAbstractQuery innerJoinWithSpyProductAbstract() Adds a INNER JOIN clause and with to the query using the SpyProductAbstract relation
 *
 * @method     \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery|\Orm\Zed\Product\Persistence\SpyProductAbstractQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductLabelProductAbstract|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyProductLabelProductAbstract matching the query
 * @method     ChildSpyProductLabelProductAbstract findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyProductLabelProductAbstract matching the query, or a new ChildSpyProductLabelProductAbstract object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductLabelProductAbstract|null findOneByIdProductLabelProductAbstract(int $id_product_label_product_abstract) Return the first ChildSpyProductLabelProductAbstract filtered by the id_product_label_product_abstract column
 * @method     ChildSpyProductLabelProductAbstract|null findOneByFkProductAbstract(int $fk_product_abstract) Return the first ChildSpyProductLabelProductAbstract filtered by the fk_product_abstract column
 * @method     ChildSpyProductLabelProductAbstract|null findOneByFkProductLabel(int $fk_product_label) Return the first ChildSpyProductLabelProductAbstract filtered by the fk_product_label column
 *
 * @method     ChildSpyProductLabelProductAbstract requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyProductLabelProductAbstract by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductLabelProductAbstract requireOne(?ConnectionInterface $con = null) Return the first ChildSpyProductLabelProductAbstract matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductLabelProductAbstract requireOneByIdProductLabelProductAbstract(int $id_product_label_product_abstract) Return the first ChildSpyProductLabelProductAbstract filtered by the id_product_label_product_abstract column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductLabelProductAbstract requireOneByFkProductAbstract(int $fk_product_abstract) Return the first ChildSpyProductLabelProductAbstract filtered by the fk_product_abstract column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductLabelProductAbstract requireOneByFkProductLabel(int $fk_product_label) Return the first ChildSpyProductLabelProductAbstract filtered by the fk_product_label column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductLabelProductAbstract[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyProductLabelProductAbstract objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyProductLabelProductAbstract> find(?ConnectionInterface $con = null) Return ChildSpyProductLabelProductAbstract objects based on current ModelCriteria
 *
 * @method     ChildSpyProductLabelProductAbstract[]|Collection findByIdProductLabelProductAbstract(int|array<int> $id_product_label_product_abstract) Return ChildSpyProductLabelProductAbstract objects filtered by the id_product_label_product_abstract column
 * @psalm-method Collection&\Traversable<ChildSpyProductLabelProductAbstract> findByIdProductLabelProductAbstract(int|array<int> $id_product_label_product_abstract) Return ChildSpyProductLabelProductAbstract objects filtered by the id_product_label_product_abstract column
 * @method     ChildSpyProductLabelProductAbstract[]|Collection findByFkProductAbstract(int|array<int> $fk_product_abstract) Return ChildSpyProductLabelProductAbstract objects filtered by the fk_product_abstract column
 * @psalm-method Collection&\Traversable<ChildSpyProductLabelProductAbstract> findByFkProductAbstract(int|array<int> $fk_product_abstract) Return ChildSpyProductLabelProductAbstract objects filtered by the fk_product_abstract column
 * @method     ChildSpyProductLabelProductAbstract[]|Collection findByFkProductLabel(int|array<int> $fk_product_label) Return ChildSpyProductLabelProductAbstract objects filtered by the fk_product_label column
 * @psalm-method Collection&\Traversable<ChildSpyProductLabelProductAbstract> findByFkProductLabel(int|array<int> $fk_product_label) Return ChildSpyProductLabelProductAbstract objects filtered by the fk_product_label column
 *
 * @method     ChildSpyProductLabelProductAbstract[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductLabelProductAbstract> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyProductLabelProductAbstractQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ProductLabel\Persistence\Base\SpyProductLabelProductAbstractQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ProductLabel\\Persistence\\SpyProductLabelProductAbstract', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductLabelProductAbstractQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductLabelProductAbstractQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyProductLabelProductAbstractQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductLabelProductAbstractQuery();
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
     * @return ChildSpyProductLabelProductAbstract|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductLabelProductAbstractTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductLabelProductAbstract A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_product_label_product_abstract`, `fk_product_abstract`, `fk_product_label` FROM `spy_product_label_product_abstract` WHERE `id_product_label_product_abstract` = :p0';
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
            /** @var ChildSpyProductLabelProductAbstract $obj */
            $obj = new ChildSpyProductLabelProductAbstract();
            $obj->hydrate($row);
            SpyProductLabelProductAbstractTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductLabelProductAbstract|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_ID_PRODUCT_LABEL_PRODUCT_ABSTRACT, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_ID_PRODUCT_LABEL_PRODUCT_ABSTRACT, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductLabelProductAbstract Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductLabelProductAbstract_Between(array $idProductLabelProductAbstract)
    {
        return $this->filterByIdProductLabelProductAbstract($idProductLabelProductAbstract, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductLabelProductAbstracts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductLabelProductAbstract_In(array $idProductLabelProductAbstracts)
    {
        return $this->filterByIdProductLabelProductAbstract($idProductLabelProductAbstracts, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_label_product_abstract column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductLabelProductAbstract(1234); // WHERE id_product_label_product_abstract = 1234
     * $query->filterByIdProductLabelProductAbstract(array(12, 34), Criteria::IN); // WHERE id_product_label_product_abstract IN (12, 34)
     * $query->filterByIdProductLabelProductAbstract(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_label_product_abstract > 12
     * </code>
     *
     * @param     mixed $idProductLabelProductAbstract The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductLabelProductAbstract($idProductLabelProductAbstract = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductLabelProductAbstract)) {
            $useMinMax = false;
            if (isset($idProductLabelProductAbstract['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_ID_PRODUCT_LABEL_PRODUCT_ABSTRACT, $idProductLabelProductAbstract['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductLabelProductAbstract['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_ID_PRODUCT_LABEL_PRODUCT_ABSTRACT, $idProductLabelProductAbstract['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductLabelProductAbstract of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_ID_PRODUCT_LABEL_PRODUCT_ABSTRACT, $idProductLabelProductAbstract, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductAbstract Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAbstract_Between(array $fkProductAbstract)
    {
        return $this->filterByFkProductAbstract($fkProductAbstract, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductAbstracts Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductAbstract_In(array $fkProductAbstracts)
    {
        return $this->filterByFkProductAbstract($fkProductAbstracts, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_abstract column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductAbstract(1234); // WHERE fk_product_abstract = 1234
     * $query->filterByFkProductAbstract(array(12, 34), Criteria::IN); // WHERE fk_product_abstract IN (12, 34)
     * $query->filterByFkProductAbstract(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_abstract > 12
     * </code>
     *
     * @see       filterBySpyProductAbstract()
     *
     * @param     mixed $fkProductAbstract The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductAbstract($fkProductAbstract = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductAbstract)) {
            $useMinMax = false;
            if (isset($fkProductAbstract['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_FK_PRODUCT_ABSTRACT, $fkProductAbstract['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductAbstract['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_FK_PRODUCT_ABSTRACT, $fkProductAbstract['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductAbstract of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_FK_PRODUCT_ABSTRACT, $fkProductAbstract, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkProductLabel Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductLabel_Between(array $fkProductLabel)
    {
        return $this->filterByFkProductLabel($fkProductLabel, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkProductLabels Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkProductLabel_In(array $fkProductLabels)
    {
        return $this->filterByFkProductLabel($fkProductLabels, Criteria::IN);
    }

    /**
     * Filter the query on the fk_product_label column
     *
     * Example usage:
     * <code>
     * $query->filterByFkProductLabel(1234); // WHERE fk_product_label = 1234
     * $query->filterByFkProductLabel(array(12, 34), Criteria::IN); // WHERE fk_product_label IN (12, 34)
     * $query->filterByFkProductLabel(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_product_label > 12
     * </code>
     *
     * @see       filterBySpyProductLabel()
     *
     * @param     mixed $fkProductLabel The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkProductLabel($fkProductLabel = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkProductLabel)) {
            $useMinMax = false;
            if (isset($fkProductLabel['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_FK_PRODUCT_LABEL, $fkProductLabel['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkProductLabel['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_FK_PRODUCT_LABEL, $fkProductLabel['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkProductLabel of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_FK_PRODUCT_LABEL, $fkProductLabel, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\ProductLabel\Persistence\SpyProductLabel object
     *
     * @param \Orm\Zed\ProductLabel\Persistence\SpyProductLabel|ObjectCollection $spyProductLabel The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyProductLabel($spyProductLabel, ?string $comparison = null)
    {
        if ($spyProductLabel instanceof \Orm\Zed\ProductLabel\Persistence\SpyProductLabel) {
            return $this
                ->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_FK_PRODUCT_LABEL, $spyProductLabel->getIdProductLabel(), $comparison);
        } elseif ($spyProductLabel instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_FK_PRODUCT_LABEL, $spyProductLabel->toKeyValue('PrimaryKey', 'IdProductLabel'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyProductLabel() only accepts arguments of type \Orm\Zed\ProductLabel\Persistence\SpyProductLabel or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductLabel relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyProductLabel(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductLabel');

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
            $this->addJoinObject($join, 'SpyProductLabel');
        }

        return $this;
    }

    /**
     * Use the SpyProductLabel relation SpyProductLabel object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductLabelQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductLabel($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductLabel', '\Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery');
    }

    /**
     * Use the SpyProductLabel relation SpyProductLabel object
     *
     * @param callable(\Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery):\Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductLabelQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductLabelQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyProductLabel table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductLabelExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery */
        $q = $this->useExistsQuery('SpyProductLabel', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyProductLabel table for a NOT EXISTS query.
     *
     * @see useSpyProductLabelExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductLabelNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery */
        $q = $this->useExistsQuery('SpyProductLabel', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyProductLabel table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery The inner query object of the IN statement
     */
    public function useInSpyProductLabelQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery */
        $q = $this->useInQuery('SpyProductLabel', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyProductLabel table for a NOT IN query.
     *
     * @see useSpyProductLabelInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyProductLabelQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ProductLabel\Persistence\SpyProductLabelQuery */
        $q = $this->useInQuery('SpyProductLabel', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\Product\Persistence\SpyProductAbstract object
     *
     * @param \Orm\Zed\Product\Persistence\SpyProductAbstract|ObjectCollection $spyProductAbstract The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyProductAbstract($spyProductAbstract, ?string $comparison = null)
    {
        if ($spyProductAbstract instanceof \Orm\Zed\Product\Persistence\SpyProductAbstract) {
            return $this
                ->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_FK_PRODUCT_ABSTRACT, $spyProductAbstract->getIdProductAbstract(), $comparison);
        } elseif ($spyProductAbstract instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_FK_PRODUCT_ABSTRACT, $spyProductAbstract->toKeyValue('PrimaryKey', 'IdProductAbstract'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyProductAbstract() only accepts arguments of type \Orm\Zed\Product\Persistence\SpyProductAbstract or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductAbstract relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyProductAbstract(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductAbstract');

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
            $this->addJoinObject($join, 'SpyProductAbstract');
        }

        return $this;
    }

    /**
     * Use the SpyProductAbstract relation SpyProductAbstract object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductAbstractQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductAbstract($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductAbstract', '\Orm\Zed\Product\Persistence\SpyProductAbstractQuery');
    }

    /**
     * Use the SpyProductAbstract relation SpyProductAbstract object
     *
     * @param callable(\Orm\Zed\Product\Persistence\SpyProductAbstractQuery):\Orm\Zed\Product\Persistence\SpyProductAbstractQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductAbstractQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductAbstractQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyProductAbstract table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductAbstractExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAbstractQuery */
        $q = $this->useExistsQuery('SpyProductAbstract', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyProductAbstract table for a NOT EXISTS query.
     *
     * @see useSpyProductAbstractExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductAbstractNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAbstractQuery */
        $q = $this->useExistsQuery('SpyProductAbstract', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyProductAbstract table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery The inner query object of the IN statement
     */
    public function useInSpyProductAbstractQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAbstractQuery */
        $q = $this->useInQuery('SpyProductAbstract', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyProductAbstract table for a NOT IN query.
     *
     * @see useSpyProductAbstractInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\Product\Persistence\SpyProductAbstractQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyProductAbstractQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\Product\Persistence\SpyProductAbstractQuery */
        $q = $this->useInQuery('SpyProductAbstract', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyProductLabelProductAbstract $spyProductLabelProductAbstract Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyProductLabelProductAbstract = null)
    {
        if ($spyProductLabelProductAbstract) {
            $this->addUsingAlias(SpyProductLabelProductAbstractTableMap::COL_ID_PRODUCT_LABEL_PRODUCT_ABSTRACT, $spyProductLabelProductAbstract->getIdProductLabelProductAbstract(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_label_product_abstract table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductLabelProductAbstractTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductLabelProductAbstractTableMap::clearInstancePool();
            SpyProductLabelProductAbstractTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductLabelProductAbstractTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductLabelProductAbstractTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductLabelProductAbstractTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductLabelProductAbstractTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
