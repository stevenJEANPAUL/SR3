<?php

namespace App\Form;

use App\Entity\NosActus;
use App\Entity\Newletter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class NosActusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('titre', HiddenType::class, ["label"=>"Titre :", "required"=>false])
            ->add('imageFile', FileType::class, ["label"=>"Image :", "required"=>false])
            ->remove('imageName')
            ->add('newletters', EntityType::class,["class"=>Newletter::class, "multiple"=>true, "label"=>"newletter", "attr"=>["class"=>"select2"]])
            ->add('description', HiddenType::class)
            ->add('commentaire', HiddenType::class)
            ->add('isActive', CheckboxType::class, ["label"=>"Active"])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => NosActus::class,
        ]);
    }
}
