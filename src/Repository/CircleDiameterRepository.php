<?php

namespace App\Repository;

use App\Entity\CircleDiameter;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CircleDiameter|null find($id, $lockMode = null, $lockVersion = null)
 * @method CircleDiameter|null findOneBy(array $criteria, array $orderBy = null)
 * @method CircleDiameter[]    findAll()
 * @method CircleDiameter[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CircleDiameterRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CircleDiameter::class);
    }

    // /**
    //  * @return CircleDiameter[] Returns an array of CircleDiameter objects
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
    public function findOneBySomeField($value): ?CircleDiameter
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
