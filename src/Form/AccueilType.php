<?php
<<<<<<< HEAD

namespace App\Form;

=======

namespace App\Form;

>>>>>>> main
use App\Entity\Accueil;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
<<<<<<< HEAD

class AccueilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageName')
            ->add('UpdatedAt')
            ->add('description')
            ->add('titre')
            ->add('nom')
            ->add('commentaire')
            ->add('texte')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Accueil::class,
        ]);
    }
}
=======

class AccueilType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('imageName')
            ->add('UpdatedAt')
            ->add('description')
            ->add('titre')
            ->add('nom')
            ->add('commentaire')
            ->add('texte')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Accueil::class,
        ]);
    }
}
>>>>>>> main
