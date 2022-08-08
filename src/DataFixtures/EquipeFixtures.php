<?php

namespace App\DataFixtures;

use App\Entity\Equipe;
use DateTimeImmutable;
use App\DataFixtures\TeamFixtures;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;


class EquipeFixtures extends Fixture 
{



    public function load(ObjectManager $manager): void
    {

        $equipe = new Equipe();
        $equipe->setImageName('audrey.jpg');
        $equipe->setNom('Audrey');
        $equipe->setPoste('formatrice');
        $equipe->setTitre('WordPress, Woocommerce, HTML, CSS, Photoshop, Gestion du stress et TRE');
        $equipe->setUpdatedAt(new DateTimeImmutable());
        $manager->persist($equipe);
        
        // $product = new Product();
        // $manager->persist($product);
        $manager->flush();
    }
    
}
