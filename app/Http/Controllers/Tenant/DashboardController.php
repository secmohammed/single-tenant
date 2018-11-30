<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use App\Project;

class DashboardController extends Controller {
	public function index() {
		$projects = Project::all();
		return view('tenant.dashboard', compact('projects'));
	}
}