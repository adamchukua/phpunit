<?php

namespace App\Models;

class User
{
    private $firstname;
    private $lastname;

    public function setFirstname($firstname)
    {
        $this->firstname = trim($firstname);
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setLastname($lastname)
    {
        $this->lastname = trim($lastname);
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function getFullName()
    {
        return "$this->firstname $this->lastname";
    }
}