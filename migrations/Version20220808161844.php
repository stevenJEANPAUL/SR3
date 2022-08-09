<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220808161844 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE team ADD updated_at2 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at3 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', ADD updated_at4 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', DROP photo, DROP nom, DROP titre2, DROP poste');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE team ADD photo VARCHAR(255) DEFAULT NULL, ADD nom VARCHAR(255) NOT NULL, ADD titre2 VARCHAR(255) NOT NULL, ADD poste VARCHAR(255) NOT NULL, DROP updated_at2, DROP updated_at3, DROP updated_at4');
    }
}
