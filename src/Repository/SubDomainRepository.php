<?php

namespace App\Repository;

use App\Entity\SubDomain;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method SubDomain|null find($id, $lockMode = null, $lockVersion = null)
 * @method SubDomain|null findOneBy(array $criteria, array $orderBy = null)
 * @method SubDomain[]    findAll()
 * @method SubDomain[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SubDomainRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SubDomain::class);
    }

    // /**
    //  * @return SubDomain[] Returns an array of SubDomain objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SubDomain
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
