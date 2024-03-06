<?php

namespace App\Repository;
use App\Entity\Pack;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class PackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Pack::class);
    }

    /**
     * Recherche les packs par nom.
     *
     * @param string $name Le nom à rechercher
     * @return Pack[] Les packs correspondant au nom
     */
    public function findByNomPack(string $name): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.nomPack LIKE :name')
            ->setParameter('name', '%' . $name . '%')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche les packs par type.
     *
     * @param string $type Le type à rechercher
     * @return Pack[] Les packs correspondant au type
     */
    public function findByTypePack(string $type): array
    {
        return $this->createQueryBuilder('p')
            ->andWhere('p.typePack = :type')
            ->setParameter('type', $type)
            ->getQuery()
            ->getResult();
    }
}
