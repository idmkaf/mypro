<?php


namespace App\Entity\Movies\ReadModel;


use Generator;

interface IMoviesQuery
{
    public function getMoviesByCategory(string $category): Generator;

    public function getMoviesByLevel(string $level): Generator;

}