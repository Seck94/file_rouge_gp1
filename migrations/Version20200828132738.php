<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200828132738 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livrable DROP FOREIGN KEY FK_9E78008CAE865CA');
        $this->addSql('DROP INDEX IDX_9E78008CAE865CA ON livrable');
        $this->addSql('ALTER TABLE livrable DROP brief_livrable_attendu_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livrable ADD brief_livrable_attendu_id INT NOT NULL');
        $this->addSql('ALTER TABLE livrable ADD CONSTRAINT FK_9E78008CAE865CA FOREIGN KEY (brief_livrable_attendu_id) REFERENCES brief_livrable_attendu (id)');
        $this->addSql('CREATE INDEX IDX_9E78008CAE865CA ON livrable (brief_livrable_attendu_id)');
    }
}
