<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200822150647 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livrable_partiel_apprenant DROP FOREIGN KEY FK_5B1B4613C5697D6D');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant DROP FOREIGN KEY FK_5B1B4613519178C4');
        $this->addSql('DROP INDEX IDX_5B1B4613C5697D6D ON livrable_partiel_apprenant');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD id INT AUTO_INCREMENT NOT NULL, ADD apprenants_id INT DEFAULT NULL, ADD delai DATE DEFAULT NULL, ADD etat VARCHAR(255) NOT NULL, DROP apprenant_id, CHANGE livrable_partiel_id livrable_partiel_id INT DEFAULT NULL, DROP PRIMARY KEY, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD CONSTRAINT FK_5B1B4613D4B7C9BD FOREIGN KEY (apprenants_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD CONSTRAINT FK_5B1B4613519178C4 FOREIGN KEY (livrable_partiel_id) REFERENCES livrable_partiel (id)');
        $this->addSql('CREATE INDEX IDX_5B1B4613D4B7C9BD ON livrable_partiel_apprenant (apprenants_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE livrable_partiel_apprenant MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant DROP FOREIGN KEY FK_5B1B4613D4B7C9BD');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant DROP FOREIGN KEY FK_5B1B4613519178C4');
        $this->addSql('DROP INDEX IDX_5B1B4613D4B7C9BD ON livrable_partiel_apprenant');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD apprenant_id INT NOT NULL, DROP id, DROP apprenants_id, DROP delai, DROP etat, CHANGE livrable_partiel_id livrable_partiel_id INT NOT NULL');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD CONSTRAINT FK_5B1B4613C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD CONSTRAINT FK_5B1B4613519178C4 FOREIGN KEY (livrable_partiel_id) REFERENCES livrable_partiel (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('CREATE INDEX IDX_5B1B4613C5697D6D ON livrable_partiel_apprenant (apprenant_id)');
        $this->addSql('ALTER TABLE livrable_partiel_apprenant ADD PRIMARY KEY (livrable_partiel_id, apprenant_id)');
    }
}
