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

/* C:\xampp\htdocs\islamic/themes/islamic/layouts/ceo-message.htm */
class __TwigTemplate_eb25179c3fce4727d57ba947f2bb5557075e6d91799fa04af27357a0f5e033ff extends \Twig\Template
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
        <link href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/css/pagination.css");
        echo "\" rel=\"stylesheet\">

        <script src=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/ddsmoothmenu.js");
        echo "\"></script>
        <script src=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 20
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/jquery-1.8.0.min.js");
        echo "\"></script>

        <script src=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "~/plugins/clarknguyen/slider/assets/js/slider.js"]);
        echo "\"></script>
        <script src=\"";
        // line 23
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/compiled/js/all.js");
        echo "\"></script>

        <script src=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/stepcarousel.js");
        echo "\"></script>
        <script src=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/js/pagination.js");
        echo "\"></script>

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
        // line 62
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 63
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("nav-menu"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "        ";
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("slider"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 65
        echo "

        <div class=\"main\">
        \t<div class=\"content\">
          ";
        // line 69
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content-left-section-about-ceo"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 70
        echo "
          </div>

          <div class=\"right\">


            ";
        // line 76
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("content-right-section-facebook-page"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 77
        echo "          </div>

        </div>


        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 84
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 85
        echo "        </section>

        <!-- Footer -->
        ";
        // line 88
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 89
        echo "


        ";
        // line 92
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
        // line 93
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 94
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/layouts/ceo-message.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 94,  214 => 93,  203 => 92,  198 => 89,  194 => 88,  189 => 85,  187 => 84,  178 => 77,  174 => 76,  166 => 70,  162 => 69,  156 => 65,  151 => 64,  146 => 63,  142 => 62,  103 => 26,  99 => 25,  94 => 23,  90 => 22,  85 => 20,  81 => 19,  77 => 18,  72 => 16,  68 => 15,  64 => 14,  59 => 12,  51 => 7,  47 => 6,  43 => 5,  37 => 1,);
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
        <link href=\"{{ 'assets/css/pagination.css'|theme }}\" rel=\"stylesheet\">

        <script src=\"{{'assets/js/ddsmoothmenu.js'|theme}}\"></script>
        <script src=\"{{'assets/js/jquery.js'|theme}}\"></script>
        <script src=\"{{'assets/js/jquery-1.8.0.min.js'|theme}}\"></script>

        <script src=\"{{['~/plugins/clarknguyen/slider/assets/js/slider.js']|theme }}\"></script>
        <script src=\"{{'assets/compiled/js/all.js'|theme }}\"></script>

        <script src=\"{{'assets/js/stepcarousel.js'|theme}}\"></script>
        <script src=\"{{'assets/js/pagination.js'|theme}}\"></script>

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
        {% partial \"nav-menu\" %}
        {% partial \"slider\" %}


        <div class=\"main\">
        \t<div class=\"content\">
          {% partial \"content-left-section-about-ceo\" %}

          </div>

          <div class=\"right\">


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
</html>", "C:\\xampp\\htdocs\\islamic/themes/islamic/layouts/ceo-message.htm", "");
    }
}
