<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220725143856 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', texte1 LONGTEXT DEFAULT NULL, image_name2 VARCHAR(255) DEFAULT NULL, updated_at2 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name3 VARCHAR(255) DEFAULT NULL, updated_at3 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name4 VARCHAR(255) DEFAULT NULL, updated_at4 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name5 VARCHAR(255) DEFAULT NULL, updated_at5 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name6 VARCHAR(255) DEFAULT NULL, updated_at6 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name7 VARCHAR(255) DEFAULT NULL, updated_at7 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', titre VARCHAR(255) DEFAULT NULL, image_name8 VARCHAR(255) DEFAULT NULL, updated_at8 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', texte2 VARCHAR(255) DEFAULT NULL, titre2 VARCHAR(255) DEFAULT NULL, image_name9 VARCHAR(255) DEFAULT NULL, updated_at9 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', theme VARCHAR(255) DEFAULT NULL, formation LONGTEXT DEFAULT NULL, texte3 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE formation');
    }
}
