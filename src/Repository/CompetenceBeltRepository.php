<?php

namespace App\Repository;

use App\Entity\CompetenceBelt;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method CompetenceBelt|null find($id, $lockMode = null, $lockVersion = null)
 * @method CompetenceBelt|null findOneBy(array $criteria, array $orderBy = null)
 * @method CompetenceBelt[]    findAll()
 * @method CompetenceBelt[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CompetenceBeltRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CompetenceBelt::class);
    }

    // /**
    //  * @return CompetenceBelt[] Returns an array of CompetenceBelt objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CompetenceBelt
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
