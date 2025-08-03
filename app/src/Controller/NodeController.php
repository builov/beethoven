<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\DBAL\Connection;

class NodeController extends AbstractController
{
    #[Route('/node', name: 'app_node')]
    public function index(Connection $connection): Response
    {
        $nodes = $connection->fetchAllAssociative('SELECT * FROM beeth_node');

        return $this->render('node/index.html.twig', [
            'posts' => $nodes,
        ]);
    }
}
