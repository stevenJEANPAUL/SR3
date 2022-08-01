<?php

namespace App\DataFixtures;

use DateTimeImmutable;
use App\Entity\Accueil;
use App\DataFixtures\AccueilFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AccueilFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $Accueil = new Accueil();
        $Accueil->setImageName('accueilformation.jpg');
        $Accueil->setDescription('lorem papati patata on bosse encore et encore');
        $Accueil->setTitre('Nos domaines de formations');
        $Accueil->setNom('top');
        $Accueil->setCommentaire('bonjou bonjour');
        $Accueil->setTexte('bien joué');
        $Accueil->setIsActive(1);
        $Accueil->setUpdatedAt(new DateTimeImmutable());
        $manager->persist($Accueil);

        $manager->flush();
    }
}
