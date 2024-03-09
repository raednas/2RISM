<?php

namespace App\Repository;

use App\Entity\Chatbot;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Chatbot>
 *
 * @method Chatbot|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chatbot|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chatbot[]    findAll()
 * @method Chatbot[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChatbotRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chatbot::class);
    }

    public function findByQuery($query)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.queries LIKE :query')
            ->setParameter('query', '%' . $query . '%')
            ->getQuery()
            ->getResult();
    }
//    /**
//     * @return Chatbot[] Returns an array of Chatbot objects
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

//    public function findOneBySomeField($value): ?Chatbot
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
