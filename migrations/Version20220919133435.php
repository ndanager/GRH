<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220919133435 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE timecard ADD sport_id INT NOT NULL');
        $this->addSql('ALTER TABLE timecard ADD CONSTRAINT FK_81FEEA4354BBBFB7 FOREIGN KEY (sport_id) REFERENCES sport (id)');
        $this->addSql('CREATE INDEX IDX_81FEEA4354BBBFB7 ON timecard (sport_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE timecard DROP FOREIGN KEY FK_81FEEA4354BBBFB7');
        $this->addSql('DROP INDEX IDX_81FEEA4354BBBFB7 ON timecard');
        $this->addSql('ALTER TABLE timecard DROP sport_id');
    }
}