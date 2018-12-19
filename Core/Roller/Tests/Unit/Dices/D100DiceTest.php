<?php
namespace Core\Roller\Tests\Unit\Dices;

use Core\Roller\Dices\D100Dice;
use Core\Tests\TestCase;

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