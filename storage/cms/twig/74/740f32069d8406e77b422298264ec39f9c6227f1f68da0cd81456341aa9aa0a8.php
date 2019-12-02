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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/content-right-section-facebook-page.htm */
class __TwigTemplate_80600387bdde0c25d094e96f46db466e1b706b24931f59e31b240578be6bc37f extends \Twig\Template
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
        echo "<div class=\"right-block\">
\t";
        // line 2
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 2), "id", [], "any", false, false, false, 2) == "homepage")) {
            // line 3
            echo "\t<div class=\"right-title\">ទំព័រហ្វេសប៊ុករបស់យើង</div>
\t";
        }
        // line 5
        echo "
\t";
        // line 6
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6) == "en-homepage")) {
            // line 7
            echo "\t<div class=\"right-title\">Our Facebook Page</div>
\t";
        }
        // line 9
        echo "
\t<div class=\"right-body\">
\t<script src=\"http://connect.facebook.net/en_US/all.js#xfbml=1\"></script><fb:like-box href=\"https://www.facebook.com/IslamictvnetworkCambodia/\" width=\"300\" show_faces=\"true\" stream=\"false\" header=\"false\"></fb:like-box>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/content-right-section-facebook-page.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  51 => 7,  49 => 6,  46 => 5,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"right-block\">
\t{% if this.page.id == 'homepage' %}
\t<div class=\"right-title\">ទំព័រហ្វេសប៊ុករបស់យើង</div>
\t{% endif %}

\t{% if this.page.id == 'en-homepage' %}
\t<div class=\"right-title\">Our Facebook Page</div>
\t{% endif %}

\t<div class=\"right-body\">
\t<script src=\"http://connect.facebook.net/en_US/all.js#xfbml=1\"></script><fb:like-box href=\"https://www.facebook.com/IslamictvnetworkCambodia/\" width=\"300\" show_faces=\"true\" stream=\"false\" header=\"false\"></fb:like-box>
\t</div>
</div>", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/content-right-section-facebook-page.htm", "");
    }
}
