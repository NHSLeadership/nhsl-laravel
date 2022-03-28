<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your packages. These
| routes are loaded by the FrontComponentsServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/nhsl', function () {
	return view('nhsl::nhsl.index');
})->name('nhsl.index');

Route::get('/{http_code}', function ($http_code) {
	if (!in_array($http_code, [401, 403, 404, 419, 429, 500, 503])) {
		return abort(404);
	}
	return view('nhsl::errors.' . $http_code);
})->name('nhsl.errors');
