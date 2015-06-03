<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 18.05.15
 * Time: 15:15
 */

namespace Components\GalleryBundle\Repository;


use Doctrine\ORM\EntityRepository;

class ImageRepository extends EntityRepository
{
    public function getImagesFromGallery($slug)
    {
        $qb = $this->createQueryBuilder('i')
            ->select('i, g')
            ->leftJoin('i.gallery', 'g')
            ->where('g.slug = :slug')
            ->setParameter('slug', $slug);

        return $qb->getQuery()->getArrayResult();
    }
}