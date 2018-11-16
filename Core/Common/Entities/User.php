<?php
declare(strict_types=1);

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
     * @var int|null
     */
    private $id;

    /**
     * User constructor.
     * @param string $email
     * @param string $name
     * @param int|null $id
     */
    public function __construct(string $email, string $name, int $id = null)
    {

        $this->email = $email;
        $this->name = $name;
        $this->id = $id;

    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

}