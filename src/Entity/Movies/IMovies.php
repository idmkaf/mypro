<?php


namespace App\Entity\Movies;


interface IMovies
{
    public function add(Movie $movie);

    public function findAll(): array;
}