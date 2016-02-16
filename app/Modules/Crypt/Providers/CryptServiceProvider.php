<?php
namespace App\Modules\Crypt\Providers;

use App;
use Config;
use Lang;
use View;
use Illuminate\Support\ServiceProvider;

class CryptServiceProvider extends ServiceProvider
{
	/**
	 * Register the Crypt module service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// This service provider is a convenient place to register your modules
		// services in the IoC container. If you wish, you may make additional
		// methods or service providers to keep the code more focused and granular.
		App::register('App\Modules\Crypt\Providers\RouteServiceProvider');

		$this->registerNamespaces();
	}

	/**
	 * Register the Crypt module resource namespaces.
	 *
	 * @return void
	 */
	protected function registerNamespaces()
	{
		Lang::addNamespace('crypt', realpath(__DIR__.'/../Resources/Lang'));

		View::addNamespace('crypt', base_path('resources/views/vendor/crypt'));
		View::addNamespace('crypt', realpath(__DIR__.'/../Resources/Views'));
	}
}
