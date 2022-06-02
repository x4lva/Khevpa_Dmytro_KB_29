<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220426174459 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE faculty ADD email VARCHAR(255) NOT NULL, ADD site VARCHAR(255) NOT NULL, ADD address VARCHAR(255) NOT NULL, ADD telephone VARCHAR(255) NOT NULL, ADD lng DOUBLE PRECISION NOT NULL, ADD lan DOUBLE PRECISION NOT NULL');
        $this->addSql('ALTER TABLE speciality ADD code VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE student ADD mid_name VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE faculty DROP email, DROP site, DROP address, DROP telephone, DROP lng, DROP lan');
        $this->addSql('ALTER TABLE speciality DROP code');
        $this->addSql('ALTER TABLE student DROP mid_name');
    }
}
