<?php

namespace App\DataFixtures;

use App\Entity\Categories\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoryFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $category = new Category(
            'staw skroniowo-żuchwowy',true,
//            'łopatki - barki', true,
//            'biodra', true,
//            'ćwiczenia różne', true,
        );
        $manager->persist($category);
        $manager->flush();
    }
}
