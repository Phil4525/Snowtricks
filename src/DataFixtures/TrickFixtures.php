<?php

namespace App\DataFixtures;

use App\Entity\Trick;
use Faker;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class TrickFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');

        for ($i = 0; $i < 20; $i++) {
            $trick = new Trick();
            $trick->setName($faker->word)
                ->setDescription($faker->text(600))
                ->setCreatedAt($faker->dateTimeBetween('-6 months'));
            $manager->persist($trick);
        }
        $manager->flush();
    }
}
