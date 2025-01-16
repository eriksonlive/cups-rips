<?php

namespace App\Repository;

use App\Entity\AsCie10;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AsCie10>
 *
 * @method AsCie10|null find($id, $lockMode = null, $lockVersion = null)
 * @method AsCie10|null findOneBy(array $criteria, array $orderBy = null)
 * @method AsCie10[]    findAll()
 * @method AsCie10[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsCie10Repository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AsCie10::class);
    }

    public function findByQueryOrId(?string $query = null, ?string $id = null): array
    {
        $qb = $this->createQueryBuilder('value');

        if (!empty($id)) {
            $qb->where('value.id = :id')
                ->setParameter('id', $id);
        }

        if (!empty($query)) {
            $qb->where('LOWER(value.cie_10) LIKE :query OR LOWER(value.nombre) LIKE :query')
                ->setParameter('query', '%' . strtolower($query) . '%');
        }

        return $qb
            ->setMaxResults(10) // Limita la cantidad de resultados para autocompletado
            ->orderBy('value.id', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function findLastTen(): array
    {
        return $this->createQueryBuilder('d') // 'd' es un alias para la tabla
            ->orderBy('d.id', 'DESC')        // Suponiendo que tienes un campo `id` o equivalente
            ->setMaxResults(10)              // Limitar a los últimos 10 resultados
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return AsCie10[] Returns an array of AsCie10 objects
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

    //    public function findOneBySomeField($value): ?AsCie10
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
