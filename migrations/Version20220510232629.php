<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220510232629 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE speciality_mark (speciality_id INT NOT NULL, mark_id INT NOT NULL, INDEX IDX_CFBB04573B5A08D7 (speciality_id), INDEX IDX_CFBB04574290F12B (mark_id), PRIMARY KEY(speciality_id, mark_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE speciality_mark ADD CONSTRAINT FK_CFBB04573B5A08D7 FOREIGN KEY (speciality_id) REFERENCES speciality (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE speciality_mark ADD CONSTRAINT FK_CFBB04574290F12B FOREIGN KEY (mark_id) REFERENCES mark (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE speciality_mark');
    }
}
