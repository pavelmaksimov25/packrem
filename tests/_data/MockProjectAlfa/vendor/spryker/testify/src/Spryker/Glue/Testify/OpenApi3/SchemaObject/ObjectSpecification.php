<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Glue\Testify\OpenApi3\SchemaObject;

use ArrayAccess;
use ArrayIterator;
use Countable;
use IteratorAggregate;
use Spryker\Glue\Testify\OpenApi3\Property\PropertyDefinition;
use Traversable;

/**
 * @implements \ArrayAccess<int|string, \Spryker\Glue\Testify\OpenApi3\Property\PropertyDefinition>
 * @implements \IteratorAggregate<\Spryker\Glue\Testify\OpenApi3\Property\PropertyDefinition>
 */
class ObjectSpecification implements IteratorAggregate, ArrayAccess, Countable
{
    /**
     * @var array<\Spryker\Glue\Testify\OpenApi3\Property\PropertyDefinition>
     */
    protected $properties = [];

    /**
     * @param string $key
     * @param \Spryker\Glue\Testify\OpenApi3\Property\PropertyDefinition $property
     *
     * @return static
     */
    public function setProperty(string $key, PropertyDefinition $property): self
    {
        if ($this->offsetExists($key)) {
            trigger_error(sprintf('Property is already added before: %s::%s', static::class, $key), E_USER_WARNING);

            return $this;
        }

        $this->properties[$key] = $property;

        return $this;
    }

    /**
     * @return \ArrayIterator<int|string, \Spryker\Glue\Testify\OpenApi3\Property\PropertyDefinition>|\Traversable
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->properties);
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->properties);
    }

    /**
     * @param mixed $offset
     *
     * @return bool
     */
    public function offsetExists($offset): bool
    {
        return array_key_exists($offset, $this->properties);
    }

    /**
     * @param mixed $offset
     *
     * @return \Spryker\Glue\Testify\OpenApi3\Property\PropertyDefinition
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->properties[$offset];
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        trigger_error(sprintf('Trying to set readonly property: %s::%s', static::class, $offset), E_USER_WARNING);
    }

    /**
     * @param mixed $offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        trigger_error(sprintf('Trying to unset readonly property: %s::%s', static::class, $offset), E_USER_WARNING);
    }
}
