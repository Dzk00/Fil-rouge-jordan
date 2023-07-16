<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230716090559 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestations CHANGE description_courte description_courte VARCHAR(150) NOT NULL, CHANGE description1 description1 VARCHAR(500) NOT NULL, CHANGE description2 description2 VARCHAR(500) NOT NULL, CHANGE description3 description3 VARCHAR(100) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestations CHANGE description_courte description_courte VARCHAR(75) NOT NULL, CHANGE description1 description1 VARCHAR(250) NOT NULL, CHANGE description2 description2 VARCHAR(250) NOT NULL, CHANGE description3 description3 VARCHAR(250) NOT NULL');
    }
}
