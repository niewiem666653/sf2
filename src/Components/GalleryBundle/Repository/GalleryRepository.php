<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 18.05.15
 * Time: 15:15
 */

namespace Components\GalleryBundle\Repository;




use Doctrine\ORM\EntityRepository;

class GalleryRepository extends EntityRepository
{
    public function GetGalleryList()
    {
        $qb = $this->createQueryBuilder('g');

        $qb->select('g', 'i')
            ->leftJoin('g.images', 'i');

        return $qb->getQuery()->getArrayResult();
    }

    public function getGallery($slug)
    {
        $qb = $this->createQueryBuilder('g')
            ->select('g, i')
            ->leftJoin('g.images', 'i')
            ->where('g.slug = :slug')
            ->setParameter('slug', $slug);

        return $qb->getQuery()->getOneOrNullResult();
    }
}