<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230213054459 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE userdepartment (id INT AUTO_INCREMENT NOT NULL, userdepartmenttitle VARCHAR(255) NOT NULL, userdepartmentstatus TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usertable23 (id INT AUTO_INCREMENT NOT NULL, userdepartment_id INT NOT NULL, username VARCHAR(255) NOT NULL, usermailid VARCHAR(255) NOT NULL, userphonenumber VARCHAR(255) NOT NULL, INDEX IDX_543C5B3D7417EB74 (userdepartment_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE usertable23 ADD CONSTRAINT FK_543C5B3D7417EB74 FOREIGN KEY (userdepartment_id) REFERENCES userdepartment (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usertable23 DROP FOREIGN KEY FK_543C5B3D7417EB74');
        $this->addSql('DROP TABLE userdepartment');
        $this->addSql('DROP TABLE usertable23');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
