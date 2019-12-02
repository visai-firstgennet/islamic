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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/nav-menu.htm */
class __TwigTemplate_a36592a6c025e4266b385429be69e98b827b1ae7f0456aad1b31d345257692f7 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == "homepage")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ទំព័រដើម</a></li>
          <li><span class='line-btwn'></span>
            <a class=\"";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7) == "about")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">អំពីយើង</a>
            <ul>
              <li><a  href=\"";
        // line 9
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("ceo-message");
        echo "\">សារអំពីប្រធាន</a>
              </li>
              <li><a  href=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("location");
        echo "\">ទីតាំងការិយាល័យ</a>
              </li>
            </ul>
          </li>
          <li><span class='line-btwn'></span><a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">គួរបាន និង ពិធីស្រាយបួស</a></li>
          <li><a class=\"";
        // line 16
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 16), "id", [], "any", false, false, false, 16) == "news")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("news", ["ipage" => 1]);
        echo "\">ព័ត៌មាន</a>
            <ul>
              <li><a class=\"";
        // line 18
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 18), "id", [], "any", false, false, false, 18) == "national-news")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("national-news", ["ipage" => 1]);
        echo "\">ក្នុងប្រទេស</a></li>
              <li><a class=\"";
        // line 19
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 19), "id", [], "any", false, false, false, 19) == "international-news")) {
            echo " current ";
        }
        echo "\" href=\"";
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("international-news", ["ipage" => 1]);
        echo "\">អន្តរជាតិ</a></li>
            </ul>
          </li>
        <li><a href=\"";
        // line 22
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">វិចិត្រសាល</a>
          <ul>
            <li><a href=\"";
        // line 24
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">សំឡេង</a>
              <ul>
                <li><a href=\"";
        // line 26
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">វិទ្យុ</a></li>
                <li><a href=\"";
        // line 27
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">គុរអាន</a></li>
                <li><a href=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">គុរអានបកប្រែ</a></li>
              </ul>
            </li>
            <li><a href=\"";
        // line 31
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">វីដេអូ</a>

            </li>
            <li><a href=\"";
        // line 34
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">រូបថត</a>
              <ul>
                <li><a href=\"";
        // line 36
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ពិធីអាហារស្រាយបួស ខែរ៉ាម៉ាឌន នៃសាសនាឥស្លាមកម្ពុជា</a></li>
                <li><a href=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">សម្ពោធម៉ាស្ជិត</a></li>
                <li><a href=\"";
        // line 38
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">សិក្ខាសាលា</a></li>
                <li><a href=\"";
        // line 39
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ពិនិត្យទីតាំងសាងសង់ម៉ាស្ជិត</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li><a href=\"";
        // line 45
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">អំពីឥស្លាម</a>
          <ul>
            <li><a href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">អាល់គូរអាន</a>
              <li><a class='' href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ហាទីស</a></li>
              <li><a class='' href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ឥស្លាម និង វិទ្យាសាស្រ្ត</a></li>
              <li><a class='' href=\"";
        // line 50
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">រឿងខ្លីៗ</a></li>
              <li><a class='' href=\"";
        // line 51
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ទូអា និងហ្ស៊ីកៀរ៍</a></li>
              <li><a class='' href=\"";
        // line 52
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ហ៊ូកុម ហ្វីកោះ</a></li>
              <li><a class='' href=\"";
        // line 53
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">អាយ៉ាត់ អាល់គុរអាន</a></li>
              <li><a class='' href=\"";
        // line 54
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">បណ្ណាល័យរ៉ាម៉ាឌន</a></li>
              <li><a class='' href=\"";
        // line 55
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ទស្សនៈឥស្លាម</a></li>
          </ul>
        </li>

        <li><a href=\"";
        // line 59
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ទាញយក</a>
          <ul>
            <li><a class='' href=\"";
        // line 61
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ពេលវេលាសឡាត៍</a></li>
            <li><a class='' href=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ឯកសារផ្សេងៗ</a></li>
          </ul>
        </li>
        <li><a href=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("homepage");
        echo "\">ដំណឹងផ្សេងៗ</a></li>

      </ul>
    </div>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/nav-menu.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 65,  213 => 62,  209 => 61,  204 => 59,  197 => 55,  193 => 54,  189 => 53,  185 => 52,  181 => 51,  177 => 50,  173 => 49,  169 => 48,  165 => 47,  160 => 45,  151 => 39,  147 => 38,  143 => 37,  139 => 36,  134 => 34,  128 => 31,  122 => 28,  118 => 27,  114 => 26,  109 => 24,  104 => 22,  94 => 19,  86 => 18,  77 => 16,  73 => 15,  66 => 11,  61 => 9,  52 => 7,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"top-menu-wrap\">
  <div class=\"top-menu\">
    <div id=\"top-btn\" class=\"top-btn\">
      <ul>
        <li><a class=\"{% if this.page.id == 'homepage' %} current {% endif %}\" href=\"{{ 'homepage'|page}}\">ទំព័រដើម</a></li>
          <li><span class='line-btwn'></span>
            <a class=\"{% if this.page.id == 'about' %} current {% endif %}\" href=\"{{ 'about'|page}}\">អំពីយើង</a>
            <ul>
              <li><a  href=\"{{ 'ceo-message'|page}}\">សារអំពីប្រធាន</a>
              </li>
              <li><a  href=\"{{ 'location'|page}}\">ទីតាំងការិយាល័យ</a>
              </li>
            </ul>
          </li>
          <li><span class='line-btwn'></span><a href=\"{{ 'homepage'|page}}\">គួរបាន និង ពិធីស្រាយបួស</a></li>
          <li><a class=\"{% if this.page.id == 'news' %} current {% endif %}\" href=\"{{ 'news'|page({ipage:1})}}\">ព័ត៌មាន</a>
            <ul>
              <li><a class=\"{% if this.page.id == 'national-news' %} current {% endif %}\" href=\"{{ 'national-news'|page({ipage:1})}}\">ក្នុងប្រទេស</a></li>
              <li><a class=\"{% if this.page.id == 'international-news' %} current {% endif %}\" href=\"{{ 'international-news'|page({ipage:1})}}\">អន្តរជាតិ</a></li>
            </ul>
          </li>
        <li><a href=\"{{ 'homepage'|page}}\">វិចិត្រសាល</a>
          <ul>
            <li><a href=\"{{ 'homepage'|page}}\">សំឡេង</a>
              <ul>
                <li><a href=\"{{ 'homepage'|page}}\">វិទ្យុ</a></li>
                <li><a href=\"{{ 'homepage'|page}}\">គុរអាន</a></li>
                <li><a href=\"{{ 'homepage'|page}}\">គុរអានបកប្រែ</a></li>
              </ul>
            </li>
            <li><a href=\"{{ 'homepage'|page}}\">វីដេអូ</a>

            </li>
            <li><a href=\"{{ 'homepage'|page}}\">រូបថត</a>
              <ul>
                <li><a href=\"{{ 'homepage'|page}}\">ពិធីអាហារស្រាយបួស ខែរ៉ាម៉ាឌន នៃសាសនាឥស្លាមកម្ពុជា</a></li>
                <li><a href=\"{{ 'homepage'|page}}\">សម្ពោធម៉ាស្ជិត</a></li>
                <li><a href=\"{{ 'homepage'|page}}\">សិក្ខាសាលា</a></li>
                <li><a href=\"{{ 'homepage'|page}}\">ពិនិត្យទីតាំងសាងសង់ម៉ាស្ជិត</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li><a href=\"{{ 'homepage'|page}}\">អំពីឥស្លាម</a>
          <ul>
            <li><a href=\"{{ 'homepage'|page}}\">អាល់គូរអាន</a>
              <li><a class='' href=\"{{ 'homepage'|page}}\">ហាទីស</a></li>
              <li><a class='' href=\"{{ 'homepage'|page}}\">ឥស្លាម និង វិទ្យាសាស្រ្ត</a></li>
              <li><a class='' href=\"{{ 'homepage'|page}}\">រឿងខ្លីៗ</a></li>
              <li><a class='' href=\"{{ 'homepage'|page}}\">ទូអា និងហ្ស៊ីកៀរ៍</a></li>
              <li><a class='' href=\"{{ 'homepage'|page}}\">ហ៊ូកុម ហ្វីកោះ</a></li>
              <li><a class='' href=\"{{ 'homepage'|page}}\">អាយ៉ាត់ អាល់គុរអាន</a></li>
              <li><a class='' href=\"{{ 'homepage'|page}}\">បណ្ណាល័យរ៉ាម៉ាឌន</a></li>
              <li><a class='' href=\"{{ 'homepage'|page}}\">ទស្សនៈឥស្លាម</a></li>
          </ul>
        </li>

        <li><a href=\"{{ 'homepage'|page}}\">ទាញយក</a>
          <ul>
            <li><a class='' href=\"{{ 'homepage'|page}}\">ពេលវេលាសឡាត៍</a></li>
            <li><a class='' href=\"{{ 'homepage'|page}}\">ឯកសារផ្សេងៗ</a></li>
          </ul>
        </li>
        <li><a href=\"{{ 'homepage'|page}}\">ដំណឹងផ្សេងៗ</a></li>

      </ul>
    </div>
  </div>
</div>", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/nav-menu.htm", "");
    }
}
