<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231016125449 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE etudiant (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, date_de_naissance DATE NOT NULL, telephone VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, pays VARCHAR(255) NOT NULL, ville VARCHAR(255) DEFAULT NULL, formation VARCHAR(255) NOT NULL, sexe VARCHAR(255) NOT NULL, situation_matrimoniale VARCHAR(255) NOT NULL, recommande_par LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promotion (id INT AUTO_INCREMENT NOT NULL, nom_de_promotion VARCHAR(255) DEFAULT NULL, date_de_debut DATE DEFAULT NULL, date_de_fin DATE DEFAULT NULL, formation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE etudiant');
        $this->addSql('DROP TABLE promotion');
    }
}
