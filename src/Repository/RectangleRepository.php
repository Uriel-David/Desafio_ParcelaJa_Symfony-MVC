<?php

namespace App\Repository;

use App\Entity\Rectangle;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rectangle>
 *
 * @method Rectangle|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rectangle|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rectangle[]    findAll()
 * @method Rectangle[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RectangleRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rectangle::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(Rectangle $entity, bool $flush = true): void
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
    public function remove(Rectangle $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @return Rectangle[] Returns an array of Rectangle objects
     */
    public function findAllRectangles(): array
    {
        return $this->createQueryBuilder('r')
                    ->getQuery()
                    ->getResult();
    }
}
