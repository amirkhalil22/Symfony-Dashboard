<?php

namespace App\Repository;

use App\Entity\DatePayslips;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DatePayslips>
 *
 * @method DatePayslips|null find($id, $lockMode = null, $lockVersion = null)
 * @method DatePayslips|null findOneBy(array $criteria, array $orderBy = null)
 * @method DatePayslips[]    findAll()
 * @method DatePayslips[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DatePayslipsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DatePayslips::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(DatePayslips $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(DatePayslips $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return DatePayslips[] Returns an array of DatePayslips objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DatePayslips
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
