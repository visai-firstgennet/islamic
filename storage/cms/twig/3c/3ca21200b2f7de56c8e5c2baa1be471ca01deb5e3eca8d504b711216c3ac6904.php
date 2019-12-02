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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/content-right-section-prayer-time.htm */
class __TwigTemplate_1a4fbe9ef267005ba577346e155364d917453c79ec1218dae4c09560dccaf359 extends \Twig\Template
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
\t\t<div class=\"right-title\" style=\"background-image:url(";
        // line 2
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/systems/prayer-time-head-kh.jpg");
        echo "); height:10px\"></div>
\t\t<div style=\"background:url(";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/systems/prayer-time.jpg");
        echo ") center top; padding:5px\">
\t\t\t<iframe style=\"width: 320px; height: 358px; border: 1px solid #ddd;\" frameBorder=\"0\" scrolling=\"no\" src=\"https://www.islamicfinder.org/prayer-widget/\"> </iframe>
\t\t</div>
\t</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/content-right-section-prayer-time.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"right-block\">
\t\t<div class=\"right-title\" style=\"background-image:url({{'assets/images/systems/prayer-time-head-kh.jpg'|theme}}); height:10px\"></div>
\t\t<div style=\"background:url({{'assets/images/systems/prayer-time.jpg'|theme}}) center top; padding:5px\">
\t\t\t<iframe style=\"width: 320px; height: 358px; border: 1px solid #ddd;\" frameBorder=\"0\" scrolling=\"no\" src=\"https://www.islamicfinder.org/prayer-widget/\"> </iframe>
\t\t</div>
\t</div>", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/content-right-section-prayer-time.htm", "");
    }
}
