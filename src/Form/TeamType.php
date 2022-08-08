<?php

namespace App\Form;

use App\Entity\Team;
use App\Entity\Equipe;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, ["label"=>"Titre de la page:"])
            ->add('imageName', FileType::class, ["label"=>"Image 1 :","required"=>false])
            ->add('presentation', TextType::class, ["label"=>"Présentation :"])
            ->add('imageName2',FileType::class, ["label"=>"Image 2 :","required"=>false])
            ->add('imageName3',FileType::class, ["label"=>"Logo :","required"=>false])
            ->add('equipe', EntityType::class, ["class"=>Equipe::class, "label"=>"Equipe :", "multiple"=>true, "required"=>false, "attr"=>["class"=>"select2"]])
            ->add('titre3', TextType::class, ["label"=>"Titre 3:"])
            ->add('presentation2', TextType::class, ["label"=>"Présentation 2 :"])
            ->add('imageName4',FileType::class, ["label"=>"Image 4 :","required"=>false])
            ->add('isActive', CheckboxType::class, ["label"=>"Active"])
            ->remove('UpdatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
        ]);
    }
}