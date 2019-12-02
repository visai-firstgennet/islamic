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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/footer.htm */
class __TwigTemplate_d1e0e348d466db0ef5e05376ff9406d9c230bd11037999b72749e54172fcb5a2 extends \Twig\Template
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
        echo "<footer class=\"main-footer\">
  <div class=\"footer round-bottom\">
    <div>Address : Poum 4, Chrang Chamreas 1, Russey Keo, Phnom Penh, Cambodia. <br />
      Tel: (855) 098-21-36-42/061-74-9200.E-mail: raty.city21@gmail.com</div>
      <div class=\"copyright\">Copyright &copy 2019. All right reserved.</div>
  </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/footer.htm";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer class=\"main-footer\">
  <div class=\"footer round-bottom\">
    <div>Address : Poum 4, Chrang Chamreas 1, Russey Keo, Phnom Penh, Cambodia. <br />
      Tel: (855) 098-21-36-42/061-74-9200.E-mail: raty.city21@gmail.com</div>
      <div class=\"copyright\">Copyright &copy 2019. All right reserved.</div>
  </div>
</footer>", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/footer.htm", "");
    }
}
