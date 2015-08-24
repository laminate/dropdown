<?php namespace Laminate\Dropdown;

use Illuminate\Support\ServiceProvider;

class DropdownRepoServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Perform post-registration booting of services.
	 *
	 * @return void
	 */
	public function boot() {
		if (!$this->app->routesAreCached()) {
			require __DIR__ . '/../../routes.php';
		}

		$this->publishes([
			__DIR__ . '/../vendor/chosen_v1.1.0' => public_path('laminate/dropdown'),
		], 'public');

		$this->publishes([
			__DIR__ . '/../database/migrations/' => database_path('migrations'),
		], 'migrations');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->bindShared('dropdownrepo', function () {
			return $this->app->make('Laminate\Dropdown\Repos\Dropdowns\DbDropdownRepository');
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides() {
		return [];
	}

}
