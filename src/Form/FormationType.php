<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageName')
            ->add('updatedAt')
            ->add('texte1')
            ->add('imageName2')
            ->add('updatedAt2')
            ->add('imageName3')
            ->add('updatedAt3')
            ->add('imageName4')
            ->add('updatedAt4')
            ->add('imageName5')
            ->add('updatedAt5')
            ->add('imageName6')
            ->add('updatedAt6')
            ->add('imageName7')
            ->add('updatedAt7')
            ->add('titre')
            ->add('imageName8')
            ->add('updatedAt8')
            ->add('texte2')
            ->add('titre2')
            ->add('imageName9')
            ->add('updatedAt9')
            ->add('theme')
            ->add('formation')
            ->add('texte3')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
