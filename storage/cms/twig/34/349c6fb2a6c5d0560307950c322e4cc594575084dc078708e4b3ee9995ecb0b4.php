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

/* C:\xampp\htdocs\islamic/themes/islamic/partials/islam-bible-section-homepage.htm */
class __TwigTemplate_f7d94a5b71bb8457a12e1e897c382235c5406e429821f62e2316d2b288e276d3 extends \Twig\Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 1), "id", [], "any", false, false, false, 1) == "en-homepage")) {
            // line 2
            echo "<a href=\"index.html\" style=\"float:right;\" class=\"button\">Show All &raquo
</a>
<div class=\"content-title\">Al-Quran Translation in English</div>
";
        }
        // line 6
        echo "
";
        // line 7
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, false, 7), "id", [], "any", false, false, false, 7) == "homepage")) {
            // line 8
            echo "<a href=\"index.html\" style=\"float:right;\" class=\"button\">មើលទាំងអស់ &raquo
</a>
<div class=\"content-title\">គម្ពីរអាល់គួរអាន ប្រែសម្រួលជា ភាសាខ្មែរ</div>
";
        }
        // line 12
        echo "
<!--
<div class=\"content-body\" style=\"border-bottom:5px #ccc solid; margin-bottom:20px\">
    <ul class=\"surah-list\">
          <li onclick=\"window.location='index.html'\"><a href='index.html'><div><span class='num'>1</span><span class='title'>អាល់ហ្វាទីហះ</span></div></a></li>
          <li onclick=\"window.location='index.html'\"><a href='index.html'><div><span class='num'>2</span><span class='title'>អាល់ហ្ពាករ៉ោះ </span></div></a></li>
          <li onclick=\"window.location='index.html'\"><a href='index.html'><div><span class='num'>3</span><span class='title'>អាលីអ៊ីមរ៉ន</span></div></a></li>
          <li onclick=\"window.location='index.html'\"><a href='index.html'><div><span class='num'>4</span><span class='title'>អាន់នីសាក</span></div></a></li>
    </ul>
</div>
<style type=\"text/css\">
\t.surah-list{ list-style:none; padding:0; margin:10px 0; height:230px; overflow:auto }
\t.surah-list li{ display:block; float:left; padding:5px 0; margin-right:8px; width:150px; margin-bottom:5px; border-bottom:1px solid #f8931d; background:#f4f6f6;-webkit-border-bottom-right-radius: 5px; -webkit-border-bottom-left-radius: 5px; -moz-border-radius-bottomright: 5px; -moz-border-radius-bottomleft: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px;  }
\t.surah-list li:hover{ background:#eee; cursor:pointer; color:#33ccff}
\t.surah-list li a{ text-decoration:none; display:block; background:#ccc; color:#484848;}
\t.surah-list li .num{ width:30px; height:20x; float:left; margin-right:10px; text-align:center; padding:3px; display:block; color:#fff; background:#f8931d;-webkit-border-top-right-radius: 5px; -webkit-border-bottom-right-radius: 5px; -moz-border-radius-topright: 5px;-moz-border-radius-bottomright: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;;}
\t.surah-list li .title{ font-size:12px; display:block; float:left; margin-top:5px;;}
\t.surah-list .current{ background:#93e7ff}
</style>
-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/islam-bible-section-homepage.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 12,  50 => 8,  48 => 7,  45 => 6,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if this.page.id == 'en-homepage' %}
<a href=\"index.html\" style=\"float:right;\" class=\"button\">Show All &raquo
</a>
<div class=\"content-title\">Al-Quran Translation in English</div>
{% endif %}

{% if this.page.id == 'homepage' %}
<a href=\"index.html\" style=\"float:right;\" class=\"button\">មើលទាំងអស់ &raquo
</a>
<div class=\"content-title\">គម្ពីរអាល់គួរអាន ប្រែសម្រួលជា ភាសាខ្មែរ</div>
{% endif %}

<!--
<div class=\"content-body\" style=\"border-bottom:5px #ccc solid; margin-bottom:20px\">
    <ul class=\"surah-list\">
          <li onclick=\"window.location='index.html'\"><a href='index.html'><div><span class='num'>1</span><span class='title'>អាល់ហ្វាទីហះ</span></div></a></li>
          <li onclick=\"window.location='index.html'\"><a href='index.html'><div><span class='num'>2</span><span class='title'>អាល់ហ្ពាករ៉ោះ </span></div></a></li>
          <li onclick=\"window.location='index.html'\"><a href='index.html'><div><span class='num'>3</span><span class='title'>អាលីអ៊ីមរ៉ន</span></div></a></li>
          <li onclick=\"window.location='index.html'\"><a href='index.html'><div><span class='num'>4</span><span class='title'>អាន់នីសាក</span></div></a></li>
    </ul>
</div>
<style type=\"text/css\">
\t.surah-list{ list-style:none; padding:0; margin:10px 0; height:230px; overflow:auto }
\t.surah-list li{ display:block; float:left; padding:5px 0; margin-right:8px; width:150px; margin-bottom:5px; border-bottom:1px solid #f8931d; background:#f4f6f6;-webkit-border-bottom-right-radius: 5px; -webkit-border-bottom-left-radius: 5px; -moz-border-radius-bottomright: 5px; -moz-border-radius-bottomleft: 5px; border-bottom-right-radius: 5px; border-bottom-left-radius: 5px;  }
\t.surah-list li:hover{ background:#eee; cursor:pointer; color:#33ccff}
\t.surah-list li a{ text-decoration:none; display:block; background:#ccc; color:#484848;}
\t.surah-list li .num{ width:30px; height:20x; float:left; margin-right:10px; text-align:center; padding:3px; display:block; color:#fff; background:#f8931d;-webkit-border-top-right-radius: 5px; -webkit-border-bottom-right-radius: 5px; -moz-border-radius-topright: 5px;-moz-border-radius-bottomright: 5px;border-top-right-radius: 5px;border-bottom-right-radius: 5px;;}
\t.surah-list li .title{ font-size:12px; display:block; float:left; margin-top:5px;;}
\t.surah-list .current{ background:#93e7ff}
</style>
-->", "C:\\xampp\\htdocs\\islamic/themes/islamic/partials/islam-bible-section-homepage.htm", "");
    }
}
