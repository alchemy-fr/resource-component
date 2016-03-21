<?php

namespace Alchemy\Resource;

interface ResourceReaderFactory
{

    /**
     * @param ResourceUri $resource
     * @return ResourceReader
     */
    public function createReaderFor(ResourceUri $resource);
}
