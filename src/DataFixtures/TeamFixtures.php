<?php

namespace App\DataFixtures;

use App\Entity\Team;
use DateTimeImmutable;
use App\DataFixtures\EquipeFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class TeamFixtures extends Fixture 
{



    public function load(ObjectManager $manager): void
    {
        $team = new Team();
        $team->setTitre('Qui somme nous ?');
        $team->setImageName('artificial-intelligence.jpg');
        $team->setPresentation('test');
        $team->setImageName2('communication.png');
        $team->setImageName3('Logo_SR3_TEAM.jpg');
        $team->setPhoto('equipe.jpg');
        $team->setNom('test');
        $team->setTitre2('formations.jpg');
        $team->setPoste('formateur');
        $team->setIsActive('true');
        $team->setUpdatedAt(new DateTimeImmutable());
        $team->setTitre3('Notre Equipe');
        $team->setPresentation2('test');
        $team->setImageName4('business_info.webp');
        $manager->persist($team);
        $manager->flush();
    }
    
}
