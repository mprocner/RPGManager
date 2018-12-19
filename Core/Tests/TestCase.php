<?php
declare(strict_types=1);

namespace Core\Tests;

/**
 * Class TestCase
 */
class TestCase extends \PHPUnit\Framework\TestCase
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