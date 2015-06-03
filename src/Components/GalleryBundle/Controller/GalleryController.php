<?php

namespace Components\GalleryBundle\Controller;

use Oneup\UploaderBundle\Event\PostPersistEvent;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class GalleryController extends Controller
{
    /**
     * @return array
     *
     * @Route("/gallery", name="gallery_list_component")
     * @Template()
     */
    public function galleryListAction()
    {
        $GalleryListRepo = $this->getDoctrine()->getRepository('ComponentsGalleryBundle:Gallery');
        $GalleryList = $GalleryListRepo->GetGalleryList();

        return array('galleryList' => $GalleryList);
    }

    /**
     * @param $slug
     * @return array
     *
     * @Route("/gallery/{slug}", name="gallery_component")
     * @Template()
     */
    public function galleryAction($slug)
    {
        $GalleryRepo = $this->getDoctrine()->getRepository('ComponentsGalleryBundle:Gallery');
        $Gallery = $GalleryRepo->getGallery($slug);

        if ($Gallery === null)
        {
            throw new NotFoundHttpException('gallery not exist');
        }
        return array('gallery' => $Gallery);
    }

    /**
     * @return array
     *
     * @Route("/add-image", name="add_image_component")
     * @Template()
     */
    public function addGalleryAction()
    {
        $helper = $this->get('oneup_uploader.templating.uploader_helper');
        $endpoint = $helper->endpoint('gallery');
        $fileLocator = $this->get('file_locator');
        $path = $fileLocator->locate('@ComponentsGalleryBundle/Utils/UploadHandler.php');
        $url = $this->generateUrl('_uploader_upload_gallery');



        return array('path' => $path, 'url' => $url);
    }

    public function onUploadAction(PostPersistEvent $event)
    {
        $request = $event->getRequest();
        $gallery = $request->get('gallery');

        return array('gallery' => $gallery);
    }


}
