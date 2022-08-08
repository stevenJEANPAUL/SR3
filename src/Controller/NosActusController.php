<?php

namespace App\Controller;

use App\Repository\NewletterRepository;
use App\Repository\NosActusRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class NosActusController extends AbstractController
{
    /**
     * @Route("/nos/actus", name="app_nos_actus")
     */
    public function index(NosActusRepository $nosActusRepository): Response
    {
        $nosActus = $nosActusRepository->findOneBy(['isActive' => true]);
        return $this->render('nos_actus/index.html.twig', [
            'nos_actuses' => $nosActus,
        ]);
    }

}
