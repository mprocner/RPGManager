<?php
namespace Core\Roller\Tests\Unit\Dices;

use Core\Roller\Dices\CustomDice;
use Core\Tests\TestCase;

/**
 * Class CustomDiceTest
 * @package Core\Roller\Tests\Unit\Dices
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