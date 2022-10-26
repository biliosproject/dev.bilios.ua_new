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

/* revolution/template/error/not_found.twig */
class __TwigTemplate_39045d3f89861738d918112d9b79fc5be59a8ed7b404ff478d56e2e3df27b8ac extends \Twig\Template
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
  <div class=\"row\">";
        // line 18
        echo ($context["column_left"] ?? null);
        echo " 
    ";
        // line 19
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 20
            $context["class"] = "col-sm-6";
            echo " 
    ";
        } elseif ((        // line 21
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            echo " 
    ";
            // line 22
            $context["class"] = "col-sm-9";
            echo " 
    ";
        } else {
            // line 23
            echo " 
    ";
            // line 24
            $context["class"] = "col-sm-12";
            echo " 
    ";
        }
        // line 25
        echo " 
    <div id=\"content\" class=\"";
        // line 26
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo " 
      <p>";
        // line 27
        echo ($context["text_error"] ?? null);
        echo "</p>
      <div class=\"buttons\">
        <div class=\"pull-right\"><a href=\"";
        // line 29
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 31
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 32
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 34
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/template/error/not_found.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 34,  159 => 32,  155 => 31,  148 => 29,  143 => 27,  137 => 26,  134 => 25,  129 => 24,  126 => 23,  121 => 22,  117 => 21,  113 => 20,  109 => 19,  105 => 18,  100 => 16,  97 => 15,  82 => 14,  76 => 13,  65 => 10,  60 => 8,  56 => 7,  52 => 6,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/error/not_found.twig", "");
    }
}
