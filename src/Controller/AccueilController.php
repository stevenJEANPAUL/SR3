<?php

namespace App\Controller;

use App\Controller\AccueilRepository;
use App\Repository\AccueilRepository as RepositoryAccueilRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    /**
     * @Route("/accueil", name="app_accueil")
     */
    public function index(RepositoryAccueilRepository $accueilRepository): Response
    {
        $accueil = $accueilRepository->findOneBy(["isActive"=> true]);
        //dd($accueil);
        return $this->render('accueil/index.html.twig', [
            'monAccueil' => $accueil,
        ]);
    }
}
