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
use App\User;
Route::group(['middleware'=>['cors']],function(){
  Route::get('/users',function(){
    return response()->json(
      User::all()
    );
  });

  Route::post('/users',function(Request $request){
    // return $request;
    $user = new User();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = $request->password;
    $user->save();
  });
});
Route::group(['middleware'=> ['auth:api'] ],function(){
});
