<?php

namespace App\Form;

use App\Entity\Accueil;
use App\Entity\Carousel;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CarouselType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->remove('imageName')
            ->remove('updatedAt')
            ->add('imageFile', FileType::class, ["label"=>"Image :", "required"=>false])
            ->add('texte', CKEditorType::class, ["label"=>"Texte :", "required"=>false])
            ->remove('accueils', EntityType::class,["class"=>Accueil::class, "label"=>"Accueils", "multiple"=>true, "required"=>false, "attr"=>["class"=>"select2"]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Carousel::class,
        ]);
    }
}
