<?php


namespace App\Entity\Categories\ReadModel;


class CategoryDTO
{
    public function __construct(
        private int $id,
        private string $title,
        private bool $active
    )
    {
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
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
}