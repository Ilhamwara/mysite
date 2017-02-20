<?php

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

//TEMPLATE
Route::get('template','TemplateController@index');
Route::get('template/detail/{id}','TemplateController@detail');
Route::get('template/loadmore/{take?}/{skip?}','TemplateController@loadmore');

//PORTFOLIO
Route::get('portfolio/loadmore/{take?}/{skip?}','PortfolioController@loadmore');
