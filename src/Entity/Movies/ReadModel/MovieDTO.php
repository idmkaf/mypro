<?php


namespace App\Entity\Movies\ReadModel;


use DateTime;

class MovieDTO
{

    public function __construct(
        private int $id,
        private string $title,
        private int $level,
        private DateTime $createdAt,
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
     * @return int
     */
    public function getLevel(): int
    {
        return $this->level;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }
}