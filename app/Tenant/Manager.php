<?php

namespace App\Tenant;

class Manager {
	protected $tenant;
	public function setTenant($tenant) {
		$this->tenant = $tenant;

	}
	public function getTenant() {
		return $this->tenant;
	}
}