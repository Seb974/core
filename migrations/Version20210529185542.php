<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210529185542 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE farm ADD energy VARCHAR(255) DEFAULT NULL, ADD begin_at VARCHAR(4) DEFAULT NULL, ADD investment_cost DOUBLE PRECISION DEFAULT NULL, ADD computer INT DEFAULT NULL, ADD power VARCHAR(255) DEFAULT NULL, ADD daily_profit DOUBLE PRECISION DEFAULT NULL, ADD profit_percent DOUBLE PRECISION DEFAULT NULL, ADD part_price DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE farm DROP energy, DROP begin_at, DROP investment_cost, DROP computer, DROP power, DROP daily_profit, DROP profit_percent, DROP part_price');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
