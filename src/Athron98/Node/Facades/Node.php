<?php
namespace Athron98\Node\Facades;

use Illuminate\Support\Facades\Facade;

class Node extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Node';
    }
}
