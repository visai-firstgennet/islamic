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

/* C:\xampp\htdocs\islamic/plugins/clarknguyen/slider/components/slider/default.htm */
class __TwigTemplate_b526d6d03755b48e8e3febd0a461a3cef836ffae7f4c074d4f01f4719feb1eb7 extends \Twig\Template
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
        if ((($context["sliderType"] ?? null) == "bxSlider")) {
            // line 2
            echo "
<ul class=\"bxslider\" id=\"bxSlider";
            // line 3
            echo twig_escape_filter($this->env, ($context["sliderBlockId"] ?? null), "html", null, true);
            echo "\" data-sliderpager=\"";
            echo twig_escape_filter($this->env, ($context["sliderPager"] ?? null), "html", null, true);
            echo "\" data-sliderspeed=\"";
            echo twig_escape_filter($this->env, ($context["sliderSpeed"] ?? null), "html", null, true);
            echo "\" 
\tdata-sliderauto=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["sliderAuto"] ?? null), "html", null, true);
            echo "\" data-slidershownav=";
            echo twig_escape_filter($this->env, ($context["sliderShowNav"] ?? null), "html", null, true);
            echo ">
";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sliderItems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 6
                echo "\t<li>
\t\t";
                // line 7
                if ((($context["sliderAllowClickOpenLink"] ?? null) == "true")) {
                    // line 8
                    echo "\t\t<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link_when_click_on_image", [], "any", false, false, false, 8), "html", null, true);
                    echo "\" target=\"_blank\">
\t\t";
                }
                // line 10
                echo "
\t\t<img src=\"";
                // line 11
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "slider_image", [], "any", false, false, false, 11), "getPath", [], "method", false, false, false, 11), "html", null, true);
                echo "\" />

\t\t";
                // line 13
                if ((($context["sliderAllowClickOpenLink"] ?? null) == "true")) {
                    // line 14
                    echo "\t\t</a>
\t\t";
                }
                // line 16
                echo "
\t\t";
                // line 17
                if ((($context["sliderShowDescription"] ?? null) == "true")) {
                    echo "    
        <div class=\"caption1\"> 
        \t";
                    // line 19
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 19)) {
                        // line 20
                        echo "            <p>";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 20);
                        echo "</p>
            ";
                    }
                    // line 22
                    echo "            <div class=\"caption2\">";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 22);
                    echo "</div>
        </div>
        ";
                }
                // line 25
                echo "\t</li>
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "</ul>

";
        } else {
            // line 30
            echo "
<div class=\"callbacks_container\">
\t<ul class=\"rslides\" id=\"slider";
            // line 32
            echo twig_escape_filter($this->env, ($context["sliderBlockId"] ?? null), "html", null, true);
            echo "\" data-sliderpager=\"";
            echo twig_escape_filter($this->env, ($context["sliderPager"] ?? null), "html", null, true);
            echo "\" data-sliderspeed=\"";
            echo twig_escape_filter($this->env, ($context["sliderSpeed"] ?? null), "html", null, true);
            echo "\" 
\t\tdata-sliderauto=\"";
            // line 33
            echo twig_escape_filter($this->env, ($context["sliderAuto"] ?? null), "html", null, true);
            echo "\" data-slidershownav=";
            echo twig_escape_filter($this->env, ($context["sliderShowNav"] ?? null), "html", null, true);
            echo ">
\t";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["sliderItems"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 35
                echo "\t\t<li>
\t\t\t";
                // line 36
                if ((($context["sliderAllowClickOpenLink"] ?? null) == "true")) {
                    // line 37
                    echo "\t\t\t<a href=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link_when_click_on_image", [], "any", false, false, false, 37), "html", null, true);
                    echo "\" target=\"_blank\">
\t\t\t";
                }
                // line 39
                echo "
\t\t\t<img src=\"";
                // line 40
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "slider_image", [], "any", false, false, false, 40), "getPath", [], "method", false, false, false, 40), "html", null, true);
                echo "\" />

\t\t\t";
                // line 42
                if ((($context["sliderAllowClickOpenLink"] ?? null) == "true")) {
                    // line 43
                    echo "\t\t\t</a>
\t\t\t";
                }
                // line 45
                echo "
\t\t\t";
                // line 46
                if ((($context["sliderShowDescription"] ?? null) == "true")) {
                    // line 47
                    echo "\t\t\t<div class=\"caption\">
\t\t\t\t";
                    // line 48
                    if (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 48)) {
                        // line 49
                        echo "\t\t\t\t<p>";
                        echo twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 49);
                        echo "</p>
\t\t\t\t";
                    }
                    // line 51
                    echo "\t\t\t\t";
                    echo twig_get_attribute($this->env, $this->source, $context["item"], "description", [], "any", false, false, false, 51);
                    echo "
\t\t\t</div>
\t\t\t";
                }
                // line 54
                echo "\t\t</li>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "\t</ul>
</div>

";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/plugins/clarknguyen/slider/components/slider/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 56,  190 => 54,  183 => 51,  177 => 49,  175 => 48,  172 => 47,  170 => 46,  167 => 45,  163 => 43,  161 => 42,  156 => 40,  153 => 39,  147 => 37,  145 => 36,  142 => 35,  138 => 34,  132 => 33,  124 => 32,  120 => 30,  115 => 27,  108 => 25,  101 => 22,  95 => 20,  93 => 19,  88 => 17,  85 => 16,  81 => 14,  79 => 13,  74 => 11,  71 => 10,  65 => 8,  63 => 7,  60 => 6,  56 => 5,  50 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if sliderType == 'bxSlider' %}

<ul class=\"bxslider\" id=\"bxSlider{{ sliderBlockId }}\" data-sliderpager=\"{{ sliderPager }}\" data-sliderspeed=\"{{ sliderSpeed }}\" 
\tdata-sliderauto=\"{{ sliderAuto }}\" data-slidershownav={{ sliderShowNav }}>
{% for item in sliderItems %}
\t<li>
\t\t{% if sliderAllowClickOpenLink =='true' %}
\t\t<a href=\"{{ item.link_when_click_on_image }}\" target=\"_blank\">
\t\t{% endif %}

\t\t<img src=\"{{ item.slider_image.getPath() }}\" />

\t\t{% if sliderAllowClickOpenLink =='true' %}
\t\t</a>
\t\t{% endif %}

\t\t{% if sliderShowDescription == 'true' %}    
        <div class=\"caption1\"> 
        \t{% if item.title %}
            <p>{{ item.title|raw }}</p>
            {% endif %}
            <div class=\"caption2\">{{ item.description|raw }}</div>
        </div>
        {% endif %}
\t</li>
{% endfor %}
</ul>

{% else %}

<div class=\"callbacks_container\">
\t<ul class=\"rslides\" id=\"slider{{ sliderBlockId }}\" data-sliderpager=\"{{ sliderPager }}\" data-sliderspeed=\"{{ sliderSpeed }}\" 
\t\tdata-sliderauto=\"{{ sliderAuto }}\" data-slidershownav={{ sliderShowNav }}>
\t{% for item in sliderItems %}
\t\t<li>
\t\t\t{% if sliderAllowClickOpenLink =='true' %}
\t\t\t<a href=\"{{ item.link_when_click_on_image }}\" target=\"_blank\">
\t\t\t{% endif %}

\t\t\t<img src=\"{{ item.slider_image.getPath() }}\" />

\t\t\t{% if sliderAllowClickOpenLink =='true' %}
\t\t\t</a>
\t\t\t{% endif %}

\t\t\t{% if sliderShowDescription == 'true' %}
\t\t\t<div class=\"caption\">
\t\t\t\t{% if item.title %}
\t\t\t\t<p>{{ item.title|raw }}</p>
\t\t\t\t{% endif %}
\t\t\t\t{{ item.description|raw }}
\t\t\t</div>
\t\t\t{% endif %}
\t\t</li>
\t{% endfor %}
\t</ul>
</div>

{% endif %}", "C:\\xampp\\htdocs\\islamic/plugins/clarknguyen/slider/components/slider/default.htm", "");
    }
}
