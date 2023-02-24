<?php

namespace App\Repository;

use App\Entity\Userpersonaldata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Userpersonaldata>
 *
 * @method Userpersonaldata|null find($id, $lockMode = null, $lockVersion = null)
 * @method Userpersonaldata|null findOneBy(array $criteria, array $orderBy = null)
 * @method Userpersonaldata[]    findAll()
 * @method Userpersonaldata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserpersonaldataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Userpersonaldata::class);
    }

    public function add(Userpersonaldata $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Userpersonaldata $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Userpersonaldata[] Returns an array of Userpersonaldata objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('u.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Userpersonaldata
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
