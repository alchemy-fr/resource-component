<?php

namespace Alchemy\Resource\Reader;

use Alchemy\Resource\ResourceReader;
use Alchemy\Resource\ResourceReaderFactory;
use Alchemy\Resource\ResourceUri;

class StreamReaderFactory implements ResourceReaderFactory
{

    /**
     * @param ResourceUri $resource
     * @return ResourceReader
     */
    public function createReaderFor(ResourceUri $resource)
    {
        return new StreamReader($resource);
    }
}
