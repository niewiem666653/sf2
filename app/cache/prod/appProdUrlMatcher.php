<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // components_gallery_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'components_gallery_default_index')), array (  '_controller' => 'Components\\GalleryBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/gallery')) {
            // gallery_list_component
            if ($pathinfo === '/gallery') {
                return array (  '_controller' => 'Components\\GalleryBundle\\Controller\\GalleryController::galleryListAction',  '_route' => 'gallery_list_component',);
            }

            // gallery_component
            if (preg_match('#^/gallery/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gallery_component')), array (  '_controller' => 'Components\\GalleryBundle\\Controller\\GalleryController::galleryAction',));
            }

        }

        // add_image_component
        if ($pathinfo === '/add-image') {
            return array (  '_controller' => 'Components\\GalleryBundle\\Controller\\GalleryController::addGalleryAction',  '_route' => 'add_image_component',);
        }

        // _uploader_upload_gallery
        if ($pathinfo === '/_uploader/gallery/upload') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not__uploader_upload_gallery;
            }

            return array (  '_controller' => 'oneup_uploader.controller.gallery:upload',  '_format' => 'json',  '_route' => '_uploader_upload_gallery',);
        }
        not__uploader_upload_gallery:

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
