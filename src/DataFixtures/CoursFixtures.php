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

            $cours = new Cours();
                $cours->setImageName('project-management.png');
                $cours->setNom('GESTION & COMMUNICATION');
                $cours->setTheme('• Accompagnement à la recherche de stage
                                • Coaching Formateur
                                • Cohésion Sociale
                                • Communication Orale
                                • Gestion de Projet
                                • Méthode Agile
                                • Ressources Humaines
                                • Savoir-Être ');
                $manager->persist($cours);

            $cours = new Cours();
                $cours->setImageName('croissance.png');
                $cours->setNom('MARKETING');
                $cours->setTheme('• Développer son Activité
                                • Marketing & Vente
                                • Relation Client');
                $manager->persist($cours);

            $cours = new Cours();
                $cours->setImageName('reseau-mondial.png');
                $cours->setNom('RESEAU');
                $cours->setTheme('• ADSL
                                • CISCO
                                • SIP
                                • VOIP
                                • WIFI');
                $manager->persist($cours);

            $cours = new Cours();
                $cours->setImageName('la-cyber-securite.png');
                $cours->setNom('SECURITE');
                $cours->setTheme('• Antivirus
                                • Cybersécurité
                                • IDS
                                • Réglementation
                                • Sécurité Informatique');
                $manager->persist($cours);
            
            $cours = new Cours();
                $cours->setImageName('programmation.png');
                $cours->setNom('SYSTEME');
                $cours->setTheme('• Linux
                                • MacOs
                                • Windows');
                $manager->persist($cours);

            $cours = new Cours();
                $cours->setImageName('virtualisation.png');
                $cours->setNom('VIRTUALISATION');
                $cours->setTheme('• Hyper-V
                                • Vm-Ware
                                • Linux');
                $manager->persist($cours);

        $manager->flush();
    }
}
