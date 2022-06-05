<?php

namespace App\Repository;

use App\Entity\Msw;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Msw>
 *
 * @method Msw|null find($id, $lockMode = null, $lockVersion = null)
 * @method Msw|null findOneBy(array $criteria, array $orderBy = null)
 * @method Msw[]    findAll()
 * @method Msw[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MswRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Msw::class);
    }

    public function add(Msw $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Msw $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function getRcp()
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = 'SELECT * 
                FROM test.msw AS m
                ORDER BY m.ilosc DESC 
            ';
        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();
        return $result->fetchAll();
    }

//    /**
//     * @return Msw[] Returns an array of Msw objects
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

//    public function findOneBySomeField($value): ?Msw
//    {
//        return $this->createQueryBuilder('m')
//            ->andWhere('m.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
