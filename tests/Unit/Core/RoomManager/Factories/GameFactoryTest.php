<?php
declare(strict_types=1);

namespace tests\Unit\Core\RoomManager\Factories;

use Core\GameManager\Entities\Game;
use Core\RoomManager\Factories\GameFactory;
use Tests\Unit\Core\TestCase;

/**
 * Class GameFactoryTest
 * @package tests\Unit\Core\RoomManager\Factories
 */
class GameFactoryTest extends TestCase
{

    /**
     * @test
     */
    public function testThatGameIsPropelyCreated()
    {

        $gameFactory = new GameFactory('test');
        $game = $gameFactory->create();

        $this->assertInstanceOf(Game::class, $game);
        $this->assertEquals('test', $game->getName());
    }

}
