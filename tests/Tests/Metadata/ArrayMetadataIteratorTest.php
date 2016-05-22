<?php

namespace Alchemy\Tests\Resource\Metadata;

use Alchemy\Resource\Metadata\ArrayMetadataIterator;
use Alchemy\Resource\Metadata\Metadata;
use Alchemy\Resource\Metadata\NullMetadataIterator;

class ArrayMetadataIteratorTest extends \PHPUnit_Framework_TestCase
{

    public function testIteratorRequiresMetadataValues()
    {
        $metadata = [ new \stdClass() ];

        $this->setExpectedException(\InvalidArgumentException::class);

        new ArrayMetadataIterator($metadata);
    }

    public function testIteratorIteratesAllValues()
    {
        $metadata = [
            new Metadata(uri('mock://meta-1'), new NullMetadataIterator(), 'meta-1', 'value-1'),
            new Metadata(uri('mock://meta-2'), new NullMetadataIterator(), 'meta-2', 'value-2'),
        ];

        $iterator = new ArrayMetadataIterator($metadata);

        $this->assertEquals($metadata, iterator_to_array($iterator));
    }
}
