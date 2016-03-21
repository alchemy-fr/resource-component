<?php

namespace Alchemy\Resource;

interface ResourceReader 
{
    /**
     * @return string
     */
    public function getContents();

    /**
     * @return resource
     */
    public function getContentsAsStream();
}
