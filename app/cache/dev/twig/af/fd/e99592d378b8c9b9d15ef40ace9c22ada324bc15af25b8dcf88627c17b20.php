<?php

/* ComponentsGalleryBundle:Gallery:galleryList.html.twig */
class __TwigTemplate_affde99592d378b8c9b9d15ef40ace9c22ada324bc15af25b8dcf88627c17b20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ComponentsGalleryBundle::base.html.twig", "ComponentsGalleryBundle:Gallery:galleryList.html.twig", 1);
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
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["galleryList"]) ? $context["galleryList"] : $this->getContext($context, "galleryList")));
        foreach ($context['_seq'] as $context["_key"] => $context["gallery"]) {
            // line 4
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["gallery"], "title", array()), "html", null, true);
            echo "
        ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["gallery"], "images", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                // line 6
                echo "            ";
                echo $this->env->getExtension('dump')->dump($this->env, $context, $context["image"]);
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['gallery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ComponentsGalleryBundle:Gallery:galleryList.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 8,  45 => 6,  41 => 5,  36 => 4,  31 => 3,  28 => 2,  11 => 1,);
    }
}
