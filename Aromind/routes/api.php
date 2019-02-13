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

Route::post('auth/register', 'AuthController@register');

Route::post('auth/login', 'AuthController@login');
Route::group(['middleware' => 'jwt.auth'], function(){
  Route::get('auth/user', 'AuthController@user');
  Route::post('auth/logout', 'AuthController@logout');
});
Route::group(['middleware' => 'jwt.refresh'], function(){
  Route::get('auth/refresh', 'AuthController@refresh');
});

// List articles
Route::get('articles', 'ArticleController@index');

// List single article
Route::get('article/{id}', 'ArticleController@show');

// Create new article
Route::post('article', 'ArticleController@store');

// Update article
Route::put('article', 'ArticleController@store');

// Delete article
Route::delete('article/{id}', 'ArticleController@destroy');