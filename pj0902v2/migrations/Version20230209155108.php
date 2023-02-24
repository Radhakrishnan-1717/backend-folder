<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230209155108 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE usercity (id INT AUTO_INCREMENT NOT NULL, userid_id INT NOT NULL, userstate VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8B267A4558E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usercountrydata (id INT AUTO_INCREMENT NOT NULL, userid_id INT NOT NULL, usercounty VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_1F9CEA9C58E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE userperdata (id INT AUTO_INCREMENT NOT NULL, userid_id INT NOT NULL, userfathername VARCHAR(255) NOT NULL, usermothername VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_BAF9F2D258E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE userprofdata (id INT AUTO_INCREMENT NOT NULL, userid_id INT NOT NULL, userskill VARCHAR(255) NOT NULL, userexp VARCHAR(255) NOT NULL, userrole VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_FDA7639158E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE userstatedata (id INT AUTO_INCREMENT NOT NULL, userid_id INT NOT NULL, userstate VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_A967097058E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usertable19 (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, useremailid VARCHAR(255) NOT NULL, userphonenumber VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE usercity ADD CONSTRAINT FK_8B267A4558E0A285 FOREIGN KEY (userid_id) REFERENCES usertable19 (id)');
        $this->addSql('ALTER TABLE usercountrydata ADD CONSTRAINT FK_1F9CEA9C58E0A285 FOREIGN KEY (userid_id) REFERENCES usertable19 (id)');
        $this->addSql('ALTER TABLE userperdata ADD CONSTRAINT FK_BAF9F2D258E0A285 FOREIGN KEY (userid_id) REFERENCES usertable19 (id)');
        $this->addSql('ALTER TABLE userprofdata ADD CONSTRAINT FK_FDA7639158E0A285 FOREIGN KEY (userid_id) REFERENCES usertable19 (id)');
        $this->addSql('ALTER TABLE userstatedata ADD CONSTRAINT FK_A967097058E0A285 FOREIGN KEY (userid_id) REFERENCES usertable19 (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usercity DROP FOREIGN KEY FK_8B267A4558E0A285');
        $this->addSql('ALTER TABLE usercountrydata DROP FOREIGN KEY FK_1F9CEA9C58E0A285');
        $this->addSql('ALTER TABLE userperdata DROP FOREIGN KEY FK_BAF9F2D258E0A285');
        $this->addSql('ALTER TABLE userprofdata DROP FOREIGN KEY FK_FDA7639158E0A285');
        $this->addSql('ALTER TABLE userstatedata DROP FOREIGN KEY FK_A967097058E0A285');
        $this->addSql('DROP TABLE usercity');
        $this->addSql('DROP TABLE usercountrydata');
        $this->addSql('DROP TABLE userperdata');
        $this->addSql('DROP TABLE userprofdata');
        $this->addSql('DROP TABLE userstatedata');
        $this->addSql('DROP TABLE usertable19');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
