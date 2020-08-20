<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200819155757 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brief (id INT AUTO_INCREMENT NOT NULL, langue VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, contexte LONGTEXT NOT NULL, livrables_attendus LONGTEXT NOT NULL, modalites_pedagogiques LONGTEXT NOT NULL, criteres_de_performance LONGTEXT NOT NULL, modalites_evaluation LONGTEXT NOT NULL, avatar LONGBLOB DEFAULT NULL, date_creation DATE NOT NULL, statut VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable (id INT AUTO_INCREMENT NOT NULL, livrable_attendu_id INT NOT NULL, url VARCHAR(255) NOT NULL, INDEX IDX_9E78008C75180ACC (livrable_attendu_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_attendu (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_attendu_brief (livrable_attendu_id INT NOT NULL, brief_id INT NOT NULL, INDEX IDX_778854ED75180ACC (livrable_attendu_id), INDEX IDX_778854ED757FABFF (brief_id), PRIMARY KEY(livrable_attendu_id, brief_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_partiel (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, delai DATE NOT NULL, date_creation DATE NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE livrable ADD CONSTRAINT FK_9E78008C75180ACC FOREIGN KEY (livrable_attendu_id) REFERENCES livrable_attendu (id)');
        $this->addSql('ALTER TABLE livrable_attendu_brief ADD CONSTRAINT FK_778854ED75180ACC FOREIGN KEY (livrable_attendu_id) REFERENCES livrable_attendu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livrable_attendu_brief ADD CONSTRAINT FK_778854ED757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livrable_attendu_brief DROP FOREIGN KEY FK_778854ED757FABFF');
        $this->addSql('ALTER TABLE livrable DROP FOREIGN KEY FK_9E78008C75180ACC');
        $this->addSql('ALTER TABLE livrable_attendu_brief DROP FOREIGN KEY FK_778854ED75180ACC');
        $this->addSql('DROP TABLE brief');
        $this->addSql('DROP TABLE livrable');
        $this->addSql('DROP TABLE livrable_attendu');
        $this->addSql('DROP TABLE livrable_attendu_brief');
        $this->addSql('DROP TABLE livrable_partiel');
    }
}
