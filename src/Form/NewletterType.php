<?php

namespace App\Form;

use App\Entity\Newletter;
use App\Entity\NosActus;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class NewletterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageName')
            ->add('updatedAt')
            ->add('imageFile', FileType::class, ["label"=>"Image :", "required"=>true])
            ->add('titre', TextType::class, ["label"=>"Titre :"])
            ->add('presentation', TextType::class, ["label"=>"Présentation"])
            ->add('text', CKEditorType::class, ["label"=>"Texte :", "required"=>false])
            ->add('nosActuses', EntityType::class, ["class"=>NosActus::class, "label"=>"nosActuses", "multiple"=>true, "required"=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Newletter::class,
        ]);
    }
}
