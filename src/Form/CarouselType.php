<?php

namespace App\Form;

use App\Entity\Accueil;
use App\Entity\Carousel;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CarouselType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageName')
            ->add('updatedAt')
            ->add('imageFile', FileType::class, ["label"=>"Image :", "required"=>true])
            ->add('texte', CKEditorType::class, ["label"=>"Texte :", "required"=>false])
            ->add('accueils', EntityType::class,["class"=>Accueil::class, "label"=>"Accueils", "multiple"=>true, "required"=>false])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Carousel::class,
        ]);
    }
}
