<?php


namespace Core\Roller\Dices;

use Core\Roller\Dice;

/**
 * Class D4Dice
 *
 * @package Core\Roller
 */
class D4Dice extends Dice
{

    /**
     * D4Dice constructor.
     */
    public function __construct()
    {
        $this->min = 1;
        $this->max = 4;
    }

}