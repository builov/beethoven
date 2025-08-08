<?php

namespace App\Domain\Factory;

use App\Domain\Entity\Node;

interface NodeFactoryInterface
{
    public function create(string $title, string $language): Node;
}
