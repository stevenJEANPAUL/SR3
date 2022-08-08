<?php

namespace App\DataFixtures;

use App\Entity\AvisClient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AvisClientFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $avisClient = new AvisClient();
        $avisClient->setImageName('ILCIEISIG.png');
        $avisClient->setNom('William TANG');
        $avisClient->setPoste('Géneral Manager chez ILCI et directeur de IESIG');
        $avisClient->setCommentaire('La collaboration entre www.ilci-education.fr / www.iesig-education.com et SR3 a démarré depuis 2019. Nos formations techniques dans le domaine informatique ont bien évolué ces dernières années avec leur grande participation. Les étudiants s\y retrouvent et sont contents. L/équipe est réactive, à ce niveau c\est un plaisir de travailler avec eux. Tout pleins de nouveaux projets sont à venir dans les années à venir, notamment des formations en DevOps, Administration Système Réseau etc');
        $manager->persist($avisClient);

        $avisClient = new AvisClient();
        $avisClient->setImageName('ILCIEISIG.png');
        $avisClient->setNom('Emilie RECORBET,');
        $avisClient->setPoste('Coordinatrice pédagogique chez ILCI et IESIG');
        $avisClient->setCommentaire('❞Je suis ravie de nos échanges et de notre travail. De plus, les résultats scolaires de nos étudiants en spécialisation "Web applicatif" répondent aux exigences et attentes du milieu professionnel.❞');
        $manager->persist($avisClient);

        $avisClient = new AvisClient();
        $avisClient->setImageName('greta_essonne.png');
        $avisClient->setNom('Madame Hassani et Mme Souabni');
        $avisClient->setPoste('conseillères en formation au Greta de l’Essonne');
        $avisClient->setCommentaire('❞Nous travaillons avec SR3 depuis 4 ans et nous remercions l\ensemble de l\équipe pour son implication et son professionnalisme. Tou.te.s ont notamment su s\adapter aux contraintes de la crise sanitaire. Nos stagiaires sont contents de leurs formateurs alors nous également !❞');
        $manager->persist($avisClient);

        $avisClient = new AvisClient();
        $avisClient->setImageName('nextformation.png');
        $avisClient->setNom('Daramony TEK');
        $avisClient->setPoste('Coordinatrice Pédagogique chez NEXTFORMATION');
        $avisClient->setCommentaire('❞Nextformation travaille avec le Groupe SR3 depuis de nombreuses années maintenant et représente un réel partenaire de confiance. Nous sommes ravis de cette collaboration ; l’équipe est disponible, réactive et très sympathique. Ils proposent d’excellent(e)s formateurs/formatrices qui contribuent grandement à la réussite de nos stagiaires issus de filières techniques (TAI, TSSR, AIS ou encore DWWM). Nous espérons que cette collaboration perdurera encore durant de belles années.❞');
        $manager->persist($avisClient);

        $manager->flush();
    }
}
