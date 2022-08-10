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
        $newletter->setTitre("Résultats TRTE avec notre partenaire du GRETA");
        $newletter->setPresentation("Voici les résultats du TRTE avec notre partenaire du GRETA");
        $newletter->setText("Depuis trois ans maintenant, nous travaillons avec le GRETA d’ESSONNE sur le diplôme du TRTE. Les examens ont eu lieu du 22 au 25 mars 2022. La session TRTE s’est très bien passée. 10 stagiaires ont validés le titre, 1 dernier élève a validé un CCP sur 2. Cependant un apprenant, n’est pas passé loin d’avoir seulement 1 CCP car il n’a pas su convaincre les jurys et son stage ne s’est pas bien déroulé. Un étudiant n’a pas pu passer les oraux pour raison de santé. Groupe SR3 adresse une mention spéciale pour le « préparateur » du plateau et référent de cette classe, Geoffroy. Un grand merci à tous nos formateurs pour avoir mené ce groupe à la réussite. On tient également à remercier le GRETA pour la confiance qu’il nous accorde. On espère faire aussi bien avec les TAI en juin comme dirait Mme VARIN.
        Groupe SR3");
        $manager->persist($newletter);

        $newletter = new Newletter();

        $newletter->setImageName('formations.jpg');
        $newletter->setTitre("Avis des derniers stagiaires");
        $newletter->setPresentation("Voici l'avis des nos deux derniers stagiaires qui suivaient la formation DWWM et qui avaient pour charge de créer notre site web de A a Z...");
        $newletter->setText("Le stage a été une réelle expérience dans la mesure où je me sentais en milieu professionnel. L’avantage a été aussi d’avoir un collègue de stage et aussi la disponibilité de Madame Pauline STEMPERT, Responsable de formation et relation client qui est notre tuteur de stage et Monsieur Rémy VANBAVINCKHOVE, Responsable administratif qui nous a accompagné sur la conception du design logo et les couleurs du site vitrine. Ils ont été présent et ont su montrer de la patience. C’était tout un challenge de travaillé chacun de son côté sur le site pour enfin réunir les idées pour en faire un seul site vitrine à nos responsables. J’ai travaillé dans un premier temps sous Wordpress et je suis passé en html/CSS/Javascript pour continuer sur le site grâce à mon collègue qui a travaillé sous cette technologie. Nous avons intégré les recommandations de nos responsables tout le long de ces dernières semaines et aujourd’hui nous allons mettre le site en ligne. C’est une excellente nouvelle et pour moi une récompense de le savoir en ligne. Nos responsables de stage nous donnent une formatrice pour nous former sur la mise en ligne d’un site internet. Pour moi cette formation est la meilleure récompense de ce stage. Abdoul, stagiaire Ce stage a été pour moi une bonne épreuve d'autonomie sur beaucoup de points. Il m'a permis de mieux comprendre ce que je faisais pendant ma formation et de m'améliorer aussi. Avoir travaillé tout seul pendant quelques semaines pour pouvoir créer mon propre site web et montrer mes capacitées, m'a vraiment aidé pour prendre confiance en moi. Le fait de ne pas avoir de tuteur de stage qui faisait du web a été un peu compliqué étant novice encore dans ce domaine mais m'a permis de savoir résoudre les problèmes d'une autre manière. Nos tuteurs de stage ont été très patient et nous ont laissés la possibilité de montrer ce dont nous étions capables, ce qui était vraiment intéressant pour nous. Arnaud, stagiaire");
        $manager->persist($newletter);

        $newletter = new Newletter();

        $newletter->setImageName('coursnumerique.jpg');
        $newletter->setTitre("Portrait de Jeremy Gagnaire, Référent TAI et Formateur");
        $newletter->setPresentation("Jérémy Gagnaire va répondre à plusieurs question sur son métier et son ressenti...");
        $newletter->setText("Comment êtes-vous devenu formateur ?
        J’étais manager pour un prestataire de SFR. Mon entreprise est venue me chercher pour savoir si je voulais former 450 techniciens SFR de niveau 2 pour qu’ils puissent traiter les demandes des clients ADSL en plus des problèmes sur les mobiles. J’ai accepté, formé 450 apprenants qui n’avaient aucune envie d’être là et je n’ai plus quitté le monde de la formation.
        
        Depuis combien de temps ?
        Ce « vernis ADSL » (nom de la formation) a débuté le 6 mai 2012. Je m’en rappel comme si c’était hier
        
        Qu'est-ce qui vous plait dans ce métier ?
        J’ai la chance d’avoir travaillé pour et avec de grosse entreprise internationale. Cela m’a permis de voyager, de suivre des formations de formateurs très poussées et de développer mes compétences. Aujourd’hui en tant qu’indépendant, j’aime pouvoir mettre tout cela au service des apprenants. Peu importe leurs niveaux, leurs âges, d’où ils viennent et ou ils vont, les accompagner vers la réussite est un vrai plaisir. Mais ce qui me plait le plus dans ce métier c’est la diversité des missions qui me sont confiés. Que ce soit de l’animation, du consulting, de la création ou de la mise en place d’action de formation, tout me passionne. Si en plus cela touche la montée en compétence d’autres formateurs, c’est un vrai bonheur !
        
        Depuis combien de temps ?
        Pour Next Formation, je suis chargé de l’accompagnement pédagogique des apprenants. Cela comprend des entretiens individuels tout au long de leur formation pour les motiver, les aiguiller dans leur apprentissage et souvent dans ce qu’ils vont faire après la formation. Je construits aussi leurs EPCF (Evaluation Passé en Cours de Formation) nécessaire pour le passage de leur titre. En bref, je fais tout ce que je peux pour les emmener vers la réussite.
        
        En quoi consiste votre rôle de réfèrent chez NEXT FORMATION ?
        Ce « vernis ADSL » (nom de la formation) a débuté le 6 mai 2012. Je m’en rappel comme si c’était hier
        
        Quel est votre projet dans les années à venir ?
        Vaste question. Développer mes partenariats avec mes clients actuels pour pérenniser mon activité et pouvoir travailler sur mon prochain projet : Ouvrir une école entièrement gratuite qui permettrait aux personnes très éloignés de l’emploi et des structures classiques de trouver des solutions de réinsertion en respectant leurs choix et leurs rythmes. Développer mes formations de formateurs pour répondre aux besoins actuels (Développement de la formation à distance, changement de profil des apprenants, …)");
        $manager->persist($newletter);

        $manager->flush();
    }
}
