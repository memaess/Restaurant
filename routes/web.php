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

Route::get('/', 'Base\BaseController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'Administrator'], function () {
    Route::group(['middleware' => ['role:administrator']], function () {
		Route::get('/', 'Administrator\MainController@index')->name('admin.index');
    });
});

Route::group(['prefix' => 'Operator'], function () {
    Route::group(['middleware' => ['role:operator']], function () {
        
    });
});

Route::group(['prefix' => 'Waiters'], function () {
    Route::group(['middleware' => ['role:employee-waiters']], function () {
        
    });
});

Route::group(['prefix' => 'Cashier'], function () {
    Route::group(['middleware' => ['role:employee-cashier']], function () {
        
    });
});

Route::group(['prefix' => 'Kitchen'], function () {
    Route::group(['middleware' => ['role:employee-kitchen']], function () {
        
    });
});
