<?php

/* ComponentsGalleryBundle:Gallery:gallery.html.twig */
class __TwigTemplate_9fcf1a4adbe04abef40ee3e995a72304627fb645e30c6e4556db3ab35f00cac2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ComponentsGalleryBundle::base.html.twig", "ComponentsGalleryBundle:Gallery:gallery.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    ";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["gallery"]) ? $context["gallery"] : $this->getContext($context, "gallery")), "images", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 5
            echo "        ";
            echo $this->env->getExtension('dump')->dump($this->env, $context, $context["image"]);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "
";
    }

    public function getTemplateName()
    {
        return "ComponentsGalleryBundle:Gallery:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  38 => 5,  34 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
