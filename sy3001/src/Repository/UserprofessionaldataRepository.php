<?php

namespace App\Repository;

use App\Entity\Userprofessionaldata;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Userprofessionaldata>
 *
 * @method Userprofessionaldata|null find($id, $lockMode = null, $lockVersion = null)
 * @method Userprofessionaldata|null findOneBy(array $criteria, array $orderBy = null)
 * @method Userprofessionaldata[]    findAll()
 * @method Userprofessionaldata[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UserprofessionaldataRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Userprofessionaldata::class);
    }

    public function add(Userprofessionaldata $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Userprofessionaldata $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Userprofessionaldata[] Returns an array of Userprofessionaldata objects
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

//    public function findOneBySomeField($value): ?Userprofessionaldata
//    {
//        return $this->createQueryBuilder('u')
//            ->andWhere('u.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
