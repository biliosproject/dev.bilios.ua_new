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

/* revolution/revcheckout_custom_field_list.twig */
class __TwigTemplate_df5ab2602369ff784a8a90e06092279eade982e551823d3257db5dafe418ee40 extends \Twig\Template
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
        echo "') ? \$('#form-custom-field').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
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
        <form action=\"";
        // line 32
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-custom-field\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 38
        if ((($context["sort"] ?? null) == "cfd.name")) {
            echo " 
                    <a href=\"";
            // line 39
            echo ($context["sort_name"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 40
            echo " 
                    <a href=\"";
            // line 41
            echo ($context["sort_name"] ?? null);
            echo "\">";
            echo ($context["column_name"] ?? null);
            echo "</a>
                    ";
        }
        // line 42
        echo "</td>
                  <td class=\"text-left\">";
        // line 43
        if ((($context["sort"] ?? null) == "cf.location")) {
            echo " 
                    <a href=\"";
            // line 44
            echo ($context["sort_location"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_location"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 45
            echo " 
                    <a href=\"";
            // line 46
            echo ($context["sort_location"] ?? null);
            echo "\">";
            echo ($context["column_location"] ?? null);
            echo "</a>
                    ";
        }
        // line 47
        echo "</td>
                  <td class=\"text-left\">";
        // line 48
        if ((($context["sort"] ?? null) == "cf.type")) {
            echo " 
                    <a href=\"";
            // line 49
            echo ($context["sort_type"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_type"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 50
            echo " 
                    <a href=\"";
            // line 51
            echo ($context["sort_type"] ?? null);
            echo "\">";
            echo ($context["column_type"] ?? null);
            echo "</a>
                    ";
        }
        // line 52
        echo "</td>
                  <td class=\"text-right\">";
        // line 53
        if ((($context["sort"] ?? null) == "cf.sort_order")) {
            echo " 
                    <a href=\"";
            // line 54
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo ($context["order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 55
            echo " 
                    <a href=\"";
            // line 56
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                    ";
        }
        // line 57
        echo "</td>
                  <td class=\"text-right\">";
        // line 58
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 62
        if (($context["custom_fields"] ?? null)) {
            echo " 
                ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                echo " 
                <tr>
                  <td class=\"text-center\">";
                // line 65
                if (twig_in_filter((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["custom_field"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["custom_field_id"] ?? null) : null), ($context["selected"] ?? null))) {
                    echo " 
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 66
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["custom_field"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["custom_field_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 67
                    echo " 
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 68
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["custom_field"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["custom_field_id"] ?? null) : null);
                    echo "\" />
                    ";
                }
                // line 69
                echo "</td>
                  <td class=\"text-left\">";
                // line 70
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["custom_field"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
                echo "</td>
                  <td class=\"text-left\">";
                // line 71
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["custom_field"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["location"] ?? null) : null);
                echo "</td>
                  <td class=\"text-left\">";
                // line 72
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["custom_field"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["type"] ?? null) : null);
                echo "</td>
                  <td class=\"text-right\">";
                // line 73
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["custom_field"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["sort_order"] ?? null) : null);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 74
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["custom_field"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 76
            echo " 
                ";
        } else {
            // line 77
            echo " 
                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 79
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 81
        echo " 
              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 87
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 88
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
";
        // line 94
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/revcheckout_custom_field_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  335 => 94,  326 => 88,  322 => 87,  314 => 81,  308 => 79,  304 => 77,  300 => 76,  289 => 74,  285 => 73,  281 => 72,  277 => 71,  273 => 70,  270 => 69,  265 => 68,  262 => 67,  257 => 66,  253 => 65,  246 => 63,  242 => 62,  235 => 58,  232 => 57,  225 => 56,  222 => 55,  213 => 54,  209 => 53,  206 => 52,  199 => 51,  196 => 50,  187 => 49,  183 => 48,  180 => 47,  173 => 46,  170 => 45,  161 => 44,  157 => 43,  154 => 42,  147 => 41,  144 => 40,  135 => 39,  131 => 38,  122 => 32,  116 => 29,  111 => 26,  104 => 23,  100 => 22,  97 => 21,  90 => 18,  86 => 17,  79 => 12,  69 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/revcheckout_custom_field_list.twig", "");
    }
}
