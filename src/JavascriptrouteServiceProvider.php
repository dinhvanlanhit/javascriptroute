<?php
namespace Jsroute\Javascriptroute;

use Illuminate\Support\ServiceProvider;
class JavascriptrouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if (! $this->app->routesAreCached()) {
            require __DIR__.'/routes.php';
        }
    }
    public function register()
    {
        //
    }
}