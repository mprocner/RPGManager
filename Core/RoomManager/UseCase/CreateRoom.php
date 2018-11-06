<?php

namespace Core\RoomManager\UseCase;

use Core\Common\Contracts\UseCaseInterface;
use Core\Common\Entities\User;
use Core\GameManager\Entities\Game;
use Core\RoomManager\Data\StoreRoomData;
use Core\RoomManager\Factories\RoomFactory;
use Core\RoomManager\Repositories\RoomRepositoryInterface;

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
     * @var RoomRepositoryInterface
     */
    private $roomRepository;

    /**
     * @var StoreRoomData
     */
    private $data;

    /**
     * @var RoomFactory
     */
    private $roomFactory;

    /**
     * CreateRoom constructor.
     * @param StoreRoomData $data
     * @param RoomRepositoryInterface $roomRepository
     */
    public function __construct(StoreRoomData $data, RoomRepositoryInterface $roomRepository)
    {
        $this->data = $data;
        $this->roomRepository = $roomRepository;

        $this->game = new Game($this->data->getGame());
        $this->roomFactory = new RoomFactory($this->data->getRoomName(), $this->game, $this->data->getOwner());
    }

    /**
     * Create Room
     */
    public function execute()
    {
        $room = $this->roomFactory->create();

        $this->roomRepository->createRoom($room);
    }
}