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



Route::post('upload', ['as' => 'upload-post', 'uses' =>'ImageController@postUpload']);
Route::post('upload/delete', ['as' => 'upload-remove', 'uses' =>'ImageController@deleteUpload']);

Route::get('server-images', ['as' => 'server-images', 'uses' => 'ImageController@getServerImages']);
Route::get('/', ['as' => 'upload', 'uses' => 'ImageController@getUpload']);
