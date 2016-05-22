<?php

/*
 * This file is part of alchemy/resource-component.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Resource\Metadata;

class LazyMetadataIterator implements MetadataIterator
{
    /**
     * @var MetadataIterator
     */
    private $iterator;

    /**
     * @var callable
     */
    private $factory;

    /**
     * @param callable $factory A callback that returns a MetadataIterator instance
     */
    public function __construct(callable $factory)
    {
        $this->factory = $factory;
    }

    private function getIterator()
    {
        if ($this->iterator === null) {
            $factory = $this->factory;
            $this->iterator = $factory();
        }

        return $this->iterator;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     */
    public function next()
    {
        $this->getIterator()->next();
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     */
    public function key()
    {
        return $this->getIterator()->key();
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     */
    public function valid()
    {
        return $this->getIterator()->valid();
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     */
    public function rewind()
    {
        $this->getIterator()->rewind();
    }

    /**
     * @return Metadata
     */
    public function current()
    {
        return $this->getIterator()->current();
    }
}
