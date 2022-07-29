<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220728090256 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accueil (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', description LONGTEXT NOT NULL, titre VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, commentaire LONGTEXT DEFAULT NULL, texte LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', texte1 LONGTEXT DEFAULT NULL, image_name2 VARCHAR(255) DEFAULT NULL, updated_at2 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name3 VARCHAR(255) DEFAULT NULL, updated_at3 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name4 VARCHAR(255) DEFAULT NULL, updated_at4 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name5 VARCHAR(255) DEFAULT NULL, updated_at5 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name6 VARCHAR(255) DEFAULT NULL, updated_at6 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name7 VARCHAR(255) DEFAULT NULL, updated_at7 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', titre VARCHAR(255) DEFAULT NULL, image_name8 VARCHAR(255) DEFAULT NULL, updated_at8 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', texte2 VARCHAR(255) DEFAULT NULL, titre2 VARCHAR(255) DEFAULT NULL, image_name9 VARCHAR(255) DEFAULT NULL, updated_at9 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', theme VARCHAR(255) DEFAULT NULL, formation LONGTEXT DEFAULT NULL, texte3 LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nos_actus (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, image_name VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, commentaire LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rncp (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT NULL, formation VARCHAR(255) NOT NULL, niveau VARCHAR(255) DEFAULT NULL, descriptif LONGTEXT DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', texte LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, image_name VARCHAR(255) NOT NULL, presentation LONGTEXT NOT NULL, image_name2 VARCHAR(255) NOT NULL, image_name3 VARCHAR(255) NOT NULL, photo VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, titre2 VARCHAR(255) NOT NULL, poste VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', titre3 VARCHAR(255) NOT NULL, presentation2 LONGTEXT NOT NULL, image_name4 VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(180) DEFAULT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE accueil');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE nos_actus');
        $this->addSql('DROP TABLE rncp');
        $this->addSql('DROP TABLE team');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
