<?php

namespace App\Tests;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserUnitTest extends TestCase
{
    public function testIsTRue()
        {

            $user = new User();

            $user->setEmail('true@test.com');
            $this->assertTrue($user->getEmail(), 'true@test.com');

            $user->setPassword('password');
            $this->assertTrue($user->verifyPassword('password'));

            $user->setNom('nom');
            $this->assertTrue($user->getNom(), 'nom');

            $user->setRoles('roles');
            $this->assertTrue($user->getRoles(), 'roles');

            $user->setPrenom('prenom');
            $this->assertTrue($user->getPrenom(), 'prenom');

            $user->setTelephone('telephone');
            $this->assertTrue($user->getTelephone(), 'telephone');

        }

    public function testIsFalse()
    {

        $user = new User();

        $user->setEmail('true@test.com');
        $this->assertFalse($user->getEmail() === 'false@test.com');

        $user->setPassword('password');
        $this->assertFalse($user->verifyPassword('false'));

        $user->setNom('nom');
        $this->assertFalse($user->getNom() === 'false');

        $user->setRoles('roles');
        $this->assertFalse($user->getRoles() === 'false');

        $user->setPrenom('prenom');
        $this->assertFalse($user->getPrenom() === 'false');

        $user->setTelephone('telephone');
        $this->assertFalse($user->getTelephone() === 'false');
    }

    

    public function testIsEmpty()
    {

        $user = new User();

        $this->assertEmpty($user->getEmail());
        $this->assertEmpty($user->verifyPassword(''));
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getRoles());
        $this->assertEmpty($user->getPrenom());
        $this->assertEmpty($user->getTelephone());

    }
    
}


