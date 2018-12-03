<?php
declare(strict_types=1);

namespace tests\Unit\Core\RoomManager\Factories;

use Core\Common\Entities\User;
use Core\GameManager\Entities\Game;
use Core\RoomManager\Entities\Room;
use Core\RoomManager\Factories\RoomFactory;
use Tests\Unit\Core\TestCase;

/**
 * Class RoomFactoryTest
 * @package tests\Unit\Core\RoomManager\Factories
 */
class RoomFactoryTest extends TestCase
{

    /**
     * @test
     */
    public function testThatRoomIsProperlyCreated()
    {

        $gameMock = $this->getMockBuilder(Game::class)
            ->disableOriginalConstructor()
            ->getMock();

        $userMock = $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->getMock();


        $roomFactory = new RoomFactory('roomName', $gameMock, $userMock);
        $room = $roomFactory->create();
        $this->assertInstanceOf(Room::class, $room);
//        $this->assertEquals('roomName', $room->getName());
    }


}