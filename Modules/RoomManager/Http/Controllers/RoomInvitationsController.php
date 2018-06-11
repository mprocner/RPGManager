<?php


namespace Modules\RoomManager\Http\Controllers;


use Core\RoomManager\Repositories\RoomRepositoryInterface;
use Modules\Core\Http\Controllers\Controller;

/**
 * Class RoomInvitationController
 * @package Modules\RoomManager\Http\Controllers
 */
class RoomInvitationsController extends Controller
{
    /**
     * @var RoomRepositoryInterface
     */
    private $roomRepository;

    /**
     * RoomInvitationController constructor.
     * @param RoomRepositoryInterface $roomRepository
     */
    public function __construct(RoomRepositoryInterface $roomRepository)
    {
        $this->roomRepository = $roomRepository;
    }

    /**
     *
     */
    public function roomsList()
    {
        dd('asdf');
        $user = $this->guard->user()->getEntity();
        $rooms = $this->roomRepository->getRoomsCreatedByUser($user);
        return view('roommanager::invitations.list', ['rooms' => $rooms]);
    }

    /**
     *
     */
    public function invite()
    {
dd('asdf');
    }

    /**
     *
     */
    public function acceptInvitation()
    {

    }

}