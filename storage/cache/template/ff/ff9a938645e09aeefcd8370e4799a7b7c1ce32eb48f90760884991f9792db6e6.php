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

/* revolution/revcheckout_custom_field_form.twig */
class __TwigTemplate_5b9689c725c2cb41d3998e2868ae8c95f118af51641e785784f46d79be35a894 extends \Twig\Template
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
        <button type=\"submit\" form=\"form-custom-field\" data-toggle=\"tooltip\" title=\"";
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
    <div class=\"panel panel-default\">
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
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-custom-field\" class=\"form-horizontal\">
          <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\">";
        // line 29
        echo ($context["entry_name"] ?? null);
        echo ":</label>
            <div class=\"col-sm-10\">
              ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
              <div class=\"input-group\"><span class=\"input-group-addon\"><img src=\"language/";
            // line 32
            echo (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = $context["language"]) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["code"] ?? null) : null);
            echo "/";
            echo (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["language"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["language"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["name"] ?? null) : null);
            echo "\" /></span>
                <input type=\"text\" name=\"custom_field_description[";
            // line 33
            echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["language"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["language_id"] ?? null) : null);
            echo "][name]\" value=\"";
            echo ((twig_get_attribute($this->env, $this->source, ($context["custom_field_description"] ?? null), (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["language"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["language_id"] ?? null) : null), [], "array", true, true, false, 33)) ? ((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = (($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = ($context["custom_field_description"] ?? null)) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136[(($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["language"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["name"] ?? null) : null)) : (""));
            echo "\" placeholder=\"";
            echo ($context["entry_name"] ?? null);
            echo "\" class=\"form-control\" />
              </div>
              ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, ($context["error_name"] ?? null), (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["language"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["language_id"] ?? null) : null), [], "array", true, true, false, 35)) {
                echo " 
              <div class=\"text-danger\">";
                // line 36
                echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = ($context["error_name"] ?? null)) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae[(($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["language"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["language_id"] ?? null) : null)] ?? null) : null);
                echo "</div>
              ";
            }
            // line 37
            echo " 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo " 
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-location\">";
        // line 42
        echo ($context["entry_location"] ?? null);
        echo ":</label>
            <div class=\"col-sm-10\">
              <select name=\"location\" id=\"input-location\" class=\"form-control\">
                ";
        // line 45
        if ((($context["location"] ?? null) == "account")) {
            echo " 
                <option value=\"account\" selected=\"selected\">";
            // line 46
            echo ($context["text_account"] ?? null);
            echo "</option>
                ";
        } else {
            // line 47
            echo " 
                <option value=\"account\">";
            // line 48
            echo ($context["text_account"] ?? null);
            echo "</option>
                ";
        }
        // line 49
        echo " 
                ";
        // line 50
        if ((($context["location"] ?? null) == "address")) {
            echo " 
                <option value=\"address\" selected=\"selected\">";
            // line 51
            echo ($context["text_address"] ?? null);
            echo "</option>
                ";
        } else {
            // line 52
            echo " 
                <option value=\"address\">";
            // line 53
            echo ($context["text_address"] ?? null);
            echo "</option>
                ";
        }
        // line 54
        echo " 
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-type\">";
        // line 59
        echo ($context["entry_type"] ?? null);
        echo ":</label>
            <div class=\"col-sm-10\">
              <select name=\"type\" id=\"input-type\" class=\"form-control\">
                <optgroup label=\"";
        // line 62
        echo ($context["text_choose"] ?? null);
        echo "\">
                ";
        // line 63
        if ((($context["type"] ?? null) == "select")) {
            echo " 
                <option value=\"select\" selected=\"selected\">";
            // line 64
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
        } else {
            // line 65
            echo " 
                <option value=\"select\">";
            // line 66
            echo ($context["text_select"] ?? null);
            echo "</option>
                ";
        }
        // line 67
        echo " 
                ";
        // line 68
        if ((($context["type"] ?? null) == "radio")) {
            echo " 
                <option value=\"radio\" selected=\"selected\">";
            // line 69
            echo ($context["text_radio"] ?? null);
            echo "</option>
                ";
        } else {
            // line 70
            echo " 
                <option value=\"radio\">";
            // line 71
            echo ($context["text_radio"] ?? null);
            echo "</option>
                ";
        }
        // line 72
        echo " 
                ";
        // line 73
        if ((($context["type"] ?? null) == "checkbox")) {
            echo " 
                <option value=\"checkbox\" selected=\"selected\">";
            // line 74
            echo ($context["text_checkbox"] ?? null);
            echo "</option>
                ";
        } else {
            // line 75
            echo " 
                <option value=\"checkbox\">";
            // line 76
            echo ($context["text_checkbox"] ?? null);
            echo "</option>
                ";
        }
        // line 77
        echo " 
                </optgroup>
                <optgroup label=\"";
        // line 79
        echo ($context["text_input"] ?? null);
        echo "\">
                ";
        // line 80
        if ((($context["type"] ?? null) == "text")) {
            echo " 
                <option value=\"text\" selected=\"selected\">";
            // line 81
            echo ($context["text_text"] ?? null);
            echo "</option>
                ";
        } else {
            // line 82
            echo " 
                <option value=\"text\">";
            // line 83
            echo ($context["text_text"] ?? null);
            echo "</option>
                ";
        }
        // line 84
        echo " 
                ";
        // line 85
        if ((($context["type"] ?? null) == "textarea")) {
            echo " 
                <option value=\"textarea\" selected=\"selected\">";
            // line 86
            echo ($context["text_textarea"] ?? null);
            echo "</option>
                ";
        } else {
            // line 87
            echo " 
                <option value=\"textarea\">";
            // line 88
            echo ($context["text_textarea"] ?? null);
            echo "</option>
                ";
        }
        // line 89
        echo " 
                </optgroup>
\t\t\t\t<!--
                <optgroup label=\"";
        // line 92
        echo ($context["text_file"] ?? null);
        echo "\">
                ";
        // line 93
        if ((($context["type"] ?? null) == "file")) {
            echo " 
                <option value=\"file\" selected=\"selected\">";
            // line 94
            echo ($context["text_file"] ?? null);
            echo "</option>
                ";
        } else {
            // line 95
            echo " 
                <option value=\"file\">";
            // line 96
            echo ($context["text_file"] ?? null);
            echo "</option>
                ";
        }
        // line 97
        echo " 
                </optgroup>
\t\t\t\t-->
                <optgroup label=\"";
        // line 100
        echo ($context["text_date"] ?? null);
        echo "\">
                ";
        // line 101
        if ((($context["type"] ?? null) == "date")) {
            echo " 
                <option value=\"date\" selected=\"selected\">";
            // line 102
            echo ($context["text_date"] ?? null);
            echo "</option>
                ";
        } else {
            // line 103
            echo " 
                <option value=\"date\">";
            // line 104
            echo ($context["text_date"] ?? null);
            echo "</option>
                ";
        }
        // line 105
        echo " 
                ";
        // line 106
        if ((($context["type"] ?? null) == "time")) {
            echo " 
                <option value=\"time\" selected=\"selected\">";
            // line 107
            echo ($context["text_time"] ?? null);
            echo "</option>
                ";
        } else {
            // line 108
            echo " 
                <option value=\"time\">";
            // line 109
            echo ($context["text_time"] ?? null);
            echo "</option>
                ";
        }
        // line 110
        echo " 
                ";
        // line 111
        if ((($context["type"] ?? null) == "datetime")) {
            echo " 
                <option value=\"datetime\" selected=\"selected\">";
            // line 112
            echo ($context["text_datetime"] ?? null);
            echo "</option>
                ";
        } else {
            // line 113
            echo " 
                <option value=\"datetime\">";
            // line 114
            echo ($context["text_datetime"] ?? null);
            echo "</option>
                ";
        }
        // line 115
        echo " 
                </optgroup>
              </select>
            </div>
          </div>
          <div class=\"form-group\" id=\"display-value\">
            <label class=\"col-sm-2 control-label\" for=\"input-value\">";
        // line 121
        echo ($context["entry_value"] ?? null);
        echo ":</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"value\" value=\"";
        // line 123
        echo ($context["value"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\" />
            </div>
          </div>
\t\t  <div class=\"form-group\" id=\"display-mask\">
            <label class=\"col-sm-2 control-label\" for=\"input-mask\">";
        // line 127
        echo ($context["entry_mask"] ?? null);
        echo ":</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"mask\" id=\"input-mask\" value=\"";
        // line 129
        echo ($context["mask"] ?? null);
        echo "\" class=\"form-control\"/>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 133
        echo ($context["entry_customer_group"] ?? null);
        echo ":</label>
            <div class=\"col-sm-10\">
              ";
        // line 135
        $context["customer_group_row"] = 0;
        echo " 
              ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            echo " 
              <div class=\"checkbox\">
                <label>
                  ";
            // line 139
            if (twig_in_filter((($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 = $context["customer_group"]) && is_array($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40) || $__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40 instanceof ArrayAccess ? ($__internal_f769f712f3484f00110c86425acea59f5af2752239e2e8596bcb6effeb425b40["customer_group_id"] ?? null) : null), ($context["custom_field_customer_group"] ?? null))) {
                echo " 
                  <input type=\"checkbox\" name=\"custom_field_customer_group[";
                // line 140
                echo ($context["customer_group_row"] ?? null);
                echo "][customer_group_id]\" value=\"";
                echo (($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f = $context["customer_group"]) && is_array($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f) || $__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f instanceof ArrayAccess ? ($__internal_98e944456c0f58b2585e4aa36e3a7e43f4b7c9038088f0f056004af41f4a007f["customer_group_id"] ?? null) : null);
                echo "\" checked=\"checked\" />
                  ";
                // line 141
                echo (($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 = $context["customer_group"]) && is_array($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760) || $__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760 instanceof ArrayAccess ? ($__internal_a06a70691a7ca361709a372174fa669f5ee1c1e4ed302b3a5b61c10c80c02760["name"] ?? null) : null);
                echo " 
                  ";
            } else {
                // line 142
                echo " 
                  <input type=\"checkbox\" name=\"custom_field_customer_group[";
                // line 143
                echo ($context["customer_group_row"] ?? null);
                echo "][customer_group_id]\" value=\"";
                echo (($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce = $context["customer_group"]) && is_array($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce) || $__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce instanceof ArrayAccess ? ($__internal_653499042eb14fd8415489ba6fa87c1e85cff03392e9f57b26d0da09b9be82ce["customer_group_id"] ?? null) : null);
                echo "\" />
                  ";
                // line 144
                echo (($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b = $context["customer_group"]) && is_array($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b) || $__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b instanceof ArrayAccess ? ($__internal_ba9f0a3bb95c082f61c9fbf892a05514d732703d52edc77b51f2e6284135900b["name"] ?? null) : null);
                echo " 
                  ";
            }
            // line 145
            echo " 
                </label>
              </div>
              ";
            // line 148
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            echo " 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo " 
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\">";
        // line 153
        echo ($context["entry_required"] ?? null);
        echo ":</label>
            <div class=\"col-sm-10\">
              ";
        // line 155
        $context["customer_group_row"] = 0;
        echo " 
              ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["customer_groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            echo " 
              <div class=\"checkbox\">
                <label>
                  ";
            // line 159
            if (twig_in_filter((($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c = $context["customer_group"]) && is_array($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c) || $__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c instanceof ArrayAccess ? ($__internal_73db8eef4d2582468dab79a6b09c77ce3b48675a610afd65a1f325b68804a60c["customer_group_id"] ?? null) : null), ($context["custom_field_required"] ?? null))) {
                echo " 
                  <input type=\"checkbox\" name=\"custom_field_customer_group[";
                // line 160
                echo ($context["customer_group_row"] ?? null);
                echo "][required]\" value=\"";
                echo (($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 = $context["customer_group"]) && is_array($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972) || $__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972 instanceof ArrayAccess ? ($__internal_d8ad5934f1874c52fa2ac9a4dfae52038b39b8b03cfc82eeb53de6151d883972["customer_group_id"] ?? null) : null);
                echo "\" checked=\"checked\" />
                  ";
                // line 161
                echo (($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 = $context["customer_group"]) && is_array($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216) || $__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216 instanceof ArrayAccess ? ($__internal_df39c71428eaf37baa1ea2198679e0077f3699bdd31bb5ba10d084710b9da216["name"] ?? null) : null);
                echo " 
                  ";
            } else {
                // line 162
                echo " 
                  <input type=\"checkbox\" name=\"custom_field_customer_group[";
                // line 163
                echo ($context["customer_group_row"] ?? null);
                echo "][required]\" value=\"";
                echo (($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 = $context["customer_group"]) && is_array($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0) || $__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0 instanceof ArrayAccess ? ($__internal_bf0e189d688dc2ad611b50a437a32d3692fb6b8be90d2228617cfa6db44e75c0["customer_group_id"] ?? null) : null);
                echo "\" />
                  ";
                // line 164
                echo (($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c = $context["customer_group"]) && is_array($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c) || $__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c instanceof ArrayAccess ? ($__internal_674c0abf302105af78b0a38907d86c5dd0028bdc3ee5f24bf52771a16487760c["name"] ?? null) : null);
                echo " 
                  ";
            }
            // line 165
            echo " 
                </label>
              </div>
              ";
            // line 168
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            echo " 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo " 
            </div>
          </div>
\t\t  <div class=\"form-group\" id=\"display-shipping\">
            <label class=\"col-sm-2 control-label\">";
        // line 173
        echo ($context["entry_shipping"] ?? null);
        echo ":</label>
            <div class=\"col-sm-10\">
              ";
        // line 175
        $context["customer_group_row"] = 0;
        echo " 
              ";
        // line 176
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["shipping_extensions"] ?? null));
        foreach ($context['_seq'] as $context["shipping_code"] => $context["shipping_name"]) {
            echo " 
              <div class=\"checkbox\">
                <label>
                  ";
            // line 179
            $context["shipping_code2"] = (($context["shipping_code"] . ".") . $context["shipping_code"]);
            echo " ";
            if (twig_in_filter(($context["shipping_code2"] ?? null), ($context["custom_field_shipping_code"] ?? null))) {
                echo " 
                  <input type=\"checkbox\" name=\"custom_field_shipping_code[";
                // line 180
                echo ($context["customer_group_row"] ?? null);
                echo "][shipping_code]\" value=\"";
                echo (($context["shipping_code"] . ".") . $context["shipping_code"]);
                echo "\" checked=\"checked\" />
                  ";
                // line 181
                echo $context["shipping_name"];
                echo " 
                  ";
            } else {
                // line 182
                echo " 
                  <input type=\"checkbox\" name=\"custom_field_shipping_code[";
                // line 183
                echo ($context["customer_group_row"] ?? null);
                echo "][shipping_code]\" value=\"";
                echo (($context["shipping_code"] . ".") . $context["shipping_code"]);
                echo "\" />
                  ";
                // line 184
                echo $context["shipping_name"];
                echo " 
                  ";
            }
            // line 185
            echo " 
                </label>
              </div>
              ";
            // line 188
            $context["customer_group_row"] = (($context["customer_group_row"] ?? null) + 1);
            echo " 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['shipping_code'], $context['shipping_name'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 189
        echo " 
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-status\">";
        // line 193
        echo ($context["entry_status"] ?? null);
        echo ":</label>
            <div class=\"col-sm-10\">
              <select name=\"status\" id=\"input-status\" class=\"form-control\">
                ";
        // line 196
        if (($context["status"] ?? null)) {
            echo " 
                <option value=\"1\" selected=\"selected\">";
            // line 197
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\">";
            // line 198
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        } else {
            // line 199
            echo " 
                <option value=\"1\">";
            // line 200
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                <option value=\"0\" selected=\"selected\">";
            // line 201
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                ";
        }
        // line 202
        echo " 
              </select>
            </div>
          </div>
          <div class=\"form-group\">
            <label class=\"col-sm-2 control-label\" for=\"input-sort-order\"></label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"sort_order\" value=\"";
        // line 209
        echo ($context["sort_order"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_sort_order"] ?? null);
        echo "\" id=\"input-sort-order\" class=\"form-control\" />
            </div>
          </div>
          <table id=\"custom-field-value\" class=\"table table-striped table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-left required\">";
        // line 215
        echo ($context["entry_custom_value"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 216
        echo ($context["entry_sort_order"] ?? null);
        echo "</td>
                <td></td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 221
        $context["custom_field_value_row"] = 0;
        echo " 
              ";
        // line 222
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["custom_field_values"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
            echo " 
              <tr id=\"custom-field-value-row";
            // line 223
            echo ($context["custom_field_value_row"] ?? null);
            echo "\">
                <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[";
            // line 224
            echo ($context["custom_field_value_row"] ?? null);
            echo "][custom_field_value_id]\" value=\"";
            echo (($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f = $context["custom_field_value"]) && is_array($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f) || $__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f instanceof ArrayAccess ? ($__internal_dd839fbfcab68823c49af471c7df7659a500fe72e71b58d6b80d896bdb55e75f["custom_field_value_id"] ?? null) : null);
            echo "\" />
                  ";
            // line 225
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                echo " 
                  <div class=\"input-group\"> <span class=\"input-group-addon\"><img src=\"language/";
                // line 226
                echo (($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc = $context["language"]) && is_array($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc) || $__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc instanceof ArrayAccess ? ($__internal_a7ed47878554bdc32b70e1ba5ccc67d2302196876fbf62b4c853b20cb9e029fc["code"] ?? null) : null);
                echo "/";
                echo (($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 = $context["language"]) && is_array($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55) || $__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55 instanceof ArrayAccess ? ($__internal_e5d7b41e16b744b68da1e9bb49047b8028ced86c782900009b4b4029b83d4b55["code"] ?? null) : null);
                echo ".png\" title=\"";
                echo (($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba = $context["language"]) && is_array($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba) || $__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba instanceof ArrayAccess ? ($__internal_9e93f398968fa0576dce82fd00f280e95c734ad3f84e7816ff09158ae224f5ba["name"] ?? null) : null);
                echo "\" /></span>
                    <input type=\"text\" name=\"custom_field_value[";
                // line 227
                echo ($context["custom_field_value_row"] ?? null);
                echo "][custom_field_value_description][";
                echo (($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 = $context["language"]) && is_array($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78) || $__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78 instanceof ArrayAccess ? ($__internal_0795e3de58b6454b051261c0c2b5be48852e17f25b59d4aeef29fb07c614bd78["language_id"] ?? null) : null);
                echo "][name]\" value=\"";
                echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_description", [], "array", false, true, false, 227), (($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de = $context["language"]) && is_array($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de) || $__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de instanceof ArrayAccess ? ($__internal_fecb0565c93d0b979a95c352ff76e401e0ae0c73bb8d3b443c8c6133e1c190de["language_id"] ?? null) : null), [], "array", true, true, false, 227)) ? ((($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 = (($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd = (($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 = $context["custom_field_value"]) && is_array($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6) || $__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6 instanceof ArrayAccess ? ($__internal_0db9a23306660395861a0528381e0668025e56a8a99f399e9ec23a4b392422d6["custom_field_value_description"] ?? null) : null)) && is_array($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd) || $__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd instanceof ArrayAccess ? ($__internal_17b5b5f9aaeec4b528bfeed02b71f624021d6a52d927f441de2f2204d0e527cd[(($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 = $context["language"]) && is_array($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855) || $__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855 instanceof ArrayAccess ? ($__internal_0a23ad2f11a348e49c87410947e20d5a4e711234ce49927662da5dddac687855["language_id"] ?? null) : null)] ?? null) : null)) && is_array($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828) || $__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828 instanceof ArrayAccess ? ($__internal_87570a635eac7f6e150744bd218085d17aff15d92d9c80a66d3b911e3355b828["name"] ?? null) : null)) : (""));
                echo "\" placeholder=\"";
                echo ($context["entry_custom_value"] ?? null);
                echo "\" class=\"form-control\" />
                  </div>
                  ";
                // line 229
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["error_custom_field_value"] ?? null), ($context["custom_field_value_row"] ?? null), [], "array", false, true, false, 229), (($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b = $context["language"]) && is_array($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b) || $__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b instanceof ArrayAccess ? ($__internal_0228c5445a74540c89ea8a758478d405796357800f8af831a7f7e1e2c0159d9b["language_id"] ?? null) : null), [], "array", true, true, false, 229)) {
                    echo " 
                  <div class=\"text-danger\">";
                    // line 230
                    echo (($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f = (($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 = ($context["error_custom_field_value"] ?? null)) && is_array($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0) || $__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0 instanceof ArrayAccess ? ($__internal_417a1a95b289c75779f33186a6dc0b71d01f257b68beae7dcb9d2d769acca0e0[($context["custom_field_value_row"] ?? null)] ?? null) : null)) && is_array($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f) || $__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f instanceof ArrayAccess ? ($__internal_6fb04c4457ec9ffa7dd6fd2300542be8b961b6e5f7858a80a282f47b43ddae5f[(($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 = $context["language"]) && is_array($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55) || $__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55 instanceof ArrayAccess ? ($__internal_af3439635eb343262861f05093b3dcce5d4dae1e20a47bc25a2eef28135b0d55["language_id"] ?? null) : null)] ?? null) : null);
                    echo "</div>
                  ";
                }
                // line 231
                echo " 
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 232
            echo "</td>
                <td class=\"text-right\"><input type=\"text\" name=\"custom_field_value[";
            // line 233
            echo ($context["custom_field_value_row"] ?? null);
            echo "][sort_order]\" value=\"";
            echo (($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a = $context["custom_field_value"]) && is_array($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a) || $__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a instanceof ArrayAccess ? ($__internal_b16f7904bcaaa7a87404cbf85addc7a8645dff94eef4e8ae7182b86e3638e76a["sort_order"] ?? null) : null);
            echo "\" placeholder=\"";
            echo ($context["entry_sort_order"] ?? null);
            echo "\" class=\"form-control\" /></td>
                <td class=\"text-left\"><button onclick=\"\$('#custom-field-value-row";
            // line 234
            echo ($context["custom_field_value_row"] ?? null);
            echo "').remove();\" data-toggle=\"tooltip\" title=\"";
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>
              </tr>
              ";
            // line 236
            $context["custom_field_value_row"] = (($context["custom_field_value_row"] ?? null) + 1);
            echo " 
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        echo " 
            </tbody>
            <tfoot>
              <tr>
                <td colspan=\"2\"></td>
                <td class=\"text-left\"><button type=\"button\" onclick=\"addCustomFieldValue();\" data-toggle=\"tooltip\" title=\"";
        // line 242
        echo ($context["button_custom_field_value_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-plus-circle\"></i></button></td>
              </tr>
            </tfoot>
          </table>
        </form>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
\$('select[name=\\'location\\']').on('change', function() {
\tif (this.value == 'account') {
\t\t\$('#display-shipping').hide();
\t} else {
\t\t\$('#display-shipping').show();
\t}
});
\$('select[name=\\'location\\']').trigger('change');

\$('select[name=\\'type\\']').on('change', function() {
\tif (this.value == 'select' || this.value == 'radio' || this.value == 'checkbox') {
\t\t\$('#custom-field-value').show();
\t\t\$('#display-value, #display-mask, #display-validation').hide();
\t} else {
\t\t\$('#custom-field-value').hide();
\t\t\$('#display-value, #display-mask, #display-validation').show();
\t}
\t
\tif (this.value == 'date') {
\t\t\$('#display-value > div').html('<div class=\"input-group date\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 270
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
\t} else if (this.value == 'time') {
\t\t\$('#display-value > div').html('<div class=\"input-group time\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 272
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"HH:mm\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
\t} else if (this.value == 'datetime') {
\t\t\$('#display-value > div').html('<div class=\"input-group datetime\"><input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 274
        echo ($context["entry_value"] ?? null);
        echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-value\" class=\"form-control\" /><span class=\"input-group-btn\"><button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button></span></div>');
\t} else if (this.value == 'textarea') {
\t\t\$('#display-value > div').html('<textarea name=\"value\" placeholder=\"";
        // line 276
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\">' + \$('#input-value').val() + '</textarea>');
\t} else {
\t\t\$('#display-value > div').html('<input type=\"text\" name=\"value\" value=\"' + \$('#input-value').val() + '\" placeholder=\"";
        // line 278
        echo ($context["entry_value"] ?? null);
        echo "\" id=\"input-value\" class=\"form-control\" />');
\t}
\t
\t\$('.date').datetimepicker({
\t\tpickTime: false
\t});
\t
\t\$('.time').datetimepicker({
\t\tpickDate: false
\t});\t
\t\t
\t\$('.datetime').datetimepicker({
\t\tpickDate: true,
\t\tpickTime: true
\t});
});

\$('select[name=\\'type\\']').trigger('change');

var custom_field_value_row = ";
        // line 297
        echo ($context["custom_field_value_row"] ?? null);
        echo ";

function addCustomFieldValue() {
\thtml  = '<tr id=\"custom-field-value-row' + custom_field_value_row + '\">';\t
    html += '  <td class=\"text-left\" style=\"width: 70%;\"><input type=\"hidden\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_id]\" value=\"\" />';
\t";
        // line 302
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["languages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
            echo " 
\thtml += '    <div class=\"input-group\">';
\thtml += '      <span class=\"input-group-addon\"><img src=\"language/";
            // line 304
            echo (($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 = $context["language"]) && is_array($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88) || $__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88 instanceof ArrayAccess ? ($__internal_462377748602ccf3a44a10ced4240983cec8df1ad86ab53e582fcddddb98fc88["code"] ?? null) : null);
            echo "/";
            echo (($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 = $context["language"]) && is_array($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758) || $__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758 instanceof ArrayAccess ? ($__internal_be1db6a1ea9fa5c04c40f99df0ec5af053ca391863fc6256c5c4ee249724f758["code"] ?? null) : null);
            echo ".png\" title=\"";
            echo (($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 = $context["language"]) && is_array($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35) || $__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35 instanceof ArrayAccess ? ($__internal_6e6eda1691934a8f5855a3221f5a9f036391304a5cda73a3a2009f2961a84c35["name"] ?? null) : null);
            echo "\" /></span><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][custom_field_value_description][";
            echo (($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b = $context["language"]) && is_array($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b) || $__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b instanceof ArrayAccess ? ($__internal_51c633083c79004f3cb5e9e2b2f3504f650f1561800582801028bcbcf733a06b["language_id"] ?? null) : null);
            echo "][name]\" value=\"\" placeholder=\"";
            echo ($context["entry_custom_value"] ?? null);
            echo "\" class=\"form-control\" />';
    html += '    </div>';
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 306
        echo " 
\thtml += '  </td>';
\thtml += '  <td class=\"text-right\"><input type=\"text\" name=\"custom_field_value[' + custom_field_value_row + '][sort_order]\" value=\"\" placeholder=\"";
        // line 308
        echo ($context["entry_sort_order"] ?? null);
        echo "\" class=\"form-control\" /></td>';
\thtml += '  <td class=\"text-left\"><button type=\"button\" onclick=\"\$(\\'#custom-field-value-row' + custom_field_value_row + '\\').remove();\" data-toggle=\"tooltip\" title=\"";
        // line 309
        echo ($context["button_remove"] ?? null);
        echo "\" class=\"btn btn-danger\"><i class=\"fa fa-minus-circle\"></i></button></td>';
\thtml += '</tr>';\t
\t
\t\$('#custom-field-value tbody').append(html);
\t
\tcustom_field_value_row++;
}
//--></script></div>
";
        // line 317
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/revcheckout_custom_field_form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  927 => 317,  916 => 309,  912 => 308,  908 => 306,  891 => 304,  884 => 302,  876 => 297,  854 => 278,  849 => 276,  844 => 274,  839 => 272,  834 => 270,  803 => 242,  796 => 237,  788 => 236,  781 => 234,  773 => 233,  770 => 232,  763 => 231,  758 => 230,  754 => 229,  743 => 227,  735 => 226,  729 => 225,  723 => 224,  719 => 223,  713 => 222,  709 => 221,  701 => 216,  697 => 215,  686 => 209,  677 => 202,  672 => 201,  668 => 200,  665 => 199,  660 => 198,  656 => 197,  652 => 196,  646 => 193,  640 => 189,  632 => 188,  627 => 185,  622 => 184,  616 => 183,  613 => 182,  608 => 181,  602 => 180,  596 => 179,  588 => 176,  584 => 175,  579 => 173,  573 => 169,  565 => 168,  560 => 165,  555 => 164,  549 => 163,  546 => 162,  541 => 161,  535 => 160,  531 => 159,  523 => 156,  519 => 155,  514 => 153,  508 => 149,  500 => 148,  495 => 145,  490 => 144,  484 => 143,  481 => 142,  476 => 141,  470 => 140,  466 => 139,  458 => 136,  454 => 135,  449 => 133,  442 => 129,  437 => 127,  428 => 123,  423 => 121,  415 => 115,  410 => 114,  407 => 113,  402 => 112,  398 => 111,  395 => 110,  390 => 109,  387 => 108,  382 => 107,  378 => 106,  375 => 105,  370 => 104,  367 => 103,  362 => 102,  358 => 101,  354 => 100,  349 => 97,  344 => 96,  341 => 95,  336 => 94,  332 => 93,  328 => 92,  323 => 89,  318 => 88,  315 => 87,  310 => 86,  306 => 85,  303 => 84,  298 => 83,  295 => 82,  290 => 81,  286 => 80,  282 => 79,  278 => 77,  273 => 76,  270 => 75,  265 => 74,  261 => 73,  258 => 72,  253 => 71,  250 => 70,  245 => 69,  241 => 68,  238 => 67,  233 => 66,  230 => 65,  225 => 64,  221 => 63,  217 => 62,  211 => 59,  204 => 54,  199 => 53,  196 => 52,  191 => 51,  187 => 50,  184 => 49,  179 => 48,  176 => 47,  171 => 46,  167 => 45,  161 => 42,  155 => 38,  148 => 37,  143 => 36,  139 => 35,  130 => 33,  122 => 32,  116 => 31,  111 => 29,  106 => 27,  100 => 24,  95 => 21,  88 => 18,  84 => 17,  77 => 12,  67 => 11,  61 => 10,  56 => 8,  50 => 7,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/revcheckout_custom_field_form.twig", "");
    }
}
