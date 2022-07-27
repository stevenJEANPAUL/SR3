<?php

namespace App\Controller;

use App\Entity\NosActus;
use App\Form\NosActusType;
use App\Repository\NosActusRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/nos/actus")
 */
class AdminNosActusController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_nos_actus_index", methods={"GET"})
     */
    public function index(NosActusRepository $nosActusRepository): Response
    {
        return $this->render('admin_nos_actus/index.html.twig', [
            'nos_actuses' => $nosActusRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_nos_actus_new", methods={"GET", "POST"})
     */
    public function new(Request $request, NosActusRepository $nosActusRepository): Response
    {
        $nosActu = new NosActus();
        $form = $this->createForm(NosActusType::class, $nosActu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nosActusRepository->add($nosActu, true);

            return $this->redirectToRoute('app_admin_nos_actus_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_nos_actus/new.html.twig', [
            'nos_actu' => $nosActu,
            'form' => $form,
        ]);
    }
    /**
     * @Route("/{id}", name="app_admin_nos_actus_show", methods={"GET"})
     */
    public function show(NosActus $nosActu): Response
    {
        return $this->render('admin_nos_actus/show.html.twig', [
            'nos_actu' => $nosActu,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_nos_actus_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, NosActus $nosActu, NosActusRepository $nosActusRepository): Response
    {
        $form = $this->createForm(NosActusType::class, $nosActu);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $nosActusRepository->add($nosActu, true);

            return $this->redirectToRoute('app_admin_nos_actus_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_nos_actus/edit.html.twig', [
            'nos_actu' => $nosActu,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_nos_actus_delete", methods={"POST"})
     */
    public function delete(Request $request, NosActus $nosActu, NosActusRepository $nosActusRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$nosActu->getId(), $request->request->get('_token'))) {
            $nosActusRepository->remove($nosActu, true);
        }

        return $this->redirectToRoute('app_admin_nos_actus_index', [], Response::HTTP_SEE_OTHER);
    }
}
