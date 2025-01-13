<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250109184744 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE as_consultas_procedimientos ALTER diagnostico_defaults TYPE INT USING diagnostico_defaults::integer');
        $this->addSql('ALTER TABLE as_consultas_procedimientos ADD CONSTRAINT FK_4B9FEF97FA4259DF FOREIGN KEY (diagnostico_defaults) REFERENCES as_cie10 (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('DROP INDEX uniq_1ac2147cdc1c49c8');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE UNIQUE INDEX uniq_1ac2147cdc1c49c8 ON as_cups (codigo_cups)');
        $this->addSql('ALTER TABLE as_consultas_procedimientos DROP CONSTRAINT FK_4B9FEF97FA4259DF');
        $this->addSql('ALTER TABLE as_consultas_procedimientos ALTER diagnostico_defaults TYPE VARCHAR(20)');
    }
}
