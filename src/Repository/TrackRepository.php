<?php

namespace App\Repository;

use App\Entity\Track;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Track>
 */
class TrackRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Track::class);
    }

    /**
     * @return Track[]
     */
    public function findLatestApproved(int $limit = 10): array
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.status = :status')
            ->setParameter('status', Track::STATUS_APPROVED)
            ->orderBy('t.createdAt', 'DESC')
            ->addOrderBy('t.id', 'DESC')
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult()
        ;
    }

    /**
     * @return Track[]
     */
    public function searchApproved(?string $search): array
    {
        $qb = $this->createQueryBuilder('t')
            ->andWhere('t.status = :status')
            ->setParameter('status', Track::STATUS_APPROVED)
            ->orderBy('t.gameName', 'ASC')
            ->addOrderBy('t.title', 'ASC')
        ;

        $search = trim((string) $search);
        if ('' !== $search) {
            $qb->andWhere('t.title LIKE :search OR t.gameName LIKE :search OR t.composer LIKE :search')
                ->setParameter('search', '%'.$search.'%')
            ;
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * @return Track[]
     */
    public function findAllForModeration(): array
    {
        return $this->createQueryBuilder('t')
            ->leftJoin('t.addedBy', 'u')
            ->addSelect('u')
            ->orderBy('t.status', 'DESC')
            ->addOrderBy('t.createdAt', 'DESC')
            ->getQuery()
            ->getResult()
        ;
    }
}
