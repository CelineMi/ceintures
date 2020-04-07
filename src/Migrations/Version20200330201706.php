<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200330201706 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sub_domain ADD belt_id INT NOT NULL');
        $this->addSql('ALTER TABLE sub_domain ADD CONSTRAINT FK_15F85147F8E3ADFE FOREIGN KEY (belt_id) REFERENCES competence_belt (id)');
        $this->addSql('CREATE INDEX IDX_15F85147F8E3ADFE ON sub_domain (belt_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE sub_domain DROP FOREIGN KEY FK_15F85147F8E3ADFE');
        $this->addSql('DROP INDEX IDX_15F85147F8E3ADFE ON sub_domain');
        $this->addSql('ALTER TABLE sub_domain DROP belt_id');
    }
}
