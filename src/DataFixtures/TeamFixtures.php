<?php

namespace App\DataFixtures;

use App\Entity\Team;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TeamFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $team = new Team();
        $team->setTitre('test');
        $team->setImageName('Bureautique.jpg');
        $team->setPresentation('test');
        $team->setImageName2('Bureautique.jpg');
        $team->setImageName3('Bureautique.jpg');
        $team->setPhoto('test.jpg');
        $team->setNom('test');
        $team->setTitre2('Bureautique.jpg');
        $team->setPoste('test');
        // $team->setUpdatedAt();
        $team->setTitre3('test');
        $team->setPresentation2('test');
        $team->setImageName4('Bureautique.jpg');
        $team->setIsActive('true');
        $manager->persist($team);
        $manager->flush();
    }
}
