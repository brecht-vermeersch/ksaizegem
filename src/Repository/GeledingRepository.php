<?php

namespace App\Repository;

use App\Entity\Geleding;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Geleding>
 *
 * @method Geleding|null find($id, $lockMode = null, $lockVersion = null)
 * @method Geleding|null findOneBy(array $criteria, array $orderBy = null)
 * @method Geleding[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GeledingRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Geleding::class);
    }

    public function add(Geleding $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Geleding $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findAll(): array
    {
        return $this->findBy([], ['rangschikking' => 'asc']);
    }
}
