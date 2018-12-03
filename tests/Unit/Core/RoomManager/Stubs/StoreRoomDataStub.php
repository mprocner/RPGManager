<?php
declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: mateusz
 * Date: 03.12.18
 * Time: 22:46
 */

/**
 * Class StoreRoomDataStub
 */
class StoreRoomDataStub implements \Core\Common\Contracts\DataInterface
{


    /**
     * @return string
     */
    public function getGame(): string
    {
        return 'gameName';
    }

    /**
     * @return string
     */
    public function getRoomName(): string
    {
        return 'roomName';
    }

    /**
     * @return User
     */
    public function getOwner(): User
    {
        return $this->user;
    }


}