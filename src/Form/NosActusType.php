<?php

namespace App\Form;

use App\Entity\NosActus;
use App\Entity\Newletter;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class NosActusType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('titre', TextType::class, ["label"=>"Titre :"])
            ->add('imageName')
            ->add('newletters', EntityType::class,["class"=>Newletter::class, "multiple"=>true, "label"=>"newletter"])
            ->add('description')
            ->add('commentaire')
            ->add('slug')
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
