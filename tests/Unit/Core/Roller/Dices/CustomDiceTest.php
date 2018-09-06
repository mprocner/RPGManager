<?php
namespace Tests\Unit\Core\Roller;

use Core\Roller\Dices\CustomDice;
use Core\Roller\Dices\D100Dice;
use Tests\Unit\Core\TestCase;

/**
 * Class D6DiceTest
 */
class CustomDiceTest extends TestCase
{

    /**
     *
     */
    public function testThatRollIsCorrect()
    {
        $dice = new CustomDice(7);

        $result = $dice->roll();

        $this->assertNotNull($result);
        $this->assertRange(1, 7, $result);
    }

}