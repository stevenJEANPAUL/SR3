<?php

namespace App\DataFixtures;

use App\Entity\Accueil;
use App\DataFixtures\AccueilFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AccueilFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $Accueil = new Accueil();
        $Accueil->setImageName('');
        //$Accueil->setUpdatedAt('DateTimeImmutable');
        $Accueil->setDescription('lorem papati patata on bosse encore et encore');
        $Accueil->setTitre('ma page d\accueil');
        $Accueil->setNom('top');
        $Accueil->setCommentaire('bonjou bonjour');
        $Accueil->setTexte('bien joué');

        $manager->persist($Accueil);

        $manager->flush();
    }
}
