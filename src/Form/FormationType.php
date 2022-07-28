<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageName')
            ->add('updatedAt')
            ->add('texte1', CKEditorType::class)
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
            ->add('titre', CKEditorType::class)
            ->add('imageName8')
            ->add('updatedAt8')
            ->add('texte2', CKEditorType::class)
            ->add('titre2', CKEditorType::class)
            ->add('imageName9')
            ->add('updatedAt9')
            ->add('theme', CKEditorType::class)
            ->add('formation', CKEditorType::class)
            ->add('texte3', CKEditorType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
