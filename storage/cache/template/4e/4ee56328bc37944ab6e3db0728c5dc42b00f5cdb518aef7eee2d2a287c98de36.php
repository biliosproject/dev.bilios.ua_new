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

/* revolution/revpopupphone.twig */
class __TwigTemplate_1746dbec3315b16bc2f68c7ff11ec7bedaffbfc60159cfa92d81fff47277ced4 extends \Twig\Template
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
        echo "') ? \$('#form-review').submit() : false;\"><i class=\"fa fa-trash-o\"></i></button>
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
        <div class=\"well\">
          <div class=\"row\">
            <div class=\"col-sm-6\">
\t\t\t\t<div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 36
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 39
        if (($context["filter_status"] ?? null)) {
            echo " 
                  <option value=\"1\" selected=\"selected\">";
            // line 40
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 41
            echo " 
                  <option value=\"1\">";
            // line 42
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 43
        echo " 
                  ";
        // line 44
        if (( !($context["filter_status"] ?? null) &&  !twig_test_empty(($context["filter_status"] ?? null)))) {
            echo " 
                  <option value=\"0\" selected=\"selected\">";
            // line 45
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 46
            echo " 
                  <option value=\"0\">";
            // line 47
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 48
        echo " 
                </select>
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">";
        // line 54
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 56
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-search\"></i> ";
        // line 61
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 65
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
\t\t\t\t  <td class=\"text-left\">";
        // line 71
        echo ($context["column_date_added"] ?? null);
        echo "</td>
\t\t\t\t  <td class=\"text-left\">";
        // line 72
        echo ($context["column_name"] ?? null);
        echo "</td>
                  <td class=\"text-left\">";
        // line 73
        echo ($context["column_telephone"] ?? null);
        echo "</td>
\t\t\t\t  <td class=\"text-left\">";
        // line 74
        echo ($context["column_email"] ?? null);
        echo "</td>
\t\t\t\t  <td class=\"text-left\">";
        // line 75
        echo ($context["column_comment"] ?? null);
        echo "</td>
\t\t\t\t  <td class=\"text-left\">";
        // line 76
        echo ($context["column_status"] ?? null);
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
        if (($context["reviews"] ?? null)) {
            echo " 
                ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                echo " 
                <tr>
                  <td class=\"text-center\">";
                // line 84
                if (twig_in_filter((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["review"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["pphone_id"] ?? null) : null), ($context["selected"] ?? null))) {
                    echo " 
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 85
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["review"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["pphone_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 86
                    echo " 
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 87
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["review"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["pphone_id"] ?? null) : null);
                    echo "\" />
                    ";
                }
                // line 88
                echo "</td>
\t\t\t\t  <td class=\"text-left\">";
                // line 89
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["review"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["date_added"] ?? null) : null);
                echo "</td>
                  <td class=\"text-left\">";
                // line 90
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["review"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                echo "</td>
                  <td class=\"text-right\">";
                // line 91
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["review"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["telephone"] ?? null) : null);
                echo "</td>
\t\t\t\t  <td class=\"text-right\">";
                // line 92
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["review"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["email"] ?? null) : null);
                echo "</td>
\t\t\t\t  <td class=\"text-right\">";
                // line 93
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["review"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["comment"] ?? null) : null);
                echo "</td>
                  <td class=\"text-left\">";
                // line 94
                echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["review"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["status"] ?? null) : null);
                echo "</td>
                  <td class=\"text-right\">";
                // line 95
                if ( !(($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["review"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["status_ok"] ?? null) : null)) {
                    echo "<a href=\"";
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["review"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["edit_status"] ?? null) : null);
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["text_enabled"] ?? null);
                    echo "\" class=\"btn btn-success btn-sm\" style=\"margin-right:15px;\"><i class=\"fa fa-check\"></i></a>";
                }
                echo "<a href=\"";
                echo (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["review"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 97
            echo " 
                ";
        } else {
            // line 98
            echo " 
                <tr>
                  <td class=\"text-center\" colspan=\"8\">";
            // line 100
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 102
        echo " 
              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 108
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 109
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=revolution/revpopupphone&user_token=";
        // line 116
        echo ($context["user_token"] ?? null);
        echo "';
\t
\tvar filter_status = \$('select[name=\\'filter_status\\']').val();
\t
\tif (filter_status != '*') {
\t\turl += '&filter_status=' + encodeURIComponent(filter_status); 
\t}\t\t
\t\t\t
\tvar filter_date_added = \$('input[name=\\'filter_date_added\\']').val();
\t
\tif (filter_date_added) {
\t\turl += '&filter_date_added=' + encodeURIComponent(filter_date_added);
\t}

\tlocation = url;
});
//--></script> 
  <script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tpickTime: false
});
//--></script></div>
";
        // line 138
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/revpopupphone.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  374 => 138,  349 => 116,  339 => 109,  335 => 108,  327 => 102,  321 => 100,  317 => 98,  313 => 97,  294 => 95,  290 => 94,  286 => 93,  282 => 92,  278 => 91,  274 => 90,  270 => 89,  267 => 88,  262 => 87,  259 => 86,  254 => 85,  250 => 84,  243 => 82,  239 => 81,  232 => 77,  228 => 76,  224 => 75,  220 => 74,  216 => 73,  212 => 72,  208 => 71,  199 => 65,  192 => 61,  182 => 56,  177 => 54,  169 => 48,  164 => 47,  161 => 46,  156 => 45,  152 => 44,  149 => 43,  144 => 42,  141 => 41,  136 => 40,  132 => 39,  126 => 36,  116 => 29,  111 => 26,  104 => 23,  100 => 22,  97 => 21,  90 => 18,  86 => 17,  79 => 12,  69 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/revpopupphone.twig", "");
    }
}
