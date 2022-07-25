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
            $rncp->setDescriptif("Description du titre :");
            $rncp->setTexte("Il s'agit de se qualifier pour occuper un poste de technicien : maintenance informatique déploiement assistance clientèle SAV help desk assistance utilisateurs support");
            $rncp->setImageName("TAI.jpg");
            $manager->persist($rncp);

        $rncp = new Rncp();            
            $rncp->setFormation("Technicien supérieur en système et réseau");
            $rncp->setNiveau("Diplôme délivré par l'état - Titre RNCP niveau III");
            $rncp->setDescriptif("Description du titre :");
            $rncp->setTexte("Le (la) technicien(ne) supérieur(e) en système et réseau assurera la mise en service et le maintien en condition opérationnelle de l’infrastructure informatique, interviendra sur les systèmes et les réseaux, les éléments matériels et logiciels de l’entreprise.
            A l’issue de la formation, le titulaire du titre sera capable :
            D’assurer la mise en exploitation, le suivi, la sécurisation et l’optimisation du système informatique dans une PME/PMI, dans une unité décentralisée d’une grande entreprise ou d’une administration.
                De faire évoluer les ressources nécessaires à la production attendue du système d’information de l’entreprise (infrastructures réseaux, serveurs et systèmes d’exploitation, bases de données, applications transverses et applications métier).
            ");
            $rncp->setImageName("TSSR.jpg");
            $manager->persist($rncp);

        $rncp = new Rncp();            
            $rncp->setFormation("Développeur(euse) web et web mobile");
            $rncp->setNiveau("Diplôme délivré par l'état - Titre RNCP niveau IV");
            $rncp->setDescriptif("Description du titre :");
            $rncp->setTexte("La formation Développeur(se) Web et applications Mobile s’adresse aux non développeurs et développeurs débutants souhaitant orienter leur carrière vers les métiers de l’Internet.
            Elle propose d’acquérir des bases solides pour bien appréhender le début d’un parcours professionnel dans le domaine de l’intégration et du développement d’applications web et mobile. Formation AIS ");
            $rncp->setImageName("DWWM.jpg");
            $manager->persist($rncp);

        $manager->flush();
    }
}
