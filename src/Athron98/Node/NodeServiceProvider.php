<?php
namespace Athron98\Node;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

/**
 * Class NodeServiceProvider.
 */
class NodeServiceProvider extends ServiceProvider
{
    protected $defer = false;
    public function register()
    {
        include __DIR__ . '/helpers.php';
        $this->app->bind('Node', function ($app) {
            return new Node();
        });
        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('Node', 'Athron98\Node\Facades\Node');
        });
    }
    public function provides()
    {
        return [];
    }
}
