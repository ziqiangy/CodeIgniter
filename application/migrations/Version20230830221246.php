<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230830221246 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql("
        CREATE TABLE flashcard_categories(
            id int auto_increment primary key,
            user_id int,
            name varchar(255) not null
            )

        ");
        $this->addSql("
            alter table flashcards add column category_id int;
        ");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql("drop table flashcard_categories");
        $this->addSql("alter table flashcards drop column category_id");
    }
}
