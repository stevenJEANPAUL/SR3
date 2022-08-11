<?php

namespace App\Form;

use App\Entity\Team;
use App\Entity\Equipe;
use App\Entity\Team;
use Symfony\Component\Form\AbstractType;
use FOS\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class EquipeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageFile', FileType::class, ["label"=>"Photo du formateur(trice) :","required"=>false])
            ->add('nom', TextType::class, ["label"=>"Nom du formateur(trice) :", "required"=>false])
            ->add('poste', TextType::class, ["label"=>"Poste :", "required"=>false])
            ->add('titre',  CKEditorType::class, ["label"=> 'Formation dispensée :', "required"=>false])
            ->add('teams', EntityType::class,["class"=>Team::class, "label"=>"Teams", "multiple"=>true, "required"=>false, "attr"=>["class"=>"select2"]])
            ->remove('ImageName')
            ->remove('updatedAt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Equipe::class,
        ]);
    }
}
