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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::post('/creatInfo', 'InfoController@createinfo');
Route::get('/showInfo', 'InfoController@showInfo');
Route::get('/user', 'InfoController@user');
Route::post('/search', 'InfoController@search');
Route::get('/inbound/add', 'InfoController@inboundadd');
Route::get('/outbound/add', 'InfoController@outboundadd');


Route::post('/creatOutbound', 'outboundController@creatOutbound');
Route::get('/showInfooutbound', 'outboundController@showInfooutbound');
Route::post('/searchoutbound', 'outboundController@searchoutbound');


