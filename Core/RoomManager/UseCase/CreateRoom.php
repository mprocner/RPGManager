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
     * CreateRoom constructor.
     * @param StoreRoomData $data
     * @param RoomRepositoryInterface $roomRepository
     */
    public function __construct(StoreRoomData $data, RoomRepositoryInterface $roomRepository)
    {
        $this->data = $data;
        $this->roomRepository = $roomRepository;

    }

    /**
     * Create Room
     */
    public function execute()
    {

        $game = new Game($this->data->getGame());

        $roomFactory = new RoomFactory($this->data->getRoomName(), $game, $this->data->getOwner());

        $room = $roomFactory->create();

        $this->roomRepository->createRoom($room);


    }
}