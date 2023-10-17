<?php

namespace App\Tests;

use App\Entity\User;
use App\Entity\User\testIsTrue;
use App\Entity\User\testIsFalse;
use App\Entity\User\testIsEmpty;
use PHPUnit\Framework\TestCase;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserUniTest extends TestCase
{
    public function testIsTrue()
    {
        $user = new User();

        $user->setEmail('test@email.com');
        $user->setNom('nom');
        $user->setPrenom('prenom');
        $user->setPassword('password');
        $user->setTelephone('telephone');

        $this->assertTrue($user->getEMail() ==='test@email.com');
        $this->assertTrue($user->getNom()=== 'nom');
        $this->assertTrue($user->getPrenom()=== 'prenom');
        $this->assertTrue($user->getPassword()=== 'password');
        $this->assertTrue($user->getTelephone()=== 'telephone');
    }

    public function testIsFalse()
    {
        $user = new User();

        $user->setEmail('test@email.com');
        $user->setNom('nom');
        $user->setPrenom('prenom');
        $user->setPassword('password');
        $user->setTelephone('telephone');

        $this->assertFalse($user->getEMail()==='false@email.com');
        $this->assertFalse($user->getNom()=== 'false');
        $this->assertFalse($user->getPrenom()=== 'false');
        $this->assertFalse($user->getPassword()=== 'false');
        $this->assertFalse($user->getTelephone()=== 'false');
    }

    public function testIsEmpty()
    {
        $user = new User();
        
        $this->assertEmpty($user->getEMail());
        $this->assertEmpty($user->getNom());
        $this->assertEmpty($user->getPrenom());
        
        $this->assertEmpty($user->getTelephone());
    }



}


