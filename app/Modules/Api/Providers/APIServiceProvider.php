<?php
namespace App\Modules\API\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class APIServiceProvider extends ServiceProvider
{
	/**
	 * Register the API module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\API\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the API module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('api', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('api', base_path('resources/views/vendor/api'));
		View::addNamespace('api', realpath(__DIR__.'/../Resources/Views'));
	}
}
