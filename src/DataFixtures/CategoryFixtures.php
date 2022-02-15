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

        $list = [
            'staw skroniowo-żuchwowy',
            'łopatki - barki',
            'biodra',
            'ćwiczenia różne'
        ];

        foreach ($list as $item) {
            $category = new Category(
                $item,
                true
            );
            $manager->persist($category);
        }

        $manager->flush();
    }
}
