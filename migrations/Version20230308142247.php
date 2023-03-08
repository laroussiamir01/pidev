<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230308142247 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE don ADD CONSTRAINT FK_F8F081D99D6A1065 FOREIGN KEY (events_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE even_like ADD CONSTRAINT FK_46D6828F71F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE fournisseur CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE materiel CHANGE id id INT AUTO_INCREMENT NOT NULL, CHANGE libelle libelle VARCHAR(255) NOT NULL, CHANGE type type VARCHAR(255) NOT NULL, CHANGE prix prix INT NOT NULL');
        $this->addSql('ALTER TABLE materiel ADD CONSTRAINT FK_18D2B091670C757F FOREIGN KEY (fournisseur_id) REFERENCES fournisseur (id)');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE60640467B3B43D FOREIGN KEY (users_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE id id BIGINT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE don DROP FOREIGN KEY FK_F8F081D99D6A1065');
        $this->addSql('ALTER TABLE even_like DROP FOREIGN KEY FK_46D6828F71F7E88B');
        $this->addSql('ALTER TABLE fournisseur CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE materiel DROP FOREIGN KEY FK_18D2B091670C757F');
        $this->addSql('ALTER TABLE materiel CHANGE id id INT NOT NULL, CHANGE libelle libelle VARCHAR(255) DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE prix prix INT DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE id id BIGINT NOT NULL');
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE60640467B3B43D');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
    }
}
