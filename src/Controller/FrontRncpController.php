<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontRncpController extends AbstractController
{
    /**
     * @Route("/front/rncp", name="app_front_rncp")
     */
    public function index(): Response
    {
        return $this->render('front_rncp/index.html.twig', [
            'controller_name' => 'FrontRncpController',
        ]);
    }
}
