<?php

namespace App\DataFixtures;

use App\Entity\Users\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);


        $user = new User(
            'admin@admin.com',
            ['ROLE_ADMIN']
        );
        $user->setPassword(password_hash('admin',PASSWORD_BCRYPT));

        $manager->persist($user);
        $manager->flush();
    }
}
