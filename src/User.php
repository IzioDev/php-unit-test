<?php

final class User
{
    private $lastName;
    private $firstName;
    private $birthDate;
    private $identifier;

    public function __construct($lastName, $firstName, $birthDate)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->birthDate = $birthDate;
        $this->identifier = $this->setIdentifier();
    }

    public function setIdentifier()
    {
        $identifier = trim(strtoupper($this->firstName)) . trim(strtoupper($this->lastName)) . trim(date_format($this->birthDate, 'dmY'));
        return $identifier;
    }

    public function getIdentifier()
    {
        return $this->identifier;
    }
}
