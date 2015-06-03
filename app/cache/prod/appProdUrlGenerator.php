<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'components_gallery_default_index' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Components\\GalleryBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gallery_list_component' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Components\\GalleryBundle\\Controller\\GalleryController::galleryListAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/gallery',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'gallery_component' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'Components\\GalleryBundle\\Controller\\GalleryController::galleryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/gallery',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'add_image_component' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Components\\GalleryBundle\\Controller\\GalleryController::addGalleryAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/add-image',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_uploader_upload_gallery' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'oneup_uploader.controller.gallery:upload',    '_format' => 'json',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_uploader/gallery/upload',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/app/example',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
