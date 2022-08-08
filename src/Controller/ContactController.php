<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Mailer\MailerInterface;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="app_contact")
     */
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $data = $form->getData();

            $couriel = $data['email'];
            $message = $data['message'];
            $sujet = $data['sujet'];  

            $email = (new Email())
                ->from($couriel)
                ->to('admin@admin.com')
                ->subject($sujet)           
                ->text($message);

        $mailer->send($email);
        
        return $this->redirectToRoute('app_accueil');
        
    }

        return $this->renderForm('contact/index.html.twig', [           
            'formulaire'=>$form
        ]);
    }
}
