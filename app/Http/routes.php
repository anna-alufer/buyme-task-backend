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

Route::get('task-page', 'UsersTaskController@tasks');
Route::post('task-page/save', 'UsersTaskController@save');
Route::post('task-page/delete', 'UsersTaskController@delete');
Route::post('task-page/update', 'UsersTaskController@update');
Route::post('task-page/update-text', 'UsersTaskController@updateText');
