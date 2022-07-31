<?php

namespace App\Controller;

use App\Entity\AvisClient;
use App\Form\AvisClientType;
use App\Repository\AvisClientRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/avis/client")
 */
class AdminAvisClientController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_avis_client_index", methods={"GET"})
     */
    public function index(AvisClientRepository $avisClientRepository): Response
    {
        return $this->render('admin_avis_client/index.html.twig', [
            'avis_clients' => $avisClientRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_avis_client_new", methods={"GET", "POST"})
     */
    public function new(Request $request, AvisClientRepository $avisClientRepository): Response
    {
        $avisClient = new AvisClient();
        $form = $this->createForm(AvisClientType::class, $avisClient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avisClientRepository->add($avisClient, true);

            return $this->redirectToRoute('app_admin_avis_client_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_avis_client/new.html.twig', [
            'avis_client' => $avisClient,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_avis_client_show", methods={"GET"})
     */
    public function show(AvisClient $avisClient): Response
    {
        return $this->render('admin_avis_client/show.html.twig', [
            'avis_client' => $avisClient,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_avis_client_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, AvisClient $avisClient, AvisClientRepository $avisClientRepository): Response
    {
        $form = $this->createForm(AvisClientType::class, $avisClient);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $avisClientRepository->add($avisClient, true);

            return $this->redirectToRoute('app_admin_avis_client_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_avis_client/edit.html.twig', [
            'avis_client' => $avisClient,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_avis_client_delete", methods={"POST"})
     */
    public function delete(Request $request, AvisClient $avisClient, AvisClientRepository $avisClientRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avisClient->getId(), $request->request->get('_token'))) {
            $avisClientRepository->remove($avisClient, true);
        }

        return $this->redirectToRoute('app_admin_avis_client_index', [], Response::HTTP_SEE_OTHER);
    }
}
