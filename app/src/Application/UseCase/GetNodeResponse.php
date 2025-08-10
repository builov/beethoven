<?php

namespace App\Application\UseCase;

use App\Domain\Entity\Node;

class GetNodeResponse
{
    public function __construct(
        public readonly string $title,
    )
    {
    }
}