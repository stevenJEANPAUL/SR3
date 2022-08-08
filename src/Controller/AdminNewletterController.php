<?php

namespace App\Controller;

use App\Entity\Newletter;
use App\Form\NewletterType;
use App\Repository\NewletterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/newletter")
 */
class AdminNewletterController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_newletter_index", methods={"GET"})
     */
    public function index(NewletterRepository $newletterRepository): Response
    {
        return $this->render('admin_newletter/index.html.twig', [
            'newletters' => $newletterRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_newletter_new", methods={"GET", "POST"})
     */
    public function new(Request $request, NewletterRepository $newletterRepository): Response
    {
        $newletter = new Newletter();
        $form = $this->createForm(NewletterType::class, $newletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newletterRepository->add($newletter, true);

            return $this->redirectToRoute('app_admin_newletter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_newletter/new.html.twig', [
            'newletter' => $newletter,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_newletter_show", methods={"GET"})
     */
    public function show(Newletter $newletter): Response
    {
        return $this->render('admin_newletter/show.html.twig', [
            'newletter' => $newletter,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_newletter_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Newletter $newletter, NewletterRepository $newletterRepository): Response
    {
        $form = $this->createForm(NewletterType::class, $newletter);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newletterRepository->add($newletter, true);

            return $this->redirectToRoute('app_admin_newletter_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_newletter/edit.html.twig', [
            'newletter' => $newletter,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_newletter_delete", methods={"POST"})
     */
    public function delete(Request $request, Newletter $newletter, NewletterRepository $newletterRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$newletter->getId(), $request->request->get('_token'))) {
            $newletterRepository->remove($newletter, true);
        }

        return $this->redirectToRoute('app_admin_newletter_index', [], Response::HTTP_SEE_OTHER);
    }
}
