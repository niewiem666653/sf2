<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 18.05.15
 * Time: 10:21
 */

namespace Components\GalleryBundle\DataFixtures\ORM;



use Components\GalleryBundle\Entity\Image;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ImageFixtures extends AbstractFixture implements OrderedFixtureInterface{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $imagesList = array(
            array(
                'title' => 'iamge 1',
                'slug' => 'image-1',
                'gallery_id' => 'galeria-1',
                'description' => 'lorem ipsum asd as dasd iaso diasodi aoishd oiasjd oiasj doijas oi',
                'sequence' => 1
            ),
            array(
                'title' => 'iamge 2',
                'slug' => 'image-2',
                'gallery_id' => 'galeria-1',
                'description' => 'lorem ipsum asd as dasd iaso diasodi aoishd oiasjd oiasj doijas oi',
                'sequence' => 2
            ),
            array(
                'title' => 'iamge 3',
                'slug' => 'image-3',
                'gallery_id' => 'galeria-1',
                'description' => 'lorem ipsum asd as dasd iaso diasodi aoishd oiasjd oiasj doijas oi',
                'sequence' => 3
            ),
            array(
                'title' => 'iamge 4',
                'slug' => 'image-4',
                'gallery_id' => 'galeria-2',
                'description' => 'lorem ipsum asd as dasd iaso diasodi aoishd oiasjd oiasj doijas oi',
                'sequence' => 4
            ),
            array(
                'title' => 'iamge 5',
                'slug' => 'image-5',
                'gallery_id' => 'galeria-4',
                'description' => 'lorem ipum asd as dasd iaso diasodi aoishd oiasjd oiasj doijas oi',
                'sequence' => 5
            ),
            array(
                'title' => 'iamge 6',
                'slug' => 'image-6',
                'gallery_id' => 'galeria-4',
                'description' => 'lorem ipsum asd as dasd iaso diasodi aoishd oiasjd oiasj doijas oi',
                'sequence' => 6
            ),
        );

        foreach ($imagesList as $key => $details)
        {
            $Image = new Image();

            $Image->setTitle($details['title'])
                ->setSlug($details['slug'])
                ->setDescription($details['description'])
                ->setSequence($details['sequence']);
            $Image->setGallery($this->getReference('gallery_'.$details['gallery_id']));

            $manager->persist($Image);
        }

        $manager->flush();
    }

    /**
     * Get the order of this fixture
     *
     * @return integer
     */
    public function getOrder()
    {
        return 1;
    }
}