<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210529215815 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE farm ADD picture_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE farm ADD CONSTRAINT FK_5816D045EE45BDBF FOREIGN KEY (picture_id) REFERENCES picture (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_5816D045EE45BDBF ON farm (picture_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE farm DROP FOREIGN KEY FK_5816D045EE45BDBF');
        $this->addSql('DROP INDEX UNIQ_5816D045EE45BDBF ON farm');
        $this->addSql('ALTER TABLE farm DROP picture_id');
    }
}
