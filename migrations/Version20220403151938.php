<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220403151938 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE faculty DROP FOREIGN KEY FK_17966043309D1878');
        $this->addSql('DROP TABLE university');
        $this->addSql('DROP INDEX IDX_17966043309D1878 ON faculty');
        $this->addSql('ALTER TABLE faculty DROP university_id');
        $this->addSql('ALTER TABLE `group` ADD speciality_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE `group` ADD CONSTRAINT FK_6DC044C53B5A08D7 FOREIGN KEY (speciality_id) REFERENCES speciality (id)');
        $this->addSql('CREATE INDEX IDX_6DC044C53B5A08D7 ON `group` (speciality_id)');
        $this->addSql('ALTER TABLE speciality DROP FOREIGN KEY FK_F3D7A08E971A230C');
        $this->addSql('ALTER TABLE speciality DROP FOREIGN KEY FK_F3D7A08E680CAB68');
        $this->addSql('DROP INDEX IDX_F3D7A08E971A230C ON speciality');
        $this->addSql('ALTER TABLE speciality DROP gropus_id, CHANGE faculty_id faculty_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE speciality ADD CONSTRAINT FK_F3D7A08E680CAB68 FOREIGN KEY (faculty_id) REFERENCES faculty (id)');
        $this->addSql('ALTER TABLE student ADD student_group_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE student ADD CONSTRAINT FK_B723AF334DDF95DC FOREIGN KEY (student_group_id) REFERENCES `group` (id)');
        $this->addSql('CREATE INDEX IDX_B723AF334DDF95DC ON student (student_group_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE university (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE faculty ADD university_id INT NOT NULL');
        $this->addSql('ALTER TABLE faculty ADD CONSTRAINT FK_17966043309D1878 FOREIGN KEY (university_id) REFERENCES university (id)');
        $this->addSql('CREATE INDEX IDX_17966043309D1878 ON faculty (university_id)');
        $this->addSql('ALTER TABLE `group` DROP FOREIGN KEY FK_6DC044C53B5A08D7');
        $this->addSql('DROP INDEX IDX_6DC044C53B5A08D7 ON `group`');
        $this->addSql('ALTER TABLE `group` DROP speciality_id');
        $this->addSql('ALTER TABLE speciality DROP FOREIGN KEY FK_F3D7A08E680CAB68');
        $this->addSql('ALTER TABLE speciality ADD gropus_id INT DEFAULT NULL, CHANGE faculty_id faculty_id INT NOT NULL');
        $this->addSql('ALTER TABLE speciality ADD CONSTRAINT FK_F3D7A08E971A230C FOREIGN KEY (gropus_id) REFERENCES `group` (id)');
        $this->addSql('ALTER TABLE speciality ADD CONSTRAINT FK_F3D7A08E680CAB68 FOREIGN KEY (faculty_id) REFERENCES speciality (id)');
        $this->addSql('CREATE INDEX IDX_F3D7A08E971A230C ON speciality (gropus_id)');
        $this->addSql('ALTER TABLE student DROP FOREIGN KEY FK_B723AF334DDF95DC');
        $this->addSql('DROP INDEX IDX_B723AF334DDF95DC ON student');
        $this->addSql('ALTER TABLE student DROP student_group_id');
    }
}
