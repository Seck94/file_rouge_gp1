<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200821153135 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE apprenant (id INT NOT NULL, profilsortie_id INT DEFAULT NULL, promo_brief_apprenant_id INT DEFAULT NULL, INDEX IDX_C4EB462EFE5BE99E (profilsortie_id), INDEX IDX_C4EB462ED7DB67BE (promo_brief_apprenant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE apprenant_groupe (apprenant_id INT NOT NULL, groupe_id INT NOT NULL, INDEX IDX_1D224F8DC5697D6D (apprenant_id), INDEX IDX_1D224F8D7A45358C (groupe_id), PRIMARY KEY(apprenant_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brief (id INT AUTO_INCREMENT NOT NULL, referentiel_id INT NOT NULL, formateur_id INT NOT NULL, langue VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, contexte LONGTEXT NOT NULL, livrables_attendus LONGTEXT NOT NULL, modalites_pedagogiques LONGTEXT NOT NULL, criteres_de_performance LONGTEXT NOT NULL, modalites_evaluation LONGTEXT NOT NULL, avatar LONGBLOB DEFAULT NULL, date_creation DATE NOT NULL, statut VARCHAR(255) DEFAULT NULL, INDEX IDX_1FBB1007805DB139 (referentiel_id), INDEX IDX_1FBB1007155D8F51 (formateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brief_tag (brief_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_452A4F36757FABFF (brief_id), INDEX IDX_452A4F36BAD26311 (tag_id), PRIMARY KEY(brief_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE brief_groupe (brief_id INT NOT NULL, groupe_id INT NOT NULL, INDEX IDX_5496297B757FABFF (brief_id), INDEX IDX_5496297B7A45358C (groupe_id), PRIMARY KEY(brief_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cm (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire (id INT AUTO_INCREMENT NOT NULL, livrable_rendu_id INT NOT NULL, formateur_id INT NOT NULL, libelle LONGTEXT DEFAULT NULL, pj LONGBLOB DEFAULT NULL, date DATE NOT NULL, INDEX IDX_67F068BC9F3E86A9 (livrable_rendu_id), INDEX IDX_67F068BC155D8F51 (formateur_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commentaire_general (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, fil_de_discussion_id INT NOT NULL, libelle LONGTEXT DEFAULT NULL, pj LONGBLOB DEFAULT NULL, date DATE NOT NULL, INDEX IDX_BDE1A419A76ED395 (user_id), INDEX IDX_BDE1A4199E665F32 (fil_de_discussion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE fil_de_discussion (id INT AUTO_INCREMENT NOT NULL, promo_id INT NOT NULL, titre VARCHAR(255) NOT NULL, date DATE NOT NULL, UNIQUE INDEX UNIQ_399E12C5D0C07AFF (promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formateur (id INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formateur_groupe (formateur_id INT NOT NULL, groupe_id INT NOT NULL, INDEX IDX_2C668E09155D8F51 (formateur_id), INDEX IDX_2C668E097A45358C (groupe_id), PRIMARY KEY(formateur_id, groupe_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupe (id INT AUTO_INCREMENT NOT NULL, promo_id INT NOT NULL, nom VARCHAR(255) NOT NULL, date_creation DATE NOT NULL, statut VARCHAR(255) DEFAULT NULL, type VARCHAR(255) DEFAULT NULL, id_formateur_principal VARCHAR(255) DEFAULT NULL, INDEX IDX_4B98C21D0C07AFF (promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupecompetence (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, libelle VARCHAR(255) NOT NULL, descriptif VARCHAR(255) NOT NULL, INDEX IDX_89DC1A55A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupecompetence_competence (groupecompetence_id INT NOT NULL, competence_id INT NOT NULL, INDEX IDX_70BDD49C337E4DC6 (groupecompetence_id), INDEX IDX_70BDD49C15761DAB (competence_id), PRIMARY KEY(groupecompetence_id, competence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupetag (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, last_update DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE groupetag_tag (groupetag_id INT NOT NULL, tag_id INT NOT NULL, INDEX IDX_905A3638654741DD (groupetag_id), INDEX IDX_905A3638BAD26311 (tag_id), PRIMARY KEY(groupetag_id, tag_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable (id INT AUTO_INCREMENT NOT NULL, livrable_attendu_id INT NOT NULL, apprenant_id INT NOT NULL, url VARCHAR(255) NOT NULL, INDEX IDX_9E78008C75180ACC (livrable_attendu_id), INDEX IDX_9E78008CC5697D6D (apprenant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_attendu (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_attendu_brief (livrable_attendu_id INT NOT NULL, brief_id INT NOT NULL, INDEX IDX_778854ED75180ACC (livrable_attendu_id), INDEX IDX_778854ED757FABFF (brief_id), PRIMARY KEY(livrable_attendu_id, brief_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_partiel (id INT AUTO_INCREMENT NOT NULL, promo_brief_id INT NOT NULL, libelle VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, delai DATE NOT NULL, date_creation DATE NOT NULL, type VARCHAR(255) NOT NULL, INDEX IDX_37F072C5BDA08EC7 (promo_brief_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_partiel_niveau (livrable_partiel_id INT NOT NULL, niveau_id INT NOT NULL, INDEX IDX_4FEB984B519178C4 (livrable_partiel_id), INDEX IDX_4FEB984BB3E9C81 (niveau_id), PRIMARY KEY(livrable_partiel_id, niveau_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE livrable_rendu (id INT AUTO_INCREMENT NOT NULL, livrable_partiel_id INT NOT NULL, apprenant_id INT NOT NULL, statut VARCHAR(255) NOT NULL, delai DATE DEFAULT NULL, date_rendu DATE DEFAULT NULL, INDEX IDX_9033AB0F519178C4 (livrable_partiel_id), INDEX IDX_9033AB0FC5697D6D (apprenant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE niveau (id INT AUTO_INCREMENT NOT NULL, competence_id INT DEFAULT NULL, brief_id INT DEFAULT NULL, libelle VARCHAR(255) NOT NULL, critere_evaluation VARCHAR(255) NOT NULL, groupe_action VARCHAR(255) NOT NULL, INDEX IDX_4BDFF36B15761DAB (competence_id), INDEX IDX_4BDFF36B757FABFF (brief_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profil (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, last_update DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profilsortie (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, referentiel_id INT NOT NULL, langue VARCHAR(255) NOT NULL, titre VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, date_debut DATE NOT NULL, date_fin_provisoire DATE NOT NULL, fabrique VARCHAR(255) NOT NULL, date_fin_reelle DATE DEFAULT NULL, etat VARCHAR(255) NOT NULL, INDEX IDX_B0139AFBA76ED395 (user_id), INDEX IDX_B0139AFB805DB139 (referentiel_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo_brief (id INT AUTO_INCREMENT NOT NULL, brief_id INT NOT NULL, promo_id INT NOT NULL, promo_brief_apprenant_id INT DEFAULT NULL, statut VARCHAR(255) NOT NULL, INDEX IDX_F6922C91757FABFF (brief_id), INDEX IDX_F6922C91D0C07AFF (promo_id), INDEX IDX_F6922C91D7DB67BE (promo_brief_apprenant_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE promo_brief_apprenant (id INT AUTO_INCREMENT NOT NULL, statut VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, presentation VARCHAR(255) NOT NULL, programme LONGBLOB DEFAULT NULL, critere_admission VARCHAR(255) NOT NULL, critere_evaluation VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE referentiel_groupecompetence (referentiel_id INT NOT NULL, groupecompetence_id INT NOT NULL, INDEX IDX_32944F2A805DB139 (referentiel_id), INDEX IDX_32944F2A337E4DC6 (groupecompetence_id), PRIMARY KEY(referentiel_id, groupecompetence_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE ressource (id INT AUTO_INCREMENT NOT NULL, brief_id INT NOT NULL, titre VARCHAR(255) NOT NULL, url VARCHAR(255) DEFAULT NULL, pj LONGBLOB DEFAULT NULL, INDEX IDX_939F4544757FABFF (brief_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE statistiques_competences (id INT AUTO_INCREMENT NOT NULL, apprenant_id INT NOT NULL, referentiel_id INT NOT NULL, competence_id INT DEFAULT NULL, promo_id INT DEFAULT NULL, INDEX IDX_5C1C9F22C5697D6D (apprenant_id), INDEX IDX_5C1C9F22805DB139 (referentiel_id), INDEX IDX_5C1C9F2215761DAB (competence_id), INDEX IDX_5C1C9F22D0C07AFF (promo_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE tag (id INT AUTO_INCREMENT NOT NULL, libelle VARCHAR(255) NOT NULL, descriptif VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, profil_id INT NOT NULL, username VARCHAR(180) NOT NULL, password VARCHAR(255) NOT NULL, avatar LONGBLOB DEFAULT NULL, prenom VARCHAR(255) DEFAULT NULL, nom VARCHAR(255) DEFAULT NULL, email VARCHAR(255) NOT NULL, statut VARCHAR(255) DEFAULT NULL, last_login DATETIME DEFAULT NULL, type VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), INDEX IDX_8D93D649275ED078 (profil_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462EFE5BE99E FOREIGN KEY (profilsortie_id) REFERENCES profilsortie (id)');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462ED7DB67BE FOREIGN KEY (promo_brief_apprenant_id) REFERENCES promo_brief_apprenant (id)');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462EBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE apprenant_groupe ADD CONSTRAINT FK_1D224F8DC5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE apprenant_groupe ADD CONSTRAINT FK_1D224F8D7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief ADD CONSTRAINT FK_1FBB1007805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id)');
        $this->addSql('ALTER TABLE brief ADD CONSTRAINT FK_1FBB1007155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id)');
        $this->addSql('ALTER TABLE brief_tag ADD CONSTRAINT FK_452A4F36757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief_tag ADD CONSTRAINT FK_452A4F36BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief_groupe ADD CONSTRAINT FK_5496297B757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE brief_groupe ADD CONSTRAINT FK_5496297B7A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE cm ADD CONSTRAINT FK_3C0A377EBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC9F3E86A9 FOREIGN KEY (livrable_rendu_id) REFERENCES livrable_rendu (id)');
        $this->addSql('ALTER TABLE commentaire ADD CONSTRAINT FK_67F068BC155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id)');
        $this->addSql('ALTER TABLE commentaire_general ADD CONSTRAINT FK_BDE1A419A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE commentaire_general ADD CONSTRAINT FK_BDE1A4199E665F32 FOREIGN KEY (fil_de_discussion_id) REFERENCES fil_de_discussion (id)');
        $this->addSql('ALTER TABLE fil_de_discussion ADD CONSTRAINT FK_399E12C5D0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE formateur ADD CONSTRAINT FK_ED767E4FBF396750 FOREIGN KEY (id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formateur_groupe ADD CONSTRAINT FK_2C668E09155D8F51 FOREIGN KEY (formateur_id) REFERENCES formateur (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formateur_groupe ADD CONSTRAINT FK_2C668E097A45358C FOREIGN KEY (groupe_id) REFERENCES groupe (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupe ADD CONSTRAINT FK_4B98C21D0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE groupecompetence ADD CONSTRAINT FK_89DC1A55A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE groupecompetence_competence ADD CONSTRAINT FK_70BDD49C337E4DC6 FOREIGN KEY (groupecompetence_id) REFERENCES groupecompetence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupecompetence_competence ADD CONSTRAINT FK_70BDD49C15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupetag_tag ADD CONSTRAINT FK_905A3638654741DD FOREIGN KEY (groupetag_id) REFERENCES groupetag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE groupetag_tag ADD CONSTRAINT FK_905A3638BAD26311 FOREIGN KEY (tag_id) REFERENCES tag (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livrable ADD CONSTRAINT FK_9E78008C75180ACC FOREIGN KEY (livrable_attendu_id) REFERENCES livrable_attendu (id)');
        $this->addSql('ALTER TABLE livrable ADD CONSTRAINT FK_9E78008CC5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE livrable_attendu_brief ADD CONSTRAINT FK_778854ED75180ACC FOREIGN KEY (livrable_attendu_id) REFERENCES livrable_attendu (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livrable_attendu_brief ADD CONSTRAINT FK_778854ED757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livrable_partiel ADD CONSTRAINT FK_37F072C5BDA08EC7 FOREIGN KEY (promo_brief_id) REFERENCES promo_brief (id)');
        $this->addSql('ALTER TABLE livrable_partiel_niveau ADD CONSTRAINT FK_4FEB984B519178C4 FOREIGN KEY (livrable_partiel_id) REFERENCES livrable_partiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livrable_partiel_niveau ADD CONSTRAINT FK_4FEB984BB3E9C81 FOREIGN KEY (niveau_id) REFERENCES niveau (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE livrable_rendu ADD CONSTRAINT FK_9033AB0F519178C4 FOREIGN KEY (livrable_partiel_id) REFERENCES livrable_partiel (id)');
        $this->addSql('ALTER TABLE livrable_rendu ADD CONSTRAINT FK_9033AB0FC5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE niveau ADD CONSTRAINT FK_4BDFF36B15761DAB FOREIGN KEY (competence_id) REFERENCES competence (id)');
        $this->addSql('ALTER TABLE niveau ADD CONSTRAINT FK_4BDFF36B757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFBA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE promo ADD CONSTRAINT FK_B0139AFB805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id)');
        $this->addSql('ALTER TABLE promo_brief ADD CONSTRAINT FK_F6922C91757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('ALTER TABLE promo_brief ADD CONSTRAINT FK_F6922C91D0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE promo_brief ADD CONSTRAINT FK_F6922C91D7DB67BE FOREIGN KEY (promo_brief_apprenant_id) REFERENCES promo_brief_apprenant (id)');
        $this->addSql('ALTER TABLE referentiel_groupecompetence ADD CONSTRAINT FK_32944F2A805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE referentiel_groupecompetence ADD CONSTRAINT FK_32944F2A337E4DC6 FOREIGN KEY (groupecompetence_id) REFERENCES groupecompetence (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE ressource ADD CONSTRAINT FK_939F4544757FABFF FOREIGN KEY (brief_id) REFERENCES brief (id)');
        $this->addSql('ALTER TABLE statistiques_competences ADD CONSTRAINT FK_5C1C9F22C5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE statistiques_competences ADD CONSTRAINT FK_5C1C9F22805DB139 FOREIGN KEY (referentiel_id) REFERENCES referentiel (id)');
        $this->addSql('ALTER TABLE statistiques_competences ADD CONSTRAINT FK_5C1C9F2215761DAB FOREIGN KEY (competence_id) REFERENCES competence (id)');
        $this->addSql('ALTER TABLE statistiques_competences ADD CONSTRAINT FK_5C1C9F22D0C07AFF FOREIGN KEY (promo_id) REFERENCES promo (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649275ED078 FOREIGN KEY (profil_id) REFERENCES profil (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE apprenant_groupe DROP FOREIGN KEY FK_1D224F8DC5697D6D');
        $this->addSql('ALTER TABLE livrable DROP FOREIGN KEY FK_9E78008CC5697D6D');
        $this->addSql('ALTER TABLE livrable_rendu DROP FOREIGN KEY FK_9033AB0FC5697D6D');
        $this->addSql('ALTER TABLE statistiques_competences DROP FOREIGN KEY FK_5C1C9F22C5697D6D');
        $this->addSql('ALTER TABLE brief_tag DROP FOREIGN KEY FK_452A4F36757FABFF');
        $this->addSql('ALTER TABLE brief_groupe DROP FOREIGN KEY FK_5496297B757FABFF');
        $this->addSql('ALTER TABLE livrable_attendu_brief DROP FOREIGN KEY FK_778854ED757FABFF');
        $this->addSql('ALTER TABLE niveau DROP FOREIGN KEY FK_4BDFF36B757FABFF');
        $this->addSql('ALTER TABLE promo_brief DROP FOREIGN KEY FK_F6922C91757FABFF');
        $this->addSql('ALTER TABLE ressource DROP FOREIGN KEY FK_939F4544757FABFF');
        $this->addSql('ALTER TABLE groupecompetence_competence DROP FOREIGN KEY FK_70BDD49C15761DAB');
        $this->addSql('ALTER TABLE niveau DROP FOREIGN KEY FK_4BDFF36B15761DAB');
        $this->addSql('ALTER TABLE statistiques_competences DROP FOREIGN KEY FK_5C1C9F2215761DAB');
        $this->addSql('ALTER TABLE commentaire_general DROP FOREIGN KEY FK_BDE1A4199E665F32');
        $this->addSql('ALTER TABLE brief DROP FOREIGN KEY FK_1FBB1007155D8F51');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC155D8F51');
        $this->addSql('ALTER TABLE formateur_groupe DROP FOREIGN KEY FK_2C668E09155D8F51');
        $this->addSql('ALTER TABLE apprenant_groupe DROP FOREIGN KEY FK_1D224F8D7A45358C');
        $this->addSql('ALTER TABLE brief_groupe DROP FOREIGN KEY FK_5496297B7A45358C');
        $this->addSql('ALTER TABLE formateur_groupe DROP FOREIGN KEY FK_2C668E097A45358C');
        $this->addSql('ALTER TABLE groupecompetence_competence DROP FOREIGN KEY FK_70BDD49C337E4DC6');
        $this->addSql('ALTER TABLE referentiel_groupecompetence DROP FOREIGN KEY FK_32944F2A337E4DC6');
        $this->addSql('ALTER TABLE groupetag_tag DROP FOREIGN KEY FK_905A3638654741DD');
        $this->addSql('ALTER TABLE livrable DROP FOREIGN KEY FK_9E78008C75180ACC');
        $this->addSql('ALTER TABLE livrable_attendu_brief DROP FOREIGN KEY FK_778854ED75180ACC');
        $this->addSql('ALTER TABLE livrable_partiel_niveau DROP FOREIGN KEY FK_4FEB984B519178C4');
        $this->addSql('ALTER TABLE livrable_rendu DROP FOREIGN KEY FK_9033AB0F519178C4');
        $this->addSql('ALTER TABLE commentaire DROP FOREIGN KEY FK_67F068BC9F3E86A9');
        $this->addSql('ALTER TABLE livrable_partiel_niveau DROP FOREIGN KEY FK_4FEB984BB3E9C81');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649275ED078');
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462EFE5BE99E');
        $this->addSql('ALTER TABLE fil_de_discussion DROP FOREIGN KEY FK_399E12C5D0C07AFF');
        $this->addSql('ALTER TABLE groupe DROP FOREIGN KEY FK_4B98C21D0C07AFF');
        $this->addSql('ALTER TABLE promo_brief DROP FOREIGN KEY FK_F6922C91D0C07AFF');
        $this->addSql('ALTER TABLE statistiques_competences DROP FOREIGN KEY FK_5C1C9F22D0C07AFF');
        $this->addSql('ALTER TABLE livrable_partiel DROP FOREIGN KEY FK_37F072C5BDA08EC7');
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462ED7DB67BE');
        $this->addSql('ALTER TABLE promo_brief DROP FOREIGN KEY FK_F6922C91D7DB67BE');
        $this->addSql('ALTER TABLE brief DROP FOREIGN KEY FK_1FBB1007805DB139');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFB805DB139');
        $this->addSql('ALTER TABLE referentiel_groupecompetence DROP FOREIGN KEY FK_32944F2A805DB139');
        $this->addSql('ALTER TABLE statistiques_competences DROP FOREIGN KEY FK_5C1C9F22805DB139');
        $this->addSql('ALTER TABLE brief_tag DROP FOREIGN KEY FK_452A4F36BAD26311');
        $this->addSql('ALTER TABLE groupetag_tag DROP FOREIGN KEY FK_905A3638BAD26311');
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462EBF396750');
        $this->addSql('ALTER TABLE cm DROP FOREIGN KEY FK_3C0A377EBF396750');
        $this->addSql('ALTER TABLE commentaire_general DROP FOREIGN KEY FK_BDE1A419A76ED395');
        $this->addSql('ALTER TABLE formateur DROP FOREIGN KEY FK_ED767E4FBF396750');
        $this->addSql('ALTER TABLE groupecompetence DROP FOREIGN KEY FK_89DC1A55A76ED395');
        $this->addSql('ALTER TABLE promo DROP FOREIGN KEY FK_B0139AFBA76ED395');
        $this->addSql('DROP TABLE apprenant');
        $this->addSql('DROP TABLE apprenant_groupe');
        $this->addSql('DROP TABLE brief');
        $this->addSql('DROP TABLE brief_tag');
        $this->addSql('DROP TABLE brief_groupe');
        $this->addSql('DROP TABLE cm');
        $this->addSql('DROP TABLE commentaire');
        $this->addSql('DROP TABLE commentaire_general');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE fil_de_discussion');
        $this->addSql('DROP TABLE formateur');
        $this->addSql('DROP TABLE formateur_groupe');
        $this->addSql('DROP TABLE groupe');
        $this->addSql('DROP TABLE groupecompetence');
        $this->addSql('DROP TABLE groupecompetence_competence');
        $this->addSql('DROP TABLE groupetag');
        $this->addSql('DROP TABLE groupetag_tag');
        $this->addSql('DROP TABLE livrable');
        $this->addSql('DROP TABLE livrable_attendu');
        $this->addSql('DROP TABLE livrable_attendu_brief');
        $this->addSql('DROP TABLE livrable_partiel');
        $this->addSql('DROP TABLE livrable_partiel_niveau');
        $this->addSql('DROP TABLE livrable_rendu');
        $this->addSql('DROP TABLE niveau');
        $this->addSql('DROP TABLE profil');
        $this->addSql('DROP TABLE profilsortie');
        $this->addSql('DROP TABLE promo');
        $this->addSql('DROP TABLE promo_brief');
        $this->addSql('DROP TABLE promo_brief_apprenant');
        $this->addSql('DROP TABLE referentiel');
        $this->addSql('DROP TABLE referentiel_groupecompetence');
        $this->addSql('DROP TABLE ressource');
        $this->addSql('DROP TABLE statistiques_competences');
        $this->addSql('DROP TABLE tag');
        $this->addSql('DROP TABLE user');
    }
}
