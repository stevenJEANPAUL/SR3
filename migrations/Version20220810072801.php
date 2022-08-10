<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220810072801 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accueil (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', description LONGTEXT NOT NULL, titre VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, commentaire LONGTEXT DEFAULT NULL, texte LONGTEXT DEFAULT NULL, is_active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE accueil_carousel (accueil_id INT NOT NULL, carousel_id INT NOT NULL, INDEX IDX_FA1B5C297C9E3DC1 (accueil_id), INDEX IDX_FA1B5C29C1CE5B98 (carousel_id), PRIMARY KEY(accueil_id, carousel_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE accueil_avis_client (accueil_id INT NOT NULL, avis_client_id INT NOT NULL, INDEX IDX_7CF6A8667C9E3DC1 (accueil_id), INDEX IDX_7CF6A866BFBE76E0 (avis_client_id), PRIMARY KEY(accueil_id, avis_client_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE accueil_partenaire (accueil_id INT NOT NULL, partenaire_id INT NOT NULL, INDEX IDX_FCDC12B87C9E3DC1 (accueil_id), INDEX IDX_FCDC12B898DE13AC (partenaire_id), PRIMARY KEY(accueil_id, partenaire_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_880E0D76F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avis_client (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', nom VARCHAR(255) DEFAULT NULL, poste VARCHAR(255) DEFAULT NULL, commentaire LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE carousel (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', texte LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', nom VARCHAR(255) NOT NULL, theme LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cours_formation (cours_id INT NOT NULL, formation_id INT NOT NULL, INDEX IDX_B8E51B787ECF78B0 (cours_id), INDEX IDX_B8E51B785200282E (formation_id), PRIMARY KEY(cours_id, formation_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', nom VARCHAR(255) NOT NULL, titre VARCHAR(255) DEFAULT NULL, poste VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', texte1 LONGTEXT DEFAULT NULL, image_name2 VARCHAR(255) DEFAULT NULL, updated_at2 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name3 VARCHAR(255) DEFAULT NULL, updated_at3 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name4 VARCHAR(255) DEFAULT NULL, updated_at4 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name5 VARCHAR(255) DEFAULT NULL, updated_at5 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name6 VARCHAR(255) DEFAULT NULL, updated_at6 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name7 VARCHAR(255) DEFAULT NULL, updated_at7 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', titre VARCHAR(255) DEFAULT NULL, image_name8 VARCHAR(255) DEFAULT NULL, updated_at8 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', texte2 LONGTEXT DEFAULT NULL, titre2 VARCHAR(255) DEFAULT NULL, image_name9 VARCHAR(255) DEFAULT NULL, updated_at9 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', theme VARCHAR(255) DEFAULT NULL, formation LONGTEXT DEFAULT NULL, texte3 LONGTEXT DEFAULT NULL, is_active TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE image_rncp (image_id INT NOT NULL, rncp_id INT NOT NULL, INDEX IDX_4ED4F2E73DA5256D (image_id), INDEX IDX_4ED4F2E7F8C8C175 (rncp_id), PRIMARY KEY(image_id, rncp_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE newletter (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', titre VARCHAR(255) NOT NULL, text LONGTEXT NOT NULL, presentation VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nos_actus (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', description LONGTEXT NOT NULL, commentaire LONGTEXT NOT NULL, is_active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE nos_actus_newletter (nos_actus_id INT NOT NULL, newletter_id INT NOT NULL, INDEX IDX_BD777B892E1B6EDE (nos_actus_id), INDEX IDX_BD777B892C8C366A (newletter_id), PRIMARY KEY(nos_actus_id, newletter_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partenaire (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', nom VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE rncp (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) DEFAULT NULL, formation VARCHAR(255) NOT NULL, niveau VARCHAR(255) DEFAULT NULL, descriptif LONGTEXT DEFAULT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', texte LONGTEXT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, image_name VARCHAR(255) NOT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', presentation LONGTEXT NOT NULL, image_name2 VARCHAR(255) NOT NULL, updated_at2 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', image_name3 VARCHAR(255) NOT NULL, updated_at3 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', titre3 VARCHAR(255) NOT NULL, presentation2 LONGTEXT NOT NULL, image_name4 VARCHAR(255) DEFAULT NULL, updated_at4 DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_active TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team_equipe (team_id INT NOT NULL, equipe_id INT NOT NULL, INDEX IDX_5252FDCC296CD8AE (team_id), INDEX IDX_5252FDCC6D861B89 (equipe_id), PRIMARY KEY(team_id, equipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) DEFAULT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(180) DEFAULT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, is_verified TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE accueil_carousel ADD CONSTRAINT FK_FA1B5C297C9E3DC1 FOREIGN KEY (accueil_id) REFERENCES accueil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE accueil_carousel ADD CONSTRAINT FK_FA1B5C29C1CE5B98 FOREIGN KEY (carousel_id) REFERENCES carousel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE accueil_avis_client ADD CONSTRAINT FK_7CF6A8667C9E3DC1 FOREIGN KEY (accueil_id) REFERENCES accueil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE accueil_avis_client ADD CONSTRAINT FK_7CF6A866BFBE76E0 FOREIGN KEY (avis_client_id) REFERENCES avis_client (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE accueil_partenaire ADD CONSTRAINT FK_FCDC12B87C9E3DC1 FOREIGN KEY (accueil_id) REFERENCES accueil (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE accueil_partenaire ADD CONSTRAINT FK_FCDC12B898DE13AC FOREIGN KEY (partenaire_id) REFERENCES partenaire (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours_formation ADD CONSTRAINT FK_B8E51B787ECF78B0 FOREIGN KEY (cours_id) REFERENCES cours (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cours_formation ADD CONSTRAINT FK_B8E51B785200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE image_rncp ADD CONSTRAINT FK_4ED4F2E73DA5256D FOREIGN KEY (image_id) REFERENCES image (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE image_rncp ADD CONSTRAINT FK_4ED4F2E7F8C8C175 FOREIGN KEY (rncp_id) REFERENCES rncp (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE nos_actus_newletter ADD CONSTRAINT FK_BD777B892E1B6EDE FOREIGN KEY (nos_actus_id) REFERENCES nos_actus (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE nos_actus_newletter ADD CONSTRAINT FK_BD777B892C8C366A FOREIGN KEY (newletter_id) REFERENCES newletter (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_equipe ADD CONSTRAINT FK_5252FDCC296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_equipe ADD CONSTRAINT FK_5252FDCC6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE accueil_carousel DROP FOREIGN KEY FK_FA1B5C297C9E3DC1');
        $this->addSql('ALTER TABLE accueil_avis_client DROP FOREIGN KEY FK_7CF6A8667C9E3DC1');
        $this->addSql('ALTER TABLE accueil_partenaire DROP FOREIGN KEY FK_FCDC12B87C9E3DC1');
        $this->addSql('ALTER TABLE accueil_avis_client DROP FOREIGN KEY FK_7CF6A866BFBE76E0');
        $this->addSql('ALTER TABLE accueil_carousel DROP FOREIGN KEY FK_FA1B5C29C1CE5B98');
        $this->addSql('ALTER TABLE cours_formation DROP FOREIGN KEY FK_B8E51B787ECF78B0');
        $this->addSql('ALTER TABLE team_equipe DROP FOREIGN KEY FK_5252FDCC6D861B89');
        $this->addSql('ALTER TABLE cours_formation DROP FOREIGN KEY FK_B8E51B785200282E');
        $this->addSql('ALTER TABLE image_rncp DROP FOREIGN KEY FK_4ED4F2E73DA5256D');
        $this->addSql('ALTER TABLE nos_actus_newletter DROP FOREIGN KEY FK_BD777B892C8C366A');
        $this->addSql('ALTER TABLE nos_actus_newletter DROP FOREIGN KEY FK_BD777B892E1B6EDE');
        $this->addSql('ALTER TABLE accueil_partenaire DROP FOREIGN KEY FK_FCDC12B898DE13AC');
        $this->addSql('ALTER TABLE image_rncp DROP FOREIGN KEY FK_4ED4F2E7F8C8C175');
        $this->addSql('ALTER TABLE team_equipe DROP FOREIGN KEY FK_5252FDCC296CD8AE');
        $this->addSql('DROP TABLE accueil');
        $this->addSql('DROP TABLE accueil_carousel');
        $this->addSql('DROP TABLE accueil_avis_client');
        $this->addSql('DROP TABLE accueil_partenaire');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE avis_client');
        $this->addSql('DROP TABLE carousel');
        $this->addSql('DROP TABLE cours');
        $this->addSql('DROP TABLE cours_formation');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE image');
        $this->addSql('DROP TABLE image_rncp');
        $this->addSql('DROP TABLE newletter');
        $this->addSql('DROP TABLE nos_actus');
        $this->addSql('DROP TABLE nos_actus_newletter');
        $this->addSql('DROP TABLE partenaire');
        $this->addSql('DROP TABLE rncp');
        $this->addSql('DROP TABLE team');
        $this->addSql('DROP TABLE team_equipe');
        $this->addSql('DROP TABLE user');
    }
}
