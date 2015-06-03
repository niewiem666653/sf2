<?php
/**
 * Created by PhpStorm.
 * User: ssss
 * Date: 21.05.15
 * Time: 17:29
 */

namespace Components\GalleryBundle\Utils;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Finder\Finder;

class FileHelper extends Controller
{


    public function __construct()
    {

    }

    public function filesList($path)
    {
        $fileList = new Finder();
        $fileList->files()->sortByChangedTime()->in($path);

        return $fileList;
    }

    public function dirsList($path)
    {
        $dirsList = new Finder();
        $dirsList->directories()->in($path);

        return $dirsList;
    }

    public function getMainDir()
    {
        return $this->get('kernel')->getRootDir();
    }
}