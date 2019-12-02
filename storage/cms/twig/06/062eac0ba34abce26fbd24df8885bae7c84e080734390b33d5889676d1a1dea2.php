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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/content-right-section-announcement.htm */
class __TwigTemplate_82930335038f25661cb2420166a1bf6a3f55993f1bb195870a4de747cb226fa1 extends \Twig\Template
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

\t\t";
        // line 3
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 3), "id", [], "any", false, false, false, 3) == "homepage")) {
            // line 4
            echo "\t\t<a href=\"announcement.html\" style=\"float:right; font-size:14px; padding:20px;\" class=\"link\">មើលទាំងអស់ &raquo;</a>
\t\t<div class=\"right-title\">ដំណឹងផ្សេងៗ
\t\t</div>
\t\t";
        }
        // line 8
        echo "
\t\t";
        // line 9
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == "en-homepage")) {
            // line 10
            echo "\t\t<a href=\"announcement.html\" style=\"float:right; font-size:14px; padding:20px;\" class=\"link\">Show All &raquo;</a>
\t\t<div class=\"right-title\">Announcement
\t\t</div>
\t\t";
        }
        // line 14
        echo "\t\t<div class=\"right-body\" style=\"\">
\t\t\t<div id=\"slider\" class=\"stepcarousel\">
\t\t\t\t<div class=\"belt\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/content-right-section-announcement.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  54 => 10,  52 => 9,  49 => 8,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"right-block\">

\t\t{% if this.page.id == 'homepage' %}
\t\t<a href=\"announcement.html\" style=\"float:right; font-size:14px; padding:20px;\" class=\"link\">មើលទាំងអស់ &raquo;</a>
\t\t<div class=\"right-title\">ដំណឹងផ្សេងៗ
\t\t</div>
\t\t{% endif %}

\t\t{% if this.page.id == 'en-homepage' %}
\t\t<a href=\"announcement.html\" style=\"float:right; font-size:14px; padding:20px;\" class=\"link\">Show All &raquo;</a>
\t\t<div class=\"right-title\">Announcement
\t\t</div>
\t\t{% endif %}
\t\t<div class=\"right-body\" style=\"\">
\t\t\t<div id=\"slider\" class=\"stepcarousel\">
\t\t\t\t<div class=\"belt\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/content-right-section-announcement.htm", "");
    }
}
