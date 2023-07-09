<?php

namespace Orm\Zed\Product\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttribute;
use Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMap;
use Orm\Zed\Product\Persistence\SpyProductAttributeKey as ChildSpyProductAttributeKey;
use Orm\Zed\Product\Persistence\SpyProductAttributeKeyQuery as ChildSpyProductAttributeKeyQuery;
use Orm\Zed\Product\Persistence\Map\SpyProductAttributeKeyTableMap;
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
 * Base class that represents a query for the `spy_product_attribute_key` table.
 *
 * @method     ChildSpyProductAttributeKeyQuery orderByIdProductAttributeKey($order = Criteria::ASC) Order by the id_product_attribute_key column
 * @method     ChildSpyProductAttributeKeyQuery orderByIsSuper($order = Criteria::ASC) Order by the is_super column
 * @method     ChildSpyProductAttributeKeyQuery orderByKey($order = Criteria::ASC) Order by the key column
 *
 * @method     ChildSpyProductAttributeKeyQuery groupByIdProductAttributeKey() Group by the id_product_attribute_key column
 * @method     ChildSpyProductAttributeKeyQuery groupByIsSuper() Group by the is_super column
 * @method     ChildSpyProductAttributeKeyQuery groupByKey() Group by the key column
 *
 * @method     ChildSpyProductAttributeKeyQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyProductAttributeKeyQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyProductAttributeKeyQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyProductAttributeKeyQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyProductAttributeKeyQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyProductAttributeKeyQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyProductAttributeKeyQuery leftJoinSpyProductManagementAttribute($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductManagementAttribute relation
 * @method     ChildSpyProductAttributeKeyQuery rightJoinSpyProductManagementAttribute($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductManagementAttribute relation
 * @method     ChildSpyProductAttributeKeyQuery innerJoinSpyProductManagementAttribute($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductManagementAttribute relation
 *
 * @method     ChildSpyProductAttributeKeyQuery joinWithSpyProductManagementAttribute($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductManagementAttribute relation
 *
 * @method     ChildSpyProductAttributeKeyQuery leftJoinWithSpyProductManagementAttribute() Adds a LEFT JOIN clause and with to the query using the SpyProductManagementAttribute relation
 * @method     ChildSpyProductAttributeKeyQuery rightJoinWithSpyProductManagementAttribute() Adds a RIGHT JOIN clause and with to the query using the SpyProductManagementAttribute relation
 * @method     ChildSpyProductAttributeKeyQuery innerJoinWithSpyProductManagementAttribute() Adds a INNER JOIN clause and with to the query using the SpyProductManagementAttribute relation
 *
 * @method     ChildSpyProductAttributeKeyQuery leftJoinSpyProductSearchAttributeMap($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductSearchAttributeMap relation
 * @method     ChildSpyProductAttributeKeyQuery rightJoinSpyProductSearchAttributeMap($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductSearchAttributeMap relation
 * @method     ChildSpyProductAttributeKeyQuery innerJoinSpyProductSearchAttributeMap($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductSearchAttributeMap relation
 *
 * @method     ChildSpyProductAttributeKeyQuery joinWithSpyProductSearchAttributeMap($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductSearchAttributeMap relation
 *
 * @method     ChildSpyProductAttributeKeyQuery leftJoinWithSpyProductSearchAttributeMap() Adds a LEFT JOIN clause and with to the query using the SpyProductSearchAttributeMap relation
 * @method     ChildSpyProductAttributeKeyQuery rightJoinWithSpyProductSearchAttributeMap() Adds a RIGHT JOIN clause and with to the query using the SpyProductSearchAttributeMap relation
 * @method     ChildSpyProductAttributeKeyQuery innerJoinWithSpyProductSearchAttributeMap() Adds a INNER JOIN clause and with to the query using the SpyProductSearchAttributeMap relation
 *
 * @method     ChildSpyProductAttributeKeyQuery leftJoinSpyProductSearchAttribute($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyProductSearchAttribute relation
 * @method     ChildSpyProductAttributeKeyQuery rightJoinSpyProductSearchAttribute($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyProductSearchAttribute relation
 * @method     ChildSpyProductAttributeKeyQuery innerJoinSpyProductSearchAttribute($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyProductSearchAttribute relation
 *
 * @method     ChildSpyProductAttributeKeyQuery joinWithSpyProductSearchAttribute($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyProductSearchAttribute relation
 *
 * @method     ChildSpyProductAttributeKeyQuery leftJoinWithSpyProductSearchAttribute() Adds a LEFT JOIN clause and with to the query using the SpyProductSearchAttribute relation
 * @method     ChildSpyProductAttributeKeyQuery rightJoinWithSpyProductSearchAttribute() Adds a RIGHT JOIN clause and with to the query using the SpyProductSearchAttribute relation
 * @method     ChildSpyProductAttributeKeyQuery innerJoinWithSpyProductSearchAttribute() Adds a INNER JOIN clause and with to the query using the SpyProductSearchAttribute relation
 *
 * @method     \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery|\Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery|\Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyProductAttributeKey|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyProductAttributeKey matching the query
 * @method     ChildSpyProductAttributeKey findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyProductAttributeKey matching the query, or a new ChildSpyProductAttributeKey object populated from the query conditions when no match is found
 *
 * @method     ChildSpyProductAttributeKey|null findOneByIdProductAttributeKey(int $id_product_attribute_key) Return the first ChildSpyProductAttributeKey filtered by the id_product_attribute_key column
 * @method     ChildSpyProductAttributeKey|null findOneByIsSuper(boolean $is_super) Return the first ChildSpyProductAttributeKey filtered by the is_super column
 * @method     ChildSpyProductAttributeKey|null findOneByKey(string $key) Return the first ChildSpyProductAttributeKey filtered by the key column
 *
 * @method     ChildSpyProductAttributeKey requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyProductAttributeKey by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductAttributeKey requireOne(?ConnectionInterface $con = null) Return the first ChildSpyProductAttributeKey matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductAttributeKey requireOneByIdProductAttributeKey(int $id_product_attribute_key) Return the first ChildSpyProductAttributeKey filtered by the id_product_attribute_key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductAttributeKey requireOneByIsSuper(boolean $is_super) Return the first ChildSpyProductAttributeKey filtered by the is_super column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyProductAttributeKey requireOneByKey(string $key) Return the first ChildSpyProductAttributeKey filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyProductAttributeKey[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyProductAttributeKey objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyProductAttributeKey> find(?ConnectionInterface $con = null) Return ChildSpyProductAttributeKey objects based on current ModelCriteria
 *
 * @method     ChildSpyProductAttributeKey[]|Collection findByIdProductAttributeKey(int|array<int> $id_product_attribute_key) Return ChildSpyProductAttributeKey objects filtered by the id_product_attribute_key column
 * @psalm-method Collection&\Traversable<ChildSpyProductAttributeKey> findByIdProductAttributeKey(int|array<int> $id_product_attribute_key) Return ChildSpyProductAttributeKey objects filtered by the id_product_attribute_key column
 * @method     ChildSpyProductAttributeKey[]|Collection findByIsSuper(boolean|array<boolean> $is_super) Return ChildSpyProductAttributeKey objects filtered by the is_super column
 * @psalm-method Collection&\Traversable<ChildSpyProductAttributeKey> findByIsSuper(boolean|array<boolean> $is_super) Return ChildSpyProductAttributeKey objects filtered by the is_super column
 * @method     ChildSpyProductAttributeKey[]|Collection findByKey(string|array<string> $key) Return ChildSpyProductAttributeKey objects filtered by the key column
 * @psalm-method Collection&\Traversable<ChildSpyProductAttributeKey> findByKey(string|array<string> $key) Return ChildSpyProductAttributeKey objects filtered by the key column
 *
 * @method     ChildSpyProductAttributeKey[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyProductAttributeKey> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyProductAttributeKeyQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\Product\Persistence\Base\SpyProductAttributeKeyQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\Product\\Persistence\\SpyProductAttributeKey', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyProductAttributeKeyQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyProductAttributeKeyQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyProductAttributeKeyQuery) {
            return $criteria;
        }
        $query = new ChildSpyProductAttributeKeyQuery();
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
     * @return ChildSpyProductAttributeKey|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyProductAttributeKeyTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyProductAttributeKey A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_product_attribute_key`, `is_super`, `key` FROM `spy_product_attribute_key` WHERE `id_product_attribute_key` = :p0';
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
            /** @var ChildSpyProductAttributeKey $obj */
            $obj = new ChildSpyProductAttributeKey();
            $obj->hydrate($row);
            SpyProductAttributeKeyTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyProductAttributeKey|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyProductAttributeKeyTableMap::COL_ID_PRODUCT_ATTRIBUTE_KEY, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyProductAttributeKeyTableMap::COL_ID_PRODUCT_ATTRIBUTE_KEY, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idProductAttributeKey Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductAttributeKey_Between(array $idProductAttributeKey)
    {
        return $this->filterByIdProductAttributeKey($idProductAttributeKey, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idProductAttributeKeys Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdProductAttributeKey_In(array $idProductAttributeKeys)
    {
        return $this->filterByIdProductAttributeKey($idProductAttributeKeys, Criteria::IN);
    }

    /**
     * Filter the query on the id_product_attribute_key column
     *
     * Example usage:
     * <code>
     * $query->filterByIdProductAttributeKey(1234); // WHERE id_product_attribute_key = 1234
     * $query->filterByIdProductAttributeKey(array(12, 34), Criteria::IN); // WHERE id_product_attribute_key IN (12, 34)
     * $query->filterByIdProductAttributeKey(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_product_attribute_key > 12
     * </code>
     *
     * @param     mixed $idProductAttributeKey The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdProductAttributeKey($idProductAttributeKey = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idProductAttributeKey)) {
            $useMinMax = false;
            if (isset($idProductAttributeKey['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductAttributeKeyTableMap::COL_ID_PRODUCT_ATTRIBUTE_KEY, $idProductAttributeKey['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idProductAttributeKey['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyProductAttributeKeyTableMap::COL_ID_PRODUCT_ATTRIBUTE_KEY, $idProductAttributeKey['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idProductAttributeKey of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyProductAttributeKeyTableMap::COL_ID_PRODUCT_ATTRIBUTE_KEY, $idProductAttributeKey, $comparison);

        return $query;
    }

    /**
     * Filter the query on the is_super column
     *
     * Example usage:
     * <code>
     * $query->filterByIsSuper(true); // WHERE is_super = true
     * $query->filterByIsSuper('yes'); // WHERE is_super = true
     * </code>
     *
     * @param     bool|string $isSuper The value to use as filter.
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
    public function filterByIsSuper($isSuper = null, $comparison = Criteria::EQUAL)
    {
        if (is_string($isSuper)) {
            $isSuper = in_array(strtolower($isSuper), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
        }

        $query = $this->addUsingAlias(SpyProductAttributeKeyTableMap::COL_IS_SUPER, $isSuper, $comparison);

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

        $query = $this->addUsingAlias(SpyProductAttributeKeyTableMap::COL_KEY, $key, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute object
     *
     * @param \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute|ObjectCollection $spyProductManagementAttribute the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyProductManagementAttribute($spyProductManagementAttribute, ?string $comparison = null)
    {
        if ($spyProductManagementAttribute instanceof \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute) {
            $this
                ->addUsingAlias(SpyProductAttributeKeyTableMap::COL_ID_PRODUCT_ATTRIBUTE_KEY, $spyProductManagementAttribute->getFkProductAttributeKey(), $comparison);

            return $this;
        } elseif ($spyProductManagementAttribute instanceof ObjectCollection) {
            $this
                ->useSpyProductManagementAttributeQuery()
                ->filterByPrimaryKeys($spyProductManagementAttribute->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySpyProductManagementAttribute() only accepts arguments of type \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttribute or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductManagementAttribute relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyProductManagementAttribute(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductManagementAttribute');

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
            $this->addJoinObject($join, 'SpyProductManagementAttribute');
        }

        return $this;
    }

    /**
     * Use the SpyProductManagementAttribute relation SpyProductManagementAttribute object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductManagementAttributeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductManagementAttribute($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductManagementAttribute', '\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery');
    }

    /**
     * Use the SpyProductManagementAttribute relation SpyProductManagementAttribute object
     *
     * @param callable(\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery):\Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductManagementAttributeQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductManagementAttributeQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyProductManagementAttribute table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductManagementAttributeExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery */
        $q = $this->useExistsQuery('SpyProductManagementAttribute', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyProductManagementAttribute table for a NOT EXISTS query.
     *
     * @see useSpyProductManagementAttributeExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductManagementAttributeNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery */
        $q = $this->useExistsQuery('SpyProductManagementAttribute', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyProductManagementAttribute table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery The inner query object of the IN statement
     */
    public function useInSpyProductManagementAttributeQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery */
        $q = $this->useInQuery('SpyProductManagementAttribute', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyProductManagementAttribute table for a NOT IN query.
     *
     * @see useSpyProductManagementAttributeInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyProductManagementAttributeQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ProductAttribute\Persistence\SpyProductManagementAttributeQuery */
        $q = $this->useInQuery('SpyProductManagementAttribute', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMap object
     *
     * @param \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMap|ObjectCollection $spyProductSearchAttributeMap the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyProductSearchAttributeMap($spyProductSearchAttributeMap, ?string $comparison = null)
    {
        if ($spyProductSearchAttributeMap instanceof \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMap) {
            $this
                ->addUsingAlias(SpyProductAttributeKeyTableMap::COL_ID_PRODUCT_ATTRIBUTE_KEY, $spyProductSearchAttributeMap->getFkProductAttributeKey(), $comparison);

            return $this;
        } elseif ($spyProductSearchAttributeMap instanceof ObjectCollection) {
            $this
                ->useSpyProductSearchAttributeMapQuery()
                ->filterByPrimaryKeys($spyProductSearchAttributeMap->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySpyProductSearchAttributeMap() only accepts arguments of type \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMap or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductSearchAttributeMap relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyProductSearchAttributeMap(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductSearchAttributeMap');

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
            $this->addJoinObject($join, 'SpyProductSearchAttributeMap');
        }

        return $this;
    }

    /**
     * Use the SpyProductSearchAttributeMap relation SpyProductSearchAttributeMap object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductSearchAttributeMapQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductSearchAttributeMap($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductSearchAttributeMap', '\Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery');
    }

    /**
     * Use the SpyProductSearchAttributeMap relation SpyProductSearchAttributeMap object
     *
     * @param callable(\Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery):\Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductSearchAttributeMapQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductSearchAttributeMapQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyProductSearchAttributeMap table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductSearchAttributeMapExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery */
        $q = $this->useExistsQuery('SpyProductSearchAttributeMap', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyProductSearchAttributeMap table for a NOT EXISTS query.
     *
     * @see useSpyProductSearchAttributeMapExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductSearchAttributeMapNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery */
        $q = $this->useExistsQuery('SpyProductSearchAttributeMap', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyProductSearchAttributeMap table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery The inner query object of the IN statement
     */
    public function useInSpyProductSearchAttributeMapQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery */
        $q = $this->useInQuery('SpyProductSearchAttributeMap', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyProductSearchAttributeMap table for a NOT IN query.
     *
     * @see useSpyProductSearchAttributeMapInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyProductSearchAttributeMapQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeMapQuery */
        $q = $this->useInQuery('SpyProductSearchAttributeMap', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttribute object
     *
     * @param \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttribute|ObjectCollection $spyProductSearchAttribute the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyProductSearchAttribute($spyProductSearchAttribute, ?string $comparison = null)
    {
        if ($spyProductSearchAttribute instanceof \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttribute) {
            $this
                ->addUsingAlias(SpyProductAttributeKeyTableMap::COL_ID_PRODUCT_ATTRIBUTE_KEY, $spyProductSearchAttribute->getFkProductAttributeKey(), $comparison);

            return $this;
        } elseif ($spyProductSearchAttribute instanceof ObjectCollection) {
            $this
                ->useSpyProductSearchAttributeQuery()
                ->filterByPrimaryKeys($spyProductSearchAttribute->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySpyProductSearchAttribute() only accepts arguments of type \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttribute or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyProductSearchAttribute relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyProductSearchAttribute(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyProductSearchAttribute');

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
            $this->addJoinObject($join, 'SpyProductSearchAttribute');
        }

        return $this;
    }

    /**
     * Use the SpyProductSearchAttribute relation SpyProductSearchAttribute object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery A secondary query class using the current class as primary query
     */
    public function useSpyProductSearchAttributeQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyProductSearchAttribute($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyProductSearchAttribute', '\Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery');
    }

    /**
     * Use the SpyProductSearchAttribute relation SpyProductSearchAttribute object
     *
     * @param callable(\Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery):\Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyProductSearchAttributeQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyProductSearchAttributeQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyProductSearchAttribute table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery The inner query object of the EXISTS statement
     */
    public function useSpyProductSearchAttributeExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery */
        $q = $this->useExistsQuery('SpyProductSearchAttribute', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyProductSearchAttribute table for a NOT EXISTS query.
     *
     * @see useSpyProductSearchAttributeExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyProductSearchAttributeNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery */
        $q = $this->useExistsQuery('SpyProductSearchAttribute', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyProductSearchAttribute table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery The inner query object of the IN statement
     */
    public function useInSpyProductSearchAttributeQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery */
        $q = $this->useInQuery('SpyProductSearchAttribute', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyProductSearchAttribute table for a NOT IN query.
     *
     * @see useSpyProductSearchAttributeInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyProductSearchAttributeQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ProductSearch\Persistence\SpyProductSearchAttributeQuery */
        $q = $this->useInQuery('SpyProductSearchAttribute', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyProductAttributeKey $spyProductAttributeKey Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyProductAttributeKey = null)
    {
        if ($spyProductAttributeKey) {
            $this->addUsingAlias(SpyProductAttributeKeyTableMap::COL_ID_PRODUCT_ATTRIBUTE_KEY, $spyProductAttributeKey->getIdProductAttributeKey(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_product_attribute_key table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductAttributeKeyTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyProductAttributeKeyTableMap::clearInstancePool();
            SpyProductAttributeKeyTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyProductAttributeKeyTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyProductAttributeKeyTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyProductAttributeKeyTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyProductAttributeKeyTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
