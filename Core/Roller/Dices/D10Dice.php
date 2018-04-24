<?php


namespace Core\Roller\Dices;

use Core\Roller\Dice;
/**
 * Class D6Dice
 *
 * @package Core\Roller\Dices
 */
class D10Dice extends Dice
{

    /**
     * D6Dice constructor.
     */
    function __construct()
    {
        $this->min = 1;
        $this->max = 10;
    }
}