<?php

namespace App\Repository;

use App\Entity\AsConsultasProcedimientos;
use App\Entity\AsCups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AsConsultasProcedimientos>
 *
 * @method AsConsultasProcedimientos|null find($id, $lockMode = null, $lockVersion = null)
 * @method AsConsultasProcedimientos|null findOneBy(array $criteria, array $orderBy = null)
 * @method AsConsultasProcedimientos[]    findAll()
 * @method AsConsultasProcedimientos[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsConsultasProcedimientosRepository extends ServiceEntityRepository
{

    public const PAGINATION_PER_PAGE = 10;

    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AsConsultasProcedimientos::class);
    }

    public function getConsultasPagination(int $offset, int $limit = 10, ?string $codigoCups = null, ?string $descripcionCups = null): Paginator
    {
        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.cups', 'cu') // Realiza un join con la relación
            ->addSelect('cu');

        // Aplicar filtros si los valores están presentes
        if ($codigoCups) {
            $qb->andWhere('LOWER(cu.codigo_cups) LIKE :codigoCups')
                ->setParameter('codigoCups', "%" . strtolower($codigoCups) . "%");
        }

        if ($descripcionCups) {
            $qb->andWhere('LOWER(cu.descripcion_cups) LIKE :descripcionCups')
                ->setParameter('descripcionCups', "%" . strtolower($descripcionCups) . "%");
        }

        $query = $qb->orderBy('a.id', 'DESC')
            ->setMaxResults($limit)
            ->setFirstResult($offset)
            ->getQuery();

        return new Paginator($query);
    }

    //    /**
    //     * @return AsConsultasProcedimientos[] Returns an array of AsConsultasProcedimientos objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('a.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?AsConsultasProcedimientos
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
