<?php

namespace Core\Roller\Tests\Unit\UseCase;

use Core\Roller\Dices\CustomDice;
use Tests\TestCase;
use Core\Roller\UseCase\RollDiceUseCase;

/**
 * Class RollDiceUseCaseTest
 * @package tests\Unit\Core\Roller\UseCase
 */
class RollDiceUseCaseTest extends TestCase
{


    public function setUp()
    {
        parent::setUp();
    }

    public function testThatExecuteReturns1WhereD1DiceGiven()
    {
        $dice = $this->getMockBuilder(CustomDice::class)
            ->setConstructorArgs([1])
            ->setMethods(['roll'])
            ->getMock();
        $dice->expects($this->once())
            ->method('roll')
            ->willReturn(1);

        $useCase = new RollDiceUseCase($dice);

        $result = $useCase->execute();
        $this->assertEquals(1, $result);
    }
}
