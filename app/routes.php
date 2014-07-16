<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'HomeController@showWelcome');

Route::get('/test','TestController@getTest');
Route::post('/test-result','TestController@postTestResult');
Route::controller('setting','SettingController');
Route::controller('object','ObjectController');
Route::controller('entity','EntityController');