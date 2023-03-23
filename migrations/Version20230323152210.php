<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230323152210 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13B9D86650F');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13BA0EF1B80');
        $this->addSql('DROP INDEX UNIQ_6117D13B9D86650F ON purchase');
        $this->addSql('DROP INDEX UNIQ_6117D13BA0EF1B80 ON purchase');
        $this->addSql('ALTER TABLE purchase ADD user_id INT NOT NULL, ADD car_id INT NOT NULL, DROP user_id_id, DROP car_id_id');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13BC3C6F69F FOREIGN KEY (car_id) REFERENCES car (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6117D13BA76ED395 ON purchase (user_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6117D13BC3C6F69F ON purchase (car_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13BA76ED395');
        $this->addSql('ALTER TABLE purchase DROP FOREIGN KEY FK_6117D13BC3C6F69F');
        $this->addSql('DROP INDEX UNIQ_6117D13BA76ED395 ON purchase');
        $this->addSql('DROP INDEX UNIQ_6117D13BC3C6F69F ON purchase');
        $this->addSql('ALTER TABLE purchase ADD user_id_id INT NOT NULL, ADD car_id_id INT NOT NULL, DROP user_id, DROP car_id');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13B9D86650F FOREIGN KEY (user_id_id) REFERENCES user (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('ALTER TABLE purchase ADD CONSTRAINT FK_6117D13BA0EF1B80 FOREIGN KEY (car_id_id) REFERENCES car (id) ON UPDATE NO ACTION ON DELETE NO ACTION');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6117D13B9D86650F ON purchase (user_id_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_6117D13BA0EF1B80 ON purchase (car_id_id)');
    }
}
