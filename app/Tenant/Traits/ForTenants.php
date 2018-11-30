<?php

namespace App\Tenant\Traits;

use App\Tenant\Manager;
use App\Tenant\Observers\TenantObserver;
use App\Tenant\Scopes\TenantScope;

trait ForTenants {
	public static function boot() {
		parent::boot();
		$manager = app(Manager::class);
		static::addGlobalScope(
			new TenantScope($manager->getTenant())
		);
		static::observe(
			app(TenantObserver::class)
		);
	}

}
