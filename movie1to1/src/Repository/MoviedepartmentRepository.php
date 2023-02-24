<?php

namespace App\Repository;

use App\Entity\Moviedepartment;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Moviedepartment>
 *
 * @method Moviedepartment|null find($id, $lockMode = null, $lockVersion = null)
 * @method Moviedepartment|null findOneBy(array $criteria, array $orderBy = null)
 * @method Moviedepartment[]    findAll()
 * @method Moviedepartment[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MoviedepartmentRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Moviedepartment::class);
    }

    public function add(Moviedepartment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Moviedepartment $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Moviedepartment[] Returns an array of Moviedepartment objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('m.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Moviedepartment
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
