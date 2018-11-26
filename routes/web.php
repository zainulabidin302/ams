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

<<<<<<< HEAD
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
=======
Auth::routes();
Route::prefix('/app')->group(function() {
    Route::get('/', 'SinglePageController@index')->where('any', '.*');
    Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');
});
>>>>>>> 6320fa133e4d7a17e9e39145663d6b55f2083a46
