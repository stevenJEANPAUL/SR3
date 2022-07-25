<?php

namespace App\Form;

use App\Entity\Rncp;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class RncpType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', TextType::class, ["label"=>"Titre de la page :"])
            ->add('formation', TextType::class, ["label"=>"Nom de la formation :"])
            ->add('niveau', TextType::class, ["label"=>"Niveau de la formation :"])
            ->add('descriptif', TextType::class, ["label"=>"sous-titre :"])
            ->add('texte', CKEditorType::class, ["label"=>"Description de la formation :"])
            ->add('imageFile', FileType::class, ['label'=>'Photo :'])
            ->remove('imageName')
            ->remove('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Rncp::class,
        ]);
    }
}
