<?php

namespace App\Repository;

use App\Entity\ACCUEIL;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ACCUEIL>
 *
 * @method ACCUEIL|null find($id, $lockMode = null, $lockVersion = null)
 * @method ACCUEIL|null findOneBy(array $criteria, array $orderBy = null)
 * @method ACCUEIL[]    findAll()
 * @method ACCUEIL[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ACCUEILRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ACCUEIL::class);
    }

    public function add(ACCUEIL $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ACCUEIL $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ACCUEIL[] Returns an array of ACCUEIL objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('a.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ACCUEIL
//    {
//        return $this->createQueryBuilder('a')
//            ->andWhere('a.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
