<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210204124516 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD dutch_bike INT NOT NULL, ADD city_bike INT NOT NULL, ADD e_bike INT NOT NULL, ADD hybrid_bike INT NOT NULL, ADD tandem_bike INT NOT NULL, ADD touring_bike INT NOT NULL, ADD kids_bike INT NOT NULL, ADD kids_cargo INT NOT NULL, ADD kids_child_seat INT NOT NULL, ADD kids_tandem INT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation DROP dutch_bike, DROP city_bike, DROP e_bike, DROP hybrid_bike, DROP tandem_bike, DROP touring_bike, DROP kids_bike, DROP kids_cargo, DROP kids_child_seat, DROP kids_tandem');
    }
}
