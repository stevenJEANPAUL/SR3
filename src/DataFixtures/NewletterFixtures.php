<?php

namespace App\DataFixtures;

use App\Entity\Newletter;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class NewletterFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $newletter = new Newletter();

        $newletter->setImageName('coursformation.jpg');
        $newletter->setTitre("Avis des derniers stagiaires");
        $newletter->setPresentation("Voici l'avis des nos deux derniers stagiaires qui suivaient la formation DWWM et qui avaient pour charge de créer notre site web de A a Z...");
        $newletter->setText("Le stage a été une réelle expérience dans la mesure où je me sentais en milieu professionnel. L’avantage a été aussi d’avoir un collègue de stage et aussi la disponibilité de Madame Pauline STEMPERT, Responsable de formation et relation client qui est notre tuteur de stage et Monsieur Rémy VANBAVINCKHOVE, Responsable administratif qui nous a accompagné sur la conception du design logo et les couleurs du site vitrine. Ils ont été présent et ont su montrer de la patience. C’était tout un challenge de travaillé chacun de son côté sur le site pour enfin réunir les idées pour en faire un seul site vitrine à nos responsables. J’ai travaillé dans un premier temps sous Wordpress et je suis passé en html/CSS/Javascript pour continuer sur le site grâce à mon collègue qui a travaillé sous cette technologie. Nous avons intégré les recommandations de nos responsables tout le long de ces dernières semaines et aujourd’hui nous allons mettre le site en ligne. C’est une excellente nouvelle et pour moi une récompense de le savoir en ligne. Nos responsables de stage nous donnent une formatrice pour nous former sur la mise en ligne d’un site internet. Pour moi cette formation est la meilleure récompense de ce stage. Abdoul, stagiaire Ce stage a été pour moi une bonne épreuve d'autonomie sur beaucoup de points. Il m'a permis de mieux comprendre ce que je faisais pendant ma formation et de m'améliorer aussi. Avoir travaillé tout seul pendant quelques semaines pour pouvoir créer mon propre site web et montrer mes capacitées, m'a vraiment aidé pour prendre confiance en moi. Le fait de ne pas avoir de tuteur de stage qui faisait du web a été un peu compliqué étant novice encore dans ce domaine mais m'a permis de savoir résoudre les problèmes d'une autre manière. Nos tuteurs de stage ont été très patient et nous ont laissés la possibilité de montrer ce dont nous étions capables, ce qui était vraiment intéressant pour nous. Arnaud, stagiaire");
        $manager->persist($newletter);


        $manager->flush();
    }
}
