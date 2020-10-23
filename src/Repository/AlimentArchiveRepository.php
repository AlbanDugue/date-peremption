<?php

namespace App\Repository;

use App\Entity\AlimentArchive;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AlimentArchive|null find($id, $lockMode = null, $lockVersion = null)
 * @method AlimentArchive|null findOneBy(array $criteria, array $orderBy = null)
 * @method AlimentArchive[]    findAll()
 * @method AlimentArchive[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AlimentArchiveRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AlimentArchive::class);
    }

    // /**
    //  * @return AlimentArchive[] Returns an array of AlimentArchive objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?AlimentArchive
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
