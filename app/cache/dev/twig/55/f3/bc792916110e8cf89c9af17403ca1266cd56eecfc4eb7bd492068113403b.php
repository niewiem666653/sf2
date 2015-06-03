<?php

/* ComponentsGalleryBundle:FileManager:fileManager.html.twig */
class __TwigTemplate_55f3bc792916110e8cf89c9af17403ca1266cd56eecfc4eb7bd492068113403b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ComponentsGalleryBundle::base.html.twig", "ComponentsGalleryBundle:FileManager:fileManager.html.twig", 1);
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

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "
    <div id=\"main\">
        <div id=\"file-manager\" class=\"container-fluid\">
            <div id=\"file-manager-dirs\" class=\"col-lg-2 col-xs-4 col-sm-4\">
                ";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dirs"]) ? $context["dirs"] : $this->getContext($context, "dirs")));
        foreach ($context['_seq'] as $context["_key"] => $context["dir"]) {
            // line 8
            echo "                    <div class=\"btn-default  btn-sm\" data-dir=\"";
            echo twig_escape_filter($this->env, $context["dir"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["dir"], "html", null, true);
            echo "</div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dir'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
            </div>
            <div id=\"left\" class=\"col-lg-6 col-xs-4 col-sm-4\">
                <div id=\"file-manager-files\">

                    ";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["files"]) ? $context["files"] : $this->getContext($context, "files")));
        foreach ($context['_seq'] as $context["_key"] => $context["file"]) {
            // line 16
            echo "                        <div class=\"btn-default  btn-sm\"> ";
            echo twig_escape_filter($this->env, $context["file"], "html", null, true);
            echo " </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['file'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "                </div>
            </div>
            <div class=\"col-lg-4 col-xs-4 col-sm-4\">

                <div class=\"box-image\">
                    <div class=\"ajax-loader\"></div>
                </div>

            </div>

        </div>
    </div>
    <a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getPath("file_manager");
        echo "/\">asdad</a>

";
    }

    // line 33
    public function block_js($context, array $blocks = array())
    {
        // line 34
        echo "   ";
        $this->displayParentBlock("js", $context, $blocks);
        echo "
    <script>
        \$(document).ready(function() {

            function convertUrlPlus (url) {
                url = url.toString();
                url = url.replace(/\\//g, '+');
                return url;
            }

            \$('#file-manager-dirs .btn-default').on('click', function() {
                currentDir = \$(this).text();
                currentDirName = \$(this).text();
//                console.log(convertUrlPlus(currentDir));
                \$('#file-manager-dirs .btn-default').removeClass('active');
                \$(this).addClass('active');

                \$.ajax({
                    method: \"POST\",
                    url: \"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("files_list");
        echo "\" +'/'+ currentDir,
                    success: function( data ){

                        \$('#file-manager-files').fadeOut('fast', function () {

                            \$('#file-manager-files').remove();
                            \$('#left').append('<div id=\"file-manager-files\">');

                            \$.each(data, function(i, item)
                            {
                                console.log( item);
                                \$('#file-manager-files')
                                        .append(
                                        \$('<div class=\"btn-default btn-sm\">').text(item).fadeIn('fast')

                                );


                            });
                            \$('#file-manager-files div').on('click', function() {
                                currentFileName = \$(this).text();
//                                    console.log(currentFile);
//                                    console.log(currentdirName);

                                currentImage = \"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("uploads"), "html", null, true);
        echo "/\" + currentDirName +'/'+ currentFileName;

                                ";
        // line 80
        echo "                                \$('#file-manager-files .btn-default').removeClass('active');

                                \$(this).addClass('active');

                                \$('.box-image img').remove();
                                \$('.box-image').append('<img>');
                                \$('.box-image img').attr(\"src\", currentImage);


                            });


                        });


                    }

                })
                        .done(function( data ) {







                        });


                ";
        // line 110
        echo "                    ";
        // line 111
        echo "                    ";
        // line 112
        echo "                ";
        // line 113
        echo "


                ";
        // line 117
        echo "                ";
        // line 118
        echo "                    ";
        // line 119
        echo "                ";
        // line 120
        echo "                ";
        // line 121
        echo "


            });


        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "ComponentsGalleryBundle:FileManager:fileManager.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 121,  200 => 120,  198 => 119,  196 => 118,  194 => 117,  189 => 113,  187 => 112,  185 => 111,  183 => 110,  152 => 80,  147 => 77,  120 => 53,  97 => 34,  94 => 33,  87 => 30,  73 => 18,  64 => 16,  60 => 15,  53 => 10,  42 => 8,  38 => 7,  32 => 3,  29 => 2,  11 => 1,);
    }
}
