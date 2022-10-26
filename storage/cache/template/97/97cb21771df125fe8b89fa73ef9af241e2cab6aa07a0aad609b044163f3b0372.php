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

/* revolution/template/revolution/revfilter.twig */
class __TwigTemplate_abc2902e8f82c0f0f33e0e6cdde3c431d38dadf70f1ce0ebd987c7c629a15d30 extends \Twig\Template
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
        if (((($context["allfilters"] ?? null) || ((($context["filter_price_status"] ?? null) && ($context["filter_price_min"] ?? null)) && ($context["filter_price_max"] ?? null))) || ((($context["filter_subcategories"] ?? null) != "false") && ($context["subcategories"] ?? null)))) {
            echo " 
\t<div id=\"revfilter\">
\t\t<form id=\"revfilter_form\" action=\"";
            // line 3
            echo ($context["full_path"] ?? null);
            echo "\" method=\"get\">
\t\t\t<div id=\"revfilter_box_open\"><i class=\"fa fa-sliders\"></i>&nbsp;&nbsp;";
            // line 4
            echo ($context["text_filter_mobile"] ?? null);
            echo "</div>
\t\t\t<div id=\"revfilter_box\" class=\"panel panel-default\">
\t\t\t\t";
            // line 6
            if (($context["title"] ?? null)) {
                echo " 
\t\t\t\t\t<h2 class=\"zag_block panel-heading\"><i class=\"fa fa-sliders\"></i>&nbsp;&nbsp;";
                // line 7
                echo ($context["title"] ?? null);
                echo "<div class=\"clear_filter\"><i id=\"revfilter_reset\" class=\"fa fa-refresh\"></i></div></h2>
\t\t\t\t";
            }
            // line 8
            echo " 
\t\t\t\t<div class=\"mobil_wellsm hidden-md hidden-lg\">
\t\t\t\t\t<div class=\"option_box\">
\t\t\t\t\t\t<div class=\"option_name hided\">";
            // line 11
            echo ($context["text_filter_sort"] ?? null);
            echo ":<i class=\"fa fa-toggle-on on\"></i><i class=\"fa fa-toggle-off off\"></i></div>
\t\t\t\t\t\t<div class=\"collapsible\" style=\"display: none;\"></div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"list-group\">
\t\t\t\t\t";
            // line 16
            if (((($context["filter_price_status"] ?? null) && ($context["filter_price_min"] ?? null)) && ($context["filter_price_max"] ?? null))) {
                echo " 
\t\t\t\t\t\t<div class=\"option_box\">
\t\t\t\t\t\t\t<div class=\"option_name\">";
                // line 18
                echo ($context["text_price"] ?? null);
                echo ":<i class=\"fa fa-toggle-on on\"></i><i class=\"fa fa-toggle-off off\"></i></div>
\t\t\t\t\t\t\t<div class=\"price_slider collapsible\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"price_revfilter\" name=\"filter_price\" style=\"display: none;\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 23
            echo " 
\t\t\t\t\t";
            // line 24
            if (($context["filter_instock"] ?? null)) {
                echo " 
\t\t\t\t\t\t<div class=\"option_box\">
\t\t\t\t\t\t\t<div class=\"option_name ";
                // line 26
                if (((isset($context["filter_instock_vid"]) || array_key_exists("filter_instock_vid", $context)) && ($context["filter_instock_vid"] ?? null))) {
                    echo "hided";
                }
                echo "\">";
                echo ($context["text_instock"] ?? null);
                echo ":<i class=\"fa fa-toggle-on on\"></i><i class=\"fa fa-toggle-off off\"></i></div>
\t\t\t\t\t\t\t<div class=\"collapsible\" ";
                // line 27
                if (((isset($context["filter_instock_vid"]) || array_key_exists("filter_instock_vid", $context)) && ($context["filter_instock_vid"] ?? null))) {
                    echo "style=\"display: none;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"filtered\" name=\"filter_instock\" ";
                // line 29
                if (((isset($context["filter_instock_chek"]) || array_key_exists("filter_instock_chek", $context)) && ($context["filter_instock_chek"] ?? null))) {
                    echo "checked";
                }
                echo " />
\t\t\t\t\t\t\t\t\t<span for=\"instock\">";
                // line 30
                echo ($context["text_instock_on"] ?? null);
                echo "</span></label>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 33
            echo " 
\t\t\t\t\t";
            // line 34
            if (((($context["filter_gr"] ?? null) != "false") &&  !twig_test_empty(($context["allfilters_gr"] ?? null)))) {
                echo " 
\t\t\t\t\t\t<div class=\"option_box\">
\t\t\t\t\t\t\t<div class=\"option_name ";
                // line 36
                if (((isset($context["filter_gr_vid"]) || array_key_exists("filter_gr_vid", $context)) && ($context["filter_gr_vid"] ?? null))) {
                    echo "hided";
                }
                echo "\">";
                echo ($context["text_revf_group"] ?? null);
                echo ":<i class=\"fa fa-toggle-on on\"></i><i class=\"fa fa-toggle-off off\"></i></div>
\t\t\t\t\t\t\t<div class=\"collapsible\" ";
                // line 37
                if (((isset($context["filter_gr_vid"]) || array_key_exists("filter_gr_vid", $context)) && ($context["filter_gr_vid"] ?? null))) {
                    echo "style=\"display: none;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t";
                // line 38
                if ((($context["filter_gr"] ?? null) == "select")) {
                    echo " 
\t\t\t\t\t\t\t\t\t<select name=\"filter_gr\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 40
                    echo ($context["text_none"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t";
                    // line 41
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["allfilters_gr"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["filter"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<option id=\"groups\" value=\"";
                        // line 42
                        echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["filter"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["id"] ?? null) : null);
                        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 43
                        echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["filter"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["title"] ?? null) : null);
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['filter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 45
                    echo " 
\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t";
                } elseif ((                // line 47
($context["filter_gr"] ?? null) == "radio")) {
                    echo " 
\t\t\t\t\t\t\t\t\t";
                    // line 48
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["allfilters_gr"] ?? null));
                    foreach ($context['_seq'] as $context["key"] => $context["filter"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t<div id=\"";
                        // line 49
                        echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["filter"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["id"] ?? null) : null);
                        echo "\" class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"filter_gr\" value=\"";
                        // line 51
                        echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["filter"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["id"] ?? null) : null);
                        echo "\" />";
                        echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["filter"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["title"] ?? null) : null);
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['key'], $context['filter'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 54
                    echo " 
\t\t\t\t\t\t\t\t";
                }
                // line 55
                echo " 
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 58
            echo " 
\t\t\t\t\t";
            // line 59
            if (((($context["filter_subcategories"] ?? null) != "false") && ($context["subcategories"] ?? null))) {
                echo " 
\t\t\t\t\t\t<div class=\"option_box\">
\t\t\t\t\t\t\t<div class=\"option_name ";
                // line 61
                if (((isset($context["filter_subcategories_vid"]) || array_key_exists("filter_subcategories_vid", $context)) && ($context["filter_subcategories_vid"] ?? null))) {
                    echo "hided";
                }
                echo "\">";
                echo ($context["text_subcategories"] ?? null);
                echo ":<i class=\"fa fa-toggle-on on\"></i><i class=\"fa fa-toggle-off off\"></i></div>
\t\t\t\t\t\t\t<div class=\"collapsible\" ";
                // line 62
                if (((isset($context["filter_subcategories_vid"]) || array_key_exists("filter_subcategories_vid", $context)) && ($context["filter_subcategories_vid"] ?? null))) {
                    echo "style=\"display: none;\"";
                }
                echo ">
\t\t\t\t\t\t\t\t<div id=\"subcategories\" class=\"form-group\" data-type=\"";
                // line 63
                echo ($context["filter_subcategories"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t";
                // line 64
                if ((($context["filter_subcategories"] ?? null) == "checkbox")) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 65
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["filter_v"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"subcategories\" class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"filter_categories[]\" value=\"";
                        // line 68
                        echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["filter_v"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["category_id"] ?? null) : null);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, $context["filter_v"], "chek", [], "array", true, true, false, 68) && (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["filter_v"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["chek"] ?? null) : null))) {
                            echo "checked";
                        }
                        echo " />";
                        echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["filter_v"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null);
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 70
                        if ((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["settings"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["filter_count_products"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 71
                            if ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["filter_v"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["count"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"revlabel pull-right\">";
                                // line 72
                                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["filter_v"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["count"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 73
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 74
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 76
                    echo " 
\t\t\t\t\t\t\t\t\t";
                } elseif ((                // line 77
($context["filter_subcategories"] ?? null) == "radio")) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 78
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["filter_v"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"subcategories\" class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"filter_categories\" value=\"";
                        // line 81
                        echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["filter_v"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["category_id"] ?? null) : null);
                        echo "\" ";
                        if ((twig_get_attribute($this->env, $this->source, $context["filter_v"], "chek", [], "array", true, true, false, 81) && (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["filter_v"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["chek"] ?? null) : null))) {
                            echo "checked";
                        }
                        echo " />";
                        echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["filter_v"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["name"] ?? null) : null);
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 83
                        if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = ($context["settings"] ?? null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["filter_count_products"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 84
                            if ((($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["filter_v"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["count"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"revlabel pull-right\">";
                                // line 85
                                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["filter_v"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["count"] ?? null) : null);
                                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 86
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 87
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 89
                    echo " 
\t\t\t\t\t\t\t\t\t";
                } elseif ((                // line 90
($context["filter_subcategories"] ?? null) == "select")) {
                    echo " 
\t\t\t\t\t\t\t\t\t\t<select name=\"filter_categories\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                    // line 92
                    echo ($context["text_none"] ?? null);
                    echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
                    // line 93
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["subcategories"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["filter_v"]) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 94
                        if ((twig_get_attribute($this->env, $this->source, $context["filter_v"], "chek", [], "array", true, true, false, 94) && (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["filter_v"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["chek"] ?? null) : null))) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<option id=\"subcategories\" value=\"";
                            // line 95
                            echo (($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["filter_v"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["category_id"] ?? null) : null);
                            echo "\" selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 96
                            echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["filter_v"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["name"] ?? null) : null);
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 97
                            if ((($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = ($context["settings"] ?? null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["filter_count_products"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 98
                                if ((($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["filter_v"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["count"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    // line 99
                                    echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["filter_v"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["count"] ?? null) : null);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 100
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 101
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        } else {
                            // line 103
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<option id=\"subcategories\" value=\"";
                            // line 104
                            echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["filter_v"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["category_id"] ?? null) : null);
                            echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 105
                            echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["filter_v"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["name"] ?? null) : null);
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 106
                            if ((($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["settings"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["filter_count_products"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 107
                                if ((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["filter_v"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["count"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                    // line 108
                                    echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["filter_v"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["count"] ?? null) : null);
                                    echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 109
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 110
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        // line 113
                        echo "\t\t\t\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_v'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " 
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t";
                }
                // line 115
                echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 119
            echo " 
\t\t\t\t\t";
            // line 120
            if (($context["allfilters"] ?? null)) {
                echo " 
\t\t\t\t\t\t";
                // line 121
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allfilters"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["filter"]) {
                    echo " 
\t\t\t\t\t\t\t<div class=\"option_box";
                    // line 122
                    if (((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["filter"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["type"] ?? null) : null) == "slider")) {
                        echo " hidden-xs hidden-sm";
                    }
                    echo "\">
\t\t\t\t\t\t\t\t<div class=\"option_name ";
                    // line 123
                    if ((twig_get_attribute($this->env, $this->source, $context["filter"], "vid", [], "array", true, true, false, 123) && (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = $context["filter"]) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["vid"] ?? null) : null))) {
                        echo "hided";
                    }
                    echo "\">";
                    echo (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["filter"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["title"] ?? null) : null);
                    echo ":<i class=\"fa fa-toggle-on on\"></i><i class=\"fa fa-toggle-off off\"></i></div>
\t\t\t\t\t\t\t\t<div class=\"collapsible\" ";
                    // line 124
                    if ((twig_get_attribute($this->env, $this->source, $context["filter"], "vid", [], "array", true, true, false, 124) && (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["filter"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["vid"] ?? null) : null))) {
                        echo "style=\"display: none;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t<div id=\"";
                    // line 125
                    echo (($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["filter"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["id"] ?? null) : null);
                    echo "\" class=\"form-group\" data-type=\"";
                    echo (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["filter"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["type"] ?? null) : null);
                    echo "\">
\t\t\t\t\t\t\t\t\t\t";
                    // line 126
                    if (((($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = $context["filter"]) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f["type"] ?? null) : null) == "checkbox")) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 127
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["filter"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["values"] ?? null) : null));
                        foreach ($context['_seq'] as $context["key"] => $context["filter_v"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"";
                            // line 128
                            echo (($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["filter_v"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["id"] ?? null) : null);
                            echo "\" class=\"checkbox\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
                            // line 130
                            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["filter"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["name"] ?? null) : null);
                            echo "[]\" value=\"";
                            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["filter_v"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["val"] ?? null) : null);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, $context["filter_v"], "chek", [], "array", true, true, false, 130) && (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["filter_v"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["chek"] ?? null) : null))) {
                                echo "checked";
                            }
                            echo " />";
                            echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["filter_v"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["name"] ?? null) : null);
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 132
                            if ((($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = ($context["settings"] ?? null)) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["filter_count_products"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 133
                                if ((($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["filter_v"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["count"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"revlabel pull-right\">";
                                    // line 134
                                    echo (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["filter_v"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["count"] ?? null) : null);
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 135
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 136
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['filter_v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 138
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (((($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f =                     // line 139
$context["filter"]) && is_array($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f) || $__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f instanceof ArrayAccess ? ($__internal_d6ae6b41786cc4be7778386d06cb288c8e6ffd74e055cfed45d7a5c8854d0c8f["type"] ?? null) : null) == "radio")) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 140
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 = $context["filter"]) && is_array($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327) || $__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327 instanceof ArrayAccess ? ($__internal_1dcdec7ec31e102fbfe45103ea3599c92c8609311e43d40ca0d95d0369434327["values"] ?? null) : null));
                        foreach ($context['_seq'] as $context["key"] => $context["filter_v"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"";
                            // line 141
                            echo (($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 = $context["filter_v"]) && is_array($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412) || $__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412 instanceof ArrayAccess ? ($__internal_891ba2f942018e94e4bfa8069988f305bbaad7f54a64aeee069787f1084a9412["id"] ?? null) : null);
                            echo "\" class=\"radio\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"radio\" name=\"";
                            // line 143
                            echo (($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 = $context["filter"]) && is_array($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9) || $__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9 instanceof ArrayAccess ? ($__internal_694b5f53081640f33aab1567e85e28c247e6a7c4674010716df6de8eae4819e9["name"] ?? null) : null);
                            echo "\" value=\"";
                            echo (($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e = $context["filter_v"]) && is_array($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e) || $__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e instanceof ArrayAccess ? ($__internal_91b272a21580197773f482962c8b92637a641a749832ee390d7d386a58d1912e["val"] ?? null) : null);
                            echo "\" ";
                            if ((twig_get_attribute($this->env, $this->source, $context["filter_v"], "chek", [], "array", true, true, false, 143) && (($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 = $context["filter_v"]) && is_array($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5) || $__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5 instanceof ArrayAccess ? ($__internal_7f8d0071642f16d6b4720f8eef58ffd71faf0c4d7a772c0eb6842d5e9d901ca5["chek"] ?? null) : null))) {
                                echo "checked";
                            }
                            echo " />";
                            echo (($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a = $context["filter_v"]) && is_array($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a) || $__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a instanceof ArrayAccess ? ($__internal_0aa0713b35e28227396d65db75a1a4277b081ff4e08585143330919af9d1bf0a["name"] ?? null) : null);
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 145
                            if ((($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 = ($context["settings"] ?? null)) && is_array($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4) || $__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4 instanceof ArrayAccess ? ($__internal_51b47659448148079c55eb5fc84ce5e7b27c8ff1fadeba243d0bf4a59f102eb4["filter_count_products"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 146
                                if ((($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d = $context["filter_v"]) && is_array($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d) || $__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d instanceof ArrayAccess ? ($__internal_7954abe9e82b868b32e99deec50bc82d0cf006d569340d1981c528f484e4306d["count"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"revlabel pull-right\">";
                                    // line 147
                                    echo (($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 = $context["filter_v"]) && is_array($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5) || $__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5 instanceof ArrayAccess ? ($__internal_edc3933374aa0ae65dd90505a315fe17c24a986a5b064b0f4774e7dc68df29b5["count"] ?? null) : null);
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 148
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 149
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['filter_v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 151
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (((($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a =                     // line 152
$context["filter"]) && is_array($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a) || $__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a instanceof ArrayAccess ? ($__internal_78a78e2af552daad30f9bd5ea90c17811faa9f63aaaf1d1d527de70902fe2a7a["type"] ?? null) : null) == "select")) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<select name=\"";
                        // line 153
                        echo (($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da = $context["filter"]) && is_array($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da) || $__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da instanceof ArrayAccess ? ($__internal_68329f830f66b3d66aa25264abe6d152d460842b92be66836c0d8febb9fe46da["name"] ?? null) : null);
                        echo "\" class=\"form-control\">
\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"\">";
                        // line 154
                        echo ($context["text_none"] ?? null);
                        echo "</option>
\t\t\t\t\t\t\t\t\t\t\t\t";
                        // line 155
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 = $context["filter"]) && is_array($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38) || $__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38 instanceof ArrayAccess ? ($__internal_0c0a6bc8299d1416ae3339265b194ff43aaec7fc209979ab91c947804ef09b38["values"] ?? null) : null));
                        foreach ($context['_seq'] as $context["key"] => $context["filter_v"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 156
                            if ((twig_get_attribute($this->env, $this->source, $context["filter_v"], "chek", [], "array", true, true, false, 156) && (($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec = $context["filter_v"]) && is_array($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec) || $__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec instanceof ArrayAccess ? ($__internal_c5373d6c112ec7cfa0d260a8ea49b75af689c74c186cb9e1d12f91be2f3451ec["chek"] ?? null) : null))) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option id=\"";
                                // line 157
                                echo (($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 = $context["filter_v"]) && is_array($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574) || $__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574 instanceof ArrayAccess ? ($__internal_a13b5858c5824edc0cf555cffe22c4f90468c22ef1115c74916647af2c9b8574["id"] ?? null) : null);
                                echo "\" value=\"";
                                echo (($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c = $context["filter_v"]) && is_array($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c) || $__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c instanceof ArrayAccess ? ($__internal_8273200462706e912633c1bd12ca5fc5736d038390c29954112cb78d56c3075c["val"] ?? null) : null);
                                echo "\" selected>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 158
                                echo (($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 = $context["filter_v"]) && is_array($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0) || $__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0 instanceof ArrayAccess ? ($__internal_ba7685baed7d294d6f9f021c094359707afc43c727e6a2d19ff1d176796bbda0["name"] ?? null) : null);
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 159
                                if ((($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc = ($context["settings"] ?? null)) && is_array($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc) || $__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc instanceof ArrayAccess ? ($__internal_101f955954d09941874d68c1bc31b2171b1313930c7c7163a30d4c0951b92adc["filter_count_products"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 160
                                    if ((($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd = $context["filter_v"]) && is_array($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd) || $__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd instanceof ArrayAccess ? ($__internal_d19b8970b34a70cf90f25bc70d063a8b0fc361c2ffc373a6176195b465bc0ccd["count"] ?? null) : null)) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                        // line 161
                                        echo (($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 = $context["filter_v"]) && is_array($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81) || $__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81 instanceof ArrayAccess ? ($__internal_7f22f462d0a079e9b28d4dd0209cce239cda0d0c81b8f79d4d6355c3a5eedc81["count"] ?? null) : null);
                                        echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 162
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 163
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 165
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option id=\"";
                                // line 166
                                echo (($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 = $context["filter_v"]) && is_array($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007) || $__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007 instanceof ArrayAccess ? ($__internal_08d357d6c6cc179c7eaa6aa16ae7c13336efbc0aa5669c58d46cab7f2ce96007["id"] ?? null) : null);
                                echo "\" value=\"";
                                echo (($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d = $context["filter_v"]) && is_array($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d) || $__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d instanceof ArrayAccess ? ($__internal_6d2de8847ca935d43c4b17225dc2537ff47d9b1c0e614e4fed558aa26b7f934d["val"] ?? null) : null);
                                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 167
                                echo (($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba = $context["filter_v"]) && is_array($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba) || $__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba instanceof ArrayAccess ? ($__internal_14ec589d07a85756e12acaaf8d41cc27621a5a03ce9e1c2835143b81f89a8dba["name"] ?? null) : null);
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 168
                                if ((($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 = ($context["settings"] ?? null)) && is_array($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49) || $__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49 instanceof ArrayAccess ? ($__internal_15cadc33e29273b0be5cf970bdbb25fb0d962f226cb329dfeb89075c4a503f49["filter_count_products"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    // line 169
                                    if ((($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 = $context["filter_v"]) && is_array($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639) || $__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639 instanceof ArrayAccess ? ($__internal_fdffc6d7d2105180aa5315b58ff859ceee4ece5e5b7b2601a851c7a60a10d639["count"] ?? null) : null)) {
                                        echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(";
                                        // line 170
                                        echo (($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf = $context["filter_v"]) && is_array($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf) || $__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf instanceof ArrayAccess ? ($__internal_d3425701b9a0a8a13b32495933a7425cc5de4c0e5eb576b5e6202e761600efaf["count"] ?? null) : null);
                                        echo ")
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                    }
                                    // line 171
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 172
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 175
                            echo "\t\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['filter_v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (((($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 =                     // line 177
$context["filter"]) && is_array($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921) || $__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921 instanceof ArrayAccess ? ($__internal_aee130853742ef3e066bee9d5b201f026709112632574a72409cce5c24f44921["type"] ?? null) : null) == "slider")) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t<div class=\"slidewrapper\">
\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" id=\"revf_slider";
                        // line 179
                        echo (($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a = $context["filter"]) && is_array($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a) || $__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a instanceof ArrayAccess ? ($__internal_34bfc9d3bb99a6e1ea80e9e1e16e70ac03c16465a14de0faf0a7d7df04205a7a["id"] ?? null) : null);
                        echo "\" name=\"";
                        echo (($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 = $context["filter"]) && is_array($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4) || $__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4 instanceof ArrayAccess ? ($__internal_975fa751a8f688c78873ea77782d85542baaefa8277fb1ae2e9b2a7d8eed4ca4["name"] ?? null) : null);
                        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
                    } elseif (((($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 =                     // line 181
$context["filter"]) && is_array($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985) || $__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985 instanceof ArrayAccess ? ($__internal_3a29dd8c635325e3d124a8a60682c8c1d72c8f81204e952bf98350c9fabbc985["type"] ?? null) : null) == "image")) {
                        echo " 
\t\t\t\t\t\t\t\t\t\t\t";
                        // line 182
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 = $context["filter"]) && is_array($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51) || $__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51 instanceof ArrayAccess ? ($__internal_245fa8e4b1f2520e359eeb249916824c4d6f6fcce189eedb4956fb1747c4eb51["values"] ?? null) : null));
                        foreach ($context['_seq'] as $context["key"] => $context["filter_v"]) {
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"";
                            // line 183
                            echo (($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a = $context["filter_v"]) && is_array($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a) || $__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a instanceof ArrayAccess ? ($__internal_9e80f0131faf7c30fa2ce2a767187df174f9da8bcbd50f87a692ce0bfaa1635a["id"] ?? null) : null);
                            echo "\" class=\"image-filter\">
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            // line 184
                            if ((($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 = ($context["settings"] ?? null)) && is_array($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762) || $__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762 instanceof ArrayAccess ? ($__internal_451826e8bdee9d18aea0e33bdc5ff98645a3591151f15890bdcbf323f991d762["filter_count_products"] ?? null) : null)) {
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
                                // line 186
                                echo (($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 = $context["filter"]) && is_array($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053) || $__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053 instanceof ArrayAccess ? ($__internal_1d091d83c8b124c871d72f3d4f6fd41a4ee9660a12b13118ed628d413c8f7053["name"] ?? null) : null);
                                echo "[]\" value=\"";
                                echo (($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c = $context["filter_v"]) && is_array($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c) || $__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c instanceof ArrayAccess ? ($__internal_65ca6abbb047147adc36adc2b2eee31db7dcbf18e71e872be20ddfaa1118c70c["val"] ?? null) : null);
                                echo "\" ";
                                if ((twig_get_attribute($this->env, $this->source, $context["filter_v"], "chek", [], "array", true, true, false, 186) && (($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c = $context["filter_v"]) && is_array($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c) || $__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c instanceof ArrayAccess ? ($__internal_161aee9a7f672339d6d858e64e1de832e33321400f3f2381c16bf9c6d2fbcc9c["chek"] ?? null) : null))) {
                                    echo "checked";
                                }
                                echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
                                // line 187
                                echo (($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 = $context["filter_v"]) && is_array($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030) || $__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030 instanceof ArrayAccess ? ($__internal_c8e66b28fe4788d592082dfe3aeeaa036a7caf1017aa84d9002984c1f4fbc030["image"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 = $context["filter_v"]) && is_array($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8) || $__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8 instanceof ArrayAccess ? ($__internal_039139496843b11bef2e1873734e0f4e6f0334f99b26b9202f2107aca1929bb8["name"] ?? null) : null);
                                echo "\"/>";
                                echo (($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 = $context["filter_v"]) && is_array($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86) || $__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86 instanceof ArrayAccess ? ($__internal_925e03cbc484a83726b2283dd3b53369cf62a514035d11f764f348b039e42e86["name"] ?? null) : null);
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 189
                                if ((($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 = $context["filter_v"]) && is_array($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9) || $__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9 instanceof ArrayAccess ? ($__internal_1851fce5e10e004219a620bc4ec54e0dce7d95e3cc5df26b354b442a89edf2a9["count"] ?? null) : null)) {
                                    echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"revlabel pull-right\">";
                                    // line 190
                                    echo (($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac = $context["filter_v"]) && is_array($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac) || $__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac instanceof ArrayAccess ? ($__internal_7f8b6b79c000ace681a97eb4e372ecbf3824a243268aa8909f315967b09890ac["count"] ?? null) : null);
                                    echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 191
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 192
                                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"without_count_products\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"";
                                // line 194
                                echo (($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 = $context["filter"]) && is_array($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768) || $__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768 instanceof ArrayAccess ? ($__internal_f729ba442740d3f6c098998c72ec6936b2f5c5d7642933047145361560991768["name"] ?? null) : null);
                                echo "[]\" value=\"";
                                echo (($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 = $context["filter_v"]) && is_array($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57) || $__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57 instanceof ArrayAccess ? ($__internal_9092e96c712a0a0873eb67a677c52108ea03891525ad69649382158e33697b57["val"] ?? null) : null);
                                echo "\" ";
                                if ((twig_get_attribute($this->env, $this->source, $context["filter_v"], "chek", [], "array", true, true, false, 194) && (($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 = $context["filter_v"]) && is_array($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898) || $__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898 instanceof ArrayAccess ? ($__internal_fd5cc34776dcec03d7489322c0a0c72f1de5a01209896acc469d764bdcfe2898["chek"] ?? null) : null))) {
                                    echo "checked";
                                }
                                echo " />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img data-toggle=\"tooltip\" class=\"img-responsive\" src=\"";
                                // line 195
                                echo (($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 = $context["filter_v"]) && is_array($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283) || $__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283 instanceof ArrayAccess ? ($__internal_e7cec1b021878d1bb02c1063e199e8cefa56cb589808a137e4cbc1921ac94283["image"] ?? null) : null);
                                echo "\" alt=\"";
                                echo (($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a = $context["filter_v"]) && is_array($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a) || $__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a instanceof ArrayAccess ? ($__internal_d531a19fddb41a9467c1a55a54b8a26432b407278d04ee272777b6e18b4ccd7a["name"] ?? null) : null);
                                echo "\" title=\"";
                                echo (($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 = $context["filter_v"]) && is_array($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3) || $__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3 instanceof ArrayAccess ? ($__internal_1cd2a3f8cba41eac87892993230e5421a7dbd05c0ead14fc195d5433379f30f3["name"] ?? null) : null);
                                echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 197
                            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['filter_v'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 199
                        echo " 
\t\t\t\t\t\t\t\t\t\t";
                    }
                    // line 200
                    echo " 
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['filter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 204
                echo " 
\t\t\t\t\t";
            }
            // line 205
            echo " 
\t\t\t\t</div>
\t\t\t\t";
            // line 207
            if ( !(($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 = ($context["settings"] ?? null)) && is_array($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4) || $__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4 instanceof ArrayAccess ? ($__internal_83b8171902561b20ceb42baa6f852f2579c5aad78c12181da527b65620a553b4["filter_sposob"] ?? null) : null)) {
                echo " 
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<button type=\"submit\" class=\"app_filter btn btn-primary btn-block\" data-loading-text=\"";
                // line 209
                echo ($context["text_loading"] ?? null);
                echo "\">";
                echo ($context["text_find"] ?? null);
                echo "</button>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 211
            echo " 
\t\t\t</div>
\t\t\t<input type=\"hidden\" name=\"sort\" value=\"";
            // line 213
            echo ($context["sort"] ?? null);
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"order\" value=\"";
            // line 214
            echo ($context["order"] ?? null);
            echo "\" />
\t\t\t<input type=\"hidden\" name=\"limit\" value=\"";
            // line 215
            echo ($context["limit"] ?? null);
            echo "\" />
\t\t</form>
\t</div>
\t<script><!--
\t\$(\".option_box .option_name\").click(function () {
\t\t\$(this).siblings(\".collapsible\").toggle();
\t\t\$(this).toggleClass(\"hided\")
\t});
\tif(\$(window).width() < 991) {
\t\t\$('#column-left #revfilter_box').css('height', \$(window).height());
\t\t";
            // line 225
            if ((($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 = ($context["settings"] ?? null)) && is_array($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9) || $__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9 instanceof ArrayAccess ? ($__internal_daa44007e692567557eff5658cd46870513c97a8bc03c58428d8aaae92c0e8c9["filter_sposob"] ?? null) : null)) {
                echo " 
\t\t\t\$('#revfilter_box').append('<div style=\"margin:15px 0; text-align:center\"><button class=\"app_filter btn btn-primary btn-block\" data-loading-text=\"";
                // line 226
                echo ($context["text_loading"] ?? null);
                echo "\">";
                echo ($context["text_find"] ?? null);
                echo "</button></div>');
\t\t";
            }
            // line 227
            echo " 
\t\t\$('#revfilter_box_open').on('click', function() {
\t\t\t\$('#column-left').addClass('show');
\t\t\t\$('#revfilter_box_open').css('opacity', '0');
\t\t\tdocument.body.style.overflow = 'hidden';
\t\t});\t
\t\t\$('.app_filter, .clear_filter').on('click', function() {
\t\t\t\$('#column-left').removeClass('show');
\t\t\t\$('#revfilter_box_open').css('opacity', '0.9');
\t\t\tdocument.body.style.overflow = 'visible';
\t\t});
\t}
\t";
            // line 239
            if (((($context["filter_price_status"] ?? null) && ($context["filter_price_min"] ?? null)) && ($context["filter_price_max"] ?? null))) {
                echo " 
\t\t\$(\"#price_revfilter\").ionRangeSlider( {
\t\t\ttype: 'double',
\t\t\tforce_edges: true,
\t\t\tmin: ";
                // line 243
                echo ($context["filter_price_min"] ?? null);
                echo ",
\t\t\tmax: ";
                // line 244
                echo ($context["filter_price_max"] ?? null);
                echo ",
\t\t\tfrom: ";
                // line 245
                echo ($context["filter_price_min_from"] ?? null);
                echo ",
\t\t\tto: ";
                // line 246
                echo ($context["filter_price_max_to"] ?? null);
                echo ",
\t\t\tprefix: '";
                // line 247
                echo ($context["prefix"] ?? null);
                echo "',
\t\t\tpostfix: '";
                // line 248
                echo ($context["postfix"] ?? null);
                echo "',
\t\t\t";
                // line 249
                if ((($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 = ($context["settings"] ?? null)) && is_array($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7) || $__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7 instanceof ArrayAccess ? ($__internal_e1b1a26e763ae747d1fc3d1b0b9c2b4626803f6553cb2f29a46e9b3f9b6a6aa7["filter_price_setka"] ?? null) : null)) {
                    echo " 
\t\t\t\tgrid: true,
\t\t\t\tstep: ";
                    // line 251
                    echo (($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 = ($context["settings"] ?? null)) && is_array($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416) || $__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416 instanceof ArrayAccess ? ($__internal_dc5d8f1b0e8d8f121483833b3819db802deb2a1282c5450df5fbbdb4c4c3d416["filter_price_step"] ?? null) : null);
                    echo ",
\t\t\t\tgrid_num: 4,
\t\t\t";
                }
                // line 253
                echo " 
\t\t\t";
                // line 254
                if ((($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e = ($context["settings"] ?? null)) && is_array($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e) || $__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e instanceof ArrayAccess ? ($__internal_9b87a1e1323fa7607c7e95b07cf5d6a8a31261a0bbac03dc74c72110212f8f4e["filter_sposob"] ?? null) : null)) {
                    echo " 
\t\t\t\tonFinish: function (data) {
\t\t\t\t\tif(\$(window).width() > 991) {
\t\t\t\t\t\t\$('#revfilter_form').submit();
\t\t\t\t\t}
\t\t\t\t}
\t\t\t";
                }
                // line 260
                echo " 
\t\t});
\t";
            }
            // line 262
            echo " 
\t";
            // line 263
            if ((isset($context["allfilters"]) || array_key_exists("allfilters", $context))) {
                echo " 
\t\t";
                // line 264
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["allfilters"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["filter"]) {
                    echo " 
\t\t\t";
                    // line 265
                    if ((twig_get_attribute($this->env, $this->source, $context["filter"], "type", [], "array", true, true, false, 265) && ((($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f = $context["filter"]) && is_array($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f) || $__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f instanceof ArrayAccess ? ($__internal_473f956237dde602dca8d4c42519c23a7466c04927553a71be9b287c435e2e1f["type"] ?? null) : null) == "slider"))) {
                        echo " 
\t\t\t\t\tvar values";
                        // line 266
                        echo $context["key"];
                        echo " = [
\t\t\t\t\t\t";
                        // line 267
                        if (twig_get_attribute($this->env, $this->source, $context["filter"], "values", [], "array", true, true, false, 267)) {
                            echo " 
\t\t\t\t\t\t\t";
                            // line 268
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b = $context["filter"]) && is_array($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b) || $__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b instanceof ArrayAccess ? ($__internal_c937147b4224d1a42b33a5bd4d8cc7ca7f03deaf5756b9444870e8af2d4e771b["values"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["filter_v"]) {
                                echo " 
\t\t\t\t\t\t\t\t\"";
                                // line 269
                                echo (($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 = $context["filter_v"]) && is_array($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75) || $__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75 instanceof ArrayAccess ? ($__internal_f312a27c239aee4ab13fb0728a2a81fd48b1756504f2c7f0a60f8e8114891a75["val"] ?? null) : null);
                                echo "\",
\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_v'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 270
                            echo " 
\t\t\t\t\t\t";
                        }
                        // line 271
                        echo " 
\t\t\t\t\t];
\t\t\t\t\t\$(\"#revf_slider";
                        // line 273
                        echo (($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c = $context["filter"]) && is_array($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c) || $__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c instanceof ArrayAccess ? ($__internal_5af03ff0cc8e1222402f36d418bce8507137ed70ad84b904d8c76ad12c3cdb1c["id"] ?? null) : null);
                        echo "\").ionRangeSlider( {
\t\t\t\t\t\ttype: 'double',
\t\t\t\t\t\tforce_edges: true,
\t\t\t\t\t\tvalues: values";
                        // line 276
                        echo $context["key"];
                        echo ",
\t\t\t\t\t\tprettify_enabled: true,
\t\t\t\t\t\tgrid: ";
                        // line 278
                        echo (((($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 = ($context["settings"] ?? null)) && is_array($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1) || $__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1 instanceof ArrayAccess ? ($__internal_9af1f39a092ea44798cef53686837b7a0e65bc2d674686cabb26ec927398b4a1["filter_setka"] ?? null) : null)) ? ("true") : ("false"));
                        echo ",
\t\t\t\t\t\tprettify: function (num) {
\t\t\t\t\t\t\t";
                        // line 280
                        if (twig_get_attribute($this->env, $this->source, $context["filter"], "values", [], "array", true, true, false, 280)) {
                            echo " 
\t\t\t\t\t\t\t\t";
                            // line 281
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable((($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 = $context["filter"]) && is_array($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24) || $__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24 instanceof ArrayAccess ? ($__internal_ac7e48faa0323c0109c068324f874a96d3f538986706d62646c4ff8bea813b24["values"] ?? null) : null));
                            foreach ($context['_seq'] as $context["_key"] => $context["filter_v"]) {
                                echo " 
\t\t\t\t\t\t\t\t\tif (num == \"";
                                // line 282
                                echo (($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 = $context["filter_v"]) && is_array($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850) || $__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850 instanceof ArrayAccess ? ($__internal_b9697a1a026ba6f17a3b8f67645afbc14e9a7e8db717019bc29adbc98cc84850["val"] ?? null) : null);
                                echo "\") { return \"";
                                echo (($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 = $context["filter_v"]) && is_array($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34) || $__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34 instanceof ArrayAccess ? ($__internal_1d930af3621b2130f4718a24e570af2acfbccfb3425f8b4bdd93052a4b2e1e34["name"] ?? null) : null);
                                echo "\"; }
\t\t\t\t\t\t\t\t";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter_v'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 283
                            echo " 
\t\t\t\t\t\t\t";
                        }
                        // line 284
                        echo " 
\t\t\t\t\t\t},
\t\t\t\t\t\tonFinish: function (data) {
\t\t\t\t\t\t\tvar load_filters = false;
\t\t\t\t\t\t\tvar result = [];
\t\t\t\t\t\t\tfor (var i = 0; i < values";
                        // line 289
                        echo $context["key"];
                        echo ".length; i++) {
\t\t\t\t\t\t\t\tif (i == data.from) {
\t\t\t\t\t\t\t\t\tload_filters = true;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (load_filters) {
\t\t\t\t\t\t\t\t\tresult.push(values";
                        // line 294
                        echo $context["key"];
                        echo "[i]);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\tif (i == data.to) {
\t\t\t\t\t\t\t\t\tload_filters = false;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tdata.input.val(result.join(\";\"));
\t\t\t\t\t\t\t";
                        // line 301
                        if ((($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df = ($context["settings"] ?? null)) && is_array($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df) || $__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df instanceof ArrayAccess ? ($__internal_cd308af9d66532a4787f365d74d2c10bc61439099a68241bdbc89bc9680a29df["filter_sposob"] ?? null) : null)) {
                            echo " 
\t\t\t\t\t\t\t\tif(\$(window).width() > 991) {
\t\t\t\t\t\t\t\t\t\$('#revfilter_form').submit();
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
                        }
                        // line 305
                        echo " 
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t\t\$(\"#revf_slider";
                        // line 308
                        echo (($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 = $context["filter"]) && is_array($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4) || $__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4 instanceof ArrayAccess ? ($__internal_5c7a1d4bbedb4e71d3728c47d25651b741a575e7549d719db9e389ac31f9e0e4["id"] ?? null) : null);
                        echo "\").val(\"\");
\t\t\t";
                    }
                    // line 309
                    echo " 
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['filter'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 310
                echo " 
\t";
            }
            // line 311
            echo " 
\t\$(document).ready(function () {
\t\tif(\$(window).width() > 991) {
\t\t\tsortir = 'auto';
\t\t} else { 
\t\t\tsortir = 'manual';
\t\t}
\t\t\$('#revfilter_form').revFilter( {
\t\t\tselector: '#content .revfilter_container',
\t\t\t";
            // line 320
            if ((($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 = ($context["settings"] ?? null)) && is_array($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36) || $__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36 instanceof ArrayAccess ? ($__internal_d315cac7207a8fae6d0ee59f144a64ec832037139e03f92fd0b4f245fe3b7b36["filter_sposob"] ?? null) : null)) {
                echo " 
\t\t\t\tmode: sortir,
\t\t\t";
            } else {
                // line 322
                echo " 
\t\t\t\tmode: 'manual',
\t\t\t";
            }
            // line 324
            echo " 
\t\t\trevload: true,
\t\t\t";
            // line 326
            if ((($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b = ($context["settings"] ?? null)) && is_array($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b) || $__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b instanceof ArrayAccess ? ($__internal_57db64d4ce3248effca58b9fa40f0a0305fbc7853831e1cd8a6a1a6d4c41e03b["filter_count_products"] ?? null) : null)) {
                echo " 
\t\t\t\tcount_show: true,
\t\t\t";
            }
            // line 328
            echo " 
\t\t\treset_id: 'revfilter_reset',
\t\t\tfilter_data: ";
            // line 330
            echo ($context["filter_data"] ?? null);
            echo " 
\t\t});
\t});
\t//--></script>
";
        }
    }

    public function getTemplateName()
    {
        return "revolution/template/revolution/revfilter.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1107 => 330,  1103 => 328,  1097 => 326,  1093 => 324,  1088 => 322,  1082 => 320,  1071 => 311,  1067 => 310,  1060 => 309,  1055 => 308,  1050 => 305,  1042 => 301,  1032 => 294,  1024 => 289,  1017 => 284,  1013 => 283,  1003 => 282,  997 => 281,  993 => 280,  988 => 278,  983 => 276,  977 => 273,  973 => 271,  969 => 270,  961 => 269,  955 => 268,  951 => 267,  947 => 266,  943 => 265,  937 => 264,  933 => 263,  930 => 262,  925 => 260,  915 => 254,  912 => 253,  906 => 251,  901 => 249,  897 => 248,  893 => 247,  889 => 246,  885 => 245,  881 => 244,  877 => 243,  870 => 239,  856 => 227,  849 => 226,  845 => 225,  832 => 215,  828 => 214,  824 => 213,  820 => 211,  812 => 209,  807 => 207,  803 => 205,  799 => 204,  789 => 200,  785 => 199,  777 => 197,  767 => 195,  757 => 194,  753 => 192,  749 => 191,  744 => 190,  740 => 189,  731 => 187,  721 => 186,  716 => 184,  712 => 183,  706 => 182,  702 => 181,  695 => 179,  690 => 177,  681 => 175,  676 => 172,  672 => 171,  667 => 170,  663 => 169,  659 => 168,  655 => 167,  649 => 166,  646 => 165,  641 => 163,  637 => 162,  632 => 161,  628 => 160,  624 => 159,  620 => 158,  614 => 157,  610 => 156,  604 => 155,  600 => 154,  596 => 153,  592 => 152,  589 => 151,  581 => 149,  577 => 148,  572 => 147,  568 => 146,  564 => 145,  551 => 143,  546 => 141,  540 => 140,  536 => 139,  533 => 138,  525 => 136,  521 => 135,  516 => 134,  512 => 133,  508 => 132,  495 => 130,  490 => 128,  484 => 127,  480 => 126,  474 => 125,  468 => 124,  460 => 123,  454 => 122,  448 => 121,  444 => 120,  441 => 119,  434 => 115,  424 => 113,  419 => 110,  415 => 109,  410 => 108,  406 => 107,  402 => 106,  398 => 105,  394 => 104,  391 => 103,  386 => 101,  382 => 100,  377 => 99,  373 => 98,  369 => 97,  365 => 96,  361 => 95,  357 => 94,  351 => 93,  347 => 92,  342 => 90,  339 => 89,  331 => 87,  327 => 86,  322 => 85,  318 => 84,  314 => 83,  303 => 81,  295 => 78,  291 => 77,  288 => 76,  280 => 74,  276 => 73,  271 => 72,  267 => 71,  263 => 70,  252 => 68,  244 => 65,  240 => 64,  236 => 63,  230 => 62,  222 => 61,  217 => 59,  214 => 58,  208 => 55,  204 => 54,  192 => 51,  187 => 49,  181 => 48,  177 => 47,  173 => 45,  164 => 43,  160 => 42,  154 => 41,  150 => 40,  145 => 38,  139 => 37,  131 => 36,  126 => 34,  123 => 33,  116 => 30,  110 => 29,  103 => 27,  95 => 26,  90 => 24,  87 => 23,  78 => 18,  73 => 16,  65 => 11,  60 => 8,  55 => 7,  51 => 6,  46 => 4,  42 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/revolution/revfilter.twig", "");
    }
}
