<?php

namespace App\Infrastructure\Web;

use App\Domain\Entity\Node;
use App\Domain\ValueObject\Language;
use App\Domain\ValueObject\NodeTitle;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// use Doctrine\DBAL\Connection;
use App\Application\UseCase\GetNodeUseCase;
use App\Application\UseCase\GetNodeRequest;
use App\Application\UseCase\GetNodeResponse;


class NodeController extends AbstractController
{
    public function __construct(
        private GetNodeUseCase $useCase
    ) 
    {
    }

    #[Route('/node/{nid}', name: 'app_node')]
    public function index(int $nid): Response
    {
        $getNodeRequest = new GetNodeRequest($nid);

        // var_dump($getNodeRequest); exit;

        $response = ($this->useCase)($getNodeRequest);

        // var_dump($response->node->getTitle()->getValue());

//         $nodes = $connection->fetchAllAssociative('SELECT * FROM beeth_node');

        return $this->render('node/index.html.twig', [
            'title' => $response->title,
        ]);
    }
}
