<?php

namespace App\Form;

use App\Entity\Team;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TeamType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre')
            ->add('imageName')
            ->add('presentation')
            ->add('imageName2')
            ->add('imageName3')
            ->add('photo')
            ->add('nom')
            ->add('titre2')
            ->add('poste')
            ->add('UpdatedAt')
            ->add('titre3')
            ->add('presentation2')
            ->add('imageName4')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Team::class,
        ]);
    }
}
