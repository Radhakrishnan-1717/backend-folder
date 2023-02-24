<?php

namespace App\Repository;

use App\Entity\Customerprofdata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Customerprofdata>
 *
 * @method Customerprofdata|null find($id, $lockMode = null, $lockVersion = null)
 * @method Customerprofdata|null findOneBy(array $criteria, array $orderBy = null)
 * @method Customerprofdata[]    findAll()
 * @method Customerprofdata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CustomerprofdataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Customerprofdata::class);
    }

    public function add(Customerprofdata $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Customerprofdata $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Customerprofdata[] Returns an array of Customerprofdata objects
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

//    public function findOneBySomeField($value): ?Customerprofdata
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
