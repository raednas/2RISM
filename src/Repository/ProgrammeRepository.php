<?php

namespace App\Repository;

use App\Entity\Programme;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ProgrammeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Programme::class);
    }

    /**
     * Recherche les programmes par catégorie.
     *
     * @param string $category La catégorie à rechercher
     * @return Programme[] Les programmes correspondant à la catégorie
     */
    public function findByCategorie(string $category): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.categorie = :category')
            ->setParameter('category', $category)
            ->getQuery()
            ->getResult();
    }
}
