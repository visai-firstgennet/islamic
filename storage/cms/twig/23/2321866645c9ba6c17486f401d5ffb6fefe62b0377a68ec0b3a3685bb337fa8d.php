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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/content-right-section-q&a.htm */
class __TwigTemplate_978d3f3ffa53dfefa834a6a7d9844e3f7218e721f6ad1047359e362df67ff6ca extends \Twig\Template
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
  <a href=\"qa.html\" style=\"float:right;font-size:14px; padding:20px;\" class=\"link\">មើលទាំងអស់ &raquo;
  </a>
  <div class=\"right-title\">សំនួរ-ចម្លើយ
  </div>
  <div class=\"right-body\">
    <div style='text-align:center; padding:120px 0'>មិនមានសំនួរ
    </div>
    <div style=\"text-align:center; padding:10px\">
      <a href='qa/ask.html' class=\"button\" style=\"padding:10px 30px; margin-top:10px; margin-right:10px\">
      <img src=";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/systems/writing-icon.png");
        echo " style=\"width:20px; margin-bottom:-5px; margin-right:5px\" />សួរសំនួរ
      </a>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/content-right-section-q&a.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"right-block\">
  <a href=\"qa.html\" style=\"float:right;font-size:14px; padding:20px;\" class=\"link\">មើលទាំងអស់ &raquo;
  </a>
  <div class=\"right-title\">សំនួរ-ចម្លើយ
  </div>
  <div class=\"right-body\">
    <div style='text-align:center; padding:120px 0'>មិនមានសំនួរ
    </div>
    <div style=\"text-align:center; padding:10px\">
      <a href='qa/ask.html' class=\"button\" style=\"padding:10px 30px; margin-top:10px; margin-right:10px\">
      <img src={{'assets/images/systems/writing-icon.png'|theme}} style=\"width:20px; margin-bottom:-5px; margin-right:5px\" />សួរសំនួរ
      </a>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/content-right-section-q&a.htm", "");
    }
}
