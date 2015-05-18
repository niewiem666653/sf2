<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 18.05.15
 * Time: 10:13
 */

namespace Components\GalleryBundle\DataFixtures;


use Components\GalleryBundle\Entity\Gallery;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class GalleryFixtures extends AbstractFixture implements OrderedFixtureInterface{

    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $galleryList = array(
            array(
                'title' => 'galeira 1',
                'slug' => 'galeria-1',
                'description' => 'lorem ipsum asd as dasd iaso diasodi aoishd oiasjd oiasj doijas oi'
            ),
            array(
                'title' => 'galeira 2',
                'slug' => 'galeria-2',
                'description' => 'lorem ipsum asd as dasd iaso diasodi aoishd oiasjd oiasj doijas oi'
            ),
            array(
                'title' => 'galeira 3',
                'slug' => 'galeria-3',
                'description' => 'lorem ipsum asd as dasd iaso diasodi aoishd oiasjd oiasj doijas oi'
            ),
            array(
                'title' => 'galeira 4',
                'slug' => 'galeria-4',
                'description' => 'lorem ipsum asd as dasd iaso diasodi aoishd oiasjd oiasj doijas oi'
            ),
        );

        foreach ($galleryList as $key => $details)
        {
            $Gallery = new Gallery();

            $Gallery->setTitle($details['title'])
                ->setSlug($details['slug'])
                ->setDescription($details['description']);

            $this->addReference('gallery_'.$details['slug'], $Gallery);

            $manager->persist($Gallery);
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
        return 0;
    }
}