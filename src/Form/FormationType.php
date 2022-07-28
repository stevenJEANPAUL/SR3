<?php

namespace App\Form;

use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageName')
            ->remove('updatedAt')
            ->add('texte1', CKEditorType::class)
            ->add('imageName2')
            ->remove('updatedAt2')
            ->add('imageName3')
            ->remove('updatedAt3')
            ->add('imageName4')
            ->remove('updatedAt4')
            ->add('imageName5')
            ->remove('updatedAt5')
            ->add('imageName6')
            ->remove('updatedAt6')
            ->add('imageName7')
            ->remove('updatedAt7')
            ->add('titre', CKEditorType::class)
            ->add('imageName8')
            ->remove('updatedAt8')
            ->add('texte2', CKEditorType::class)
            ->add('titre2', CKEditorType::class)
            ->add('imageName9')
            ->add('imageName9', FileType::class)
            ->remove('updatedAt9')
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
