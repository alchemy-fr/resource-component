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

use Alchemy\Resource\Resource;
use Alchemy\Resource\ResourceReader;
use Alchemy\Resource\ResourceUri;
use Alchemy\Resource\ResourceWriter;

final class Metadata implements Resource
{
    /**
     * @var ResourceUri
     */
    private $uri;

    /**
     * @var string
     */
    private $name;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @param ResourceUri $uri
     * @param string $name
     * @param mixed $value
     */
    public function __construct(ResourceUri $uri, $name, $value)
    {
        $this->uri = $uri;
        $this->name = (string) $name;
        $this->value = $value;
    }

    /**
     * @return ResourceUri
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return ResourceReader
     */
    public function getReader()
    {
        throw new \BadMethodCallException();
    }

    /**
     * @return ResourceWriter
     */
    public function getWriter()
    {
        throw new \BadMethodCallException();
    }

    /**
     * @return MetadataIterator
     */
    public function getMetadata()
    {
        throw new \BadMethodCallException();
    }
}
