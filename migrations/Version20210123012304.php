<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210123012304 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE academic_training (id INT AUTO_INCREMENT NOT NULL, degree VARCHAR(10000) NOT NULL, start_date DATE NOT NULL, final_date DATE NOT NULL, study_place VARCHAR(10000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experience (id INT AUTO_INCREMENT NOT NULL, work_experience VARCHAR(10000) NOT NULL, start_date DATE NOT NULL, final_date DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE personal_information (id INT AUTO_INCREMENT NOT NULL, first_name VARCHAR(1000) NOT NULL, second_name VARCHAR(1000) DEFAULT NULL, surname VARCHAR(1000) NOT NULL, second_surname VARCHAR(1000) DEFAULT NULL, birh_place VARCHAR(1000) NOT NULL, birh_date VARCHAR(1000) NOT NULL, identification_card INT NOT NULL, direction1 VARCHAR(1000) NOT NULL, direction2 VARCHAR(1000) DEFAULT NULL, telephone1 INT NOT NULL, telephone2 INT DEFAULT NULL, gender VARCHAR(255) NOT NULL, city_residence VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE profile (id INT AUTO_INCREMENT NOT NULL, professional_profile VARCHAR(10000) NOT NULL, skill VARCHAR(1000) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(1000) NOT NULL, role VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE academic_training');
        $this->addSql('DROP TABLE experience');
        $this->addSql('DROP TABLE personal_information');
        $this->addSql('DROP TABLE profile');
        $this->addSql('DROP TABLE users');
    }
}
