<?php

/**
 * @param string|\Alchemy\Resource\ResourceUri $uri A valid resource URI instance or string.
 * @return \Alchemy\Resource\ResourceUri
 */
function uri($uri) {
    if ($uri instanceof \Alchemy\Resource\ResourceUri) {
        return $uri;
    }

    return \Alchemy\Resource\ResourceUri::fromString($uri);
}
