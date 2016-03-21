<?php

namespace Alchemy\Resource\Tests\Writer;

use Alchemy\Resource\Reader\StreamReader;
use Alchemy\Resource\Reader\StringReader;
use Alchemy\Resource\ResourceUri;
use Alchemy\Resource\Writer\StreamWriter;
use org\bovigo\vfs\vfsStream;
use org\bovigo\vfs\vfsStreamDirectory;

class StreamWriterTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var vfsStreamDirectory
     */
    private $root;

    protected function setup()
    {
        $this->root = vfsStream::setup('tests');
    }

    public function testWriterWritesToStreamResource()
    {
        $this->root->addChild(vfsStream::newFile('dummy-resource.txt'));
        $uri = $this->root->getChild('dummy-resource.txt')->url();

        $resource = ResourceUri::fromString($uri);

        $reader = new StringReader('mock data');
        $writer = new StreamWriter();

        $writer->writeFromReader($reader, $resource);

        $streamReader = new StreamReader($resource);

        $this->assertEquals('mock data', stream_get_contents($streamReader->getContentsAsStream()));

        unset($streamReader);
    }

    public function testWritingToReadOnlyStreamTriggersError()
    {
        $reader = new StringReader('mock data');
        $writer = new StreamWriter();

        $this->setExpectedException(\RuntimeException::class);

        // php://input is read-only
        $writer->writeFromReader($reader, ResourceUri::fromString('php://input'));
    }
}
