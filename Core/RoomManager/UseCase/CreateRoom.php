<?php

namespace Core\RoomManager\UseCase;

use Core\Common\Contracts\UseCaseInterface;
use Core\GameManager\Entities\Game;
use Core\RoomManager\Factories\RoomFactory;

/**
 * Class CreateRoom
 * @package Core\RoomManager\UseCase
 */
class CreateRoom implements UseCaseInterface
{

    /**
     * @var Game
     */
    private $game;

    /**
     * @var Owner
     */
    private $owner;

    /**
     * @var string
     */
    private $name;
    /**
     * CreateRoom constructor.
     * @param string $name
     * @param string $game
     * @param Owner $owner
     */
    public function __construct(string $name, string $game, Owner $owner)
    {
        $this->name = $name;
        $this->game = $game;
        $this->owner = $owner;
    }

    /**
     * Create Room
     */
    public function execute()
    {

        $game = new Game($this->game);

        $roomFactory = new RoomFactory($this->name, $game, $this->owner);

        $room = $roomFactory->create();
    }
}