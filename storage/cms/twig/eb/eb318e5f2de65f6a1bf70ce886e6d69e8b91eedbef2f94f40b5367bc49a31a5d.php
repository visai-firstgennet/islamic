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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/header.htm */
class __TwigTemplate_9f931cb6f2b1b99c502a07ede76fa62d1addfa430e0a7accdb6a30b5a50fcc59 extends \Twig\Template
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
        echo "<div class=\"head-wrap\">
  <div class=\"head\">
    <div class=\"logo\">
      <a href=\"";
        // line 4
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/systems/logo.png");
        echo "\"></a>
    </div>

    <div class=\"languages\">
      <a class=\"";
        // line 8
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 8), "id", [], "any", false, false, false, 8) == "homepage")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\"> <img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/systems/flag-cambodia.jpg");
        echo "\" /> ភាសាខ្មែរ</a>
      <a class=\"";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == "en-homepage")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/systems/flag-england.jpg");
        echo "\" /> English</a>
      <div class=\"clear\"></div>
    </div>
    <div style=\"clear:right\"></div>

    ";
        // line 14
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 14), "id", [], "any", false, false, false, 14) == "homepage")) {
            // line 15
            echo "      <div class=\"search-form\">
        <form action=\"";
            // line 16
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
            echo "\">
          <div>
            <input type=\"hidden\" name=\"ie\" value=\"UTF-8\" />
            <input type=\"text\" name=\"q\" class=\"search-box\" value=\"\" />
            <input type=\"submit\" name=\"sa\" value=\"ស្វែងរក\" class=\"search-btn button\" />
          </div>
        </form>
      </div>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26) == "en-homepage")) {
            // line 27
            echo "      <div class=\"search-form\">
        <form action=\"";
            // line 28
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
            echo "\">
          <div>
            <input type=\"hidden\" name=\"ie\" value=\"UTF-8\" />
            <input type=\"text\" name=\"q\" class=\"search-box\" value=\"\" />
            <input type=\"submit\" name=\"sa\" value=\"Search\" class=\"search-btn button\" />
          </div>
        </form>
      </div>
    ";
        }
        // line 37
        echo "
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 37,  100 => 28,  97 => 27,  95 => 26,  92 => 25,  80 => 16,  77 => 15,  75 => 14,  61 => 9,  51 => 8,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"head-wrap\">
  <div class=\"head\">
    <div class=\"logo\">
      <a href=\"{{ 'homepage'|page}}\"><img src=\"{{ 'assets/images/systems/logo.png'|theme }}\"></a>
    </div>

    <div class=\"languages\">
      <a class=\"{% if this.page.id == 'homepage' %} current {% endif %}\" href=\"{{ 'homepage'|page}}\"> <img src=\"{{ 'assets/images/systems/flag-cambodia.jpg'|theme }}\" /> ភាសាខ្មែរ</a>
      <a class=\"{% if this.page.id == 'en-homepage' %} current {% endif %}\" href=\"{{ 'en-homepage'|page}}\"><img src=\"{{ 'assets/images/systems/flag-england.jpg'|theme }}\" /> English</a>
      <div class=\"clear\"></div>
    </div>
    <div style=\"clear:right\"></div>

    {% if this.page.id == 'homepage' %}
      <div class=\"search-form\">
        <form action=\"{{ 'homepage'|page}}\">
          <div>
            <input type=\"hidden\" name=\"ie\" value=\"UTF-8\" />
            <input type=\"text\" name=\"q\" class=\"search-box\" value=\"\" />
            <input type=\"submit\" name=\"sa\" value=\"ស្វែងរក\" class=\"search-btn button\" />
          </div>
        </form>
      </div>
    {% endif %}

    {% if this.page.id == 'en-homepage' %}
      <div class=\"search-form\">
        <form action=\"{{ 'en-homepage'|page}}\">
          <div>
            <input type=\"hidden\" name=\"ie\" value=\"UTF-8\" />
            <input type=\"text\" name=\"q\" class=\"search-box\" value=\"\" />
            <input type=\"submit\" name=\"sa\" value=\"Search\" class=\"search-btn button\" />
          </div>
        </form>
      </div>
    {% endif %}

  </div>
</div>", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/header.htm", "");
    }
}
