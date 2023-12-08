<?php

declare(strict_types=1);

namespace MyProject\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20231208165755 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql(
            
            "CREATE TABLE `quick_notes` (
                `id` int(11) NOT NULL AUTO_INCREMENT,
                `content` varchar(2000) NOT NULL,
                `user_id` int(11) DEFAULT NULL,
                `insert_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
                `update_time` timestamp NULL DEFAULT NULL,
                PRIMARY KEY (`id`),
                KEY `user_id` (`user_id`)
              ) ENGINE=InnoDB CHARSET=utf8 COLLATE=utf8_unicode_ci"
    
    
    
    ); 


    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql(
            "drop table quick_notes;"
        );

    }
}
