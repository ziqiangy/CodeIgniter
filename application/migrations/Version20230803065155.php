<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230803065155 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("
        CREATE TABLE users (
            forename VARCHAR(32) NOT NULL,
            surname VARCHAR(32) NOT NULL,
            username VARCHAR(32) NOT NULL UNIQUE,
            password VARCHAR(32) NOT NULL
        )"); 

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql("
        DROP TABLE users
        ");

    }
}
