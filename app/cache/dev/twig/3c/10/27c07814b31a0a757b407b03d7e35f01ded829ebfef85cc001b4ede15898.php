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

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <input id=\"fileupload\" type=\"file\" name=\"files[]\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('oneup_uploader')->endpoint("gallery"), "html", null, true);
        echo "\" multiple />
";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('oneup_uploader')->endpoint("gallery"), "html", null, true);
        echo "
";
    }

    // line 12
    public function block_js($context, array $blocks = array())
    {
        // line 13
        echo "    <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    ";
        // line 15
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/main.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function()
        {
            \$('#fileupload').fileupload({});


        });
    </script>

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
        return array (  62 => 18,  58 => 17,  54 => 16,  49 => 15,  46 => 13,  43 => 12,  37 => 8,  32 => 7,  29 => 6,  11 => 1,);
    }
}
