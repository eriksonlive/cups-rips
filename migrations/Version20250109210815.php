<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20250109210815 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE as_cups_codigo_cups_seq CASCADE');
        // $this->addSql('CREATE SEQUENCE as_cups_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('ALTER TABLE as_consultas_procedimientos DROP CONSTRAINT FK_4B9FEF97BCDE743A');
        $this->addSql('ALTER TABLE as_consultas_procedimientos ALTER cups TYPE INT USING cups::integer');
        $this->addSql('ALTER TABLE as_cups DROP CONSTRAINT as_cups_pkey');
        $this->addSql('ALTER TABLE as_cups ALTER codigo_cups DROP NOT NULL');
        $this->addSql('ALTER TABLE as_cups ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE as_consultas_procedimientos ADD CONSTRAINT FK_4B9FEF97BCDE743A FOREIGN KEY (cups) REFERENCES as_cups (id) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
        // $this->addSql('DROP INDEX uniq_1ac2147cdc1c49c8');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE as_cups_id_seq CASCADE');
        $this->addSql('CREATE SEQUENCE as_cups_codigo_cups_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('DROP INDEX as_cups_pkey');
        $this->addSql('ALTER TABLE as_cups ALTER codigo_cups SET NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX uniq_1ac2147cdc1c49c8 ON as_cups (codigo_cups)');
        $this->addSql('ALTER TABLE as_cups ADD PRIMARY KEY (codigo_cups)');
        $this->addSql('ALTER TABLE as_consultas_procedimientos DROP CONSTRAINT fk_4b9fef97bcde743a');
        $this->addSql('ALTER TABLE as_consultas_procedimientos ALTER cups TYPE VARCHAR(6)');
        $this->addSql('ALTER TABLE as_consultas_procedimientos ADD CONSTRAINT fk_4b9fef97bcde743a FOREIGN KEY (cups) REFERENCES as_cups (codigo_cups) ON DELETE CASCADE NOT DEFERRABLE INITIALLY IMMEDIATE');
    }
}
