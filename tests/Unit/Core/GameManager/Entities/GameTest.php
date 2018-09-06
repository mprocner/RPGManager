<?php

namespace tests\Unit\Core\GameManager\Entities;

use Tests\Unit\Core\TestCase;
use Core\GameManager\Entities\Game;

class GameTest extends TestCase
{


    public function setUp()
    {
        parent::setUp();
    }

    public function testThatGetNameWorksProperly()
    {

        $game = new Game('name');

        $name = $game->getName();

        $this->assertEquals('name', $name);
    }


}
