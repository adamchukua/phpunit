<?php

namespace App\Models;

class User
{
    private $firstname;
    private $lastname;
    private $birthdate;

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

    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function getBirthdateYear()
    {
        return date("Y", strtotime($this->birthdate));
    }

    public function getFullName()
    {
        return "$this->firstname $this->lastname";
    }
}