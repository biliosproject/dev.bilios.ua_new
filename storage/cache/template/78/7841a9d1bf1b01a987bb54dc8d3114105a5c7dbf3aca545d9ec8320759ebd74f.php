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

/* revolution/revanswers_list.twig */
class __TwigTemplate_bd991f59e6c869ce9f4734e8f6c432aee9b343acf840c274b095b3f5471b21ff extends \Twig\Template
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
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-product\">";
        // line 36
        echo ($context["entry_product"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_product\" value=\"";
        // line 37
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\" />
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-author\">";
        // line 40
        echo ($context["entry_author"] ?? null);
        echo "</label>
                <input type=\"text\" name=\"filter_author\" value=\"";
        // line 41
        echo ($context["filter_author"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_author"] ?? null);
        echo "\" id=\"input-author\" class=\"form-control\" />
              </div>
            </div>
            <div class=\"col-sm-6\">
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-status\">";
        // line 46
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <select name=\"filter_status\" id=\"input-status\" class=\"form-control\">
                  <option value=\"*\"></option>
                  ";
        // line 49
        if (($context["filter_status"] ?? null)) {
            echo " 
                  <option value=\"1\" selected=\"selected\">";
            // line 50
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 51
            echo " 
                  <option value=\"1\">";
            // line 52
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 53
        echo " 
                  ";
        // line 54
        if (( !($context["filter_status"] ?? null) &&  !twig_test_empty(($context["filter_status"] ?? null)))) {
            echo " 
                  <option value=\"0\" selected=\"selected\">";
            // line 55
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        } else {
            // line 56
            echo " 
                  <option value=\"0\">";
            // line 57
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                  ";
        }
        // line 58
        echo " 
                </select>
              </div>
              <div class=\"form-group\">
                <label class=\"control-label\" for=\"input-date-added\">";
        // line 62
        echo ($context["entry_date_added"] ?? null);
        echo "</label>
                <div class=\"input-group date\">
                  <input type=\"text\" name=\"filter_date_added\" value=\"";
        // line 64
        echo ($context["filter_date_added"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_added"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-date-added\" class=\"form-control\" />
                  <span class=\"input-group-btn\">
                  <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                  </span></div>
              </div>
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-filter\"></i> ";
        // line 69
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
        <form action=\"";
        // line 73
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-review\">
          <div class=\"table-responsive\">
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').prop('checked', this.checked);\" /></td>
                  <td class=\"text-left\">";
        // line 79
        if ((($context["sort"] ?? null) == "pd.name")) {
            echo " 
                    <a href=\"";
            // line 80
            echo ($context["sort_product"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 81
            echo " 
                    <a href=\"";
            // line 82
            echo ($context["sort_product"] ?? null);
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a>
                    ";
        }
        // line 83
        echo "</td>
                  <td class=\"text-left\">";
        // line 84
        if ((($context["sort"] ?? null) == "r.author")) {
            echo " 
                    <a href=\"";
            // line 85
            echo ($context["sort_author"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 86
            echo " 
                    <a href=\"";
            // line 87
            echo ($context["sort_author"] ?? null);
            echo "\">";
            echo ($context["column_author"] ?? null);
            echo "</a>
                    ";
        }
        // line 88
        echo "</td>
                  <td class=\"text-left\">";
        // line 89
        if ((($context["sort"] ?? null) == "r.status")) {
            echo " 
                    <a href=\"";
            // line 90
            echo ($context["sort_status"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 91
            echo " 
                    <a href=\"";
            // line 92
            echo ($context["sort_status"] ?? null);
            echo "\">";
            echo ($context["column_status"] ?? null);
            echo "</a>
                    ";
        }
        // line 93
        echo "</td>
                  <td class=\"text-left\">";
        // line 94
        if ((($context["sort"] ?? null) == "r.date_added")) {
            echo " 
                    <a href=\"";
            // line 95
            echo ($context["sort_date_added"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        } else {
            // line 96
            echo " 
                    <a href=\"";
            // line 97
            echo ($context["sort_date_added"] ?? null);
            echo "\">";
            echo ($context["column_date_added"] ?? null);
            echo "</a>
                    ";
        }
        // line 98
        echo "</td>
                  <td class=\"text-right\">";
        // line 99
        echo ($context["column_action"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 103
        if (($context["reviews"] ?? null)) {
            echo " 
                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["reviews"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
                echo " 
                <tr>
                  <td class=\"text-center\">";
                // line 106
                if (twig_in_filter((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["review"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["answer_id"] ?? null) : null), ($context["selected"] ?? null))) {
                    echo " 
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 107
                    echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["review"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["answer_id"] ?? null) : null);
                    echo "\" checked=\"checked\" />
                    ";
                } else {
                    // line 108
                    echo " 
                    <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    // line 109
                    echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["review"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["answer_id"] ?? null) : null);
                    echo "\" />
                    ";
                }
                // line 110
                echo "</td>
                  <td class=\"text-left\">";
                // line 111
                echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["review"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["name"] ?? null) : null);
                echo "</td>
                  <td class=\"text-left\">";
                // line 112
                echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["review"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["author"] ?? null) : null);
                echo "</td>
                  <td class=\"text-left\">";
                // line 113
                echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["review"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["status"] ?? null) : null);
                echo "</td>
                  <td class=\"text-left\">";
                // line 114
                echo (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["review"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["date_added"] ?? null) : null);
                echo "</td>
                  <td class=\"text-right\"><a href=\"";
                // line 115
                echo (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["review"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["edit"] ?? null) : null);
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-pencil\"></i></a></td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo " 
                ";
        } else {
            // line 118
            echo " 
                <tr>
                  <td class=\"text-center\" colspan=\"7\">";
            // line 120
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
                ";
        }
        // line 122
        echo " 
              </tbody>
            </table>
          </div>
        </form>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 128
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 129
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\turl = 'index.php?route=revolution/revanswers&user_token=";
        // line 136
        echo ($context["user_token"] ?? null);
        echo "';
\t
\tvar filter_product = \$('input[name=\\'filter_product\\']').val();
\t
\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}
\t
\tvar filter_author = \$('input[name=\\'filter_author\\']').val();
\t
\tif (filter_author) {
\t\turl += '&filter_author=' + encodeURIComponent(filter_author);
\t}
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
        // line 170
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/revanswers_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  474 => 170,  437 => 136,  427 => 129,  423 => 128,  415 => 122,  409 => 120,  405 => 118,  401 => 117,  390 => 115,  386 => 114,  382 => 113,  378 => 112,  374 => 111,  371 => 110,  366 => 109,  363 => 108,  358 => 107,  354 => 106,  347 => 104,  343 => 103,  336 => 99,  333 => 98,  326 => 97,  323 => 96,  314 => 95,  310 => 94,  307 => 93,  300 => 92,  297 => 91,  288 => 90,  284 => 89,  281 => 88,  274 => 87,  271 => 86,  262 => 85,  258 => 84,  255 => 83,  248 => 82,  245 => 81,  236 => 80,  232 => 79,  223 => 73,  216 => 69,  206 => 64,  201 => 62,  195 => 58,  190 => 57,  187 => 56,  182 => 55,  178 => 54,  175 => 53,  170 => 52,  167 => 51,  162 => 50,  158 => 49,  152 => 46,  142 => 41,  138 => 40,  130 => 37,  126 => 36,  116 => 29,  111 => 26,  104 => 23,  100 => 22,  97 => 21,  90 => 18,  86 => 17,  79 => 12,  69 => 11,  63 => 10,  58 => 8,  51 => 6,  45 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/revanswers_list.twig", "");
    }
}
