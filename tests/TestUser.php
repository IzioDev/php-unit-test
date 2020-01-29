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

    public function testShouldGetIdentifierAsNormalized(): void
    {
        $user = new User("Billot", "Romain", new DateTime("1997-09-30T16:38:01.012345Z"));

        $this->assertEquals(
            "ROMAINBILLOT30091997",
            $user->getIdentifier()
        );
    }
}
