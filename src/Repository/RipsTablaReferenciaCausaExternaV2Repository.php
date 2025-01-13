<?php

namespace App\Repository;

use App\Entity\RipsTablaReferenciaCausaExternaV2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RipsTablaReferenciaCausaExternaV2>
 *
 * @method RipsTablaReferenciaCausaExternaV2|null find($id, $lockMode = null, $lockVersion = null)
 * @method RipsTablaReferenciaCausaExternaV2|null findOneBy(array $criteria, array $orderBy = null)
 * @method RipsTablaReferenciaCausaExternaV2[]    findAll()
 * @method RipsTablaReferenciaCausaExternaV2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RipsTablaReferenciaCausaExternaV2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RipsTablaReferenciaCausaExternaV2::class);
    }

    public function findByQuery(string $query): array
    {
        return $this->createQueryBuilder('value')
            ->where('LOWER(value.codigo) LIKE :query OR LOWER(value.nombre) LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->setMaxResults(10) // Limita la cantidad de resultados para autocompletado
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return RipsTablaReferenciaCausaExternaV2[] Returns an array of RipsTablaReferenciaCausaExternaV2 objects
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

    //    public function findOneBySomeField($value): ?RipsTablaReferenciaCausaExternaV2
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
