<?php
Route::post('/projects', 'ProjectController@store')->name('projects.store'); //
Route::get('/projects/{project}', 'ProjectController@show')->name('projects.show'); //
Route::get('/{company}', 'DashboardController@index'); //
