<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\xampp\htdocs\islamic/themes/islamic/layouts/en-homepage.htm */
class __TwigTemplate_3ca809b421b16edb3d7fa2c688498b6ff161c00f74401515d24ecf0acfe92a70 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title> ទូរទស្សន៏អ៊ីស្លាម​ - ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "meta_title", [], "any", false, false, false, 5), "html", null, true);
        echo "​​​​​ </title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "meta_description", [], "any", false, false, false, 6), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "meta_title", [], "any", false, false, false, 7), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"ទូរទស្សន៏អ៊ីស្លាម\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"ទូរទស្សន៏អ៊ីស្លាម\">
        <meta name=\"Designer\" content=\"FirstGenNet, www.firstgennet.com\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/systems/favicon.ico");
        echo "\">

        <link href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/compiled/css/style.css");
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/stepcarousel.css");
        echo "\" rel=\"stylesheet\">

        <script src=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/ddsmoothmenu.js");
        echo "\"></script>
        <script src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-1.8.0.min.js");
        echo "\"></script>

        <script src=\"";
        // line 21
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "~/plugins/clarknguyen/slider/assets/js/slider.js"]);
        echo "\"></script>
        <script src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/compiled/js/all.js");
        echo "\"></script>

        <script src=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/stepcarousel.js");
        echo "\"></script>
        <script>
            stepcarousel.setup({
              galleryid: 'slider', //id of carousel DIV
              beltclass: 'belt', //class of inner \"belt\" DIV containing all the panel DIVs
              panelclass: 'panel', //class of panel DIVs each holding content
              autostep: {enable:true, moveby:1, pause:3000},
              panelbehavior: {speed:500, wraparound:false, persist:true},
              defaultbuttons: {enable: true, moveby: 1 ,leftnav: [\"";
        // line 32
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/systems/prev_btn.png");
        echo "\", 0, 80], rightnav: [\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/systems/next_btn.png");
        echo "\", -40, 80]},
              statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
              contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']
            })
        </script>

        <script>
          WebFontConfig = {
                            google: { families: [ 'Suwannaphum::khmer' ] }
                          };  (function() {
                                            var wf = document.createElement('script');
                                            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                                            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                                            wf.type = 'text/javascript';
                                            wf.async = 'true';
                                            var s = document.getElementsByTagName('script')[0];
                                            s.parentNode.insertBefore(wf, s);
                                          })();
        </script>
    </head>
    <body>
      <script>
        ddsmoothmenu.init({
          mainmenuid: \"top-btn\", //menu DIV id
          orientation: 'h', //Horizontal or vertical menu: Set to \"h\" or \"v\"
          classname: 'top-btn', //class added to menu's outer DIV
          //customtheme: [\"#1c5a80\", \"#18374a\"],
          contentsource: \"markup\", //\"markup\" or [\"container_id\", \"path_to_menu_file\"]

        })
        ddsmoothmenu.init({
          mainmenuid: \"right-menu\", //Menu DIV id
          orientation: 'v', //Horizontal or vertical menu: Set to \"h\" or \"v\"
          classname: 'right-menu', //class added to menu's outer DIV
          //customtheme: [\"#804000\", \"#482400\"],
          contentsource: \"markup\" //\"markup\" or [\"container_id\", \"path_to_menu_file\"]
        })
      </script>


        ";
        // line 72
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 73
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("en-nav-menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 74
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 75
        echo "

        <div class=\"main\">
        \t<div class=\"content\">

            ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("latest-news-section-homepage"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "            ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("about-islam-section-homepage"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 82
        echo "            ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("islam-bible-section-homepage"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 83
        echo "            ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("video-youtube-section-homepage"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 84
        echo "
          </div>

          <div class=\"right\">
            ";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content-right-section-announcement"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "            ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content-right-section-q&a"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 90
        echo "            ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content-right-section-prayer-time"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 91
        echo "            ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content-right-section-files-download"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 92
        echo "            ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content-right-section-facebook-page"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 93
        echo "          </div>
        </div>


        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 99
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 100
        echo "        </section>

        <!-- Footer -->
        ";
        // line 103
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 104
        echo "


        ";
        // line 107
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="' . Request::getBasePath() . '/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="' . Request::getBasePath() .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 108
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 109
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/layouts/en-homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 109,  256 => 108,  245 => 107,  240 => 104,  236 => 103,  231 => 100,  229 => 99,  221 => 93,  216 => 92,  211 => 91,  206 => 90,  201 => 89,  197 => 88,  191 => 84,  186 => 83,  181 => 82,  176 => 81,  172 => 80,  165 => 75,  160 => 74,  155 => 73,  151 => 72,  106 => 32,  95 => 24,  90 => 22,  86 => 21,  81 => 19,  77 => 18,  73 => 17,  68 => 15,  64 => 14,  59 => 12,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title> ទូរទស្សន៏អ៊ីស្លាម​ - {{ this.page.meta_title }}​​​​​ </title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"ទូរទស្សន៏អ៊ីស្លាម\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <meta name=\"generator\" content=\"ទូរទស្សន៏អ៊ីស្លាម\">
        <meta name=\"Designer\" content=\"FirstGenNet, www.firstgennet.com\">
        <link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"{{ 'assets/images/systems/favicon.ico'|theme }}\">

        <link href=\"{{ 'assets/compiled/css/style.css'|theme }}\" rel=\"stylesheet\">
        <link href=\"{{ 'assets/css/stepcarousel.css'|theme }}\" rel=\"stylesheet\">

        <script src=\"{{'assets/js/ddsmoothmenu.js'|theme}}\"></script>
        <script src=\"{{'assets/js/jquery.js'|theme}}\"></script>
        <script src=\"{{'assets/js/jquery-1.8.0.min.js'|theme}}\"></script>

        <script src=\"{{['~/plugins/clarknguyen/slider/assets/js/slider.js']|theme }}\"></script>
        <script src=\"{{'assets/compiled/js/all.js'|theme }}\"></script>

        <script src=\"{{'assets/js/stepcarousel.js'|theme}}\"></script>
        <script>
            stepcarousel.setup({
              galleryid: 'slider', //id of carousel DIV
              beltclass: 'belt', //class of inner \"belt\" DIV containing all the panel DIVs
              panelclass: 'panel', //class of panel DIVs each holding content
              autostep: {enable:true, moveby:1, pause:3000},
              panelbehavior: {speed:500, wraparound:false, persist:true},
              defaultbuttons: {enable: true, moveby: 1 ,leftnav: [\"{{'assets/images/systems/prev_btn.png'|theme}}\", 0, 80], rightnav: [\"{{'assets/images/systems/next_btn.png'|theme}}\", -40, 80]},
              statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
              contenttype: ['inline'] //content setting ['inline'] or ['external', 'path_to_external_file']
            })
        </script>

        <script>
          WebFontConfig = {
                            google: { families: [ 'Suwannaphum::khmer' ] }
                          };  (function() {
                                            var wf = document.createElement('script');
                                            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
                                            '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
                                            wf.type = 'text/javascript';
                                            wf.async = 'true';
                                            var s = document.getElementsByTagName('script')[0];
                                            s.parentNode.insertBefore(wf, s);
                                          })();
        </script>
    </head>
    <body>
      <script>
        ddsmoothmenu.init({
          mainmenuid: \"top-btn\", //menu DIV id
          orientation: 'h', //Horizontal or vertical menu: Set to \"h\" or \"v\"
          classname: 'top-btn', //class added to menu's outer DIV
          //customtheme: [\"#1c5a80\", \"#18374a\"],
          contentsource: \"markup\", //\"markup\" or [\"container_id\", \"path_to_menu_file\"]

        })
        ddsmoothmenu.init({
          mainmenuid: \"right-menu\", //Menu DIV id
          orientation: 'v', //Horizontal or vertical menu: Set to \"h\" or \"v\"
          classname: 'right-menu', //class added to menu's outer DIV
          //customtheme: [\"#804000\", \"#482400\"],
          contentsource: \"markup\" //\"markup\" or [\"container_id\", \"path_to_menu_file\"]
        })
      </script>


        {% partial \"header\" %}
        {% partial \"en-nav-menu\" %}
        {% partial \"slider\" %}


        <div class=\"main\">
        \t<div class=\"content\">

            {% partial \"latest-news-section-homepage\" %}
            {% partial \"about-islam-section-homepage\" %}
            {% partial \"islam-bible-section-homepage\" %}
            {% partial \"video-youtube-section-homepage\" %}

          </div>

          <div class=\"right\">
            {% partial \"content-right-section-announcement\" %}
            {% partial \"content-right-section-q&a\" %}
            {% partial \"content-right-section-prayer-time\" %}
            {% partial \"content-right-section-files-download\" %}
            {% partial \"content-right-section-facebook-page\" %}
          </div>
        </div>


        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        {% partial \"footer\" %}



        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\islamic/themes/islamic/layouts/en-homepage.htm", "");
    }
}
