<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230131155834 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE customerpersdata (id INT AUTO_INCREMENT NOT NULL, customerid_id INT NOT NULL, customerrole VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_C4672D276F04A3B (customerid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE customerprofdata (id INT AUTO_INCREMENT NOT NULL, customerid_id INT DEFAULT NULL, customermaritalstatus VARCHAR(255) NOT NULL, customerdob VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_B977D92576F04A3B (customerid_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usertable7 (id INT AUTO_INCREMENT NOT NULL, customername VARCHAR(255) NOT NULL, customerage VARCHAR(255) NOT NULL, customernumber VARCHAR(255) NOT NULL, customergender VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE customerpersdata ADD CONSTRAINT FK_C4672D276F04A3B FOREIGN KEY (customerid_id) REFERENCES usertable7 (id)');
        $this->addSql('ALTER TABLE customerprofdata ADD CONSTRAINT FK_B977D92576F04A3B FOREIGN KEY (customerid_id) REFERENCES usertable7 (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE customerpersdata DROP FOREIGN KEY FK_C4672D276F04A3B');
        $this->addSql('ALTER TABLE customerprofdata DROP FOREIGN KEY FK_B977D92576F04A3B');
        $this->addSql('DROP TABLE customerpersdata');
        $this->addSql('DROP TABLE customerprofdata');
        $this->addSql('DROP TABLE usertable7');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
