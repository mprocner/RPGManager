<?php

namespace Modules\Roller\Http\Controllers;

use Core\Roller\Dices\CustomDice;
use Core\Roller\Dices\D100Dice;
use Core\Roller\Dices\D10Dice;
use Core\Roller\Dices\D4Dice;
use Core\Roller\Dices\D6Dice;
use Core\Roller\UseCase\RollDiceUseCase;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use Modules\Roller\Http\Requests\CustomRollRequest;
use Pusher\Pusher;

class RollerController extends Controller
{

    /**
     * @var Pusher
     */
    private $pusher;

    /**
     * RollerController constructor.
     */
    public function __construct()
    {
        $options = array(
            'cluster' => 'eu',
            'encrypted' => true
        );
        $this->pusher = new Pusher(
            '85257f7345f940c15c61',
            'cc9ee99825bfaefe92fd',
            '516064',
            $options
        );


    }

    /**
     * @param CustomRollRequest $request
     * @return INT
     * @internal param int $sides
     */
    public function customRoll(CustomRollRequest $request)
    {
        $sides = $request->input('dice');
        $rollDice = new RollDiceUseCase(new CustomDice($sides));
        $result = $rollDice->execute();

        $data['result'] = $result;
        $data['message'] = 'Rolling D'.$sides;
        $this->pusher->trigger('rpgmanager-roller', 'dicerolled', $data);


        return $result;
    }

    /**
     * @return INT|mixed
     */
    public function rollD4()
    {

        $rollDice = new RollDiceUseCase(new D4Dice());
        $result =$rollDice->execute();

        $data['result'] = $result;
        $data['message'] = 'Rolling D4';
        $this->pusher->trigger('rpgmanager-roller', 'dicerolled', $data);


        return $result;
    }


    /**
     * Roll D6 dice
     *
     * @return INT
     */
    public function rollD6()
    {

        $rollDice = new RollDiceUseCase(new D6Dice());
        $result =$rollDice->execute();

        $data['result'] = $result;
        $data['message'] = 'Rolling D6';
        $this->pusher->trigger('rpgmanager-roller', 'dicerolled', $data);


        return $result;
    }

    /**
     * Roll D10 dice
     *
     * @return INT
     */
    public function rollD10()
    {

        $rollDice = new RollDiceUseCase(new D10Dice());
        $result =$rollDice->execute();

        $data['result'] = $result;
        $data['message'] = 'Rolling D10';
        $this->pusher->trigger('rpgmanager-roller', 'dicerolled', $data);


        return $result;
    }

    /**
     * Roll D10 dice
     *
     * @return INT
     */
    public function rollD100()
    {

        $rollDice = new RollDiceUseCase(new D100Dice());
        $result =$rollDice->execute();

        $data['result'] = $result;
        $data['message'] = 'Rolling D100';
        $this->pusher->trigger('rpgmanager-roller', 'dicerolled', $data);


        return $result;
    }


    /**
     *
     */
    public function sendMessage()
    {
        $message = Input::get('message');
        $data['message'] = $message;
        $this->pusher->trigger('rpgmanager-roller', 'dicerolled', $data);

        return response('', 200);
    }
}
