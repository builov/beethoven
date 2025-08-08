<?php

namespace App\Infrastructure\Factory;

use App\Domain\Entity\Node;
use App\Domain\Factory\NodeFactoryInterface;
use App\Domain\ValueObject\Language;
use App\Domain\ValueObject\NodeTitle;

class CommonNodeFactory implements NodeFactoryInterface
{

    public function create(string $title, string $language): Node
    {
        return new Node(
            new NodeTitle($title),
            Language::RU
        );
    }
}