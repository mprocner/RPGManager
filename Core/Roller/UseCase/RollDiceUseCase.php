<?php
declare(strict_types=1);

namespace Core\Roller\UseCase;

use Core\Common\Contracts\UseCaseInterface;
use Core\Roller\Dice;
use Core\Roller\Repositories\RollRepositoryInterface;

/**
 * Class RollDiceUseCase
 * @package Core\Roller\UseCase
 */
class RollDiceUseCase implements UseCaseInterface
{

    /**
     * @var Dice
     */
    private $dice;

    /**
     * @var RollRepositoryInterface
     */
    private $rollRepository;

    /**
     * RollDiceUseCase constructor.
     * @param Dice $dice
     */
    public function __construct(Dice $dice)
    {
        $this->dice = $dice;

//        $this->rollRepository = $rollRepository;
    }

    /**
     *
     */
    public function execute()
    {
        $result = $this->dice->roll();

//        $this->rollRepository->saveRoll(['result' => $result]);

        return $result;
    }


}