<?php

namespace Core\RoomManager\Entities;

use Core\Common\Entities\User;
use Core\GameManager\Entities\Game;

/**
 * Class Room
 * @package Core\RoomManager\Entities
 */
class Room
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
     * Room owner (GameMaster)
     * @var User
     */
    private $owner;

    /**
     * Room constructor.
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
     * @return Game
     */
    public function getGame(): Game
    {
        return $this->game;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return User
     */
    public function getOwner(): User
    {
        return $this->owner;
    }



}