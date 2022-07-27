<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NosActusController extends AbstractController
{
    /**
     * @Route("/nos/actus", name="app_nos_actus")
     */
    public function index(): Response
    {
        return $this->render('nos_actus/index.html.twig', [
            'controller_name' => 'NosActusController',
        ]);
    }
}
