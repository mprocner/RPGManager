<?php

namespace Core\RoomManager\Factories;

use Core\Common\Contracts\FactoryInterface;
use Core\Common\Entities\User;
use Core\GameManager\Entities\Game;
use Core\RoomManager\Entities\Room;

/**
 * Class RoomFactory
 * @package Core\RoomManager\Factories
 */
class RoomFactory implements FactoryInterface
{

    /**
     * @var string
     */
    private $name;

    /**
     * @var Game
     */
    private $game;

    /**
     * @var User
     */
    private $owner;

    /**
     * RoomFactory constructor.
     * @param string $name
     * @param Game $game
     * @param User $owner
     */
    public function __construct(string $name, Game $game, User $owner)
    {
        $this->name = $name;
        $this->game = $game;
        $this->owner = $owner;

    }


    /**
     *
     */
    public function create()
    {

        $room = new Room($this->name, $this->game, $this->owner);

        return $room;

    }
}