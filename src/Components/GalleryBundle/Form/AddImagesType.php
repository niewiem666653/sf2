<?php


namespace Components\GalleryBundle\Form;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class AddImagesType extends AbstractType{

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'addImages';
    }

    public function buildForm(FormBuilderInterface $builderInterface, array $options)
    {
        $builderInterface
            ->add('files', 'file', array(
                'label' => 'Files'
            ))
            ->add('addImages', 'submit', array(
                'label' => 'Dodaj'
            ));
    }
}