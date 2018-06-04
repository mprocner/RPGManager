<?php

namespace Modules\RoomManager\Requests;

use Illuminate\Foundation\Http\FormRequest;

/**
 * Class StoreRoomRequest
 * @package Modules\RoomManager\Requests
 */
class StoreRoomRequest extends FormRequest
{

    /**
     * @return array
     */
    public function rules()
    {
        return [
            'roomName' => 'required|string',
            'game' => 'required'
        ];
    }

    public function authorize()
    {
        return true;
    }



}