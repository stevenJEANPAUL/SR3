<?php

namespace App\Form;

use App\Entity\Accueil;
use App\Entity\Carousel;
use App\Entity\Newletter;
use App\Entity\AvisClient;
use App\Entity\Partenaire;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class AccueilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('imageName', TextType::class, ["label"=>"Nom de l'image :", "required"=>false])
            ->add('imageFile', FileType::class, ["label"=>"Image :", "required"=>false])
            ->add('description', CKEditorType::class, ["label"=>"Description :"])
            ->add('titre', TextType::class, ["label"=>"Titre :"])
            ->add('carousels', EntityType::class, [ "class"=> Carousel::class, "multiple"=>true, "label"=>"Images carousel :", "attr"=>["class"=>"select2"]])
            ->add('nom', TextType::class, ["label"=>"TItre :"])
            ->add('avisClients', EntityType::class,["class"=>AvisClient::class, "multiple"=>true, "label"=>"Avis Client :", "attr"=>["class"=>"select2"]])
            ->add('commentaire', TextType::class, ["label"=>"Titre 2 :"])
            ->add('texte', CKEditorType::class, ["label"=>"Texte :", "required"=>false])
            ->add('partenaires', EntityType::class, ["class"=>Partenaire::class, "multiple"=>true, "label"=>"Partenaires :", "attr"=>["class"=>"select2"]])
            ->add('isActive', CheckboxType::class, ["label"=>"Active"])
            ->remove('UpdatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Accueil::class,
        ]);
    }
}
