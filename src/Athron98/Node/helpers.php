<?php
use Athron98\Node\Node;
if (!function_exists('node')) {
    function node($trim = true)
    {
        $node = new Node();
        return $node->create($trim);
    }
}
