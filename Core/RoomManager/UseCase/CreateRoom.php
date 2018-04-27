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
     * @param Game $game
     * @param Owner $owner
     */
    public function __construct(string $name, Game $game, Owner $owner)
    {
        $this->game = $game;
        $this->owner = $owner;
        $this->name = $name;
    }

    /**
     * Create Room
     */
    public function execute()
    {

        $roomFactory = new RoomFactory($this->name, $this->game, $this->owner);

        $room = $roomFactory->create();
    }
}