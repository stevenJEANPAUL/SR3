<?php

namespace App\Controller;

use App\Repository\CoursRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoursController extends AbstractController
{
    /**
     * @Route("/cours", name="app_cours")
     */
    public function index(CoursRepository $coursRepository): Response
    {
        return $this->render('cours/index.html.twig', [
            'cours' => $coursRepository->findAll(),
        ]);
    }

    /**
     * @Route("/cours/{id}", name="app_cours_show")
     */
    public function show(CoursRepository $coursRepository, int $id): Response
    {
        return $this->render('cours/show.html.twig', [
            'cours' => $coursRepository->find($id),
        ]);
    }
}
