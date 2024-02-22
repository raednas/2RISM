<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221180432 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id_categorie INT AUTO_INCREMENT NOT NULL, nomcategorie VARCHAR(255) NOT NULL, PRIMARY KEY(id_categorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE programme ADD categorie_id INT DEFAULT NULL, DROP categorie');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FFBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id_categorie)');
        $this->addSql('CREATE INDEX IDX_3DDCB9FFBCF5E72D ON programme (categorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FFBCF5E72D');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP INDEX IDX_3DDCB9FFBCF5E72D ON programme');
        $this->addSql('ALTER TABLE programme ADD categorie VARCHAR(255) NOT NULL, DROP categorie_id');
    }
}
