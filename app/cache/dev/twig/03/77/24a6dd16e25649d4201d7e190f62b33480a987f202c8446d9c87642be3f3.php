<?php

/* ComponentsGalleryBundle::base.html.twig */
class __TwigTemplate_037724a6dd16e25649d4201d7e190f62b33480a987f202c8446d9c87642be3f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'css' => array($this, 'block_css'),
            'body' => array($this, 'block_body'),
            'js' => array($this, 'block_js'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
";
        // line 2
        $this->displayBlock('css', $context, $blocks);
        // line 6
        echo "
<head>

</head>

<body>
";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "

";
        // line 16
        $this->displayBlock('js', $context, $blocks);
        // line 34
        echo "</body>

</html>";
    }

    // line 2
    public function block_css($context, array $blocks = array())
    {
        // line 3
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/css/bootstrap.css"), "html", null, true);
        echo "\"/>
    <link rel=\"stylesheet\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/css/main.css"), "html", null, true);
        echo "\"/>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
    }

    // line 16
    public function block_js($context, array $blocks = array())
    {
        // line 17
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/jquery-1.11.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 20
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/jquery.iframe-transport.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/jquery.fileupload.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/componentsgallery/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 24
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
        return "ComponentsGalleryBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  94 => 24,  90 => 23,  86 => 22,  82 => 21,  77 => 20,  71 => 17,  68 => 16,  63 => 12,  57 => 4,  52 => 3,  49 => 2,  43 => 34,  41 => 16,  37 => 14,  35 => 12,  27 => 6,  25 => 2,  22 => 1,);
    }
}
