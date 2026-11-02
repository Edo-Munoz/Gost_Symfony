<?php

declare(strict_types=1);

namespace App\Migrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20261102213634 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE playlist (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, user_id INT NOT NULL, INDEX IDX_D782112DA76ED395 (user_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE playlist_track (playlist_id INT NOT NULL, track_id INT NOT NULL, INDEX IDX_75FFE1E56BBD148 (playlist_id), INDEX IDX_75FFE1E55ED23C43 (track_id), PRIMARY KEY (playlist_id, track_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE track (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, game_name VARCHAR(255) NOT NULL, composer VARCHAR(255) DEFAULT NULL, youtube_url VARCHAR(255) NOT NULL, status VARCHAR(255) DEFAULT \'pending\' NOT NULL, created_at DATETIME NOT NULL, added_by_id INT NOT NULL, INDEX IDX_D6E3F8A655B127A4 (added_by_id), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, is_banned TINYINT DEFAULT 0 NOT NULL, created_at DATETIME NOT NULL, UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL (email), PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE user_liked_tracks (user_id INT NOT NULL, track_id INT NOT NULL, INDEX IDX_D6B8B4A7A76ED395 (user_id), INDEX IDX_D6B8B4A75ED23C43 (track_id), PRIMARY KEY (user_id, track_id)) DEFAULT CHARACTER SET utf8mb4');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0E3BD61CE16BA31DBBF396750 (queue_name, available_at, delivered_at, id), PRIMARY KEY (id))');
        $this->addSql('ALTER TABLE playlist ADD CONSTRAINT FK_D782112DA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE playlist_track ADD CONSTRAINT FK_75FFE1E56BBD148 FOREIGN KEY (playlist_id) REFERENCES playlist (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE playlist_track ADD CONSTRAINT FK_75FFE1E55ED23C43 FOREIGN KEY (track_id) REFERENCES track (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE track ADD CONSTRAINT FK_D6E3F8A655B127A4 FOREIGN KEY (added_by_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user_liked_tracks ADD CONSTRAINT FK_D6B8B4A7A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_liked_tracks ADD CONSTRAINT FK_D6B8B4A75ED23C43 FOREIGN KEY (track_id) REFERENCES track (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE playlist DROP FOREIGN KEY FK_D782112DA76ED395');
        $this->addSql('ALTER TABLE playlist_track DROP FOREIGN KEY FK_75FFE1E56BBD148');
        $this->addSql('ALTER TABLE playlist_track DROP FOREIGN KEY FK_75FFE1E55ED23C43');
        $this->addSql('ALTER TABLE track DROP FOREIGN KEY FK_D6E3F8A655B127A4');
        $this->addSql('ALTER TABLE user_liked_tracks DROP FOREIGN KEY FK_D6B8B4A7A76ED395');
        $this->addSql('ALTER TABLE user_liked_tracks DROP FOREIGN KEY FK_D6B8B4A75ED23C43');
        $this->addSql('DROP TABLE playlist');
        $this->addSql('DROP TABLE playlist_track');
        $this->addSql('DROP TABLE track');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_liked_tracks');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
