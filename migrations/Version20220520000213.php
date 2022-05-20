<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220520000213 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE date_payslip (id INT AUTO_INCREMENT NOT NULL, salary_id INT NOT NULL, date_from DATE NOT NULL, year_from VARCHAR(255) DEFAULT NULL, month_from VARCHAR(255) DEFAULT NULL, day_from VARCHAR(255) DEFAULT NULL, date_to DATE NOT NULL, year_to VARCHAR(255) DEFAULT NULL, month_to VARCHAR(255) DEFAULT NULL, day_to VARCHAR(255) DEFAULT NULL, INDEX IDX_A3F4CA0DB0FDF16E (salary_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE departement (id INT AUTO_INCREMENT NOT NULL, salary_id INT NOT NULL, name VARCHAR(255) NOT NULL, INDEX IDX_C1765B63B0FDF16E (salary_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE employee (id INT AUTO_INCREMENT NOT NULL, salary_id INT NOT NULL, name VARCHAR(255) DEFAULT NULL, gender VARCHAR(255) DEFAULT NULL, job_title VARCHAR(255) DEFAULT NULL, work_phone VARCHAR(255) DEFAULT NULL, mobile_phone VARCHAR(255) DEFAULT NULL, INDEX IDX_5D9F75A1B0FDF16E (salary_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE salary (id INT AUTO_INCREMENT NOT NULL, slip_id INT NOT NULL, amount DOUBLE PRECISION DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE date_payslip ADD CONSTRAINT FK_A3F4CA0DB0FDF16E FOREIGN KEY (salary_id) REFERENCES salary (id)');
        $this->addSql('ALTER TABLE departement ADD CONSTRAINT FK_C1765B63B0FDF16E FOREIGN KEY (salary_id) REFERENCES salary (id)');
        $this->addSql('ALTER TABLE employee ADD CONSTRAINT FK_5D9F75A1B0FDF16E FOREIGN KEY (salary_id) REFERENCES salary (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE date_payslip DROP FOREIGN KEY FK_A3F4CA0DB0FDF16E');
        $this->addSql('ALTER TABLE departement DROP FOREIGN KEY FK_C1765B63B0FDF16E');
        $this->addSql('ALTER TABLE employee DROP FOREIGN KEY FK_5D9F75A1B0FDF16E');
        $this->addSql('DROP TABLE date_payslip');
        $this->addSql('DROP TABLE departement');
        $this->addSql('DROP TABLE employee');
        $this->addSql('DROP TABLE salary');
        $this->addSql('DROP TABLE user');
    }
}
