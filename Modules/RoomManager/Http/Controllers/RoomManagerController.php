<?php

namespace Modules\RoomManager\Http\Controllers;

use Core\Common\Entities\User;
use Core\RoomManager\Data\StoreRoomData;
use Core\RoomManager\Repositories\RoomRepositoryInterface;
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
     * @var RoomRepositoryInterface
     */
    private $roomRepository;

    /**
     * RoomManagerController constructor.
     * @param Guard $guard
     * @param RoomRepositoryInterface $roomRepository
     */
    public function __construct(Guard $guard, RoomRepositoryInterface $roomRepository)
    {
        $this->guard = $guard;
        $this->roomRepository = $roomRepository;
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

        $formData = $request->all();
        $authenticatedUser= $this->guard->user();
        $owner = new User($authenticatedUser->email, $authenticatedUser->name);

        $storeRoomData = new StoreRoomData($formData['roomName'], $formData['game'], $owner);

        $createRoom = new CreateRoom($storeRoomData, $this->roomRepository);
        $createRoom->execute();

        return 'safd';
    }
}
