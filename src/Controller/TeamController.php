<?php

namespace App\Controller;

use App\Controller\TeamRepository;
use App\Repository\TeamRepository as RepositoryTeamRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TeamController extends AbstractController
{
    /**
     * @Route("/team", name="app_team")
     */
    public function index(RepositoryTeamRepository $teamRepository): Response
    {
        $team = $teamRepository->findOneBy(["isActive"=> true]);
        //dd($team);
        return $this->render('team/index.html.twig', [
            'laTeam' => $team,
        ]);
    }
}
