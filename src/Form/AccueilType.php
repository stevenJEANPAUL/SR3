<?php

namespace App\Form;

use App\Entity\Accueil;
use App\Entity\AvisClient;
use App\Entity\Carousel;
use App\Entity\Newletter;
use App\Entity\Partenaire;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class AccueilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageName')
            ->remove('UpdatedAt')
            ->add('description')
            ->add('titre', TextType::class, ["label"=>"Titre :"])
            ->add('carousels', EntityType::class, [ "class"=> Carousel::class, "multiple"=>true, "label"=>"carousel"])
            ->add('nom', TextType::class, ["label"=>"Nom :"])
            ->add('avisClients', EntityType::class,["class"=>AvisClient::class, "multiple"=>true, "label"=>"avisClient"])
            ->add('commentaire')
            ->add('texte', CKEditorType::class, ["label"=>"Texte :", "required"=>false])
            ->add('partenaires', EntityType::class, ["class"=>Partenaire::class, "multiple"=>true, "label"=>"partenaire"])
            ->add('isActive', CheckboxType::class, ["label"=>"Active"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Accueil::class,
        ]);
    }
}
