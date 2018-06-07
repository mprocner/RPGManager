<?php

namespace Modules\RoomManager\Repositories;

use Core\RoomManager\Entities\Room;
use Core\RoomManager\Repositories\RoomRepositoryInterface;
use Modules\Core\Entities\UserModel;
use Modules\RoomManager\Entities\RoomModel;

class RoomRepository implements RoomRepositoryInterface
{
    public function createRoom(Room $room)
    {
        $owner = UserModel::where('email', '=', $room->getOwner()->getEmail())->first();

        $roomModel = new RoomModel();
        $roomModel->game_id = 1;
        $roomModel->owner()->associate($owner);
        $roomModel->name = $room->getName();
        $roomModel->save();
    }

}