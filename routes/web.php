<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'DashboardController@index')->name('dashboard.index');

/* Accounts Routes, grouped */
Route::group([], function () {
	Route::get('accounts/index', 'AccountsController@index')->name('accounts.index');

	Route::get('accounts/create', 'AccountsController@create')->name('accounts.create');

	Route::post('accounts/store', 'AccountsController@store')->name('accounts.store');

	Route::get('accounts/{id}', 'AccountsController@show')->name('accounts.show');

	Route::get('accounts/{id}/transition/show/{transition}', 'AccountTransitionController@show')->name('accounts.transition.show');

	Route::get('accounts/{id}/transition/store/{transition}', 'AccountTransitionController@store')->name('accounts.transition.store');
});



Route::group([], function () {
	Route::get('places/index', 'PlacesController@index')->name('places.index');
});

