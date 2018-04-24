<?php


namespace Core\Roller;

/**
 * Class Dice
 * @package Core\Roller
 */
abstract class Dice
{

    protected $min;
    protected $max;
    /**
     * Dice rolling
     *
     * @return INT
     */
    public function roll() : INT
    {
        return random_int($this->min, $this->max);
    }
}