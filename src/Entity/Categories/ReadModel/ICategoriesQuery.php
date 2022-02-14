<?php


namespace App\Entity\Categories\ReadModel;


use Generator;

interface ICategoriesQuery
{
    public function findAll(): Generator;

    public function findAllActive(): Generator;
}