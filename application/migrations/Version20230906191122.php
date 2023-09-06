<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230906191122 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql("ALTER TABLE flashcards ENGINE=InnoDB;");
        $this->addSql("ALTER TABLE flashcard_categories ENGINE=InnoDB;");
        $this->addSql("ALTER TABLE Users ENGINE=InnoDB;");
        $this->addSql("ALTER TABLE `flashcards` ADD FOREIGN KEY (`category_id`) REFERENCES `flashcard_categories`(`id`) ON DELETE SET NULL ON UPDATE RESTRICT;");
        $this->addSql("ALTER TABLE `flashcards` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL;");
        $this->addSql("ALTER TABLE `flashcard_categories` ADD FOREIGN KEY (`user_id`) REFERENCES `users`(`id`) ON DELETE SET NULL;");

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}
