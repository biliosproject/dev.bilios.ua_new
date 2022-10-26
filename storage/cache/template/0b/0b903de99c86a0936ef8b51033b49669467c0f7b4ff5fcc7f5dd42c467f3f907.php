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

/* revolution/template/common/search.twig */
class __TwigTemplate_58be829bcf33290f127d7cfc85060be2b5d22ef4d28c454558098f6d18c9337d extends \Twig\Template
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
        if (($context["in_category"] ?? null)) {
            echo " 
\t<div class=\"search input-group\">\t
\t\t<div class=\"change_category input-group-btn\">
\t\t\t<button type=\"button\" class=\"change_category_button btn btn-default btn-lg dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["search_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["search_category"]) {
                echo " ";
                if (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["search_category"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["category_id"] ?? null) : null) == ($context["category_id"] ?? null))) {
                    $context["search_in_category"] = (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["search_category"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["name"] ?? null) : null);
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 6
            echo "\t\t\t\t<span class=\"category-name\">";
            echo ($context["search_in_category"] ?? null);
            echo "</span><i class=\"fa fa-chevron-down\"></i>
\t\t\t</button>
\t\t\t<ul class=\"dropdown-menu catsearch\">
\t\t\t\t<li><a href=\"#\" onclick=\"return false;\" class=\"0\">";
            // line 9
            echo ($context["search_in_category_text_all"] ?? null);
            echo "</a></li>
\t\t\t\t";
            // line 10
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["search_categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["search_category"]) {
                echo " 
\t\t\t\t<li><a href=\"#\" onclick=\"return false;\" class=\"";
                // line 11
                echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["search_category"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["category_id"] ?? null) : null);
                echo "\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["search_category"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["name"] ?? null) : null);
                echo "</a></li>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['search_category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 12
            echo " 
\t\t\t</ul>
\t\t\t<input class=\"selected_category\" type=\"hidden\" name=\"category_id\" value=\"0\" />
\t\t</div>
\t\t<input type=\"text\" name=\"search\" value=\"";
            // line 16
            echo ($context["search"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["text_search"] ?? null);
            echo "\" class=\"form-control input-lg\" />
\t\t<span class=\"search_button input-group-btn\">
\t\t\t<button type=\"button\" class=\"search-button btn btn-default btn-lg search_button\">
\t\t\t\t<i class=\"fa fa-search\"></i>
\t\t\t</button>
\t\t</span>
\t</div>
\t<script><!--
\t\$('.search a').click(function(){
\t\t\$(\".selected_category\").val(\$(this).attr('class'));
\t\t\$('.change_category_button').html('<span class=\"category-name\">' + \$(this).html() + '</span><i class=\"fa fa-chevron-down\"></i>');
\t});
\t//--></script>
";
        } else {
            // line 29
            echo " 
\t<div class=\"search input-group\">
\t\t<input type=\"text\" name=\"search\" value=\"";
            // line 31
            echo ($context["search"] ?? null);
            echo "\" placeholder=\"";
            echo ($context["text_search"] ?? null);
            echo "\" class=\"form-control input-lg\" />
\t\t<input class=\"selected_category\" type=\"hidden\" name=\"category_id\" value=\"0\" />
\t\t<span class=\"input-group-btn\">
\t\t\t<button type=\"button\" class=\"search-button btn btn-default btn-lg search_button\"><i class=\"fa fa-search\"></i></button>
\t\t</span>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "revolution/template/common/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 31,  108 => 29,  89 => 16,  83 => 12,  73 => 11,  67 => 10,  63 => 9,  56 => 6,  44 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/common/search.twig", "");
    }
}
