<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230203084221 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE userproject (id INT AUTO_INCREMENT NOT NULL, userprojecttitle VARCHAR(255) NOT NULL, userprojectdesc VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE userproject_usertable10 (userproject_id INT NOT NULL, usertable10_id INT NOT NULL, INDEX IDX_22550F8A5B113365 (userproject_id), INDEX IDX_22550F8A69C79E81 (usertable10_id), PRIMARY KEY(userproject_id, usertable10_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usertable10 (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(255) NOT NULL, userage VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE userproject_usertable10 ADD CONSTRAINT FK_22550F8A5B113365 FOREIGN KEY (userproject_id) REFERENCES userproject (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE userproject_usertable10 ADD CONSTRAINT FK_22550F8A69C79E81 FOREIGN KEY (usertable10_id) REFERENCES usertable10 (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE userproject_usertable10 DROP FOREIGN KEY FK_22550F8A5B113365');
        $this->addSql('ALTER TABLE userproject_usertable10 DROP FOREIGN KEY FK_22550F8A69C79E81');
        $this->addSql('DROP TABLE userproject');
        $this->addSql('DROP TABLE userproject_usertable10');
        $this->addSql('DROP TABLE usertable10');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
