<?php

namespace App\DataFixtures;

use App\Entity\Partenaire;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PartenaireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $partenaire = new Partenaire();
        $partenaire->setImageName('CESI.png');
        $partenaire->setNom('CESI');
        $manager->persist($partenaire);

        $partenaire = new Partenaire();
        $partenaire->setImageName('greta_essonne.png');
        $partenaire->setNom('greta_essonne');
        $manager->persist($partenaire);

        $partenaire = new Partenaire();
        $partenaire->setImageName('ILCIEISIG.png');
        $partenaire->setNom('ILCIEISIG');
        $manager->persist($partenaire);

        $partenaire = new Partenaire();
        $partenaire->setImageName('Logo_f2i_formation.png');
        $partenaire->setNom('Logo_f2i_formation');
        $manager->persist($partenaire);

        $partenaire = new Partenaire();
        $partenaire->setImageName('nextformation.png');
        $partenaire->setNom('nextformation');
        $manager->persist($partenaire);

        $partenaire = new Partenaire();
        $partenaire->setImageName('OpenClassroom_LOGO.png');
        $partenaire->setNom('OpenClassroom_LOGO');
        $manager->persist($partenaire);

        $partenaire = new Partenaire();
        $partenaire->setImageName('Sparks.png');
        $partenaire->setNom('Sparks');
        $manager->persist($partenaire);

        $partenaire = new Partenaire();
        $partenaire->setImageName('SQLi-Aston.png');
        $partenaire->setNom('SQLi-Aston');
        $manager->persist($partenaire);

        $partenaire = new Partenaire();
        $partenaire->setImageName('webitech.png');
        $partenaire->setNom('webitech');
        $manager->persist($partenaire);

        $manager->flush();
    }
}
