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
     * @return Room
     */
    public static function create(string $name, Game $game, User $owner)
    {

        $room = new Room($name, $game, $owner);

        return $room;
    }
}