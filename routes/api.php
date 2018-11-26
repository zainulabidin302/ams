<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
<<<<<<< HEAD

use App\User;

Route::post('login', 'PassportController@login');
Route::post('logout', 'PassportController@logout');
Route::post('register', 'PassportController@register');

Route::resource('course','ClassRoomController');
Route::resource('assignment','AssignmentController');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
//
// });
Route::middleware('auth:api')->get('/user',function(){
  return User::all();
=======
use App\User;
Route::group(['middleware'=>['cors']],function(){
  Route::get('/users','RestController@viewUsers');
});
Route::group(['middleware'=> ['auth:api'] ],function(){
>>>>>>> 6320fa133e4d7a17e9e39145663d6b55f2083a46
});
