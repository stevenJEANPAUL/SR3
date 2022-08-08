<?php

namespace App\Form;

use App\Entity\Accueil;
use App\Entity\Partenaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->remove('imageName')
            ->remove('updatedAt')
            ->add('imageFile', FileType::class, ["label"=>"Image :", "required"=>true])
            ->add('nom', TextType::class, ["label"=>"Nom :"])
            ->add('accueils', EntityType::class,["class"=>Accueil::class, "label"=>"Accueils", "multiple"=>true, "required"=>false, "attr"=>["class"=>"select2"]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Partenaire::class,
        ]);
    }
}
