<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230210105830 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE userprofdata (id INT AUTO_INCREMENT NOT NULL, userid_id INT NOT NULL, userskill VARCHAR(255) NOT NULL, userrole VARCHAR(255) NOT NULL, userexp VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_FDA7639158E0A285 (userid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE userprofdata ADD CONSTRAINT FK_FDA7639158E0A285 FOREIGN KEY (userid_id) REFERENCES usertable20 (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE userprofdata');
    }
}
