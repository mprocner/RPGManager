<?php
declare(strict_types=1);

namespace Core\RoomManager\Factories;

use Core\Common\Entities\User;
use Core\GameManager\Entities\Game;
use Core\RoomManager\Entities\Room;

/**
 * Class RoomFactory
 * @package Core\RoomManager\Factories
 */
class RoomFactory
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
     * @return Room
     */
    public function create(): Room
    {
        $room = new Room($this->name, $this->game, $this->owner);

        return $room;
    }
}