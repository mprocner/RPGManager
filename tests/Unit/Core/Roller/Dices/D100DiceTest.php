<?php
namespace Tests\Unit\Core\Roller;

use Core\Roller\Dices\D100Dice;
use Tests\Unit\Core\TestCase;

/**
 * Class D6DiceTest
 */
class D100DiceTest extends TestCase
{

    /**
     *
     */
    public function testThatRollIsCorrect()
    {
        $dice = new D100Dice();

        $result = $dice->roll();

        $this->assertNotNull($result);
        $this->assertRange(1, 100, $result);
    }

}