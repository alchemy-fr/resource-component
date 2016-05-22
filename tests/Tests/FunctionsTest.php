<?php

namespace Alchemy\Tests\Resource;

use Alchemy\Resource\ResourceUri;

class FunctionsTest extends \PHPUnit_Framework_TestCase
{

    public function testCreatingUriFromUriInstanceReturnsSameInstance()
    {
        $uri = ResourceUri::fromString('mock://uri');
        $newUri = uri($uri);

        $this->assertSame($uri, $newUri);
    }

    public function testCreatingUriFromStringReturnsUriInstance()
    {
        $uri = uri('mock://uri');

        $this->assertInstanceOf(ResourceUri::class, $uri);
        $this->assertEquals('mock://uri', (string) $uri);
    }
}
