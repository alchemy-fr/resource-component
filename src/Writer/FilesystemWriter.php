<?php

namespace Alchemy\Resource\Writer;

use Alchemy\Resource\ResourceReader;
use Alchemy\Resource\ResourceUri;
use Alchemy\Resource\ResourceWriter;

class FilesystemWriter implements ResourceWriter
{

    /**
     * @param ResourceReader $reader
     * @param ResourceUri $target
     */
    public function writeFromReader(ResourceReader $reader, ResourceUri $target)
    {
        file_put_contents($target->getResource(), $reader->getContentsAsStream());
    }
}
