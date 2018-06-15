<?php

Route::group(['middleware' => ['web', 'auth'], 'prefix' => '', 'namespace' => 'Modules\Core\Http\Controllers'], function()
{
    Route::get('/app', 'AppController@index');

    Route::get('/', 'HomeController@index')->name('index');
});
Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Core\Http\Controllers'], function()
{

    Auth::routes();
});

