<?php

namespace Orm\Zed\ShoppingList\Persistence\Base;

use \Exception;
use \PDO;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingList as ChildSpyShoppingList;
use Orm\Zed\ShoppingList\Persistence\SpyShoppingListQuery as ChildSpyShoppingListQuery;
use Orm\Zed\ShoppingList\Persistence\Map\SpyShoppingListTableMap;
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
 * Base class that represents a query for the `spy_shopping_list` table.
 *
 * @method     ChildSpyShoppingListQuery orderByIdShoppingList($order = Criteria::ASC) Order by the id_shopping_list column
 * @method     ChildSpyShoppingListQuery orderByCustomerReference($order = Criteria::ASC) Order by the customer_reference column
 * @method     ChildSpyShoppingListQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     ChildSpyShoppingListQuery orderByKey($order = Criteria::ASC) Order by the key column
 * @method     ChildSpyShoppingListQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     ChildSpyShoppingListQuery orderByUuid($order = Criteria::ASC) Order by the uuid column
 * @method     ChildSpyShoppingListQuery orderByCreatedAt($order = Criteria::ASC) Order by the created_at column
 * @method     ChildSpyShoppingListQuery orderByUpdatedAt($order = Criteria::ASC) Order by the updated_at column
 *
 * @method     ChildSpyShoppingListQuery groupByIdShoppingList() Group by the id_shopping_list column
 * @method     ChildSpyShoppingListQuery groupByCustomerReference() Group by the customer_reference column
 * @method     ChildSpyShoppingListQuery groupByDescription() Group by the description column
 * @method     ChildSpyShoppingListQuery groupByKey() Group by the key column
 * @method     ChildSpyShoppingListQuery groupByName() Group by the name column
 * @method     ChildSpyShoppingListQuery groupByUuid() Group by the uuid column
 * @method     ChildSpyShoppingListQuery groupByCreatedAt() Group by the created_at column
 * @method     ChildSpyShoppingListQuery groupByUpdatedAt() Group by the updated_at column
 *
 * @method     ChildSpyShoppingListQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     ChildSpyShoppingListQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     ChildSpyShoppingListQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     ChildSpyShoppingListQuery leftJoinWith($relation) Adds a LEFT JOIN clause and with to the query
 * @method     ChildSpyShoppingListQuery rightJoinWith($relation) Adds a RIGHT JOIN clause and with to the query
 * @method     ChildSpyShoppingListQuery innerJoinWith($relation) Adds a INNER JOIN clause and with to the query
 *
 * @method     ChildSpyShoppingListQuery leftJoinSpyShoppingListItem($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingListItem relation
 * @method     ChildSpyShoppingListQuery rightJoinSpyShoppingListItem($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingListItem relation
 * @method     ChildSpyShoppingListQuery innerJoinSpyShoppingListItem($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingListItem relation
 *
 * @method     ChildSpyShoppingListQuery joinWithSpyShoppingListItem($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingListItem relation
 *
 * @method     ChildSpyShoppingListQuery leftJoinWithSpyShoppingListItem() Adds a LEFT JOIN clause and with to the query using the SpyShoppingListItem relation
 * @method     ChildSpyShoppingListQuery rightJoinWithSpyShoppingListItem() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingListItem relation
 * @method     ChildSpyShoppingListQuery innerJoinWithSpyShoppingListItem() Adds a INNER JOIN clause and with to the query using the SpyShoppingListItem relation
 *
 * @method     ChildSpyShoppingListQuery leftJoinSpyShoppingListCompanyUser($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingListCompanyUser relation
 * @method     ChildSpyShoppingListQuery rightJoinSpyShoppingListCompanyUser($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingListCompanyUser relation
 * @method     ChildSpyShoppingListQuery innerJoinSpyShoppingListCompanyUser($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingListCompanyUser relation
 *
 * @method     ChildSpyShoppingListQuery joinWithSpyShoppingListCompanyUser($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingListCompanyUser relation
 *
 * @method     ChildSpyShoppingListQuery leftJoinWithSpyShoppingListCompanyUser() Adds a LEFT JOIN clause and with to the query using the SpyShoppingListCompanyUser relation
 * @method     ChildSpyShoppingListQuery rightJoinWithSpyShoppingListCompanyUser() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingListCompanyUser relation
 * @method     ChildSpyShoppingListQuery innerJoinWithSpyShoppingListCompanyUser() Adds a INNER JOIN clause and with to the query using the SpyShoppingListCompanyUser relation
 *
 * @method     ChildSpyShoppingListQuery leftJoinSpyShoppingListCompanyBusinessUnit($relationAlias = null) Adds a LEFT JOIN clause to the query using the SpyShoppingListCompanyBusinessUnit relation
 * @method     ChildSpyShoppingListQuery rightJoinSpyShoppingListCompanyBusinessUnit($relationAlias = null) Adds a RIGHT JOIN clause to the query using the SpyShoppingListCompanyBusinessUnit relation
 * @method     ChildSpyShoppingListQuery innerJoinSpyShoppingListCompanyBusinessUnit($relationAlias = null) Adds a INNER JOIN clause to the query using the SpyShoppingListCompanyBusinessUnit relation
 *
 * @method     ChildSpyShoppingListQuery joinWithSpyShoppingListCompanyBusinessUnit($joinType = Criteria::INNER_JOIN) Adds a join clause and with to the query using the SpyShoppingListCompanyBusinessUnit relation
 *
 * @method     ChildSpyShoppingListQuery leftJoinWithSpyShoppingListCompanyBusinessUnit() Adds a LEFT JOIN clause and with to the query using the SpyShoppingListCompanyBusinessUnit relation
 * @method     ChildSpyShoppingListQuery rightJoinWithSpyShoppingListCompanyBusinessUnit() Adds a RIGHT JOIN clause and with to the query using the SpyShoppingListCompanyBusinessUnit relation
 * @method     ChildSpyShoppingListQuery innerJoinWithSpyShoppingListCompanyBusinessUnit() Adds a INNER JOIN clause and with to the query using the SpyShoppingListCompanyBusinessUnit relation
 *
 * @method     \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery|\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery endUse() Finalizes a secondary criteria and merges it with its primary Criteria
 *
 * @method     ChildSpyShoppingList|null findOne(?ConnectionInterface $con = null) Return the first ChildSpyShoppingList matching the query
 * @method     ChildSpyShoppingList findOneOrCreate(?ConnectionInterface $con = null) Return the first ChildSpyShoppingList matching the query, or a new ChildSpyShoppingList object populated from the query conditions when no match is found
 *
 * @method     ChildSpyShoppingList|null findOneByIdShoppingList(int $id_shopping_list) Return the first ChildSpyShoppingList filtered by the id_shopping_list column
 * @method     ChildSpyShoppingList|null findOneByCustomerReference(string $customer_reference) Return the first ChildSpyShoppingList filtered by the customer_reference column
 * @method     ChildSpyShoppingList|null findOneByDescription(string $description) Return the first ChildSpyShoppingList filtered by the description column
 * @method     ChildSpyShoppingList|null findOneByKey(string $key) Return the first ChildSpyShoppingList filtered by the key column
 * @method     ChildSpyShoppingList|null findOneByName(string $name) Return the first ChildSpyShoppingList filtered by the name column
 * @method     ChildSpyShoppingList|null findOneByUuid(string $uuid) Return the first ChildSpyShoppingList filtered by the uuid column
 * @method     ChildSpyShoppingList|null findOneByCreatedAt(string $created_at) Return the first ChildSpyShoppingList filtered by the created_at column
 * @method     ChildSpyShoppingList|null findOneByUpdatedAt(string $updated_at) Return the first ChildSpyShoppingList filtered by the updated_at column
 *
 * @method     ChildSpyShoppingList requirePk($key, ?ConnectionInterface $con = null) Return the ChildSpyShoppingList by primary key and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingList requireOne(?ConnectionInterface $con = null) Return the first ChildSpyShoppingList matching the query and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShoppingList requireOneByIdShoppingList(int $id_shopping_list) Return the first ChildSpyShoppingList filtered by the id_shopping_list column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingList requireOneByCustomerReference(string $customer_reference) Return the first ChildSpyShoppingList filtered by the customer_reference column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingList requireOneByDescription(string $description) Return the first ChildSpyShoppingList filtered by the description column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingList requireOneByKey(string $key) Return the first ChildSpyShoppingList filtered by the key column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingList requireOneByName(string $name) Return the first ChildSpyShoppingList filtered by the name column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingList requireOneByUuid(string $uuid) Return the first ChildSpyShoppingList filtered by the uuid column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingList requireOneByCreatedAt(string $created_at) Return the first ChildSpyShoppingList filtered by the created_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 * @method     ChildSpyShoppingList requireOneByUpdatedAt(string $updated_at) Return the first ChildSpyShoppingList filtered by the updated_at column and throws \Propel\Runtime\Exception\EntityNotFoundException when not found
 *
 * @method     ChildSpyShoppingList[]|Collection find(?ConnectionInterface $con = null) Return ChildSpyShoppingList objects based on current ModelCriteria
 * @psalm-method Collection&\Traversable<ChildSpyShoppingList> find(?ConnectionInterface $con = null) Return ChildSpyShoppingList objects based on current ModelCriteria
 *
 * @method     ChildSpyShoppingList[]|Collection findByIdShoppingList(int|array<int> $id_shopping_list) Return ChildSpyShoppingList objects filtered by the id_shopping_list column
 * @psalm-method Collection&\Traversable<ChildSpyShoppingList> findByIdShoppingList(int|array<int> $id_shopping_list) Return ChildSpyShoppingList objects filtered by the id_shopping_list column
 * @method     ChildSpyShoppingList[]|Collection findByCustomerReference(string|array<string> $customer_reference) Return ChildSpyShoppingList objects filtered by the customer_reference column
 * @psalm-method Collection&\Traversable<ChildSpyShoppingList> findByCustomerReference(string|array<string> $customer_reference) Return ChildSpyShoppingList objects filtered by the customer_reference column
 * @method     ChildSpyShoppingList[]|Collection findByDescription(string|array<string> $description) Return ChildSpyShoppingList objects filtered by the description column
 * @psalm-method Collection&\Traversable<ChildSpyShoppingList> findByDescription(string|array<string> $description) Return ChildSpyShoppingList objects filtered by the description column
 * @method     ChildSpyShoppingList[]|Collection findByKey(string|array<string> $key) Return ChildSpyShoppingList objects filtered by the key column
 * @psalm-method Collection&\Traversable<ChildSpyShoppingList> findByKey(string|array<string> $key) Return ChildSpyShoppingList objects filtered by the key column
 * @method     ChildSpyShoppingList[]|Collection findByName(string|array<string> $name) Return ChildSpyShoppingList objects filtered by the name column
 * @psalm-method Collection&\Traversable<ChildSpyShoppingList> findByName(string|array<string> $name) Return ChildSpyShoppingList objects filtered by the name column
 * @method     ChildSpyShoppingList[]|Collection findByUuid(string|array<string> $uuid) Return ChildSpyShoppingList objects filtered by the uuid column
 * @psalm-method Collection&\Traversable<ChildSpyShoppingList> findByUuid(string|array<string> $uuid) Return ChildSpyShoppingList objects filtered by the uuid column
 * @method     ChildSpyShoppingList[]|Collection findByCreatedAt(string|array<string> $created_at) Return ChildSpyShoppingList objects filtered by the created_at column
 * @psalm-method Collection&\Traversable<ChildSpyShoppingList> findByCreatedAt(string|array<string> $created_at) Return ChildSpyShoppingList objects filtered by the created_at column
 * @method     ChildSpyShoppingList[]|Collection findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyShoppingList objects filtered by the updated_at column
 * @psalm-method Collection&\Traversable<ChildSpyShoppingList> findByUpdatedAt(string|array<string> $updated_at) Return ChildSpyShoppingList objects filtered by the updated_at column
 *
 * @method     ChildSpyShoppingList[]|\Propel\Runtime\Util\PropelModelPager paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 * @psalm-method \Propel\Runtime\Util\PropelModelPager&\Traversable<ChildSpyShoppingList> paginate($page = 1, $maxPerPage = 10, ?ConnectionInterface $con = null) Issue a SELECT query based on the current ModelCriteria and uses a page and a maximum number of results per page to compute an offset and a limit
 */
abstract class SpyShoppingListQuery extends ModelCriteria
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
     * Initializes internal state of \Orm\Zed\ShoppingList\Persistence\Base\SpyShoppingListQuery object.
     *
     * @param string $dbName The database name
     * @param string $modelName The phpName of a model, e.g. 'Book'
     * @param string $modelAlias The alias for the model in this query, e.g. 'b'
     */
    public function __construct($dbName = 'zed', $modelName = '\\Orm\\Zed\\ShoppingList\\Persistence\\SpyShoppingList', $modelAlias = null)
    {
        parent::__construct($dbName, $modelName, $modelAlias);
    }

    /**
     * Returns a new ChildSpyShoppingListQuery object.
     *
     * @param string $modelAlias The alias of a model in the query
     * @param Criteria $criteria Optional Criteria to build the query from
     *
     * @return ChildSpyShoppingListQuery
     */
    public static function create(?string $modelAlias = null, ?Criteria $criteria = null): Criteria
    {
        if ($criteria instanceof ChildSpyShoppingListQuery) {
            return $criteria;
        }
        $query = new ChildSpyShoppingListQuery();
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
     * @return ChildSpyShoppingList|array|mixed the result, formatted by the current formatter
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

        if ((null !== ($obj = SpyShoppingListTableMap::getInstanceFromPool(null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key)))) {
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
     * @return ChildSpyShoppingList A model object, or null if the key is not found
     */
    protected function findPkSimple($key, ConnectionInterface $con)
    {
        $sql = 'SELECT `id_shopping_list`, `customer_reference`, `description`, `key`, `name`, `uuid`, `created_at`, `updated_at` FROM `spy_shopping_list` WHERE `id_shopping_list` = :p0';
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
            /** @var ChildSpyShoppingList $obj */
            $obj = new ChildSpyShoppingList();
            $obj->hydrate($row);
            SpyShoppingListTableMap::addInstanceToPool($obj, null === $key || is_scalar($key) || is_callable([$key, '__toString']) ? (string) $key : $key);
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
     * @return ChildSpyShoppingList|array|mixed the result, formatted by the current formatter
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

        $this->addUsingAlias(SpyShoppingListTableMap::COL_ID_SHOPPING_LIST, $key, Criteria::EQUAL);

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

        $this->addUsingAlias(SpyShoppingListTableMap::COL_ID_SHOPPING_LIST, $keys, Criteria::IN);

        return $this;
    }

    /**
     * Applies SprykerCriteria::BETWEEN filtering criteria for the column.
     *
     * @param array $idShoppingList Filter value.
     * [
     *    'min' => 3, 'max' => 5
     * ]
     *
     * 'min' and 'max' are optional, when neither is specified, throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShoppingList_Between(array $idShoppingList)
    {
        return $this->filterByIdShoppingList($idShoppingList, SprykerCriteria::BETWEEN);
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $idShoppingLists Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByIdShoppingList_In(array $idShoppingLists)
    {
        return $this->filterByIdShoppingList($idShoppingLists, Criteria::IN);
    }

    /**
     * Filter the query on the id_shopping_list column
     *
     * Example usage:
     * <code>
     * $query->filterByIdShoppingList(1234); // WHERE id_shopping_list = 1234
     * $query->filterByIdShoppingList(array(12, 34), Criteria::IN); // WHERE id_shopping_list IN (12, 34)
     * $query->filterByIdShoppingList(array('min' => 12), SprykerCriteria::BETWEEN); // WHERE id_shopping_list > 12
     * </code>
     *
     * @param     mixed $idShoppingList The value to use as filter.
     *              Use scalar values for equality.
     *              Use array values for in_array() equivalent. Add Criteria::IN explicitly.
     *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals. Add SprykerCriteria::BETWEEN explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByIdShoppingList($idShoppingList = null, $comparison = Criteria::EQUAL)
    {

        if (is_array($idShoppingList)) {
            $useMinMax = false;
            if (isset($idShoppingList['min'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::GREATER_EQUAL && $comparison != Criteria::GREATER_THAN) {
                    throw new AmbiguousComparisonException('\'min\' requires explicit Criteria::GREATER_EQUAL, Criteria::GREATER_THAN or SprykerCriteria::BETWEEN when \'max\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListTableMap::COL_ID_SHOPPING_LIST, $idShoppingList['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($idShoppingList['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListTableMap::COL_ID_SHOPPING_LIST, $idShoppingList['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$idShoppingList of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListTableMap::COL_ID_SHOPPING_LIST, $idShoppingList, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $customerReferences Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomerReference_In(array $customerReferences)
    {
        return $this->filterByCustomerReference($customerReferences, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $customerReference Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByCustomerReference_Like($customerReference)
    {
        return $this->filterByCustomerReference($customerReference, Criteria::LIKE);
    }

    /**
     * Filter the query on the customer_reference column
     *
     * Example usage:
     * <code>
     * $query->filterByCustomerReference('fooValue');   // WHERE customer_reference = 'fooValue'
     * $query->filterByCustomerReference('%fooValue%', Criteria::LIKE); // WHERE customer_reference LIKE '%fooValue%'
     * $query->filterByCustomerReference([1, 'foo'], Criteria::IN); // WHERE customer_reference IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $customerReference The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByCustomerReference($customerReference = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $customerReference = str_replace('*', '%', $customerReference);
        }

        if (is_array($customerReference) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$customerReference of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyShoppingListTableMap::COL_CUSTOMER_REFERENCE, $customerReference, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $descriptions Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDescription_In(array $descriptions)
    {
        return $this->filterByDescription($descriptions, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $description Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByDescription_Like($description)
    {
        return $this->filterByDescription($description, Criteria::LIKE);
    }

    /**
     * Filter the query on the description column
     *
     * Example usage:
     * <code>
     * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
     * $query->filterByDescription('%fooValue%', Criteria::LIKE); // WHERE description LIKE '%fooValue%'
     * $query->filterByDescription([1, 'foo'], Criteria::IN); // WHERE description IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $description The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByDescription($description = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $description = str_replace('*', '%', $description);
        }

        if (is_array($description) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$description of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyShoppingListTableMap::COL_DESCRIPTION, $description, $comparison);

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

        $query = $this->addUsingAlias(SpyShoppingListTableMap::COL_KEY, $key, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $names Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_In(array $names)
    {
        return $this->filterByName($names, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $name Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByName_Like($name)
    {
        return $this->filterByName($name, Criteria::LIKE);
    }

    /**
     * Filter the query on the name column
     *
     * Example usage:
     * <code>
     * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
     * $query->filterByName('%fooValue%', Criteria::LIKE); // WHERE name LIKE '%fooValue%'
     * $query->filterByName([1, 'foo'], Criteria::IN); // WHERE name IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $name The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByName($name = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $name = str_replace('*', '%', $name);
        }

        if (is_array($name) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$name of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyShoppingListTableMap::COL_NAME, $name, $comparison);

        return $query;
    }

    /**
     * Applies Criteria::IN filtering criteria for the column.
     *
     * @param array $uuids Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUuid_In(array $uuids)
    {
        return $this->filterByUuid($uuids, Criteria::IN);
    }

    /**
     * Applies SprykerCriteria::LIKE filtering criteria for the column.
     *
     * @param string $uuid Filter value.
     *
     * @return $this The current query, for fluid interface
     */
    public function filterByUuid_Like($uuid)
    {
        return $this->filterByUuid($uuid, Criteria::LIKE);
    }

    /**
     * Filter the query on the uuid column
     *
     * Example usage:
     * <code>
     * $query->filterByUuid('fooValue');   // WHERE uuid = 'fooValue'
     * $query->filterByUuid('%fooValue%', Criteria::LIKE); // WHERE uuid LIKE '%fooValue%'
     * $query->filterByUuid([1, 'foo'], Criteria::IN); // WHERE uuid IN (1, 'foo')
     * </code>
     *
     * @param     string|string[] $uuid The value to use as filter.
     *              Accepts wildcards (* and % trigger a LIKE). Add Criteria::LIKE explicitly.
     * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     *
     * @throws \Spryker\Zed\Propel\Business\Exception\AmbiguousComparisonException
     */
    public function filterByUuid($uuid = null, $comparison = Criteria::EQUAL)
    {
        if ($comparison == Criteria::LIKE || $comparison == Criteria::ILIKE) {
            $uuid = str_replace('*', '%', $uuid);
        }

        if (is_array($uuid) && !in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
            throw new AmbiguousComparisonException('$uuid of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
        }

        $query = $this->addUsingAlias(SpyShoppingListTableMap::COL_UUID, $uuid, $comparison);

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
                $this->addUsingAlias(SpyShoppingListTableMap::COL_CREATED_AT, $createdAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($createdAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListTableMap::COL_CREATED_AT, $createdAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$createdAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListTableMap::COL_CREATED_AT, $createdAt, $comparison);

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
                $this->addUsingAlias(SpyShoppingListTableMap::COL_UPDATED_AT, $updatedAt['min'], Criteria::GREATER_EQUAL);
                $useMinMax = true;
            }
            if (isset($updatedAt['max'])) {
                if ($comparison != SprykerCriteria::BETWEEN && $comparison != Criteria::LESS_EQUAL && $comparison != Criteria::LESS_THAN) {
                    throw new AmbiguousComparisonException('\'max\' requires explicit Criteria::LESS_EQUAL, Criteria::LESS_THAN or SprykerCriteria::BETWEEN when \'min\' is also needed as comparison criteria.');
                }
                $this->addUsingAlias(SpyShoppingListTableMap::COL_UPDATED_AT, $updatedAt['max'], Criteria::LESS_EQUAL);
                $useMinMax = true;
            }
            if ($useMinMax) {
                return $this;
            }

            if (!in_array($comparison, [Criteria::IN, Criteria::NOT_IN])) {
                throw new AmbiguousComparisonException('$updatedAt of type array requires one of [Criteria::IN, Criteria::NOT_IN] as comparison criteria.');
            }
        }

        $query = $this->addUsingAlias(SpyShoppingListTableMap::COL_UPDATED_AT, $updatedAt, $comparison);

        return $query;
    }

    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem|ObjectCollection $spyShoppingListItem the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyShoppingListItem($spyShoppingListItem, ?string $comparison = null)
    {
        if ($spyShoppingListItem instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem) {
            $this
                ->addUsingAlias(SpyShoppingListTableMap::COL_ID_SHOPPING_LIST, $spyShoppingListItem->getFkShoppingList(), $comparison);

            return $this;
        } elseif ($spyShoppingListItem instanceof ObjectCollection) {
            $this
                ->useSpyShoppingListItemQuery()
                ->filterByPrimaryKeys($spyShoppingListItem->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySpyShoppingListItem() only accepts arguments of type \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItem or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyShoppingListItem relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyShoppingListItem(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyShoppingListItem');

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
            $this->addJoinObject($join, 'SpyShoppingListItem');
        }

        return $this;
    }

    /**
     * Use the SpyShoppingListItem relation SpyShoppingListItem object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery A secondary query class using the current class as primary query
     */
    public function useSpyShoppingListItemQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyShoppingListItem($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyShoppingListItem', '\Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery');
    }

    /**
     * Use the SpyShoppingListItem relation SpyShoppingListItem object
     *
     * @param callable(\Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery):\Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyShoppingListItemQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyShoppingListItemQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyShoppingListItem table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery The inner query object of the EXISTS statement
     */
    public function useSpyShoppingListItemExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery */
        $q = $this->useExistsQuery('SpyShoppingListItem', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyShoppingListItem table for a NOT EXISTS query.
     *
     * @see useSpyShoppingListItemExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyShoppingListItemNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery */
        $q = $this->useExistsQuery('SpyShoppingListItem', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyShoppingListItem table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery The inner query object of the IN statement
     */
    public function useInSpyShoppingListItemQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery */
        $q = $this->useInQuery('SpyShoppingListItem', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyShoppingListItem table for a NOT IN query.
     *
     * @see useSpyShoppingListItemInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyShoppingListItemQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListItemQuery */
        $q = $this->useInQuery('SpyShoppingListItem', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser|ObjectCollection $spyShoppingListCompanyUser the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyShoppingListCompanyUser($spyShoppingListCompanyUser, ?string $comparison = null)
    {
        if ($spyShoppingListCompanyUser instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser) {
            $this
                ->addUsingAlias(SpyShoppingListTableMap::COL_ID_SHOPPING_LIST, $spyShoppingListCompanyUser->getFkShoppingList(), $comparison);

            return $this;
        } elseif ($spyShoppingListCompanyUser instanceof ObjectCollection) {
            $this
                ->useSpyShoppingListCompanyUserQuery()
                ->filterByPrimaryKeys($spyShoppingListCompanyUser->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySpyShoppingListCompanyUser() only accepts arguments of type \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUser or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyShoppingListCompanyUser relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyShoppingListCompanyUser(?string $relationAlias = null, ?string $joinType = Criteria::LEFT_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyShoppingListCompanyUser');

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
            $this->addJoinObject($join, 'SpyShoppingListCompanyUser');
        }

        return $this;
    }

    /**
     * Use the SpyShoppingListCompanyUser relation SpyShoppingListCompanyUser object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery A secondary query class using the current class as primary query
     */
    public function useSpyShoppingListCompanyUserQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
    {
        return $this
            ->joinSpyShoppingListCompanyUser($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyShoppingListCompanyUser', '\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery');
    }

    /**
     * Use the SpyShoppingListCompanyUser relation SpyShoppingListCompanyUser object
     *
     * @param callable(\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery):\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyShoppingListCompanyUserQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::LEFT_JOIN
    ) {
        $relatedQuery = $this->useSpyShoppingListCompanyUserQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyShoppingListCompanyUser table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery The inner query object of the EXISTS statement
     */
    public function useSpyShoppingListCompanyUserExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery */
        $q = $this->useExistsQuery('SpyShoppingListCompanyUser', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyShoppingListCompanyUser table for a NOT EXISTS query.
     *
     * @see useSpyShoppingListCompanyUserExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyShoppingListCompanyUserNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery */
        $q = $this->useExistsQuery('SpyShoppingListCompanyUser', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyShoppingListCompanyUser table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery The inner query object of the IN statement
     */
    public function useInSpyShoppingListCompanyUserQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery */
        $q = $this->useInQuery('SpyShoppingListCompanyUser', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyShoppingListCompanyUser table for a NOT IN query.
     *
     * @see useSpyShoppingListCompanyUserInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyShoppingListCompanyUserQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyUserQuery */
        $q = $this->useInQuery('SpyShoppingListCompanyUser', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Filter the query by a related \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit object
     *
     * @param \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit|ObjectCollection $spyShoppingListCompanyBusinessUnit the related object to use as filter
     * @param string|null $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
     *
     * @return $this The current query, for fluid interface
     */
    public function filterBySpyShoppingListCompanyBusinessUnit($spyShoppingListCompanyBusinessUnit, ?string $comparison = null)
    {
        if ($spyShoppingListCompanyBusinessUnit instanceof \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit) {
            $this
                ->addUsingAlias(SpyShoppingListTableMap::COL_ID_SHOPPING_LIST, $spyShoppingListCompanyBusinessUnit->getFkShoppingList(), $comparison);

            return $this;
        } elseif ($spyShoppingListCompanyBusinessUnit instanceof ObjectCollection) {
            $this
                ->useSpyShoppingListCompanyBusinessUnitQuery()
                ->filterByPrimaryKeys($spyShoppingListCompanyBusinessUnit->getPrimaryKeys())
                ->endUse();

            return $this;
        } else {
            throw new PropelException('filterBySpyShoppingListCompanyBusinessUnit() only accepts arguments of type \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnit or Collection');
        }
    }

    /**
     * Adds a JOIN clause to the query using the SpyShoppingListCompanyBusinessUnit relation
     *
     * @param string|null $relationAlias Optional alias for the relation
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this The current query, for fluid interface
     */
    public function joinSpyShoppingListCompanyBusinessUnit(?string $relationAlias = null, ?string $joinType = Criteria::INNER_JOIN)
    {
        $tableMap = $this->getTableMap();
        $relationMap = $tableMap->getRelation('SpyShoppingListCompanyBusinessUnit');

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
            $this->addJoinObject($join, 'SpyShoppingListCompanyBusinessUnit');
        }

        return $this;
    }

    /**
     * Use the SpyShoppingListCompanyBusinessUnit relation SpyShoppingListCompanyBusinessUnit object
     *
     * @see useQuery()
     *
     * @param string $relationAlias optional alias for the relation,
     *                                   to be used as main alias in the secondary query
     * @param string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery A secondary query class using the current class as primary query
     */
    public function useSpyShoppingListCompanyBusinessUnitQuery($relationAlias = null, $joinType = Criteria::INNER_JOIN)
    {
        return $this
            ->joinSpyShoppingListCompanyBusinessUnit($relationAlias, $joinType)
            ->useQuery($relationAlias ? $relationAlias : 'SpyShoppingListCompanyBusinessUnit', '\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery');
    }

    /**
     * Use the SpyShoppingListCompanyBusinessUnit relation SpyShoppingListCompanyBusinessUnit object
     *
     * @param callable(\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery):\Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery $callable A function working on the related query
     *
     * @param string|null $relationAlias optional alias for the relation
     *
     * @param string|null $joinType Accepted values are null, 'left join', 'right join', 'inner join'
     *
     * @return $this
     */
    public function withSpyShoppingListCompanyBusinessUnitQuery(
        callable $callable,
        string $relationAlias = null,
        ?string $joinType = Criteria::INNER_JOIN
    ) {
        $relatedQuery = $this->useSpyShoppingListCompanyBusinessUnitQuery(
            $relationAlias,
            $joinType
        );
        $callable($relatedQuery);
        $relatedQuery->endUse();

        return $this;
    }

    /**
     * Use the relation to SpyShoppingListCompanyBusinessUnit table for an EXISTS query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     * @param string $typeOfExists Either ExistsQueryCriterion::TYPE_EXISTS or ExistsQueryCriterion::TYPE_NOT_EXISTS
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery The inner query object of the EXISTS statement
     */
    public function useSpyShoppingListCompanyBusinessUnitExistsQuery($modelAlias = null, $queryClass = null, $typeOfExists = 'EXISTS')
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery */
        $q = $this->useExistsQuery('SpyShoppingListCompanyBusinessUnit', $modelAlias, $queryClass, $typeOfExists);
        return $q;
    }

    /**
     * Use the relation to SpyShoppingListCompanyBusinessUnit table for a NOT EXISTS query.
     *
     * @see useSpyShoppingListCompanyBusinessUnitExistsQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the exists query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery The inner query object of the NOT EXISTS statement
     */
    public function useSpyShoppingListCompanyBusinessUnitNotExistsQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery */
        $q = $this->useExistsQuery('SpyShoppingListCompanyBusinessUnit', $modelAlias, $queryClass, 'NOT EXISTS');
        return $q;
    }

    /**
     * Use the relation to SpyShoppingListCompanyBusinessUnit table for an IN query.
     *
     * @see \Propel\Runtime\ActiveQuery\ModelCriteria::useInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the IN query, like ExtendedBookQuery::class
     * @param string $typeOfIn Criteria::IN or Criteria::NOT_IN
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery The inner query object of the IN statement
     */
    public function useInSpyShoppingListCompanyBusinessUnitQuery($modelAlias = null, $queryClass = null, $typeOfIn = 'IN')
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery */
        $q = $this->useInQuery('SpyShoppingListCompanyBusinessUnit', $modelAlias, $queryClass, $typeOfIn);
        return $q;
    }

    /**
     * Use the relation to SpyShoppingListCompanyBusinessUnit table for a NOT IN query.
     *
     * @see useSpyShoppingListCompanyBusinessUnitInQuery()
     *
     * @param string|null $modelAlias sets an alias for the nested query
     * @param string|null $queryClass Allows to use a custom query class for the NOT IN query, like ExtendedBookQuery::class
     *
     * @return \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery The inner query object of the NOT IN statement
     */
    public function useNotInSpyShoppingListCompanyBusinessUnitQuery($modelAlias = null, $queryClass = null)
    {
        /** @var $q \Orm\Zed\ShoppingList\Persistence\SpyShoppingListCompanyBusinessUnitQuery */
        $q = $this->useInQuery('SpyShoppingListCompanyBusinessUnit', $modelAlias, $queryClass, 'NOT IN');
        return $q;
    }

    /**
     * Exclude object from result
     *
     * @param ChildSpyShoppingList $spyShoppingList Object to remove from the list of results
     *
     * @return $this The current query, for fluid interface
     */
    public function prune($spyShoppingList = null)
    {
        if ($spyShoppingList) {
            $this->addUsingAlias(SpyShoppingListTableMap::COL_ID_SHOPPING_LIST, $spyShoppingList->getIdShoppingList(), Criteria::NOT_EQUAL);
        }

        return $this;
    }

    /**
     * Deletes all rows from the spy_shopping_list table.
     *
     * @param ConnectionInterface $con the connection to use
     * @return int The number of affected rows (if supported by underlying database driver).
     */
    public function doDeleteAll(?ConnectionInterface $con = null): int
    {
        if (null === $con) {
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListTableMap::DATABASE_NAME);
        }

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con) {
            $affectedRows = 0; // initialize var to track total num of affected rows
            $affectedRows += parent::doDeleteAll($con);
            // Because this db requires some delete cascade/set null emulation, we have to
            // clear the cached instance *after* the emulation has happened (since
            // instances get re-added by the select statement contained therein).
            SpyShoppingListTableMap::clearInstancePool();
            SpyShoppingListTableMap::clearRelatedInstancePool();

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
            $con = Propel::getServiceContainer()->getWriteConnection(SpyShoppingListTableMap::DATABASE_NAME);
        }

        $criteria = $this;

        // Set the correct dbName
        $criteria->setDbName(SpyShoppingListTableMap::DATABASE_NAME);

        // use transaction because $criteria could contain info
        // for more than one table or we could emulating ON DELETE CASCADE, etc.
        return $con->transaction(function () use ($con, $criteria) {
            $affectedRows = 0; // initialize var to track total num of affected rows

            SpyShoppingListTableMap::removeInstanceFromPool($criteria);

            $affectedRows += ModelCriteria::delete($con);
            SpyShoppingListTableMap::clearRelatedInstancePool();

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
        $this->addUsingAlias(SpyShoppingListTableMap::COL_UPDATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by update date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastUpdatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyShoppingListTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by update date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstUpdatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyShoppingListTableMap::COL_UPDATED_AT);

        return $this;
    }

    /**
     * Order by create date desc
     *
     * @return $this The current query, for fluid interface
     */
    public function lastCreatedFirst()
    {
        $this->addDescendingOrderByColumn(SpyShoppingListTableMap::COL_CREATED_AT);

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
        $this->addUsingAlias(SpyShoppingListTableMap::COL_CREATED_AT, time() - $nbDays * 24 * 60 * 60, Criteria::GREATER_EQUAL);

        return $this;
    }

    /**
     * Order by create date asc
     *
     * @return $this The current query, for fluid interface
     */
    public function firstCreatedFirst()
    {
        $this->addAscendingOrderByColumn(SpyShoppingListTableMap::COL_CREATED_AT);

        return $this;
    }

}
