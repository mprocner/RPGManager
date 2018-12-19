<?php
namespace Core\Roller\Tests\Unit\Dices;

use Core\Roller\Dices\D6Dice;
use Core\Tests\TestCase;

/**
 * Class D6DiceTest
 * @package Core\Roller\Tests\Unit\Dices
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