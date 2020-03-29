<?php

namespace App\DataFixtures;

use App\Entity\BehaviorBelt;
use Doctrine\Bundle\FixturesBundle\Fixture;
//use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectManager;

class BehaviorBeltFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $belt1 = new BehaviorBelt();
        $belt1->setColor('blanche');
        $manager->persist($belt1);

        $belt2 = new BehaviorBelt();
        $belt2->setColor('jaune');
        $manager->persist($belt2);

        $belt3 = new BehaviorBelt();
        $belt3->setColor('orange');
        $manager->persist($belt3);

        $belt5 = new BehaviorBelt();
        $belt5->setColor('verte');
        $manager->persist($belt5);

        $belt6 = new BehaviorBelt();
        $belt6->setColor('bleue');
        $manager->persist($belt6);

        $belt8 = new BehaviorBelt();
        $belt8->setColor('noire');
        $manager->persist($belt8);

        $manager->flush();
    }
}
