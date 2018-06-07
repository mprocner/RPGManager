<?php

namespace Core\RoomManager\Repositories;

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
}