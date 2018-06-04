<?php

namespace Modules\RoomManager\Http\Controllers;

use Core\RoomManager\UseCase\CreateRoom;
use Illuminate\Contracts\Auth\Guard;
use Modules\RoomManager\Requests\StoreRoomRequest;
use Modules\Core\Http\Controllers\Controller;

/**
 * Class RoomManagerController
 * @package Modules\RoomManager\Http\Controllers
 */
class RoomManagerController extends Controller
{
    /**
     * @var Guard
     */
    private $guard;

    /**
     * RoomManagerController constructor.
     * @param Guard $guard
     */
    public function __construct(Guard $guard)
    {
        $this->guard = $guard;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        $a = 1;
        return view('roommanager::create');
    }

    /**
     * @param StoreRoomRequest $request
     * @return string
     */
    public function store(StoreRoomRequest $request)
    {

        $data = $request->all();
        $owner = $this->guard->user();
        dd($data);

        $createRoom = new CreateRoom($data['roomName'], $data['game'], $owner);
        $createRoom->execute();

        return 'safd';
    }
}
