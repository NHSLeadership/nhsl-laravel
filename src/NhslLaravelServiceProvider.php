<?php

namespace Nhsl\NhslLaravel;

use Illuminate\Support\ServiceProvider;

class NhslLaravelServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        //$this->app->make('Nhsl\LaravelNhsl\Controllers\Controller');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Blade::component('package-alert', Alert::class);

	    /**
	     * Publish config
	     */
        $this->publishes([
            __DIR__.'/config/nhsl.php' => config_path('nhsl.php'),
        ], 'nhsl-config');

	    /**
	     * Publish routes
	     */
        $this->loadRoutesFrom(__DIR__.'/routes/routes.php');

	    /**
	     * Publish assets public path
	     */
	    $this->publishes([
		    __DIR__.'/public' => public_path('nhsl')
	    ], 'nhsl-public');

	    /**
	     * Load and publish views
	     */
	    $this->loadViewsFrom(__DIR__.'/resources/views', 'nhsl');
	    $this->publishes([
		    __DIR__.'/resources/views' => resource_path('views/nhsl')
	    ], 'nhsl-views');

	    /**
	     * Load and publish styles
	     */
	    $this->loadViewsFrom(__DIR__.'/resources/sass', 'nhsl');
	    $this->publishes([
		    __DIR__.'/resources/sass' => resource_path('sass/nhsl')
	    ], 'nhsl-styles');

	    /**
	     * Load and publish translations
	     */
	    $this->loadTranslationsFrom(__DIR__.'/resources/lang', 'vendor/laravel-nhsl');
	    $this->publishes([
	        __DIR__.'/resources/lang' => $this->app->langPath('lang/laravel-nhsl')
	    ], 'nhsl-translations');
    }
}
