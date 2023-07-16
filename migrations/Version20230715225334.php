<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230715225334 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestations ADD description1 VARCHAR(250) NOT NULL, ADD description2 VARCHAR(250) NOT NULL, ADD description3 VARCHAR(250) NOT NULL, DROP description_longue');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestations ADD description_longue VARCHAR(1000) NOT NULL, DROP description1, DROP description2, DROP description3');
    }
}
