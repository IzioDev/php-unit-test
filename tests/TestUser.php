<?php

use PHPUnit\Framework\TestCase;

class TestUser extends TestCase
{
    public function testShouldCreateAnInstanceOfUser(): void
    {
        $this->assertInstanceOf(
            User::class,
            new User("Nom", "Prénom", new DateTime())
        );
    }
}