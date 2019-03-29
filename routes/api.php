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
Route::get('top_week', function ($id) {

});
Route::get('list_new', function ($id) {

});
Route::get('users/{id}', function ($id) {

});
Route::post('login/{email}/{password}', function ($id) {

});
Route::post('dangky/{email}/{name}/{password}', function ($id) {

});
Route::get('users/{id}', function ($id) {

});

