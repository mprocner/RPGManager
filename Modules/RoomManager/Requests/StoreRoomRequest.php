<?php

namespace Modules\RoomManager\Requests;

class StoreRoomRequest extends \Illuminate\Http\Request
{

    public function rules()
    {
        return [
            'roomName' => 'required|string',
            'game' => 'required'
        ];
    }

}