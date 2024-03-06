<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20240229113117 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // Créer la table categorie
        if (!$schema->hasTable('categorie')) {
            $this->addSql('CREATE TABLE categorie (
                id_categorie INT AUTO_INCREMENT NOT NULL, 
                nomcategorie VARCHAR(255) NOT NULL, 
                PRIMARY KEY(id_categorie)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }

        // Créer la table pack
        if (!$schema->hasTable('pack')) {
            $this->addSql('CREATE TABLE pack (
                id_pack INT AUTO_INCREMENT NOT NULL, 
                id_typepack INT NOT NULL, 
                nom_pack VARCHAR(255) NOT NULL, 
                description_pack VARCHAR(255) NOT NULL, 
                prix DOUBLE PRECISION NOT NULL, 
                date DATE NOT NULL, 
                image VARCHAR(255) NOT NULL, 
                INDEX IDX_97DE5E2388794DAD (id_typepack), 
                PRIMARY KEY(id_pack)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
            $this->addSql('ALTER TABLE pack ADD CONSTRAINT FK_97DE5E2388794DAD FOREIGN KEY (id_typepack) REFERENCES typepack (id_typepack)');
        }

        // Créer la table pack_personnaliser
        if (!$schema->hasTable('pack_personnaliser')) {
            $this->addSql('CREATE TABLE pack_personnaliser (
                id_pack_personnaliser INT AUTO_INCREMENT NOT NULL, 
                pack_id INT DEFAULT NULL, 
                programme_id INT DEFAULT NULL, 
                INDEX IDX_A299BCFB1919B217 (pack_id), 
                INDEX IDX_A299BCFB62BB7AEE (programme_id), 
                PRIMARY KEY(id_pack_personnaliser)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
            $this->addSql('ALTER TABLE pack_personnaliser ADD CONSTRAINT FK_A299BCFB1919B217 FOREIGN KEY (pack_id) REFERENCES pack (id_pack)');
            $this->addSql('ALTER TABLE pack_personnaliser ADD CONSTRAINT FK_A299BCFB62BB7AEE FOREIGN KEY (programme_id) REFERENCES programme (id_prog)');
        }

        // Créer la table programme
        if (!$schema->hasTable('programme')) {
            $this->addSql('CREATE TABLE programme (
                id_prog INT AUTO_INCREMENT NOT NULL, 
                categorie_id INT DEFAULT NULL, 
                image VARCHAR(255) NOT NULL, 
                duree DATETIME NOT NULL, 
                prix DOUBLE PRECISION NOT NULL,
                description_programme VARCHAR(255) NOT NULL, 
                INDEX IDX_3DDCB9FFBCF5E72D (categorie_id), 
                PRIMARY KEY(id_prog)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
            $this->addSql('ALTER TABLE programme ADD CONSTRAINT FK_3DDCB9FFBCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id_categorie)');
        }

        // Créer la table typepack
        if (!$schema->hasTable('typepack')) {
            $this->addSql('CREATE TABLE typepack (
                id_typepack INT AUTO_INCREMENT NOT NULL, 
                nomTypePack VARCHAR(255) NOT NULL, 
                PRIMARY KEY(id_typepack)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }

        // Créer la table reservation_pack
        if (!$schema->hasTable('reservation_pack')) {
            $this->addSql('CREATE TABLE reservation_pack (
                id INT AUTO_INCREMENT NOT NULL, 
                date_reservation DATE NOT NULL, 
                pack_idPackPersonnaliser INT DEFAULT NULL, 
                INDEX IDX_81E7934BD50E3C77 (pack_idPackPersonnaliser), 
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
            $this->addSql('ALTER TABLE reservation_pack ADD CONSTRAINT FK_81E7934BD50E3C77 FOREIGN KEY (pack_idPackPersonnaliser) REFERENCES pack_personnaliser (id_pack_personnaliser)');
        }

        // Créer la table messenger_messages
        if (!$schema->hasTable('messenger_messages')) {
            $this->addSql('CREATE TABLE messenger_messages (
                id BIGINT AUTO_INCREMENT NOT NULL, 
                body LONGTEXT NOT NULL, 
                headers LONGTEXT NOT NULL, 
                queue_name VARCHAR(190) NOT NULL, 
                created_at DATETIME NOT NULL, 
                available_at DATETIME NOT NULL, 
                delivered_at DATETIME DEFAULT NULL, 
                INDEX IDX_75EA56E0FB7336F0 (queue_name), 
                INDEX IDX_75EA56E0E3BD61CE (available_at), 
                INDEX IDX_75EA56E016BA31DB (delivered_at), 
                PRIMARY KEY(id)
            ) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        }
    }

    public function down(Schema $schema): void
    {
        // Supprimer la contrainte de clé étrangère FK_97DE5E2388794DAD si elle existe
        if ($schema->getTable('pack')->hasForeignKey('FK_97DE5E2388794DAD')) {
            $this->addSql('ALTER TABLE pack DROP FOREIGN KEY FK_97DE5E2388794DAD');
        }

        // Supprimer toutes les tables créées
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE pack');
        $this->addSql('DROP TABLE pack_personnaliser');
        $this->addSql('DROP TABLE programme');
        $this->addSql('DROP TABLE typepack');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('DROP TABLE reservation_pack');
    }
}
