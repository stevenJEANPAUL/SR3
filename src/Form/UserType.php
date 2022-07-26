<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class User1Type extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        ->add('nom', TextType::class, [
            'label' => 'Nom',
            'required' => true,
        ])
        ->add('prenom', TextType::class, [
            'label' => 'Prénom',
            'required' => true,
        ])
        ->add('email', EmailType::class, [
            'label' => 'Email',
            'required' => true,
        ])
        ->add('role', ChoiceType::class, [
            'label' => 'Rôle',
            'choices' => [
                'Utilisateur' => 'USER',
                'Administrateur' => 'ADMIN',
            ],
            'required' => true,
            'mapped' => false,
        ])
        ->add('plainPassword', PasswordType::class, [
            'label' => 'Mot de passe',
            'required' => false,
            'mapped' => false,
        ])
            ->add('isVerified')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
