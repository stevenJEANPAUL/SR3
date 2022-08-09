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
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class FormationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            
            ->add('imageFile', FileType::class, ["label"=> "Photo de l'entête :", "required"=>false])
            ->add('texte1', CKEditorType::class, ["label"=> 'Titre de la page :', "required"=>false])
            ->add('imageFile2', FileType::class, ["label"=> 'Logo 1 :', "required"=>false])
            ->add('imageFile3', FileType::class, ["label"=> 'Logo 2 :', "required"=>false])
            ->add('imageFile4', FileType::class, ["label"=> 'Logo 3 :', "required"=>false])
            ->add('imageFile5', FileType::class, ["label"=> 'Logo 4 :', "required"=>false])
            ->add('imageFile6', FileType::class, ["label"=> 'Logo 5 :', "required"=>false])
            ->add('imageFile7', FileType::class, ["label"=> 'Logo 6 :', "required"=>false])
            ->add('titre', CKEditorType::class, ["label"=> 'Texte de la page :', "required"=>false])
            ->add('imageFile8', FileType::class, ["label"=> 'Photo milieu de page :', "required"=>false])
            ->add('texte2', CKEditorType::class, ["label"=> 'Texte de la photo :', "required"=>false])
            ->add('titre2', CKEditorType::class, ["label"=> 'Titre 2 :', "required"=>false])
            ->add('texte3', CKEditorType::class, ["label"=> 'Texte pied de page :', "required"=>false])
            ->add('cours', EntityType::class, ["class"=>Cours::class, "label"=>"Cours :", "multiple"=>true, "attr"=>["class"=>"select2"]])
            ->add('isActive', CheckboxType::class, ["label"=>"Active"])
            ->remove('imageName')
            ->remove('updatedAt')
            ->remove('imageName2')
            ->remove('updatedAt2')
            ->remove('imageName3')
            ->remove('updatedAt3')
            ->remove('imageName4')
            ->remove('updatedAt4')
            ->remove('imageName5')
            ->remove('updatedAt5')
            ->remove('imageName6')
            ->remove('updatedAt6')
            ->remove('imageName7')
            ->remove('updatedAt7')
            ->remove('imageName8')
            ->remove('updatedAt8')
            ->remove('imageName9')
            ->remove('imageName9')
            ->remove('updatedAt9')
            ->remove('theme')
            ->remove('formation')
            
        
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Formation::class,
        ]);
    }
}
