<?php

/* ComponentsGalleryBundle:Gallery:addGallery.html.twig */
class __TwigTemplate_3c1027c07814b31a0a757b407b03d7e35f01ded829ebfef85cc001b4ede15898 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ComponentsGalleryBundle::base.html.twig", "ComponentsGalleryBundle:Gallery:addGallery.html.twig", 1);
        $this->blocks = array(
            'js' => array($this, 'block_js'),
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
    public function block_js($context, array $blocks = array())
    {
        // line 4
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    ";
        // line 6
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function()
        {
            \$('#fileupload').fileupload({});


        });
    </script>
    <input id=\"fileupload\" type=\"file\" name=\"files[]\" data-url=\"\" multiple />
";
    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        // line 23
        echo "
";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('oneup_uploader')->endpoint("gallery"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ComponentsGalleryBundle:Gallery:addGallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 24,  66 => 23,  63 => 22,  48 => 9,  44 => 8,  40 => 7,  35 => 6,  32 => 4,  29 => 3,  11 => 1,);
    }
}
