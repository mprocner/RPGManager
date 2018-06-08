<?php

namespace Core\GameManager\Entities;

/**
 * Class Game
 * @package Core\GameManager\Entities
 */
class Game
{

    /**
     * @var string
     */
    private $name;

    /**
     * Game constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {

        $this->name = $name;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}