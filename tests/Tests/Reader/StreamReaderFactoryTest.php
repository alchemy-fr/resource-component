<?php

namespace Alchemy\Resource\Tests\Reader;

use Alchemy\Resource\Reader\StreamReader;
use Alchemy\Resource\Reader\StreamReaderFactory;
use Alchemy\Resource\ResourceUri;

class StreamReaderFactoryTest extends \PHPUnit_Framework_TestCase
{

    public function testFactoryReturnsAStreamReader()
    {
        $resource = ResourceUri::fromString('fake://resource');
        $factory = new StreamReaderFactory();

        $actual = $factory->createReaderFor($resource);

        $this->assertInstanceOf(StreamReader::class, $actual);
    }
}
