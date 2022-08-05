<?php

namespace App\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Gregwar\CaptchaBundle\Type\CaptchaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder

            ->add('nom', TextType::class, 
                array(
                    'label'=>' ',
                    'attr'=>array('placeholder'=>'Nom')))
            ->add('email', EmailType::class,
                array(
                    'label'=>' ',
                    'attr'=>array('placeholder'=>'Email')))
            ->add('sujet', TextType::class,
                array(
                    'label'=>' ',
                    'attr'=>array('placeholder'=>'Sujet')))
            ->add('message', TextareaType::class,
                array(
                    'label'=>' ',
                    'attr'=>array('placeholder'=>'Message')))
            ->add('captcha', CaptchaType::class, ['invalid_message'=>'Incorrect','label'=>' ']);
                

          
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            
        ]);
    }
}
