<?php

namespace App\Repository;

use App\Entity\AsCups;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<AsCups>
 *
 * @method AsCups|null find($id, $lockMode = null, $lockVersion = null)
 * @method AsCups|null findOneBy(array $criteria, array $orderBy = null)
 * @method AsCups[]    findAll()
 * @method AsCups[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AsCupsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, AsCups::class);
    }

    public function findAll(): array
    {
        return $this->findBy([], ['codigo_cups' => 'ASC']);
    }

    public function findByCodeCups(?string $query = null, ?string $id = null): array
    {
        $qb = $this->createQueryBuilder('value');

        // Agregar condición para `id` solo si no es nulo o vacío
        if (!empty($id)) {
            $qb->where('value.id = :id') // Nota: Usa un solo "=" para comparar
                ->setParameter('id', $id);
        }

        if(!empty($query)){
            $qb->where('LOWER(value.descripcion_cups) LIKE :query OR value.codigo_cups LIKE :query')
            ->setParameter('query', '%' . strtolower($query) . '%');
        }

        return $qb
            ->setMaxResults(10) // Limita la cantidad de resultados para autocompletado
            ->orderBy('value.codigo_cups', 'ASC')
            ->getQuery()
            ->getResult();
    }

    //    /**
    //     * @return AsCups[] Returns an array of AsCups objects
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

    //    public function findOneBySomeField($value): ?AsCups
    //    {
    //        return $this->createQueryBuilder('a')
    //            ->andWhere('a.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
