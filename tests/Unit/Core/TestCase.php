<?php
namespace Tests\Unit\Core;
/**
 * Class TestCase
 */
class TestCase extends \Tests\TestCase
{

    /**
     * Assert that arguments are in range
     *
     * @param $min
     * @param $max
     * @param $number
     */
    protected function assertRange($min, $max, $number) {

        $this->assertGreaterThanOrEqual($min, $number, 'Result is lower than it should be');
        $this->assertLessThanOrEqual($max, $number, 'Result is greater than it should be');

    }

}