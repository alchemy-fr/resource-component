<?php

/*
 * This file is part of alchemy/resource-component.
 *
 * (c) Alchemy <info@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Alchemy\Resource\Reader;

use Alchemy\Resource\ResourceReader;
use Alchemy\Resource\ResourceUri;

class StreamReader implements ResourceReader
{
    /**
     * @var ResourceUri
     */
    private $resource;

    /**
     * @var resource[]
     */
    private $streams = [];

    /**
     * @param ResourceUri $resource
     */
    public function __construct(ResourceUri $resource)
    {
        $this->resource = $resource;
    }

    public function __destruct()
    {
        foreach ($this->streams as $stream) {
            @fclose($stream);
        }
    }

    /**
     * @return string
     */
    public function getContents()
    {
        return stream_get_contents($this->getContentsAsStream());
    }

    /**
     * @return resource
     */
    public function getContentsAsStream()
    {
        $stream = @fopen(rawurldecode($this->resource), 'r');

        if ($stream === false) {
            throw new \RuntimeException('Unable to open stream resource for ' . rawurldecode($this->resource));
        }

        $this->streams[] = $stream;

        return $stream;
    }
}
