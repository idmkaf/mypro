<?php


namespace App\Entity\Categories\UseCase\EditCategory;


use App\Entity\Categories\Category;

class Command
{
    public function __construct(
        private Category $category,
        private string $title,
        private bool $active,
        private IResponder $responder
    )
    {
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
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