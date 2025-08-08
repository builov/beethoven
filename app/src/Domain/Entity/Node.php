<?php

namespace App\Domain\Entity;

use App\Domain\ValueObject\Language;
use App\Domain\ValueObject\NodeTitle;

class Node
{
    private ?int $id = null;

    public function __construct(
        private NodeTitle $title,
        private Language $language,
    )
    {
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): NodeTitle
    {
        return $this->title;
    }

    public function getLang(): Language
    {
        return $this->language;
    }
}
