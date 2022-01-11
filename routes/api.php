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

Route::get('/{a}+{b}','CalculatorController@plus');
Route::get('/{a}-{b}','CalculatorController@minus');
Route::get('/{a}*{b}','CalculatorController@times');
Route::get('/{a}:{b}','CalculatorController@divided');

Route::group(['prefix' => 'categories'], function () {

    Route::get('', 'CategoriesController@index');
    Route::post('', 'CategoriesController@store');
    Route::get('{categories_id}', 'CategoriesController@show');
    Route::put('{categories_id}', 'CategoriesController@update');
    Route::delete('{categories_id}', 'CategoriesController@destroy');
    Route::post('restore/{categories_id}', 'CategoriesController@restore');

});
Route::group(['prefix' => 'news'], function () {

    Route::get('', 'NewsController@index');
    Route::get('/{categories}', 'NewsController@filter');
    Route::post('', 'NewsController@store');





});

