<?php

namespace tests\Unit\Core\RoomManager\UseCase;

use Core\GameManager\Entities\Game;
use Core\RoomManager\Entities\Room;
use Core\RoomManager\Factories\GameFactory;
use Core\RoomManager\Factories\RoomFactory;
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
        $gameMock = $this->getMockBuilder(Game::class)
            ->disableOriginalConstructor()
            ->getMock();
        $gameFactoryMock = $this->getMockBuilder(GameFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $gameFactoryMock->expects($this->once())
            ->method('create')
            ->willReturn($gameMock);

        $roomMock = $this->getMockBuilder(Room::class)
            ->disableOriginalConstructor()
            ->getMock();

        $roomFactoryMock = $this->getMockBuilder(RoomFactory::class)
            ->disableOriginalConstructor()
            ->getMock();

        $roomFactoryMock->expects($this->once())
            ->method('create')
            ->willReturn($gameMock);


//        $createRoom = new CreateRoom()
    }

}
