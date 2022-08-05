<?php

namespace App\Controller;

use App\Repository\NewletterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NewletterController extends AbstractController
{
    /**
     * @Route("/newletter", name="app_newletter")
     */
    public function index(): Response
    {
        return $this->render('newletter/index.html.twig', [
            'controller_name' => 'NewletterController',
        ]);
    }

        /**
     * @Route("/newletter/{id}", name="app_newletter_show")
     */
    public function show(NewletterRepository $newletterRepository, int $id): Response
    {
        return $this->render('newletter/show.html.twig', [
            'newletter' => $newletterRepository->find($id),
        ]);
    }
}
