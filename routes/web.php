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

Auth::routes();
Route::prefix('/app')->group(function() {
    Route::get('/', 'SinglePageController@index')->where('any', '.*');
    Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
});
