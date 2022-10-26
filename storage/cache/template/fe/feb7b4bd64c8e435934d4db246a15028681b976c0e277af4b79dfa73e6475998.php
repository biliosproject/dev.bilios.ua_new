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

/* revolution/template/information/information.twig */
class __TwigTemplate_2ffcfe35e60d6f226dffcf79f041182abc39ab88623305103af41a5c11ba0751 extends \Twig\Template
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
        echo ($context["header"] ?? null);
        echo " 
<div class=\"container\" itemscope itemtype=\"http://schema.org/NewsArticle\">
<meta itemscope itemprop=\"mainEntityOfPage\"  itemType=\"https://schema.org/WebPage\" itemid=\"";
        // line 3
        echo ($context["microdata_url_info"] ?? null);
        echo "\" content=\"";
        echo ($context["heading_title"] ?? null);
        echo "\"/>
<div itemprop=\"author\" itemscope itemtype=\"https://schema.org/Person\"><meta itemprop=\"name\" content=\"";
        // line 4
        echo ($context["microdata_author"] ?? null);
        echo "\" /></div>
<div itemprop=\"image\" itemscope itemtype=\"https://schema.org/ImageObject\">
<link itemprop=\"contentUrl\" href=\"";
        // line 6
        echo ($context["logo"] ?? null);
        echo "\" />
<link itemprop=\"url\" href=\"";
        // line 7
        echo ($context["logo"] ?? null);
        echo "\">
<meta itemprop=\"width\" content=\"";
        // line 8
        echo ($context["logo_width"] ?? null);
        echo "\">
<meta itemprop=\"height\" content=\"";
        // line 9
        echo ($context["logo_height"] ?? null);
        echo "\">
</div>
<div itemprop=\"publisher\" itemscope itemtype=\"https://schema.org/Organization\">\t\t  
<div itemprop=\"logo\" itemscope itemtype=\"https://schema.org/ImageObject\">
<link itemprop=\"url\" href=\"";
        // line 13
        echo ($context["logo"] ?? null);
        echo "\">
<link itemprop=\"contentUrl\" href=\"";
        // line 14
        echo ($context["logo"] ?? null);
        echo "\" />
</div>
<meta itemprop=\"name\" content=\"";
        // line 16
        echo ($context["microdata_name"] ?? null);
        echo "\" />
</div>
<meta itemprop=\"datePublished\" content=\"";
        // line 18
        echo ($context["microdata_date_info"] ?? null);
        echo "\" />
<meta itemprop=\"dateModified\" content=\"";
        // line 19
        echo ($context["microdata_date_info"] ?? null);
        echo "\" />
<div itemscope itemtype=\"http://schema.org/BreadcrumbList\" style=\"display:none;\">
<div style=\"display:none;\">breadcrumbs_revolution_theme</div>
";
        // line 22
        $context["position"] = 1;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
<div itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
<link itemprop=\"item\" href=\"";
            // line 24
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">
<meta itemprop=\"name\" content=\"";
            // line 25
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "\" />
<meta itemprop=\"position\" content=\"";
            // line 26
            echo ($context["position"] ?? null);
            echo "\" />
</div>
";
            // line 28
            $context["position"] = (($context["position"] ?? null) + 1);
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
</div>
<ul class=\"breadcrumb\"><li class=\"br_ellipses\" style=\"display: none;\">...</li>
";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            echo " 
";
            // line 32
            if ((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                echo "<li><a href=\"";
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["breadcrumb"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["breadcrumb"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["text"] ?? null) : null);
                echo "</a></li>";
            } else {
            }
            echo " 
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo " 
<li><h1 class=\"inbreadcrumb\" itemprop=\"headline\">";
        // line 34
        echo ($context["heading_title"] ?? null);
        echo "</h1></li>
</ul>
  <div class=\"row\">";
        // line 36
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 37
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 38
            $context["class"] = "col-sm-6";
            echo " 
    ";
        } elseif ((        // line 39
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 40
            $context["class"] = "col-sm-9";
            echo " 
    ";
        } else {
            // line 41
            echo " 
    ";
            // line 42
            $context["class"] = "col-sm-12";
            echo " 
    ";
        }
        // line 43
        echo " 
    <div id=\"content\" class=\"";
        // line 44
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo " 
      <div itemprop=\"description\">";
        // line 45
        echo ($context["description"] ?? null);
        echo "</div>";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 46
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 48
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/template/information/information.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 48,  202 => 46,  196 => 45,  190 => 44,  187 => 43,  182 => 42,  179 => 41,  174 => 40,  170 => 39,  166 => 38,  162 => 37,  158 => 36,  153 => 34,  150 => 33,  135 => 32,  129 => 31,  118 => 28,  113 => 26,  109 => 25,  105 => 24,  96 => 22,  90 => 19,  86 => 18,  81 => 16,  76 => 14,  72 => 13,  65 => 9,  61 => 8,  57 => 7,  53 => 6,  48 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/information/information.twig", "");
    }
}
