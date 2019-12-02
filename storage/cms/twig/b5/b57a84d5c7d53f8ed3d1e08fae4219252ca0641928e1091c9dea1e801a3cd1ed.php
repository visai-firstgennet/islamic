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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/about-islam-section-homepage.htm */
class __TwigTemplate_9567e02c179e150ade6ed29e7e8a33ae2e070f3d3522651dcbf51debf0a0c41d extends \Twig\Template
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
        $context["aboutIslamArticleList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ArticleList"] ?? null), "make", [], "method", false, false, false, 1), "sort", [0 => "publish|desc"], "method", false, false, false, 1), "published", [], "method", false, false, false, 1);
        // line 2
        $context["aboutIslamArticleIndex"] = 0;
        // line 3
        echo "

";
        // line 5
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 5), "id", [], "any", false, false, false, 5) == "homepage")) {
            // line 6
            echo "<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("international-news", ["ipage" => 1]);
            echo "\" style=\"float:right;\" class=\"button\">មើលទាំងអស់ &raquo</a>
  <div class=\"content-title\">អំពីឥស្លាម</div>
";
        }
        // line 9
        echo "
";
        // line 10
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10) == "en-homepage")) {
            // line 11
            echo "<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("international-news", ["ipage" => 1]);
            echo "\" style=\"float:right;\" class=\"button\">Show All &raquo</a>
  <div class=\"content-title\">About Islam</div>
";
        }
        // line 14
        echo "
  <div class=\"content-body\" style=\"border-bottom:5px #ccc solid; margin-bottom:20px\">
    ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["aboutIslamArticleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["aboutIslamArticle"]) {
            if ((($context["aboutIslamArticleIndex"] ?? null) < 5)) {
                // line 17
                echo "      ";
                if ((twig_get_attribute($this->env, $this->source, $context["aboutIslamArticle"], "category_id", [], "any", false, false, false, 17) == 2)) {
                    // line 18
                    echo "      <div style='border-bottom:1px dotted #ccc; padding-bottom:10px; margin-bottom:10px'>
        <a class='link' href=\"";
                    // line 19
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, $context["aboutIslamArticle"], "id", [], "any", false, false, false, 19)]);
                    echo "\">
          <img src=\"";
                    // line 20
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["aboutIslamArticle"], "preview_image", [], "any", false, false, false, 20), "path", [], "any", false, false, false, 20), "html", null, true);
                    echo "\" alt=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aboutIslamArticle"], "title", [], "any", false, false, false, 20), "html", null, true);
                    echo "\" style='width:150px; height:100px; margin-right:10px; margin-bottom:5px; float:left; border:1px solid #eee' />
        </a>
        <div style='font-size:14px; float:left; width:485px; height:100px; overflow:hidden; word-wrap:break-word;'>
          <a href=\"";
                    // line 23
                    echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, $context["aboutIslamArticle"], "id", [], "any", false, false, false, 23)]);
                    echo "\" class='link' style=''>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aboutIslamArticle"], "title", [], "any", false, false, false, 23), "html", null, true);
                    echo "</a>
          <div style='line-height:18px; font-size:12px; color:#bbb' class='content-body'>
            ";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["aboutIslamArticle"], "preview_text", [], "any", false, false, false, 25), "html", null, true);
                    echo "
          </div>
        </div>
        <div style='clear:both'></div>
        ";
                    // line 29
                    $context["aboutIslamArticleIndex"] = (($context["aboutIslamArticleIndex"] ?? null) + 1);
                    // line 30
                    echo "  </div>
    ";
                }
                // line 32
                echo "    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['aboutIslamArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "  </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/about-islam-section-homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 33,  113 => 32,  109 => 30,  107 => 29,  100 => 25,  93 => 23,  85 => 20,  81 => 19,  78 => 18,  75 => 17,  70 => 16,  66 => 14,  59 => 11,  57 => 10,  54 => 9,  47 => 6,  45 => 5,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set aboutIslamArticleList = ArticleList.make().sort('publish|desc').published() %}
{% set aboutIslamArticleIndex = 0%}


{% if this.page.id == 'homepage' %}
<a href=\"{{ 'international-news'|page({ipage:1})}}\" style=\"float:right;\" class=\"button\">មើលទាំងអស់ &raquo</a>
  <div class=\"content-title\">អំពីឥស្លាម</div>
{% endif %}

{% if this.page.id == 'en-homepage' %}
<a href=\"{{ 'international-news'|page({ipage:1})}}\" style=\"float:right;\" class=\"button\">Show All &raquo</a>
  <div class=\"content-title\">About Islam</div>
{% endif %}

  <div class=\"content-body\" style=\"border-bottom:5px #ccc solid; margin-bottom:20px\">
    {% for aboutIslamArticle in aboutIslamArticleList if aboutIslamArticleIndex < 5 %}
      {% if aboutIslamArticle.category_id == 2 %}
      <div style='border-bottom:1px dotted #ccc; padding-bottom:10px; margin-bottom:10px'>
        <a class='link' href=\"{{ 'news-single'|page({id:aboutIslamArticle.id})}}\">
          <img src=\"{{ aboutIslamArticle.preview_image.path }}\" alt=\"{{aboutIslamArticle.title}}\" style='width:150px; height:100px; margin-right:10px; margin-bottom:5px; float:left; border:1px solid #eee' />
        </a>
        <div style='font-size:14px; float:left; width:485px; height:100px; overflow:hidden; word-wrap:break-word;'>
          <a href=\"{{ 'news-single'|page({id:aboutIslamArticle.id})}}\" class='link' style=''>{{ aboutIslamArticle.title }}</a>
          <div style='line-height:18px; font-size:12px; color:#bbb' class='content-body'>
            {{aboutIslamArticle.preview_text}}
          </div>
        </div>
        <div style='clear:both'></div>
        {% set aboutIslamArticleIndex = aboutIslamArticleIndex + 1 %}
  </div>
    {% endif %}
    {% endfor %}
  </div>", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/about-islam-section-homepage.htm", "");
    }
}
