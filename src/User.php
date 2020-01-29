<?php

final class User
{
    protected $lastName;
    protected $firstName;
    protected $birthDate;

    public function __construct($lastName, $firstName, $birthDate)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->birthDate = $birthDate;
    }
}
