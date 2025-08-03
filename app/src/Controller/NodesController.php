<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NodesController extends AbstractController
{
    #[Route('/nodes', name: 'app_nodes')]
    public function index(): Response
    {
        return $this->render('nodes/index.html.twig', [
            'controller_name' => 'NodesController',
        ]);
    }
}
