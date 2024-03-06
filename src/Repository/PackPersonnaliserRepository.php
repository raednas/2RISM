<?php

namespace App\Repository;

use App\Entity\PackPersonnaliser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<PackPersonnaliser>
 *
 * @method PackPersonnaliser|null find($id, $lockMode = null, $lockVersion = null)
 * @method PackPersonnaliser|null findOneBy(array $criteria, array $orderBy = null)
 * @method PackPersonnaliser[]    findAll()
 * @method PackPersonnaliser[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PackPersonnaliserRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, PackPersonnaliser::class);
    }

    /**
     * @param string|null $searchTerm
     * @return PackPersonnaliser[]
     */
    public function searchByCriteria(?string $searchTerm): array
    {
        $entityManager = $this->getEntityManager();
        
        $query = $entityManager->createQuery(
            'SELECT pp
            FROM App\Entity\PackPersonnaliser pp
            JOIN pp.pack p
            JOIN pp.programme pr
            WHERE p.id_pack LIKE :searchTerm OR pr.id_prog LIKE :searchTerm'
        )->setParameter('searchTerm', '%' . $searchTerm . '%');
        
        return $query->getResult();
    }

    
}
