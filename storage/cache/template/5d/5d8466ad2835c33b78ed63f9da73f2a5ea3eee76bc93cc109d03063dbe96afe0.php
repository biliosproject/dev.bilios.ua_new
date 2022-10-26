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

/* revolution/template/product/compare.twig */
class __TwigTemplate_a8fed53cfbc88dae3f6809974c577e4b1cb0ba6cfbc9f4093f623ce4bff57aa2 extends \Twig\Template
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
<div class=\"container\">
<div itemscope itemtype=\"http://schema.org/BreadcrumbList\" style=\"display:none;\">
";
        // line 4
        $context["position"] = 1;
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
<div itemprop=\"itemListElement\" itemscope itemtype=\"http://schema.org/ListItem\">
<link itemprop=\"item\" href=\"";
            // line 6
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">
<meta itemprop=\"name\" content=\"";
            // line 7
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "\" />
<meta itemprop=\"position\" content=\"";
            // line 8
            echo ($context["position"] ?? null);
            echo "\" />
</div>
";
            // line 10
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
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            echo " 
";
            // line 14
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
        // line 15
        echo " 
<li><h1 class=\"inbreadcrumb\">";
        // line 16
        echo ($context["heading_title"] ?? null);
        echo "</h1></li>
</ul>
  ";
        // line 18
        if (($context["success"] ?? null)) {
            echo " 
  <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 19
            echo ($context["success"] ?? null);
            echo " 
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 22
        echo " 
  <div class=\"row\">";
        // line 23
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 25
            $context["class"] = "col-sm-6";
            echo " 
    ";
        } elseif ((        // line 26
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 27
            $context["class"] = "col-sm-9";
            echo " 
    ";
        } else {
            // line 28
            echo " 
    ";
            // line 29
            $context["class"] = "col-sm-12";
            echo " 
    ";
        }
        // line 30
        echo " 
    <div id=\"content\" class=\"";
        // line 31
        echo ($context["class"] ?? null);
        echo " tab-content\">";
        echo ($context["content_top"] ?? null);
        echo " 
\t<div id=\"pusto\" class=\"content\" style=\"display:none\"></div>
\t
";
        // line 34
        if (($context["products"] ?? null)) {
            echo " 
\t";
            // line 35
            if (($context["cat_sort"] ?? null)) {
                echo " 
\t<ul id=\"tabs_compare\" class=\"nav nav-tabs\" role=\"tablist\">
\t\t";
                // line 37
                $context["numer"] = 1;
                echo " 
\t\t";
                // line 38
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["brand"] => $context["items"]) {
                    echo " 
\t\t<li id=\"tab2-";
                    // line 39
                    echo twig_replace_filter($context["brand"], [" " => ""]);
                    echo "\">
\t\t\t<a href=\"#tab-";
                    // line 40
                    echo twig_replace_filter($context["brand"], [" " => ""]);
                    echo "\" data-toggle=\"tab\" numer=\"";
                    echo ($context["numer"] ?? null);
                    echo "\" >";
                    echo $context["brand"];
                    echo "</a>
\t\t</li>
\t\t";
                    // line 42
                    $context["numer"] = (($context["numer"] ?? null) + 1);
                    echo " 
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['brand'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo " 
\t</ul>
\t\t";
                // line 45
                $context["numer"] = 1;
                echo " 
\t\t";
                // line 46
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["brand"] => $context["items"]) {
                    echo " 
\t\t\t<div id=\"tab-";
                    // line 47
                    echo twig_replace_filter($context["brand"], [" " => ""]);
                    echo "\" class=\"tab-pane numer";
                    echo ($context["numer"] ?? null);
                    echo "\">
\t\t\t\t<div class=\"cd-products-comparison-table compare-info\">
\t\t\t\t\t<div class=\"cd-header\">
\t\t\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t\t\t<label class=\"filter_otlich_span\"><input type=\"checkbox\" class=\"filter_otlich numer";
                    // line 51
                    echo ($context["numer"] ?? null);
                    echo "\" hidden>";
                    echo ($context["text_compare_onlyrazn"] ?? null);
                    echo "</label></label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"actions\">
\t\t\t\t\t\t\t<a href=\"#\" class=\"reset numer";
                    // line 54
                    echo ($context["numer"] ?? null);
                    echo "\">";
                    echo ($context["text_compare_otmena"] ?? null);
                    echo "</a>
\t\t\t\t\t\t\t<a href=\"#\" class=\"filter numer";
                    // line 55
                    echo ($context["numer"] ?? null);
                    echo "\">";
                    echo ($context["text_compare_filter"] ?? null);
                    echo "</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                    // line 57
                    $context["numer"] = (($context["numer"] ?? null) + 1);
                    echo " 
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"cd-products-table\">
\t\t\t\t\t\t<div class=\"features\">
\t\t\t\t\t\t\t<div class=\"top-info\">";
                    // line 61
                    echo ($context["text_compare_tovar"] ?? null);
                    echo "</div>
\t\t\t\t\t\t\t<ul class=\"cd-features-list\">
\t\t\t\t\t\t\t\t";
                    // line 63
                    if (($context["compare_price"] ?? null)) {
                        echo "\t\t\t\t\t
\t\t\t\t\t\t\t\t<li class=\"tr1\">";
                        // line 64
                        echo ($context["text_price"] ?? null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 65
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 66
                    if (($context["compare_model"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li class=\"osnovtr tr2\">";
                        // line 67
                        echo ($context["text_model"] ?? null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 68
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 69
                    if (($context["compare_sku"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li class=\"osnovtr tr3\">";
                        // line 70
                        echo ($context["text_sku"] ?? null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 71
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 72
                    if (($context["compare_manuf"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li class=\"osnovtr tr4\">";
                        // line 73
                        echo ($context["text_manufacturer"] ?? null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 74
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 75
                    if (($context["compare_stock"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li class=\"osnovtr tr5\">";
                        // line 76
                        echo ($context["text_availability"] ?? null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 77
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 78
                    if (($context["compare_rate"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t";
                        // line 79
                        if (($context["review_status"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t<li class=\"osnovtr tr6\">";
                            // line 80
                            echo ($context["text_rating"] ?? null);
                            echo "</li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 81
                        echo " 
\t\t\t\t\t\t\t\t";
                    }
                    // line 82
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 83
                    if (($context["compare_srtdesc"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li class=\"osnovtr tr7\">";
                        // line 84
                        echo ($context["text_summary"] ?? null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 85
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 86
                    if (($context["compare_weight"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li class=\"osnovtr tr8\">";
                        // line 87
                        echo ($context["text_weight"] ?? null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 88
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 89
                    if (($context["compare_razmer"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li class=\"osnovtr tr9\">";
                        // line 90
                        echo ($context["text_dimension"] ?? null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 91
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 92
                    if (($context["compare_atrib"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 93
                        $context["trnumber"] = 10;
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 94
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                            // line 95
                            if (($context["compare_atribgr"] ?? null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t<li class=\"compare-attribute\">";
                                // line 96
                                echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["attribute_group"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
                                echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 97
                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                            // line 98
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["items"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["products"] ?? null) : null));
                            foreach ($context['_seq'] as $context["key"] => $context["product"]) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 99
                                if (($context["key"] == 0)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 100
                                    $context['_parent'] = $context;
                                    $context['_seq'] = twig_ensure_traversable((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["attribute_group"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["attribute"] ?? null) : null));
                                    foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        // line 101
                                        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "array", false, true, false, 101), $context["key"], [], "array", true, true, false, 101)) {
                                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"osnovtd tr";
                                            // line 102
                                            echo ($context["trnumber"] ?? null);
                                            echo "\">";
                                            echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["attribute"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                                            echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                            // line 103
                                            $context["trnumber"] = (($context["trnumber"] ?? null) + 1);
                                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                        }
                                        // line 104
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    $_parent = $context['_parent'];
                                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                                    $context = array_intersect_key($context, $_parent) + $_parent;
                                    // line 105
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 106
                                echo " 
\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['product'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 107
                            echo " 
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 108
                        echo " 
\t\t\t\t\t\t\t\t";
                    }
                    // line 110
                    echo "\t\t\t\t\t\t\t\t<li></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"cd-products-wrapper\">
\t\t\t\t\t\t\t<ul class=\"cd-products-columns products_category\">
\t\t\t\t\t\t\t\t";
                    // line 115
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["items"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["products"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        echo " 
\t\t\t\t\t\t\t\t<li class=\"product\">
\t\t\t\t\t\t\t\t\t<div class=\"top-info product_";
                        // line 117
                        echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["product"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["product_id"] ?? null) : null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 119
                        echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["product"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["href"] ?? null) : null);
                        echo "\"><img src=\"";
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["product"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["thumb"] ?? null) : null);
                        echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t\t\t";
                        // line 120
                        if (($context["stikers_status"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"stiker_panel\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 122
                            if ((((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["product"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["quantity"] ?? null) : null) > 0) && ((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["product"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["price_number"] ?? null) : null) != 0))) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 123
                                if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["product"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["stiker_spec"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 124
                                    if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["product"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["special"] ?? null) : null)) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_spec\"><span>";
                                        // line 125
                                        echo (("- " . twig_round((((twig_get_attribute($this->env, $this->source, $context["product"], "price_number", [], "any", false, false, false, 125) - twig_get_attribute($this->env, $this->source, $context["product"], "special_number", [], "any", false, false, false, 125)) / twig_get_attribute($this->env, $this->source, $context["product"], "price_number", [], "any", false, false, false, 125)) * 100))) . "%");
                                        echo "</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 126
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 127
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 128
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 129
                            if ((($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["product"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["stiker_best"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_best\">";
                                // line 130
                                echo ($context["text_catalog_stiker_best"] ?? null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 131
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 132
                            if ((($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["product"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["stiker_last"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_last\">";
                                // line 133
                                echo ($context["text_catalog_stiker_last"] ?? null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 134
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 135
                            if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["product"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["stiker_sklad_status"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                // line 136
                                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["product"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["stiker_sklad_status"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } elseif ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 =                             // line 137
$context["product"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["stiker_stock"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 138
                                if ((((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["product"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["price_number"] ?? null) : null) == 0) &&  !($context["zakaz_price_null"] ?? null))) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                    // line 139
                                    echo ($context["text_catalog_stiker_netu_2"] ?? null);
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c =                                 // line 140
$context["product"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["quantity"] ?? null) : null) < 1) && ((($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["product"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["price_number"] ?? null) : null) > 0)) &&  !($context["zakaz"] ?? null))) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                    // line 141
                                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["product"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["text_catalog_stiker_netu"] ?? null) : null);
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 =                                 // line 142
$context["product"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["quantity"] ?? null) : null) < 1) &&  !($context["zakaz"] ?? null)) && ($context["zakaz_price_null"] ?? null))) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                    // line 143
                                    echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["product"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["text_catalog_stiker_netu"] ?? null) : null);
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 =                                 // line 144
$context["product"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["quantity"] ?? null) : null) < 1) && ($context["zakaz"] ?? null)) &&  !($context["zakaz_price_null"] ?? null))) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                    // line 145
                                    echo (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["product"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["text_catalog_stiker_netu"] ?? null) : null);
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                } elseif (((((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 =                                 // line 146
$context["product"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["quantity"] ?? null) : null) < 1) && ($context["zakaz"] ?? null)) && ($context["zakaz_price_null"] ?? null))) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                    // line 147
                                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["product"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["text_catalog_stiker_netu"] ?? null) : null);
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 148
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 149
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 150
                            if ((($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["product"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["stiker_upc"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_user\">";
                                // line 151
                                echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["product"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["stiker_upc"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 152
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 153
                            if ((($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["product"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["stiker_ean"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_user\">";
                                // line 154
                                echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["product"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["stiker_ean"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 155
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 156
                            if ((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["product"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["stiker_jan"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_user\">";
                                // line 157
                                echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["product"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["stiker_jan"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 158
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 159
                            if ((($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["product"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["stiker_isbn"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_user\">";
                                // line 160
                                echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["product"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["stiker_isbn"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 161
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 162
                            if ((($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["product"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["stiker_mpn"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_user\">";
                                // line 163
                                echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["product"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["stiker_mpn"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 164
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 166
                        echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h3><a href=\"";
                        // line 168
                        echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["product"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["href"] ?? null) : null);
                        echo "\">";
                        echo (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["product"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["name"] ?? null) : null);
                        echo "</a></h3>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<ul class=\"cd-features-list\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 171
                        if (($context["compare_price"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t<li id=\"td_";
                            // line 172
                            echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["product"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["product_id"] ?? null) : null);
                            echo "\" class=\"osnovtd tr1\">";
                            if (((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f = $context["product"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["price_number"] ?? null) : null) != 0)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t";
                                // line 173
                                if ( !(($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["product"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["special"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                                    // line 174
                                    echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["product"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["price"] ?? null) : null);
                                    echo (((($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["product"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["ed_izm"] ?? null) : null)) ? ((("<span class=\"ed_izm\">" . (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["product"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["ed_izm"] ?? null) : null)) . "</span>")) : (""));
                                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 175
                                    echo " 
\t\t\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                    // line 176
                                    echo (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["product"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["price"] ?? null) : null);
                                    echo "</span> <span class=\"price-new\">";
                                    echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["product"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["special"] ?? null) : null);
                                    echo (((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = $context["product"]) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["ed_izm"] ?? null) : null)) ? ((("<span class=\"ed_izm\">" . (($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["product"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["ed_izm"] ?? null) : null)) . "</span>")) : (""));
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 177
                                echo " 
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 178
                            echo " 
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 180
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 181
                        if (($context["compare_model"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t<li id=\"td_";
                            // line 182
                            echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["product"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["product_id"] ?? null) : null);
                            echo "\" class=\"osnovtd tr2\">";
                            echo (($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a = $context["product"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["model"] ?? null) : null);
                            echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 183
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 184
                        if (($context["compare_sku"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t<li id=\"td_";
                            // line 185
                            echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["product"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["product_id"] ?? null) : null);
                            echo "\" class=\"osnovtd tr3\">";
                            echo (($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["product"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["sku"] ?? null) : null);
                            echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 186
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 187
                        if (($context["compare_manuf"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t<li id=\"td_";
                            // line 188
                            echo (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["product"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["product_id"] ?? null) : null);
                            echo "\" class=\"osnovtd tr4\">";
                            echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["product"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["manufacturer"] ?? null) : null);
                            echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 189
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 190
                        if (($context["compare_stock"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t<li id=\"td_";
                            // line 191
                            echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["product"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["product_id"] ?? null) : null);
                            echo "\" class=\"osnovtd tr5\">";
                            echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["product"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["availability"] ?? null) : null);
                            echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 192
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 193
                        if (($context["compare_rate"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                            // line 194
                            if (($context["review_status"] ?? null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t<li id=\"td_";
                                // line 195
                                echo (($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = $context["product"]) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["product_id"] ?? null) : null);
                                echo "\" class=\"osnovtd rating tr6\">
\t\t\t\t\t\t\t\t\t\t";
                                // line 196
                                $context["i"] = 1;
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                                    // line 197
                                    if (((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["product"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["rating"] ?? null) : null) < $context["i"])) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
                                    } else {
                                        // line 199
                                        echo " 
\t\t\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 201
                                    echo " 
\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 202
                                echo " 
\t\t\t\t\t\t\t\t\t\t<sup>
\t\t\t\t\t\t\t\t\t\t";
                                // line 204
                                echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["product"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["reviews"] ?? null) : null);
                                echo "</sup></li>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 205
                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 206
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 207
                        if (($context["compare_srtdesc"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t<li id=\"td_";
                            // line 208
                            echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["product"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["product_id"] ?? null) : null);
                            echo "\" class=\"description osnovtd tr7\">";
                            echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["product"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["description"] ?? null) : null);
                            echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 209
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 210
                        if (($context["compare_weight"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t<li id=\"td_";
                            // line 211
                            echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["product"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["product_id"] ?? null) : null);
                            echo "\" class=\"osnovtd tr8\">";
                            echo (($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = $context["product"]) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["weight"] ?? null) : null);
                            echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 212
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 213
                        if (($context["compare_razmer"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t<li id=\"td_";
                            // line 214
                            echo (($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["product"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["product_id"] ?? null) : null);
                            echo "\" class=\"osnovtd tr9\">";
                            echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["product"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["length"] ?? null) : null);
                            echo " x ";
                            echo (($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 = $context["product"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["width"] ?? null) : null);
                            echo " x ";
                            echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["product"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["height"] ?? null) : null);
                            echo "</li>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 215
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 216
                        if (($context["compare_atrib"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 217
                            $context["trnumber"] = 10;
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 218
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
                            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 219
                                if (($context["compare_atribgr"] ?? null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"compare-attribute\"></li>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 221
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 222
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable((($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["attribute_group"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["attribute"] ?? null) : null));
                                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 223
                                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "array", false, true, false, 223), $context["key"], [], "array", true, true, false, 223)) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"osnovtd tr";
                                        // line 224
                                        echo ($context["trnumber"] ?? null);
                                        echo "\">";
                                        echo (($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 = (($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["product"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["attribute"] ?? null) : null)) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985[$context["key"]] ?? null) : null);
                                        echo "</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 225
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 226
                                    $context["trnumber"] = (($context["trnumber"] ?? null) + 1);
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 227
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 228
                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 229
                        echo " 
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<div class=\"cart_wish\">
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 232
                        if (((($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["product"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["quantity"] ?? null) : null) > 0)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"get_revpopup_cart('";
                            // line 234
                            echo (($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = $context["product"]) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["product_id"] ?? null) : null);
                            echo "', 'catalog_mod', '";
                            echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["product"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["minimum"] ?? null) : null);
                            echo "');\"><i class=\"fa fa-border fa-shopping-basket\"><span class=\"prlistb\">";
                            echo ($context["button_cart"] ?? null);
                            echo "</span></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        } elseif (                        // line 236
($context["predzakaz_button"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"get_revpopup_predzakaz('";
                            // line 238
                            echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["product"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["product_id"] ?? null) : null);
                            echo "');\"><i class=\"fa fa-border fa-shopping-basket predzakaz\"><span class=\"prlistb\">";
                            echo ($context["text_predzakaz"] ?? null);
                            echo "</span></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 240
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 241
                        if (($context["rev_wish_prod"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist wishlist_wprid_";
                            // line 243
                            echo (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["product"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["product_id"] ?? null) : null);
                            echo " ";
                            echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["product"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["wishlist_class"] ?? null) : null);
                            echo "\" data-toggle=\"tooltip\" onclick=\"wishlist.add('";
                            echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["product"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["product_id"] ?? null) : null);
                            echo "');\" title=\"";
                            echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["product"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["button_wishlist"] ?? null) : null);
                            echo "\"><i class=\"fa fa-border fa-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 245
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"trash\" data-toggle=\"tooltip\" title=\"";
                        // line 246
                        echo ($context["text_compare_trash_tooltip"] ?? null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                        // line 247
                        echo (($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["product"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["remove"] ?? null) : null);
                        echo "\"><i class=\"fa fa-border fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 253
                    echo "\t\t\t\t
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<ul class=\"cd-table-navigation\">
\t\t\t\t\t\t\t<li><a href=\"#0\" class=\"prev inactive\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#0\" class=\"next\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['brand'], $context['items'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 263
                echo "\t\t  
\t";
            } else {
                // line 264
                echo " 
\t\t<section class=\"cd-products-comparison-table compare-info\">
\t\t\t<div class=\"cd-header\">
\t\t\t\t<div style=\"float: left;\">
\t\t\t\t\t<label class=\"filter_otlich_span\"><input type=\"checkbox\" class=\"filter_otlich\" hidden>";
                // line 268
                echo ($context["text_compare_onlyrazn"] ?? null);
                echo "</label></label>
\t\t\t\t</div>
\t\t\t\t<div class=\"actions\">
\t\t\t\t\t<a href=\"#\" class=\"reset\">";
                // line 271
                echo ($context["text_compare_otmena"] ?? null);
                echo "</a>
\t\t\t\t\t<a href=\"#\" class=\"filter\">";
                // line 272
                echo ($context["text_compare_filter"] ?? null);
                echo "</a>
\t\t\t\t</div>\t\t
\t\t\t</div>
\t\t\t<div class=\"cd-products-table\">
\t\t\t\t<div class=\"features\">
\t\t\t\t\t<div class=\"top-info\">";
                // line 277
                echo ($context["text_compare_tovar"] ?? null);
                echo "</div>
\t\t\t\t\t<ul class=\"cd-features-list\">
\t\t\t\t\t\t";
                // line 279
                if (($context["compare_price"] ?? null)) {
                    echo "\t\t\t\t\t
\t\t\t\t\t\t<li class=\"tr1\">";
                    // line 280
                    echo ($context["text_price"] ?? null);
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 281
                echo " 
\t\t\t\t\t\t";
                // line 282
                if (($context["compare_model"] ?? null)) {
                    echo " 
\t\t\t\t\t\t<li class=\"osnovtr tr2\">";
                    // line 283
                    echo ($context["text_model"] ?? null);
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 284
                echo " 
\t\t\t\t\t\t";
                // line 285
                if (($context["compare_sku"] ?? null)) {
                    echo " 
\t\t\t\t\t\t<li class=\"osnovtr tr3\">";
                    // line 286
                    echo ($context["text_sku"] ?? null);
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 287
                echo " 
\t\t\t\t\t\t";
                // line 288
                if (($context["compare_manuf"] ?? null)) {
                    echo " 
\t\t\t\t\t\t<li class=\"osnovtr tr4\">";
                    // line 289
                    echo ($context["text_manufacturer"] ?? null);
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 290
                echo " 
\t\t\t\t\t\t";
                // line 291
                if (($context["compare_stock"] ?? null)) {
                    echo " 
\t\t\t\t\t\t<li class=\"osnovtr tr5\">";
                    // line 292
                    echo ($context["text_availability"] ?? null);
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 293
                echo " 
\t\t\t\t\t\t";
                // line 294
                if (($context["compare_rate"] ?? null)) {
                    echo " 
\t\t\t\t\t\t";
                    // line 295
                    if (($context["review_status"] ?? null)) {
                        echo " 
\t\t\t\t\t\t<li class=\"osnovtr tr6\">";
                        // line 296
                        echo ($context["text_rating"] ?? null);
                        echo "</li>
\t\t\t\t\t\t";
                    }
                    // line 297
                    echo " 
\t\t\t\t\t\t";
                }
                // line 298
                echo " 
\t\t\t\t\t\t";
                // line 299
                if (($context["compare_srtdesc"] ?? null)) {
                    echo " 
\t\t\t\t\t\t<li class=\"osnovtr tr7\">";
                    // line 300
                    echo ($context["text_summary"] ?? null);
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 301
                echo " 
\t\t\t\t\t\t";
                // line 302
                if (($context["compare_weight"] ?? null)) {
                    echo " 
\t\t\t\t\t\t<li class=\"osnovtr tr8\">";
                    // line 303
                    echo ($context["text_weight"] ?? null);
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 304
                echo " 
\t\t\t\t\t\t";
                // line 305
                if (($context["compare_razmer"] ?? null)) {
                    echo " 
\t\t\t\t\t\t<li class=\"osnovtr tr9\">";
                    // line 306
                    echo ($context["text_dimension"] ?? null);
                    echo "</li>
\t\t\t\t\t\t";
                }
                // line 307
                echo " 
\t\t\t\t\t\t";
                // line 308
                if (($context["compare_atrib"] ?? null)) {
                    echo " 
\t\t\t\t\t\t";
                    // line 309
                    $context["trnumber"] = 10;
                    echo " 
\t\t\t\t\t\t";
                    // line 310
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                        echo " 
\t\t\t\t\t\t";
                        // line 311
                        if (($context["compare_atribgr"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t<li class=\"compare-attribute\">";
                            // line 312
                            echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["attribute_group"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["name"] ?? null) : null);
                            echo "</li>
\t\t\t\t\t\t";
                        }
                        // line 313
                        echo " 
\t\t\t\t\t\t";
                        // line 314
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = $context["attribute_group"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["attribute"] ?? null) : null));
                        foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                            echo " 
\t\t\t\t\t\t<li class=\"osnovtr tr";
                            // line 315
                            echo ($context["trnumber"] ?? null);
                            echo "\">";
                            echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["attribute"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["name"] ?? null) : null);
                            echo "</li>
\t\t\t\t\t\t";
                            // line 316
                            $context["trnumber"] = (($context["trnumber"] ?? null) + 1);
                            echo " 
\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 317
                        echo " 
\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 318
                    echo " 
\t\t\t\t\t\t";
                }
                // line 319
                echo " 
\t\t\t\t\t\t<li></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"cd-products-wrapper\">
\t\t\t\t\t<ul class=\"cd-products-columns products_category\">
\t\t\t\t\t\t";
                // line 325
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo " 
\t\t\t\t\t\t<li class=\"product\">
\t\t\t\t\t\t\t<div class=\"top-info product_";
                    // line 327
                    echo (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["product"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["product_id"] ?? null) : null);
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"image\">
\t\t\t\t\t\t\t\t<a href=\"";
                    // line 329
                    echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["product"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["href"] ?? null) : null);
                    echo "\"><img src=\"";
                    echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["product"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["thumb"] ?? null) : null);
                    echo "\" alt=\"\"></a>
\t\t\t\t\t\t\t\t";
                    // line 330
                    if (($context["stikers_status"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t<div class=\"stiker_panel\">
\t\t\t\t\t\t\t\t\t\t";
                        // line 332
                        if ((((($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = $context["product"]) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["quantity"] ?? null) : null) > 0) && ((($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = $context["product"]) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["price_number"] ?? null) : null) != 0))) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 333
                            if ((($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = $context["product"]) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["stiker_spec"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 334
                                if ((($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = $context["product"]) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["special"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_spec\"><span>";
                                    // line 335
                                    echo (("- " . twig_round((((twig_get_attribute($this->env, $this->source, $context["product"], "price_number", [], "any", false, false, false, 335) - twig_get_attribute($this->env, $this->source, $context["product"], "special_number", [], "any", false, false, false, 335)) / twig_get_attribute($this->env, $this->source, $context["product"], "price_number", [], "any", false, false, false, 335)) * 100))) . "%");
                                    echo "</span></span>
\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 336
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 337
                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 338
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 339
                        if ((($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = $context["product"]) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["stiker_best"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_best\">";
                            // line 340
                            echo ($context["text_catalog_stiker_best"] ?? null);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 341
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 342
                        if ((($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = $context["product"]) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["stiker_last"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_last\">";
                            // line 343
                            echo ($context["text_catalog_stiker_last"] ?? null);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 344
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 345
                        if ((($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = $context["product"]) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["stiker_sklad_status"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                            // line 346
                            echo (($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["product"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["stiker_sklad_status"] ?? null) : null);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        } elseif ((($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 =                         // line 347
$context["product"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["stiker_stock"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 348
                            if ((((($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["product"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["price_number"] ?? null) : null) == 0) &&  !($context["zakaz_price_null"] ?? null))) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                // line 349
                                echo ($context["text_catalog_stiker_netu_2"] ?? null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                            } elseif (((((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 =                             // line 350
$context["product"]) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["quantity"] ?? null) : null) < 1) && ((($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = $context["product"]) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["price_number"] ?? null) : null) > 0)) &&  !($context["zakaz"] ?? null))) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                // line 351
                                echo (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = $context["product"]) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["text_catalog_stiker_netu"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                            } elseif (((((($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 =                             // line 352
$context["product"]) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["quantity"] ?? null) : null) < 1) &&  !($context["zakaz"] ?? null)) && ($context["zakaz_price_null"] ?? null))) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                // line 353
                                echo (($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = $context["product"]) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["text_catalog_stiker_netu"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                            } elseif (((((($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 =                             // line 354
$context["product"]) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["quantity"] ?? null) : null) < 1) && ($context["zakaz"] ?? null)) &&  !($context["zakaz_price_null"] ?? null))) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                // line 355
                                echo (($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = $context["product"]) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["text_catalog_stiker_netu"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                            } elseif (((((($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b =                             // line 356
$context["product"]) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["quantity"] ?? null) : null) < 1) && ($context["zakaz"] ?? null)) && ($context["zakaz_price_null"] ?? null))) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_netu\">";
                                // line 357
                                echo (($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e = $context["product"]) && is_array($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e) || $__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e instanceof ArrayAccess ? ($__internal_d128b295b5eb655509cce26cda95e1ee2e40d0773f4663d4c1290ef76c63f53e["text_catalog_stiker_netu"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 358
                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 359
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 360
                        if ((($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 = $context["product"]) && is_array($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7) || $__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7 instanceof ArrayAccess ? ($__internal_c13aaf965ee968fbdf4e25d265e9ad3332196be42b56e71118384af8d580afc7["stiker_upc"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_user\">";
                            // line 361
                            echo (($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 = $context["product"]) && is_array($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606) || $__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606 instanceof ArrayAccess ? ($__internal_eac0fb02beae87e52d8817de26caac024b72dbca3fe084a7fb60ce6297e74606["stiker_upc"] ?? null) : null);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 362
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 363
                        if ((($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd = $context["product"]) && is_array($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd) || $__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd instanceof ArrayAccess ? ($__internal_f449bd2e1c43123f4aea5ebb1dcb3149049e6b08332d88c5cbea9cbf72d7d7fd["stiker_ean"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_user\">";
                            // line 364
                            echo (($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e = $context["product"]) && is_array($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e) || $__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e instanceof ArrayAccess ? ($__internal_ac6028158aec8e9114a7b50d00df46f3a0352559c4384cdefd768fa8d1f5095e["stiker_ean"] ?? null) : null);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 365
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 366
                        if ((($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 = $context["product"]) && is_array($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1) || $__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1 instanceof ArrayAccess ? ($__internal_7c32a0b33fb8ca8d971d62abc97ef27c0b0f4cefceb603cb91f0956165f4a2e1["stiker_jan"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_user\">";
                            // line 367
                            echo (($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb = $context["product"]) && is_array($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb) || $__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb instanceof ArrayAccess ? ($__internal_68d3b371ec0c4bb1581025ed4c1d76a431a042b7b439120f66468cb409de0cdb["stiker_jan"] ?? null) : null);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 368
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 369
                        if ((($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf = $context["product"]) && is_array($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf) || $__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf instanceof ArrayAccess ? ($__internal_12df7a6a0a260f0401b6892f7ce4fef2ea0fea7f4abf3aaab9ef6f1113a738cf["stiker_isbn"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_user\">";
                            // line 370
                            echo (($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b = $context["product"]) && is_array($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b) || $__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b instanceof ArrayAccess ? ($__internal_1fa86e54c040f0d1b500ff8a8536fb704ead4a955f38e9ee0c72d436e09d2d6b["stiker_isbn"] ?? null) : null);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 371
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                        // line 372
                        if ((($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 = $context["product"]) && is_array($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980) || $__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980 instanceof ArrayAccess ? ($__internal_7c817ef80fec483e83fdd5a0d75d7936b34e91df63a1e5f99c810f6ddfb73980["stiker_mpn"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t<span class=\"stiker stiker_user\">";
                            // line 373
                            echo (($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 = $context["product"]) && is_array($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345) || $__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345 instanceof ArrayAccess ? ($__internal_58f05cb7b103fdb27c83e116d9b750a441975afa718f181d426ba20756cae345["stiker_mpn"] ?? null) : null);
                            echo "</span>
\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 374
                        echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 376
                    echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<h3><a href=\"";
                    // line 378
                    echo (($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 = $context["product"]) && is_array($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3) || $__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3 instanceof ArrayAccess ? ($__internal_2c848f3022a3402e3a4e27a30257fa7d076f394b2c17fd1315626995668cc7a3["href"] ?? null) : null);
                    echo "\">";
                    echo (($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 = $context["product"]) && is_array($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0) || $__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0 instanceof ArrayAccess ? ($__internal_b8c7cfa2093058440418fed5e0a741d0931d374a0b972ab2bdfe5d1a043c45d0["name"] ?? null) : null);
                    echo "</a></h3>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<ul class=\"cd-features-list\">
\t\t\t\t\t\t\t\t";
                    // line 381
                    if (($context["compare_price"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li id=\"td_";
                        // line 382
                        echo (($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 = $context["product"]) && is_array($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938) || $__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938 instanceof ArrayAccess ? ($__internal_c1cd480b2bae110b528bbc3f808e69c4b6a9aeedf00a361275f8ddb342dfe938["product_id"] ?? null) : null);
                        echo "\" class=\"osnovtd tr1\">";
                        if (((($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 = $context["product"]) && is_array($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3) || $__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3 instanceof ArrayAccess ? ($__internal_079975fe41d37645946c3a823d9bb78a9ae0e38816557a03403725361f35feb3["price_number"] ?? null) : null) != 0)) {
                            echo " 
\t\t\t\t\t\t\t\t";
                            // line 383
                            if ( !(($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa = $context["product"]) && is_array($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa) || $__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa instanceof ArrayAccess ? ($__internal_740db85f46dbd95cea320267399fd88e8007c386d126eec44ce5a5594fea0daa["special"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t";
                                // line 384
                                echo (($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb = $context["product"]) && is_array($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb) || $__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb instanceof ArrayAccess ? ($__internal_04e2723480818cf7e4ae08c1e7380310abe34ee48600ebabbfbaca3a62b4f1fb["price"] ?? null) : null);
                                echo (((($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c = $context["product"]) && is_array($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c) || $__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c instanceof ArrayAccess ? ($__internal_9dfe9126eb6cb3d8182bbdebdcbf291354ce41935a4d52134757b624790fe26c["ed_izm"] ?? null) : null)) ? ((("<span class=\"ed_izm\">" . (($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a = $context["product"]) && is_array($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a) || $__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a instanceof ArrayAccess ? ($__internal_7886d104df990d4d01343e15743b569d1995f6a6a8de3ead740a6091880b629a["ed_izm"] ?? null) : null)) . "</span>")) : (""));
                                echo " 
\t\t\t\t\t\t\t\t";
                            } else {
                                // line 385
                                echo " 
\t\t\t\t\t\t\t\t<span class=\"price-old\">";
                                // line 386
                                echo (($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 = $context["product"]) && is_array($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6) || $__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6 instanceof ArrayAccess ? ($__internal_bf8548f45bc193921ffb4426690048a7605b21cb5873c3e67934670fc157bcb6["price"] ?? null) : null);
                                echo "</span> <span class=\"price-new\">";
                                echo (($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b = $context["product"]) && is_array($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b) || $__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b instanceof ArrayAccess ? ($__internal_d9d33b22591102d2e461af9c204c3c40751fa247b0275a5e9ac02a242b6b099b["special"] ?? null) : null);
                                echo (((($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 = $context["product"]) && is_array($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526) || $__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526 instanceof ArrayAccess ? ($__internal_eed548cde44c216c917d86f1b41aeead16364f508b904d138a9861b48cf18526["ed_izm"] ?? null) : null)) ? ((("<span class=\"ed_izm\">" . (($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f = $context["product"]) && is_array($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f) || $__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f instanceof ArrayAccess ? ($__internal_69673c0dda0724bda92ca0f89665181eb299815d5bf0d9166a7fa457f623049f["ed_izm"] ?? null) : null)) . "</span>")) : (""));
                                echo "</span>
\t\t\t\t\t\t\t\t";
                            }
                            // line 387
                            echo " 
\t\t\t\t\t\t\t\t";
                        }
                        // line 388
                        echo " 
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 390
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 391
                    if (($context["compare_model"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li id=\"td_";
                        // line 392
                        echo (($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c = $context["product"]) && is_array($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c) || $__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c instanceof ArrayAccess ? ($__internal_98e7c66b1d8077f0adf5874b6a626a0256df01315d35d9e34fe7dbdf2b1f397c["product_id"] ?? null) : null);
                        echo "\" class=\"osnovtd tr2\">";
                        echo (($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 = $context["product"]) && is_array($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74) || $__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74 instanceof ArrayAccess ? ($__internal_b34f576c9690a300f94652a12516183f72eacabacea74206fd0ebac5164ede74["model"] ?? null) : null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 393
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 394
                    if (($context["compare_sku"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li id=\"td_";
                        // line 395
                        echo (($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff = $context["product"]) && is_array($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff) || $__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff instanceof ArrayAccess ? ($__internal_4a561b149f190c3cf54242a61f4c7f0df2a717b925f2c7a775371ef55c39caff["product_id"] ?? null) : null);
                        echo "\" class=\"osnovtd tr3\">";
                        echo (($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 = $context["product"]) && is_array($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918) || $__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918 instanceof ArrayAccess ? ($__internal_7f64f85f9301de90a5b045895fc6e5587d70b65ebc68918344f8c25d458d3918["sku"] ?? null) : null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 396
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 397
                    if (($context["compare_manuf"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li id=\"td_";
                        // line 398
                        echo (($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 = $context["product"]) && is_array($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5) || $__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5 instanceof ArrayAccess ? ($__internal_b57c690297f5d1db403c4e65f613e450889065335a92d7f73f82e713f90b25e5["product_id"] ?? null) : null);
                        echo "\" class=\"osnovtd tr4\">";
                        echo (($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 = $context["product"]) && is_array($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219) || $__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219 instanceof ArrayAccess ? ($__internal_75d475ff9edc93fda230c7c714c00f4c5dbb39fa0dbbcb262e9ab1617f92f219["manufacturer"] ?? null) : null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 399
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 400
                    if (($context["compare_stock"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li id=\"td_";
                        // line 401
                        echo (($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 = $context["product"]) && is_array($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20) || $__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20 instanceof ArrayAccess ? ($__internal_5aa517627f62fe0421e8b859b10fd7903a81d7224c214373093f337db21ecc20["product_id"] ?? null) : null);
                        echo "\" class=\"osnovtd tr5\">";
                        echo (($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 = $context["product"]) && is_array($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16) || $__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16 instanceof ArrayAccess ? ($__internal_59583b2f460abbfb2a52836600eada7d270602d83eceef746b0a8a9b74fdad16["availability"] ?? null) : null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 402
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 403
                    if (($context["compare_rate"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t";
                        // line 404
                        if (($context["review_status"] ?? null)) {
                            echo " 
\t\t\t\t\t\t\t\t<li id=\"td_";
                            // line 405
                            echo (($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 = $context["product"]) && is_array($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0) || $__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0 instanceof ArrayAccess ? ($__internal_eb210cb6135ea08a769b7294a890e7a98a83ae7e9aaa91aca4b3341ab5eedef0["product_id"] ?? null) : null);
                            echo "\" class=\"osnovtd rating tr6\">
\t\t\t\t\t\t\t\t";
                            // line 406
                            $context["i"] = 1;
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(range($context["i"], 5));
                            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                                echo " 
\t\t\t\t\t\t\t\t";
                                // line 407
                                if (((($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 = $context["product"]) && is_array($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1) || $__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1 instanceof ArrayAccess ? ($__internal_3c68232c931f587fa4dbd185c63e9c57f23a8dfaef6e79a75ec5650821da84b1["rating"] ?? null) : null) < $context["i"])) {
                                    echo " 
\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 409
                                    echo " 
\t\t\t\t\t\t\t\t<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
\t\t\t\t\t\t\t\t";
                                }
                                // line 411
                                echo " 
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 412
                            echo " 
\t\t\t\t\t\t\t\t<sup>
\t\t\t\t\t\t\t\t";
                            // line 414
                            echo (($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 = $context["product"]) && is_array($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008) || $__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008 instanceof ArrayAccess ? ($__internal_8299895db9519c717c7e4fc5f671ace0c58ed9700678f3c82fe9e8d06a692008["reviews"] ?? null) : null);
                            echo "</sup></li>
\t\t\t\t\t\t\t\t";
                        }
                        // line 415
                        echo " 
\t\t\t\t\t\t\t\t";
                    }
                    // line 416
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 417
                    if (($context["compare_srtdesc"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li id=\"td_";
                        // line 418
                        echo (($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 = $context["product"]) && is_array($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00) || $__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00 instanceof ArrayAccess ? ($__internal_3558a217fd2ee5e5e39300afd7d24968a189797715bbe1595642d4b28fdafd00["product_id"] ?? null) : null);
                        echo "\" class=\"description osnovtd tr7\">";
                        echo (($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 = $context["product"]) && is_array($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315) || $__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315 instanceof ArrayAccess ? ($__internal_e4582927b18c273aab9fa9f2f830b340dbc1393d62fc92ee04c436056cc3e315["description"] ?? null) : null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 419
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 420
                    if (($context["compare_weight"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li id=\"td_";
                        // line 421
                        echo (($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb = $context["product"]) && is_array($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb) || $__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb instanceof ArrayAccess ? ($__internal_90f4de91f7794e33f5d5fc1a817f159833c6316cbb98068d30eea7b36ee580eb["product_id"] ?? null) : null);
                        echo "\" class=\"osnovtd tr8\">";
                        echo (($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde = $context["product"]) && is_array($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde) || $__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde instanceof ArrayAccess ? ($__internal_fcbe1339b13cfceb7464b73e579a3d049ba6a61cd21bfa924a6104b1f9e70bde["weight"] ?? null) : null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 422
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 423
                    if (($context["compare_razmer"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t<li id=\"td_";
                        // line 424
                        echo (($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 = $context["product"]) && is_array($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5) || $__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5 instanceof ArrayAccess ? ($__internal_030d86864426f94dd0e16219c86ce091338cf650d27fbbfbcd6a8a0a1595b8b5["product_id"] ?? null) : null);
                        echo "\" class=\"osnovtd tr9\">";
                        echo (($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f = $context["product"]) && is_array($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f) || $__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f instanceof ArrayAccess ? ($__internal_87681efb9ab969cc41312bbee69f5bb70f772c16b053746b0bf6082c25cf226f["length"] ?? null) : null);
                        echo " x ";
                        echo (($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b = $context["product"]) && is_array($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b) || $__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b instanceof ArrayAccess ? ($__internal_075fde5d80e6f3ce1d25eb3926912924a44e2a84db14fc836f4fc19fcb57fc2b["width"] ?? null) : null);
                        echo " x ";
                        echo (($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d = $context["product"]) && is_array($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d) || $__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d instanceof ArrayAccess ? ($__internal_8a99126ee0c242cbea7a1e47fa82c7524b50d92010e4de19211e97cee1960d7d["height"] ?? null) : null);
                        echo "</li>
\t\t\t\t\t\t\t\t";
                    }
                    // line 425
                    echo " 
\t\t\t\t\t\t\t\t";
                    // line 426
                    if (($context["compare_atrib"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 427
                        $context["trnumber"] = 10;
                        echo " 
\t\t\t\t\t\t\t\t\t";
                        // line 428
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
                        foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                            // line 429
                            if (($context["compare_atribgr"] ?? null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t<li class=\"compare-attribute\"></li>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 431
                            echo " 
\t\t\t\t\t\t\t\t\t\t";
                            // line 432
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d = $context["attribute_group"]) && is_array($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d) || $__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d instanceof ArrayAccess ? ($__internal_d4953b3c006295766d1c122e12bc1011d304aaceeaa5adaad0ddacee9b0ac73d["attribute"] ?? null) : null));
                            foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 433
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["product"], "attribute", [], "array", false, true, false, 433), $context["key"], [], "array", true, true, false, 433)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"osnovtd tr";
                                    // line 434
                                    echo ($context["trnumber"] ?? null);
                                    echo "\">";
                                    echo (($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 = (($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 = $context["product"]) && is_array($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6) || $__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6 instanceof ArrayAccess ? ($__internal_9bf6299aac8f9c23c0d5210c076dcd6a9ada2688fdd89682c61bad4df90664b6["attribute"] ?? null) : null)) && is_array($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2) || $__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2 instanceof ArrayAccess ? ($__internal_4d98e80b72602982463f469eb9bdc0f5c8104d67d420559aef3c263130076eb2[$context["key"]] ?? null) : null);
                                    echo "</li>
\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 435
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"osnovtd tr";
                                    // line 436
                                    echo ($context["trnumber"] ?? null);
                                    echo "\"></li>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 437
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                                // line 438
                                $context["trnumber"] = (($context["trnumber"] ?? null) + 1);
                                echo " 
\t\t\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 439
                            echo " 
\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 440
                        echo " 
\t\t\t\t\t\t\t\t";
                    }
                    // line 441
                    echo " 
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<div class=\"cart_wish\">
\t\t\t\t\t\t\t\t\t";
                    // line 444
                    if (((($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a = $context["product"]) && is_array($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a) || $__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a instanceof ArrayAccess ? ($__internal_831874d43c225a9c9f6df2b07573e383cb6d5e4c3cb2ac53d736653473ba264a["quantity"] ?? null) : null) > 0)) {
                        echo " 
\t\t\t\t\t\t\t\t\t<div class=\"cart\">
\t\t\t\t\t\t\t\t\t\t<a onclick=\"get_revpopup_cart('";
                        // line 446
                        echo (($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee = $context["product"]) && is_array($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee) || $__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee instanceof ArrayAccess ? ($__internal_ed2b0be7f3a3dac5fb5105bb7e9c1e1f6415f5faf37af639bfc973c1dc249cee["product_id"] ?? null) : null);
                        echo "', 'catalog_mod', '";
                        echo (($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 = $context["product"]) && is_array($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523) || $__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523 instanceof ArrayAccess ? ($__internal_ee4a9f489859b49aae8b28fc320a26b03d2394f3fb8bb9a69827e8f612baa523["minimum"] ?? null) : null);
                        echo "');\"><i class=\"fa fa-border fa-shopping-basket\"><span class=\"prlistb\">";
                        echo ($context["button_cart"] ?? null);
                        echo "</span></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    } elseif (                    // line 448
($context["predzakaz_button"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t<div class=\"cart predz\">
\t\t\t\t\t\t\t\t\t\t\t<a onclick=\"get_revpopup_predzakaz('";
                        // line 450
                        echo (($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc = $context["product"]) && is_array($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc) || $__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc instanceof ArrayAccess ? ($__internal_ea734457fe1ab835acb1bdc5f4d0c289028390941bde9830f5c3eb108557bddc["product_id"] ?? null) : null);
                        echo "');\"><i class=\"fa fa-border fa-shopping-basket predzakaz\"><span class=\"prlistb\">";
                        echo ($context["text_predzakaz"] ?? null);
                        echo "</span></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 452
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 453
                    if (($context["rev_wish_prod"] ?? null)) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t<div class=\"wishlist\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"wishlist wishlist_wprid_";
                        // line 455
                        echo (($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a = $context["product"]) && is_array($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a) || $__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a instanceof ArrayAccess ? ($__internal_37780db4de3f0740e927a120a7d64820d6ae0626dadd9715b6d9b78b685d391a["product_id"] ?? null) : null);
                        echo " ";
                        echo (($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f = $context["product"]) && is_array($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f) || $__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f instanceof ArrayAccess ? ($__internal_62dd66dc46ba059ed877028590f47326fb4eecb7864459b5e0ea4616c00cec6f["wishlist_class"] ?? null) : null);
                        echo "\" data-toggle=\"tooltip\" onclick=\"wishlist.add('";
                        echo (($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d = $context["product"]) && is_array($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d) || $__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d instanceof ArrayAccess ? ($__internal_1115d809b62c821caac3cea1eb5c12c7d5d7b0706ee2f9a2083d0622a3c9c39d["product_id"] ?? null) : null);
                        echo "');\" title=\"";
                        echo (($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e = $context["product"]) && is_array($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e) || $__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e instanceof ArrayAccess ? ($__internal_a03dccad40e2abc48e619918035c6639141684812cc4b646aa7da29f3910460e["button_wishlist"] ?? null) : null);
                        echo "\"><i class=\"fa fa-border fa-heart\"></i></a>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    // line 457
                    echo " 
\t\t\t\t\t\t\t\t\t<div class=\"trash\" data-toggle=\"tooltip\" title=\"";
                    // line 458
                    echo ($context["text_compare_trash_tooltip"] ?? null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t<a href=\"";
                    // line 459
                    echo (($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 = $context["product"]) && is_array($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81) || $__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81 instanceof ArrayAccess ? ($__internal_6dde4d73810bf2ec655aae3765c099752155acd96383d2a8c4a895d4dd805f81["remove"] ?? null) : null);
                    echo "\"><i class=\"fa fa-border fa-trash-o\"></i></a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 465
                echo "\t\t\t\t
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<ul class=\"cd-table-navigation\">
\t\t\t\t\t<li><a href=\"#0\" class=\"prev inactive\"><i class=\"fa fa-chevron-left\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t\t<li><a href=\"#0\" class=\"next\"><i class=\"fa fa-chevron-right\" aria-hidden=\"true\"></i></a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t</section>
\t";
            }
            // line 474
            echo " 
";
        } else {
            // line 475
            echo " 
\t<div class=\"content\">";
            // line 476
            echo ($context["text_empty"] ?? null);
            echo "</div>
\t<div class=\"buttons clearfix\">
        <div class=\"pull-right\"><a href=\"";
            // line 478
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
      </div>
";
        }
        // line 480
        echo " 
\t\t

";
        // line 483
        if (($context["products"] ?? null)) {
            echo " 

";
            // line 485
            $context["numbercolumns"] = 0;
            // line 486
            if (($context["cat_sort"] ?? null)) {
                // line 487
                echo "\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d = ($context["items"] ?? null)) && is_array($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d) || $__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d instanceof ArrayAccess ? ($__internal_6a445f9d1af686ab12d6899f24bc3d7a6b02a4ac19e96d6949d37618ee93e47d["products"] ?? null) : null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo " 
\t\t";
                    // line 488
                    $context["numbercolumns"] = (($context["numbercolumns"] ?? null) + 1);
                    // line 489
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            } else {
                // line 490
                echo " 
\t";
                // line 491
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    echo " 
\t\t";
                    // line 492
                    $context["numbercolumns"] = (($context["numbercolumns"] ?? null) + 1);
                    // line 493
                    echo "\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 495
            echo "
<script><!--
var cdcolumns = \$('li.product').outerWidth();
\$('ul.cd-products-columns').css('width', cdcolumns*";
            // line 498
            echo ($context["numbercolumns"] ?? null);
            echo ");
\$(function() {
\tpodgon_table();
\t\$(window).resize(podgon_table);
\ttabcompare(1);
});
function podgon_table() {
\tvar trnumber = 0;
\twhile (trnumber < 100) {
\t\tmax_height_div('.tr'+trnumber);
\t\ttrnumber++;
\t}
}
function tabcompare(numer) {
\tfunction productsTable( element ) {
\t\t";
            // line 513
            if (($context["cat_sort"] ?? null)) {
                echo " 
\t\tthis.element = element;
\t\tthis.table = this.element.children('.numer'+numer+' .cd-products-table');
\t\tthis.tableHeight = this.table.height();
\t\tthis.productsWrapper = this.table.children('.numer'+numer+' .cd-products-wrapper');
\t\tthis.tableColumns = this.productsWrapper.children('.numer'+numer+' .cd-products-columns');
\t\tthis.products = this.tableColumns.children('.numer'+numer+' .product');
\t\tthis.productsNumber = this.products.length;
\t\tthis.productWidth = this.products.eq(0).width();
\t\tthis.productsTopInfo = this.table.find('.numer'+numer+' .top-info');
\t\tthis.featuresTopInfo = this.table.children('.numer'+numer+' .features').children('.top-info');
\t\tthis.topInfoHeight = this.featuresTopInfo.innerHeight() + 30;
\t\tthis.leftScrolling = false;
\t\tthis.odinakBtn = this.element.find('.filter_otlich.numer'+numer);
\t\tthis.filtering = false,
\t\tthis.selectedproductsNumber = 0;
\t\tthis.filterActive = false;
\t\tthis.navigation = this.table.children('.numer'+numer+' .cd-table-navigation');
\t\t";
            } else {
                // line 531
                echo " 
\t\tthis.element = element;
\t\tthis.table = this.element.children('.cd-products-table');
\t\tthis.tableHeight = this.table.height();
\t\tthis.productsWrapper = this.table.children('.cd-products-wrapper');
\t\tthis.tableColumns = this.productsWrapper.children('.cd-products-columns');
\t\tthis.products = this.tableColumns.children('.product');
\t\tthis.productsNumber = this.products.length;
\t\tthis.productWidth = this.products.eq(0).width();
\t\tthis.productsTopInfo = this.table.find('.top-info');
\t\tthis.featuresTopInfo = this.table.children('.features').children('.top-info');
\t\tthis.topInfoHeight = this.featuresTopInfo.innerHeight() + 30;
\t\tthis.leftScrolling = false;
\t\tthis.odinakBtn = this.element.find('.filter_otlich');
\t\tthis.filtering = false,
\t\tthis.selectedproductsNumber = 0;
\t\tthis.filterActive = false;
\t\tthis.navigation = this.table.children('.cd-table-navigation');
\t\t";
            }
            // line 549
            echo " 
\t\tthis.tableColumns.css('width', this.productWidth*this.productsNumber + 'px');
\t\tif (this.productsNumber < 2) {
\t\t\tthis.odinakBtn.parent().addClass('hide');
\t\t}
\t\tif (this.productsNumber <= 3) {
\t\t\tthis.navigation.find('.next').addClass('inactive');
\t\t}
\t\tthis.bindEvents();
\t}
\tproductsTable.prototype.bindEvents = function() {
\t\tvar self = this;
\t\tself.productsWrapper.on('scroll', function(){
\t\t\tif(!self.leftScrolling) {
\t\t\t\tself.leftScrolling = true;
\t\t\t\t(!window.requestAnimationFrame) ? setTimeout(function(){self.updateLeftScrolling();}, 250) : window.requestAnimationFrame(function(){self.updateLeftScrolling();});
\t\t\t}
\t\t});
\t\t";
            // line 567
            if (($context["cat_sort"] ?? null)) {
                echo " 
\t\tself.odinakBtn.on('click', function(event){
\t\t\tvar chboxfilter = document.querySelector('.filter_otlich.numer'+numer);
\t\t\tif (chboxfilter.checked) {
\t\t\t\tself.odinakBtn.parent().addClass('active');
\t\t\t} else {
\t\t\t\tself.odinakBtn.parent().removeClass('active');
\t\t\t}
\t\t\t[].forEach.call(document.querySelectorAll('.numer'+numer+' .features li'),function(newtrnumber, knumber) {
\t\t\t\tnewtrnumber = document.querySelectorAll('.numer'+numer+' .cd-features-list li:nth-child('+(knumber+1)+')');
\t\t\t\tvar cfilter = newtrnumber[1].innerHTML,
\t\t\t\t\tcfilter = chboxfilter.checked && [].every.call(newtrnumber, function(newtrnumber, chboxfilter) {
\t\t\t\t\t\treturn !chboxfilter || newtrnumber.innerHTML == cfilter
\t\t\t\t\t}) ? 'add' : 'remove';
\t\t\t\t[].forEach.call(newtrnumber, function(newtrnumber) {
\t\t\t\t\tnewtrnumber.classList[cfilter]('hide')
\t\t\t\t})
\t\t\t})
\t\t});
\t\t";
            } else {
                // line 586
                echo " 
\t\tself.odinakBtn.on('click', function(event){
\t\t\tvar chboxfilter = document.querySelector('.filter_otlich');
\t\t\tif (chboxfilter.checked) {
\t\t\t\tself.odinakBtn.parent().addClass('active');
\t\t\t} else {
\t\t\t\tself.odinakBtn.parent().removeClass('active');
\t\t\t}
\t\t\t[].forEach.call(document.querySelectorAll('.features li'),function(newtrnumber, knumber) {
\t\t\t\tnewtrnumber = document.querySelectorAll('.cd-features-list li:nth-child('+(knumber+1)+')');
\t\t\t\tvar cfilter = newtrnumber[1].innerHTML,
\t\t\t\t\tcfilter = chboxfilter.checked && [].every.call(newtrnumber, function(newtrnumber, chboxfilter) {
\t\t\t\t\t\treturn !chboxfilter || newtrnumber.innerHTML == cfilter
\t\t\t\t\t}) ? 'add' : 'remove';
\t\t\t\t[].forEach.call(newtrnumber, function(newtrnumber) {
\t\t\t\t\tnewtrnumber.classList[cfilter]('hide')
\t\t\t\t})
\t\t\t})
\t\t});
\t\t";
            }
            // line 605
            echo " 
\t\tthis.navigation.on('click', 'a', function(event){
\t\t\tevent.preventDefault();
\t\t\tself.updateSlider( \$(event.target).hasClass('next') );
\t\t});
\t}
\tproductsTable.prototype.updateLeftScrolling = function() {
\t\tvar totalTableWidth = parseInt(this.tableColumns.eq(0).outerWidth(true)),
\t\t\ttableViewport = parseInt(this.element.width()),
\t\t\tscrollLeft = this.productsWrapper.scrollLeft();
\t\t( scrollLeft > 0 ) ? this.table.addClass('scrolling') : this.table.removeClass('scrolling');
\t\tthis.leftScrolling =  false;
\t\tthis.updateNavigationVisibility(scrollLeft);
\t}
\tproductsTable.prototype.updateNavigationVisibility = function(scrollLeft) {
\t\t( scrollLeft > 0 ) ? this.navigation.find('.prev').removeClass('inactive') : this.navigation.find('.prev').addClass('inactive');
\t\t( scrollLeft < this.tableColumns.outerWidth(true) - this.productsWrapper.width() && this.tableColumns.outerWidth(true) > this.productsWrapper.width() ) ? this.navigation.find('.next').removeClass('inactive') : this.navigation.find('.next').addClass('inactive');
\t}
\tproductsTable.prototype.updateTopScrolling = function(scrollTop) {
\t\tthis.updateLeftScrolling();
\t}
\tproductsTable.prototype.updateProperties = function() {
\t\tthis.tableHeight = this.table.height();
\t\tthis.productWidth = this.products.eq(0).width();
\t\tthis.topInfoHeight = this.featuresTopInfo.innerHeight() + 30;
\t\tthis.tableColumns.css('width', this.productWidth*this.productsNumber + 'px');
\t}
\tproductsTable.prototype.updateSlider = function(bool) {
\t\tvar scrollLeft = this.productsWrapper.scrollLeft();
\t\tscrollLeft = ( bool ) ? scrollLeft + this.productWidth : scrollLeft - this.productWidth;
\t\tif( scrollLeft < 0 ) scrollLeft = 0;
\t\tif( scrollLeft > this.tableColumns.outerWidth(true) - this.productsWrapper.width() ) scrollLeft = this.tableColumns.outerWidth(true) - this.productsWrapper.width();
\t\tthis.productsWrapper.animate( {scrollLeft: scrollLeft}, 200 );
\t}
\tvar comparisonTables = [];
\t\$('.cd-products-comparison-table').each(function(){
\t\tcomparisonTables.push(new productsTable(\$(this)));
\t});
\tvar windowScrolling = false;
\t\$(window).on('scroll', function(){
\t\tif(!windowScrolling) {
\t\t\twindowScrolling = true;
\t\t\t(!window.requestAnimationFrame) ? setTimeout(checkScrolling, 250) : window.requestAnimationFrame(checkScrolling);
\t\t}
\t});
\tvar windowResize = false;
\t\$(window).on('resize', function(){
\t\tif(!windowResize) {
\t\t\twindowResize = true;
\t\t\t(!window.requestAnimationFrame) ? setTimeout(checkResize, 250) : window.requestAnimationFrame(checkResize);
\t\t}
\t});
\tfunction checkScrolling(){
\t\tvar scrollTop = \$(window).scrollTop();
\t\tcomparisonTables.forEach(function(element){
\t\t\telement.updateTopScrolling(scrollTop);
\t\t});
\t\twindowScrolling = false;
\t}
\tfunction checkResize(){
\t\tcomparisonTables.forEach(function(element){
\t\t\telement.updateProperties();
\t\t});
\t\twindowResize = false;
\t}
\tfunction checkMQ() {
\t\treturn window.getComputedStyle(comparisonTables[0].element.get(0), '::after').getPropertyValue('content').replace(/'/g, \"\").replace(/\"/g, \"\");
\t}
\tfunction setTranformX(element, value) {
\t\telement.css({
\t\t    '-moz-transform': 'translateX(' + value + 'px)',
\t\t    '-webkit-transform': 'translateX(' + value + 'px)',
\t\t\t'-ms-transform': 'translateX(' + value + 'px)',
\t\t\t'-o-transform': 'translateX(' + value + 'px)',
\t\t\t'transform': 'translateX(' + value + 'px)'
\t\t});
\t}
}
\$(\"#tabs_compare li a\").click(function() {
\tvar numer = (\$(this).attr('numer'));
\ttabcompare(numer);
\twindow.setTimeout(podgon_table,0);
})
//--></script> 
";
        }
        // line 689
        echo " 
";
        // line 690
        echo ($context["content_bottom"] ?? null);
        echo "</div>
";
        // line 691
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
<script><!--
\$('#tabs_compare li').first().addClass('active');
\$('.tab-pane').first().addClass('active');
var tr3 = jQuery(\".compare-info tr.attribtr\");
tr3.each(function() {
\tvar td3 = jQuery(\"td.attribtd\", this),
\t\tlen = td3.length,
\t\ttext = td3.eq(0).text();
\ttd3 = td3.filter(function() {
\t\treturn jQuery(this).text() == \"\"
\t}).length;
\tjQuery(this).toggleClass(\"deletetr\", len == td3)
})
function max_height_div(div) {
\tvar maxheight = 0;
\t\$(div).each(function(){
\t\t\$(this).removeAttr('style');
\t\tif(\$(this).height() > maxheight) {
\t\t\tmaxheight = \$(this).height();
\t\t}
\t});
\t\$(div).height(maxheight);
}
//--></script> 
";
        // line 717
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2118 => 717,  2089 => 691,  2085 => 690,  2082 => 689,  1995 => 605,  1973 => 586,  1950 => 567,  1930 => 549,  1909 => 531,  1887 => 513,  1869 => 498,  1864 => 495,  1857 => 493,  1855 => 492,  1849 => 491,  1846 => 490,  1839 => 489,  1837 => 488,  1830 => 487,  1828 => 486,  1826 => 485,  1821 => 483,  1816 => 480,  1808 => 478,  1803 => 476,  1800 => 475,  1796 => 474,  1784 => 465,  1771 => 459,  1767 => 458,  1764 => 457,  1752 => 455,  1747 => 453,  1744 => 452,  1736 => 450,  1731 => 448,  1722 => 446,  1717 => 444,  1712 => 441,  1708 => 440,  1701 => 439,  1693 => 438,  1690 => 437,  1685 => 436,  1682 => 435,  1675 => 434,  1671 => 433,  1665 => 432,  1662 => 431,  1656 => 429,  1650 => 428,  1646 => 427,  1642 => 426,  1639 => 425,  1628 => 424,  1624 => 423,  1621 => 422,  1614 => 421,  1610 => 420,  1607 => 419,  1600 => 418,  1596 => 417,  1593 => 416,  1589 => 415,  1584 => 414,  1580 => 412,  1573 => 411,  1568 => 409,  1562 => 407,  1555 => 406,  1551 => 405,  1547 => 404,  1543 => 403,  1540 => 402,  1533 => 401,  1529 => 400,  1526 => 399,  1519 => 398,  1515 => 397,  1512 => 396,  1505 => 395,  1501 => 394,  1498 => 393,  1491 => 392,  1487 => 391,  1484 => 390,  1479 => 388,  1475 => 387,  1467 => 386,  1464 => 385,  1458 => 384,  1454 => 383,  1448 => 382,  1444 => 381,  1436 => 378,  1432 => 376,  1427 => 374,  1422 => 373,  1418 => 372,  1415 => 371,  1410 => 370,  1406 => 369,  1403 => 368,  1398 => 367,  1394 => 366,  1391 => 365,  1386 => 364,  1382 => 363,  1379 => 362,  1374 => 361,  1370 => 360,  1367 => 359,  1363 => 358,  1358 => 357,  1354 => 356,  1350 => 355,  1346 => 354,  1342 => 353,  1338 => 352,  1334 => 351,  1330 => 350,  1326 => 349,  1322 => 348,  1318 => 347,  1314 => 346,  1310 => 345,  1307 => 344,  1302 => 343,  1298 => 342,  1295 => 341,  1290 => 340,  1286 => 339,  1283 => 338,  1279 => 337,  1275 => 336,  1270 => 335,  1266 => 334,  1262 => 333,  1258 => 332,  1253 => 330,  1247 => 329,  1242 => 327,  1235 => 325,  1227 => 319,  1223 => 318,  1216 => 317,  1208 => 316,  1202 => 315,  1196 => 314,  1193 => 313,  1188 => 312,  1184 => 311,  1178 => 310,  1174 => 309,  1170 => 308,  1167 => 307,  1162 => 306,  1158 => 305,  1155 => 304,  1150 => 303,  1146 => 302,  1143 => 301,  1138 => 300,  1134 => 299,  1131 => 298,  1127 => 297,  1122 => 296,  1118 => 295,  1114 => 294,  1111 => 293,  1106 => 292,  1102 => 291,  1099 => 290,  1094 => 289,  1090 => 288,  1087 => 287,  1082 => 286,  1078 => 285,  1075 => 284,  1070 => 283,  1066 => 282,  1063 => 281,  1058 => 280,  1054 => 279,  1049 => 277,  1041 => 272,  1037 => 271,  1031 => 268,  1025 => 264,  1021 => 263,  1005 => 253,  992 => 247,  988 => 246,  985 => 245,  973 => 243,  968 => 241,  965 => 240,  957 => 238,  952 => 236,  943 => 234,  938 => 232,  933 => 229,  929 => 228,  922 => 227,  914 => 226,  911 => 225,  904 => 224,  900 => 223,  894 => 222,  891 => 221,  885 => 219,  879 => 218,  875 => 217,  871 => 216,  868 => 215,  857 => 214,  853 => 213,  850 => 212,  843 => 211,  839 => 210,  836 => 209,  829 => 208,  825 => 207,  822 => 206,  818 => 205,  813 => 204,  809 => 202,  802 => 201,  797 => 199,  791 => 197,  784 => 196,  780 => 195,  776 => 194,  772 => 193,  769 => 192,  762 => 191,  758 => 190,  755 => 189,  748 => 188,  744 => 187,  741 => 186,  734 => 185,  730 => 184,  727 => 183,  720 => 182,  716 => 181,  713 => 180,  708 => 178,  704 => 177,  696 => 176,  693 => 175,  687 => 174,  683 => 173,  677 => 172,  673 => 171,  665 => 168,  661 => 166,  656 => 164,  651 => 163,  647 => 162,  644 => 161,  639 => 160,  635 => 159,  632 => 158,  627 => 157,  623 => 156,  620 => 155,  615 => 154,  611 => 153,  608 => 152,  603 => 151,  599 => 150,  596 => 149,  592 => 148,  587 => 147,  583 => 146,  579 => 145,  575 => 144,  571 => 143,  567 => 142,  563 => 141,  559 => 140,  555 => 139,  551 => 138,  547 => 137,  543 => 136,  539 => 135,  536 => 134,  531 => 133,  527 => 132,  524 => 131,  519 => 130,  515 => 129,  512 => 128,  508 => 127,  504 => 126,  499 => 125,  495 => 124,  491 => 123,  487 => 122,  482 => 120,  476 => 119,  471 => 117,  464 => 115,  457 => 110,  453 => 108,  446 => 107,  439 => 106,  435 => 105,  428 => 104,  423 => 103,  417 => 102,  413 => 101,  407 => 100,  403 => 99,  397 => 98,  394 => 97,  389 => 96,  385 => 95,  379 => 94,  375 => 93,  371 => 92,  368 => 91,  363 => 90,  359 => 89,  356 => 88,  351 => 87,  347 => 86,  344 => 85,  339 => 84,  335 => 83,  332 => 82,  328 => 81,  323 => 80,  319 => 79,  315 => 78,  312 => 77,  307 => 76,  303 => 75,  300 => 74,  295 => 73,  291 => 72,  288 => 71,  283 => 70,  279 => 69,  276 => 68,  271 => 67,  267 => 66,  264 => 65,  259 => 64,  255 => 63,  250 => 61,  243 => 57,  236 => 55,  230 => 54,  222 => 51,  213 => 47,  207 => 46,  203 => 45,  199 => 43,  191 => 42,  182 => 40,  178 => 39,  172 => 38,  168 => 37,  163 => 35,  159 => 34,  151 => 31,  148 => 30,  143 => 29,  140 => 28,  135 => 27,  131 => 26,  127 => 25,  123 => 24,  119 => 23,  116 => 22,  109 => 19,  105 => 18,  100 => 16,  97 => 15,  82 => 14,  76 => 13,  65 => 10,  60 => 8,  56 => 7,  52 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/product/compare.twig", "");
    }
}
