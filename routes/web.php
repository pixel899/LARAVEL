<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/','HomeController@index');
Route::get('/about_api','AboutAPIController@index');
Route::get('/card','CardController@card');
Route::post('/card/answer','CardController@answer');
Route::get('/time/{a}-{b}-{c}','TimeController@yestimestamp');
Route::get('/time/','TimeController@notimestamp');
Route::get('/news','NewsController@index');
Route::get('/news/categories','CategoriesController@index');
