<?php

namespace App\Repository;

use App\Entity\BehaviorBelt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method BehaviorBelt|null find($id, $lockMode = null, $lockVersion = null)
 * @method BehaviorBelt|null findOneBy(array $criteria, array $orderBy = null)
 * @method BehaviorBelt[]    findAll()
 * @method BehaviorBelt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BehaviorBeltRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BehaviorBelt::class);
    }

    // /**
    //  * @return BehaviorBelt[] Returns an array of BehaviorBelt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BehaviorBelt
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
