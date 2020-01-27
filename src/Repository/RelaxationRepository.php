<?php

namespace App\Repository;

use App\Entity\Relaxation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Relaxation|null find($id, $lockMode = null, $lockVersion = null)
 * @method Relaxation|null findOneBy(array $criteria, array $orderBy = null)
 * @method Relaxation[]    findAll()
 * @method Relaxation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RelaxationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Relaxation::class);
    }

    // /**
    //  * @return Relaxation[] Returns an array of Relaxation objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Relaxation
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
