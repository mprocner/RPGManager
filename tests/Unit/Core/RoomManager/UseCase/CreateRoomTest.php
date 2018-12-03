<?php
declare(strict_types=1);

namespace tests\Unit\Core\RoomManager\UseCase;

use Core\GameManager\Entities\Game;
use Core\RoomManager\Data\StoreRoomData;
use Core\RoomManager\Entities\Room;
use Core\RoomManager\Factories\GameFactory;
use Core\RoomManager\Factories\RoomFactory;
use Core\RoomManager\Repositories\RoomRepositoryInterface;
use Tests\TestCase;
use Core\RoomManager\UseCase\CreateRoom;

/**
 * Class CreateRoomTest
 * @package tests\Unit\Core\RoomManager\UseCase
 */
class CreateRoomTest extends TestCase
{

    /**
     *
     */
    public function setUp()
    {
        parent::setUp();
    }

    /**
     * @test
     */
    public function testThatCreateRoomUseCaseExecuteProperly()
    {
        $storeRoomDataMock = $this->getMockBuilder(StoreRoomData::class)
            ->disableOriginalConstructor()
            ->getMock();
        $roomRepositoryMock = $this->getMockBuilder(RoomRepositoryInterface::class)
            ->disableOriginalConstructor()
            ->getMock();



        $createRoom = new CreateRoom($storeRoomDataMock, $roomRepositoryMock);
        $createRoom->execute();
    }

}
