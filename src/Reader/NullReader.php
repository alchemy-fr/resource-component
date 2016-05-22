<?php

namespace Alchemy\Resource\Reader;

class NullReader extends StringReader
{

    public static function instance()
    {
        return new self();
    }

    public function __construct()
    {
        parent::__construct('');
    }
}
