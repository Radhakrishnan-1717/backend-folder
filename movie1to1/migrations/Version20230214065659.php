<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230214065659 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE moviesongs (id INT AUTO_INCREMENT NOT NULL, songid_id INT NOT NULL, songname VARCHAR(255) NOT NULL, singer VARCHAR(255) NOT NULL, genre VARCHAR(255) NOT NULL, songruntime VARCHAR(255) NOT NULL, INDEX IDX_14AFE08D51F238B9 (songid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE moviesongs ADD CONSTRAINT FK_14AFE08D51F238B9 FOREIGN KEY (songid_id) REFERENCES movie (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE moviesongs');
    }
}
