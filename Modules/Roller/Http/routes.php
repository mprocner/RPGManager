<?php

Route::group(['middleware' => 'web', 'prefix' => 'roller', 'namespace' => 'Modules\Roller\Http\Controllers'], function()
{
    Route::get('/', 'RollerController@index');

    /**
     * Api routes
     */

    Route::get('/{dice}', 'RollerController@roll');
});
