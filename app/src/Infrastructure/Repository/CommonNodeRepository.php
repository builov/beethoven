<?php

namespace App\Infrastructure\Repository;

use Doctrine\DBAL\Connection;
use App\Domain\Entity\Node;
use App\Domain\Repository\NodeRepositoryInterface;
use App\Domain\ValueObject\NodeTitle;
use App\Domain\ValueObject\Language;

class CommonNodeRepository implements NodeRepositoryInterface
{
    public function __construct(
        private Connection $connection
    ) 
    {
    }

    public function findAll(): iterable
    {
        return [];
    }

    public function findById(int $nid): ?Node
    {
        // $title = new NodeTitle('test');
        // $node = new Node($title, Language::RU);

        $r = $this->connection->fetchAssociative('SELECT * FROM beeth_node WHERE nid=' . $nid);
        $title = new NodeTitle($r['title']);
        $lang = $r['language'];
        $node = new Node($title, Language::RU);

        // var_dump($node); exit;

        return $node;
    }

    public function save(Node $node): void
    {

    }

    public function delete(Node $node): void
    {

    }
}