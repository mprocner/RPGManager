<?php
declare(strict_types=1);

namespace Core\RoomManager\Tests\Unit\Entities;

use Core\Common\Entities\User;
use Core\GameManager\Entities\Game;
use Core\Tests\TestCase;
use Core\RoomManager\Entities\Room;

class RoomTest extends TestCase
{


    private $userMock;
    private $gameMock;

    public function setUp()
    {
        parent::setUp();

        $this->gameMock = $this->getMockBuilder(Game::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->userMock = $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    public function testThatGameIsProperlyReturned()
    {

        $room = new Room('roomName', $this->gameMock, $this->userMock);

        $game = $room->getGame();

        $this->assertEquals($this->gameMock, $game);
        $this->assertInstanceOf(Game::class, $game);
        

    }

    public function testThatOwnerIsProperlyReturned()
    {
        $room = new Room('roomName', $this->gameMock, $this->userMock);

        $owner = $room->getOwner();

        $this->assertEquals($this->userMock, $owner);
        $this->assertInstanceOf(User::class, $owner);
    }
}
