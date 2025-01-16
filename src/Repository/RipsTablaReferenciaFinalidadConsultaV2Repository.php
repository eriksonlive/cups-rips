<?php

namespace App\Repository;

use App\Entity\RipsTablaReferenciaFinalidadConsultaV2;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RipsTablaReferenciaFinalidadConsultaV2>
 *
 * @method RipsTablaReferenciaFinalidadConsultaV2|null find($id, $lockMode = null, $lockVersion = null)
 * @method RipsTablaReferenciaFinalidadConsultaV2|null findOneBy(array $criteria, array $orderBy = null)
 * @method RipsTablaReferenciaFinalidadConsultaV2[]    findAll()
 * @method RipsTablaReferenciaFinalidadConsultaV2[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RipsTablaReferenciaFinalidadConsultaV2Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RipsTablaReferenciaFinalidadConsultaV2::class);
    }

    public function findByCodeFinally(string $query): array
    {
        return $this->createQueryBuilder('value')
            ->where('LOWER(value.codigo) LIKE :query OR LOWER(value.nombre) LIKE :query')
            ->setParameter('query', '%' . strtolower($query) . '%')
            ->setMaxResults(10) // Limita la cantidad de resultados para autocompletado
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return RipsTablaReferenciaFinalidadConsultaV2[] Returns an array of RipsTablaReferenciaFinalidadConsultaV2 objects
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

    //    public function findOneBySomeField($value): ?RipsTablaReferenciaFinalidadConsultaV2
    //    {
    //        return $this->createQueryBuilder('r')
    //            ->andWhere('r.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
