<?php

namespace Alchemy\Resource\Reader;

class NullReader extends StringReader
{

    public function __construct()
    {
        parent::__construct('');
    }
}
