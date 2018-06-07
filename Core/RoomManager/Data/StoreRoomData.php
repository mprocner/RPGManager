<?php

namespace Core\RoomManager\Data;


use Core\Common\Contracts\DataInterface;
use Core\Common\Entities\User;

/**
 * Class StoreRoomData
 * @package Core\RoomManager\Data
 */
class StoreRoomData implements DataInterface
{

    /**
     * @var string
     */
    private $roomName;

    /**
     * @var string
     */
    private $game;

    /**
     * @var User
     */
    private $owner;

    /**
     * StoreRoomData constructor.
     * @param string $roomName
     * @param string $game
     * @param User $user
     */
    public function __construct(string $roomName, string $game, User $user)
    {
        $this->roomName = $roomName;
        $this->game = $game;
        $this->user = $user;

    }

    /**
     * @return string
     */
    public function getGame(): string
    {
        return $this->game;
    }

    /**
     * @return string
     */
    public function getRoomName(): string
    {
        return $this->roomName;
    }

    /**
     * @return User
     */
    public function getOwner(): User
    {
        return $this->user;
    }
}