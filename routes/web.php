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

Route::get('/', "PagesController@index");

Route::get('/about{a}_{b}', "PagesController@about");

Route::get('/services', "PagesController@services");

Route::get('/user/{id}/user_{ids}_stuck', "UserController@index");
Route::get('/names', "NamesController@index");
Route::get('/names/create', "NamesController@create");
Route::get('/names/{id}', "NamesController@index2");