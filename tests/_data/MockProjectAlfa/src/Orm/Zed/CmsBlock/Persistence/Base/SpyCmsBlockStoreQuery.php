<?php

namespace Orm\Zed\CmsBlock\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStore as ChildSpyCmsBlockStore;
use Orm\Zed\CmsBlock\Persistence\SpyCmsBlockStoreQuery as ChildSpyCmsBlockStoreQuery;
use Orm\Zed\CmsBlock\Persistence\Map\SpyCmsBlockStoreTableMap;
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
 * Base class that represents a query for the `spy_cms_block_store` table.
 *
 * @method     ChildSpyCmsBlockStoreQuery orderByIdCmsBlockStore($order = Criteria::ASC) Order by the id_cms_block_store column
 * @method     ChildSpyCmsBlockStoreQuery orderByFkCmsBlock($order = Criteria::ASC) Order by the fk_cms_block column
 * @method     ChildSpyCmsBlockStoreQuery orderByFkStore($order = Criteria::ASC) Order by the fk_store column
 *
 * @method     ChildSpyCmsBlockStoreQuery groupByIdCmsBlockStore() Group by the id_cms_block_store column
 * @method     ChildSpyCmsBlockStoreQuery groupByFkCmsBlock() Group by the fk_cms_block column
 * @method     ChildSpyCmsBlockStoreQuery groupByFkStore() Group by the fk_store column
 *
 * @method     ChildSpyCmsBlockStoreQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyCmsBlockStoreQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyCmsBlockStoreQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyCmsBlockStoreQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyCmsBlockStoreQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyCmsBlockStoreQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyCmsBlockStoreQuery leftJoinSpyCmsBlock($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyCmsBlock relation
 * @method     ChildSpyCmsBlockStoreQuery rightJoinSpyCmsBlock($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyCmsBlock relation
 * @method     ChildSpyCmsBlockStoreQuery innerJoinSpyCmsBlock($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyCmsBlock relation
 *
 * @method     ChildSpyCmsBlockStoreQuery joinWithSpyCmsBlock($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyCmsBlock relation
 *
 * @method     ChildSpyCmsBlockStoreQuery leftJoinWithSpyCmsBlock() Adds a LEFT JOIN clause and with to the query using the SpyCmsBlock relation
 * @method     ChildSpyCmsBlockStoreQuery rightJoinWithSpyCmsBlock() Adds a RIGHT JOIN clause and with to the query using the SpyCmsBlock relation
 * @method     ChildSpyCmsBlockStoreQuery innerJoinWithSpyCmsBlock() Adds a INNER JOIN clause and with to the query using the SpyCmsBlock relation
 *
 * @method     ChildSpyCmsBlockStoreQuery leftJoinSpyStore($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyStore relation
 * @method     ChildSpyCmsBlockStoreQuery rightJoinSpyStore($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyStore relation
 * @method     ChildSpyCmsBlockStoreQuery innerJoinSpyStore($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyStore relation
 *
 * @method     ChildSpyCmsBlockStoreQuery joinWithSpyStore($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyStore relation
 *
 * @method     ChildSpyCmsBlockStoreQuery leftJoinWithSpyStore() Adds a LEFT JOIN clause and with to the query using the SpyStore relation
 * @method     ChildSpyCmsBlockStoreQuery rightJoinWithSpyStore() Adds a RIGHT JOIN clause and with to the query using the SpyStore relation
 * @method     ChildSpyCmsBlockStoreQuery innerJoinWithSpyStore() Adds a INNER JOIN clause and with to the query using the SpyStore relation
 *
 * @method     \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery|\Orm\Zed\Store\Persistence\SpyStoreQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyCmsBlockStore|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyCmsBlockStore matching the query
 * @method     ChildSpyCmsBlockStore findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyCmsBlockStore matching the query, or a new ChildSpyCmsBlockStore object populated from the query conditions when no match is found
 *
 * @method     ChildSpyCmsBlockStore|null findOneByIdCmsBlockStore(int $id_cms_block_store) Return the first ChildSpyCmsBlockStore filtered by the id_cms_block_store column
 * @method     ChildSpyCmsBlockStore|null findOneByFkCmsBlock(int $fk_cms_block) Return the first ChildSpyCmsBlockStore filtered by the fk_cms_block column
 * @method     ChildSpyCmsBlockStore|null findOneByFkStore(int $fk_store) Return the first ChildSpyCmsBlockStore filtered by the fk_store column
 *
 * @method     ChildSpyCmsBlockStore requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyCmsBlockStore by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsBlockStore requireOne(?ConnectionInterface $con = null) Return the first ChildSpyCmsBlockStore matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsBlockStore requireOneByIdCmsBlockStore(int $id_cms_block_store) Return the first ChildSpyCmsBlockStore filtered by the id_cms_block_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsBlockStore requireOneByFkCmsBlock(int $fk_cms_block) Return the first ChildSpyCmsBlockStore filtered by the fk_cms_block column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyCmsBlockStore requireOneByFkStore(int $fk_store) Return the first ChildSpyCmsBlockStore filtered by the fk_store column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyCmsBlockStore[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyCmsBlockStore objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyCmsBlockStore> find(?ConnectionInterface $con = null) Return ChildSpyCmsBlockStore objects based on current ModelCriteria
 *
 * @method     ChildSpyCmsBlockStore[]|Collection findByIdCmsBlockStore(int|array<int> $id_cms_block_store) Return ChildSpyCmsBlockStore objects filtered by the id_cms_block_store column
 * @psalm-method Collection&\Traversable<ChildSpyCmsBlockStore> findByIdCmsBlockStore(int|array<int> $id_cms_block_store) Return ChildSpyCmsBlockStore objects filtered by the id_cms_block_store column
 * @method     ChildSpyCmsBlockStore[]|Collection findByFkCmsBlock(int|array<int> $fk_cms_block) Return ChildSpyCmsBlockStore objects filtered by the fk_cms_block column
 * @psalm-method Collection&\Traversable<ChildSpyCmsBlockStore> findByFkCmsBlock(int|array<int> $fk_cms_block) Return ChildSpyCmsBlockStore objects filtered by the fk_cms_block column
 * @method     ChildSpyCmsBlockStore[]|Collection findByFkStore(int|array<int> $fk_store) Return ChildSpyCmsBlockStore objects filtered by the fk_store column
 * @psalm-method Collection&\Traversable<ChildSpyCmsBlockStore> findByFkStore(int|array<int> $fk_store) Return ChildSpyCmsBlockStore objects filtered by the fk_store column
 *
 * @method     ChildSpyCmsBlockStore[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyCmsBlockStore> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyCmsBlockStoreQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\CmsBlock\Persistence\Base\SpyCmsBlockStoreQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\CmsBlock\\Persistence\\SpyCmsBlockStore', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyCmsBlockStoreQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyCmsBlockStoreQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyCmsBlockStoreQuery) {
            return $criteria;
        }
        $query = new ChildSpyCmsBlockStoreQuery();
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
     * @return ChildSpyCmsBlockStore|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyCmsBlockStoreTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyCmsBlockStore A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_cms_block_store`, `fk_cms_block`, `fk_store` FROM `spy_cms_block_store` WHERE `id_cms_block_store` = :p0';
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
            /** @var ChildSpyCmsBlockStore $obj */
            $obj = new ChildSpyCmsBlockStore();
            $obj->hydrate($row);
            SpyCmsBlockStoreTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyCmsBlockStore|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_ID_CMS_BLOCK_STORE, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_ID_CMS_BLOCK_STORE, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idCmsBlockStore Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsBlockStore_Between(array $idCmsBlockStore)
    {
        return $this->filterByIdCmsBlockStore($idCmsBlockStore, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idCmsBlockStores Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdCmsBlockStore_In(array $idCmsBlockStores)
    {
        return $this->filterByIdCmsBlockStore($idCmsBlockStores, Criteria::IN);
    }

    /**
     * Filter the query on the id_cms_block_store column
     *
     * Example usage:
     * <code>
     * $query->filterByIdCmsBlockStore(1234); // WHERE id_cms_block_store = 1234
     * $query->filterByIdCmsBlockStore(array(12, 34), Criteria::IN); // WHERE id_cms_block_store IN (12, 34)
     * $query->filterByIdCmsBlockStore(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_cms_block_store > 12
     * </code>
     *
     * @param     mixed $idCmsBlockStore The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdCmsBlockStore($idCmsBlockStore = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idCmsBlockStore)) {
            $useMinMax = false;
            if (isset($idCmsBlockStore['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_ID_CMS_BLOCK_STORE, $idCmsBlockStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idCmsBlockStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_ID_CMS_BLOCK_STORE, $idCmsBlockStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idCmsBlockStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_ID_CMS_BLOCK_STORE, $idCmsBlockStore, $comparison);

        return $query;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $fkCmsBlock Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCmsBlock_Between(array $fkCmsBlock)
    {
        return $this->filterByFkCmsBlock($fkCmsBlock, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $fkCmsBlocks Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByFkCmsBlock_In(array $fkCmsBlocks)
    {
        return $this->filterByFkCmsBlock($fkCmsBlocks, Criteria::IN);
    }

    /**
     * Filter the query on the fk_cms_block column
     *
     * Example usage:
     * <code>
     * $query->filterByFkCmsBlock(1234); // WHERE fk_cms_block = 1234
     * $query->filterByFkCmsBlock(array(12, 34), Criteria::IN); // WHERE fk_cms_block IN (12, 34)
     * $query->filterByFkCmsBlock(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE fk_cms_block > 12
     * </code>
     *
     * @see       filterBySpyCmsBlock()
     *
     * @param     mixed $fkCmsBlock The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByFkCmsBlock($fkCmsBlock = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($fkCmsBlock)) {
            $useMinMax = false;
            if (isset($fkCmsBlock['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_FK_CMS_BLOCK, $fkCmsBlock['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkCmsBlock['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_FK_CMS_BLOCK, $fkCmsBlock['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkCmsBlock of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_FK_CMS_BLOCK, $fkCmsBlock, $comparison);

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
                $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_FK_STORE, $fkStore['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($fkStore['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_FK_STORE, $fkStore['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$fkStore of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_FK_STORE, $fkStore, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\CmsBlock\Persistence\SpyCmsBlock object
     *
     * @param \Orm\Zed\CmsBlock\Persistence\SpyCmsBlock|ObjectCollection $spyCmsBlock The related object(s) to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @throws \Propel\Runtime\Exception\PropelException
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyCmsBlock($spyCmsBlock, ?string $comparison = null)
    {
        if ($spyCmsBlock instanceof \Orm\Zed\CmsBlock\Persistence\SpyCmsBlock) {
            return $this
                ->addUsingAlias(SpyCmsBlockStoreTableMap::COL_FK_CMS_BLOCK, $spyCmsBlock->getIdCmsBlock(), $comparison);
        } elseif ($spyCmsBlock instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyCmsBlockStoreTableMap::COL_FK_CMS_BLOCK, $spyCmsBlock->toKeyValue('PrimaryKey', 'IdCmsBlock'), $comparison);

            return $this;
        } else {
            throw new PropelException('filterBySpyCmsBlock() only accepts arguments of type \Orm\Zed\CmsBlock\Persistence\SpyCmsBlock or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyCmsBlock relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyCmsBlock(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyCmsBlock');

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
            $this->addJoinObject($join, 'SpyCmsBlock');
        }

        return $this;
    }

    /**
     * Use the SpyCmsBlock relation SpyCmsBlock object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery A secondary query class using the current class as primary query
     */
    public function useSpyCmsBlockQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyCmsBlock($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyCmsBlock', '\Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery');
    }

    /**
     * Use the SpyCmsBlock relation SpyCmsBlock object
     *
     * @param callable(\Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery):\Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyCmsBlockQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyCmsBlockQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyCmsBlock table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery The inner query object of the EXISTS statement
     */
    public function useSpyCmsBlockExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery */
        $q = $this->useExistsQuery('SpyCmsBlock', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyCmsBlock table for a NOT EXISTS query.
     *
     * @see useSpyCmsBlockExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyCmsBlockNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery */
        $q = $this->useExistsQuery('SpyCmsBlock', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyCmsBlock table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery The inner query object of the IN statement
     */
    public function useInSpyCmsBlockQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery */
        $q = $this->useInQuery('SpyCmsBlock', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyCmsBlock table for a NOT IN query.
     *
     * @see useSpyCmsBlockInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyCmsBlockQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\CmsBlock\Persistence\SpyCmsBlockQuery */
        $q = $this->useInQuery('SpyCmsBlock', $modelAlias, $queryClass, 'NOT IN');
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
                ->addUsingAlias(SpyCmsBlockStoreTableMap::COL_FK_STORE, $spyStore->getIdStore(), $comparison);
        } elseif ($spyStore instanceof ObjectCollection) {
            if (null === $comparison) {
                $comparison = Criteria::IN;
            }

            $this
                ->addUsingAlias(SpyCmsBlockStoreTableMap::COL_FK_STORE, $spyStore->toKeyValue('PrimaryKey', 'IdStore'), $comparison);

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
     * @param ChildSpyCmsBlockStore $spyCmsBlockStore Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyCmsBlockStore = null)
    {
        if ($spyCmsBlockStore) {
            $this->addUsingAlias(SpyCmsBlockStoreTableMap::COL_ID_CMS_BLOCK_STORE, $spyCmsBlockStore->getIdCmsBlockStore(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_cms_block_store table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsBlockStoreTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyCmsBlockStoreTableMap::clearInstancePool();
            SpyCmsBlockStoreTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyCmsBlockStoreTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyCmsBlockStoreTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyCmsBlockStoreTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyCmsBlockStoreTableMap::clearRelatedInstancePool();

            return $affectedRows;
        });
    }

}
