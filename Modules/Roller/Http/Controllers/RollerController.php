<?php

namespace Modules\Roller\Http\Controllers;

use Core\Roller\Dices\D100Dice;
use Core\Roller\Dices\D10Dice;
use Core\Roller\Dices\D4Dice;
use Core\Roller\Dices\D6Dice;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class RollerController extends Controller
{

    public function rollD4() {
        $dice = new D4Dice();
        return $dice->roll();
    }


    /**
     * Roll D6 dice
     *
     * @return INT
     */
    public function rollD6() {

        $dice = new D6Dice();
        return $dice->roll();
    }

    /**
     * Roll D10 dice
     *
     * @return INT
     */
    public function rollD10() {

        $dice = new D10Dice();
        return $dice->roll();
    }

    /**
     * Roll D10 dice
     *
     * @return INT
     */
    public function rollD100() {

        $dice = new D100Dice();
        return $dice->roll();
    }
}
