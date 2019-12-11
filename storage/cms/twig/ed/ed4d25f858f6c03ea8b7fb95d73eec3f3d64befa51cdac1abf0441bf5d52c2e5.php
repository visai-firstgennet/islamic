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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/latest-news-section-homepage.htm */
class __TwigTemplate_37fa7b18a7aa3df73e87ede4dc1f0f53b930d613af32e400534597874ab89ff3 extends \Twig\Template
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
        $context["obArticleList"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["ArticleList"] ?? null), "make", [], "method", false, false, false, 1), "sort", [0 => "publish|desc"], "method", false, false, false, 1), "published", [], "method", false, false, false, 1);
        // line 2
        echo "
";
        // line 3
        $context["articleIndex"] = 1;
        // line 4
        $context["article1"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 4);
        // line 5
        $context["article2"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 5);
        // line 6
        $context["article3"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 6);
        // line 7
        $context["article4"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 7);
        // line 8
        $context["article5"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 8);
        // line 9
        $context["article6"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 9);
        // line 10
        $context["article7"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 10);
        // line 11
        $context["article8"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 11);
        // line 12
        echo "

";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obArticleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obArticle"]) {
            if ((($context["articleIndex"] ?? null) < 9)) {
                // line 15
                echo "\t\t";
                if ((($context["articleIndex"] ?? null) == 1)) {
                    // line 16
                    echo "\t\t\t";
                    $context["article1"] = $context["obArticle"];
                    // line 17
                    echo "
\t\t";
                } elseif ((                // line 18
($context["articleIndex"] ?? null) == 2)) {
                    // line 19
                    echo "\t\t\t";
                    $context["article2"] = $context["obArticle"];
                    // line 20
                    echo "
\t\t";
                } elseif ((                // line 21
($context["articleIndex"] ?? null) == 3)) {
                    // line 22
                    echo "\t\t\t";
                    $context["article3"] = $context["obArticle"];
                    // line 23
                    echo "
\t\t";
                } elseif ((                // line 24
($context["articleIndex"] ?? null) == 4)) {
                    // line 25
                    echo "\t\t\t";
                    $context["article4"] = $context["obArticle"];
                    // line 26
                    echo "
\t\t";
                } elseif ((                // line 27
($context["articleIndex"] ?? null) == 5)) {
                    // line 28
                    echo "\t\t\t";
                    $context["article5"] = $context["obArticle"];
                    // line 29
                    echo "
\t\t";
                } elseif ((                // line 30
($context["articleIndex"] ?? null) == 6)) {
                    // line 31
                    echo "\t\t\t";
                    $context["article6"] = $context["obArticle"];
                    // line 32
                    echo "
\t\t";
                } elseif ((                // line 33
($context["articleIndex"] ?? null) == 7)) {
                    // line 34
                    echo "\t\t\t";
                    $context["article7"] = $context["obArticle"];
                    // line 35
                    echo "
\t\t";
                } elseif ((                // line 36
($context["articleIndex"] ?? null) == 8)) {
                    // line 37
                    echo "\t\t\t";
                    $context["article8"] = $context["obArticle"];
                    // line 38
                    echo "
\t\t";
                }
                // line 40
                echo "\t\t";
                $context["articleIndex"] = (($context["articleIndex"] ?? null) + 1);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
";
        // line 43
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43) == "homepage")) {
            // line 44
            echo "<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news", ["ipage" => 1]);
            echo "\" style=\"float:right;\" class=\"button\">មើលទាំងអស់ &raquo</a>
<h1 class=\"content-title\">ព័ត៌មានថ្មីៗ</h1>
";
        }
        // line 47
        echo "
";
        // line 48
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 48), "id", [], "any", false, false, false, 48) == "en-homepage")) {
            // line 49
            echo "<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news", ["ipage" => 1]);
            echo "\" style=\"float:right;\" class=\"button\">Show All &raquo</a>
<h1 class=\"content-title\">Latest News </h1>
";
        }
        // line 52
        echo "
\t";
        // line 53
        if (twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "isNotEmpty", [], "method", false, false, false, 53)) {
            // line 54
            echo "\t\t\t\t<div class=\"content-body\" style=\"margin-top:10px; border-bottom:5px solid #ddd; padding-bottom:10px; margin-bottom:20px\">
\t\t\t\t";
            // line 55
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 55))) {
                // line 56
                echo "\t\t\t\t\t<div style='font-size:14px; line-height:24px; border:1px sol'>
\t\t\t\t\t\t\t<div class='round-bottom' style='float:left; width:430px; min-height:500px; margin-right:10px; margin-bottom:10px; background:#f4f6f6'>
\t\t\t\t\t\t\t\t<div style='margin-bottom:10px; width:430px; height:250px; overflow:hidden'>
\t\t\t\t\t\t\t\t\t<a class='link' href=\"";
                // line 59
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "id", [], "any", false, false, false, 59)]);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src= \"";
                // line 60
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "preview_image", [], "any", false, false, false, 60), "thumb", [0 => 430, 1 => 250, 2 => ["mode" => "exact"]], "method", false, false, false, 60), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style='padding:0 20px;'>
\t\t\t\t\t\t\t\t\t<a class='link' href=\"";
                // line 64
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "id", [], "any", false, false, false, 64)]);
                echo "\" style='line-height:28px'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "title", [], "any", false, false, false, 64), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style='padding:0 20px; color:#ccc; margin-bottom:10px; '>ចុះផ្សាយ: ";
                // line 66
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "published_start", [], "any", false, false, false, 66), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style='padding:0 20px 20px'>";
                // line 68
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "preview_text", [], "any", false, false, false, 68), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t";
            }
            // line 73
            echo "
\t\t\t\t";
            // line 74
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 74))) {
                // line 75
                echo "\t\t\t\t<div style='font-size:14px; line-height:24px; border:1px sol'>
\t\t\t\t\t<div style='float:right; width:200px; border-bottom:1px dotted #ddd; margin-bottom:10px; padding-bottom:10px'>
\t\t\t\t\t\t<div style='margin-bottom:10px'>
\t\t\t\t\t\t\t<a class='link' href=\"";
                // line 78
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article2"] ?? null), "id", [], "any", false, false, false, 78)]);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 79
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article2"] ?? null), "preview_image", [], "any", false, false, false, 79), "thumb", [0 => 200, 1 => 100, 2 => ["mode" => "exact"]], "method", false, false, false, 79), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"";
                // line 83
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article2"] ?? null), "id", [], "any", false, false, false, 83)]);
                echo "\" class='link' style='word-wrap:break-word'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article2"] ?? null), "title", [], "any", false, false, false, 83), "html", null, true);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style='color:#ccc; margin-bottom:10px; '>ចុះផ្សាយ: ";
                // line 86
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article2"] ?? null), "published_start", [], "any", false, false, false, 86), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 91
            echo "
\t\t\t\t<div style='font-size:14px; line-height:24px; border:1px sol'>
\t\t\t\t\t<div style='float:right; width:200px; border-bottom:1px dotted #ddd; margin-bottom:10px; padding-bottom:10px'>
\t\t\t\t\t\t<div style='margin-bottom:10px'>
\t\t\t\t\t\t\t<a class='link' href=\"";
            // line 95
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article3"] ?? null), "id", [], "any", false, false, false, 95)]);
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article3"] ?? null), "preview_image", [], "any", false, false, false, 96), "thumb", [0 => 200, 1 => 100, 2 => ["mode" => "exact"]], "method", false, false, false, 96), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"";
            // line 100
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article3"] ?? null), "id", [], "any", false, false, false, 100)]);
            echo "\" class='link' style='word-wrap:break-word'>
              ";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article3"] ?? null), "title", [], "any", false, false, false, 101), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style='color:#ccc; margin-bottom:10px; '>ចុះផ្សាយ: ";
            // line 104
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article3"] ?? null), "published_start", [], "any", false, false, false, 104), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"";
            // line 110
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article4"] ?? null), "id", [], "any", false, false, false, 110)]);
            echo "\" style='width:435px; height:20px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article4"] ?? null), "title", [], "any", false, false, false, 110), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article4"] ?? null), "title", [], "any", false, false, false, 110), "html", null, true);
            echo " </a>
\t\t\t\t\t...<span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: ";
            // line 111
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article4"] ?? null), "published_start", [], "any", false, false, false, 111), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"";
            // line 115
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article5"] ?? null), "id", [], "any", false, false, false, 115)]);
            echo "\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article5"] ?? null), "title", [], "any", false, false, false, 115), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article5"] ?? null), "title", [], "any", false, false, false, 115), "html", null, true);
            echo " </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: ";
            // line 116
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article5"] ?? null), "published_start", [], "any", false, false, false, 116), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"";
            // line 120
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article6"] ?? null), "id", [], "any", false, false, false, 120)]);
            echo "\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article6"] ?? null), "title", [], "any", false, false, false, 120), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article6"] ?? null), "title", [], "any", false, false, false, 120), "html", null, true);
            echo " </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: ";
            // line 121
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article6"] ?? null), "published_start", [], "any", false, false, false, 121), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"";
            // line 125
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article7"] ?? null), "id", [], "any", false, false, false, 125)]);
            echo "\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article7"] ?? null), "title", [], "any", false, false, false, 125), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article7"] ?? null), "title", [], "any", false, false, false, 125), "html", null, true);
            echo " </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: ";
            // line 126
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article7"] ?? null), "published_start", [], "any", false, false, false, 126), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"";
            // line 130
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article8"] ?? null), "id", [], "any", false, false, false, 130)]);
            echo "\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article8"] ?? null), "title", [], "any", false, false, false, 130), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article8"] ?? null), "title", [], "any", false, false, false, 130), "html", null, true);
            echo " </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: ";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article8"] ?? null), "published_start", [], "any", false, false, false, 131), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div style=\"clear:both\"></div>

\t\t\t</div>
\t\t\t";
        }
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/latest-news-section-homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 131,  346 => 130,  339 => 126,  331 => 125,  324 => 121,  316 => 120,  309 => 116,  301 => 115,  294 => 111,  286 => 110,  277 => 104,  271 => 101,  267 => 100,  260 => 96,  256 => 95,  250 => 91,  242 => 86,  234 => 83,  227 => 79,  223 => 78,  218 => 75,  216 => 74,  213 => 73,  205 => 68,  200 => 66,  193 => 64,  186 => 60,  182 => 59,  177 => 56,  175 => 55,  172 => 54,  170 => 53,  167 => 52,  160 => 49,  158 => 48,  155 => 47,  148 => 44,  146 => 43,  143 => 42,  135 => 40,  131 => 38,  128 => 37,  126 => 36,  123 => 35,  120 => 34,  118 => 33,  115 => 32,  112 => 31,  110 => 30,  107 => 29,  104 => 28,  102 => 27,  99 => 26,  96 => 25,  94 => 24,  91 => 23,  88 => 22,  86 => 21,  83 => 20,  80 => 19,  78 => 18,  75 => 17,  72 => 16,  69 => 15,  64 => 14,  60 => 12,  58 => 11,  56 => 10,  54 => 9,  52 => 8,  50 => 7,  48 => 6,  46 => 5,  44 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set obArticleList = ArticleList.make().sort('publish|desc').published() %}

{% set articleIndex = 1 %}
{% set article1 \t= obArticleList.first %}
{% set article2 \t= obArticleList.first %}
{% set article3 \t= obArticleList.first %}
{% set article4 \t= obArticleList.first %}
{% set article5 \t= obArticleList.first %}
{% set article6 \t= obArticleList.first %}
{% set article7 \t= obArticleList.first %}
{% set article8 \t= obArticleList.first %}


{% for obArticle in obArticleList if articleIndex < 9 %}
\t\t{% if articleIndex == 1 %}
\t\t\t{% set article1 \t= obArticle %}

\t\t{% elseif articleIndex == 2 %}
\t\t\t{% set article2 \t= obArticle %}

\t\t{% elseif articleIndex == 3 %}
\t\t\t{% set article3 \t= obArticle %}

\t\t{% elseif articleIndex == 4 %}
\t\t\t{% set article4 \t= obArticle %}

\t\t{% elseif articleIndex == 5 %}
\t\t\t{% set article5 \t= obArticle %}

\t\t{% elseif articleIndex == 6 %}
\t\t\t{% set article6 \t= obArticle %}

\t\t{% elseif articleIndex == 7 %}
\t\t\t{% set article7 \t= obArticle %}

\t\t{% elseif articleIndex == 8 %}
\t\t\t{% set article8 \t= obArticle %}

\t\t{% endif %}
\t\t{% set articleIndex = articleIndex + 1 %}
{% endfor %}

{% if this.page.id == 'homepage' %}
<a href=\"{{ 'news'|page({ipage:1})}}\" style=\"float:right;\" class=\"button\">មើលទាំងអស់ &raquo</a>
<h1 class=\"content-title\">ព័ត៌មានថ្មីៗ</h1>
{% endif %}

{% if this.page.id == 'en-homepage' %}
<a href=\"{{ 'news'|page({ipage:1})}}\" style=\"float:right;\" class=\"button\">Show All &raquo</a>
<h1 class=\"content-title\">Latest News </h1>
{% endif %}

\t{% if obArticleList.isNotEmpty() %}
\t\t\t\t<div class=\"content-body\" style=\"margin-top:10px; border-bottom:5px solid #ddd; padding-bottom:10px; margin-bottom:20px\">
\t\t\t\t{%\tif obArticleList.first is not empty %}
\t\t\t\t\t<div style='font-size:14px; line-height:24px; border:1px sol'>
\t\t\t\t\t\t\t<div class='round-bottom' style='float:left; width:430px; min-height:500px; margin-right:10px; margin-bottom:10px; background:#f4f6f6'>
\t\t\t\t\t\t\t\t<div style='margin-bottom:10px; width:430px; height:250px; overflow:hidden'>
\t\t\t\t\t\t\t\t\t<a class='link' href=\"{{ 'news-single'|page({id:article1.id})}}\">
\t\t\t\t\t\t\t\t\t\t\t<img src= \"{{ article1.preview_image.thumb(430,250, {'mode':'exact'}) }}\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style='padding:0 20px;'>
\t\t\t\t\t\t\t\t\t<a class='link' href=\"{{ 'news-single'|page({id:article1.id})}}\" style='line-height:28px'>{{ article1.title }}</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style='padding:0 20px; color:#ccc; margin-bottom:10px; '>ចុះផ្សាយ: {{ article1.published_start}}
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style='padding:0 20px 20px'>{{ article1.preview_text}}</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t{% endif %}

\t\t\t\t{%\tif obArticleList.first is not empty %}
\t\t\t\t<div style='font-size:14px; line-height:24px; border:1px sol'>
\t\t\t\t\t<div style='float:right; width:200px; border-bottom:1px dotted #ddd; margin-bottom:10px; padding-bottom:10px'>
\t\t\t\t\t\t<div style='margin-bottom:10px'>
\t\t\t\t\t\t\t<a class='link' href=\"{{ 'news-single'|page({id:article2.id})}}\">
\t\t\t\t\t\t\t<img src=\"{{ article2.preview_image.thumb(200,100, {'mode':'exact'}) }}\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"{{ 'news-single'|page({id:article2.id})}}\" class='link' style='word-wrap:break-word'>{{article2.title}}
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style='color:#ccc; margin-bottom:10px; '>ចុះផ្សាយ: {{ article2.published_start }}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t{% endif %}

\t\t\t\t<div style='font-size:14px; line-height:24px; border:1px sol'>
\t\t\t\t\t<div style='float:right; width:200px; border-bottom:1px dotted #ddd; margin-bottom:10px; padding-bottom:10px'>
\t\t\t\t\t\t<div style='margin-bottom:10px'>
\t\t\t\t\t\t\t<a class='link' href=\"{{ 'news-single'|page({id:article3.id})}}\">
\t\t\t\t\t\t\t\t<img src=\"{{ article3.preview_image.thumb(200,100, {'mode':'exact'}) }}\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"{{ 'news-single'|page({id:article3.id})}}\" class='link' style='word-wrap:break-word'>
              {{article3.title}}
\t\t\t\t\t\t\t</a>}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style='color:#ccc; margin-bottom:10px; '>ចុះផ្សាយ: {{article3.published_start}}
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"{{ 'news-single'|page({id:article4.id})}}\" style='width:435px; height:20px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title={{article4.title}}> {{article4.title}} </a>
\t\t\t\t\t...<span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: {{article4.published_start}}</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"{{ 'news-single'|page({id:article5.id})}}\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title={{article5.title}}> {{article5.title}} </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: {{article5.published_start}}</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"{{ 'news-single'|page({id:article6.id})}}\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title={{article6.title}}> {{article6.title}} </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: {{article6.published_start}}</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"{{ 'news-single'|page({id:article7.id})}}\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title={{article7.title}}> {{article7.title}} </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: {{article7.published_start}}</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"{{ 'news-single'|page({id:article8.id})}}\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title={{article8.title}}> {{article8.title}} </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: {{article8.published_start}}</span>
\t\t\t\t</div>
\t\t\t\t<div style=\"clear:both\"></div>

\t\t\t</div>
\t\t\t{% endif %}", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/latest-news-section-homepage.htm", "");
    }
}
