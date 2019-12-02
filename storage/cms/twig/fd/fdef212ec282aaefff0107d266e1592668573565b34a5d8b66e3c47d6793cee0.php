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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/en-nav-menu.htm */
class __TwigTemplate_e8abf7f8a42c2d9938437976743b00a79519b4149fbd2dc0805fbd3f89c72881 extends \Twig\Template
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
        echo "<div class=\"top-menu-wrap\">
  <div class=\"top-menu\">
    <div id=\"top-btn\" class=\"top-btn\">
      <ul>
        <li><a class=\"";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == "en-homepage")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">HOME</a></li>
          <li><span class='line-btwn'></span>
            <a class=\"";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7) == "en-about")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-about");
        echo "\">ABOUT US</a>
            <ul>
              <li><a  href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Organizational Structure</a>
                <ul>
                  <li><a  href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">High Honorable Presidency</a></li>
                  <li><a  href=\"";
        // line 12
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Supreme Council Committee</a></li>
                  <li><a  href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Council Committee (Co.C)</a></li>
                  <li><a  href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Central Committee (CC) - 2nd Mandate</a></li>
                </ul>
              </li>

            </ul>
          </li>
          <li><a class=\"";
        // line 20
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 20), "id", [], "any", false, false, false, 20) == "en-news")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-news", ["ipage" => 1]);
        echo "\">NEWS</a>
            <ul>
              <li><a class=\"";
        // line 22
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 22), "id", [], "any", false, false, false, 22) == "en-national-news")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-national-news", ["ipage" => 1]);
        echo "\">Local News</a></li>
            </ul>
          </li>
        <li><a href=\"";
        // line 25
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">GALLERY</a>
          <ul>
            <li><a href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Audio</a>
              <ul>
                <li><a href=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Radio</a></li>
                <li><a href=\"";
        // line 30
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Quran Recitation</a></li>
                <li><a href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Quran Translation</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Video</a>
              <ul>
                <li><a href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">News</a></li>
                <li><a href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Khutibah</a></li>
                <li><a href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Quran Recitation</a></li>
                <li><a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Quran Translation</a></li>
                <li><a href=\"";
        // line 40
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Islamic Community</a></li>
                <li><a href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Islam And Science</a></li>
                <li><a href=\"";
        // line 42
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Workshop</a></li>
                <li><a href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Fiqah</a></li>
                <li><a href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Dua</a></li>
                <li><a href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Other</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Photo</a>
              <ul>
                <li><a href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Ramadan Iftar Dinner Of Cambodian Muslim</a></li>
                <li><a href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Mosque Inauguration</a></li>
                <li><a href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Seminar</a></li>
                <li><a href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Visi Mosque Construction</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li><a href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">ABOUT ISLAM</a>
          <ul>
            <li><a href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Al-Quran</a>
          </ul>
        </li>

        <li><a href=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">DOWNLOAD</a>
          <ul>
            <li><a class='' href=\"";
        // line 67
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">Documentation</a></li>
          </ul>
        </li>
        <li><a href=\"";
        // line 70
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">ANNOUNCEMENT</a></li>
        <li><a href=\"";
        // line 71
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("en-homepage");
        echo "\">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/en-nav-menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 71,  226 => 70,  220 => 67,  215 => 65,  208 => 61,  203 => 59,  194 => 53,  190 => 52,  186 => 51,  182 => 50,  177 => 48,  171 => 45,  167 => 44,  163 => 43,  159 => 42,  155 => 41,  151 => 40,  147 => 39,  143 => 38,  139 => 37,  135 => 36,  130 => 34,  124 => 31,  120 => 30,  116 => 29,  111 => 27,  106 => 25,  96 => 22,  87 => 20,  78 => 14,  74 => 13,  70 => 12,  66 => 11,  61 => 9,  52 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-menu-wrap\">
  <div class=\"top-menu\">
    <div id=\"top-btn\" class=\"top-btn\">
      <ul>
        <li><a class=\"{% if this.page.id == 'en-homepage' %} current {% endif %}\" href=\"{{ 'en-homepage'|page}}\">HOME</a></li>
          <li><span class='line-btwn'></span>
            <a class=\"{% if this.page.id == 'en-about' %} current {% endif %}\" href=\"{{ 'en-about'|page}}\">ABOUT US</a>
            <ul>
              <li><a  href=\"{{ 'en-homepage'|page}}\">Organizational Structure</a>
                <ul>
                  <li><a  href=\"{{ 'en-homepage'|page}}\">High Honorable Presidency</a></li>
                  <li><a  href=\"{{ 'en-homepage'|page}}\">Supreme Council Committee</a></li>
                  <li><a  href=\"{{ 'en-homepage'|page}}\">Council Committee (Co.C)</a></li>
                  <li><a  href=\"{{ 'en-homepage'|page}}\">Central Committee (CC) - 2nd Mandate</a></li>
                </ul>
              </li>

            </ul>
          </li>
          <li><a class=\"{% if this.page.id == 'en-news' %} current {% endif %}\" href=\"{{ 'en-news'|page({ipage:1})}}\">NEWS</a>
            <ul>
              <li><a class=\"{% if this.page.id == 'en-national-news' %} current {% endif %}\" href=\"{{ 'en-national-news'|page({ipage:1})}}\">Local News</a></li>
            </ul>
          </li>
        <li><a href=\"{{ 'en-homepage'|page}}\">GALLERY</a>
          <ul>
            <li><a href=\"{{ 'en-homepage'|page}}\">Audio</a>
              <ul>
                <li><a href=\"{{ 'en-homepage'|page}}\">Radio</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Quran Recitation</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Quran Translation</a></li>
              </ul>
            </li>
            <li><a href=\"{{ 'en-homepage'|page}}\">Video</a>
              <ul>
                <li><a href=\"{{ 'en-homepage'|page}}\">News</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Khutibah</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Quran Recitation</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Quran Translation</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Islamic Community</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Islam And Science</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Workshop</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Fiqah</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Dua</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Other</a></li>
              </ul>
            </li>
            <li><a href=\"{{ 'en-homepage'|page}}\">Photo</a>
              <ul>
                <li><a href=\"{{ 'en-homepage'|page}}\">Ramadan Iftar Dinner Of Cambodian Muslim</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Mosque Inauguration</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Seminar</a></li>
                <li><a href=\"{{ 'en-homepage'|page}}\">Visi Mosque Construction</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li><a href=\"{{ 'en-homepage'|page}}\">ABOUT ISLAM</a>
          <ul>
            <li><a href=\"{{ 'en-homepage'|page}}\">Al-Quran</a>
          </ul>
        </li>

        <li><a href=\"{{ 'en-homepage'|page}}\">DOWNLOAD</a>
          <ul>
            <li><a class='' href=\"{{ 'en-homepage'|page}}\">Documentation</a></li>
          </ul>
        </li>
        <li><a href=\"{{ 'en-homepage'|page}}\">ANNOUNCEMENT</a></li>
        <li><a href=\"{{ 'en-homepage'|page}}\">CONTACT US</a></li>
      </ul>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/en-nav-menu.htm", "");
    }
}
