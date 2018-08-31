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
    public function __construct()
    {
        $this->sides = 10;
    }
}