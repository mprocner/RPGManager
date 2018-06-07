<?php


namespace tests\Unit\Core\RoomManager\Data;


use Core\Common\Entities\User;
use Core\RoomManager\Data\StoreRoomData;
use Tests\Unit\Core\TestCase;

class StoreRoomDataTest extends TestCase
{

    public function testThatStoreRoomDataIsProperlyCreated() {

        $userMock = $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->getMock();

        $storeRoomData = new StoreRoomData('roomName', 'game', $userMock);

        $this->assertInstanceOf(StoreRoomData::class, $storeRoomData);
    }

}