<?php

Route::group(
    [
        'middleware' => ['web', 'auth'],
        'prefix' => 'room',
        'namespace' => 'Modules\RoomManager\Http\Controllers'
    ],
    function () {
        Route::get('/create', 'RoomManagerController@create')->name('room.create');
        Route::post('/store', 'RoomManagerController@store')->name('room.store');
        Route::get('/list', 'RoomManagerController@list')->name('room.list');
    }
);


Route::group(
    [
        'middleware' => ['web', 'auth'],
        'prefix' => 'invitations',
        'namespace' => 'Modules\RoomManager\Http\Controllers'
    ],
    function () {
        Route::get('/roomlist', 'RoomInvitationsController@roomsList');
        Route::post('/invite', 'RoomInvitationsController@invite')->name('room.invite');
        Route::get('/acceptInvitation', 'RoomInvitationsController@acceptInvitation')->name('room.acceptInvitation');
    }
);