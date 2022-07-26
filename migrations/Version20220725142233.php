<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220725142233 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, image_name VARCHAR(255) NOT NULL, presentation LONGTEXT NOT NULL, image_name2 VARCHAR(255) NOT NULL, image_name3 VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, titre2 VARCHAR(255) NOT NULL, poste VARCHAR(255) NOT NULL, updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', titre3 VARCHAR(255) NOT NULL, presentation2 LONGTEXT NOT NULL, image_name4 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE team');
    }
}
