<?php

namespace App\DataFixtures;

use App\Entity\Carousel;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CArouselFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $carousel = new Carousel();
        $carousel->setImageName('Bureautique.jpg');
        $carousel->setTexte('une formation complète du pack office la maitrise de vos fichiers n’est plus une crainte ');
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setImageName('gestion.jpg');
        $carousel->setTexte('La gestion et la communication. Des experts dans le milieux seront votre formateur');
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setImageName('Marketing.jpg');
        $carousel->setTexte('Developper votre activer, la relation clientelle et vente Avec la formation Marketing');
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setImageName('security.jpg');
        $carousel->setTexte('Après cette formation!! Vous saurez comment bien choisir, comment bien protéger vos donnés');
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setImageName('systeme.jpg');
        $carousel->setTexte('MAC-OS, LINUX, WINDOWS A chaque systeme son expert');
        $manager->persist($carousel);

        $carousel = new Carousel();
        $carousel->setImageName('web.png');
        $carousel->setTexte('Developpeur Web ? Vous aurez la possibilté de vous specialiser dans un ou plusieur module');
        $manager->persist($carousel);

        $manager->flush();
    }
}
