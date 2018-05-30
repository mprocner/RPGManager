<?php

namespace Modules\RoomManager\Http\Controllers;

use Modules\RoomManager\Requests\StoreRoomRequest;
use Modules\Core\Http\Controllers\Controller;

/**
 * Class RoomManagerController
 * @package Modules\RoomManager\Http\Controllers
 */
class RoomManagerController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $a = 1;
        return view('roommanager::create');
    }

    /**
     * Store room to database
     *
     */
    public function store(StoreRoomRequest $request)
    {
        $
        $data = $request->all();
        return 'safd';
    }
}
