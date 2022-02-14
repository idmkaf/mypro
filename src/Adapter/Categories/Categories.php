<?php


namespace App\Adapter\Categories;


use App\Entity\Categories\Category;
use Doctrine\ORM\EntityManagerInterface;

class Categories
{
    public function __construct(
        private EntityManagerInterface $entityManager
    )
    {
    }

    public function add(Category $category)
    {
        $this->entityManager->persist($category);
    }
}