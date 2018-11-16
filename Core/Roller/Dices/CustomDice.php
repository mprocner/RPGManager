<?php
declare(strict_types=1);

namespace Core\Roller\Dices;

use Core\Roller\Dice;

class CustomDice extends Dice
{

    public function __construct($sides)
    {
        $this->sides = $sides;
    }

}