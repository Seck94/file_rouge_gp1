<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200831160200 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE apprenant DROP FOREIGN KEY FK_C4EB462ED7DB67BE');
        $this->addSql('DROP INDEX IDX_C4EB462ED7DB67BE ON apprenant');
        $this->addSql('ALTER TABLE apprenant DROP promo_brief_apprenant_id');
        $this->addSql('ALTER TABLE promo_brief DROP FOREIGN KEY FK_F6922C91D7DB67BE');
        $this->addSql('DROP INDEX IDX_F6922C91D7DB67BE ON promo_brief');
        $this->addSql('ALTER TABLE promo_brief DROP promo_brief_apprenant_id');
        $this->addSql('ALTER TABLE promo_brief_apprenant ADD apprenant_id INT DEFAULT NULL, ADD promo_brief_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE promo_brief_apprenant ADD CONSTRAINT FK_A9D0C93CC5697D6D FOREIGN KEY (apprenant_id) REFERENCES apprenant (id)');
        $this->addSql('ALTER TABLE promo_brief_apprenant ADD CONSTRAINT FK_A9D0C93CBDA08EC7 FOREIGN KEY (promo_brief_id) REFERENCES promo_brief (id)');
        $this->addSql('CREATE INDEX IDX_A9D0C93CC5697D6D ON promo_brief_apprenant (apprenant_id)');
        $this->addSql('CREATE INDEX IDX_A9D0C93CBDA08EC7 ON promo_brief_apprenant (promo_brief_id)');
        $this->addSql('ALTER TABLE statistiques_competences ADD niveau1 TINYINT(1) NOT NULL, ADD niveau2 TINYINT(1) NOT NULL, ADD niveau3 TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE apprenant ADD promo_brief_apprenant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE apprenant ADD CONSTRAINT FK_C4EB462ED7DB67BE FOREIGN KEY (promo_brief_apprenant_id) REFERENCES promo_brief_apprenant (id)');
        $this->addSql('CREATE INDEX IDX_C4EB462ED7DB67BE ON apprenant (promo_brief_apprenant_id)');
        $this->addSql('ALTER TABLE promo_brief ADD promo_brief_apprenant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE promo_brief ADD CONSTRAINT FK_F6922C91D7DB67BE FOREIGN KEY (promo_brief_apprenant_id) REFERENCES promo_brief_apprenant (id)');
        $this->addSql('CREATE INDEX IDX_F6922C91D7DB67BE ON promo_brief (promo_brief_apprenant_id)');
        $this->addSql('ALTER TABLE promo_brief_apprenant DROP FOREIGN KEY FK_A9D0C93CC5697D6D');
        $this->addSql('ALTER TABLE promo_brief_apprenant DROP FOREIGN KEY FK_A9D0C93CBDA08EC7');
        $this->addSql('DROP INDEX IDX_A9D0C93CC5697D6D ON promo_brief_apprenant');
        $this->addSql('DROP INDEX IDX_A9D0C93CBDA08EC7 ON promo_brief_apprenant');
        $this->addSql('ALTER TABLE promo_brief_apprenant DROP apprenant_id, DROP promo_brief_id');
        $this->addSql('ALTER TABLE statistiques_competences DROP niveau1, DROP niveau2, DROP niveau3');
    }
}
