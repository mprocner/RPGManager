<?php

namespace Tests\Unit\Core\Roller;

use \Tests\Unit\Core\TestCase;
/**
 * Class D4DiceTest
 *
 * @package Tests\Unit\Core\Roller
 */
class D4DiceTest extends TestCase
{

    /**
     * Test that dice roll is correct
     */
    public function testThatRollIsCorrect() {
        $dice = new \Core\Roller\Dices\D4Dice();

        $result = $dice->roll();

        $this->assertNotNull($result);
        $this->assertRange(1, 4, $result);


    }
}