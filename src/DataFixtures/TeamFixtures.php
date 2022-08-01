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
        $team->setTitre('');
        $team->setImageName('');
        $team->setPresentation('');
        $team->setImageName2('');
        $team->setImageName3('');
        $team->setPhoto('');
        $team->setNom('');
        $team->setTitre2('');
        $team->setPoste('');
        //$team->setUpdatedAt('');
        $team->setTitre3('');
        $team->setPresentation2('');
        $team->setImageName4('');
        $manager->persist($team);
        $manager->flush();
    }
}
