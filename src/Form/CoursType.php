<?php

namespace App\Form;

use App\Entity\Cours;
use App\Entity\Formation;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class CoursType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageFile', FileType::class, ["label"=>"Icône de la formation :","required"=>false])
            ->add('nom', TextType::class, ["label"=>"Thème de la formation :", "required"=>false])
            ->add('theme', CKEditorType::class, ["label"=>"Cours de la formation :", "required"=>false])
            ->add('formations', EntityType::class, ["class"=>Formation::class, "label"=>"Page :", "multiple"=>true])
            ->remove('ImageName')
            ->remove('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Cours::class,
        ]);
    }
}
