<?php

Route::group(
    [
        'middleware' => 'web',
        'prefix' => 'roller',
        'namespace' => 'Modules\Roller\Http\Controllers'
    ], function () {
            Route::get('/', 'RollerController@index');

            /**
             * Api routes
             */

            Route::get('/rolld4', 'RollerController@rollD4');
            Route::get('/rolld6', 'RollerController@rollD6');
            Route::get('/rolld10', 'RollerController@rollD10');
            Route::get('/rolld100', 'RollerController@rollD100');
    }
);
