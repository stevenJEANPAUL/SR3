<?php

namespace App\Controller;

use App\Controller\AdminTeamController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdminTeamController extends AbstractController
{
    /**
     * @Route("/admin/team", name="app_admin_team")
     */
    public function index(): Response
    {
        return $this->render('admin_team/index.html.twig', [
            'controller_name' => 'AdminTeamController',
        ]);
    }
}
