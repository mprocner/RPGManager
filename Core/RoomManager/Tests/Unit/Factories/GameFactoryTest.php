<?php
declare(strict_types=1);

namespace Core\RoomManager\Tests\Unit\Factories;

use Core\GameManager\Entities\Game;
use Core\RoomManager\Factories\GameFactory;
use Core\Tests\TestCase;

/**
 * Class GameFactoryTest
 * @package Core\RoomManager\Tests\Unit\Factories
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
