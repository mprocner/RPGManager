<?php
declare(strict_types=1);

namespace Core\RoomManager\Factories;

use Core\GameManager\Entities\Game;

/**
 * Class GameFactory
 * @package Core\RoomManager\Factories
 */
class GameFactory
{

    /**
     * @param string $name
     * @return Game
     */
    public static function create(string $name)
    {
        return new Game($name);
    }
}