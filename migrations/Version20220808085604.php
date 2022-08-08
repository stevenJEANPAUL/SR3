<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220808085604 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipe (id INT AUTO_INCREMENT NOT NULL, image_name VARCHAR(255) DEFAULT NULL, updated_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\', nom VARCHAR(255) NOT NULL, titre VARCHAR(255) DEFAULT NULL, poste VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE team_equipe (team_id INT NOT NULL, equipe_id INT NOT NULL, INDEX IDX_5252FDCC296CD8AE (team_id), INDEX IDX_5252FDCC6D861B89 (equipe_id), PRIMARY KEY(team_id, equipe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE team_equipe ADD CONSTRAINT FK_5252FDCC296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team_equipe ADD CONSTRAINT FK_5252FDCC6D861B89 FOREIGN KEY (equipe_id) REFERENCES equipe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE team CHANGE photo photo VARCHAR(255) DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE team_equipe DROP FOREIGN KEY FK_5252FDCC6D861B89');
        $this->addSql('DROP TABLE equipe');
        $this->addSql('DROP TABLE team_equipe');
        $this->addSql('ALTER TABLE team CHANGE photo photo VARCHAR(255) NOT NULL');
    }
}
