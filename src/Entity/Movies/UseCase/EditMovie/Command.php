<?php


namespace App\Entity\Movies\UseCase\EditMovie;


class Command
{
    public function __construct(
        private int $movieId,
        private string $title,
        private IResponder $responder
    )
    {
    }

    /**
     * @return int
     */
    public function getMovieId(): int
    {
        return $this->movieId;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return IResponder
     */
    public function getResponder(): IResponder
    {
        return $this->responder;
    }
}