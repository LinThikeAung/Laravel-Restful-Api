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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/student','ApiController@Insert_Student');
Route::get('/fetch_student','ApiController@Fetch_Student');
Route::post('/delete_student/{id}',"ApiController@Delete_Student");
Route::post('/update_student/{id}','ApiController@Update_Student');