<?php

namespace Modules\Core\Entities;

use Core\Common\Entities\User;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Modules\RoomManager\Entities\RoomModel;

/**
 * Class User
 * @package Modules\Core\Entities
 **/
class UserModel extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @return User
     */
    public function getEntity() {
        return new User($this->email, $this->name, $this->id);
    }


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function rooms() {
        return $this->belongsToMany(RoomModel::class,'users_rooms', 'room_id', 'user_id')
            ->withPivot('role')
            ->withTimestamps();
    }
}
