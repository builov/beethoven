<?php

namespace App\Application\UseCase;

use App\Domain\Repository\NodeRepositoryInterface;

class GetNodeUseCase
{
    public function __construct(
        private readonly NodeRepositoryInterface $nodeRepository
    )
    {
    }

    public function __invoke(GetNodeRequest $getNodeRequest): GetNodeResponse
    {
        $node = $this->nodeRepository->findById($getNodeRequest->nid);

        return new GetNodeResponse($node->getTitle()->getValue());
    }
}