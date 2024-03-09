<?php

namespace App\Repository;

use App\Entity\Locationvoitures;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Locationvoitures>
 *
 * @method Locationvoitures|null find($id, $lockMode = null, $lockVersion = null)
 * @method Locationvoitures|null findOneBy(array $criteria, array $orderBy = null)
 * @method Locationvoitures[]    findAll()
 * @method Locationvoitures[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class LocationvoituresRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Locationvoitures::class);
    }

//    /**
//     * @return Locationvoitures[] Returns an array of Locationvoitures objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('l.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Locationvoitures
//    {
//        return $this->createQueryBuilder('l')
//            ->andWhere('l.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
