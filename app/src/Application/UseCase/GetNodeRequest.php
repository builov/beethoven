<?php

namespace App\Application\UseCase;

class GetNodeRequest
{
    public function __construct(
        public readonly int $nid,
    )
    {
    }
}