<?php

namespace App\Form;

use App\Entity\Team;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, ["label"=>"Titre :"])
            ->add('imageName')
            ->add('presentation')
            ->add('imageName2')
            ->add('imageName3')
            ->add('equipe')
            ->remove('photo')
            ->remove('nom')
            ->remove('titre2')
            ->remove('poste')
            ->remove('UpdatedAt')
            ->add('titre3', TextType::class, ["label"=>"Titre :"])
            ->add('presentation2')
            ->add('imageName4')
            ->add('isActive', CheckboxType::class, ["label"=>"Active"])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
        ]);
    }
}