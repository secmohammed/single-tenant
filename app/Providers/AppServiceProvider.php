<?php

namespace App\Providers;
use App\Tenant\Manager;
use App\Tenant\Observers\TenantObserver;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		$this->app->singleton(Manager::class, function () {
			return new Manager;
		});
		$this->app->singleton(TenantObserver::class, function () {
			return new TenantObserver(app(Manager::class)->getTenant());
		});
		Request::macro('tenant', function () {
			return app(Manager::class)->getTenant();
		});
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		//
	}
}
