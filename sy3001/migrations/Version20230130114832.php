<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230130114832 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE userpersonaldata (id INT AUTO_INCREMENT NOT NULL, userid_id INT NOT NULL, userdob VARCHAR(255) NOT NULL, usermaritalstatus TINYINT(1) NOT NULL, UNIQUE INDEX UNIQ_73B7435C58E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE userprofessionaldata (id INT AUTO_INCREMENT NOT NULL, userid_id INT NOT NULL, userexp VARCHAR(255) NOT NULL, userrole VARCHAR(255) NOT NULL, userskill VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_7D4FEFA358E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usertable6 (id INT AUTO_INCREMENT NOT NULL, userfirstname VARCHAR(255) NOT NULL, usersecondname VARCHAR(255) DEFAULT NULL, userlastname VARCHAR(255) NOT NULL, userlocation VARCHAR(255) NOT NULL, usergender VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE userpersonaldata ADD CONSTRAINT FK_73B7435C58E0A285 FOREIGN KEY (userid_id) REFERENCES usertable6 (id)');
        $this->addSql('ALTER TABLE userprofessionaldata ADD CONSTRAINT FK_7D4FEFA358E0A285 FOREIGN KEY (userid_id) REFERENCES usertable6 (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE userpersonaldata DROP FOREIGN KEY FK_73B7435C58E0A285');
        $this->addSql('ALTER TABLE userprofessionaldata DROP FOREIGN KEY FK_7D4FEFA358E0A285');
        $this->addSql('DROP TABLE userpersonaldata');
        $this->addSql('DROP TABLE userprofessionaldata');
        $this->addSql('DROP TABLE usertable6');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
