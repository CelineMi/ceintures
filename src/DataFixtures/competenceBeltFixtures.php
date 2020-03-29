<?php

namespace App\DataFixtures;

use App\Entity\CompetenceBelt;
use Doctrine\Bundle\FixturesBundle\Fixture;
//use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectManager;

class CompetencesBeltFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $belt1 = new CompetenceBelt();
        $belt1->setColor('blanche');
        $manager->persist($belt1);

        $belt2 = new CompetenceBelt();
        $belt2->setColor('jaune');
        $manager->persist($belt2);

        $belt3 = new CompetenceBelt();
        $belt3->setColor('orange');
        $manager->persist($belt3);

        $belt4 = new CompetenceBelt();
        $belt4->setColor('violette');
        $manager->persist($belt4);

        $belt5 = new CompetenceBelt();
        $belt5->setColor('verte');
        $manager->persist($belt5);

        $belt6 = new CompetenceBelt();
        $belt6->setColor('bleue');
        $manager->persist($belt6);

        $belt7 = new CompetenceBelt();
        $belt7->setColor('marron');
        $manager->persist($belt7);

        $belt8 = new CompetenceBelt();
        $belt8->setColor('noire');
        $manager->persist($belt8);

        $belt9 = new CompetenceBelt();
        $belt9->setColor('or');
        $manager->persist($belt9);

        $manager->flush();
    }
}
