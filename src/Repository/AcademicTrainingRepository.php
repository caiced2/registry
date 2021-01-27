<?php

namespace App\Repository;

use App\Entity\AcademicTraining;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method AcademicTraining|null find($id, $lockMode = null, $lockVersion = null)
 * @method AcademicTraining|null findOneBy(array $criteria, array $orderBy = null)
 * @method AcademicTraining[]    findAll()
 * @method AcademicTraining[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AcademicTrainingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AcademicTraining::class);
    }

    // /**
    //  * @return AcademicTraining[] Returns an array of AcademicTraining objects
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
    public function findOneBySomeField($value): ?AcademicTraining
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
