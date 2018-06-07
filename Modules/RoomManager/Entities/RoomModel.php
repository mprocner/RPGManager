<?php


namespace Modules\RoomManager\Entities;


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
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function owner() {
        return $this->belongsTo(UserModel::class, 'owner_id');
    }
}