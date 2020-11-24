<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes([  
  'reset' => false, // Password Reset Routes...
  'verify' => false, // Email Verification Routes...
  'register' =>false,
]);

Route::get('/', 'Frontend\FrontendController@index')->name('home');
Route::get('/admin', 'Backend\DashboardController@index')->name('dashboard');

Route::name('admin.')->group(function () {
	Route::name('profile.')->group(function () {
		Route::get('admin/profile/index', 'Admin\ProfileController@index')->name('index');
		Route::get('admin/profile/create', 'Admin\ProfileController@create')->name('create');
		Route::post('admin/profile/store', 'Admin\ProfileController@store')->name('store');
		Route::get('admin/profile/show/{id}', 'Admin\ProfileController@show')->name('show');
		Route::get('admin/profile/edit/{id}', 'Admin\ProfileController@edit')->name('edit');
		Route::post('admin/profile/update/{id}', 'Admin\ProfileController@update')->name('update');
		Route::get('admin/profile/destroy/{id}', 'Admin\ProfileController@destroy')->name('destroy');
	});						
});

Route::name('superadmin.')->group(function () {
	Route::get('superadmin/index', 'Admin\SuperAdminController@index')->name('index');	
	Route::name('company.')->group(function () {
		Route::get('superadmin/company/index', 'Admin\CompanyController@index')->name('index');
		Route::get('superadmin/company/create', 'Admin\CompanyController@create')->name('create');
		Route::post('superadmin/company/store', 'Admin\CompanyController@store')->name('store');
		Route::get('superadmin/company/show/{id}', 'Admin\CompanyController@show')->name('show');
		Route::get('superadmin/company/edit/{id}', 'Admin\CompanyController@edit')->name('edit');
		Route::post('superadmin/company/update/{id}', 'Admin\CompanyController@update')->name('update');
		Route::get('superadmin/company/destroy/{id}', 'Admin\CompanyController@destroy')->name('destroy');
	});
});
