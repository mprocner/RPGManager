<?php

namespace Core\Roller\Tests\Unit\Dices;

use Core\Roller\Dices\D4Dice;
use Core\Tests\TestCase;

/**
 * Class D4DiceTest
 * @package Core\Roller\Tests\Unit\Dices
 */
class D4DiceTest extends TestCase
{

    /**
     * Test that dice roll is correct
     */
    public function testThatRollIsCorrect()
    {
        $dice = new D4Dice();

        $result = $dice->roll();

        $this->assertNotNull($result);
        $this->assertRange(1, 4, $result);


    }
}