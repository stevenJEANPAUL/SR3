<?php

namespace App\DataFixtures;

use App\Entity\Formation;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class FormationFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $formation = new Formation();
            $formation->setImageName('formation.jpg');
            $formation->setTexte1("Nos formations, Une équipe de formateurs adaptée à vos besoins dans le domaine de la formation, de l’information et de la bureautique. Informatique windows, Linux, technologies N-tiers mais également bureautique, tableurs, ressources humaines et autres compétences sociétales, notre équipe dispose de compétences variées dans bon nombre de domaines.  ");
            $formation->setImageName2('iconForm.png');
            $formation->setImageName3('form.png');
            $formation->setImageName4('windows.png');
            $formation->setImageName5('apple.png');
            $formation->setImageName6('icons8-linux-96.png');
            $formation->setImageName7('icons8-wi-fi-96.png');
            $formation->setTitre("Nos formateurs enseignent, partagent leurs connaissances, leurs expertises afin que vous deveniez les experts de demain.");
            $formation->setImageName8('formationsequipe.jpg');
            $formation->setTexte2("Nos formateurs, spécialisés dans le numérique et l’informatique, sont parés à transmettre leur savoir-faire pour accroitre vos performances et atteindre vos objectifs, quelque soit le système utilisé ou la ressource ciblée.");
            $formation->setTitre2("DECOUVREZ NOS COMPETENCES");
            $formation->setImageName9('bureau.png');
            $formation->setTheme('Bureautique');
            $formation->setFormation('Excel, Vba, Outlook, Powerpoint, Word, logiciel libre');
            $formation->setTexte3("Nous sommes aussi présents dans les formations
            TAI, TRI, CDA et DWWM. Vous êtes passionné par les métiers techniques et les technologies ayant trait au monde de l’informatique et de l’électronique?
            Ces formations sont faites pour vous ! ");
        $manager->persist($formation);

        $manager->flush();
    }
}
