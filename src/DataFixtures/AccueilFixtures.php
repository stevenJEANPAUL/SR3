<?php

namespace App\DataFixtures;

use DateTimeImmutable;
use App\Entity\Accueil;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use phpDocumentor\Reflection\PseudoTypes\True_;

class AccueilFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $Accueil = new Accueil();
        $Accueil->setImageName('accueilformation.jpg');
        $Accueil->setDescription("Nous proposons des solutions adaptées à vos besoin, à vos envies.
        Nous sommes présents dans de nombreux domaines, nos formations, peuvent vous aider, vous ou vos équipes. 
        Notre esprit familiale favorise l’échange et l’entraide entre nos formateurs");
        $Accueil->setTitre('Nos domaines de formations');
        $Accueil->setNom('Avis de nos clients');
        $Accueil->setCommentaire('Nos Partenaires');
        $Accueil->setTexte('Si ces entreprises nous font confiance alors peut-être que vous aussi ?');
        $Accueil->setIsActive(True);
        $Accueil->setUpdatedAt(new DateTimeImmutable());
        $manager->persist($Accueil);

        $manager->flush();
    }
}
