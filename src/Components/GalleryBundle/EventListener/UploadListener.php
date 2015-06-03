<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 20.05.15
 * Time: 10:32
 */

namespace Components\GalleryBundle\EventListener;


use Oneup\UploaderBundle\Event\PostPersistEvent;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class UploadListener {

    public function __construct($doctrine)
    {
        $this->doctrine = $doctrine;
    }


    public function onUpload(PostPersistEvent $event)
    {

        $request = $event->getRequest();
        $gallery = $request->get('gallery');


    }
}