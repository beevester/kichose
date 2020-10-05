<?php

namespace App\Repository;

use App\Entity\DealType;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method DealType|null find($id, $lockMode = null, $lockVersion = null)
 * @method DealType|null findOneBy(array $criteria, array $orderBy = null)
 * @method DealType[]    findAll()
 * @method DealType[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DealTypeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DealType::class);
    }

//    /**
//     * @return ProjectType[] Returns an array of ProjectType objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('p.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ProjectType
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
