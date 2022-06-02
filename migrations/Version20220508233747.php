<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220508233747 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `group` ADD active TINYINT(1) DEFAULT 1 NOT NULL');
        $this->addSql('ALTER TABLE speciality ADD active TINYINT(1) DEFAULT 1 NOT NULL');
        $this->addSql('ALTER TABLE student ADD active TINYINT(1) DEFAULT 1 NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `group` DROP active');
        $this->addSql('ALTER TABLE speciality DROP active');
        $this->addSql('ALTER TABLE student DROP active');
    }
}
