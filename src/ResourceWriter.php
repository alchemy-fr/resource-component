<?php

namespace Alchemy\Resource;

interface ResourceWriter 
{
    public function writeFromReader(ResourceReader $reader, ResourceUri $targetPath);
}
