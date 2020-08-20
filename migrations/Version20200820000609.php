<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200820000609 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE brief_tag (brief_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_452A4F36757FABFF (brief_id), INDEX IDX_452A4F36BAD26311 (tag_id), PRIMARY KEY(brief_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brief_groupe (brief_id INT NOT NULL, groupe_id INT NOT NULL, INDEX IDX_5496297B757FABFF (brief_id), INDEX IDX_5496297B7A45358C (groupe_id), PRIMARY KEY(brief_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, livrable_rendu_id INT NOT NULL, formateur_id INT NOT NULL, libelle LONGTEXT DEFAULT NULL, pj LONGBLOB DEFAULT NULL, date DATE NOT NULL, INDEX IDX_67F068BC9F3E86A9 (livrable_rendu_id), INDEX IDX_67F068BC155D8F51 (formateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire_general (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, fil_de_discussion_id INT NOT NULL, libelle LONGTEXT DEFAULT NULL, pj LONGBLOB DEFAULT NULL, date DATE NOT NULL, INDEX IDX_BDE1A419A76ED395 (user_id), INDEX IDX_BDE1A4199E665F32 (fil_de_discussion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fil_de_discussion (id INT AUTO_INCREMENT NOT NULL, promo_id INT NOT NULL, titre VARCHAR(255) NOT NULL, date DATE NOT NULL, UNIQUE INDEX UNIQ_399E12C5D0C07AFF (promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_rendu (id INT AUTO_INCREMENT NOT NULL, livrable_partiel_id INT NOT NULL, apprenant_id INT NOT NULL, statut VARCHAR(255) NOT NULL, delai DATE DEFAULT NULL, date_rendu DATE DEFAULT NULL, INDEX IDX_9033AB0F519178C4 (livrable_partiel_id), INDEX IDX_9033AB0FC5697D6D (apprenant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo_brief (id INT AUTO_INCREMENT NOT NULL, brief_id INT NOT NULL, promo_id INT NOT NULL, promo_brief_apprenant_id INT DEFAULT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_F6922C91757FABFF (brief_id), INDEX IDX_F6922C91D0C07AFF (promo_id), INDEX IDX_F6922C91D7DB67BE (promo_brief_apprenant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo_brief_apprenant (id INT AUTO_INCREMENT NOT NULL, statut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource (id INT AUTO_INCREMENT NOT NULL, brief_id INT NOT NULL, titre VARCHAR(255) NOT NULL, url VARCHAR(255) DEFAULT NULL, pj LONGBLOB DEFAULT NULL, INDEX IDX_939F4544757FABFF (brief_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistiques_competences (id INT AUTO_INCREMENT NOT NULL, apprenant_id INT NOT NULL, referentiel_id INT NOT NULL, competence_id INT DEFAULT NULL, promo_id INT DEFAULT NULL, INDEX IDX_5C1C9F22C5697D6D (apprenant_id), INDEX IDX_5C1C9F22805DB139 (referentiel_id), INDEX IDX_5C1C9F2215761DAB (competence_id), INDEX IDX_5C1C9F22D0C07AFF (promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE brief_tag ADD CONSTRAINT FK_452A4F36757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief_tag ADD CONSTRAINT FK_452A4F36BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief_groupe ADD CONSTRAINT FK_5496297B757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief_groupe ADD CONSTRAINT FK_5496297B7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC9F3E86A9 FOREIGN KEY (livrable_rendu_id) REFERENCES livrable_rendu (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id)');
        $this->addSql('ALTER TABLE commentaire_general ADD CONSTRAINT FK_BDE1A419A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire_general ADD CONSTRAINT FK_BDE1A4199E665F32 FOREIGN KEY (fil_de_discussion_id) REFERENCES fil_de_discussion (id)');
        $this->addSql('ALTER TABLE fil_de_discussion ADD CONSTRAINT FK_399E12C5D0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE livrable_rendu ADD CONSTRAINT FK_9033AB0F519178C4 FOREIGN KEY (livrable_partiel_id) REFERENCES livrable_partiel (id)');
        $this->addSql('ALTER TABLE livrable_rendu ADD CONSTRAINT FK_9033AB0FC5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE promo_brief ADD CONSTRAINT FK_F6922C91757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('ALTER TABLE promo_brief ADD CONSTRAINT FK_F6922C91D0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE promo_brief ADD CONSTRAINT FK_F6922C91D7DB67BE FOREIGN KEY (promo_brief_apprenant_id) REFERENCES promo_brief_apprenant (id)');
        $this->addSql('ALTER TABLE ressource ADD CONSTRAINT FK_939F4544757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('ALTER TABLE statistiques_competences ADD CONSTRAINT FK_5C1C9F22C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE statistiques_competences ADD CONSTRAINT FK_5C1C9F22805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id)');
        $this->addSql('ALTER TABLE statistiques_competences ADD CONSTRAINT FK_5C1C9F2215761DAB FOREIGN KEY (competence_id) REFERENCES competence (id)');
        $this->addSql('ALTER TABLE statistiques_competences ADD CONSTRAINT FK_5C1C9F22D0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE apprenant ADD promo_brief_apprenant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462ED7DB67BE FOREIGN KEY (promo_brief_apprenant_id) REFERENCES promo_brief_apprenant (id)');
        $this->addSql('CREATE INDEX IDX_C4EB462ED7DB67BE ON apprenant (promo_brief_apprenant_id)');
        $this->addSql('ALTER TABLE brief ADD referentiel_id INT NOT NULL, ADD formateur_id INT NOT NULL');
        $this->addSql('ALTER TABLE brief ADD CONSTRAINT FK_1FBB1007805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id)');
        $this->addSql('ALTER TABLE brief ADD CONSTRAINT FK_1FBB1007155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id)');
        $this->addSql('CREATE INDEX IDX_1FBB1007805DB139 ON brief (referentiel_id)');
        $this->addSql('CREATE INDEX IDX_1FBB1007155D8F51 ON brief (formateur_id)');
        $this->addSql('ALTER TABLE livrable ADD apprenant_id INT NOT NULL');
        $this->addSql('ALTER TABLE livrable ADD CONSTRAINT FK_9E78008CC5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('CREATE INDEX IDX_9E78008CC5697D6D ON livrable (apprenant_id)');
        $this->addSql('ALTER TABLE livrable_partiel ADD promo_brief_id INT NOT NULL');
        $this->addSql('ALTER TABLE livrable_partiel ADD CONSTRAINT FK_37F072C5BDA08EC7 FOREIGN KEY (promo_brief_id) REFERENCES promo_brief (id)');
        $this->addSql('CREATE INDEX IDX_37F072C5BDA08EC7 ON livrable_partiel (promo_brief_id)');
        $this->addSql('ALTER TABLE niveau ADD brief_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE niveau ADD CONSTRAINT FK_4BDFF36B757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('CREATE INDEX IDX_4BDFF36B757FABFF ON niveau (brief_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE commentaire_general DROP FOREIGN KEY FK_BDE1A4199E665F32');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC9F3E86A9');
        $this->addSql('ALTER TABLE livrable_partiel DROP FOREIGN KEY FK_37F072C5BDA08EC7');
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462ED7DB67BE');
        $this->addSql('ALTER TABLE promo_brief DROP FOREIGN KEY FK_F6922C91D7DB67BE');
        $this->addSql('DROP TABLE brief_tag');
        $this->addSql('DROP TABLE brief_groupe');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE commentaire_general');
        $this->addSql('DROP TABLE fil_de_discussion');
        $this->addSql('DROP TABLE livrable_rendu');
        $this->addSql('DROP TABLE promo_brief');
        $this->addSql('DROP TABLE promo_brief_apprenant');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP TABLE statistiques_competences');
        $this->addSql('DROP INDEX IDX_C4EB462ED7DB67BE ON apprenant');
        $this->addSql('ALTER TABLE apprenant DROP promo_brief_apprenant_id');
        $this->addSql('ALTER TABLE brief DROP FOREIGN KEY FK_1FBB1007805DB139');
        $this->addSql('ALTER TABLE brief DROP FOREIGN KEY FK_1FBB1007155D8F51');
        $this->addSql('DROP INDEX IDX_1FBB1007805DB139 ON brief');
        $this->addSql('DROP INDEX IDX_1FBB1007155D8F51 ON brief');
        $this->addSql('ALTER TABLE brief DROP referentiel_id, DROP formateur_id');
        $this->addSql('ALTER TABLE livrable DROP FOREIGN KEY FK_9E78008CC5697D6D');
        $this->addSql('DROP INDEX IDX_9E78008CC5697D6D ON livrable');
        $this->addSql('ALTER TABLE livrable DROP apprenant_id');
        $this->addSql('DROP INDEX IDX_37F072C5BDA08EC7 ON livrable_partiel');
        $this->addSql('ALTER TABLE livrable_partiel DROP promo_brief_id');
        $this->addSql('ALTER TABLE niveau DROP FOREIGN KEY FK_4BDFF36B757FABFF');
        $this->addSql('DROP INDEX IDX_4BDFF36B757FABFF ON niveau');
        $this->addSql('ALTER TABLE niveau DROP brief_id');
    }
}
