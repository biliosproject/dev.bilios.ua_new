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

/* revolution/revtextblocks_list.twig */
class __TwigTemplate_d5d2fbf6bea5e6cd718cc7b805efc168d0c5f3d9be42299ae556bae7ae64c82e extends \Twig\Template
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
        echo ($context["column_left"] ?? null);
        echo " 
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\"><a href=\"";
        // line 5
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-manufacturer').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["revtextblocks_heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            echo " 
        <li><a href=\"";
            // line 11
            echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
            echo "\">";
            echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo " 
      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            echo " 
    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 18
            echo ($context["error_warning"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 21
        echo " 
    ";
        // line 22
        if (($context["success"] ?? null)) {
            echo " 
    <div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ";
            // line 23
            echo ($context["success"] ?? null);
            echo " 
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 26
        echo " 
    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-list\"></i> ";
        // line 29
        echo ($context["text_list"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
\t\t<div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-name\">";
        // line 36
        echo ($context["entry_name"] ?? null);
        echo ":</label>
                <input type=\"text\" name=\"filter_name\" value=\"";
        // line 37
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_name"] ?? null);
        echo "\" id=\"input-name\" class=\"form-control\" />
              </div>
            </div>
\t\t\t<div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 42
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 45
        if (($context["filter_status"] ?? null)) {
            echo " 
                  <option value=\"1\" selected=\"selected\">";
            // line 46
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 47
            echo " 
                  <option value=\"1\">";
            // line 48
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 49
        echo " 
                  ";
        // line 50
        if (( !($context["filter_status"] ?? null) &&  !twig_test_empty(($context["filter_status"] ?? null)))) {
            echo " 
                  <option value=\"0\" selected=\"selected\">";
            // line 51
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 52
            echo " 
                  <option value=\"0\">";
            // line 53
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 54
        echo " 
                </select>
              </div>
\t\t\t  <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 57
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 61
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-manufacturer\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 67
        if ((($context["sort"] ?? null) == "name")) {
            echo " 
                    <a href=\"";
            // line 68
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 69
            echo " 
                    <a href=\"";
            // line 70
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 71
        echo "</td>
                  <td class=\"text-right\">";
        // line 72
        if ((($context["sort"] ?? null) == "sort_order")) {
            echo " 
                    <a href=\"";
            // line 73
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 74
            echo " 
                    <a href=\"";
            // line 75
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 76
        echo "</td>
                  <td class=\"text-right\">";
        // line 77
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 81
        if (($context["textblockss"] ?? null)) {
            echo " 
                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["textblockss"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["tab"]) {
                echo " 
                <tr>
                  <td class=\"text-center\">";
                // line 84
                if (twig_in_filter((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["tab"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["tb_id"] ?? null) : null), ($context["selected"] ?? null))) {
                    echo " 
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 85
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["tab"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["tb_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 86
                    echo " 
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 87
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["tab"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["tb_id"] ?? null) : null);
                    echo "\" />
                    ";
                }
                // line 88
                echo "</td>
                  <td class=\"text-left\">";
                // line 89
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["tab"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
                echo "</td>
                  <td class=\"text-right\">";
                // line 90
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["tab"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["sort_order"] ?? null) : null);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 91
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["tab"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo " 
                ";
        } else {
            // line 94
            echo " 
                <tr>
                  <td class=\"text-center\" colspan=\"4\">";
            // line 96
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 98
        echo " 
              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 104
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 105
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = 'index.php?route=revolution/revtextblocks&user_token=";
        // line 113
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_name = \$('input[name=\\'filter_name\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();

\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status);
\t}

\tlocation = url;
});

\$('input[name=\\'filter_name\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=revolution/revtextblocks/autocomplete&user_token=";
        // line 133
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_name\\']').val(item['label']);
\t}
});
//--></script>
";
        // line 150
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/revtextblocks_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 150,  373 => 133,  350 => 113,  339 => 105,  335 => 104,  327 => 98,  321 => 96,  317 => 94,  313 => 93,  302 => 91,  298 => 90,  294 => 89,  291 => 88,  286 => 87,  283 => 86,  278 => 85,  274 => 84,  267 => 82,  263 => 81,  256 => 77,  253 => 76,  246 => 75,  243 => 74,  234 => 73,  230 => 72,  227 => 71,  220 => 70,  217 => 69,  208 => 68,  204 => 67,  195 => 61,  188 => 57,  183 => 54,  178 => 53,  175 => 52,  170 => 51,  166 => 50,  163 => 49,  158 => 48,  155 => 47,  150 => 46,  146 => 45,  140 => 42,  130 => 37,  126 => 36,  116 => 29,  111 => 26,  104 => 23,  100 => 22,  97 => 21,  90 => 18,  86 => 17,  79 => 12,  69 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/revtextblocks_list.twig", "");
    }
}
