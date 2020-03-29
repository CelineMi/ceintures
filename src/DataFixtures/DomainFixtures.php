<?php

namespace App\DataFixtures;

use App\Entity\Domain;
use Doctrine\Bundle\FixturesBundle\Fixture;
//use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectManager;

class DomainFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $domain1 = new Domain();
        $domain1->setName('grammaire');
        $manager->persist($domain1);

        $domain2 = new Domain();
        $domain2->setName('ortographe');
        $manager->persist($domain2);

        $domain3 = new Domain();
        $domain3->setName('géographie');
        $manager->persist($domain3);

        $domain4 = new Domain();
        $domain4->setName('histoire');
        $manager->persist($domain4);

        $domain5 = new Domain();
        $domain5->setName('calcul');
        $manager->persist($domain5);

        $domain11 = new Domain();
        $domain11->setName('lexique');
        $manager->persist($domain11);

        $domain6 = new Domain();
        $domain6->setName('géométrie');
        $manager->persist($domain6);

        $domain7 = new Domain();
        $domain7->setName('lecture');
        $manager->persist($domain7);

        $domain8 = new Domain();
        $domain8->setName('dessin');
        $manager->persist($domain8);

        $domain9 = new Domain();
        $domain9->setName('sport');
        $manager->persist($domain9);

        $domain10 = new Domain();
        $domain10->setName('peinture');
        $manager->persist($domain10);

        $manager->flush();
    }
}
