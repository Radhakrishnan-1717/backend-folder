<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214101711 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE departmentemployee (id INT AUTO_INCREMENT NOT NULL, employeename VARCHAR(255) NOT NULL, employeerole VARCHAR(255) NOT NULL, employeemailid VARCHAR(255) NOT NULL, employeephonenumber VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departmentemployee_moviedepartment (departmentemployee_id INT NOT NULL, moviedepartment_id INT NOT NULL, INDEX IDX_A7F4F0727D410DC8 (departmentemployee_id), INDEX IDX_A7F4F072D72D7645 (moviedepartment_id), PRIMARY KEY(departmentemployee_id, moviedepartment_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE departmentemployee_moviedepartment ADD CONSTRAINT FK_A7F4F0727D410DC8 FOREIGN KEY (departmentemployee_id) REFERENCES departmentemployee (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE departmentemployee_moviedepartment ADD CONSTRAINT FK_A7F4F072D72D7645 FOREIGN KEY (moviedepartment_id) REFERENCES moviedepartment (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE departmentemployee_moviedepartment DROP FOREIGN KEY FK_A7F4F0727D410DC8');
        $this->addSql('DROP TABLE departmentemployee');
        $this->addSql('DROP TABLE departmentemployee_moviedepartment');
    }
}
