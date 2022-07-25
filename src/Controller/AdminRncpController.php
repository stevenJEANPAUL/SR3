<?php

namespace App\Controller;

use App\Entity\Rncp;
use App\Form\RncpType;
use App\Repository\RncpRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/rncp")
 */
class AdminRncpController extends AbstractController
{
    /**
     * @Route("/", name="app_admin_rncp_index", methods={"GET"})
     */
    public function index(RncpRepository $rncpRepository): Response
    {
        return $this->render('admin_rncp/index.html.twig', [
            'rncps' => $rncpRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="app_admin_rncp_new", methods={"GET", "POST"})
     */
    public function new(Request $request, RncpRepository $rncpRepository): Response
    {
        $rncp = new Rncp();
        $form = $this->createForm(RncpType::class, $rncp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rncpRepository->add($rncp, true);

            return $this->redirectToRoute('app_admin_rncp_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_rncp/new.html.twig', [
            'rncp' => $rncp,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_rncp_show", methods={"GET"})
     */
    public function show(Rncp $rncp): Response
    {
        return $this->render('admin_rncp/show.html.twig', [
            'rncp' => $rncp,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="app_admin_rncp_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Rncp $rncp, RncpRepository $rncpRepository): Response
    {
        $form = $this->createForm(RncpType::class, $rncp);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $rncpRepository->add($rncp, true);

            return $this->redirectToRoute('app_admin_rncp_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('admin_rncp/edit.html.twig', [
            'rncp' => $rncp,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="app_admin_rncp_delete", methods={"POST"})
     */
    public function delete(Request $request, Rncp $rncp, RncpRepository $rncpRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rncp->getId(), $request->request->get('_token'))) {
            $rncpRepository->remove($rncp, true);
        }

        return $this->redirectToRoute('app_admin_rncp_index', [], Response::HTTP_SEE_OTHER);
    }
}
