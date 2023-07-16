<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230715203509 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE prestations_categories DROP FOREIGN KEY FK_163FFD588BE96D0D');
        $this->addSql('ALTER TABLE prestations_categories DROP FOREIGN KEY FK_163FFD58A21214B7');
        $this->addSql('DROP TABLE prestations_categories');
        $this->addSql('ALTER TABLE prestations DROP updated_at');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE prestations_categories (prestations_id INT NOT NULL, categories_id INT NOT NULL, INDEX IDX_163FFD588BE96D0D (prestations_id), INDEX IDX_163FFD58A21214B7 (categories_id), PRIMARY KEY(prestations_id, categories_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE prestations_categories ADD CONSTRAINT FK_163FFD588BE96D0D FOREIGN KEY (prestations_id) REFERENCES prestations (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prestations_categories ADD CONSTRAINT FK_163FFD58A21214B7 FOREIGN KEY (categories_id) REFERENCES categories (id) ON UPDATE NO ACTION ON DELETE CASCADE');
        $this->addSql('ALTER TABLE prestations ADD updated_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }
}
