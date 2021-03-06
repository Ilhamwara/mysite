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
Route::get('tambah','TemplateController@tambah');
Route::post('proses-tambah','TemplateController@prosestambah');
Route::get('template/detail/{id}','TemplateController@detail');
Route::get('template/loadmore/{take?}/{skip?}','TemplateController@loadmore');
Route::get('portfolio/loadmore/{take?}/{skip?}','TemplateController@loadmoreportfolio');

//MAIL
Route::post('sendmail-contact','SendMailController@contactmail');