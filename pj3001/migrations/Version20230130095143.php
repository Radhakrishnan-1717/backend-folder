<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230130095143 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE userpersonaldata (id INT AUTO_INCREMENT NOT NULL, userid_id INT DEFAULT NULL, userrole VARCHAR(255) NOT NULL, userexp VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_73B7435C58E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE userprofessional (id INT AUTO_INCREMENT NOT NULL, userid_id INT NOT NULL, userdob VARCHAR(255) NOT NULL, userrmaritalstatus TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_441308C158E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usertable5 (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, userage INT NOT NULL, userphonenumber VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE userpersonaldata ADD CONSTRAINT FK_73B7435C58E0A285 FOREIGN KEY (userid_id) REFERENCES usertable5 (id)');
        $this->addSql('ALTER TABLE userprofessional ADD CONSTRAINT FK_441308C158E0A285 FOREIGN KEY (userid_id) REFERENCES usertable5 (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE userpersonaldata DROP FOREIGN KEY FK_73B7435C58E0A285');
        $this->addSql('ALTER TABLE userprofessional DROP FOREIGN KEY FK_441308C158E0A285');
        $this->addSql('DROP TABLE userpersonaldata');
        $this->addSql('DROP TABLE userprofessional');
        $this->addSql('DROP TABLE usertable5');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
