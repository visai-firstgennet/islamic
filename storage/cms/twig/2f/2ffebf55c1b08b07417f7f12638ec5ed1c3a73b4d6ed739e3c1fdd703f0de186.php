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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/content-left-section-about-ceo.htm */
class __TwigTemplate_7d9b62f20c6640da30c383d40c80d78de606c67fe3696c55807c5a59f72253ee extends \Twig\Template
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
        echo "<div class='content-title'>សារប្រធាន</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/content-left-section-about-ceo.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class='content-title'>សារប្រធាន</div>", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/content-left-section-about-ceo.htm", "");
    }
}
