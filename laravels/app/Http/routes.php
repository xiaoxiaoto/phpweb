<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'user'], function()
{
    Route::get('/query','UserController@queryAll');
    Route::get('/query/pk/{id?}','UserController@queryDomainByPk')->where('id', '[0-9]+');
    Route::get('/query/id/{id}','UserController@queryDomainById')->where('id','[0-9]+');

});


