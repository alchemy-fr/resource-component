<?php

namespace Alchemy\Resource;

interface ResourceReaderResolver
{
    /**
     * Resolves a reader for the given resource URI.
     *
     * @param ResourceUri $resource
     * @return ResourceReader
     */
    public function resolveReader(ResourceUri $resource);
}
