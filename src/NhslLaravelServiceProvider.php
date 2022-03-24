<?php

namespace Nhsl\NhslLaravel;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class NhslLaravelServiceProvider extends ServiceProvider
{
	/**
	 * Register services.
	 *
	 * @throws \Illuminate\Contracts\Container\BindingResolutionException
	 */
	public function register()
	{
		//
	}

	/**
	 * Bootstrap services.
	 *
	 * @return void
	 */
	public function boot()
	{
		/**
		 * Publish config
		 */
		$this->publishes([
			__DIR__.'/config/nhsl.php' => config_path('nhsl.php'),
		], 'nhsl-config');

		/**
		 * Publish routes
		 */
		$routeParams = [
			'prefix'     => config('nhsl.prefix', 'nhsl'),
			'middleware' => config('middleware', ['web']),
		];
		Route::group($routeParams, function () {
			$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		});

		/**
		 * Publish public assets
		 */
		$this->publishes([
			__DIR__.'/public' => public_path('/')
		], 'nhsl-public');

		/**
		 * Load and publish sass
		 */
		$this->publishes([
			__DIR__.'/resources/sass' => resource_path('sass')
		], 'nhsl-sass');

		/**
		 * Load and publish js
		 */
		$this->publishes([
			__DIR__.'/resources/js' => resource_path('js')
		], 'nhsl-js');

		/**
		 * Load and publish views
		 */
		$this->loadViewsFrom(__DIR__.'/resources/views', 'nhsl');
		$this->publishes([
			__DIR__.'/resources/views' => resource_path('views')
		], 'nhsl-views');

		if ($this->app->runningInConsole()) {
			$this->publishes([
				__DIR__.'/resources/views' => resource_path('views'),
			], 'nhsl-views');
		}

		/**
		 * Load and publish translations
		 */
		$this->loadTranslationsFrom(__DIR__.'/resources/lang', 'nhsl');
		$this->publishes([
			__DIR__.'/resources/lang' => $this->app->langPath('lang/en/nhsl')
		], 'nhsl-translations');
	}
}
