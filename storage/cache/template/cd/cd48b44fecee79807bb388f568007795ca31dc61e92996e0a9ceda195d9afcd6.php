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

/* revolution/template/revolution/checkout/checkout.twig */
class __TwigTemplate_d97906f5c8592cc49bdf31d7a4660169dff7eb1d0bb471861fcb873693f2ff60 extends \Twig\Template
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
\t<ul class=\"breadcrumb\"><li class=\"br_ellipses\" style=\"display: none;\">...</li>
\t\t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["i"] => $context["breadcrumb"]) {
            echo " 
\t\t";
            // line 5
            if ((($context["i"] + 1) < twig_length_filter($this->env, ($context["breadcrumbs"] ?? null)))) {
                echo "<li><a href=\"";
                echo (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["breadcrumb"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["href"] ?? null) : null);
                echo "\">";
                echo (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["breadcrumb"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["text"] ?? null) : null);
                echo "</a></li>";
            } else {
            }
            echo " 
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo " 
\t\t<li><h1 class=\"inbreadcrumb\" itemprop=\"name\">";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "</h1></li>
\t</ul>
\t<div class=\"error\"></div>
\t<div class=\"row\">
\t\t";
        // line 11
        echo ($context["column_left"] ?? null);
        echo " 
\t\t";
        // line 12
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            echo " 
\t\t";
            // line 13
            $context["class"] = "col-sm-6";
            echo " 
\t\t";
        } elseif ((        // line 14
($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            echo " 
\t\t";
            // line 15
            $context["class"] = "col-sm-9";
            echo " 
\t\t";
        } else {
            // line 16
            echo " 
\t\t";
            // line 17
            $context["class"] = "col-sm-12";
            echo " 
\t\t";
        }
        // line 18
        echo " 
\t\t<div id=\"content\" class=\"";
        // line 19
        echo ($context["class"] ?? null);
        echo "\">
\t\t\t<div id=\"revcheckout\" class=\"row\">
\t\t\t\t<div class=\"revcart_column_left col-sm-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-12 register_block\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-sm-12 user_block\">
\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t<h3 style=\"display: inline-block;\" class=\"panel-title\">";
        // line 28
        echo ($context["text_revcheckout_user_details"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t\t";
        // line 29
        if (( !($context["logged"] ?? null) && (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["settings"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["revcheckout_login"] ?? null) : null))) {
            echo "<a style=\"float: right;\" onclick=\"get_revpopup_login();\">";
            echo ($context["text_revcheckout_returning_customer"] ?? null);
            echo "</a>";
        }
        echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 32
        echo ($context["user"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"shipping-method\">
\t\t\t\t\t\t\t\t\t";
        // line 38
        echo ($context["shipping_method"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"address_metod\">
\t\t\t\t\t\t\t\t\t";
        // line 42
        echo ($context["address"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"payment-method-block col-sm-12\">
\t\t\t\t\t\t\t\t\t<div class=\"panel panel-default\">
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-heading\">
\t\t\t\t\t\t\t\t\t\t\t <h3 class=\"panel-title\">";
        // line 48
        echo ($context["text_revcheckout_payment_method"] ?? null);
        echo "</h3>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t\t\t";
        // line 51
        echo ($context["payment_method"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"revcart_column_right col-sm-12\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t<div class=\"panel panel-default rev_cart\">
\t\t\t\t\t\t\t\t<div id=\"revcart_upd\">
\t\t\t\t\t\t\t\t\t";
        // line 64
        echo ($context["cart"] ?? null);
        echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div id=\"confirm\">
\t\t\t\t\t\t\t\t\t<div class=\"total_checkout col-md-12 text-right\"><span>";
        // line 67
        echo ($context["text_total_revcheckout"] ?? null);
        echo "</span> <span class=\"total_html\"></span></div>
\t\t\t\t\t\t\t\t\t";
        // line 68
        if (($context["text_agree"] ?? null)) {
            echo " 
\t\t\t\t\t\t\t\t\t\t<div class=\"rev_pol_konf clearfix\">
\t\t\t\t\t\t\t\t\t\t   <div class=\"pull-right\">";
            // line 70
            echo ($context["text_agree"] ?? null);
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 71
            if (($context["agree"] ?? null)) {
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" checked=\"checked\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            } else {
                // line 73
                echo " 
\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" name=\"agree\" value=\"1\" />
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 75
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        }
        // line 79
        echo " 
\t\t\t\t\t\t\t\t\t<div class=\"pull-right payment clearfix\">
\t\t\t\t\t\t\t\t\t\t<input type=\"button\" class=\"btn btn-danger\" id=\"button_checkout\" data-loading-text=\"";
        // line 81
        echo ($context["text_revcheckout_order"] ?? null);
        echo "...\" value=\"";
        echo ($context["text_revcheckout_order"] ?? null);
        echo "\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-sm-12\">
\t\t\t\t\t\t\t";
        // line 88
        if ((twig_length_filter($this->env, ($context["descript"] ?? null)) > 30)) {
            echo " 
\t\t\t\t\t\t\t\t<div class=\"panel-body\">
\t\t\t\t\t\t\t\t\t";
            // line 90
            echo ($context["descript"] ?? null);
            echo " 
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        // line 92
        echo " 
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t\t
\t\t";
        // line 98
        echo ($context["content_bottom"] ?? null);
        echo " 
\t\t";
        // line 99
        echo ($context["column_right"] ?? null);
        echo " 
\t</div>
</div>
<script><!--
\t\$('.show-register-form input').on('change', function() {
\t\t\$('.register-form').toggle();
\t});
\tupdate_checkout();
\tvar error = true;
\t\$('body').on('change', 'input[name=\\'shipping_method\\'], input[name=\\'payment_method\\'], .payment_address input[name=\\'city\\'], .payment_address input[name=\\'postcode\\'], input[name=\\'address\\'], select[name=\\'address_id\\']', function() {
\t\tupdate_checkout();
\t});
\t\$('body').on('click', '.add_to_cart', function() {
\t\toption = \$(this).parent().parent().find('.option').children().size();
\t\toption_checked = \$(this).parent().parent().find('.option input:checked, .option select').size();
\t\tif(!option || option_checked) {
\t\t\tupdate_checkout();
\t\t}
\t});
\t\$('body').on('click', '#button_checkout', function validate() {
\t\t";
        // line 119
        if ((isset($context["custom_fields"]) || array_key_exists("custom_fields", $context))) {
            echo " 
\t\t\t";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                // line 121
                echo "\t\t\t\t";
                if ((((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = $context["custom_field"]) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["type"] ?? null) : null) == "text") || ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = $context["custom_field"]) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["type"] ?? null) : null) == "textarea"))) {
                    echo " 
\t\t\t\t\tcustomval = \$('#input-custom-field";
                    // line 122
                    echo (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = $context["custom_field"]) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["custom_field_id"] ?? null) : null);
                    echo "').val();
\t\t\t\t\tif (customval != '') {
\t\t\t\t\t\tcustomval2 = '";
                    // line 124
                    echo (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = $context["custom_field"]) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["name"] ?? null) : null);
                    echo ": '+customval;
\t\t\t\t\t\t\$('#input-custom-field";
                    // line 125
                    echo (($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = $context["custom_field"]) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["custom_field_id"] ?? null) : null);
                    echo "').val(customval2);
\t\t\t\t\t}
\t\t\t\t";
                }
                // line 127
                echo " 
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 128
            echo " 
\t\t";
        }
        // line 129
        echo " 
\t\tvar data = \$('#revcheckout input[type=\\'text\\'], #revcheckout input[type=\\'tel\\'], #revcheckout input[type=\\'email\\'], #revcheckout input[type=\\'date\\'], #revcheckout input[type=\\'datetime-local\\'], #revcheckout input[type=\\'time\\'], #revcheckout input[type=\\'password\\'], #revcheckout input[type=\\'hidden\\'], #revcheckout input[type=\\'checkbox\\']:checked, #revcheckout input[type=\\'radio\\']:checked, #revcheckout textarea, #revcheckout select, #confirm input[type=\\'checkbox\\']:checked').serialize();
\t\tdata += '&_shipping_method='+ jQuery('#revcheckout input[name=\\'shipping_method\\']:checked').prop('title') + '&_payment_method=' + jQuery('#revcheckout input[name=\\'payment_method\\']:checked').prop('title');
\t\t
\t\t\$.ajax({
\t\t\turl: 'index.php?route=revolution/revcheckout/validate',
\t\t\ttype: 'post',
\t\t\tdata: data,
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button_checkout').button('loading');
\t\t\t},  
\t\t\tcomplete: function() {
\t\t\t\t\$('#button_checkout').button('reset');
\t\t\t},          
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.error > .alert').remove();
\t\t\t\t\$('#revcheckout .text-danger').remove();
\t\t\t\t\$('#confirm .text-danger').remove();
\t\t\t\tif (json['validate_login']) {
\t\t\t\t\tvalidate();
\t\t\t\t}
\t\t\t\tif (json['error']) {
\t\t\t\t\t
\t\t\t\t\t";
        // line 153
        if ((isset($context["custom_fields"]) || array_key_exists("custom_fields", $context))) {
            echo " 
\t\t\t\t\t\t";
            // line 154
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["custom_fields"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
                echo " 
\t\t\t\t\t\t\t";
                // line 155
                if ((((($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 = $context["custom_field"]) && is_array($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136) || $__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136 instanceof ArrayAccess ? ($__internal_f10a4cc339617934220127f034125576ed229e948660ebac906a15846d52f136["type"] ?? null) : null) == "text") || ((($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 = $context["custom_field"]) && is_array($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386) || $__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386 instanceof ArrayAccess ? ($__internal_887a873a4dc3cf8bd4f99c487b4c7727999c350cc3a772414714e49a195e4386["type"] ?? null) : null) == "textarea"))) {
                    echo " 
\t\t\t\t\t\t\t\tcustomstr = \$('#input-custom-field";
                    // line 156
                    echo (($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 = $context["custom_field"]) && is_array($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9) || $__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9 instanceof ArrayAccess ? ($__internal_d527c24a729d38501d770b40a0d25e1ce8a7f0bff897cc4f8f449ba71fcff3d9["custom_field_id"] ?? null) : null);
                    echo "').val();
\t\t\t\t\t\t\t\tif (typeof(customstr) != 'undefined') {
\t\t\t\t\t\t\t\t\tnewcustomstr = customstr.replace('";
                    // line 158
                    echo (($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae = $context["custom_field"]) && is_array($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae) || $__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae instanceof ArrayAccess ? ($__internal_f6dde3a1020453fdf35e718e94f93ce8eb8803b28cc77a665308e14bbe8572ae["name"] ?? null) : null);
                    echo ": ', '');
\t\t\t\t\t\t\t\t\t\$('#input-custom-field";
                    // line 159
                    echo (($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f = $context["custom_field"]) && is_array($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f) || $__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f instanceof ArrayAccess ? ($__internal_25c0fab8152b8dd6b90603159c0f2e8a936a09ab76edb5e4d7bc95d9a8d2dc8f["custom_field_id"] ?? null) : null);
                    echo "').val(newcustomstr);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t";
                }
                // line 161
                echo " 
\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 163
            echo "\t\t\t\t\t";
        }
        echo " \t
\t\t\t\t\terror = true;
\t\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\t\$('.error').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t\t\$('html, body').animate({ scrollTop: \$('.error')}, 250);
\t\t\t\t\t}
\t\t\t\t\tfor (i in json['error']) {
\t\t\t\t\t\t \$('.error').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'][i] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}
\t\t\t\t\t\$('html, body').animate({ scrollTop: \$('.error')}, 250);
\t\t\t\t}
\t\t\t\tif (json['success']) {
\t\t\t\t\t\$('.payment').html(json['success']);
\t\t\t\t\t\tif (!\$('.payment h2, .payment p, .payment input[type=\\'radio\\'], .payment input[type=\\'checkbox\\'], .payment select').length) {
\t\t\t\t\t\t\t\$('.payment').css('display', 'none');
\t\t\t\t\t\t\tmasked('#revcart_upd', true);
\t\t\t\t\t\t\t\$('.payment #button-confirm, .payment input[type=\\'button\\'], .payment input[type=\\'submit\\'], .payment button, .payment a, .payment .btn-primary').click();
\t\t\t\t\t\t\tif(\$('.payment a').length) {
\t\t\t\t\t\t\t\t\$('.payment a')[0].click();
\t\t\t\t\t\t\t}
\t\t\t\t\t\t}
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t}); 
\t});  
\t\$('body').on('click', '#button-coupon', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/total/coupon/coupon',
\t\t\ttype: 'post',
\t\t\tdata: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t//\$('#button-coupon').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t//\$('#button-coupon').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('.error').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tupdate_checkout();
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t\$('body').on('click', '#button-reward', function() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=extension/total/reward/reward',
\t\t\ttype: 'post',
\t\t\tdata: 'reward=' + encodeURIComponent(\$('input[name=\\'reward\\']').val()),
\t\t\tdataType: 'json',
\t\t\tbeforeSend: function() {
\t\t\t\t//\$('#button-reward').button('loading');
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t//\$('#button-reward').button('reset');
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\t\$('.alert').remove();
\t\t\t\tif (json['error']) {
\t\t\t\t\t\$('.error').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t\tif (json['redirect']) {
\t\t\t\t\tupdate_checkout();
\t\t\t\t}
\t\t\t}
\t\t});
\t});
\t\$('body').on('click', '#button-voucher', function() {
\t  \$.ajax({
\t\turl: 'index.php?route=extension/total/voucher/voucher',
\t\ttype: 'post',
\t\tdata: 'voucher=' + encodeURIComponent(\$('input[name=\\'voucher\\']').val()),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t//\$('#button-voucher').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t//\$('#button-voucher').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert').remove();
\t\t\tif (json['error']) {
\t\t\t\t\$('.error').prepend('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}
\t\t\tif (json['redirect']) {
\t\t\t\tupdate_checkout();
\t\t\t}
\t\t}
\t  });
\t});
\tfunction cart_update(key, quantity) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=revolution/revcheckout/cart_edit',
\t\t\ttype: 'post',
\t\t\tdata: 'quantity['+key+']='+quantity,
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\t\$('#top3 #cart').load('index.php?route=common/cart/info #cart > *');
\t\t\t\t\$('#top2 #cart').load('index.php?route=common/cart/info #cart > *');
\t\t\t\tupdate_checkout();
\t\t\t}
\t\t});
\t}
\tfunction update_user() {
\t\tvar data = \$('#revcheckout input[type=\\'radio\\']:checked, #revcheckout input[type=\\'checkbox\\']:checked, #revcheckout select, #revcheckout input[type=\\'text\\'], #revcheckout textarea, #revcheckout input[type=\\'email\\'], #revcheckout input[type=\\'tel\\']').serialize();
\t\t\$.ajax({
\t\t\turl: 'index.php?route=revolution/revcheckout/user&ajax=1',
\t\t\ttype: 'post',
\t\t\tdata: data,
\t\t\tdataType: 'html',
\t\t\tbeforeSend: function() {
\t\t\t\tmasked('#revcart_upd', false);
\t\t\t},
\t\t\tsuccess: function(html) {
\t\t\t\t\$('.user_block .panel-body').html(html);
\t\t\t\tmasked('#revcart_upd', false);
\t\t\t\tupdate_checkout();
\t\t\t}
\t\t});
\t}
\tfunction update_checkout() {
\t\tsetTimeout(function() {
\t\t\tvar data = \$('#revcheckout input[type=\\'radio\\']:checked, #revcheckout input[type=\\'checkbox\\']:checked, #revcheckout select, #revcheckout input[type=\\'text\\'], #revcheckout textarea, #revcheckout input[type=\\'email\\'], #revcheckout input[type=\\'tel\\']').serialize();
\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=revolution/revcheckout/address&ajax=1',
\t\t\t\ttype: 'post',
\t\t\t\tdata: data,
\t\t\t\tdataType: 'html',
\t\t\t\tbeforeSend: function() {
\t\t\t\t\tmasked('#revcart_upd', true);
\t\t\t\t\t\$('.error > .alert').remove();
\t\t\t\t\t\$('#revcheckout .text-danger').remove();
\t\t\t\t\t\$('#confirm .text-danger').remove();
\t\t\t\t},
\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\$('.address_metod').html(html);
\t\t\t\t\tupdate_shipping();
\t\t\t\t}
\t\t\t});
\t\t}, 350);
\t}
\tfunction update_shipping() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=revolution/revcheckout/shipping_method&ajax=1',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('.shipping-method').html(html);
\t\t\t\tif(!\$('.shipping-method input:checked').length) {
\t\t\t\t\t\$('.shipping-method input:first').attr('checked', true).prop('checked', true);
\t\t\t\t}
\t\t\t\t/*
\t\t\t\tif (\$('.shipping-method input:checked').val() == 'pickup.pickup') {
\t\t\t\t\t\$('.address_metod').hide();
\t\t\t\t} else {
\t\t\t\t\t\$('.address_metod').show();
\t\t\t\t}
\t\t\t\t*/
\t\t\t\t\$('select[name=\\'country_id\\']').trigger('change');
\t\t\t\tupdate_payment();
\t\t\t}
\t\t});
\t}
\tfunction update_payment() {
\t\tvar data = \$('#revcheckout input[name=\\'shipping_method\\']:checked').serialize();
\t\t\$.ajax({
\t\t\turl: 'index.php?route=revolution/revcheckout/payment_method&ajax=1',
\t\t\ttype: 'post',
\t\t\tdata: data,
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('.payment_method').html(html);
\t\t\t\tif(!\$('.payment_method input:checked').length) {
\t\t\t\t\t\$('.payment_method input:first').attr('checked', true).prop('checked', true);
\t\t\t\t}
\t\t\t\tupdate_cart();
\t\t\t}
\t\t});
\t}
\tfunction update_cart() {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=revolution/revcheckout/korzina&ajax=1',
\t\t\tdataType: 'html',
\t\t\tsuccess: function(html) {
\t\t\t\t\$('#revcart_upd').html(html);
\t\t\t\t\$('.total_checkout span.total_html').html(\$('.total_table td:last').html());
\t\t\t\tmasked('#revcart_upd', false);
\t\t\t}
\t\t});
\t}
\t(function(){
\t\tvar a = document.querySelector('.revcart_column_right'), b = null, P = 0;
\t\twindow.addEventListener('scroll', Ascroll, false);
\t\tdocument.body.addEventListener('scroll', Ascroll, false);
\t\tfunction Ascroll() {
\t\t  if (b == null) {
\t\t\tvar Sa = getComputedStyle(a, ''), s = '';
\t\t\tfor (var i = 0; i < Sa.length; i++) {
\t\t\t  if (Sa[i].indexOf('overflow') == 0 || Sa[i].indexOf('padding') == 0 || Sa[i].indexOf('border') == 0 || Sa[i].indexOf('outline') == 0 || Sa[i].indexOf('box-shadow') == 0 || Sa[i].indexOf('background') == 0) {
\t\t\t\ts += Sa[i] + ': ' +Sa.getPropertyValue(Sa[i]) + '; '
\t\t\t  }
\t\t\t}
\t\t\tb = document.createElement('div');
\t\t\tb.style.cssText = s + ' box-sizing: border-box; width: ' + a.offsetWidth + 'px; z-index: 10;';
\t\t\ta.insertBefore(b, a.firstChild);
\t\t\tvar l = a.childNodes.length;
\t\t\tfor (var i = 1; i < l; i++) {
\t\t\t  b.appendChild(a.childNodes[1]);
\t\t\t}
\t\t\ta.style.height = b.getBoundingClientRect().height + 'px';
\t\t\ta.style.padding = '0';
\t\t\ta.style.border = '0';
\t\t  }
\t\t  top3 = 0;
\t\t  ";
        // line 383
        if (($context["sticky"] ?? null)) {
            echo " 
\t\t\tif (\$(window).width() > 768) {
\t\t\t\ttop3 = \$('#top3').outerHeight();
\t\t\t}
\t\t  ";
        }
        // line 387
        echo " 
\t\t  var Ra = a.getBoundingClientRect(),
\t\t\t  R = Math.round(Ra.top + b.getBoundingClientRect().height - document.querySelector('.main-content').getBoundingClientRect().bottom);
\t\t  if ((Ra.top - P) <= top3 + 20) {
\t\t\tif ((Ra.top - P) <= R + top3 + 40) {
\t\t\t  b.className = 'stop';
\t\t\t  b.style.top = - R - 20 +'px';
\t\t\t} else {
\t\t\t  b.className = 'sticky';
\t\t\t  b.style.top = P + top3 + 20 + 'px';
\t\t\t}
\t\t  } else {
\t\t\tb.className = '';
\t\t\tb.style.top = '';
\t\t  }
\t\t  window.addEventListener('resize', function() {
\t\t\ta.children[0].style.width = getComputedStyle(a, '').width
\t\t  }, false);
\t\t}
\t})()
--></script>
";
        // line 408
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "revolution/template/revolution/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  634 => 408,  611 => 387,  603 => 383,  379 => 163,  372 => 161,  366 => 159,  362 => 158,  357 => 156,  353 => 155,  347 => 154,  343 => 153,  317 => 129,  313 => 128,  306 => 127,  300 => 125,  296 => 124,  291 => 122,  286 => 121,  282 => 120,  278 => 119,  255 => 99,  251 => 98,  243 => 92,  237 => 90,  232 => 88,  220 => 81,  216 => 79,  209 => 75,  204 => 73,  198 => 71,  194 => 70,  189 => 68,  185 => 67,  179 => 64,  163 => 51,  157 => 48,  148 => 42,  141 => 38,  132 => 32,  122 => 29,  118 => 28,  106 => 19,  103 => 18,  98 => 17,  95 => 16,  90 => 15,  86 => 14,  82 => 13,  78 => 12,  74 => 11,  67 => 7,  64 => 6,  49 => 5,  43 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/revolution/checkout/checkout.twig", "");
    }
}
