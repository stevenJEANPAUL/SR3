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
            ->add('titre', TextType::class, ["label"=>"Titre de la page :", "required"=>false])
            ->add('formation', TextType::class, ["label"=>"Nom de la formation :", "required"=>false])
            ->add('niveau', TextType::class, ["label"=>"Niveau de la formation :", "required"=>false])
            ->add('descriptif', TextType::class, ["label"=>"Sous-titre :", "required"=>false])
            ->add('texte', CKEditorType::class, ["label"=>"Description de la formation :", "required"=>false])
            ->add('imageFile', FileType::class, ['label'=>'Photo :', "required"=>false])
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
