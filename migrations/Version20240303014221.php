<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240303014221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation_pack DROP FOREIGN KEY FK_81E7934B21BB0E54');
        $this->addSql('DROP TABLE reservation_pack');
        $this->addSql('ALTER TABLE pack ADD disponible TINYINT(1) NOT NULL');
        $this->addSql('ALTER TABLE programme ADD disponible TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reservation_pack (id_reservation_pack INT AUTO_INCREMENT NOT NULL, id_pack_personnaliser INT DEFAULT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, INDEX IDX_81E7934B21BB0E54 (id_pack_personnaliser), PRIMARY KEY(id_reservation_pack)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE reservation_pack ADD CONSTRAINT FK_81E7934B21BB0E54 FOREIGN KEY (id_pack_personnaliser) REFERENCES pack_personnaliser (id_pack_personnaliser)');
        $this->addSql('ALTER TABLE pack DROP disponible');
        $this->addSql('ALTER TABLE programme DROP disponible');
    }
}
