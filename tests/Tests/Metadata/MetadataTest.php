<?php

namespace Alchemy\Tests\Resource\Metadata;

use Alchemy\Resource\Metadata\Metadata;
use Alchemy\Resource\Metadata\NullMetadataIterator;
use Alchemy\Resource\Reader\NullReader;
use Alchemy\Resource\ResourceUri;
use Alchemy\Resource\Writer\NullWriter;

class MetadataTest extends \PHPUnit_Framework_TestCase
{

    public function testMetadataCanBeCreatedUsingUriNameAndValue()
    {
        $uri = ResourceUri::fromString('mock://uri');
        $metadata = new Metadata($uri, new NullMetadataIterator(), 'name', 'value');

        $this->assertEquals($uri, $metadata->getUri());
        $this->assertEquals('name', $metadata->getName());
        $this->assertEquals('value', $metadata->getValue());
        $this->assertEquals(new NullMetadataIterator(), $metadata->getMetadata());
    }

    public function testMetadataHasNullReaderAndWriter()
    {
        $uri = ResourceUri::fromString('mock://uri');
        $metadata = new Metadata($uri, new NullMetadataIterator(), 'name', 'value');

        $this->assertInstanceOf(NullReader::class, $metadata->getReader());
        $this->assertInstanceOf(NullWriter::class, $metadata->getWriter());
    }
}
