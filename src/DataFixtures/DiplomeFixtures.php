<?php

namespace App\DataFixtures;

use App\Entity\Diplome;
use Doctrine\Bundle\FixturesBundle\Fixture;
//use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectManager;

class DiplomeFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $diplome = new Diplome();
        $diplome->setName('facteur');
        $manager->persist($diplome);

        $diplome1 = new Diplome();
        $diplome1->setName('lecture seul');
        $manager->persist($diplome1);

        $diplome2 = new Diplome();
        $diplome2->setName('ordinateur');
        $manager->persist($diplome2);

        $manager->flush();
    }
}
