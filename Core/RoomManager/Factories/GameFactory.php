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
     * @var string
     */
    private $name;

    /**
     * GameFactory constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return Game
     */
    public function create(): Game
    {
        return new Game($this->name);
    }
}