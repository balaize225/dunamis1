<?php

namespace App\Tests;


use App\Entity\Etudiant;
use PHPUnit\Framework\TestCase;
use DateTime;

class EtudiantUniTest extends TestCase
{
    public function test()
    {
        $etudiant = new Etudiant();

        $date_de_naissance = '2023-10-16';
        $dateDeNaissance = DateTime::createFromFormat('Y-m-d', $date_de_naissance);
        $etudiant->setDateDeNaissance($dateDeNaissance);
        

        $etudiant->setEmail('test@email.com');
        $etudiant->setNom('nom');
        $etudiant->setPrenom('prenom');
        $etudiant->setTelephone('telephone');
        $etudiant->setPays('pays');
        $etudiant->setVille('ville');
        $etudiant->setFormation('formation');
        $etudiant->setSexe('sexe');
        $etudiant->setSituationMatrimoniale('situation_matrimoniale');
        $etudiant->setRecommandePar('recommande_par');

        $this->assertEquals('test@email.com', $etudiant->getEmail());
        $this->assertEquals('nom', $etudiant->getNom());
        $this->assertEquals('prenom', $etudiant->getPrenom());
        $this->assertEquals('telephone', $etudiant->getTelephone());
        $this->assertEquals('pays', $etudiant->getPays());
        $this->assertEquals('ville', $etudiant->getVille());
        $this->assertEquals('formation', $etudiant->getFormation());
        $this->assertEquals('sexe', $etudiant->getSexe());
        $this->assertEquals('situation_matrimoniale', $etudiant->getSituationMatrimoniale());
        $this->assertEquals('recommande_par', $etudiant->getRecommandePar());

        $etudiant->setEmail('');
        $etudiant->setNom('');
        $etudiant->setPrenom('');

        $this->assertEmpty($etudiant->getEmail());
        $this->assertEmpty($etudiant->getNom());
        $this->assertEmpty($etudiant->getPrenom());
    }

}





