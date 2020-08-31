<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200822141120 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE livrable_partiel_apprenant (livrable_partiel_id INT NOT NULL, apprenant_id INT NOT NULL, INDEX IDX_5B1B4613519178C4 (livrable_partiel_id), INDEX IDX_5B1B4613C5697D6D (apprenant_id), PRIMARY KEY(livrable_partiel_id, apprenant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD CONSTRAINT FK_5B1B4613519178C4 FOREIGN KEY (livrable_partiel_id) REFERENCES livrable_partiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD CONSTRAINT FK_5B1B4613C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE livrable_partiel_apprenant');
    }
}
