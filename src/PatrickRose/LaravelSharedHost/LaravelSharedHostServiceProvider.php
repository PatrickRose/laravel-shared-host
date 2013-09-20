<?php namespace PatrickRose\LaravelSharedHost;

use Illuminate\Support\ServiceProvider;

class LaravelSharedHostServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        $this->package('patrickrose/laravel-sharedhost');

	$srcdir = dirname(dirname(dirname(__FILE__)));
	
        require_once $srcdir .'/routes.php';
        require_once $srcdir .'/filters.php';
        //
    }

    public function register()
    {
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

}
