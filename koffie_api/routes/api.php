<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/recipes','RecipesController@show');
Route::get('/recipes/supplements','RecipeSupplementController@show');

Route::get('/coffee','CoffeeController@index');
Route::get('/coffee/{coffee}','CoffeeController@show');

Route::group(['middleware' => 'jwt.auth'], function () {
// PUT REGISTRATION RESTRICED ROUTES HERE
  Route::post('/recipes/create','RecipesController@store');
  Route::post('/recipes/update','RecipesController@update');
  Route::post('/recipes/delete','RecipesController@delete');
  Route::get('/recipes/supplements/{id}','RecipeSupplementController@getSupplementsFromRecipeId');
  Route::get('/recipes/{username}','RecipesController@getRecipesFromUserName');

  Route::post('/coffee/newcoffee', 'CoffeeController@store');
});

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');
Route::get('user', 'AuthController@getAuthUser');
