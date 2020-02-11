<?php

namespace App\Repository;

use App\Entity\Behavior;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Behavior|null find($id, $lockMode = null, $lockVersion = null)
 * @method Behavior|null findOneBy(array $criteria, array $orderBy = null)
 * @method Behavior[]    findAll()
 * @method Behavior[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BehaviorRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Behavior::class);
    }

    // /**
    //  * @return Behavior[] Returns an array of Behavior objects
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
    public function findOneBySomeField($value): ?Behavior
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
