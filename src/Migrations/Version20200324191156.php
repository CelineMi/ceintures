<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200324191156 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE domain (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE behavior_belt (id INT AUTO_INCREMENT NOT NULL, color VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence_belt (id INT AUTO_INCREMENT NOT NULL, color VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE behavior (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, week_id_id INT NOT NULL, behavior_belt_id_id INT NOT NULL, diplome_id_id INT NOT NULL, green_cross INT NOT NULL, black_cross INT NOT NULL, INDEX IDX_3BABA0B09D86650F (user_id_id), INDEX IDX_3BABA0B0B4EF57D4 (week_id_id), INDEX IDX_3BABA0B0D07F3D44 (behavior_belt_id_id), INDEX IDX_3BABA0B014385DEB (diplome_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE diplome (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, firstname VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, role VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, seen_at DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE competence (id INT AUTO_INCREMENT NOT NULL, user_id_id INT DEFAULT NULL, domain_id_id INT NOT NULL, competence_belt_id_id INT NOT NULL, status TINYINT(1) NOT NULL, evaluated_at DATETIME NOT NULL, INDEX IDX_94D4687F9D86650F (user_id_id), INDEX IDX_94D4687FAC3FB681 (domain_id_id), INDEX IDX_94D4687FD5315283 (competence_belt_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE week (id INT AUTO_INCREMENT NOT NULL, number INT NOT NULL, week_start DATETIME NOT NULL, week_end DATETIME NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE behavior ADD CONSTRAINT FK_3BABA0B09D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE behavior ADD CONSTRAINT FK_3BABA0B0B4EF57D4 FOREIGN KEY (week_id_id) REFERENCES week (id)');
        $this->addSql('ALTER TABLE behavior ADD CONSTRAINT FK_3BABA0B0D07F3D44 FOREIGN KEY (behavior_belt_id_id) REFERENCES behavior_belt (id)');
        $this->addSql('ALTER TABLE behavior ADD CONSTRAINT FK_3BABA0B014385DEB FOREIGN KEY (diplome_id_id) REFERENCES diplome (id)');
        $this->addSql('ALTER TABLE competence ADD CONSTRAINT FK_94D4687F9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE competence ADD CONSTRAINT FK_94D4687FAC3FB681 FOREIGN KEY (domain_id_id) REFERENCES domain (id)');
        $this->addSql('ALTER TABLE competence ADD CONSTRAINT FK_94D4687FD5315283 FOREIGN KEY (competence_belt_id_id) REFERENCES competence_belt (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE competence DROP FOREIGN KEY FK_94D4687FAC3FB681');
        $this->addSql('ALTER TABLE behavior DROP FOREIGN KEY FK_3BABA0B0D07F3D44');
        $this->addSql('ALTER TABLE competence DROP FOREIGN KEY FK_94D4687FD5315283');
        $this->addSql('ALTER TABLE behavior DROP FOREIGN KEY FK_3BABA0B014385DEB');
        $this->addSql('ALTER TABLE behavior DROP FOREIGN KEY FK_3BABA0B09D86650F');
        $this->addSql('ALTER TABLE competence DROP FOREIGN KEY FK_94D4687F9D86650F');
        $this->addSql('ALTER TABLE behavior DROP FOREIGN KEY FK_3BABA0B0B4EF57D4');
        $this->addSql('DROP TABLE domain');
        $this->addSql('DROP TABLE behavior_belt');
        $this->addSql('DROP TABLE competence_belt');
        $this->addSql('DROP TABLE behavior');
        $this->addSql('DROP TABLE diplome');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE competence');
        $this->addSql('DROP TABLE week');
    }
}
