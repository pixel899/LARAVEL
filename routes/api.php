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

