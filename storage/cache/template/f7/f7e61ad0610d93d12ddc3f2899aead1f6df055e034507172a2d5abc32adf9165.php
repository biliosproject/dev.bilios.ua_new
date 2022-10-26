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

/* common/header.twig */
class __TwigTemplate_7647862542f83ba84ab243aaad11b7f1e0c360c4403c55a20491561784b3c275 extends \Twig\Template
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
        echo "<!DOCTYPE html>
<html dir=\"";
        // line 2
        echo ($context["direction"] ?? null);
        echo "\" lang=\"";
        echo ($context["lang"] ?? null);
        echo "\">
<head>
<meta charset=\"UTF-8\" />
<title>";
        // line 5
        echo ($context["title"] ?? null);
        echo "</title>
<base href=\"";
        // line 6
        echo ($context["base"] ?? null);
        echo "\" />
";
        // line 7
        if (($context["description"] ?? null)) {
            // line 8
            echo "<meta name=\"description\" content=\"";
            echo ($context["description"] ?? null);
            echo "\" />
";
        }
        // line 10
        if (($context["keywords"] ?? null)) {
            // line 11
            echo "<meta name=\"keywords\" content=\"";
            echo ($context["keywords"] ?? null);
            echo "\" />
";
        }
        // line 13
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0\" />
<script type=\"text/javascript\" src=\"view/javascript/jquery/jquery-2.1.1.min.js\"></script>
<script type=\"text/javascript\" src=\"view/javascript/bootstrap/js/bootstrap.min.js\"></script>
<link href=\"view/stylesheet/bootstrap.css\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"view/javascript/revolution/font-awesome/css/font-awesome.min.css\" type=\"text/css\" rel=\"stylesheet\" />
<script src=\"view/javascript/jquery/datetimepicker/moment/moment.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/moment/moment-with-locales.min.js\" type=\"text/javascript\"></script>
<script src=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.js\" type=\"text/javascript\"></script>
<link href=\"view/javascript/jquery/datetimepicker/bootstrap-datetimepicker.min.css\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
<link type=\"text/css\" href=\"view/stylesheet/stylesheet.css\" rel=\"stylesheet\" media=\"screen\" />

\t\t\t\t<link type=\"text/css\" href=\"view/stylesheet/revolution.css\" rel=\"stylesheet\" media=\"screen\" />
            
";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["styles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["style"]) {
            // line 27
            echo "<link type=\"text/css\" href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "href", [], "any", false, false, false, 27);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "rel", [], "any", false, false, false, 27);
            echo "\" media=\"";
            echo twig_get_attribute($this->env, $this->source, $context["style"], "media", [], "any", false, false, false, 27);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['style'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 30
            echo "<link href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "href", [], "any", false, false, false, 30);
            echo "\" rel=\"";
            echo twig_get_attribute($this->env, $this->source, $context["link"], "rel", [], "any", false, false, false, 30);
            echo "\" />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "<script src=\"view/javascript/common.js\" type=\"text/javascript\"></script>
";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 34
            echo "<script type=\"text/javascript\" src=\"";
            echo $context["script"];
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "</head>
<body>
<div id=\"container\">
<header id=\"header\" class=\"navbar navbar-static-top\">
  <div class=\"container-fluid\">
    <div id=\"header-logo\" class=\"navbar-header\"><a href=\"";
        // line 41
        echo ($context["home"] ?? null);
        echo "\" class=\"navbar-brand\"><img src=\"view/image/logo.png\" alt=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" title=\"";
        echo ($context["heading_title"] ?? null);
        echo "\" /></a></div>
    ";
        // line 42
        if (($context["logged"] ?? null)) {
            echo "<a href=\"#\" id=\"button-menu\" class=\"hidden-md hidden-lg\"><span class=\"fa fa-bars\"></span></a>
    <ul class=\"nav pull-left\">
      <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\"  title=\"";
            // line 44
            echo ($context["text_new"] ?? null);
            echo "\"><i class=\"fa fa-plus fa-lg\"></i> <span class=\"header-item\">";
            echo ($context["text_new"] ?? null);
            echo "</span></a>
        <ul class=\"dropdown-menu dropdown-menu-left alerts-dropdown\">
          <li><a href=\"";
            // line 46
            echo ($context["new_product"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_product"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 47
            echo ($context["new_category"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_category"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 48
            echo ($context["new_manufacturer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_manufacturer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 49
            echo ($context["new_customer"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_customer"] ?? null);
            echo "</a></li>
          <li><a href=\"";
            // line 50
            echo ($context["new_download"] ?? null);
            echo "\" style=\"display: block; overflow: auto;\">";
            echo ($context["text_new_download"] ?? null);
            echo "</a></li>
        </ul>
      </li>
    </ul>

    <div id=\"oc-search-div\" class=\"col-sm-3 col-md-3 pull-left\">
      ";
            // line 56
            echo ($context["search"] ?? null);
            echo "
    </div>
    <ul class=\"nav navbar-nav navbar-right\">
      <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><img src=\"";
            // line 59
            echo ($context["image"] ?? null);
            echo "\" alt=\"";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo "\" title=\"";
            echo ($context["username"] ?? null);
            echo "\" id=\"user-profile\" class=\"img-circle\" />";
            echo ($context["firstname"] ?? null);
            echo " ";
            echo ($context["lastname"] ?? null);
            echo " <i class=\"fa fa-caret-down fa-fw\"></i></a>
        <ul class=\"dropdown-menu dropdown-menu-right\">
          <li><a href=\"";
            // line 61
            echo ($context["profile"] ?? null);
            echo "\"><i class=\"fa fa-user-circle-o fa-fw\"></i> ";
            echo ($context["text_profile"] ?? null);
            echo "</a></li>
          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 63
            echo ($context["text_store"] ?? null);
            echo "</li>
          ";
            // line 64
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                // line 65
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "href", [], "any", false, false, false, 65);
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 65);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "          <li role=\"separator\" class=\"divider\"></li>
          <li class=\"dropdown-header\">";
            // line 68
            echo ($context["text_help"] ?? null);
            echo "</li>
          <li><a href=\"https://ocstore.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-opencart fa-fw\"></i> ";
            // line 69
            echo ($context["text_homepage"] ?? null);
            echo "</a></li>
          <li><a href=\"https://docs.ocstore.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-file-text-o fa-fw\"></i> ";
            // line 70
            echo ($context["text_documentation"] ?? null);
            echo "</a></li>
          <li><a href=\"https://opencartforum.com/?utm_source=ocstore3\" target=\"_blank\"><i class=\"fa fa-comments-o fa-fw\"></i> ";
            // line 71
            echo ($context["text_support"] ?? null);
            echo "</a></li>
        </ul>
      </li>
      <li><a href=\"";
            // line 74
            echo ($context["logout"] ?? null);
            echo "\"><i class=\"fa fa-sign-out\"></i> <span class=\"hidden-xs hidden-sm hidden-md\">";
            echo ($context["text_logout"] ?? null);
            echo "</span></a></li>
    </ul>
    ";
        }
        // line 76
        echo "</div>
</header>";
    }

    public function getTemplateName()
    {
        return "common/header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 76,  265 => 74,  259 => 71,  255 => 70,  251 => 69,  247 => 68,  244 => 67,  233 => 65,  229 => 64,  225 => 63,  218 => 61,  203 => 59,  197 => 56,  186 => 50,  180 => 49,  174 => 48,  168 => 47,  162 => 46,  155 => 44,  150 => 42,  142 => 41,  135 => 36,  126 => 34,  122 => 33,  119 => 32,  108 => 30,  104 => 29,  91 => 27,  87 => 26,  72 => 13,  66 => 11,  64 => 10,  58 => 8,  56 => 7,  52 => 6,  48 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "common/header.twig", "");
    }
}
