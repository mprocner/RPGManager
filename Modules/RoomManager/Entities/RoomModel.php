<?php

namespace Modules\RoomManager\Entities;

use Core\RoomManager\Enums\RoomRoleEnum;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\UserModel;

class RoomModel extends Model
{

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rooms';

    /**
     * @return mixed
     */
    public function owner() {
        return $this->users()->wherePivot('role', RoomRoleEnum::OWNER)->limit(1);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function users() {
        return $this->belongsToMany(UserModel::class, 'users_rooms', 'user_id', 'room_id')
            ->withPivot('role')
            ->withTimestamps();
    }
}