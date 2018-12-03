<?php
declare(strict_types=1);

namespace Modules\RoomManager\Http\Controllers;

use Core\Common\Entities\User;
use Core\RoomManager\Data\StoreRoomData;
use Core\RoomManager\Factories\GameFactory;
use Core\RoomManager\Factories\RoomFactory;
use Core\RoomManager\Repositories\RoomRepositoryInterface;
use Core\RoomManager\UseCase\CreateRoom;
use Illuminate\Contracts\Auth\Guard;
use Modules\RoomManager\Requests\StoreRoomRequest;
use Modules\Core\Http\Controllers\Controller;
use Modules\RoomManager\Entities\RoomModel;

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
     * @var RoomFactory
     */
    private $roomFactory;

    /**
     * @var GameFactory
     */
    private $gameFactory;

    /**
     * RoomManagerController constructor.
     * @param Guard $guard
     * @param RoomRepositoryInterface $roomRepository
     * @param RoomFactory $roomFactory
     * @param GameFactory $gameFactory
     */
    public function __construct(
        Guard $guard,
        RoomRepositoryInterface $roomRepository,
        RoomFactory $roomFactory,
        GameFactory $gameFactory
    ) {
        $this->guard = $guard;
        $this->roomRepository = $roomRepository;
        $this->roomFactory = $roomFactory;
        $this->gameFactory = $gameFactory;
    }

    /**
     * Create new room form
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
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

        $createRoom = new CreateRoom($storeRoomData, $this->roomRepository, $this->roomFactory, $this->gameFactory);
        $createRoom->execute();

        return response()->redirectToRoute('room.list');
    }

    /**
     * Rooms list
     */
    public function list()
    {
        \App::setLocale('pl');
        $user = $this->guard->user()->getEntity();
        $rooms = $this->roomRepository->findUserRooms($user);
        return view('roommanager::list', ['rooms' => $rooms]);
    }

    /**
     * Enter room
     * @param RoomModel $room
     */
    public function enter(RoomModel $room)
    {
        return view('core::application');
    }
}
