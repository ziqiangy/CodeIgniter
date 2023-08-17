<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230817041640 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("ALTER TABLE users MODIFY firstname varchar(255) NOT NULL");
        $this->addSql("ALTER TABLE users MODIFY lastname varchar(255) NOT NULL");
        $this->addSql("ALTER TABLE users MODIFY username varchar(255) NOT NULL");
        $this->addSql("ALTER TABLE users MODIFY password varchar(255) NOT NULL");
        $this->addSql("ALTER TABLE users MODIFY email varchar(255) NOT NULL");
        $this->addSql("ALTER TABLE users ADD UNIQUE (email)");
        $this->addSql("ALTER TABLE users ADD COLUMN id INT AUTO_INCREMENT PRIMARY KEY FIRST;");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql("ALTER TABLE users MODIFY firstname varchar(255)");
        $this->addSql("ALTER TABLE users MODIFY lastname varchar(255)");
        $this->addSql("ALTER TABLE users MODIFY username varchar(255)");
        $this->addSql("ALTER TABLE users MODIFY password varchar(255)");
        $this->addSql("ALTER TABLE users MODIFY email varchar(255)");
        $this->addSql("ALTER TABLE users DROP INDEX email;");//there is a problem with this drop index, can't drop email error, check later
        $this->addSql("ALTER TABLE users DROP COLUMN id");


    }
}
