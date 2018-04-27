<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Core\Http\Controllers'], function()
{
    Route::get('/', 'HomeController@index');
});
Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Core\Http\Controllers'], function()
{

    Auth::routes();
});

