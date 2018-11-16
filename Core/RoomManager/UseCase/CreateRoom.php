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
     * @var RoomFactory
     */
    private $roomFactory;
    /**
     * @var GameFactory
     */
    private $gameFactory;

    /**
     * @var Room
     */
    private $room;

    /**
     * CreateRoom constructor.
     * @param StoreRoomData $data
     * @param RoomRepositoryInterface $roomRepository
     * @param RoomFactory $roomFactory
     * @param GameFactory $gameFactory
     */
    public function __construct(
        StoreRoomData $data,
        RoomRepositoryInterface $roomRepository,
        RoomFactory $roomFactory,
        GameFactory $gameFactory
    ) {
        $this->data = $data;
        $this->roomRepository = $roomRepository;
        $this->roomFactory = $roomFactory;
        $this->gameFactory = $gameFactory;

        $this->game = $this->gameFactory->create($this->data->getGame());
        $this->room = $this->roomFactory->create($this->data->getRoomName(), $this->game, $this->data->getOwner());
    }

    /**
     * Create Room
     */
    public function execute()
    {


        $this->roomRepository->createRoom($this->room);
    }
}