<?php


namespace tests\Unit\Core\RoomManager\Factories;


use Core\Common\Entities\User;
use Core\GameManager\Entities\Game;
use Core\RoomManager\Entities\Room;
use Core\RoomManager\Factories\RoomFactory;
use Tests\Unit\Core\TestCase;

class RoomFactoryTest extends TestCase
{

    public function testThatRoomIsProperlyCreated() {

        $gameMock = $this->getMockBuilder(Game::class)
            ->disableOriginalConstructor()
            ->getMock();

        $userMock = $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->getMock();

        $roomFactory = new RoomFactory('roomName', $gameMock, $userMock);

        $room = $roomFactory->create();
        $this->assertInstanceOf(Room::class, $room);
        $this->assertEquals('roomName', $room->getName());
    }


}