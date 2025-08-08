<?php

namespace App\Domain\Repository;

use App\Domain\Entity\Node;

interface NodeRepositoryInterface
{
    /**
     * @return Node[]
     */
    public function findAll(): iterable;

    public function findById(int $id): ?Node;

    public function save(Node $node): void;

    public function delete(Node $node): void;
}