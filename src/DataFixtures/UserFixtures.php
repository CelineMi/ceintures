<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
//use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user1 = new User();
        $user1->setName('Girard')
            ->setFirstname('Romain')
            ->setUsername('RomainGirard')
            ->setPassword('123')
            ->setEmail('romain@girard.com')
            ->setRole('teacher')
            ->setCreatedAt(new \DateTime())
            ;
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('Louis')
            ->setFirstname('Emile')
            ->setUsername('EmileLouis')
            ->setPassword('123')
            ->setEmail('emile@louis.com')
            ->setRole('student')
            ->setCreatedAt(new \DateTime())
            ;
        $manager->persist($user2);

        $user3 = new User();
        $user3->setName('Bernard')
            ->setFirstname('Bernard')
            ->setUsername('BernardMartin')
            ->setPassword('123')
            ->setEmail('bernard@martin.com')
            ->setRole('student')
            ->setCreatedAt(new \DateTime())
            ;
        $manager->persist($user3);

        $manager->flush();
    }
}
