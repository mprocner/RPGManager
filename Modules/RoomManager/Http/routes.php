<?php

Route::group(
    [
        'middleware' => ['web', 'auth'],
        'prefix' => 'room',
        'namespace' => 'Modules\RoomManager\Http\Controllers'
    ],
    function () {
        Route::get('/create', 'RoomManagerController@create');
        Route::post('/store', 'RoomManagerController@store');
        Route::get('/list', 'RoomManagerController@list')->name('room.list');
    }
);

Route::group(
    [
        'middleware' => ['web', 'auth'],
        'prefix', 'invitations',
        'namespace' => 'Modules\RoomManager\Http\Controllers'
    ],
    function () {
        Route::get('/roomlist', 'RoomInvitationsController@roomsList') ;
        Route::post('/invite', 'RoomInvitationsController@invite');
        Route::get('/acceptInvitation', 'RoomInvitationsController@acceptInvitation');
    }
);
