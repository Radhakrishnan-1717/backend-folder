<?php

namespace App\Repository;

use App\Entity\Departmentemployee;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Departmentemployee>
 *
 * @method Departmentemployee|null find($id, $lockMode = null, $lockVersion = null)
 * @method Departmentemployee|null findOneBy(array $criteria, array $orderBy = null)
 * @method Departmentemployee[]    findAll()
 * @method Departmentemployee[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DepartmentemployeeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Departmentemployee::class);
    }

    public function add(Departmentemployee $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Departmentemployee $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return Departmentemployee[] Returns an array of Departmentemployee objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Departmentemployee
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
