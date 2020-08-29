<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200828123301 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livrable ADD livrableattendu_id INT NOT NULL');
        $this->addSql('ALTER TABLE livrable ADD CONSTRAINT FK_9E78008C26A2F429 FOREIGN KEY (livrableattendu_id) REFERENCES livrable_attendu (id)');
        $this->addSql('CREATE INDEX IDX_9E78008C26A2F429 ON livrable (livrableattendu_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livrable DROP FOREIGN KEY FK_9E78008C26A2F429');
        $this->addSql('DROP INDEX IDX_9E78008C26A2F429 ON livrable');
        $this->addSql('ALTER TABLE livrable DROP livrableattendu_id');
    }
}
