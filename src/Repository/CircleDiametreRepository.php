<?php

namespace App\Repository;

use App\Entity\CircleDiametre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CircleDiametre|null find($id, $lockMode = null, $lockVersion = null)
 * @method CircleDiametre|null findOneBy(array $criteria, array $orderBy = null)
 * @method CircleDiametre[]    findAll()
 * @method CircleDiametre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CircleDiametreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CircleDiametre::class);
    }

    // /**
    //  * @return CircleDiametre[] Returns an array of CircleDiametre objects
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
    public function findOneBySomeField($value): ?CircleDiametre
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
