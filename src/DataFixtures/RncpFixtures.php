<?php

namespace App\DataFixtures;

use App\Entity\Rncp;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class RncpFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $rncp = new Rncp();
            $rncp->setTitre("Notre corps de métier est la formation c'est pourquoi nous intervenons aussi dans toutes ces autres formations");
            $rncp->setFormation("Technicien d'assistance en informatique");
            $rncp->setNiveau("Diplôme délivré par l'état - Titre RNCP niveau IV");
            $rncp->setTitre("Description du titre :");
            $rncp->setImageName("TAI.jpg");
            $manager->persist($rncp);

        $manager->flush();
    }
}
