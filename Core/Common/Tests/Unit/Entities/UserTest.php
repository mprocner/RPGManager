<?php

namespace Core\Common\Tests\Unit\Entities;

use Core\Tests\TestCase;
use Core\Common\Entities\User;

class UserTest extends TestCase
{


    public function setUp()
    {
        parent::setUp();
    }

    public function testThatGetNameWorksProperly()
    {
        $user = new User('test@example.com', 'name');

        $name = $user->getName();

        $this->assertEquals('name', $name);
    }

    public function testThatGetEmailWorksProperly()
    {
        $user = new User('test@example.com', 'name');

        $email = $user->getEmail();

        $this->assertEquals('test@example.com', $email);
    }

    public function testThatGetIdWorksProperlyWhenNoIdGiven()
    {
        $user = new User('test@example.com', 'name');

        $id = $user->getId();

        $this->assertEquals(null, $id);
    }

    public function testThatGetIdWorksProperlyWhenIdGiven()
    {
        $user = new User('test@example.com', 'name', 123);

        $id = $user->getId();

        $this->assertEquals(123, $id);
    }
}
