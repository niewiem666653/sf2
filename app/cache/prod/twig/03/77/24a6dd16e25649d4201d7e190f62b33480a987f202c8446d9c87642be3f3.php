<?php

/* ComponentsGalleryBundle::base.html.twig */
class __TwigTemplate_037724a6dd16e25649d4201d7e190f62b33480a987f202c8446d9c87642be3f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'js' => array($this, 'block_js'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<html>
<head>
";
        // line 3
        $this->displayBlock('js', $context, $blocks);
        // line 5
        echo "</head>

<body>
";
        // line 8
        $this->displayBlock('body', $context, $blocks);
        // line 10
        echo "</body>

</html>";
    }

    // line 3
    public function block_js($context, array $blocks = array())
    {
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "ComponentsGalleryBundle::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  40 => 3,  34 => 10,  32 => 8,  27 => 5,  25 => 3,  21 => 1,);
    }
}
