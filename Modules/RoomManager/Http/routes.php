<?php

Route::group(
    [
        'middleware' => ['web', 'auth'],
        'prefix' => 'room',
        'namespace' => 'Modules\RoomManager\Http\Controllers'
    ],
    function () {
        Route::get('/create', 'RoomManagerController@create');
    }
);
