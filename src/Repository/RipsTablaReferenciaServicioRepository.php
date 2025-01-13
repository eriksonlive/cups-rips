<?php

namespace App\Repository;

use App\Entity\RipsTablaReferenciaServicio;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RipsTablaReferenciaServicio>
 *
 * @method RipsTablaReferenciaServicio|null find($id, $lockMode = null, $lockVersion = null)
 * @method RipsTablaReferenciaServicio|null findOneBy(array $criteria, array $orderBy = null)
 * @method RipsTablaReferenciaServicio[]    findAll()
 * @method RipsTablaReferenciaServicio[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RipsTablaReferenciaServicioRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RipsTablaReferenciaServicio::class);
    }

//    /**
//     * @return RipsTablaReferenciaServicio[] Returns an array of RipsTablaReferenciaServicio objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RipsTablaReferenciaServicio
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
