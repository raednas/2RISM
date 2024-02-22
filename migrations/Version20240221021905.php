<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240221021905 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE pack (id_pack INT AUTO_INCREMENT NOT NULL, id_typepack INT NOT NULL, nom_pack VARCHAR(255) NOT NULL, description_pack VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, date DATE NOT NULL, image VARCHAR(255) NOT NULL, INDEX IDX_97DE5E2388794DAD (id_typepack), PRIMARY KEY(id_pack)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pack_personnaliser (id_pack_personnaliser INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id_pack_personnaliser)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme (id_prog INT AUTO_INCREMENT NOT NULL, discription_programme VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, duree DATETIME NOT NULL, categorie VARCHAR(255) NOT NULL, PRIMARY KEY(id_prog)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE typepack (id_typepack INT AUTO_INCREMENT NOT NULL, nomTypePack VARCHAR(255) NOT NULL, PRIMARY KEY(id_typepack)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pack ADD CONSTRAINT FK_97DE5E2388794DAD FOREIGN KEY (id_typepack) REFERENCES typepack (id_typepack)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pack DROP FOREIGN KEY FK_97DE5E2388794DAD');
        $this->addSql('DROP TABLE pack');
        $this->addSql('DROP TABLE pack_personnaliser');
        $this->addSql('DROP TABLE programme');
        $this->addSql('DROP TABLE typepack');
        $this->addSql('DROP TABLE messenger_messages');
    }
}