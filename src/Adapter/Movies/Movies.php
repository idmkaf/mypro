<?php


namespace App\Adapter\Movies;


use App\Entity\Movies\Movie;
use App\Entity\Movies\IMovies;
use Doctrine\ORM\EntityManagerInterface;

class Movies
{
    public function __construct(
        private EntityManagerInterface $entityManager
    )
    {
    }

    public function add(Movie $movie)
    {
        $this->entityManager->persist($movie);
    }

    public function findAll(): array
    {
        return $this->entityManager->getRepository(Movie::class)->findAll();
    }

    public function findOneBy(array $attributes): object
    {
        return $this->entityManager->getRepository(Movie::class)->findOneBy($attributes);
    }

    public function findBy(array $attribues)
    {
        return $this->entityManager->getRepository(Movie::class)->finBy($attribues);
    }
}