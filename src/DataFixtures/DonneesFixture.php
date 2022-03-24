<?php

namespace App\DataFixtures;

use App\Entity\Donnees;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class DonneesFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //creation du faxer pour la génération des valeurs aléatoires
        $faker = Factory::create('fr_FR');
        //génération des enregristrements
        for($k=0 ; $k<100 ; $k++){
            $donnees = new Donnees();
            $donnees->setIp($faker->ipv4)
                    ->setPage($faker->numberBetween(1, 2))
                    ->setTimestart($faker->dateTime)
                    ->setTimeend($faker->dateTime);
            // eregistrement de l'objet
            $manager->persist($donnees);
        }
        
        $manager->flush();
    }
}
