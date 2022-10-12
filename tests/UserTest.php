<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private $user;

    protected function setUp(): void
    {
        $this->user = new \App\Models\User;
    }

    public function testFirstname()
    {
        $this->user->setFirstname("Boris");

        $this->assertEquals("Boris", $this->user->getFirstname());
    }

    public function testLastname()
    {
        $this->user->setLastname("Johnsonuk");

        $this->assertEquals("Johnsonuk", $this->user->getLastname());
    }

    public function testFullName()
    {
        $this->user->setFirstname("Boris");
        $this->user->setLastname("Johnsonuk");

        $this->assertEquals("Boris Johnsonuk", $this->user->getFullName());
    }

    public function testFirstnameAndLastnameAreTrimmed()
    {
        $this->user->setFirstname("  Boris ");
        $this->user->setLastname(" Johnsonuk");

        $this->assertEquals("Boris", $this->user->getFirstname());
        $this->assertEquals("Johnsonuk", $this->user->getLastname());
    }

    public function testBirthdate()
    {
        $this->user->setBirthdate("2000-01-01");

        $this->assertEquals("2000-01-01", $this->user->getBirthdate());
    }

    public function testBirthdateYear()
    {
        $this->user->setBirthdate("2000-01-01");

        $this->assertEquals(2000, $this->user->getBirthdateYear());
    }
}
