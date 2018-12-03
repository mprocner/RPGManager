<?php
declare(strict_types=1);

namespace Core\RoomManager\UseCase;

use Core\Common\Contracts\UseCaseInterface;
use Core\GameManager\Entities\Game;
use Core\RoomManager\Data\StoreRoomData;
use Core\RoomManager\Factories\GameFactory;
use Core\RoomManager\Factories\RoomFactory;
use Core\RoomManager\Repositories\RoomRepositoryInterface;
use Core\RoomManager\Entities\Room;

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
     * @var RoomRepositoryInterface
     */
    private $roomRepository;

    /**
     * @var StoreRoomData
     */
    private $data;

    /**
     * @var Room
     */
    private $room;

    /**
     * @var RoomFactory
     */
    private $roomFactory;

    /**
     * @var GameFactory
     */
    private $gameFactory;

    /**
     * CreateRoom constructor.
     * @param StoreRoomData $data
     * @param RoomRepositoryInterface $roomRepository
     */
    public function __construct(
        StoreRoomData $data,
        RoomRepositoryInterface $roomRepository
    ) {
        $this->data = $data;
        $this->roomRepository = $roomRepository;

        $this->gameFactory = new GameFactory($this->data->getGame());
        $this->game = $this->gameFactory->create();

        $this->roomFactory = new RoomFactory($this->data->getRoomName(), $this->game, $this->data->getOwner());
        $this->room = $this->roomFactory->create();
    }

    /**
     * Create Room
     */
    public function execute()
    {


        $this->roomRepository->createRoom($this->room);
    }
}