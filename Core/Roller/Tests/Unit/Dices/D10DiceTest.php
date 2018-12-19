<?php
namespace Core\Roller\Tests\Unit\Dices;

use Core\Roller\Dices\D10Dice;
use Core\Tests\TestCase;

/**
 * Class D10DiceTest
 * @package Core\Roller\Tests\Unit\Dices
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