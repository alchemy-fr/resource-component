<?php

namespace Alchemy\Tests\Resource\Metadata;

use Alchemy\Resource\Metadata\NullMetadataIterator;

class NullMetadataIteratorTest extends \PHPUnit_Framework_TestCase
{

    public function testIteratorIsNotValid()
    {
        $iterator = new NullMetadataIterator();

        foreach ($iterator as $key => $value) {
            $this->fail('Null iterator must be empty');
        }
    }

    public function testIteratorHasNoKey()
    {
        $iterator = new NullMetadataIterator();

        $this->assertNull($iterator->key());

        $iterator->next();

        $this->assertNull($iterator->key());
    }

    public function testIteratorHasNoCurrentItem()
    {
        $iterator = new NullMetadataIterator();

        $this->setExpectedException(\BadMethodCallException::class);

        $iterator->current();
    }
}
