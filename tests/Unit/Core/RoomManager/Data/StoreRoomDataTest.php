<?php


namespace tests\Unit\Core\RoomManager\Data;


use Core\Common\Entities\User;
use Core\RoomManager\Data\StoreRoomData;
use Tests\Unit\Core\TestCase;

class StoreRoomDataTest extends TestCase
{

    private $userMock;

    public function setUp()
    {
        parent::setUp();

        $this->userMock = $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->getMock();
    }
    public function testThatStoreRoomDataIsProperlyCreated() {


        $storeRoomData = new StoreRoomData('roomName', 'game', $this->userMock);

        $this->assertInstanceOf(StoreRoomData::class, $storeRoomData);
    }

    public function testThatGameIsProperlyReturned()
    {
        $storeRoomData = new StoreRoomData('roomName', 'game', $this->userMock);

        $game = $storeRoomData->getGame();

        $this->assertEquals('game', $game);
    }

    public function testThatRoomNameIsProperlyReturned()
    {
        $storeRoomData = new StoreRoomData('roomName', 'game', $this->userMock);

        $roomName= $storeRoomData->getRoomName();

        $this->assertEquals('roomName', $roomName);
    }

    public function testThatOwnerIsProperlyReturned()
    {
        $storeRoomData = new StoreRoomData('roomName', 'game', $this->userMock);

        $owner = $storeRoomData->getOwner();

        $this->assertInstanceOf(User::class, $owner);
        $this->assertEquals($this->userMock, $owner);
    }

}