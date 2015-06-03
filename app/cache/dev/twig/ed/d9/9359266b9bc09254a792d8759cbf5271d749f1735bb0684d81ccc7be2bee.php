<?php

/* ComponentsGalleryBundle:FileManager:getPath.html.twig */
class __TwigTemplate_edd99359266b9bc09254a792d8759cbf5271d749f1735bb0684d81ccc7be2bee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ComponentsGalleryBundle::base.html.twig", "ComponentsGalleryBundle:FileManager:getPath.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ComponentsGalleryBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
    }

    public function getTemplateName()
    {
        return "ComponentsGalleryBundle:FileManager:getPath.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,  11 => 1,);
    }
}
