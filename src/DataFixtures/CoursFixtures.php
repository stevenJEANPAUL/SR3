<?php

namespace App\DataFixtures;

use App\Entity\Cours;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CoursFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $cours = new Cours();
        $cours->setImageName('bureau.png');
        $cours->setNom('BUREAUTIQUE');
        $cours->setTheme('• Excel
                        • Excel VBA
                        • Logiciel Libre
                        • OutLook
                        • PowerPoint
                        • Word ');
        $manager->persist($cours);

        $cours = new Cours();
        $cours->setImageName('programmation.png');
        $cours->setNom('DEVELOPPEMENT WEB');
        $cours->setTheme('• HTML, CSS
                        • JavaScript
                        • Java
                        • Node.Js
                        • PHP
                        • Spring
                        • Wordpress
                        • Woo Commerce ');
        $manager->persist($cours);

        $manager->flush();
    }
}
