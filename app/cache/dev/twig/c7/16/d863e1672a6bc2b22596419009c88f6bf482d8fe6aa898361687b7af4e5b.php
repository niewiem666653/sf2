<?php

/* ComponentsGalleryBundle:FileManager:test.html.twig */
class __TwigTemplate_c716d863e1672a6bc2b22596419009c88f6bf482d8fe6aa898361687b7af4e5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ComponentsGalleryBundle::base.html.twig", "ComponentsGalleryBundle:FileManager:test.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
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
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
";
    }

    // line 7
    public function block_js($context, array $blocks = array())
    {
        // line 8
        echo "
";
    }

    public function getTemplateName()
    {
        return "ComponentsGalleryBundle:FileManager:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  39 => 7,  32 => 4,  29 => 3,  11 => 1,);
    }
}
