<?php


namespace Core\Roller;

/**
 * Class Dice
 * @package Core\Roller
 */
abstract class Dice
{

    protected $face;
    /**
     * Dice rolling
     *
     * @return INT
     */
    public function roll() : INT
    {
        return random_int(1, $this->face);
    }
}