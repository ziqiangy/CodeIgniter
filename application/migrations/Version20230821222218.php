<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230821222218 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("
        create table flashcards(
            id int auto_increment primary key,
            term varchar(255) not null,
            definition varchar(2000) not null,
            user_id int,
            insert_time timestamp default current_timestamp,
            update_time timestamp,
            is_active tinyint default 1
        )
        ");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql("drop table flashcards");

    }
}
