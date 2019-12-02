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
        // line 4
        $context["articleIndex"] = 1;
        // line 5
        $context["article1"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 5);
        // line 6
        $context["article2"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 6);
        // line 7
        $context["article3"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 7);
        // line 8
        $context["article4"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 8);
        // line 9
        $context["article5"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 9);
        // line 10
        $context["article6"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 10);
        // line 11
        $context["article7"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 11);
        // line 12
        $context["article8"] = twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 12);
        // line 13
        echo "

";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["obArticleList"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["obArticle"]) {
            if ((($context["articleIndex"] ?? null) < 9)) {
                // line 16
                echo "\t\t";
                if ((($context["articleIndex"] ?? null) == 1)) {
                    // line 17
                    echo "\t\t\t";
                    $context["article1"] = $context["obArticle"];
                    // line 18
                    echo "
\t\t";
                } elseif ((                // line 19
($context["articleIndex"] ?? null) == 2)) {
                    // line 20
                    echo "\t\t\t";
                    $context["article2"] = $context["obArticle"];
                    // line 21
                    echo "
\t\t";
                } elseif ((                // line 22
($context["articleIndex"] ?? null) == 3)) {
                    // line 23
                    echo "\t\t\t";
                    $context["article3"] = $context["obArticle"];
                    // line 24
                    echo "
\t\t";
                } elseif ((                // line 25
($context["articleIndex"] ?? null) == 4)) {
                    // line 26
                    echo "\t\t\t";
                    $context["article4"] = $context["obArticle"];
                    // line 27
                    echo "
\t\t";
                } elseif ((                // line 28
($context["articleIndex"] ?? null) == 5)) {
                    // line 29
                    echo "\t\t\t";
                    $context["article5"] = $context["obArticle"];
                    // line 30
                    echo "
\t\t";
                } elseif ((                // line 31
($context["articleIndex"] ?? null) == 6)) {
                    // line 32
                    echo "\t\t\t";
                    $context["article6"] = $context["obArticle"];
                    // line 33
                    echo "
\t\t";
                } elseif ((                // line 34
($context["articleIndex"] ?? null) == 7)) {
                    // line 35
                    echo "\t\t\t";
                    $context["article7"] = $context["obArticle"];
                    // line 36
                    echo "
\t\t";
                } elseif ((                // line 37
($context["articleIndex"] ?? null) == 8)) {
                    // line 38
                    echo "\t\t\t";
                    $context["article8"] = $context["obArticle"];
                    // line 39
                    echo "
\t\t";
                }
                // line 41
                echo "\t\t";
                $context["articleIndex"] = (($context["articleIndex"] ?? null) + 1);
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['obArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "
";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 44), "id", [], "any", false, false, false, 44) == "homepage")) {
            // line 45
            echo "<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news", ["ipage" => 1]);
            echo "\" style=\"float:right;\" class=\"button\">មើលទាំងអស់ &raquo</a>
<h1 class=\"content-title\">ព័ត៌មានថ្មីៗ</h1>
";
        }
        // line 48
        echo "
";
        // line 49
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49) == "en-homepage")) {
            // line 50
            echo "<a href=\"";
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news", ["ipage" => 1]);
            echo "\" style=\"float:right;\" class=\"button\">Show All &raquo</a>
<h1 class=\"content-title\">Latest News </h1>
";
        }
        // line 53
        echo "
\t";
        // line 54
        if (twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "isNotEmpty", [], "method", false, false, false, 54)) {
            // line 55
            echo "\t\t\t\t<div class=\"content-body\" style=\"margin-top:10px; border-bottom:5px solid #ddd; padding-bottom:10px; margin-bottom:20px\">
\t\t\t\t";
            // line 56
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 56))) {
                // line 57
                echo "\t\t\t\t\t<div style='font-size:14px; line-height:24px; border:1px sol'>
\t\t\t\t\t\t\t<div class='round-bottom' style='float:left; width:430px; min-height:500px; margin-right:10px; margin-bottom:10px; background:#f4f6f6'>
\t\t\t\t\t\t\t\t<div style='margin-bottom:10px; width:430px; height:250px; overflow:hidden'>
\t\t\t\t\t\t\t\t\t<a class='link' href=\"";
                // line 60
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "id", [], "any", false, false, false, 60)]);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t<img src= \"";
                // line 61
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "preview_image", [], "any", false, false, false, 61), "thumb", [0 => 430, 1 => 250, 2 => ["mode" => "exact"]], "method", false, false, false, 61), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style='padding:0 20px;'>
\t\t\t\t\t\t\t\t\t<a class='link' href=\"";
                // line 65
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "id", [], "any", false, false, false, 65)]);
                echo "\" style='line-height:28px'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "title", [], "any", false, false, false, 65), "html", null, true);
                echo "</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style='padding:0 20px; color:#ccc; margin-bottom:10px; '>ចុះផ្សាយ: ";
                // line 67
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "published_start", [], "any", false, false, false, 67), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div style='padding:0 20px 20px'>";
                // line 69
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article1"] ?? null), "preview_text", [], "any", false, false, false, 69), "html", null, true);
                echo "</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t";
            }
            // line 74
            echo "
\t\t\t\t";
            // line 75
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["obArticleList"] ?? null), "first", [], "any", false, false, false, 75))) {
                // line 76
                echo "\t\t\t\t<div style='font-size:14px; line-height:24px; border:1px sol'>
\t\t\t\t\t<div style='float:right; width:200px; border-bottom:1px dotted #ddd; margin-bottom:10px; padding-bottom:10px'>
\t\t\t\t\t\t<div style='margin-bottom:10px'>
\t\t\t\t\t\t\t<a class='link' href=\"";
                // line 79
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article2"] ?? null), "id", [], "any", false, false, false, 79)]);
                echo "\">
\t\t\t\t\t\t\t<img src=\"";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article2"] ?? null), "preview_image", [], "any", false, false, false, 80), "thumb", [0 => 200, 1 => 100, 2 => ["mode" => "exact"]], "method", false, false, false, 80), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"";
                // line 84
                echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article2"] ?? null), "id", [], "any", false, false, false, 84)]);
                echo "\" class='link' style='word-wrap:break-word'>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article2"] ?? null), "title", [], "any", false, false, false, 84), "html", null, true);
                echo "
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style='color:#ccc; margin-bottom:10px; '>ចុះផ្សាយ: ";
                // line 87
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article2"] ?? null), "published_start", [], "any", false, false, false, 87), "html", null, true);
                echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 92
            echo "
\t\t\t\t<div style='font-size:14px; line-height:24px; border:1px sol'>
\t\t\t\t\t<div style='float:right; width:200px; border-bottom:1px dotted #ddd; margin-bottom:10px; padding-bottom:10px'>
\t\t\t\t\t\t<div style='margin-bottom:10px'>
\t\t\t\t\t\t\t<a class='link' href=\"";
            // line 96
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article3"] ?? null), "id", [], "any", false, false, false, 96)]);
            echo "\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article3"] ?? null), "preview_image", [], "any", false, false, false, 97), "thumb", [0 => 200, 1 => 100, 2 => ["mode" => "exact"]], "method", false, false, false, 97), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<a href=\"";
            // line 101
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article3"] ?? null), "id", [], "any", false, false, false, 101)]);
            echo "\" class='link' style='word-wrap:break-word'>
              ";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article3"] ?? null), "title", [], "any", false, false, false, 102), "html", null, true);
            echo "
\t\t\t\t\t\t\t</a>}
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div style='color:#ccc; margin-bottom:10px; '>ចុះផ្សាយ: ";
            // line 105
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article3"] ?? null), "published_start", [], "any", false, false, false, 105), "html", null, true);
            echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"";
            // line 111
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article4"] ?? null), "id", [], "any", false, false, false, 111)]);
            echo "\" style='width:435px; height:20px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article4"] ?? null), "title", [], "any", false, false, false, 111), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article4"] ?? null), "title", [], "any", false, false, false, 111), "html", null, true);
            echo " </a>
\t\t\t\t\t...<span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: ";
            // line 112
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article4"] ?? null), "published_start", [], "any", false, false, false, 112), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"";
            // line 116
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article5"] ?? null), "id", [], "any", false, false, false, 116)]);
            echo "\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article5"] ?? null), "title", [], "any", false, false, false, 116), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article5"] ?? null), "title", [], "any", false, false, false, 116), "html", null, true);
            echo " </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: ";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article5"] ?? null), "published_start", [], "any", false, false, false, 117), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"";
            // line 121
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article6"] ?? null), "id", [], "any", false, false, false, 121)]);
            echo "\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article6"] ?? null), "title", [], "any", false, false, false, 121), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article6"] ?? null), "title", [], "any", false, false, false, 121), "html", null, true);
            echo " </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: ";
            // line 122
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article6"] ?? null), "published_start", [], "any", false, false, false, 122), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"";
            // line 126
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article7"] ?? null), "id", [], "any", false, false, false, 126)]);
            echo "\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article7"] ?? null), "title", [], "any", false, false, false, 126), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article7"] ?? null), "title", [], "any", false, false, false, 126), "html", null, true);
            echo " </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: ";
            // line 127
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article7"] ?? null), "published_start", [], "any", false, false, false, 127), "html", null, true);
            echo "</span>
\t\t\t\t</div>
\t\t\t\t<div style='clear:both'></div>

\t\t\t\t<div>&raquo <a class='link' href=\"";
            // line 131
            echo $this->extensions['Cms\Twig\Extension']->pageFilter("news-single", ["id" => twig_get_attribute($this->env, $this->source, ($context["article8"] ?? null), "id", [], "any", false, false, false, 131)]);
            echo "\" style='width:435px; height:18px; overflow:hidden; display:inline-block; word-wrap:break-word; font-size:12px;' title=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article8"] ?? null), "title", [], "any", false, false, false, 131), "html", null, true);
            echo "> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article8"] ?? null), "title", [], "any", false, false, false, 131), "html", null, true);
            echo " </a>
\t\t\t\t\t... <span style='font-size:12px; color:#ccc; margin-bottom:10px; '> ចុះផ្សាយ: ";
            // line 132
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article8"] ?? null), "published_start", [], "any", false, false, false, 132), "html", null, true);
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
        return array (  355 => 132,  347 => 131,  340 => 127,  332 => 126,  325 => 122,  317 => 121,  310 => 117,  302 => 116,  295 => 112,  287 => 111,  278 => 105,  272 => 102,  268 => 101,  261 => 97,  257 => 96,  251 => 92,  243 => 87,  235 => 84,  228 => 80,  224 => 79,  219 => 76,  217 => 75,  214 => 74,  206 => 69,  201 => 67,  194 => 65,  187 => 61,  183 => 60,  178 => 57,  176 => 56,  173 => 55,  171 => 54,  168 => 53,  161 => 50,  159 => 49,  156 => 48,  149 => 45,  147 => 44,  144 => 43,  136 => 41,  132 => 39,  129 => 38,  127 => 37,  124 => 36,  121 => 35,  119 => 34,  116 => 33,  113 => 32,  111 => 31,  108 => 30,  105 => 29,  103 => 28,  100 => 27,  97 => 26,  95 => 25,  92 => 24,  89 => 23,  87 => 22,  84 => 21,  81 => 20,  79 => 19,  76 => 18,  73 => 17,  70 => 16,  65 => 15,  61 => 13,  59 => 12,  57 => 11,  55 => 10,  53 => 9,  51 => 8,  49 => 7,  47 => 6,  45 => 5,  43 => 4,  39 => 2,  37 => 1,);
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
