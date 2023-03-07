<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230304222043 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appreciation (id INT AUTO_INCREMENT NOT NULL, sujet_id INT DEFAULT NULL, message LONGTEXT NOT NULL, INDEX IDX_5CD4DEAB7C4D497E (sujet_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE appreciation ADD CONSTRAINT FK_5CD4DEAB7C4D497E FOREIGN KEY (sujet_id) REFERENCES services (id)');
        $this->addSql('DROP INDEX id_hospitalisation ON hospitalisation');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appreciation DROP FOREIGN KEY FK_5CD4DEAB7C4D497E');
        $this->addSql('DROP TABLE appreciation');
        $this->addSql('CREATE UNIQUE INDEX id_hospitalisation ON hospitalisation (id_hospitalisation)');
    }
}
