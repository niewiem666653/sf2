<?php

namespace Components\GalleryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GalleryController extends Controller
{
    /**
     * @return array
     *
     * @Route("/gallery-list", name="gallery_list_component")
     * @Template()
     */
    public function galleryList()
    {
        return array();
    }
}
