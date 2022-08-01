<?php

namespace App\Controller;

use App\Repository\RncpRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FrontRncpController extends AbstractController
{
    /**
     * @Route("/rncp", name="app_front_rncp")
     */
    public function index(RncpRepository $rncpRepository): Response
    {
        return $this->render('front_rncp/index.html.twig', [
            'rncps' => $rncpRepository->findAll(),
        ]);
    }
}
