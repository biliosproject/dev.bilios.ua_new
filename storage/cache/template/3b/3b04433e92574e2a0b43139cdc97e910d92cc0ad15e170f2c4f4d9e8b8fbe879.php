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

/* catalog/category_form.twig */
class __TwigTemplate_82a73bd9ceb59aed4eec4ec542103160ee9428136fee4d094d9d9b749c8fd2e8 extends \Twig\Template
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
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-category\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
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
            // line 11
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 11);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 11);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 22
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 24
        echo ($context["text_form"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 27
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-category\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-general\" data-toggle=\"tab\">";
        // line 29
        echo ($context["tab_general"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-data\" data-toggle=\"tab\">";
        // line 30
        echo ($context["tab_data"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-seo\" data-toggle=\"tab\">";
        // line 31
        echo ($context["tab_seo"] ?? null);
        echo "</a></li>
\t\t\t<li><a href=\"#tab-related\" data-toggle=\"tab\">";
        // line 32
        echo ($context["tab_related"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-design\" data-toggle=\"tab\">";
        // line 33
        echo ($context["tab_design"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-general\">
              <ul class=\"nav nav-tabs\" id=\"language\">
                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 39
            echo "                <li><a href=\"#language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 39);
            echo "\" data-toggle=\"tab\"><img src=\"language/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 39);
            echo "/";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 39);
            echo ".png\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 39);
            echo "\" /> ";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 39);
            echo "</a></li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "              </ul>
              <div class=\"tab-content\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            // line 44
            echo "                <div class=\"tab-pane\" id=\"language";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 44);
            echo "\">
                  <div class=\"form-group required\">
                    <label class=\"col-sm-2 control-label\" for=\"input-name";
            // line 46
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 46);
            echo "\">";
            echo ($context["entry_name"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 48
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            echo "][name]\" value=\"";
            echo (((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["category_description"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["category_description"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48)] ?? null) : null), "name", [], "any", false, false, false, 48)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" id=\"input-name";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 48);
            echo "\" class=\"form-control\" />
                      ";
            // line 49
            if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["error_name"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 49)] ?? null) : null)) {
                // line 50
                echo "                      <div class=\"text-danger\">";
                echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["error_name"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 50)] ?? null) : null);
                echo "</div>
                      ";
            }
            // line 52
            echo "                    </div>
                  </div>
\t\t\t\t  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-h1";
            // line 55
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 55);
            echo "\">";
            echo ($context["entry_meta_h1"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 57
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "][meta_h1]\" value=\"";
            echo (((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["category_description"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["category_description"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57)] ?? null) : null), "meta_h1", [], "any", false, false, false, 57)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_h1"] ?? null);
            echo "\" id=\"input-meta-h1";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 57);
            echo "\" class=\"form-control\" />
                    </div>
\t\t\t\t  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-title";
            // line 61
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 61);
            echo "\">";
            echo ($context["entry_meta_title"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <input type=\"text\" name=\"category_description[";
            // line 63
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            echo "][meta_title]\" value=\"";
            echo (((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["category_description"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["category_description"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63)] ?? null) : null), "meta_title", [], "any", false, false, false, 63)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_meta_title"] ?? null);
            echo "\" id=\"input-meta-title";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 63);
            echo "\" class=\"form-control\" />
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-description";
            // line 67
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 67);
            echo "\">";
            echo ($context["entry_meta_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            echo "][meta_description]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_description"] ?? null);
            echo "\" id=\"input-meta-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69);
            echo "\" class=\"form-control\">";
            echo (((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["category_description"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = ($context["category_description"] ?? null)) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 69)] ?? null) : null), "meta_description", [], "any", false, false, false, 69)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-meta-keyword";
            // line 73
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 73);
            echo "\">";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 75
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "][meta_keyword]\" rows=\"5\" placeholder=\"";
            echo ($context["entry_meta_keyword"] ?? null);
            echo "\" id=\"input-meta-keyword";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75);
            echo "\" class=\"form-control\">";
            echo (((($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = ($context["category_description"] ?? null)) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["category_description"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 75)] ?? null) : null), "meta_keyword", [], "any", false, false, false, 75)) : (""));
            echo "</textarea>
                    </div>
                  </div>
\t\t\t\t  <div class=\"form-group\">
                    <label class=\"col-sm-2 control-label\" for=\"input-description";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 79);
            echo "\">";
            echo ($context["entry_description"] ?? null);
            echo "</label>
                    <div class=\"col-sm-10\">
                      <textarea name=\"category_description[";
            // line 81
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            echo "][description]\" placeholder=\"";
            echo ($context["entry_description"] ?? null);
            echo "\" id=\"input-description";
            echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81);
            echo "\" data-toggle=\"summernote\" data-lang=\"";
            echo ($context["summernote"] ?? null);
            echo "\" class=\"form-control\">";
            echo (((($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = ($context["category_description"] ?? null)) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null)) ? (twig_get_attribute($this->env, $this->source, (($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = ($context["category_description"] ?? null)) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 81)] ?? null) : null), "description", [], "any", false, false, false, 81)) : (""));
            echo "</textarea>
                    </div>
                  </div>
                </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 86
        echo "              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-data\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-parent\">";
        // line 90
        echo ($context["entry_parent"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"path\" value=\"";
        // line 92
        echo ($context["path"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_parent"] ?? null);
        echo "\" id=\"input-parent\" class=\"form-control\" />
                  <input type=\"hidden\" name=\"parent_id\" value=\"";
        // line 93
        echo ($context["parent_id"] ?? null);
        echo "\" />
                  ";
        // line 94
        if (($context["error_parent"] ?? null)) {
            // line 95
            echo "                  <div class=\"text-danger\">";
            echo ($context["error_parent"] ?? null);
            echo "</div>
                  ";
        }
        // line 97
        echo "                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-filter\"><span data-toggle=\"tooltip\" title=\"";
        // line 100
        echo ($context["help_filter"] ?? null);
        echo "\">";
        echo ($context["entry_filter"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"filter\" value=\"\" placeholder=\"";
        // line 102
        echo ($context["entry_filter"] ?? null);
        echo "\" id=\"input-filter\" class=\"form-control\" />
                  <div id=\"category-filter\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 104
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["category_filters"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_filter"]) {
            // line 105
            echo "                    <div id=\"category-filter";
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "filter_id", [], "any", false, false, false, 105);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "name", [], "any", false, false, false, 105);
            echo "
                      <input type=\"hidden\" name=\"category_filter[]\" value=\"";
            // line 106
            echo twig_get_attribute($this->env, $this->source, $context["category_filter"], "filter_id", [], "any", false, false, false, 106);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_filter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 113
        echo ($context["entry_store"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div class=\"well well-sm\" style=\"height: 150px; overflow: auto;\">
                    ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 117
            echo "                    <div class=\"checkbox\">
                      <label>
                        ";
            // line 119
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 119), ($context["category_store"] ?? null))) {
                // line 120
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 120);
                echo "\" checked=\"checked\" />
                        ";
                // line 121
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 121);
                echo "
                        ";
            } else {
                // line 123
                echo "                        <input type=\"checkbox\" name=\"category_store[]\" value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 123);
                echo "\" />
                        ";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 124);
                echo "
                        ";
            }
            // line 126
            echo "                      </label>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 129
        echo "                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\">";
        // line 133
        echo ($context["entry_image"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 134
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
                  <input type=\"hidden\" name=\"image\" value=\"";
        // line 135
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\" />
                </div>
              </div>

\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<label class=\"col-sm-2 control-label\">Изображение в выпадающем меню:</label>
\t\t\t\t\t<div class=\"col-sm-10\"><a href=\"\" id=\"thumb-image2\" data-toggle=\"image\" class=\"img-thumbnail\"><img src=\"";
        // line 141
        echo ($context["thumb2"] ?? null);
        echo "\" alt=\"\" title=\"\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" /></a>
\t\t\t\t\t  <input type=\"hidden\" name=\"image2\" value=\"";
        // line 142
        echo ($context["image2"] ?? null);
        echo "\" id=\"input-image2\" />
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t<div id=\"form-revolution\" class=\"form-group\">
\t\t\t\t\t\t<div class=\"form-group\" style=\"padding:0\">
\t\t\t\t\t\t\t<label class=\"col-sm-2 control-label\">Иконка в меню:</label>
\t\t\t\t\t\t\t<div class=\"col-sm-2\">
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" onchange=\"\$(this).parent().parent().parent().find('.zavisimost_ico').show().next().hide();\" name=\"category_icontype\" value=\"1\" ";
        // line 151
        if (($context["category_icontype"] ?? null)) {
            echo " ";
            echo "checked";
            echo " ";
        }
        echo " /><span>Иконка</span>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t<label class=\"radio-inline\">
\t\t\t\t\t\t\t\t\t<input type=\"radio\" onchange=\"\$(this).parent().parent().parent().find('.zavisimost_ico').hide().next().show();\" name=\"category_icontype\" value=\"0\" ";
        // line 154
        if ( !($context["category_icontype"] ?? null)) {
            echo " ";
            echo "checked";
        }
        echo " /><span>Картинка</span>
\t\t\t\t\t\t\t\t</label>\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2 zavisimost_ico\" ";
        // line 157
        if ( !($context["category_icontype"] ?? null)) {
            echo " style=\"display: none\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t<span class=\"fazavisimost fa_icon form-control width_initial\" id=\"icon_category\" onclick=\"fa_icons(\$(this).attr('id'))\"><i class=\"";
        // line 158
        echo ($context["category_icon"] ?? null);
        echo "\"></i></span>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"category_icon\" value=\"";
        // line 159
        echo ($context["category_icon"] ?? null);
        echo "\" id=\"input-icon_category\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-sm-2\" ";
        // line 161
        if (($context["category_icontype"] ?? null)) {
            echo " style=\"display: none\" ";
        }
        echo ">
\t\t\t\t\t\t\t\t<a href=\"\" id=\"thumb-image_category\" data-toggle=\"image\" class=\"img-thumbnail width_initial\"><img style=\"width:25px;\" src=\"";
        // line 162
        echo ($context["category_image_thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" /></a>
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"category_image\" value=\"";
        // line 163
        echo ($context["category_image"] ?? null);
        echo "\" id=\"category_image\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"hidden\" class=\"target\" value=\"\" />
\t\t\t\t\t<input type=\"hidden\" class=\"class\" value=\"\" />
\t\t\t\t\t<div class=\"fa_icons\">
\t\t\t\t\t<div class=\"fontawesome-icon-list\">
\t\t\t\t\t<div class=\"col-xs-2\" style=\"margin-bottom:5px;margin-left:-20px;float:initial;\"><i class=\"fa none\" aria-hidden=\"true\">Не использовать иконку</i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-500px\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-address-book\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-address-book-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-address-card\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-address-card-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-adjust\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-adn\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-align-center\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-align-justify\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-align-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-align-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-amazon\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ambulance\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-american-sign-language-interpreting\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-anchor\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-android\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-angellist\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-angle-double-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-angle-double-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-angle-double-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-angle-double-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-angle-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-angle-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-angle-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-angle-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-apple\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-archive\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-area-chart\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-circle-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-circle-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-circle-o-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-circle-o-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-circle-o-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-circle-o-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-circle-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-circle-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrow-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrows\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrows-alt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrows-h\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-arrows-v\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-asl-interpreting\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-assistive-listening-systems\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-asterisk\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-at\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-audio-description\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-automobile\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-backward\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-balance-scale\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ban\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bandcamp\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bank\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bar-chart\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bar-chart-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-barcode\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bars\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bath\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bathtub\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery-0\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery-1\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery-2\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery-3\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery-4\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery-empty\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery-full\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery-half\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery-quarter\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-battery-three-quarters\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bed\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-beer\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-behance\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-behance-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bell\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bell-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bell-slash\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bell-slash-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bicycle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-binoculars\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-birthday-cake\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bitbucket\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bitbucket-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bitcoin\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-black-tie\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-blind\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bluetooth\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bluetooth-b\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bold\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bolt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bomb\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-book\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bookmark\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bookmark-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-braille\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-briefcase\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-btc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bug\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-building\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-building-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bullhorn\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bullseye\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-bus\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-buysellads\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cab\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-calculator\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-calendar\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-calendar-check-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-calendar-minus-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-calendar-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-calendar-plus-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-calendar-times-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-camera\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-camera-retro\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-car\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-caret-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-caret-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-caret-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-caret-square-o-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-caret-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cart-arrow-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cart-plus\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cc-amex\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cc-diners-club\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cc-discover\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cc-jcb\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cc-mastercard\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cc-paypal\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cc-stripe\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cc-visa\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-certificate\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chain\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chain-broken\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-check\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-check-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-check-circle-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-check-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-check-square-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chevron-circle-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chevron-circle-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chevron-circle-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chevron-circle-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chevron-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chevron-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chevron-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chevron-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-child\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-chrome\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-circle-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-circle-o-notch\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-circle-thin\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-clipboard\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-clock-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-clone\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-close\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cloud\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cloud-download\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cloud-upload\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cny\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-code\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-code-fork\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-codepen\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-codiepie\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-coffee\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cog\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cogs\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-columns\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-comment\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-comment-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-commenting\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-commenting-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-comments\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-comments-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-compass\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-compress\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-connectdevelop\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-contao\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-copy\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-copyright\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-creative-commons\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-credit-card\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-credit-card-alt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-crop\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-crosshairs\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-css3\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cube\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cubes\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cut\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-cutlery\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-dashboard\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-dashcube\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-database\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-deaf\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-deafness\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-dedent\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-delicious\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-desktop\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-deviantart\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-diamond\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-digg\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-dollar\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-dot-circle-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-download\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-dribbble\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-drivers-license\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-drivers-license-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-dropbox\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-drupal\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-edge\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-edit\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-eercast\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-eject\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ellipsis-h\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ellipsis-v\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-empire\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-envelope\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-envelope-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-envelope-open\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-envelope-open-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-envelope-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-envira\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-eraser\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-etsy\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-eur\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-euro\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-exchange\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-exclamation\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-exclamation-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-exclamation-triangle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-expand\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-expeditedssl\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-external-link\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-external-link-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-eye\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-eye-slash\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-eyedropper\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-fa\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-facebook\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-facebook-f\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-facebook-official\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-facebook-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-fast-backward\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-fast-forward\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-fax\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-feed\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-female\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-fighter-jet\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-archive-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-audio-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-code-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-excel-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-image-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-movie-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-pdf-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-photo-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-picture-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-powerpoint-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-sound-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-text\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-text-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-video-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-word-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-file-zip-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-files-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-film\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-filter\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-fire\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-fire-extinguisher\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-firefox\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-first-order\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-flag\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-flag-checkered\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-flag-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-flash\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-flask\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-flickr\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-floppy-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-folder\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-folder-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-folder-open\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-folder-open-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-font\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-font-awesome\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-fonticons\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-fort-awesome\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-forumbee\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-forward\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-foursquare\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-free-code-camp\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-frown-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-futbol-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gamepad\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gavel\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gbp\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ge\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gear\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gears\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-genderless\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-get-pocket\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gg\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gg-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gift\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-git\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-git-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-github\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-github-alt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-github-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gitlab\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gittip\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-glass\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-glide\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-glide-g\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-globe\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-google\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-google-plus\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-google-plus-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-google-plus-official\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-google-plus-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-google-wallet\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-graduation-cap\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-gratipay\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-grav\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-group\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-h-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hacker-news\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-grab-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-lizard-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-o-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-o-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-o-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-o-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-paper-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-peace-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-pointer-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-rock-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-scissors-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-spock-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hand-stop-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-handshake-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hard-of-hearing\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hashtag\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hdd-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-header\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-headphones\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-heart\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-heart-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-heartbeat\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-history\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-home\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hospital-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hotel\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hourglass\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-1\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-2\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-3\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-end\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-half\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-hourglass-start\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-houzz\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-html5\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-i-cursor\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-id-badge\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-id-card\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-id-card-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ils\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-image\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-imdb\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-inbox\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-indent\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-industry\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-info\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-info-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-inr\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-instagram\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-institution\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-internet-explorer\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-intersex\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ioxhost\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-italic\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-joomla\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-jpy\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-jsfiddle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-key\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-keyboard-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-krw\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-language\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-laptop\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-lastfm\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-lastfm-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-leaf\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-leanpub\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-legal\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-lemon-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-level-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-level-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-life-bouy\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-life-buoy\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-life-ring\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-life-saver\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-lightbulb-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-line-chart\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-link\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-linkedin\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-linkedin-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-linode\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-linux\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-list\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-list-alt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-list-ol\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-list-ul\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-location-arrow\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-lock\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-long-arrow-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-long-arrow-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-long-arrow-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-long-arrow-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-low-vision\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-magic\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-magnet\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mail-forward\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mail-reply\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mail-reply-all\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-male\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-map\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-map-marker\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-map-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-map-pin\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-map-signs\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mars\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mars-double\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mars-stroke\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mars-stroke-h\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mars-stroke-v\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-maxcdn\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-meanpath\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-medium\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-medkit\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-meetup\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-meh-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mercury\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-microchip\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-microphone\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-microphone-slash\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-minus\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-minus-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-minus-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-minus-square-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mixcloud\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mobile\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mobile-phone\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-modx\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-money\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-moon-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mortar-board\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-motorcycle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-mouse-pointer\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-music\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-navicon\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-neuter\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-newspaper-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-object-group\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-object-ungroup\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-odnoklassniki\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-odnoklassniki-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-opencart\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-openid\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-opera\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-optin-monster\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-outdent\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pagelines\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-paint-brush\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-paper-plane\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-paper-plane-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-paperclip\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-paragraph\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-paste\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pause\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pause-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pause-circle-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-paw\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-paypal\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pencil\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pencil-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pencil-square-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-percent\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-phone\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-phone-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-photo\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-picture-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pie-chart\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pied-piper\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pied-piper-alt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pied-piper-pp\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pinterest\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pinterest-p\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-pinterest-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-plane\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-play\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-play-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-play-circle-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-plug\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-plus\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-plus-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-plus-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-plus-square-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-podcast\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-power-off\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-print\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-product-hunt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-puzzle-piece\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-qq\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-qrcode\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-question\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-question-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-question-circle-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-quora\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-quote-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-quote-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ra\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-random\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ravelry\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-rebel\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-recycle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-reddit\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-reddit-alien\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-reddit-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-refresh\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-registered\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-remove\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-renren\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-reorder\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-repeat\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-reply\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-reply-all\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-resistance\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-retweet\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-rmb\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-road\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-rocket\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-rotate-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-rotate-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-rouble\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-rss\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-rss-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-rub\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ruble\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-rupee\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-s15\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-safari\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-save\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-scissors\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-scribd\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-search\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-search-minus\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-search-plus\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sellsy\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-send\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-send-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-server\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-share\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-share-alt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-share-alt-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-share-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-share-square-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-shekel\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sheqel\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-shield\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ship\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-shirtsinbulk\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-shopping-bag\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-shopping-basket\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-shopping-cart\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-shower\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sign-in\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sign-language\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sign-out\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-signal\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-signing\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-simplybuilt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sitemap\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-skyatlas\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-skype\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-slack\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sliders\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-slideshare\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-smile-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-snapchat\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-snapchat-ghost\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-snapchat-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-snowflake-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-soccer-ball-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort-alpha-asc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort-alpha-desc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort-amount-asc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort-amount-desc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort-asc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort-desc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort-numeric-asc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort-numeric-desc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sort-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-soundcloud\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-space-shuttle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-spinner\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-spoon\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-spotify\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-square-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-stack-exchange\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-stack-overflow\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-star\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-star-half\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-star-half-empty\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-star-half-full\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-star-half-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-star-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-steam\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-steam-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-step-backward\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-step-forward\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-stethoscope\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sticky-note\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sticky-note-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-stop\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-stop-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-stop-circle-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-street-view\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-strikethrough\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-stumbleupon\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-stumbleupon-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-subscript\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-subway\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-suitcase\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-sun-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-superpowers\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-superscript\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-support\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-table\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tablet\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tachometer\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tag\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tags\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tasks\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-taxi\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-telegram\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-television\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tencent-weibo\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-terminal\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-text-height\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-text-width\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-th\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-th-large\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-th-list\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-themeisle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer-0\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer-1\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer-2\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer-3\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer-4\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer-empty\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer-full\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer-half\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer-quarter\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thermometer-three-quarters\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thumb-tack\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-o-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-o-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-thumbs-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-ticket\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-times\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-times-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-times-circle-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-times-rectangle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-times-rectangle-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tint\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-toggle-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-toggle-left\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-toggle-off\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-toggle-on\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-toggle-right\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-toggle-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-trademark\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-train\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-transgender\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-transgender-alt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-trash\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-trash-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tree\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-trello\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tripadvisor\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-trophy\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-truck\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-try\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tty\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tumblr\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tumblr-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-turkish-lira\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-tv\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-twitch\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-twitter\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-twitter-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-umbrella\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-underline\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-undo\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-universal-access\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-university\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-unlink\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-unlock\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-unlock-alt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-unsorted\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-upload\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-usb\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-usd\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-user\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-user-circle\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-user-circle-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-user-md\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-user-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-user-plus\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-user-secret\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-user-times\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-users\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-vcard\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-vcard-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-venus\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-venus-double\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-venus-mars\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-viacoin\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-viadeo\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-viadeo-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-video-camera\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-vimeo\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-vimeo-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-vine\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-vk\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-volume-control-phone\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-volume-down\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-volume-off\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-volume-up\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-warning\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-wechat\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-weibo\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-weixin\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-whatsapp\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-wheelchair\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-wheelchair-alt\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-wifi\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-wikipedia-w\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-window-close\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-window-close-o\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-window-maximize\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-window-minimize\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-window-restore\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-windows\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-won\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-wordpress\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-wpbeginner\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-wpexplorer\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-wpforms\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-wrench\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-xing\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-xing-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-y-combinator\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-y-combinator-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-yahoo\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-yc\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-yc-square\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-yelp\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-yen\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-yoast\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-youtube\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-youtube-play\"></i></div>
\t\t\t\t\t<div class=\"col-xs-1\"><i class=\"fa fa-youtube-square\"></i></div>
\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<script src=\"view/javascript/revolution/popup_icons.js\"></script>
\t\t\t\t\t<script>
\t\t\t\t\t\tfunction fa_icons(id) {
\t\t\t\t\t\t\t\$('.fa_icons').popup('show');
\t\t\t\t\t\t\t\$('.target').val(id);
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\$('.fa_icons .fa').on('click', function() {
\t\t\t\t\t\t\t\tvar this_class = \$(this).attr('class');
\t\t\t\t\t\t\t\t\$('.class').val(this_class);
\t\t\t\t\t\t\t\tsave_icons();
\t\t\t\t\t\t\t\t\$('.fa_icons').popup('hide');
\t\t\t\t\t\t\t});
\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\tfunction save_icons() {
\t\t\t\t\t\t\tvar target = \$('.target').val();
\t\t\t\t\t\t\tvar this_class = \$('.class').val();
\t\t\t\t\t\t\t\$('#'+target).html('<i class=\"'+this_class+'\"></i>');
\t\t\t\t\t\t\t\$('#'+target).next().val(this_class);
\t\t\t\t\t\t}
\t\t\t\t\t</script>
\t\t\t\t\t</div>
\t\t\t\t</div>
            
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-top\"><span data-toggle=\"tooltip\" title=\"";
        // line 984
        echo ($context["help_top"] ?? null);
        echo "\">";
        echo ($context["entry_top"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <div class=\"checkbox\">
                    <label>
                      ";
        // line 988
        if (($context["top"] ?? null)) {
            // line 989
            echo "                      <input type=\"checkbox\" name=\"top\" value=\"1\" checked=\"checked\" id=\"input-top\" />
                      ";
        } else {
            // line 991
            echo "                      <input type=\"checkbox\" name=\"top\" value=\"1\" id=\"input-top\" />
                      ";
        }
        // line 993
        echo "                      &nbsp; </label>
                  </div>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-column\"><span data-toggle=\"tooltip\" title=\"";
        // line 998
        echo ($context["help_column"] ?? null);
        echo "\">";
        echo ($context["entry_column"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"column\" value=\"";
        // line 1000
        echo ($context["column"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_column"] ?? null);
        echo "\" id=\"input-column\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sort-order\">";
        // line 1004
        echo ($context["entry_sort_order"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"sort_order\" value=\"";
        // line 1006
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 1010
        echo ($context["entry_status"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"status\" id=\"input-status\" class=\"form-control\">
                    ";
        // line 1013
        if (($context["status"] ?? null)) {
            // line 1014
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 1015
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 1017
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 1018
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 1020
        echo "                  </select>
                </div>
              </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-seo\">
              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
        // line 1025
        echo ($context["text_keyword"] ?? null);
        echo "</div>
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1030
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1031
        echo ($context["entry_keyword"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                  ";
        // line 1035
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1036
            echo "                  <tr>
                    <td class=\"text-left\">";
            // line 1037
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1037);
            echo "</td>
                    <td class=\"text-left\">";
            // line 1038
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 1039
                echo "                      <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1039);
                echo "/";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "code", [], "any", false, false, false, 1039);
                echo ".png\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "name", [], "any", false, false, false, 1039);
                echo "\" /></span>
                        <input type=\"text\" name=\"category_seo_url[";
                // line 1040
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1040);
                echo "][";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1040);
                echo "]\" value=\"";
                if ((($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = ($context["category_seo_url"] ?? null)) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1040)] ?? null) : null)) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1040)] ?? null) : null)) {
                    echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = ($context["category_seo_url"] ?? null)) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1040)] ?? null) : null)) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1040)] ?? null) : null);
                }
                echo "\" placeholder=\"";
                echo ($context["entry_keyword"] ?? null);
                echo "\" class=\"form-control\" id=\"input-seo-url-";
                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1040);
                echo "-";
                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1040);
                echo "\" data-seo-url-was=\"";
                if ((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = ($context["category_seo_url"] ?? null)) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1040)] ?? null) : null)) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1040)] ?? null) : null)) {
                    echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = ($context["category_seo_url"] ?? null)) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1040)] ?? null) : null)) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1040)] ?? null) : null);
                }
                echo "\"/>";
                if (($context["category_id"] ?? null)) {
                    echo "<span class=\"input-group-btn\"><button id=\"generateUrlOnEdit-";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1040);
                    echo "-";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1040);
                    echo "\" class=\"generateUrlOnEdit btn btn-success\" data-store-id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1040);
                    echo "\" data-language-id=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1040);
                    echo "\"><i class=\"fa fa-refresh\"></i> ";
                    echo ($context["sug_button_generate"] ?? null);
                    echo "</button></span>";
                }
                // line 1041
                echo "                      </div>
                      ";
                // line 1042
                if ((($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = ($context["error_keyword"] ?? null)) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1042)] ?? null) : null)) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1042)] ?? null) : null)) {
                    // line 1043
                    echo "                      <div class=\"text-danger\">";
                    echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = ($context["error_keyword"] ?? null)) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1043)] ?? null) : null)) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc[twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1043)] ?? null) : null);
                    echo "</div>
                      ";
                }
                // line 1045
                echo "                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
                  </tr>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1048
        echo "                  </tbody>
                  
                </table>
              </div>
\t\t\t<div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-noindex\">";
        // line 1053
        echo ($context["entry_noindex"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"noindex\" id=\"input-noindex\" class=\"form-control\">
                    ";
        // line 1056
        if (($context["noindex"] ?? null)) {
            // line 1057
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 1058
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 1060
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 1061
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 1063
        echo "                  </select>
                </div>
              </div>
\t\t\t</div>
\t\t\t<div class=\"tab-pane\" id=\"tab-related\">
\t\t\t   <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-product-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 1069
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related_wb"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"product_related_input\" value=\"\" placeholder=\"";
        // line 1071
        echo ($context["entry_related_wb"] ?? null);
        echo "\" id=\"input-product-related\" class=\"form-control\" />
                  <div id=\"product-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1072
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["product_related"]);
        foreach ($context['_seq'] as $context["_key"] => $context["product_related"]) {
            // line 1073
            echo "                    <div id=\"product-related";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 1073);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "name", [], "any", false, false, false, 1073);
            echo "
                      <input type=\"hidden\" name=\"product_related[]\" value=\"";
            // line 1074
            echo twig_get_attribute($this->env, $this->source, $context["product_related"], "product_id", [], "any", false, false, false, 1074);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1076
        echo "</div>
                </div>
               </div>
\t\t\t   <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-article-related\"><span data-toggle=\"tooltip\" title=\"";
        // line 1080
        echo ($context["help_related"] ?? null);
        echo "\">";
        echo ($context["entry_related_article"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <input type=\"text\" name=\"article_related_input\" value=\"\" placeholder=\"";
        // line 1082
        echo ($context["entry_related_article"] ?? null);
        echo "\" id=\"input-article-related\" class=\"form-control\" />
                  <div id=\"article-related\" class=\"well well-sm\" style=\"height: 150px; overflow: auto;\"> ";
        // line 1083
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["article_related"]);
        foreach ($context['_seq'] as $context["_key"] => $context["article_related"]) {
            // line 1084
            echo "                    <div id=\"article-related";
            echo twig_get_attribute($this->env, $this->source, $context["article_related"], "article_id", [], "any", false, false, false, 1084);
            echo "\"><i class=\"fa fa-minus-circle\"></i> ";
            echo twig_get_attribute($this->env, $this->source, $context["article_related"], "name", [], "any", false, false, false, 1084);
            echo "
                      <input type=\"hidden\" name=\"article_related[]\" value=\"";
            // line 1085
            echo twig_get_attribute($this->env, $this->source, $context["article_related"], "article_id", [], "any", false, false, false, 1085);
            echo "\" />
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article_related'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1087
        echo "</div>
                </div>
               </div>
            </div>
            <div class=\"tab-pane\" id=\"tab-design\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td class=\"text-left\">";
        // line 1096
        echo ($context["entry_store"] ?? null);
        echo "</td>
                      <td class=\"text-left\">";
        // line 1097
        echo ($context["entry_layout"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>

                    ";
        // line 1102
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
            // line 1103
            echo "                    <tr>
                      <td class=\"text-left\">";
            // line 1104
            echo twig_get_attribute($this->env, $this->source, $context["store"], "name", [], "any", false, false, false, 1104);
            echo "</td>
                      <td class=\"text-left\"><select name=\"category_layout[";
            // line 1105
            echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1105);
            echo "]\" class=\"form-control\">
                          <option value=\"\"></option>
                          ";
            // line 1107
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["layouts"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["layout"]) {
                // line 1108
                echo "                          ";
                if (((($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = ($context["category_layout"] ?? null)) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1108)] ?? null) : null) && ((($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = ($context["category_layout"] ?? null)) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78[twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1108)] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1108)))) {
                    // line 1109
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1109);
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1109);
                    echo "</option>
                          ";
                } else {
                    // line 1111
                    echo "                          <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "layout_id", [], "any", false, false, false, 1111);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["layout"], "name", [], "any", false, false, false, 1111);
                    echo "</option>
                          ";
                }
                // line 1113
                echo "                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['layout'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1114
            echo "                        </select></td>
                    </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1117
        echo "                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <link href=\"view/javascript/codemirror/lib/codemirror.css\" rel=\"stylesheet\" />
  <link href=\"view/javascript/codemirror/theme/monokai.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/codemirror.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/xml.js\"></script> 
  <script type=\"text/javascript\" src=\"view/javascript/codemirror/lib/formatting.js\"></script> 
  
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote.js\"></script>
  <link href=\"view/javascript/summernote/summernote.css\" rel=\"stylesheet\" />
  <script type=\"text/javascript\" src=\"view/javascript/summernote/summernote-image-attributes.js\"></script>
  <script type=\"text/javascript\" src=\"view/javascript/summernote/opencart.js\"></script>
  
  <script type=\"text/javascript\"><!--
\$('input[name=\\'path\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/category/autocomplete&user_token=";
        // line 1141
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tjson.unshift({
\t\t\t\t\tcategory_id: 0,
\t\t\t\t\tname: '";
        // line 1146
        echo ($context["text_none"] ?? null);
        echo "'
\t\t\t\t});

\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['category_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'path\\']').val(item['label']);
\t\t\$('input[name=\\'parent_id\\']').val(item['value']);
\t}
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('input[name=\\'filter\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/filter/autocomplete&user_token=";
        // line 1168
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['filter_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter\\']').val('');

\t\t\$('#category-filter' + item['value']).remove();

\t\t\$('#category-filter').append('<div id=\"category-filter' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"category_filter[]\" value=\"' + item['value'] + '\" /></div>');
\t}
});

\$('#category-filter').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
  <script type=\"text/javascript\"><!--
\$('#language a:first').tab('show');
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'product_related_input\\']').autocomplete({
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 1200
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
\tselect: function(item) {
\t\t\$('input[name=\\'product\\']').val('');
\t\t
\t\t\$('#product-related' + item['value']).remove();
\t\t
\t\t\$('#product-related').append('<div id=\"product-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"product_related[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});
\t
\$('#product-related').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'article_related_input\\']').autocomplete({
\tsource: function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=blog/article/autocomplete&user_token=";
        // line 1229
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' +  encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['article_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\tselect: function(item) {
\t\t\$('input[name=\\'product\\']').val('');
\t\t
\t\t\$('#article-related' + item['value']).remove();
\t\t
\t\t\$('#article-related').append('<div id=\"article-related' + item['value'] + '\"><i class=\"fa fa-minus-circle\"></i> ' + item['label'] + '<input type=\"hidden\" name=\"article_related[]\" value=\"' + item['value'] + '\" /></div>');\t
\t}
});
\t
\$('#article-related').delegate('.fa-minus-circle', 'click', function() {
\t\$(this).parent().remove();
});
//--></script>
</div>

<!-- SEO URL Generator . Begin
============================================================================ -->
";
        // line 1258
        if (($context["module_seo_url_generator_status"] ?? null)) {
            // line 1259
            echo "<script type=\"text/javascript\">
  \$('#tab-seo .text-left .input-group').css('margin-bottom', '10px');

  \$.each(\$('#tab-seo .text-left'), function () {      
    \$(this).children('.input-group:last').css('margin-bottom', 'initial');
  });

  ";
            // line 1266
            if ( !($context["category_id"] ?? null)) {
                // line 1267
                echo "    
    ";
                // line 1268
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1269
                    echo "    \$('#input-name' + ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1269);
                    echo ").change(function(){ generateUrlOnAdd(); });
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1271
                echo "
    function generateUrlOnAdd() {
      let a_lang_data = {
        name: {}
      };
      
      ";
                // line 1277
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                    // line 1278
                    echo "      a_lang_data['name'][";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1278);
                    echo "] = \$('#input-name' + ";
                    echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1278);
                    echo ").val();
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1280
                echo "            
      data = {
        a_lang_data     : a_lang_data,
        primary_key     : 'category_id',
        essence         : 'category',
        essence_id      : ''
      };

      // is different from edit
      \$.ajax({
        url: 'index.php?route=extension/module/seo_url_generator/generateSeoUrlByAjax4All&user_token=";
                // line 1290
                echo ($context["user_token"] ?? null);
                echo "',
        dataType: 'json',
        data: data,
        method : 'POST',
        beforeSend: function() {},
        success: function(response, textStatus, jqXHR) {
          // success ajax query
          if(response.result != 'error') {
            setTimeout(function() {      
              \$.each(response.result, function (store_id, store) {
                \$.each(store, function (language_id, value) {
                  if ('' !== value) {
                    \$('input[name=\"category_seo_url[' + store_id +'][' + language_id + ']\"]').val(value);
                  }
                });
              });
            }, 100);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Error ajax query
          console.log('AJAX query Error: ' + textStatus);
        },
        complete: function() {},
      });
    }

  ";
            } else {
                // line 1317
                echo "   

    var storeId = false;      
    var languageId = false;
    
    // enque redirects .generateUrlOnEdit firstly
    var url_redirects_rows = {};
    
    ";
                // line 1325
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 1326
                    echo "    url_redirects_rows[";
                    echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1326);
                    echo "] = {};
    
    ";
                    // line 1328
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 1329
                        echo "    url_redirects_rows[";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1329);
                        echo "][";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1329);
                        echo "] = 0;
    
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1332
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1333
                echo "    
    ";
                // line 1334
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["stores"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["store"]) {
                    // line 1335
                    echo "    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                        // line 1336
                        echo "   
      var html = '';
      html += '<div class=\"form-group\">';
      html += '<label class=\"col-sm-2 control-label\">";
                        // line 1339
                        echo ($context["sug_text_redirects"] ?? null);
                        echo "</label>';
      html += '<!-- category-redirects . begin -->';
      html += '<div class=\"col-sm-10\">';
      html += '<div class=\"alert alert-info alert-sm\">";
                        // line 1342
                        echo ($context["sug_help_redirects"] ?? null);
                        echo "</div>';
      html += '<div id=\"seo_url_generator_redirects-";
                        // line 1343
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1343);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1343);
                        echo "\">';
      
      ";
                        // line 1345
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = (($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = ($context["redirects"] ?? null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828[(($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = $context["store"]) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd["store_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de[(($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["language"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["language_id"] ?? null) : null)] ?? null) : null));
                        foreach ($context['_seq'] as $context["key"] => $context["redirect"]) {
                            // line 1346
                            echo "      ";
                            if ((($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = ($context["redirects"] ?? null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[(($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = $context["store"]) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0["store_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b[(($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["language"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855[$context["key"]] ?? null) : null)) {
                                // line 1347
                                echo "      html += '<div id=\"redirect-row-";
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1347);
                                echo "-";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1347);
                                echo "-' + url_redirects_rows[";
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1347);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1347);
                                echo "] + '\" class=\"row redirect-row\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[";
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1347);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1347);
                                echo "][";
                                echo $context["key"];
                                echo "]\" value=\"";
                                echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = ($context["redirects"] ?? null)) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758[(($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["store"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["store_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88[(($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["language"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a[$context["key"]] ?? null) : null);
                                echo "\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px); ";
                                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_seo_url_generator_redirects"] ?? null), (($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae = $context["store"]) && is_array($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae) || $__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae instanceof ArrayAccess ? ($__internal_064553f1273f2ea50405f85092d06733f3f2fe5d0fc42fda135e1fdc91ff26ae["store_id"] ?? null) : null), [], "array", false, true, false, 1347), (($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 = $context["language"]) && is_array($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54) || $__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54 instanceof ArrayAccess ? ($__internal_7bef02f75e2984f8c7fcd4fd7871e286c87c0fdcb248271a136b01ac6dd5dd54["language_id"] ?? null) : null), [], "array", false, true, false, 1347), $context["key"], [], "array", true, true, false, 1347)) {
                                    echo "border-color: red;";
                                }
                                echo "\"/><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"";
                                echo ($context["sug_button_delete_redirect"] ?? null);
                                echo "\"></i></div></div>';
      url_redirects_rows[";
                                // line 1348
                                echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1348);
                                echo "][";
                                echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1348);
                                echo "]++;
      ";
                            }
                            // line 1350
                            echo "      ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['key'], $context['redirect'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "\t
      html += '</div>';
      html += '<!-- /category-redirects . end -->';
      html += '<button id=\"addNewRedirect-";
                        // line 1353
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1353);
                        echo "-";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1353);
                        echo "\" class=\"addNewRedirect btn btn-warning btn-sm\" data-store-id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1353);
                        echo "\" data-language-id=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1353);
                        echo "\"><i class=\"fa fa-plus\"></i> ";
                        echo ($context["sug_button_add_redirect"] ?? null);
                        echo "</button>';
      html += '</div>';
      html += '</div>';
      
      <!-- Front works properly mark -->
      html += '<input type=\"hidden\" name=\"seo_url_generator_front_works\" />';
      
      //console.log('#generateUrlOnEdit-' + ";
                        // line 1360
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1360);
                        echo " + '-' + ";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1360);
                        echo ");
      //console.debug(html);
      
      \$('#generateUrlOnEdit-' + ";
                        // line 1363
                        echo twig_get_attribute($this->env, $this->source, $context["store"], "store_id", [], "any", false, false, false, 1363);
                        echo " + '-' + ";
                        echo twig_get_attribute($this->env, $this->source, $context["language"], "language_id", [], "any", false, false, false, 1363);
                        echo ").parent().parent().after(html);
            
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 1366
                    echo "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['store'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 1367
                echo "    
    \$('.addNewRedirect').click(function(e) {
      e.preventDefault();
      
      var store_id = \$(this).data('store-id');
      var language_id =  \$(this).data('language-id');
      
      console.log('\$(this).data(\"store-id\") : ' + \$(this).data('store-id'));
      console.log('\$(this).data(\"language-id\") : ' + \$(this).data('language-id'));
      console.log('#seo_url_generator_redirects-\" + store_id + \"-\" + language_id : #seo_url_generator_redirects-' + store_id + '-' + language_id);

      \$('#seo_url_generator_redirects-' + store_id + '-' + language_id).append('<div id=\"redirect-row-' + '-' + store_id + '-' + language_id + '-' + url_redirects_rows[store_id][language_id] + '\" class=\"row redirect-row recent\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[' + store_id + '][' + language_id + '][]\" value=\"\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px);\" /><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"";
                // line 1378
                echo ($context["sug_button_delete_redirect"] ?? null);
                echo "\"></i></div></div>');

      url_redirects_rows[store_id][language_id]++;
    });

    \$('body').on('click', '.deleteRedirect', function(e) {
      e.preventDefault();
      \$('#sug-btn-confirm').attr('data-target', '#' + \$(this).parent().parent('.redirect-row').attr('id'));\t\t
      \$('#sug-confirm').modal('toggle');    
    });

    \$('body').on('click', '#sug-btn-confirm', function(e) {
      e.preventDefault();\t\t
      \$(\$(this).attr('data-target')).remove();\t\t
      \$('#sug-confirm').modal('toggle');
    });
    
    
    // SEO URL Generation by button click
  
    thisButton = false;
    
    \$('.generateUrlOnEdit').click(function(e) {
      e.preventDefault();
      
      storeId = \$(this).data('store-id');      
      languageId = \$(this).data('language-id');
      thisButton = \$(this);
            
      data = {
        store_id        : storeId,
        language_id     : languageId,
        name            : \$('#input-name' + languageId).val(),
        primary_key     : 'category_id',
        essence         : 'category',
        essence_id      : ";
                // line 1413
                echo ($context["category_id"] ?? null);
                echo "
      };     

      getSeoUrl(data);
    });
    
    // is different from add
    function getSeoUrl(data) {
      \$.ajax({
        url: 'index.php?route=extension/module/seo_url_generator/generateSeoUrlByAjax4One&user_token=";
                // line 1422
                echo ($context["user_token"] ?? null);
                echo "',
        dataType: 'json',
        data: data,
        method : 'POST',
        beforeSend: function() {
          thisButton.css('opacity', '0.5');
        },
        success: function(response, textStatus, jqXHR) {
          // success ajax query
          if('' != response.result && 'error' != response.result) {            
            console.log('\$(\"#input-seo-url-\" + storeId + \"-\" + languageId).val() : ' + \$('#input-seo-url-' + storeId + '-' + languageId).val());
            console.log('response.result : ' + response.result);
            
            if ('' != \$('#input-seo-url-' + storeId + '-' + languageId).val().trim() && \$('#input-seo-url-' + storeId + '-' + languageId).val() != response.result) {    
              \$('#seo_url_generator_redirects-' + storeId + '-' + languageId).append('<div id=\"redirect-row-' + '-' + storeId + '-' + languageId + '-' + url_redirects_rows[storeId][languageId] + '\" class=\"row redirect-row recent\" style=\"margin: 10px 0;\"><input type=\"text\" name=\"seo_url_generator_redirects[' + storeId + '][' + languageId + '][]\" value=\"' + \$('#input-seo-url-' + storeId + '-' + languageId).data('seo-url-was') + '\" class=\"form-control input-sm col-xs-10\" style=\"width: 100%; width: calc(100% - 120px);\" /><div class=\"col-xs-1\"><i class=\"pull-left fa fa-close text-danger deleteRedirect\" style=\"cursor: pointer;\" data-toggle=\"tooltip\" title=\"";
                // line 1436
                echo ($context["sug_button_delete_redirect"] ?? null);
                echo "\"></i></div></div>');

              url_redirects_rows[storeId][languageId]++;
            }
            
            setTimeout(function() {
              \$('#input-seo-url-' + storeId + '-' + languageId).val(response.result);
            }, 100);
          }
        },
        error: function(jqXHR, textStatus, errorThrown) {
          // Error ajax query
          console.log('AJAX query Error: ' + textStatus);
        },
        complete: function() {
          thisButton.css('opacity', '1');
        },
      });
    }

  ";
            }
            // line 1456
            echo "  

  // Prevent incorrect SEO URL!
\tvar inputBorderColorInitial = false;
\t
\t\$('body').on('change', '.redirect-row input', function(e) {
\t\tif (!inputBorderColorInitial) {
\t\t\tinputBorderColorInitial = \$(this).css('border-color');
\t\t}
\t\t
\t\t// reset previous errors
\t\t\$(this).css('border-color', inputBorderColorInitial);
\t\t
\t\t\$('#sug-error-body').html('');
\t\t
\t\tlet hasError = false;
\t\t
\t\t// Check inputed data\t\t
\t\tif (\$(this).val().trim() == '') {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>";
            // line 1476
            echo ($context["sug_redirects_error_empty"] ?? null);
            echo "</b></p>');
\t\t}

\t\tif (\$(this).val().includes('/')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>";
            // line 1481
            echo ($context["sug_redirects_error_slash"] ?? null);
            echo "</b></p>');
\t\t}
\t\t
\t\tif (\$(this).val().includes('http')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-danger\"><b>";
            // line 1486
            echo ($context["sug_redirects_error_protocol"] ?? null);
            echo "</b></p>');
\t\t}
\t\t
\t\tif (\$(this).val().includes('.html')) {
\t\t\thasError = true;
\t\t\t\$('#sug-error-body').append('<p class=\"text-warning\"><b>";
            // line 1491
            echo ($context["sug_redirects_error_html"] ?? null);
            echo "</b></p>');
\t\t}
\t\t
\t\tif (hasError) {
\t\t\t\$(this).css('border-color', 'red');
\t\t\t
\t\t\t\$('#sug-error-body').append('<p class=\"alert alert-info\"><i class=\"fa fa-info-circle\" style=\"font-size: 1.5em;\">&nbsp;</i>  ";
            // line 1497
            echo ($context["sug_redirects_error_common"] ?? null);
            echo "</p>');
\t\t\t
\t\t\t\$('#sug-error').modal('toggle');
\t\t}
\t\t
    console.log('hasError : ' + hasError);
    console.log(\$(this).val());
\t\t
  });
\t
</script>

<!-- Confirm Modal -->
<div class=\"modal fade\" id=\"sug-confirm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sug-confirm\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title text-warning\" id=\"sug-confirm-title\"><i class=\"fa fa-exclamation-triangle\">&nbsp;</i> <b>";
            // line 1515
            echo ($context["sug_confirm_title"] ?? null);
            echo "</b></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\">
\t\t\t\t";
            // line 1518
            echo ($context["sug_confirm_body"] ?? null);
            echo "
\t\t\t</div>
\t\t\t<div class=\"modal-footer\">
\t\t\t\t<button type=\"button\" class=\"btn btn-danger sug-btn-confirm\" id=\"sug-btn-confirm\" data-target=\"\"><i class=\"fa fa-trash\">&nbsp;</i> ";
            // line 1521
            echo ($context["sug_confirm_btn_yes"] ?? null);
            echo "</button>
\t\t\t\t<button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">";
            // line 1522
            echo ($context["sug_confirm_btn_no"] ?? null);
            echo "</button>
\t\t\t</div>
\t\t</div>
\t</div>
</div>

<!-- Error Modal -->
<div class=\"modal fade\" id=\"sug-error\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"sug-error\" aria-hidden=\"true\">
\t<div class=\"modal-dialog\">
\t\t<div class=\"modal-content\">
\t\t\t<div class=\"modal-header\">
\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
\t\t\t\t<h4 class=\"modal-title text-danger\" id=\"sug-error-title\"><i class=\"fa fa-exclamation-triangle\">&nbsp;</i> <b>";
            // line 1534
            echo ($context["sug_redirects_error_title"] ?? null);
            echo "</b></h4>
\t\t\t</div>
\t\t\t<div class=\"modal-body\" id=\"sug-error-body\"></div>
\t\t</div>
\t</div>
</div>
";
        }
        // line 1541
        echo "<!-- /SEO URL Generator . End
============================================================================ -->

";
        // line 1544
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "catalog/category_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2353 => 1544,  2348 => 1541,  2338 => 1534,  2323 => 1522,  2319 => 1521,  2313 => 1518,  2307 => 1515,  2286 => 1497,  2277 => 1491,  2269 => 1486,  2261 => 1481,  2253 => 1476,  2231 => 1456,  2207 => 1436,  2190 => 1422,  2178 => 1413,  2140 => 1378,  2127 => 1367,  2121 => 1366,  2110 => 1363,  2102 => 1360,  2084 => 1353,  2074 => 1350,  2067 => 1348,  2042 => 1347,  2039 => 1346,  2035 => 1345,  2028 => 1343,  2024 => 1342,  2018 => 1339,  2013 => 1336,  2008 => 1335,  2004 => 1334,  2001 => 1333,  1995 => 1332,  1983 => 1329,  1979 => 1328,  1973 => 1326,  1969 => 1325,  1959 => 1317,  1928 => 1290,  1916 => 1280,  1905 => 1278,  1901 => 1277,  1893 => 1271,  1884 => 1269,  1880 => 1268,  1877 => 1267,  1875 => 1266,  1866 => 1259,  1864 => 1258,  1832 => 1229,  1800 => 1200,  1765 => 1168,  1740 => 1146,  1732 => 1141,  1706 => 1117,  1698 => 1114,  1692 => 1113,  1684 => 1111,  1676 => 1109,  1673 => 1108,  1669 => 1107,  1664 => 1105,  1660 => 1104,  1657 => 1103,  1653 => 1102,  1645 => 1097,  1641 => 1096,  1630 => 1087,  1621 => 1085,  1614 => 1084,  1610 => 1083,  1606 => 1082,  1599 => 1080,  1593 => 1076,  1584 => 1074,  1577 => 1073,  1573 => 1072,  1569 => 1071,  1562 => 1069,  1554 => 1063,  1549 => 1061,  1544 => 1060,  1539 => 1058,  1534 => 1057,  1532 => 1056,  1526 => 1053,  1519 => 1048,  1506 => 1045,  1500 => 1043,  1498 => 1042,  1495 => 1041,  1463 => 1040,  1454 => 1039,  1450 => 1038,  1446 => 1037,  1443 => 1036,  1439 => 1035,  1432 => 1031,  1428 => 1030,  1420 => 1025,  1413 => 1020,  1408 => 1018,  1403 => 1017,  1398 => 1015,  1393 => 1014,  1391 => 1013,  1385 => 1010,  1376 => 1006,  1371 => 1004,  1362 => 1000,  1355 => 998,  1348 => 993,  1344 => 991,  1340 => 989,  1338 => 988,  1329 => 984,  505 => 163,  501 => 162,  495 => 161,  490 => 159,  486 => 158,  480 => 157,  471 => 154,  461 => 151,  449 => 142,  443 => 141,  434 => 135,  428 => 134,  424 => 133,  418 => 129,  410 => 126,  405 => 124,  400 => 123,  395 => 121,  390 => 120,  388 => 119,  384 => 117,  380 => 116,  374 => 113,  368 => 109,  359 => 106,  352 => 105,  348 => 104,  343 => 102,  336 => 100,  331 => 97,  325 => 95,  323 => 94,  319 => 93,  313 => 92,  308 => 90,  302 => 86,  283 => 81,  276 => 79,  263 => 75,  256 => 73,  243 => 69,  236 => 67,  223 => 63,  216 => 61,  203 => 57,  196 => 55,  191 => 52,  185 => 50,  183 => 49,  173 => 48,  166 => 46,  160 => 44,  156 => 43,  152 => 41,  135 => 39,  131 => 38,  123 => 33,  119 => 32,  115 => 31,  111 => 30,  107 => 29,  102 => 27,  96 => 24,  92 => 22,  84 => 18,  82 => 17,  76 => 13,  65 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "catalog/category_form.twig", "");
    }
}
