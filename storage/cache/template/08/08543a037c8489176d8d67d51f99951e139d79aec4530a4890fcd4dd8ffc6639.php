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

/* revolution/template/revolution/revpopupphone.twig */
class __TwigTemplate_af1467d80b256d4255ea155792ce6403d115f67f0fc53c10e64a0c4e1e58f825 extends \Twig\Template
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
        echo "<div id=\"popup-order-okno\" class=\"popphone\">
<div class=\"popup-heading\">";
        // line 2
        echo ($context["popupphone_heading_title"] ?? null);
        echo "</div>
<div class=\"popup-center\">
\t<form method=\"post\" enctype=\"multipart/form-data\" id=\"purchase-form\">
\t\t<div class=\"payment-info\">
\t\t\t";
        // line 6
        if ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["revtheme_header_popupphone"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4["firstname"] ?? null) : null)) {
            echo " 
\t\t\t\t<div>
\t\t\t\t\t<label>";
            // line 8
            if (((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["revtheme_header_popupphone"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["firstname"] ?? null) : null) == 2)) {
                echo "<span class=\"required\">*</span>";
            }
            echo ($context["enter_firstname"] ?? null);
            echo "</label>
\t\t\t\t\t<input name=\"firstname\" value=\"";
            // line 9
            echo ($context["firstname"] ?? null);
            echo "\" />
\t\t\t\t</div>
\t\t\t";
        }
        // line 11
        echo " 
\t\t\t";
        // line 12
        if ((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["revtheme_header_popupphone"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["telephone"] ?? null) : null)) {
            echo " 
\t\t\t\t<div>
\t\t\t\t\t<label>";
            // line 14
            if (((($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["revtheme_header_popupphone"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002["telephone"] ?? null) : null) == 2)) {
                echo "<span class=\"required\">*</span>";
            }
            echo ($context["enter_telephone"] ?? null);
            echo "</label>
\t\t\t\t\t<input name=\"telephone\" value=\"";
            // line 15
            echo ($context["telephone"] ?? null);
            echo "\" ";
            if (($context["telephone_mask"] ?? null)) {
                echo " data-mask=\"";
                echo ($context["telephone_mask"] ?? null);
                echo "\" ";
            }
            echo " />
\t\t\t\t</div>
\t\t\t";
        }
        // line 17
        echo " 
\t\t\t";
        // line 18
        if ((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["revtheme_header_popupphone"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4["email"] ?? null) : null)) {
            echo " 
\t\t\t\t<div>
\t\t\t\t\t<label>";
            // line 20
            if (((($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["revtheme_header_popupphone"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666["email"] ?? null) : null) == 2)) {
                echo "<span class=\"required\">*</span>";
            }
            echo ($context["enter_email"] ?? null);
            echo "</label>
\t\t\t\t\t<input name=\"email\" value=\"";
            // line 21
            echo ($context["email"] ?? null);
            echo "\" />
\t\t\t\t</div>
\t\t\t";
        }
        // line 23
        echo " 
\t\t\t";
        // line 24
        if ((($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["revtheme_header_popupphone"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e["comment"] ?? null) : null)) {
            echo " 
\t\t\t\t<div>
\t\t\t\t\t<label>";
            // line 26
            if (((($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 = ($context["revtheme_header_popupphone"] ?? null)) && is_array($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52) || $__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52 instanceof ArrayAccess ? ($__internal_63ad1f9a2bf4db4af64b010785e9665558fdcac0e8db8b5b413ed986c62dbb52["comment"] ?? null) : null) == 2)) {
                echo "<span class=\"required\">*</span>";
            }
            echo ($context["enter_comment"] ?? null);
            echo "</label>
\t\t\t\t\t<textarea name=\"comment\">";
            // line 27
            echo ($context["comment"] ?? null);
            echo "</textarea>
\t\t\t\t</div>
\t\t\t";
        }
        // line 29
        echo " 
\t\t</div>
\t\t";
        // line 31
        if (($context["text_agree_pol_konf"] ?? null)) {
            echo " 
\t\t\t<div class=\"rev_pol_konf pull-right text-right\">
\t\t\t\t<span>";
            // line 33
            echo ($context["text_agree_pol_konf"] ?? null);
            echo "</span>
\t\t\t\t<input type=\"checkbox\" name=\"agree_pol_konf\" checked=\"checked\" />
\t\t\t</div>
\t\t";
        }
        // line 36
        echo " 
\t\t<input type=\"hidden\" value=\"\" name=\"site_url\" />
\t</form>
</div>
<div class=\"popup-footer\">
\t<button onclick=\"\$.magnificPopup.close();\">";
        // line 41
        echo ($context["button_shopping"] ?? null);
        echo "</button>
\t<a id=\"popup-checkout-button\">";
        // line 42
        echo ($context["button_checkout"] ?? null);
        echo "</a>
</div>
<script><!--
\$('input[name=\\'site_url\\']').val(window.location.href);
function masked(element, status) {
\tif (status == true) {
\t\t\$('<div/>')
\t\t.attr({ 'class':'masked' })
\t\t.prependTo(element);
\t\t\$('<div class=\"masked_loading\" />').insertAfter(\$('.masked'));
\t} else {
\t\t\$('.masked').remove();
\t\t\$('.masked_loading').remove();
\t}
}
\$('#popup-checkout-button').on('click', function() {
\tmasked('#popup-order-okno', true);
\t\$.ajax({
\t\ttype: 'post',
\t\turl:  'index.php?route=revolution/revpopupphone/make_order_phone',
\t\tdataType: 'json',
\t\tdata: \$('#purchase-form').serialize(),
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['field']) {
\t\t\t\t\tmasked('#popup-order-okno', false);
\t\t\t\t\t\$('.text-danger').remove();
\t\t\t\t\t\$.each(json['error']['field'], function(i, val) {
\t\t\t\t\t\t\$('[name=\"' + i + '\"]').addClass('error_style').after('<div class=\"text-danger\">' + val + '</div>');
\t\t\t\t\t});
\t\t\t\t}
\t\t\t} else {
\t\t\t\tif (json['output']) {
\t\t\t\t\tmasked('#popup-order-okno', false);
\t\t\t\t\t\$('#popup-checkout-button').remove();
\t\t\t\t\t\$('#popup-order-okno .popup-center').html(json['output']);
\t\t\t\t}
\t\t\t}
\t\t}
\t});
});
//--></script>
</div>";
    }

    public function getTemplateName()
    {
        return "revolution/template/revolution/revpopupphone.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  157 => 41,  150 => 36,  143 => 33,  138 => 31,  134 => 29,  128 => 27,  121 => 26,  116 => 24,  113 => 23,  107 => 21,  100 => 20,  95 => 18,  92 => 17,  80 => 15,  73 => 14,  68 => 12,  65 => 11,  59 => 9,  52 => 8,  47 => 6,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "revolution/template/revolution/revpopupphone.twig", "");
    }
}
