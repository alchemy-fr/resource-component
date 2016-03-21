<?php

namespace Alchemy\Resource\Writer;

use Alchemy\Resource\ResourceReader;
use Alchemy\Resource\ResourceUri;
use Alchemy\Resource\ResourceWriter;

class StringWriter implements ResourceWriter
{
    /**
     * @var string
     */
    private $buffer = '';

    public function getContents()
    {
        return $this->buffer;
    }

    public function writeFromReader(ResourceReader $reader, ResourceUri $targetPath)
    {
        $this->buffer = stream_get_contents($reader->getContentsAsStream());
    }
}
