<?php

final class User
{
    private $lastName;
    private $firstName;
    private $birthDate;

    public function __construct($lastName, $firstName, $birthDate)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->birthDate = $birthDate;
    }
}
