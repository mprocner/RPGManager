<?php

namespace Modules\RoomManager\Repositories;

use Core\Common\Entities\User;
use Core\RoomManager\Entities\Room;
use Core\RoomManager\Enums\RoomRoleEnum;
use Core\RoomManager\Repositories\RoomRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Modules\Core\Entities\UserModel;
use Modules\RoomManager\Entities\RoomModel;

class RoomRepository implements RoomRepositoryInterface
{

    public function createRoom(Room $room) : RoomModel
    {
        $owner = UserModel::where('email', '=', $room->getOwner()->getEmail())->first();

        $roomModel = new RoomModel();
        $roomModel->game_id = 1;
        $roomModel->name = $room->getName();
        $roomModel->save();
        $roomModel->users()->attach($owner, ['role' => RoomRoleEnum::OWNER]);
        return $roomModel;
    }

    public function findUserRooms(User $user) : Collection
    {

        $rooms = UserModel::find($user->getId())->rooms()->get();

        return $rooms;
    }

    public function getRoomsCreatedByUser(User $user)
    {
        $rooms = UserModel::find($user->getId())->rooms()->wherePivot('role', RoomRoleEnum::OWNER)->get();

        return $rooms;
    }

}