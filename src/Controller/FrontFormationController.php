<?php

namespace App\Controller;

use App\Repository\FormationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontFormationController extends AbstractController
{
    /**
     * @Route("/formation", name="app_front_formation")
     */
    public function index(FormationRepository $formationRepository): Response
    {
        return $this->render('front_formation/index.html.twig', [
            'formations' => $formationRepository->findAll(),
        ]);
    }
}
