<?php

namespace App\Tenant\Observers;

use Illuminate\Database\Eloquent\Model;

class TenantObserver {
	private $tenant;

	public function __construct($tenant) {
		$this->tenant = $tenant;
	}

	public function creating(Model $model) {
		$foreignKey = $this->tenant->getForeignKey();
		if (!isset($model->company_id)) {
			$model->setAttribute($foreignKey, $this->tenant->id);
		}
	}
}