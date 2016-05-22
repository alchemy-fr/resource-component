<?php

namespace Alchemy\Resource\Writer;

use Alchemy\Resource\ResourceReader;
use Alchemy\Resource\ResourceUri;
use Alchemy\Resource\ResourceWriter;

class NullWriter implements ResourceWriter
{

    public function writeFromReader(ResourceReader $reader, ResourceUri $targetPath)
    {
        return;
    }
}
