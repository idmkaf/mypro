<?php


namespace App\Entity\Categories\UseCase\AddCategory;


class Command
{
    public function __construct(
        private string $title,
        private bool $active,
        private IResponder $responder
    )
    {
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @return IResponder
     */
    public function getResponder(): IResponder
    {
        return $this->responder;
    }
}