<?php

namespace App\Repository;

use App\Entity\Customerpersdata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Customerpersdata>
 *
 * @method Customerpersdata|null find($id, $lockMode = null, $lockVersion = null)
 * @method Customerpersdata|null findOneBy(array $criteria, array $orderBy = null)
 * @method Customerpersdata[]    findAll()
 * @method Customerpersdata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerpersdataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Customerpersdata::class);
    }

    public function add(Customerpersdata $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Customerpersdata $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Customerpersdata[] Returns an array of Customerpersdata objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Customerpersdata
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
