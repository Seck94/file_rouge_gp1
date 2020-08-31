<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200822151724 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE livrable_partiel_apprenant');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE livrable_partiel_apprenant (id INT AUTO_INCREMENT NOT NULL, livrable_partiel_id INT DEFAULT NULL, apprenants_id INT DEFAULT NULL, delai DATE DEFAULT NULL, etat VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, INDEX IDX_5B1B4613519178C4 (livrable_partiel_id), INDEX IDX_5B1B4613D4B7C9BD (apprenants_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8 COLLATE `utf8_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD CONSTRAINT FK_5B1B4613519178C4 FOREIGN KEY (livrable_partiel_id) REFERENCES livrable_partiel (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD CONSTRAINT FK_5B1B4613D4B7C9BD FOREIGN KEY (apprenants_id) REFERENCES apprenant (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
    }
}
