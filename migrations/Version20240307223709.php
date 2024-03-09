<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240307223709 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id_categorie INT AUTO_INCREMENT NOT NULL, nomcategorie VARCHAR(255) NOT NULL, PRIMARY KEY(id_categorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE chatbot (id INT AUTO_INCREMENT NOT NULL, queries VARCHAR(255) NOT NULL, replies VARCHAR(255) NOT NULL, message VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pack (id_pack INT AUTO_INCREMENT NOT NULL, id_typepack INT NOT NULL, nom_pack VARCHAR(255) NOT NULL, description_pack VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, date DATE NOT NULL, image VARCHAR(255) NOT NULL, disponible TINYINT(1) NOT NULL, INDEX IDX_97DE5E2388794DAD (id_typepack), PRIMARY KEY(id_pack)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pack_personnaliser (id_pack_personnaliser INT AUTO_INCREMENT NOT NULL, pack_id INT DEFAULT NULL, programme_id INT DEFAULT NULL, INDEX IDX_A299BCFB1919B217 (pack_id), INDEX IDX_A299BCFB62BB7AEE (programme_id), PRIMARY KEY(id_pack_personnaliser)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE programme (id_prog INT AUTO_INCREMENT NOT NULL, id_categorie INT DEFAULT NULL, image VARCHAR(255) NOT NULL, duree DATETIME NOT NULL, prix DOUBLE PRECISION NOT NULL, description_programme VARCHAR(255) NOT NULL, disponible TINYINT(1) NOT NULL, INDEX IDX_3DDCB9FFC9486A13 (id_categorie), PRIMARY KEY(id_prog)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE typepack (id_typepack INT AUTO_INCREMENT NOT NULL, nomTypePack VARCHAR(255) NOT NULL, PRIMARY KEY(id_typepack)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, nom VARCHAR(180) NOT NULL, prenom VARCHAR(180) NOT NULL, roles JSON NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), UNIQUE INDEX UNIQ_8D93D6496C6E55B5 (nom), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pack ADD CONSTRAINT FK_97DE5E2388794DAD FOREIGN KEY (id_typepack) REFERENCES typepack (id_typepack)');
        $this->addSql('ALTER TABLE pack_personnaliser ADD CONSTRAINT FK_A299BCFB1919B217 FOREIGN KEY (pack_id) REFERENCES pack (id_pack)');
        $this->addSql('ALTER TABLE pack_personnaliser ADD CONSTRAINT FK_A299BCFB62BB7AEE FOREIGN KEY (programme_id) REFERENCES programme (id_prog)');
        $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FFC9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id_categorie)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pack DROP FOREIGN KEY FK_97DE5E2388794DAD');
        $this->addSql('ALTER TABLE pack_personnaliser DROP FOREIGN KEY FK_A299BCFB1919B217');
        $this->addSql('ALTER TABLE pack_personnaliser DROP FOREIGN KEY FK_A299BCFB62BB7AEE');
        $this->addSql('ALTER TABLE programme DROP FOREIGN KEY FK_3DDCB9FFC9486A13');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE chatbot');
        $this->addSql('DROP TABLE pack');
        $this->addSql('DROP TABLE pack_personnaliser');
        $this->addSql('DROP TABLE programme');
        $this->addSql('DROP TABLE typepack');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
