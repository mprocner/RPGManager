<?php
namespace Tests\Unit\Core\Roller;

use Core\Roller\Dices\D10Dice;
use Tests\Unit\Core\TestCase;

/**
 * Class D6DiceTest
 */
class D10DiceTest extends TestCase
{

    /**
     *
     */
    public function testThatRollIsCorrect()
    {
        $dice = new D10Dice();

        $result = $dice->roll();

        $this->assertNotNull($result);
        $this->assertRange(1, 10, $result);
    }

}