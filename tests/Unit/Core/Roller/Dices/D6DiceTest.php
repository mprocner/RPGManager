<?php
namespace Tests\Unit\Core\Roller;

use Core\Roller\Dices\D6Dice;
use Tests\Unit\Core\TestCase;

/**
 * Class D6DiceTest
 */
class D6DiceTest extends TestCase
{

    /**
     *
     */
    public function testThatRollIsCorrect()
    {
        $dice = new D6Dice();

        $result = $dice->roll();

        $this->assertNotNull($result);
        $this->assertRange(1, 6, $result);
    }

}