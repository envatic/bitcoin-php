<?php

namespace Bitcoin\Script;

/**
 * Interface ScriptInterface
 * @package Bitcoin
 */
interface ScriptInterface
{
    /**
     * //TODO: this needed?
     * @return mixed
     */

    public function parse();

    public function serialize($type = null);
}
