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




    //     /**
    //  * @Route("/nos/actus/{slug}", name="app_nos_actus_show",)
    //  */
    // public function show(NosActusRepository $nosActusRepository, string $slug): Response
    // {
    //     return $this->render('nos_actus/show.html.twig', [
    //         'nos_actuses' => $nosActusRepository->findOneBy(['slug' => $slug]),
    //     ]);
    // }

    
    /**
     * @Route("/nos/actus/{slug}/{id}", name="app_nos_actus_show_newletter")
     */
    public function show_newletter(NewletterRepository $newletterRepository, string $slug, int $id): Response
    {
        return $this->render('nos_actus/show-newletter.html.twig', [
            'newletter' => $newletterRepository->find($id),
        ]);
    }

    //     /**
    //  * @Route("/nos/actus/{slug}", name="app_nos_actus_show")
    //  */
    // public function show(NosActusRepository $nosActusRepository, string $slug): Response
    // {
    //     $nosActu = $nosActusRepository->findOneBy(["slug" => $slug]);
    //     return $this->render('nos_actus/show.html.twig', [
    //         'nos_actu' => $nosActu,
    //     ]);
    // }
}
