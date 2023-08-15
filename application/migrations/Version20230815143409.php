<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230815143409 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'update surname and forename';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql("ALTER TABLE users CHANGE surname lastname VARCHAR(255);");
        $this->addSql("ALTER TABLE users CHANGE forename firstname VARCHAR(255);");
        $this->addSql("ALTER TABLE users MODIFY COLUMN username VARCHAR(255);");
        $this->addSql("ALTER TABLE users MODIFY COLUMN password VARCHAR(255);");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        
        $this->addSql("ALTER TABLE users CHANGE lastname surname VARCHAR(255);");
        $this->addSql("ALTER TABLE users CHANGE firstname forename VARCHAR(255);");
        $this->addSql("ALTER TABLE users MODIFY COLUMN username VARCHAR(32);");
        $this->addSql("ALTER TABLE users MODIFY COLUMN password VARCHAR(32);");

    }
}
