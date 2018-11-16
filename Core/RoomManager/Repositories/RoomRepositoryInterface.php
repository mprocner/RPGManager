<?php
declare(strict_types=1);

namespace Core\RoomManager\Repositories;

use Core\Common\Entities\User;
use Core\RoomManager\Entities\Room;

/**
 * Interface RoomRepositoryInterface
 */
interface RoomRepositoryInterface
{

    /**
     * @param $room
     * @return mixed
     */
    public function createRoom(Room $room);

    /**
     * @param User $user
     * @return mixed
     */
    public function findUserRooms(User $user);

    /**
     * @param User $user
     * @return mixed
     */
    public function getRoomsCreatedByUser(User $user);
}