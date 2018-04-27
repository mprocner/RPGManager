<?php

namespace Core\Common\Entities;

/**
 * Class User
 * @package Core\Common\Entities
 */
class User
{

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $name;

    /**
     * User constructor.
     *
     * @param string $email
     * @param string $name
     */
    public function __construct(string $email, string $name)
    {

        $this->email = $email;
        $this->name = $name;

    }


}