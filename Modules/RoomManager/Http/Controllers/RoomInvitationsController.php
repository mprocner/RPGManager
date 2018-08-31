<?php


namespace Modules\RoomManager\Http\Controllers;


use Core\RoomManager\Repositories\RoomRepositoryInterface;
use Illuminate\Contracts\Auth\Guard;
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
     * @var Guard
     */
    private $guard;

    /**
     * RoomInvitationController constructor.
     * @param RoomRepositoryInterface $roomRepository
     * @param Guard $guard
     */
    public function __construct(RoomRepositoryInterface $roomRepository, Guard $guard)
    {
        $this->roomRepository = $roomRepository;
        $this->guard = $guard;
    }

    /**
     * Invitations list
     */
    public function list()
    {
        $user = $this->guard->user()->getEntity();
        $rooms = $this->roomRepository->getRoomsCreatedByUser($user);
        return view('roommanager::invitations.list', ['rooms' => $rooms]);
    }


    /**
     * Add user to room
     */
    public function add()
    {

    }

    /**
     *
     */
    public function invite()
    {

    }

    /**
     *
     */
    public function acceptInvitation()
    {

    }

}