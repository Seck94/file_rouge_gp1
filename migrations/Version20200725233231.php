<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200725233231 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE apprenant (id INT AUTO_INCREMENT NOT NULL, profilsortie_id INT DEFAULT NULL, INDEX IDX_C4EB462EFE5BE99E (profilsortie_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence_groupecompetence (competence_id INT NOT NULL, groupecompetence_id INT NOT NULL, INDEX IDX_7E76ADF015761DAB (competence_id), INDEX IDX_7E76ADF0337E4DC6 (groupecompetence_id), PRIMARY KEY(competence_id, groupecompetence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formateur (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formateur_groupe (formateur_id INT NOT NULL, groupe_id INT NOT NULL, INDEX IDX_2C668E09155D8F51 (formateur_id), INDEX IDX_2C668E097A45358C (groupe_id), PRIMARY KEY(formateur_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formateur_promo (formateur_id INT NOT NULL, promo_id INT NOT NULL, INDEX IDX_6DA92CC3155D8F51 (formateur_id), INDEX IDX_6DA92CC3D0C07AFF (promo_id), PRIMARY KEY(formateur_id, promo_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, datecreation DATE NOT NULL, statut VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe_apprenant (groupe_id INT NOT NULL, apprenant_id INT NOT NULL, INDEX IDX_947F95197A45358C (groupe_id), INDEX IDX_947F9519C5697D6D (apprenant_id), PRIMARY KEY(groupe_id, apprenant_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupecompetence (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, libelle VARCHAR(255) NOT NULL, descriptif VARCHAR(255) NOT NULL, INDEX IDX_89DC1A55A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupecompetence_referentiel (groupecompetence_id INT NOT NULL, referentiel_id INT NOT NULL, INDEX IDX_8E8BFA57337E4DC6 (groupecompetence_id), INDEX IDX_8E8BFA57805DB139 (referentiel_id), PRIMARY KEY(groupecompetence_id, referentiel_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupetag (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id INT AUTO_INCREMENT NOT NULL, competence_id INT NOT NULL, libelle VARCHAR(255) NOT NULL, critereevoluation VARCHAR(255) NOT NULL, groupeaction VARCHAR(255) NOT NULL, INDEX IDX_4BDFF36B15761DAB (competence_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profilsortie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, referentiel_id INT NOT NULL, langue VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, referenceagate VARCHAR(255) NOT NULL, datedebut DATE NOT NULL, datefinprovisoire DATE NOT NULL, fabrique VARCHAR(255) NOT NULL, datefinreelle DATE NOT NULL, etat VARCHAR(255) NOT NULL, INDEX IDX_B0139AFBA76ED395 (user_id), INDEX IDX_B0139AFB805DB139 (referentiel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, presentation VARCHAR(255) NOT NULL, programme VARCHAR(255) NOT NULL, critereadmission VARCHAR(255) NOT NULL, critereevoluation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag_groupetag (tag_id INT NOT NULL, groupetag_id INT NOT NULL, INDEX IDX_EBA7D18BAD26311 (tag_id), INDEX IDX_EBA7D18654741DD (groupetag_id), PRIMARY KEY(tag_id, groupetag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, profil_id INT NOT NULL, username VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, avatar VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, statut VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), INDEX IDX_8D93D649275ED078 (profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462EFE5BE99E FOREIGN KEY (profilsortie_id) REFERENCES profilsortie (id)');
        $this->addSql('ALTER TABLE competence_groupecompetence ADD CONSTRAINT FK_7E76ADF015761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competence_groupecompetence ADD CONSTRAINT FK_7E76ADF0337E4DC6 FOREIGN KEY (groupecompetence_id) REFERENCES groupecompetence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formateur_groupe ADD CONSTRAINT FK_2C668E09155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formateur_groupe ADD CONSTRAINT FK_2C668E097A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formateur_promo ADD CONSTRAINT FK_6DA92CC3155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formateur_promo ADD CONSTRAINT FK_6DA92CC3D0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_apprenant ADD CONSTRAINT FK_947F95197A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe_apprenant ADD CONSTRAINT FK_947F9519C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupecompetence ADD CONSTRAINT FK_89DC1A55A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE groupecompetence_referentiel ADD CONSTRAINT FK_8E8BFA57337E4DC6 FOREIGN KEY (groupecompetence_id) REFERENCES groupecompetence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupecompetence_referentiel ADD CONSTRAINT FK_8E8BFA57805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE niveau ADD CONSTRAINT FK_4BDFF36B15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id)');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFB805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id)');
        $this->addSql('ALTER TABLE tag_groupetag ADD CONSTRAINT FK_EBA7D18BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE tag_groupetag ADD CONSTRAINT FK_EBA7D18654741DD FOREIGN KEY (groupetag_id) REFERENCES groupetag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_apprenant DROP FOREIGN KEY FK_947F9519C5697D6D');
        $this->addSql('ALTER TABLE competence_groupecompetence DROP FOREIGN KEY FK_7E76ADF015761DAB');
        $this->addSql('ALTER TABLE niveau DROP FOREIGN KEY FK_4BDFF36B15761DAB');
        $this->addSql('ALTER TABLE formateur_groupe DROP FOREIGN KEY FK_2C668E09155D8F51');
        $this->addSql('ALTER TABLE formateur_promo DROP FOREIGN KEY FK_6DA92CC3155D8F51');
        $this->addSql('ALTER TABLE formateur_groupe DROP FOREIGN KEY FK_2C668E097A45358C');
        $this->addSql('ALTER TABLE groupe_apprenant DROP FOREIGN KEY FK_947F95197A45358C');
        $this->addSql('ALTER TABLE competence_groupecompetence DROP FOREIGN KEY FK_7E76ADF0337E4DC6');
        $this->addSql('ALTER TABLE groupecompetence_referentiel DROP FOREIGN KEY FK_8E8BFA57337E4DC6');
        $this->addSql('ALTER TABLE tag_groupetag DROP FOREIGN KEY FK_EBA7D18654741DD');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649275ED078');
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462EFE5BE99E');
        $this->addSql('ALTER TABLE formateur_promo DROP FOREIGN KEY FK_6DA92CC3D0C07AFF');
        $this->addSql('ALTER TABLE groupecompetence_referentiel DROP FOREIGN KEY FK_8E8BFA57805DB139');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFB805DB139');
        $this->addSql('ALTER TABLE tag_groupetag DROP FOREIGN KEY FK_EBA7D18BAD26311');
        $this->addSql('ALTER TABLE groupecompetence DROP FOREIGN KEY FK_89DC1A55A76ED395');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFBA76ED395');
        $this->addSql('DROP TABLE apprenant');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE competence_groupecompetence');
        $this->addSql('DROP TABLE formateur');
        $this->addSql('DROP TABLE formateur_groupe');
        $this->addSql('DROP TABLE formateur_promo');
        $this->addSql('DROP TABLE groupe');
        $this->addSql('DROP TABLE groupe_apprenant');
        $this->addSql('DROP TABLE groupecompetence');
        $this->addSql('DROP TABLE groupecompetence_referentiel');
        $this->addSql('DROP TABLE groupetag');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE profilsortie');
        $this->addSql('DROP TABLE promo');
        $this->addSql('DROP TABLE referentiel');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE tag_groupetag');
        $this->addSql('DROP TABLE user');
    }
}
