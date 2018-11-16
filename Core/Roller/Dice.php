<?php
declare(strict_types=1);

namespace Core\Roller;

/**
 * Class Dice
 * @package Core\Roller
 */
abstract class Dice
{

    protected $sides;
    /**
     * Dice rolling
     *
     * @return INT
     */
    public function roll() : INT
    {
        return random_int(1, $this->sides);
    }
}